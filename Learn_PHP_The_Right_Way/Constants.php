<?php

//  상수

// define ('이름', '값')

// const

define('FIRST_NAME', '진짜별이');
const SECOND_NAME = '잠자고 있는 별이';

$firstName = '별이';

// $firstName = '돌이';

// echo $firstName;

// echo '<br />';

// echo FIRST_NAME;

// echo '<br />';

// echo SECOND_NAME;

// echo '<br />';

// echo PHP_VERSION;

// echo '<br />';

// echo __LINE__;

// echo '<br />';

// echo __FILE__;
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constants</title>
    <link rel="stylesheet" href="../Design/style2.css">
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="content">
                <h2>01</h2>
                <h3>일반변수 호출</h3>
                <p><?=$firstName?></p>
                <a href="#">Read More</a>
            </div>
        </div>
        <div class="card">
            <div class="content">
                <h2>02</h2>
                <h3>상수 호출</h3>
                <p><?=FIRST_NAME?></p>
                <a href="#">Read More</a>
            </div>
        </div>
        <div class="card">
            <div class="content">
                <h2>03</h2>
                <h3>내장상수 호출</h3>
                <p><?=PHP_VERSION?></p>
                <a href="#">Read More</a>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="../Design/vanilla-tilt.js"></script>
    <script type="text/javascript">
        VanillaTilt.init(document.querySelectorAll(".card"), {
            max: 25,
            speed: 400,
            glare: true,
            "max-glare": 1
        });
    </script>    
</body>
</html>