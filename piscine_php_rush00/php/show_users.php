<?php
if (file_exists('../private/users')) {
  $users = unserialize(file_get_contents('../private/users'));
  foreach ($users as $id => $user) {
    echo '<form action="index.php?page=php/delete_user.php" method="post"><p>' . $user['login'] . '</p><input name="id" value ="' . $id . '" style="display: none;"><input type="submit" name="submit" value="Delete"></form>';
  }
}
?>
