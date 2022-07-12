<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Gochiusa Live Photo DEMO</title>
    <link rel="stylesheet" href="rabbit_res/af2019.css">
    <style>
        body
        {
            background-image:url('rabbit_res/background.jpg');
            background-color:#cccccc;
        }
    </style>
</head>
<body>
    <div class="title">
        <h1>Gochiusa Live Picture DEMO</h1>
    </div>
    <div class="demo">
        <?php
        $info = array('chino', 'chiya', 'rize', 'syaro');
        $res_dir = 'rabbit_res/'.$info[array_rand($info)].'.html';
        echo file_get_contents($res_dir);
        ?>
    </div>
</body>
</html>

<style>
    @font-face {
    font-family: 'font';
        src:url('rabbit_res/font.ttf');
    }
    .title {
        font-family: font, serif;
        text-align: center;
    }
</style>
