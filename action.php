 <?php

require_once 'config.php';

session_start();
$error=[];

if($_SERVER['REQUEST_METHOD'] === 'POST'&& isset($_POST['register'])){
    
    $email=filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $name=$_POST['name'];
    $uname=$_POST['uname'];
    $pass=$_POST['pass'];
    // $cpass=$_POST['cpass'];
    $created = date('Y-m-d');


    // Sign up
    $sql=$conn->prepare('SELECT * FROM users1 WHERE email=:email');
    $stmt->execute(['email'=>$email]); 
    if($stmt->fetch()){
        $errors['users_exist']='Email is already registered';
    }

    if(!empty($errors)){
        $_SESSION['errors']=$errors;
        header('Location: index.php');
        exit();
    }

    $hashedPassword = password_hash($pass, PASSWORD_BCRYPT);
    $sql=$conn->prepare("INSERT INTO users1 (email, pass,name,uname,created) VALUES (:email, :pass, :name, :uname, :created)");
    $stmt->execute(['email' => $email, 'pass' => $hashedPassword, 'name'=>$name, 'uname'=>$uname,'created'=>$created]);

    header('Location: index.php');
    exit();
}


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['register'])) {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $password = $_POST['pass'];

};

// LOGIN

$sql=$conn->prepare("SELECT * FROM users1 WHERE email = :email");
$stmt->execute(['email' => $email]);
$user = $stmt->fetch();

if ($user && password_verify($pass, $user['pass'])) {
    $_SESSION['user'] = [
        'id' => $user['id'],
        'email' => $user['email'],
        'name'=>$user['name'],
        'created_at' => $user['created_at']
    ];

    header('Location: home.php');
    exit();
} else {
    $errors['login'] = 'Invalid email or pass';
    $_SESSION['errors'] = $errors;
    header('Location: index.php');
    exit();
}
