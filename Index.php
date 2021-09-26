<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="New.css" type="text/css" />
    <title>Yadnya</title>
</head>
<body>
    <div class="container">
        <h1> is my first Php Program.</h1>
        <?php
        echo "Hello World......";
        $lang = array("C","C++");

        for($i=0;$i<count($lang);$i++)
        {
            echo "<br>",$lang[$i];
        }

        ?>
    </div>
</body>
</html>