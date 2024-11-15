<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

include 'components/like_post.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Welcome</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <link rel="stylesheet" href="css/style.css">

</head>
<body>


<section class="posts-container">

   <h1 class="heading">Welcome To Pune Estate</h1>

   <div class="flex-btn">
            <a href="admin/admin_login.php" class="option-btn" style="height:65px;width: 480px;margin-left: 331px;margin-top: 206px;"">
            <span style="font-size:33px;">Broker Login</span></a>
            
    </div>
    <div class="flex-btn">
            <a href="login.php" class="option-btn" style="margin-top: 60px;width: 480px;margin-left: 331px;"">
            <span style="font-size:33px;">User Login</span></a>
    </div>  
</section>
<footer class="footer">
    <span>FY MCA 2022-24 SEM IV</span>
    <p>Project By - Manish Kumar</p>
</footer>
<?php include 'components/footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>