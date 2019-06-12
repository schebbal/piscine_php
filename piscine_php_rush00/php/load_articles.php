<?php
function echo_article($id, $name, $price, $img_url, $cat_str) {
  echo '<div class="article" categ="' . $cat_str . '">
    <img src="' . $img_url . '">
    <h3>' . $name . ' -- ' . $price . '€</h3>
    <form action="php/add_basket.php" method="post"><input name="id" value="' . $id . '" style="display: none;"><input class="btn_buy" type="submit" value="BUY"></form>
  </div>';
}

if (file_exists('./private/articles') && file_exists('./private/categories'))
{
  $articles = unserialize(file_get_contents('./private/articles'));
  $categories = unserialize(file_get_contents('./private/categories'));
  foreach ($articles as $id => $article) {
    $name = $article['name'];
    $price = $article['price'];
    $img_url = $article['img_url'];
    $cat = [];
    foreach ($article['categories'] as $j => $categorie) {
      array_push($cat, $categories[$categorie]['name']);
    }
    $cat_str = implode(" ", $cat);
    echo_article($id, $name, $price, $img_url, $cat_str);
  }
}
?>
