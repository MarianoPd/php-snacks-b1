<?php

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];

    function PrintPosts($posts){
        $keys = array_keys($posts);
        for($i = 0; $i < count($keys); $i++){
            $key = $keys[$i];
            $keyPosts = $posts[$key];
            echo "<h1>Date: $key </h1>";
            for($j = 0; $j < count($keyPosts); $j++){
                $post = $keyPosts[$j];                
                echo "<h2>Title: $post[title]  </h2> <h2>Author: $post[author]  </h2> <h2>Text: $post[text]  </h2> <br>";
            }
            echo "<hr>";
            
        }
    };
    PrintPosts($posts);

    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 3</title>
</head>
<body>
    
</body>
</html>