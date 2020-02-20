<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $user = $_POST["user"];
        $content = $_POST["content"];
        $time = time();
        function foo($user, $content, $time) {      
            $myfile = fopen("msg.txt", "a") or die("Unable to open file!");
            $msg = $user . "{:}" . $content . "{:}" . $time ."\n";
            fwrite($myfile, $msg);
            fclose($myfile);
        }
        foo($user, $content, $time);
        echo '<script>
            window.location.href="MsgBoard.php";  
            </script>';
        //$sql = "INSERT INTO msg (user, content, date) VALUES ('{$user}', '{$content}', '{$time}')";
       // $db->query($sql);
    ?>
</body>
</html>