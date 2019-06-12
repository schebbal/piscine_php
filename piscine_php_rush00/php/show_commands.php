<?php
if (file_exists('../private/commands')) {
  $commands = unserialize(file_get_contents('../private/commands'));
  $users = unserialize(file_get_contents('../private/users'));
  $articles = unserialize(file_get_contents('../private/articles'));
  foreach ($commands as $id => $command) {

    $total = 0;
    $nbr_art = 0;
    foreach ($commands['basket'] as $i => $article) {
      $name = $articles[$article['id']]['name'];
      $quantity = $article['quantity'];
      $price = $articles[$article['id']]['price'] * $quantity;
      $total += $price;
      $nbr_art++;
    }

    echo '<p>' .$users[$command['user_id']]. '  '.$nbr_art.'  '.$total.'€</p>';
  }
}
?>
