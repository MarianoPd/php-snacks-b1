<?php
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];

    
    

    function extractNames($subArray, $db){
        $newArray = [];
        $tempArray = $db[$subArray];
        //var_dump($tempArray);
        for($i = 0; $i < count($tempArray); $i++){
            $tempElement = $tempArray[$i];
            //var_dump($tempElement);
            $newElement = $tempElement['name'];
            //echo $newElement;
            $newElement .= ' ';
            $newElement .= $tempElement['lastname'];
            //echo $newElement;
        }
        var_dump($newElement);
        return $newArray;
    }
    function printNames($names){
        $string = '';
        for($i =0; $i < count($names); $i++){
            $string .= '<h2> $names[$i] </h2>';
        }
        return $string;
    }

    $teachers = extractNames('teachers', $db);
    $PMS =  extractNames('pm', $db);

    var_dump($teachers);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Snack 6</title>
</head>
<body>
    <div class="gray">
        <?php
            echo "$teachers[0]";
        ?>
    </div>
    <div class="green">
        <?php
            
        ?>
        
    </div>
    
</body>
</html>