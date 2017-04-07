<?php
$users;
$user1;
$user2;
$user1['user'] = 'user1';
$user1['pass'] = '123456';
$user1['name'] = "Jhossymar";
$user2['user'] = 'user2';
$user2['pass'] = '123456';
$user2['name'] = "Christian";
$users[0] = $user1;
$users[1] = $user2;
function getUser($userToFindOut,$users) {
    foreach ($users as $key => $value) {
        if($value['user'] == $userToFindOut) {
            return $value;
        }
    }
    return 0;
 }
?>