<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<header class="header">

   <a href="dashboard.php" class="logo">Broker's <span>Panel</span></a>

   <div class="profile">
      <?php
         $select_profile = $conn->prepare("SELECT * FROM `admin` WHERE id = ?");
         $select_profile->execute([$admin_id]);
         $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
      ?>
      <p><?= $fetch_profile['name']; ?></p>
      <a href="update_profile.php" class="btn">update profile</a>
   </div>

   <nav class="navbar">
      <a href="dashboard.php"><i class="fas fa-home"></i> <span>Home</span></a>
      <a href="add_posts.php"><i class="fas fa-pen"></i> <span>Add Listings</span></a>
      <a href="view_posts.php"><i class="fas fa-eye"></i> <span>View Listings</span></a>
      <a href="admin_accounts.php"><i class="fas fa-user"></i> <span>Account</span></a>
      <a href="../components/admin_logout.php" style="color:var(--red);" onclick="return confirm('Confirm Logout?');"><i class="fas fa-right-from-bracket"></i><span>Logout</span></a>
   </nav>

   <div class="flex-btn">
      <!-- <a href="admin_login.php" class="option-btn">Login</a> -->
      <a href="register_admin.php" class="option-btn">New Registeration</a>
   </div>

</header>

<div id="menu-btn" class="fas fa-bars"></div>