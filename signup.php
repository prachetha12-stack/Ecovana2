<?php
include "db.php";
$message="";
   if(isset($_POST['signup'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];
    $confirm_password=$_POST['confirm_password'];
    $role=$_POST['role'];
    if($password!==$confirm_password){
        echo "<script>alert('Password do not match');window.history.back();</script>";
        exit;
    }
    $sql="INSERT INTO users(name,email,mobile,password,confirm_password,role)VALUES('$name','$email','$mobile','$password','$confirm_password','$role')";
    if($conn->query ($sql)==TRUE){
        $message=alert("Submitted Successfully");
    }
    else{
        $message=alert("Error Occured");
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Signup</title>
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
            .box{
                background: rgba(255,255,255,0.3);
                backdrop-filter: blur(10px);
                padding: 40px;
                border-radius: 15px;
                width: 320px;
                text-align: center;
            }
            input,select{
                width: 100%;
                padding: 10px;
                margin: 10px 0;
                border-radius: 5px;
                border: 1px solid #ccc;
            }
            button{
                width: 100%;
                padding: 10px;
                background: green;
                color: white;
                border: none;
                border-radius: 5px;
            }
            .msg{
                margin-top: 10px;
                color:green;
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        <div class="box">
            <h2>Register</h2>
            <form method="POST">
                <select name="role">
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                </select>
                <input type="text" name="name" placeholder="Enter your name..." required>
                <input type="email" name="email" placeholder="Enter email..." required>
                <input type="text" name="mobile" placeholder="Enter mobile number..." required>
                <input type="password" name="password" placeholder="Enter your password.." required>
                <input type="password" name="confirm_password" placeholder="Enter confirm your password.." required>
                <button type="submit" name="signup">Sign Up</button>
            </form>
            <p class="msg"><?php echo $message;?></p>
        </div>
    </body>
</html>