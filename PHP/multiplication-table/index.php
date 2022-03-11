<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style.css">
    <title>HTTP Methods</title>
</head>
<body>
    <h1>Multiplication Table 🐘</h1>
    <p>Select a number</p>
    <form action="response.php" method="post">
        <select name="num" id="num">
            <?php
            for ($i = 1; $i <= 31; $i++) {
                echo("<option value=\"" . $i . "\">" . $i . "</option>");
            }
            ?>
        </select>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
