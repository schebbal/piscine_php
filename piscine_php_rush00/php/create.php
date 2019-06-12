<?php
function verif_user($array, $login) {
  foreach ($array as $i => $value) {
    if ($value['login'] == $login)
      return (0);
  }
  return (1);
}
if (!file_exists('../private'))
  mkdir('../private', 0755);
if (isset($_POST['submit']) && $_POST['submit'] == 'OK' && isset($_POST['login']) && !empty($_POST['login']) && isset($_POST['passwd']) && !empty($_POST['passwd'])) {
  $array = [];
  if (file_exists('../private/users')) {
    $array = unserialize(file_get_contents('../private/users'));
  }
  if (verif_user($array, $_POST['login']))
  {
    $login['login'] = $_POST['login'];
    $login['passwd'] = hash('whirlpool', $_POST['passwd']);
    $login['admin'] = 0;
    $login['command'] = [];
    array_push($array, $login);
    file_put_contents('../private/users', serialize($array));
    header('Location: index.php?page=html/login.html');
  }
  else
    header('Location: index.php?page=html/create.html');
}
else
  header('Location: index.php?page=html/create.html');
?>