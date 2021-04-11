<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Схема проезда</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Text&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width">
    <link rel="icon" href="/img/pistons-cross1.svg">
    <style>
        .wrapper{
            height: calc(100vh - 60px);
        }
        body img{
            margin-inline:10%;
            margin-top: 100px;
            border-radius: 40px;
            width:80%;
        }
        .how_to_hit_the_spot2{
            display: none;
        }
        @media (max-width: 700px){
            body img{
                margin: auto;}

            .how_to_hit_the_spot1{
                display: none;
            }
            .how_to_hit_the_spot2{
                display: block;
                margin-top: 70px;
            }
        }
        @media (max-width: 400px){
            .how_to_hit_the_spot2{
                margin-top: 50px;
            }
        }
    </style>
</head>
<body>
<div class="wrapper">
    <img class="how_to_hit_the_spot1" src="img/how_to_take1.PNG">
    <img class="how_to_hit_the_spot2" src="img/how_to_take2.png">
</div>
</body>
</html>
