<?php
const siteName= "Topcoin Xstreams";
function dbConnect(){
    $servername = "localhost";
    $username = "multistream6_topcoinxstreams";//DATABASE USERNAME
    $password = "topcoinxstreams";//DATABASE PASSWORD
    $database = "multistream6_topcoinxstreams";//DATABASE NAME
    $dns = "mysql:host=$servername;dbname=$database";

    try {
        $conn = new PDO($dns, $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}
//return dbConnect();

function inputValidation($value): string
{
    return trim(htmlspecialchars(htmlentities($value)));
}

//Query DB String

//$sql = "SELECT * FROM settings WHERE id ='1'";
//$stmt = $conn->prepare($sql);
//$stmt->execute();