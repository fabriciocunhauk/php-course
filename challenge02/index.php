<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Challenge 02</title>
</head>

<body>
    <header>
        <h1>Draw numbers</h1>
    </header>
    <main>
        <?php
        $randomNum = mt_rand(0, 100);

        echo "<p>The draw number is</p> $randomNum";
        ?>
        <button onclick="javascript:document.location.reload()">Click</button>
    </main>

</body>

</html>