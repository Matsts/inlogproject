<?php
    include "connect.php";
    

    $us = $_POST['us'];
    $psw = $_POST['psw'];

    /*
    De bedoeling is om de row te vinden waarin de passende username in zit en dan daarna ook de verifieeëren of het wachtwoord klopt die
    bij de toepassende row zit
    **Dit moet in werkende code veranderd worden waardoor dit hieronder werkt**
    to prevent from mysqli injection  
    $sql = "SELECT *FROM login_data where us = '$us' and psw = '$psw'";
    $sql = vind row met $us erin;
    $count = found rows
    waar $us overheen komt met $psw + 1 $count
    *///

    if($count > 1){
        echo"<h1><center> Login successful</center></h1>";
    }
    else {
        echo "<h1><center> Login failed </center></h1>";
    }
    //vivesh code hierbeneden geschreven

    //error_reporting(0);
    error_reporting(E_ALL);

    require_once 'DB.class.php';

    try {
        $sth = DB::run("
            SELECT id, us, psw
            FROM login_data
            WHERE loginsystem
            "
            )->fetchALL(PDO::FETCH_ASSOC);
            } catch (PDOexception $e) {
            $e->GetMessage();
            }
    foreach ($sth as $value) {
     $value['id'].' | '
     .$value['username'].' | '
     .$value['psw'].' <br>';  

    }
    
    
    

$conn = null;
?>
