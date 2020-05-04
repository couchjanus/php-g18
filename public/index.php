<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul>
        <li><a href="get.php">Get</a></li>
        <li><a href="post.php">Post</a></li>
        <li><a href="req.php">Request</a></li>
    </ul>
    <?php

    function foo($a, $b = "Hello ")
    {
        echo "<h2>Inside function.</h2>";
        $retval = "<h2>".$b.$a."</h2>"; 
        return $retval;
    }

    echo foo("World");

    $a = "<h3>глобальная область видимости</h3>"; /* глобальная область видимости */

    function test()    {
        $a = "<h3>локальная область видимости</h3>";
        echo $a; /* ссылка на переменную в локальной области видимости */
    }
    
    echo $a;
    test();

    // Использование global
    $a = 1;
    $b = 2;

    function Sum() {
        global $a, $b;
        $b = $a + $b;
    } 
    Sum();
    echo $b;

    // Использование $GLOBALS вместо global
    //  function Sum()
    //  {
    //      $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
    //  }

    // Суперглобальные переменные
    // var_dump($GLOBALS);


    /**
     *  @return string текущий адрес запроса 
     **/ 
    function getURI()
    {
        if (isset($_SERVER['REQUEST_URI']) and !empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }
    // $uri = getURI();
    // switch ($uri) {
    //     case '':
    //         include 'home.php';
    //         break; 
    //     case 'about':
    //         include 'about.php';
    //         break; 
    //     case 'contact':
    //         include 'contact.php';
    //         break; 
    //     default:
    //         include '404.php';
    // }  
    
    ?>
    </body>
</html>
