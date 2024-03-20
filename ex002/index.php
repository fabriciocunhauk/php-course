<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>PHP Example</h1>
    <?php
    date_default_timezone_set("Europe/London");
    // Simple Example
    date_default_timezone_set("Europe/London");
    echo "Hoje e Dia " . date("d/M/Y");
    echo "E a hora atual" . date("G:i:s");

    // Enhanced Example
    $date1 =  date("D/M/Y");
    $date2 =  date("s/M/Y");
    $our =  date("G:i:s");

    echo "<p>Hoje e Dia \n$date1 </p>";
    echo "<p>Hoje e Dia \n$date2 </p>";
    echo "<p>E a hora atual  \n$our </p>";
    ?>
</body>

</html>