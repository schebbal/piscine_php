<?php
function echo_categorie($name) {
  echo '<p class="categorie" onclick="showCateg(\'' . $name . '\')">> ' . $name . '</p>';
}

if (file_exists('./private/categories'))
{
  $categories = unserialize(file_get_contents('./private/categories'));
  foreach ($categories as $i => $categorie) {
    $name = $categorie['name'];
    echo_categorie($name);
  }
}
?>
