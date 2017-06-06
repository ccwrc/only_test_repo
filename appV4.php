<?php

$urlTypicode = "http://jsonplaceholder.typicode.com/";

$albumIds = [];
$userIds = [];
$result = [];

foreach (json_decode(file_get_contents($urlTypicode . "photos?title_like=^.*voluptate.*$")) as $photo) {
        $albumIds[] = $photo->albumId;
}

 var_dump($albumIds);
foreach (json_decode(file_get_contents($urlTypicode . "albums")) as $album) {
    if (in_array($album->id, $albumIds)) {
        $userIds[] = $album->userId;
    }
}

//foreach (json_decode(file_get_contents($urlTypicode . "users")) as $user) {
//    if (in_array($user->id, $userIds) 
//            && preg_match("/^\d\d\d\d\d-\d\d\d\d$/", $user->address->zipcode)) {
//        $result[] = $user;
//    }
//}

foreach (json_decode(file_get_contents($urlTypicode . "users?address.zipcode_like=^\d\d\d\d\d-\d\d\d\d$")) as $user) {
    if (in_array($user->id, $userIds)) {
         //   && preg_match("/^\d\d\d\d\d-\d\d\d\d$/", $user->address->zipcode)) {
        $result[] = $user;
    }
}

var_dump($result);