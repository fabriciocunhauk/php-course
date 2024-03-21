<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <header>
        <h1>Superglobals Result</h1>
    </header>
    <main>
        <pre>

<?php
// Set a cookie named "week-day" with value "MONDAY" expiring in 1 hour
setcookie("week-day", "MONDAY", time() + 3600);

// Start a new session or resume existing one
session_start();

// Assign value "WORKED!" to the session variable "test"
$_SESSION["test"] = "WORKED!";

// Displaying the values of Superglobal variables
echo "<h1>Superglobal GET</h1>";
var_dump($_GET); // Shows information about GET data (empty in this case)

echo "<h1>Superglobal POST</h1>";
var_dump($_POST); // Shows information about POST data (empty in this case)

// Combination of GET and POST data
echo "<h1>Superglobal REQUEST</h1>";
var_dump($_REQUEST); // Shows information about both GET and POST data (empty in this case)

echo "<h1>Superglobal COOKIE</h1>";
var_dump($_COOKIE); // Shows information about cookies, including "week-day"

echo "<h1>Superglobal SESSION</h1>";
var_dump($_SESSION); // Shows information about session variables, including "test"

echo "<h1>Superglobal ENV</h1>";
var_dump($_ENV); // Shows information about environment variables

echo "<h1>Superglobal SERVER</h1>";
var_dump($_SERVER); // Shows information about the server and request

echo "<h1>Superglobal GLOBALS</h1>";
var_dump($GLOBALS); // Shows information about all global variables (including superglobals)

?>
    </pre>
        <a href="javascript:history.go(-1)">Back</a>
    </main>
</body>

</html>