<?php
include('db.php');
 $firstName = mysqli_real_escape_string ($conn, $_POST['firstName']);
 $lastName = mysqli_real_escape_string ($conn,$_POST['lastName']);
 $email = mysqli_real_escape_string ($conn,$_POST['email']);
 $errors = [
    'firstName'=>'',
    'lastName'=>'',
    'email.Error'=>'',
 ];
 if (isset($_POST['submit'])) {
     
     $sql = "INSERT INTO users(firstName,lastName,email)
     VALUES('$firstName','$lastName','$email')";
     mysqli_query($conn, $sql);
     if (empty($firstName)) {
         # code...
         $errors['firstName']='يرجى ادخال الاسم الاول ';
     } 
     if (empty($lastName)) {
         # code...
        
         $errors['lastName']='يرجى ادخال الاسم الاخير  ';
     } 
     elseif (empty($email)) {
         # code...
        
         $errors['Email']='يرجى ادخال الايميل ';
     } 
     elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        
         $errors['EmailError']='يرجى ادخال الاسم الايميل الصحبح ';
     } 

     if(!array_filter($errors))
     {
        $firstName=mysqli_real_escape_string($conn,$_POST['firstName']);
        $lastName=mysqli_real_escape_string($conn,$_POST['lastName']);
        $email=mysqli_real_escape_string($conn,$_POST['email']);
     }
     else {
         # code...
     
     
     if (mysqli_query($conn,$sql)) {
        # echo'success';
        header('Location:' .$_SERVER['PHP_SELF']);
     }else {
         echo 'error'.mysqli_error($conn);
     }
 }
     
 }
?>