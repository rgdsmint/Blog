<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>skiping</title>

</head>

<body>
    <?php
    $name = $_POST["name"];
    $password = $_POST["password"];
    if (($password == "admin" && $name == "admin") || ($password == "2926627601" && $name == "2926627601")) {
        echo '<script>
            document.cookie="can";
            </script>';
        echo '<script>
            window.location.href="OneClassNineGrade.html";  
            </script>';
    } else {
        echo "No! You can't see anything.";
        echo "<br />";
        echo "Because your name or password isn't right.";
    }
    ?>
</body>

</html>