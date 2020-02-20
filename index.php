<!DOCTYPE html>
<html lang="en">

<head>
    <script>
        /*document.cookie = "cant";*/
    </script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="test/css" href="css/index.css">
    <title>Info</title>
    <style>
        .impt {
            color: gray;
            font-size: 24px;
        }
    </style>
</head>

<body>
    <div class="warning"><?php
                            echo '<p> Hello the guys!</p>';
                            echo '<p> 想要看图册?</p>';
                            echo "<p> 请输入账号密码(管理员预设).</p>";
                            echo "<p> 你还可以用这个留言板!</p>";
                            ?>
        <ul>
            <li class="impt">
                <a target="_blank" href="MsgBoard.php" style="color: gray">留言板</a>
            </li>
        </ul>
    </div>

    <div class="skip">
        <li>Please input your name and password.</li>
        <form action="test1.php" method="post">
            <li>
                <input type="input" name="name" placeholder="账号">
            </li>
            <li>
                <input type="input" name="password" placeholder="密码">
            </li>
            <li><input type="submit" value="提交"></li>
        </form>
    </div>

    <ul>
        <li style="color: gray">
            <a target="_blank" href="http://rgdsmint.ooo" style="color: gray">我的博客</a>
        </li>
        <li style="color: gray">
            <a target="_blank" href="http://rgdsmint.xyz/WhoILove.html" style="color: gray">小姐姐的字符流星</a>
        </li>
        <li style="color: gray">
            <a target="_blank" href="http://rgdsmint.xyz/eatsnake.html" style="color: gray">贪吃蛇</a>
        </li>
    </ul>
</body>

</html>