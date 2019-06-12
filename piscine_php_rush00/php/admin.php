<?php
include 'auth.php';
include 'check_admin.php';

if (file_exists('../private/users')) {
  if (isset($_POST['login']) && !empty($_POST['login']) && isset($_POST['passwd']) && !empty($_POST['passwd'])) {
    if (!isset($_SESSION))
      session_start();
    if (($id = auth($_POST['login'], $_POST['passwd'])) >= 0) {
      $_SESSION['login'] = $_POST['login'];
      $_SESSION['passwd'] = $_POST['passwd'];
      //$admin = $_POST['admin'];
      $_SESSION['id_user'] = $id;
      if (!check_admin($id))
      {
        //tu n'est pas admin
        header('Location: index.php');
      }
        else
        {
        //tu est admin
        header('Location: index.php?page=html/admin_index.html');
        }
    }
    else {
      $_SESSION['login'] = "";
      $_SESSION['passwd'] = "";
      $_SESSION['id_user'] = -1;
      header('Location: index.php?page=html/login.html');
    }
  }
  else
    header('Location: index.php?page=html/login.html');
}
else
  header('Location: index.php?page=html/login.html');
?>
