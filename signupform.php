
<?php 

if($_SERVER["REQUEST_METHOD"]=='POST'){

    $Email=$_POST['email'];
    $Pass=$_POST['password'];
    $confpass=$_POST['conf-password'];
    echo $Email;
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUpForm</title>
    <link rel="stylesheet" href="signup.css">
</head>

<body>

<?php 

include 'dbconn.php';

if(isset($_POST['submit'])){
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);
    $confpass = mysqli_real_escape_string($conn,$_POST['conf-password']);

    // password encryption
    $pass = password_hash($password, PASSWORD_BCRYPT);
    $confirmpass = password_hash($confpass, PASSWORD_BCRYPT);

    $emailquery = "select * from users where Email = '$email' ";
    $query = mysqli_query($conn,$emailquery);

    $emailcount = mysqli_num_rows($query);

    if($emailcount>0){
        echo "email already exists.";
    }else{
        if($password === $confpass){
            $insertquery = "insert into users(Email, Password, con_password) values('$email', '$pass', '$confirmpass')";
            $iquery = mysqli_query($conn, $insertquery);
            if($iquery){
                ?>
                <script>
                    alert("Insertion is Successful.")
                </script>
            
                <?php
            }else{
                ?>
                <script>
                    alert("Insertion error!")
                </script>
            
                <?php
            }

        }else{
            ?>
                <script>
                    alert("Password not match!")
                </script>
            
                <?php
        }
    }

}

?>

    <div class="signUp">
        <h1>Sign Up Form</h1>
        <p>Please fill this form correctly.</p>
        <hr>
        <form action="<?php $_SERVER["PHP_SELF"]; ?>" method="post">
            <label for="email">E-mail</label>
            <input type="email" class="inp-field" name="email" id="email" placeholder="Enter your e-mail address"required>
            <br>
            <br>
            <label for="password">Password</label>
            <input type="password" class="inp-field" name="password" id="password" placeholder="Enter password"required>
            <br>
            <br>
            <label for="password">Confirm Password</label>
            <input type="password" class="inp-field" name="conf-password" id="conf-password"
                placeholder="Confirm password"required>
            <br>
            <br>
            <input type="checkbox" name="checkbox" id="checkbox">
            <label for="checkbox">Remember Password </label>
            <p id="p1">By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
            <div class="btn">
                <button type="button" class="cancle-btn">Cancle</button>
                <button type="submit" name="submit" class="signup-btn">Sign Up</button>
            </div>
        </form>
    </div>
</body>

</html>