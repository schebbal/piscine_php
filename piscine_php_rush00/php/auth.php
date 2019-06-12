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

function auth($login, $passwd) {
  if (file_exists('../private/users')) {
    $array = unserialize(file_get_contents('../private/users'));
    $id = get_user_id($array, $login);
    if ($id >= 0 && $array[$id]['passwd'] == hash('whirlpool', $passwd)) {
      return ($id);
    }
    return (-1);
  }
  return (-1);
}
?>
