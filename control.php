<?php 
session_start();
require "connection.php";
$email = "abc@gmail.com";
$name = "Your Name";
$mobile="Mobile no";
$date="Birth Date";
$adhaar="**** **** ****";
$recoverdate="select";
$idproof="Upload Adhaar";
$errors = array();

//if user signup button
if(isset($_POST['signup'])){
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);
	$email = mysqli_real_escape_string($con, $_POST['email']);
    $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
    $date = mysqli_real_escape_string($con, $_POST['date']);
    $adhaar = mysqli_real_escape_string($con, $_POST['adhaar']);
    $blood = mysqli_real_escape_string($con, $_POST['blood']);
    $recoverdate = mysqli_real_escape_string($con, $_POST['recoverdate']);
    $idproof = mysqli_real_escape_string($con, $_POST['idproof']);
    $adhaar_check = "SELECT * FROM donors WHERE UIDAI = '$adhaar'";
    $res = mysqli_query($con, $adhaar_check);
    if(mysqli_num_rows($res) > 0){
        $errors['adhaar'] = "Adhaar Number that you have entered is already exist!";
    }
    if(count($errors) === 0){
		
        $status = "notverified";
        $insert_data = "INSERT INTO donors(UIDAI,Name,Contact,Email,DOB,Blood,Recover,Adhaar,Gender)
                        values('$adhaar','$name', '$mobile','$email','$date', '$blood', '$recoverdate', '$idproof','$gender')";
        $data_check = mysqli_query($con, $insert_data);
        if ($con->query($insert_data)){
            echo "New record is inserted sucessfully";
            }
            else{
            echo "Error: ". $insert_data ."
            ". $con->error;
            }
        if($data_check){
            $subject = "Email Verification Code";
            $message = "Your verification code is $code";
            $sender = "From: noreply@server.cybcryption.org";
            if(mail($email, $subject, $message, $sender)){
                $info = "We've sent a verification code to your email - $email";
                $_SESSION['info'] = $info;
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
                header('location: otp.php');
                exit();
            }else{
                $errors['otp-error'] = "Failed while sending code!";
            }
        }
        else{
            $errors['db-error'] = "Failed while inserting data into database!";
        }
    }

}

?>
  