<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>留言板</title>
    <style>
        .wrap {
            width: 800px;
            margin: 0px auto;
        }

        .add {
            overflow: hidden;
        }

        .add .content {
            width: 798px;
            margin: 0px;
            padding: 0px;
        }

        .add .user {
            float: left;
        }

        .add .button {
            float: right;
        }

        .msg {
            margin: 20px;
            padding: 0px;
            background: #e4d4d4;
        }

        .msg .info {
            overflow: hidden;
        }

        .msg .user {
            float: left;
            color: rgb(1, 43, 36);
        }

        .msg .date {
            float: right;
            color: #88898b
        }

        .msg .content {
            width: 100%;
            padding: 5px
        }
    </style>
    <?php
    function foo($msg)
    {
        $myfile = fopen("msg.txt", "r") or die("Unable to open file!");

        $index = 0;
        while (!feof($myfile)) {
            //echo fgets($myfile). "<br>";
            $msg[$index] = fgets($myfile);
            $index += 1;
        }

        fclose($myfile);
        return $msg;
    }
    ?>
</head>

<body>
    <div class="wrap">
        <div class="add">
            <form action="Msg.php" method="POST">
                <textarea class="content" name="content" cols="50" rows="10" placeholder="内容"></textarea>
                <br />
                <input class="user" type="text" name="user" placeholder="用户名">

                <input class="button" type="submit" value="发表留言">
            </form>
        </div>
        <?php
        $msg = array();
        $msg = foo($msg);
        foreach ($msg as $m) {
            $da = explode("{:}", $m);
            $user = $da[0];
            @$content = $da[1];
            @$date = $da[2];

            ?>
            <div class="msg">
                <div class="info">
                    <span class="user"><?php echo $user; ?></span>
                    <span class="date"><?php echo date("Y-m-d H:i:s", $date); ?></span>
                </div>
                <div class="content"><?php echo $content; ?></div>
            </div>
        <?php
    }
    ?>
    </div>

</body>

</html>