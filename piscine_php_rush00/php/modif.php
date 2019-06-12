<?php
function get_user_id($array, $login) {
  $a = 0;
  foreach ($array as $i => $value) {
    if ($value['login'] == $login)
      return ($a);
    $a++;
  }
  return (-1);
}

if (file_exists('../private/users')) {
  if (isset($_POST['submit']) && $_POST['submit'] == 'OK') {
    if (isset($_POST['login']) && !empty($_POST['login']) && isset($_POST['oldpw']) && !empty($_POST['oldpw']) && isset($_POST['newpw']) && !empty($_POST['newpw'])) {
      $array = unserialize(file_get_contents('../private/users'));
      $id = get_user_id($array, $_POST['login']);
      if ($id >= 0 && $array[$id]['passwd'] == hash('whirlpool', $_POST['oldpw'])) {
        $array[$id]['passwd'] = hash('whirlpool', $_POST['newpw']);
        file_put_contents('../private/users', serialize($array));
        header('Location: index.php?page=html/login.html');
      }
      else
        header('Location: index.php?page=html/modif.html');
    }
    else
      header('Location: index.php?page=html/modif.html');
  }
  else
    header('Location: index.php?page=html/modif.html');
}
else
  header('Location: index.php?page=html/modif.html');

?>
