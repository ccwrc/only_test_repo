<?php

$urlTypicode = "http://jsonplaceholder.typicode.com/";

$albumIds = [];
$userIds = [];
$result = [];


foreach (json_decode(file_get_contents($urlTypicode . "photos")) as $photo) {
    // var_dump($photo);
   // if (strpos(get_object_vars($photo)["title"], "voluptate")) { //case sensitive !
        if (stripos(get_object_vars($photo)["title"], "voluptate")) { //case insensitive
        $albumIds[] = get_object_vars($photo)["albumId"];
    }
}
// var_dump($albumIds);

foreach (json_decode(file_get_contents($urlTypicode . "albums")) as $album) {
    if (in_array(get_object_vars($album)["id"], array_unique($albumIds))) {
        $userIds[] = get_object_vars($album)["userId"];
    }
}
// var_dump(array_unique($albumIds));
// var_dump($userIds);

foreach (json_decode(file_get_contents($urlTypicode . "users")) as $user) {
    if (in_array(get_object_vars($user)["id"], array_unique($userIds)) 
            && preg_match("/^\d\d\d\d\d-\d\d\d\d$/", get_object_vars(get_object_vars($user)["address"])["zipcode"])) {
        $result[] = ($user);
    }
}

 var_dump($result);
