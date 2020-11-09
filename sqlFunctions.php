<?php

// $dbcon;

function dbconnection(){
   global $dbcon ;
   $dbcon = mysqli_connect("localhost","root","","rent_a_car_db");
}

function getClinets(){
    global $dbcon;
    dbconnection();
    $query = "SELECT * FROM klientet";
    $result = mysqli_query($dbcon, $query);
    return $result;
}

 function addClient($emri,$mbiemri,$emaili,$nr_personal,$telefoni,$adresa){
    global $dbcon;
    dbconnection();
    $query="INSERT INTO klientet(emri, mbiemri, emaili, nr_personal, telefoni, adresa) VALUES ('$emri','$mbiemri','$emaili',$nr_personal,'$telefoni','$adresa')";
    $result=mysqli_query($dbcon,$query);

    if($result){
        header("Location: klientet.php");

     }
    }

function getAutomjetet(){
    global $dbcon;
    dbconnection();
    $query = "SELECT * FROM automjetet";
    $result = mysqli_query($dbcon, $query);
    return $result;
}



function getCategories(){
     global $dbcon;
    dbconnection();
    $query = "SELECT * FROM kategorite";
    $result = mysqli_query($dbcon, $query);
    return $result;

}


function addCategories($emri,$pershkrimi,$kostoja){
    global $dbcon;
    dbconnection();
    $query="INSERT INTO kategorite(emri, pershkrimi, kostoja) VALUES ('$emri','$pershkrimi','$kostoja')";
    $result=mysqli_query($dbcon,$query);

    if($result){
        header("Location: kategorite.php");

     }
    }

  function getRezervimet(){
    global $dbcon;
    dbconnection();
    $query="SELECT k.emri, k.mbiemri, a.emri, h.datamarrjes, h.datakthimit, h.kostoja from huat h INNER join automjetet a on h.automjetiID=a.automjetiID INNER join klientet k on h.klientID=k.klientID";
    $result=mysqli_query($dbcon, $query);
    return $result;
  }
?>