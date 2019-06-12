<?php
if (file_exists('private/articles')) {
  $articles = unserialize(file_get_contents('private/articles'));
  echo "<table border=2>";
  echo '<tr><td>image</td><td>Nom</td><td>Prix</td><td>Catégorie</td></tr>';
  foreach ($articles as $id => $article) {
    $nbr_art = 0;
    foreach ($articles as $i => $article) {
      $name = $article['name'];
      $prix = $article['price'];
      $image = $article['img_url'];
      $cat = '';
      $nbr_art++;
      echo '<tr><td><img src="'.$image.'" height="50" width="80"></td><td>'.$name.'</td><td>'.$prix.' €</td><td>'.$cat.'</td></tr>';
    }
  }
  echo "</table>";
}
?>