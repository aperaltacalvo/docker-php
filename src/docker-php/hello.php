    <html>
        <head>
        <link rel="stylesheet" type="text/css" href="css/formulario.css"/>
        <meta http-equiv="refresh" content="4;index.php" />
        </head>
        <header>
            <img src="images/platano.jpg" style="float: left" height="130" width="180"/>
            <img src="images/lobo.jpg" style="float: right" height="130" width="180"/>
        </header>
        <body>
                <h1>Results</h1>

    <?php

                $name=$_GET["name"];
                echo "Buenos días {$name}";

        ?>
        </body>
</html>
