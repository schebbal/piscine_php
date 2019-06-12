<?php
function echo_article_basket($id, $name, $quantity, $price)
{
  echo '<form action="index.php?page=php/change_basket.php" method="post"><div><p>'.$name.'</p><p>'.$quantity.'</p><p>'.$price.'€</p><input name="id" value="'.$id.'" style="display: none;"><input type="submit" name="submit" value="-"><input type="submit" name="submit" value="+"></div></form><br>';
}

if (!isset($_SESSION))
  session_start();
$total = 0;
$articles = unserialize(file_get_contents('private/articles'));
if (isset($_SESSION['basket'])) {
  foreach ($_SESSION['basket'] as $i => $article) {
    $name = $articles[$article['id']]['name'];
    $quantity = $article['quantity'];
    $price = $articles[$article['id']]['price'] * $quantity;
    echo_article_basket($i, $name, $quantity, $price);
    $total += $price;
  }
}
echo "TOTAL : " . $total . " €";
?>
