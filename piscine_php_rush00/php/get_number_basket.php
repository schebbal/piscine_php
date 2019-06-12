<?php
if (!isset($_SESSION))
  session_start();
$count = 0;
$total = 0;
if (isset($_SESSION['basket'])) {
  foreach ($_SESSION['basket'] as $id => $article) {
    $count += $article['quantity'];
    //$totoal += $article['price'];
  }
}
if ($count == 0)
  echo "Vide";
else
  echo $count;
?>
