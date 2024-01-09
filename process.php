<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ice Cream Order Summary</title>
</head>
<body>
    <h1>Thank you for your order!</h1>
    <?php
        echo "<pre>";
        var_dump($_POST);
        echo "</pre>";

        $scoops = $_POST['scoops'];
        $flavors = $_POST['flavor'];
        $flavorString = implode(", ", $flavors);
        $cone = $_POST['cone'];

        // print a summary
        echo "<p>$scoops scoops</p>";
        echo "<p>$cone</p>";
        echo "<p>Flavors: $flavorString</p>";
    ?>
</body>
</html>