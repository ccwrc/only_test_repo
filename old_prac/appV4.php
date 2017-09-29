<?php

$urlTypicode = "http://jsonplaceholder.typicode.com/";

$albumIds = [];
$userIds = [];
$result = [];

foreach (json_decode(file_get_contents($urlTypicode . "photos?title_like=^.*voluptate.*$")) as $photo) {
    $albumIds[] = $photo->albumId;
}

foreach (json_decode(file_get_contents($urlTypicode . "albums")) as $album) {
    if (in_array($album->id, $albumIds)) {
        $userIds[] = $album->userId;
    }
}

foreach (json_decode(file_get_contents($urlTypicode . "users?address.zipcode_like=^\d\d\d\d\d-\d\d\d\d$")) as $user) {
    if (in_array($user->id, $userIds)) {
        $result[] = $user;
    }
}

var_dump($result);
