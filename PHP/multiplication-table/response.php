<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style.css">
    <title>HTTP Methods</title>
</head>
<body>
    <h1>Results</h1>
    <table>
        <?php
        $n = (int)$_POST['num'];
        for ($i = 0; $i <= 10; $i++) {
            echo("<tr><td>" . $n . " x " . $i . " = " . $n * $i . "</td></tr>");
        }
        ?>
    </table>
    <p>
        <a href="index.php">Go back</a>
    </p>
</body>
</html>
