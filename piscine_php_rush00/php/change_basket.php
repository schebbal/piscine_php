<?php
if (!isset($_SESSION))
  session_start();
if (isset($_POST['submit']) && ($_POST['submit'] == '+' || $_POST['submit'] == '-') && isset($_POST['id']) && $_POST['id'] >= 0)
{
  if (isset($_SESSION['basket']) && isset($_SESSION['basket'][$_POST['id']])) {
    $_SESSION['basket'][$_POST['id']]['quantity'] += ($_POST['submit'] == '-') ? -1 : 1;
  }
}
header('Location: index.php?page=html/basket.php')
?>
