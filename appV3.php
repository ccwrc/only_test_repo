<?php

$urlTypicode = "http://jsonplaceholder.typicode.com/";

$albumIds = [];
$userIds = [];
$result = [];

foreach (json_decode(file_get_contents($urlTypicode . "photos")) as $photo) {
    if (stripos($photo->title, "voluptate")) { //case insensitive
        $albumIds[] = $photo->albumId;
    }
}

foreach (json_decode(file_get_contents($urlTypicode . "albums")) as $album) {
    if (in_array($album->id, $albumIds)) {
        $userIds[] = $album->userId;
    }
}

foreach (json_decode(file_get_contents($urlTypicode . "users")) as $user) {
    if (in_array($user->id, $userIds) 
            && preg_match("/^\d\d\d\d\d-\d\d\d\d$/", $user->address->zipcode)) {
        $result[] = $user;
    }
}

var_dump($result);
