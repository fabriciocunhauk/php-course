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
        $name = $_GET['name'] ?? "No Name";
        $surname = $_GET['surname'];
        echo "<p>My name is $name $surname</p>"
        ?>
        <a href="javascript:history.go(-1)">Back</a>
    </main>
</body>

</html>