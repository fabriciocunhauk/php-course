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
        <h1>Form submission Result</h1>
    </header>
    <main>
        <?php
        $number = $_GET['number'] ?? "No Name";
        $previous = $number - 1;
        $next = $number + 1;

        echo "<p>The number is $number</p>";
        echo "<p>The previous number is $previous</p>";
        echo "<p>The next number is $next</p>";
        ?>
        <a href="javascript:history.go(-1)">Back</a>
    </main>
</body>

</html>