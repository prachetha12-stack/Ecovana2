<?php
include "db.php";
$message="";
if(isset($_POST['login'])){
    $emailmobile=$_POST['emailmobile'];
    $password=$_POST['password'];
    $role=$_POST['role'];
    $sql="SELECT * FROM users1 WHERE (email='$emailmobile' OR mobile='$emailmobile') AND password='$password' AND role='$role'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        $message="Login successfully";
    }
    else{
        $message="User not registered. Please Signup";
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <style>
            body{
                margin: 0;
                font-family: Arial, Helvetica, sans-serif;
                background-image: url("loginbg.jpg");
                background-size: cover;
                background-position: center;
                height: 100vh;
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .login-box{
                width: 350px;
                padding: 40px;
                background: rgba(255,255,255,0.3);
                backdrop-filter: blur(10px);
                border-radius: 15px;
                border: 1px solid rgba(255,255,255,0.5);
                text-align: center;
            }
            .toggle{
                display: flex;
                margin-bottom: 30px;
            }
            .toggle button{
                flex: 1;
                padding: 10px;
                border: none;
                cursor: pointer;
                background: #37ad00;
            }
            .active{
                background: green;
                color: white;
            }
            input{
                width: 100%;
                padding: 12px;
                margin: 10px 0;
                border-radius: 6px;
                border: 1px solid #ccc;
            }
            .login-btn{
                width: 100%;
                padding: 12px;
                background: green;
                color: white;
                border: none;
                border-radius: 6px;
            }
            .signup-btn{
                width: 100%;
                padding: 12px;
                margin-top: 10px;
                border: 1px solid green;
                background: white;
                color: green;
                border-radius: 6px;
            }
            a{
                display: block;
                margin-top: 10px;
                text-decoration: none;
            }
            .msg{
                color: red;
                margin-top: 10px;
            }
            .login-btn:hover{
                background: linear-gradient(45deg, #21b803,#00c6ff);
                box-shadow: 0 10px 25px rgba(0,114,255,0.6);
                color: #e0f7ff;
                border-color: #00f0ff;
            }
        </style>
        <script>
            function setRole(role){
                document.getElementById("role").value=role;
                document.getElementById("adminBtn").classList.remove("active");
                document.getElementById("userBtn").classList.remove("active");
                if(role=="admin"){
                    document.getElementById("adminBtn").classList.add("active");
                }else{
                   document.getElementById("userBtn").classList.add("active"); 
                }
            }
        </script>
    </head>
    <body>
        <div class="login-box">
            <div class="toggle">
                <button id="adminBtn" onclick="setRole('admin')">Admin Login</button>
                <button id="userBtn" onclick="setRole('user')">User Login</button>
            </div>
            <form method="post" action="">
            <input type="hidden" id="role" name="role" value="users">
            <input type="email"  name="emailmobile" placeholder="Email or Mobile Number" required>
            <input type="password"  name="password" placeholder="Enter your password" required>
            <input type="button" name="login" class="login-btn" value="Sign In">
            <button type="button"  class="signup-btn" onclick="window.location='signup.php'">Sign Up</button>
            <a href="#">Forgot Password?</a>
            <p class="msg"><?php echo $message;?></p>
</form>
        </div>
    </body>
    </html>
