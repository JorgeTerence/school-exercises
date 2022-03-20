<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style.css">
    <title>Paint shop</title>
</head>
<body>
    <h1>Paint shop 🎨</h1>
    <form action="index.php" method="get">
        <label for="area">Área desejada</label>
        <input type="number" name="area" id="area">
        <input type="submit" value="Enviar">
        <button id="clear">Apagar</button>
    </form>
    <script defer>
		document.getElementById("clear").addEventListener("click", () => {
		    document.getElementById("area").value = 0;
		});
    </script>
    <?php
    # Buy per square meter
    # 1L = 3m²
    # 1Can = 18L = $80

    # Return:
    # Ammount of cans
    # Price

	if (isset($_GET['area'])) {
    	$area = $_GET['area'];
    	$liters = $area / 3;
    	$cans = ceil($liters / 18);
    	$total = $cans * 80;

    	echo("<span>latas: " . $cans . "</span>");
    	echo("<span>total: $" . $total . "</span>");
	}
    ?>
</body>
</html>
