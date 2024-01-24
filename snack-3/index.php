<?php

    $posts = [
        '01-01-2022' => [
            [
                'title' => 'Lorem Ipsum',
                'author' => 'John Doe',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
            ],
            [
                'title' => 'PHP Basics',
                'author' => 'Jane Smith',
                'text' => 'A beginner\'s guide to PHP programming.'
            ],
        ],
        '15-02-2022' => [
            [
                'title' => 'Web Development Trends',
                'author' => 'Alice Johnson',
                'text' => 'Exploring the latest trends in web development.'
            ]
        ],
        '10-05-2022' => [
            [
                'title' => 'Data Science Insights',
                'author' => 'Bob Williams',
                'text' => 'Analyzing trends and insights in the field of data science.'
            ],
            [
                'title' => 'Machine Learning for Beginners',
                'author' => 'Emily Davis',
                'text' => 'An introduction to machine learning concepts.'
            ],
            [
                'title' => 'Designing User-Friendly Interfaces',
                'author' => 'Alex Turner',
                'text' => 'Tips for creating user-friendly and intuitive interfaces.'
            ]
        ],
    ];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

    <?php
        foreach ($posts as $date => $postList) {
            echo "Date: ".$date."<br>";

            foreach ($postList as $post) {
                echo "- Title: ".$post['title']."<br>";
                echo "- Author: ".$post['author']."<br>";
                echo "- Text: ".$post['text']."<br>";
                echo "<br>";
            }
        }
    ?>

</body>

</html>