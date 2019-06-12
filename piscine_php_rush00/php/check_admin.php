<?php
function check_admin($id_user) {
  
  if (file_exists('../private/users')) {
    $array = unserialize(file_get_contents('../private/users'));
    print_r($array);
    return ($array[$id_user]['admin']);
  }
  return (0);
}
?>
