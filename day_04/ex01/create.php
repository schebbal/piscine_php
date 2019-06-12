<?php
/**
 * Created by PhpStorm.
 * User: schebbal
 * Date: 2019-01-25
 * Time: 20:13
 */

function create_account ($login, $passwd){
    $data = unserialize(file_get_contents('../private/passwd'));
    $user['login'] = $login;
    $user['passwd'] = hash('whirlpool', $passwd);
    $data[] = $user;
    file_put_contents('../private/passwd', serialize($data));
    echo "OK\n";
}

if (!empty($_POST['login']) && !empty($_POST['passwd']) && !empty($_POST['submit']) && $_POST['submit'] === 'OK'){
    if (!file_exists('../private')){
        mkdir("../private");
        file_put_contents('../private/passwd', null);
    }
    $data = unserialize(file_get_contents('../private/passwd'));
    if (!empty($data)) {
        foreach ($data as $k => $v) {
            if ($v['login'] === $_POST['login']) {
                echo "ERROR\n";
                exit;
            }
        }
        create_account ($_POST['login'], $_POST['passwd']);
    }
    else
        create_account ($_POST['login'], $_POST['passwd']);
}
else
    echo "ERROR\n";
echo $_POST['login'];
?>