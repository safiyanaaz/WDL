<?php
/*
* Author: Muhammed Salman Shamsi
* Created On: 13 Aug, 2018 
*/
$link=null;
function connectdB(){
    $db_host="localhost";
    $db_user="root";
    $db_password="root";
    $db_name="AIKTC";

    GLOBAL $link;
    $link=mysqli_connect($db_host,$db_user,$db_password) or die (mysqli_error());

    mysqli_select_db($link,$db_name) or die (mysqli_error());

}
function queryMysql($query)
{
    connectdB();
    global $link;
    $result= mysql-_query($link,$query);
    if(!$result)
    {
        echo '<div class="alert alert-danger>Failed to execute query<br>Mysql Error:'.mysqli_error($link).'</div>';
        die();
    }
    mysqli_close($link);
    return($result);
}
function fix_name($name){
    $name=trim($name);
    $name=  ucfirst($name);
    $name=  addslashes($name);
    return $name;
}
function fix_email($email){
    $email=trim($email);
    $email=  strtolower($email);
    $email=  addslashes($email);
    return $email;
}
function fix_address($address){
    $address=trim($address);
    $address=  strtoupper($address);
    $address=  addslashes($address);
    return $address;
}
function fix_rollno($rollno){
    $rollno=trim($rollno);
    $rollno=  strtoupper($rollno);
    return $rollno;
}


?>