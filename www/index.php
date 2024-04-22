<?php

//echo "this www folder <br>";
//
//var_dump(is_dir("index"));

//connect DB**********
$dsn = "mysql:dbname=testdb;host=127.0.0.1";
$name = "root";
$password = "mozene33";

try {
    // подключаемся к серверу
    $pdo = new PDO($dsn, $name, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Database connection established <br>";
}
catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

//$pdo = new PDO($dsn, $name, $password);
$all = $pdo->query("SELECT * FROM test");
foreach ($all as $item) {
    //var_dump($item);
    echo $item["id"] . " " . $item["name"] . " " . $item["fullname"] . PHP_EOL . "</br>";
}

//*******************

//$ar = ["pvh", "al", "glass"];
//$base = $ar[0];
//switch ($base) {
//    case "pvh":
//        $dir_sp_klaes = "C:\WebServer\sites\mysite.com\hlam";
//        //echo 1;
//        break;
//    case "al":
//        $dir_sp_klaes = "c:/Fen6_al/TEMP/AUF/";
//        echo 2;
//        break;
//    case "glass":
//        $dir_sp_klaes = "c:/Fen6_glass/TEMP/AUF/";
//        echo 3;
//        break;
//    default:
//        $dir_sp_klaes = "error";
//        echo 4;
//}
//
//if (is_dir($dir_sp_klaes)) {
//    if ($dir = opendir($dir_sp_klaes)) {
//        while (($file = readdir($dir)) !== false) {
//            //echo "<br> $file";
//            if ($file!='.' && $file!='..'){
//                $name = explode('.', $file);
//                var_dump($name);
//            }
//        }
//    }
//}

//****************************************

//$homepage = file_get_contents('../hlam/hlam.txt');
//echo $homepage;

echo "Hello new branch";
