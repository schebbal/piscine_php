<?php
setLocale (LC_TIME, 'ft_fr.utf8','fra');
if (isset($_SESSION['login'])) $login = $_SESSION['login'];
else $login = '';
if (isset($_SESSION['password'])) $password = $_SESSION['password'];
else $password = '';

if (isset($_GET['page'])) $page = $_GET['page'];
else $page = '';
$pos = strpos($page, '?');
if ($pos == false) {
  $page1 = $page;
} else {
  $str1 = substr($page, $pos + 1);
  $len = strlen($page);
  $str2 = substr($page, -$len, $pos);
  $page1 = $str2;
  $pos = strpos($page, '=');
}
include 'php/check_basket.php'; 
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ECommerce</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <script src="js/index.js"></script>
  </head>
  <body>
    <header>
    <p><?php if (isset($_GET['code_ret']) && $_GET['code_ret'] == 'OK') echo "<p center style='color:blue'><h4>Votre commande a bien été enregistré !</h4></p>";
    elseif (isset($_GET['code_ret']) && $_GET['code_ret'] == 'OK') echo "<p center style='color:blue'><h4>Vous devez saisir votre login !</h4></p>"; ?> </p>
      <a href="./" class="logo"><h1><span>E</span>Commerce</h1></a>
      <div class="icons">
        <a href="index.php?page=html/login.html"><div class="icon_div"><img src="img/profile.png" alt="profile icon"></div></a>
        <a href="index.php?page=html/basket.php"><div class="icon_div"><img src="img/shopping-cart.png" alt="shopping-cart icon"><?php include 'php/get_number_basket.php'; ?></div></a>
      </div>
    </header>
    <div class="content">
      <div class="features">
        <h2>Featured</h2>
        <div class="feature">
          <?php 
          if (isset($page1) && (empty($page1))) 
          { 
            include 'php/load_articles.php';
          } else {
            include  $page1;
           }; ?>
        </div>
      </div>
      <div class="categories">
        <h2>Categories</h2>
        <?php include 'php/load_categories.php'; ?>
      </div>
      <div class="admin">
        <h2>Admin</h2>
        <p class="admin1">
          <?php include 'html/admin.html'; ?>
        </p>
      </div>
    </div>
  </body>
  <footer><?php if (isset($_GET['code_ret']) && $_GET['code_ret'] == 'OK') echo "<p center style='background-color:lightblue'><h2>Votre commande a bien été enregistré !</h2></p>";?> </footer>
</html>
