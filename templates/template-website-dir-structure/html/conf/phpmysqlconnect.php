<?php
/******************************************************************************
 *          Name: phpmysqlconnect.php
 *        AUTHOR: Chad Chapman
 *  DATE CREATED: 20200810
 *   DESCRIPTION: This php file performes a test connection to the 
 *                [database_name] database.
 *       VERSION: 1.0
 *****************************************************************************/
?>

<?php
    // Includes 
    require_once 'dbconfig.php';

    // Test database connection
    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        echo "Connected to $dbname at $host successfully.";
    } catch (PDOException $pe) {
        die("Could not connect to the database $dbname :" . $pe->getMessage());
    }

?>
