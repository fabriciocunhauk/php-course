<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Challenge PHP</title>
</head>

<body>
    <header>
        <h1>Check Real Numbers</h1>
    </header>
    <main>
        <?php
        $number = $_POST['number'] ?? 0;
        $int = (int) $number;
        $fra = $number - $int;

        echo "<p>Analyzing Number " . number_format($number, 3, ",", ".") . "</p>";
        echo "
        <ul>
        <li>Then integer is " . number_format($number, 0, ",", ".") . "</li>
        <li>Then fraction is $fra</li>
        </ul>";
        ?>
        <a href="javascript:history.go(-1)">Back</a>
    </main>
</body>

</html>