<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css"/>
    <title>Document</title>
</head>
<body>
    <div id="mainDiv">
            <span id="landing">WELCOME TO HNG INTERNSHIP 4.0</span>
            <pre id="social"> <a href="https://twitter.com/hotelsng">twitter</a>  |  <a href="https://hotels.ng">WEBSITE</a>  |  <a href="https://www.instagram.com/hotelsng">instagram</a></pre>
            <br /><br /><br /><br />
            <span id="datetime">
                    <?php
                        echo "<b>". date("h:i:sa")."</b>";
                    ?>
            </span>
    </div>
    
</body>
</html>