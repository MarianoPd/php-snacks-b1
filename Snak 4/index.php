

<?php

        //Inserire da url min e max

    $nElement = 15;
    $min = $_GET['min'];
    $max = $_GET['max'];
    function creteRandArray($min, $max,$nElement){
        $newArray = [];
        if(($max - $min) <$nElement) $nElement = ($max - $min + 1);
        while(count($newArray) < $nElement){
            $number = rand($min, $max);
            if(!in_array($number, $newArray)){
                $newArray[] = $number;
            }
        }
        return $newArray;
    };

    function printNumArray($array){
        echo "<h2>Array</h2>";
        for($i = 0; $i < count($array); $i++){
            echo "<span>$array[$i]    </span>";
        }
    };

    $array = creteRandArray($min, $max,$nElement);
    printNumArray($array);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 4</title>
</head>
<body>
    
</body>
</html>