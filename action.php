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



// require 'config.php';
// if(isset ($_POST['action']) && $_POST['action'] == 'register'){

// $name = "";
// $uname = "";
// $email = "";
// $pass = "";
// $cpass = "";
// $created = "";

// $name_error = "";
// $uname_error = "";
// $email_error = "";
// $pass_error = "";
// $cpass_error = "";
// $created_error = "";

// $error = false;

// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     $name=($_POST['name']);
//     $uname=($_POST['uname']);
//     $email=($_POST['email']);
//     $pass=($_POST['pass']);
//     $cpass=($_POST['cpass']);
//     $created=($_POST['name']);

// }

// } 

    // print_r($_POST);
// require 'config.php';
// if(isset ($_POST['action']) && $_POST['action'] == 'register'){
    // Grap input from the form
    
    // $name=check_input($_POST['name']);
    // $uname=check_input($_POST['uname']);
    // $email=check_input($_POST['email']);
    // $pass=check_input($_POST['pass']);
    // $cpass=check_input($_POST['cpass']);
    // hash password
    // $pass=sha1($pass); 
    // $cpass=sha1($cpass);
    // $created=date('y-m-d');

    // if($pass!=$cpass){
    //     echo 'Password did not match:';
    //     exit();
    // }
    // else{
    //     $sql=$conn->prepare("SELECT username,email FROM users WHERE username=? OR email=?");
    //     $sql->bind_param("ss",$uname, $email);
    //     $sql->execute();
    //     $result=$sql->get_result();
    //     $row=$result->fetch_array(MYSQLI_ASSOC);

    //     if($row['username']==$uname){
    //         echo 'username not available';
    //     }
    //     elseif($row['email']==$email){
    //         echo 'Email already exist';
    //     }
    //     else{
    //         $stmt=$conn->prepare("INSERT INTO users (name,email,pass,created) VALUES (?,?,?,?");
    //         $stmt->bind_param("ssss",$name,$email,$pass,$created);
    //         if($stmt->execute()){
    //             echo 'registered successfully. Login';
    //         }
    //     else{
    //             echo 'Something went wrong. Please try again';
    //         }
    //         }
    //         }
    //         }

// Prevent attack from SQL injections
// function check_input($data){
//     $data=trim($data);
//     $data=stripslashes($data);
//     $data=htmlspecialchars($data);
//     return $data;
// }

?>