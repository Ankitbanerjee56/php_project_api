<?php
session_start();
$server = "localhost";
$username = "root";
$password ="";
$dbname = "bbit";

$con = mysqli_connect($server,$username,$password,$dbname);

if(!$con){
    echo ("connection failed due to".mysqli_connect_error());
    die();

}

if(isset($_POST['submit'])){
$_SESSION['name']= $_POST['name'];
$age= $_POST['age'];
if($age<18){
    echo '<script>alert("only 18+ candidates allowed")</script>';
    die();
}
$gender= $_POST['gender'];
$_SESSION['email']= $_POST['email'];
$_SESSION['phone']= $_POST['phone'];
$other= $_POST['other'];
$sql= "INSERT INTO `participants` ( `name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ( '".$_SESSION['name']."', '".$age."', '".$gender."', '".$_SESSION['email']."', '".$_SESSION['phone']."', '".$other."', current_timestamp())";
if($con->query($sql)==true){
    header('location:pay.php');

}
else{
    echo "error: $sql <br> $con->error";
}
$con->close();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BBITTECHMELA Registration form</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Koulen&family=Macondo&family=Poppins:wght@900&family=Roboto:ital,wght@1,500&family=Smooch&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <img class="bg" src="images\budge-budge-institute-of-technology-kolkata.jpg" alt="bbit">
    <div class="container">
        <h1>Welcome to BBIT TECHMELA contest form</h1>
        <p>Enter your details and submit the form to confirm your participation</p>
        

    
   <form  method="post">
    <input type="text" name="name" id="name" placeholder="Enter your name" required>
    <input type="text" name="age" id="age" placeholder="Enter your age"required>
    <input type="text" name="gender" id="gender" placeholder="Enter your gender"required>
    <input type="email" name="email" id="email" placeholder="Enter your email"required>
    <input type="phone" name="phone" id="phone" placeholder="Enter your phone number"required>
    <textarea name="other" id="other" cols="30" rows="10" placeholder="Tell us about yourself(optional) "></textarea>
    <br>
    <button class="btn" name="submit">Register</button>
    
    
   </form>
   
</div>
</body>
<br><br>
<footer>
<div>
    <h1 align="center"> Our location</h1>
</div>
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14748.83205921468!2d88.1705536!3d22.4588161!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x880d852ade5959b!2sBudge%20Budge%20Institute%20of%20Technology!5e0!3m2!1sen!2sin!4v1658077851000!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <!--to integrate google map api in website to show location -->
</footer>
</html>
