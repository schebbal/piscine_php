<?php
if (!isset($_SESSION))
  session_start();
if (isset($_SESSION['basket'])) {
  $articles = unserialize(file_get_contents('private/articles'));
  foreach ($_SESSION['basket'] as $id => $article) {
    if ($_SESSION['basket'][$id]['quantity'] <= 0 || !isset($articles[$article['id']]['name'])) {
      unset($_SESSION['basket'][$id]);
    }
  }
}
?>
