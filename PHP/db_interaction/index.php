<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>MySQL Connection</title>
</head>
<body>
    <h1>MySQL Query</h1>
    <table>
    <?php
    $server = "localhost";
    $user = "root";
    $password = "root";

    $connection = new mysqli($server, $user, $password, "Social");

    if ($connection->connect_error) die("Connection failed " . $connection->connect_error);

    $query = $connection->query("SELECT * FROM Users");

    if (!($result->num_rows > 0)) echo("No results");

    while ($row = $query->fetch_assoc()) {
        echo("<tr>" .
                "<td>ID: " . $row['id'] . "</td>" .
                "<td>Name: " . $row['name'] . "</td>" .
                "<td>E-mail: " . $row['email'] . "</td>" .
                "<td>Age: " . $row['age'] . "</td>" .
            "</tr>"
        );
    }

    $connection->close();

    # This is the worst language API I've ever seen
    ?>
    </table>
</body>
</html>
