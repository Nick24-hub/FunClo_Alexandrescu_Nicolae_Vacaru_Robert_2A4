<?php
 if(isset($_POST["register-submit"])){
    
     $name=$_POST["username"];
     $username=$_POST["uid"];
     $email=$_POST["email"];
     $password=$_POST["pwd"];
     $passwordRepeat=$_POST["pwd-repeat"];
     require_once 'dbh.inc.php';
     require_once 'functions.inc.php';
      if(emptyInputSignup($name,$email,$username,$password,$passwordRepeat)!==false)
       { 
         header("location: ../account.html?error=emptyinput");
         exit();
      }
      if(invalidUid($username)!==false)
      {
        header("location: ../account.html?error=invalidUid");
        exit();
      }
      if(invalidEmail($email)!==false)
      {
        header("location: ../account.html?error=invalidEmail");
        exit();
      }
      if(pwdMatch($password,$passwordRepeat)!==false)
      {
        header("location: ../account.html?error=invalidMatchPwd");
        exit();
      }
      if(uidExists($conn,$username,$email)){
        header("location: ../account.html?error=usernameTaken");
        exit();
      }
      createUser($conn,$name,$email,$username,$password);
 }
 else {
  header("location: ../account.html");
  exit();
}