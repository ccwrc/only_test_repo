<?php

function getArrayWithPaths() {

    $csvArray = [];
    $resultArray = [];

    if (($handle = fopen("dane.csv", "r")) !== FALSE) {
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            $csvArray[] = $data;
        }
        fclose($handle);
    }

    for ($i = 0; $i < count($csvArray); $i++) {
        $id = $csvArray[$i][0];
        $idParent = $csvArray[$i][1];
        $name = $csvArray[$i][2];

        $endString = $name;
        $flag = $idParent;
        while (is_numeric($flag)) {
            for ($j = 0; $j < count($csvArray); $j++) {
                if ($csvArray[$j][0] == $flag) {
                    $endString = $csvArray[$j][2] . " >> " . $endString;
                    $flag = $csvArray[$j][1];
                }
            }
        }
        $resultArray[$id] = $endString;
    }
    return $resultArray;
}

echo (getArrayWithPaths()[6]);
