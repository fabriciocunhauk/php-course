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
        <h1>Currency Converter</h1>
    </header>
    <main>
        <?php
        $real = $_GET['number'] ?? "No Number";
        $dolarPrice = 5.22;
        $convertedNumber = $real / $dolarPrice;

        echo "Your " . number_format($real, 2, ",", ".") . " Converted to Dolar is  US$" . number_format($convertedNumber, 2, ",", ".");
        ?>
        <a href="javascript:history.go(-1)">Back</a>
    </main>
</body>

</html>