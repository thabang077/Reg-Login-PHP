<!-- <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Andile Ramakgale Reg&Log Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
     integrity="sha384-WskhaSGFgHYWDcbwN70/dfyBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
</head>
<body>

</body>
</html> -->

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style type="text/css">
      #alert,
      #register-box,
      #forgot-box{
        display: none;
      }
    </style>
  </head>
  <body class="bg-dark">
    <div class="container mt-4">
      <div class="row">
        <div class="col-lg-4 offset-lg-4" id="alert">
          <div class="alert alert-success">
            <strong id="result"></strong>
          </div>
      </div>
    </div>

    <!-- login form -->
      <div class="row">
        <div class="col-lg-4 offset-lg-4 bg-light rounded" id="login-box">
          <h2 class="text =-center mt-2">Login</h2>
          <form action="action.php" method="POST" role="form" class="p-2" id="login-frm">
            <div class="form-group">
              <input type="text" name="username" class="form-control" placeholder="username" required minlength="2">
            </div>
            <div class="form-group">
              <input type="password" name="password" class="form-control" placeholder="password" required minlength="6">
            </div>
            <div class="form-group">
              <div class="custom-control custom-checkbox">
              <input type="checkbox" name="rem" class="custom-control-input" id="customCheck">
              <label for="customCheck" class="custom-control-label">Remember Me</label>
              <a href="#" id="forgot-btn" class="float-right">Forgot Password?</a>
            </div>
          </div>
          <div class="form-group">
              <input type="submit" name="login" id="login" value="Login" class="btn btn-primary btn-block">
            </div>
            <div class="form-group">
            <p class="text-center">New User <a href="#" id="register-btn">Register Here</a></p>
          </div>
          </form>
        </div>
      </div>


      <!-- Registration form -->

      <div class="row">
        <div class="col-lg-4 offset-lg-4 bg-light rounded" id="register-box">
          <h2 class="text =-center mt-2">Register</h2>
          <form action="action.php" method="POST" role="form" class="p-2" id="register-frm">
            <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Full Name" required minlength="3">
            </div>
            <div class="form-group">
              <input type="text" name="uname" class="form-control"  placeholder="Username" required minlength="2">
            </div>
            <div class="form-group">
              <input type="email" name="email" class="form-control" placeholder="E-Mail" required>
            </div>
            <div class="form-group">
              <input type="password" name="password" id="pass" class="form-control" placeholder="Password" required minlength="6">
            </div>
            <div class="form-group">
              <input type="password" name="cpassword" id="cpass" class="form-control" placeholder="Confirm Password" required minlength="6">
            </div>
            <div class="form-group">
              <div class="custom-control custom-checkbox">
              <input type="checkbox" name="rem" class="custom-control-input" id="customCheck2">
              <label for="customCheck2" class="custom-control-label">I agree to the <a href="#" >terms & conditions.</a></label>
            </div>
          </div>
          <div class="form-group">
              <input type="submit" name="register" id="register" value="Register" class="btn btn-primary btn-block ">
            </div>
            <div class="form-group">
            <p class="text-center">Already Registered<a href="#" id="login-btn">Login Here</a></p>
          </div>
          </form>
        </div>
      </div>
        <!-- Forgot password -->
      <div class="row">
        <div class="col-lg-4 offset-lg-4 bg-light rounded" id="forgot-box">
          <h2 class="text =-center mt-2">Reset Password</h2>
          <form action="action.php" method="POST" role="form" class="p-2" id="forgot-frm">
            <div class="form-group">
              <small class="text-muted">
                To reset your password, enter the email address and we will send reset password
                instructions on your email.
              </small>
            </div>
            <div class="form-group">
            <input type="email" name="femail" class="form-control" placeholder="E-Mail" required>
            </div>
            <div class="form-group btn btn-primary btn-block ">
            <input type="submit" name="forgot" id="forgot" value="Reset" class="btn btn-primary btn-block ">
            </div>
            <div class="form-group "> <!-- text-center -->
            <a href="#" id="back-btn">Back</a>
          </div>
          </form>
        </div>
      </div>

  </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/jquery.validate.min.js" integrity="sha512-KFHXdr2oObHKI9w4Hv1XPKc898mE4kgYx58oqsc/JqqdLMDI4YjOLzom+EMlW8HFUd0QfjfAvxSL6sEq/a42fQ==" crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>
    <script type="text/javascript">
      $(document).ready(function() {
        $("#register-btn").click(function(){
          $("#register-box").show();
          $("#login-box").hide();

        });

        $("#login-btn").click(function(){
          $("#register-box").hide();
          $("#login-box").show();

        });

        $("#forgot-btn").click(function(){
          $("#login-box").hide();
          $("#forgot-box").show();


        });


        $("#back-btn").click(function(){
          $("#login-box").show();
          $("#forgot-box").hide();


        });

        // Validation using Jquery
        $("#login-frm").validate();
        $("#register-frm").validate({
          rules:{
            cpass:{
              equalTo:"#pass",
            }
          }
        });

        $("#forgot-frm").validate();

        //Submit form without page refresh with Ajax
        $("#register").click(function(e){
          if(document.getElementById('register-frm').checkValidity()){
          e.preventDefault();
          $.ajax({
            url:'action.php',
            method:'post',
            data:$("#register-frm").serialize()+'&action=register',
            success: function(response){
              // Display responses from the server
              $("#alert").show();
              $("#result").html(response);
            }
          });
        }
        return true;
      });

      $("#login").click(function(e){
          if(document.getElementById('login-frm').checkValidity()){
          e.preventDefault();
          $.ajax({
            url:'action.php',
            method:'post',
            data:$("#login-frm").serialize()+'&action=login',
            success: function(response){
              // Display responses from the server
              $("#alert").show();
              $("#result").html(response);
            }
          });
        }
        return true;
      });

      $("#forgot").click(function(e){
          if(document.getElementById('forgot-frm').checkValidity()){
          e.preventDefault();
          $.ajax({
            url:'action.php',
            method:'post',
            data:$("#forgot-frm").serialize()+'&action=forgot',
            success: function(response){
              // Display responses from  the server
              $("#alert").show();
              $("#result").html(response);
            }
          });
        }
        return true;
      });

      });
    </script>

  </body>
</html>