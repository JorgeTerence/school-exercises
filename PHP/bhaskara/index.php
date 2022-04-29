<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Bhaskara's Formula</title>
</head>

<body>
    <h1>Bhaskara's Formula</h1>
    <form action="index.php" method="get" class="card">
        <div class="field">
            <label for="a">Value of A</label>
            <input type="number" name="a">
        </div>
        <div class="field">
            <label for="b">Value of B</label>
            <input type="number" name="b">
        </div>
        <div class="field">
            <label for="c">Value of C</label>
            <input type="number" name="c">
        </div>
        <button type="submit">Submit</button>
        <button type="reset">Clear</button>
    </form>
    <div class="card">
        <?php
        if (!isset($_GET["a"]) || !isset($_GET["b"]) || !isset($_GET["c"])) {
            return;
        }

        $a = $_GET["a"];
        $b = $_GET["b"];
        $c = $_GET["c"];

        $delta = ($b ** 2) - (4 * $a * $c);

        if ($delta < 0) {
            echo ("The result is a complex number");
            return;
        }

        $x1 = ((-1 * $b) + ($delta ** 0.5)) / (2 * $a);
        $x2 = ((-1 * $b) - ($delta ** 0.5)) / (2 * $a);

        if ($x1 == $x2) echo ("x = $x1");
        else echo ("<span>x1 = $x1</span><span>x2 = $x2</span>");
        ?>
    </div>
</body>

</html>