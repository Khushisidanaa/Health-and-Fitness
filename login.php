
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login for Admin</title>
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="../css/bootstrap.css" rel='stylesheet' type='text/css'/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--js--> 
<script src="../js/jquery.min.js"></script>
</head>
<body>
    

<?php include('function.php'); ?>

<?php
$_SESSION['loginstatus']="";
if(isset($_POST["sbmt"]))
{
    $cn=makeconnection();
    $s="select *from users where Username = '" .$_POST["username"]."' and Pwd='" .$_POST["password"]."'";
    $result=mysqli_query($cn,$s);
    $rows=mysqli_num_rows($result);
    $data=mysqli_fetch_array($result);
    mysqli_close($cn);

    if($rows>0)
    {
        $_SESSION["user_first_name"]=$_POST["username"];
        $_SESSION["usertype"]=$data[2];
        $_SESSION['loginstatus']="true";
        header("Location:loggedin.php");
    }
    else
    {
    echo "<script>alert('The username or password entered is incorrect');</script>";

    }
}

?>

<div class="login-wrapper">
    <div class="login-form">
<img id="logo1"  height="52px" width="168px" src="images/logoblack.png" alt="">
<h2>LOGIN</h2>
<h4>Start your fitness journey! 😉</h4>


<?php

//index.php

//Include Configuration File
include('config.php');

$login_button = '';


if(isset($_GET["code"]))
{

 $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);


 if(!isset($token['error']))
 {
 
  $google_client->setAccessToken($token['access_token']);

 
  $_SESSION['access_token'] = $token['access_token'];

 



  $google_service = new Google_Service_Oauth2($google_client);

 
  $data = $google_service->userinfo->get();

 
  if(!empty($data['given_name']))
  {
   $_SESSION['user_first_name'] = $data['given_name'];
  }

  if(!empty($data['family_name']))
  {
   $_SESSION['user_last_name'] = $data['family_name'];
  }

  if(!empty($data['email']))
  {
   $_SESSION['user_email_address'] = $data['email'];
  }

  if(!empty($data['gender']))
  {
   $_SESSION['user_gender'] = $data['gender'];
  }

  if(!empty($data['picture']))
  {
   $_SESSION['user_image'] = $data['picture'];
  }
 }
}


if(!isset($_SESSION['access_token']))
{

 $login_button = '<a href="'.$google_client->createAuthUrl().'">Login With Google</a>';
}

?>

       <button class='googlebutton'>
           <img src="images/Google.png" alt="Google logo " height="30px" width='30px'  >
   <?php
   if($login_button == '')
   {
       header('location:loggedin.php');
    
    // echo '<div class="panel-heading">Welcome User</div><div class="panel-body">';
    // echo '<img src="'.$_SESSION["user_image"].'" class="img-responsive img-circle img-thumbnail" />';
    // echo '<h3><b>Name :</b> '.$_SESSION['user_first_name'].' '.$_SESSION['user_last_name'].'</h3>';
    // echo '<h3><b>Email :</b> '.$_SESSION['user_email_address'].'</h3>';
    echo '<h3><a href="logout.php">Logout</h3></div>';
   }
   else
   {
    echo '<div align="center">'.$login_button . '</div>';
   }
   ?>
   </button>

   <div class="break-line">

   <hr class='break-left'>
   
   <span class=break-text> OR</span>
  
   <hr class='break-right'>
 
   </div>
   <div class="login-container">
   
    <div class="form-container">
    <form method="post">
        <div class="form-el2">
        <label for="username"> Email :</label> 
        <input type="text" id='username' name='username' required>
        </div>
        <div class="form-el2">
            <label for="password">Password: </label> 
            <input type="password" id='password' name='password' name='password'>
        </div>
        <input id='btn2' type="submit" value='LOGIN' name="sbmt">
        
    </form>
    </div>

</div>


    </div>
    <div class="svg-wrapper">
        <img src="images/login-vector.png" alt="">
    </div>
</div>



</body>
</html>