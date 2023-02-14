<?php
//dit stuk is vrij onnodig besteed hier gwn geen tijd aan
include "connect.php";
try {

    // INSERT query maken en uitvoeren.
    $stmt = $conn->prepare("INSERT INTO login_data (us, psw) 
    VALUES (:us, :psw)");
    $stmt->bindParam(':us', $us);
    $stmt->bindParam(':psw', $psw);


    // Als er een waarde is INSERT rij
    if (isset($_REQUEST['us']))
 {
    $us = $_POST['us'];
    $psw = $_POST['psw'];
    


    $stmt->execute(array(
        ':us' => (string)($us), 
        ':psw' => (string)($psw),

           ));
    
    }}
    catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }
    
?>