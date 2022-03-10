<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="body">


    
    <?php

    //$color = array(
    //    1=> "#30010b",
    //    2=> "#888c50",
    //    3=> "#d0b363",
    //    4=> "#8ded70",
    //    5=> "#0fe7ae",
    //    6=> "#41781c",
    //    7=> "#a8a06d",
    //    8=> "#2d8477",
    //    9=> "#4430b2",
    //    10=> "#bc9586",
    //    11=> "#8f09bc",
    //    12=> "#dd3d90",
    //    13=> "#d1431c",
    //    14=> "#1e3a6b",
    //    15=> "#4009de",
    //    16=> "#de413f",
    //    17=> "#e3848a",
    //    18=> "#7c6bf5",
    //    19=> "#46c2df",
    //    20=> "#a47466",
    //    21=> "#567785",
    //    22=> "#9a6c7f",
    //    23=> "#085611",
    //    24=> "#238d56",
    //    25=> "#8a9cf7",
    //    26=> "#e86ccd",
    //    27=> "#f88ac4",
    //    28=> "#99d4a2",
    //    29=> "#b358d7",
    //    30=> "#ec6565",
    //    31=> "#ac13cc",
    //    32=> "#7fdf0e",
    //    33=> "#1677fd" ,
    //    34=> "#fda00d",
    //    35=> "#df1a5e",
    //    36=> "#80c2e1",
    //    37=> "#594046",
    //    38=> "#2e5baf", 
    //    39=> "#5b1f13",
    //    40=> "#181a8c"    
    //);
    //for ($i=0;  $i < 40; $i++) {
    //    echo '<font color="'.$color[rand(1,40)].'">Hello World<br></font>';;
    //};
    
    for ($i=0;  $i < 41; $i++) {
        echo '<div class="div" style="background: rgb('.random_int(0, 255).', '.random_int(0, 255).', '.random_int(0, 255).')"></div>';
    };
    
        ?>
</body>
</html>