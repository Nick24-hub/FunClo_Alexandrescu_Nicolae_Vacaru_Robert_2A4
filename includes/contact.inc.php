<?php
 if(isset($_POST["contact-submit"])){
    
     $name=$_POST["name"];
     $email=$_POST["email"];
     $text=$_POST["text"];
     require_once 'dbh.inc.php';
     require_once 'functions.inc.php';
      if(emptyInputContact($name,$email,$text)!==false)
       { 
         header("location: ../contact.php?error=emptyinput");
         exit();
      }
      createContactRequest($conn,$name,$email,$text);
 }
 else {
  header("location: ../contact.php");
  exit();
}