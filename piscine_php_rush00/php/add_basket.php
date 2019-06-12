<?php
function get_item_id($id) {
  foreach ($_SESSION['basket'] as $i => $article) {
    if ($article['id'] == $id)
      return ($i);
  }
  return (-1);
}

if (isset($_POST['id']) && $_POST['id'] >= 0) {
  if (!isset($_SESSION))
    session_start();
  if (!isset($_SESSION['basket']))
    $_SESSION['basket'] = [];
  if (($id = get_item_id($_POST['id'])) == -1) {
    $basket = [];
    $basket['id'] = $_POST['id'];
    $basket['quantity'] = 1;
    $basket['price'] = 0;
    array_push($_SESSION['basket'], $basket);
  }
  else {
    $_SESSION['basket'][$id]['quantity'] += 1;
  }
}
header('Location: ../');
?>
