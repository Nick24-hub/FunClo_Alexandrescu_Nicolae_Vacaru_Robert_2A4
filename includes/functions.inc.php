<?php
   function emptyInputSignup($name,$email,$username,$password,$passwordRepeat)
   {
       $result=false;
       if(empty($name) ||empty($email) ||empty($username) 
       ||empty($password) ||empty($passwordRepeat))
       {
           $result=true;
       }else{
           $result=false;
       }
    return $result;
    }
    function invalidUid($username)
   {
       $result=false;
       if(!preg_match("/^[a-zA-Z0-9]*$/",$username))
       {
           $result=true;
       }else{
           $result=false;
       }
    return $result;
    }
    function invalidEmail($email)
   {
       $result=false;
       if(!filter_var($email,FILTER_VALIDATE_EMAIL))
       {
           $result=true;
       }else{
           $result=false;
       }
    return $result;
    }
    function pwdMatch($password,$passwordRepeat)
   {
       $result=false;
       if($password !== $passwordRepeat)
       {
           $result=true;
       }else{
           $result=false;
       }
    return $result;
    }
    function uidExists($conn,$username,$email)
   {
       $sql="SELECT * FROM users WHERE userUid = ? OR userEmail = ?;";
       $stmt=mysqli_stmt_init($conn);
       if(!mysqli_stmt_prepare($stmt,$sql))
       {
        header("location: ../account.php?error=uidExists");
        exit();
       }
       mysqli_stmt_bind_param($stmt,"ss",$username,$email);
       mysqli_stmt_execute($stmt);
       $resultData=mysqli_stmt_get_result($stmt);
       
       if($row=mysqli_fetch_assoc($resultData))
       {
          return $row;
       }else{
           $result=false;
           return $result;
       }
       mysqli_stmt_close($stmt);
    }
    function createUser($conn,$name,$email,$username,$password)
   {
       $sql="INSERT INTO users (userName, userEmail, userUid, userPwd) VALUES (?, ?, ?, ?);";
       $stmt=mysqli_stmt_init($conn);
       if(!mysqli_stmt_prepare($stmt,$sql))
       {
        header("location: ../account.php?error=stmtFailed");
        exit();
       }
       $hashedPwd=password_hash($password,PASSWORD_DEFAULT);
       mysqli_stmt_bind_param($stmt,"ssss",$name,$email,$username,$hashedPwd);
       mysqli_stmt_execute($stmt);
       mysqli_stmt_close($stmt);
       header("location: ../account.php?error=none");
        exit();
    }
    function emptyInputLogin($username,$pwd)
   {
       $result=false;
       if(empty($pwd) ||empty($username))
       {
           $result=true;
       }else{
           $result=false;
       }
    return $result;
    }
    function loginUser($conn,$username,$pwd){
        $uidExists=uidExists($conn,$username,$username);
        if($uidExists==false)
          {
            header("location: ../account.php?error=wrongLogin");
            exit();
          }
        $pwdHashed = $uidExists["userPwd"];
        $checkPwd = password_verify($pwd,$pwdHashed);
        if($checkPwd==false)
        {
            header("location: ../account.php?error=wrongLogin");
            exit();
        }
        else if($checkPwd==true)
          {
            session_start();
            $_SESSION["userId"]=$uidExists["userId"];
            $_SESSION["userUid"]=$uidExists["userUid"];
            header("location: ../index.php");
            exit();
          }

    }
    function emptyInputContact($name,$email,$text)
   {
       $result=false;
       if(empty($name) ||empty($email) ||empty($text) )
       {
           $result=true;
       }else{
           $result=false;
       }
    return $result;
    }
    function createContactRequest($conn,$name,$email,$text)
   {
       $sql="INSERT INTO contact (name,userEmail, textContact) VALUES (?, ?, ?);";
       $stmt=mysqli_stmt_init($conn);
       if(!mysqli_stmt_prepare($stmt,$sql))
       {
        header("location: ../contact.php?error=stmtFailed");
        exit();
       }

       mysqli_stmt_bind_param($stmt,"sss",$name,$email,$text);
       mysqli_stmt_execute($stmt);
       mysqli_stmt_close($stmt);
       header("location: ../contact.php?error=none");
       exit();
    }