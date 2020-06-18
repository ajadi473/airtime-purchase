<?php

    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => 'http://testcURL.com'
    ]);

?>
<html>
    <head>
        <title>Send Airtime</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>to-do list</h1>
        <h4>lists</h4>
        <input type="text" id="todo" placeholder="enter items">
        <input type="button" value="enter" id="enter">
        <ol id="ol" class="undo"></ol>
        <button id="toDelete">delete</button>
        <button id="toDone">Send Airtime</button>



        <script src="script.js"></script>
        <script>
            dd();
            
            function dd(){
                <?php
                    $num = 2;
                    echo $num;
                ?>
            }
        </script>
    </body>
</html>