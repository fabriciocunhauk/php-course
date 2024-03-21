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
        $real = $_GET['number'] ?? "No Name";
        $dolarPrice = 5.22;
        $convertedNumber = $real / $dolarPrice;

        echo "<p>Your R$$real  converted to Dolar is  $$convertedNumber</p>";
        ?>
        <a href="javascript:history.go(-1)">Back</a>
    </main>
</body>

</html>