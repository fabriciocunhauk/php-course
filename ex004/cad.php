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
        // Simple version
        // $name = $_GET['name'] ?? "No Name";
        // $surname = $_GET['surname'];

        // Accessing values from the form using GET method
        $name = isset($_GET['name']) ? $_GET['name'] : "No Name";   // Checks if "name" exists in GET data, otherwise sets to "No Name"
        $surname = $_GET['surname'] ?? null; // Similar to above, but uses null as default value

        /* 
      **Explanation of the lines above:**
      - `isset($_GET['name'])` checks if the key "name" exists in the `$_GET` superglobal array.
      - The ternary operator (`? :`) is used to assign a value based on the condition. 
        - If `isset($_GET['name'])` is true, it assigns the value of `$_GET['name']` to `$name`.
        - If `isset($_GET['name'])` is false, it assigns the string "No Name" to `$name`.
      - The nullish coalescing operator (`??`) is used to assign a default value if the left operand is null or undefined.
        - Here, it assigns the value of `$_GET['surname']` to `$surname` if it exists.
        - If `$_GET['surname']` is null or undefined, it assigns `null` to `$surname`.
    */

        echo "<p>My name is $name $surname</p>"; // Displays the retrieved name and surname
        ?>
        <a href="javascript:history.go(-1)">Back</a>
    </main>
</body>

</html>