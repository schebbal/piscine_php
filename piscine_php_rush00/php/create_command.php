<?php
include 'php/check_basket_two.php';
include 'php/auth.php';

if (!isset($_SESSION))
  session_start();
if (isset($_POST['submit']) && $_POST['submit'] == "Order")
{
  if (isset($_SESSION['login']) && isset($_SESSION['passwd']) && !empty($_SESSION['login']) && !empty($_SESSION['passwd']))
  {
    $id_user = auth($_SESSION['login'], $_SESSION['passwd']);
    $nbr_article = 0;
    if (isset($_SESSION['basket'])) {
      foreach ($_SESSION['basket'] as $id => $a) {
        if (isset($a['quantity']) && $a['quantity'] > 0) {
          $nbr_article = 1;
          break;
        }
      }
    }
    if ($id_user >= 0 && $id_user == $_SESSION['id_user'] && $nbr_article > 0) {
      $commands = unserialize(file_get_contents('private/commands'));
      $command = [];
      $command['basket'] = $_SESSION['basket'];
      $command['id_user'] = $id_user;
      array_push($commands, $command);
      $id_command = sizeof($commands) - 1;
      file_put_contents('private/commands', serialize($commands));

      $users = unserialize(file_get_contents('private/users'));
      array_push($users[$id_user]['command'], $id_command);
      file_put_contents('private/users', serialize($users));

      $articles = unserialize(file_get_contents('private/articles'));
      foreach ($_SESSION['basket'] as $i => $article) {
        array_push($articles[$article['id']]['command'], $id_command);
      }
      file_put_contents('private/articles', serialize($articles));
      $_SESSION['basket'] = [];
      header('Location: index.php?code_ret=OK');
    }
    else
      header('Location: index.php?page=html/login.html?code_ret=2');
  }
  else
    header('Location: index.php?page=html/login.html?code_ret=KO');
}
else
  header('Location: index.php?page=html/basket.php?code_ret=4');
?>
