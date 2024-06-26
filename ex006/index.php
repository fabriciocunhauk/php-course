<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercise PHP</title>
</head>

<body>
    <header>
        <h1>Values Sum</h1>
    </header>
    <?php
    // This section uses PHP to process user input and display the sum
    $value1 = $_GET["value1"] ?? 0; // Assigns value from form field "value1" or sets to 0 if not provided
    $value2 = $_GET["value2"] ?? 0; // Assigns value from form field "value2" or sets to 0 if not provided
    ?>

    <main>
        <section>
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
                <label for="value1">Value 1</label>
                <input type="number" name="value1" value="<?= $value1 ?>" id="value1">
                <label for="value2">Value 2</label>
                <input type="number" name="value2" value="<?= $value2 ?>" id="value2">
                <input type="submit" value="Calculate">
            </form>
        </section>

        <section>
            <h2>Sum Result</h2>
            <?php
            $sum = $value1 + $value2; // Calculates the sum of the two values

            print "<p>Te Sum of <strong>$value1</strong> and <strong>$value2</strong> is <strong>$sum</strong> </p>"; // Displays the sum result
            ?>
        </section>
    </main>
</body>

</html>