<html>
    <head>
        <!-- <meta charset="utf-8">
        <meta name=”viewport” content="width=device-width,initial-scale=1"> -->
        <title>sapmle</title>
        <!-- <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/fontawesome-free-5.15.3-web/css/all.min.css">
        <script src="js/main.js"></script> -->
    </head>
    <body>
            <div>
                <form method="POST" action="<?php print($_SERVER['PHP_SELF']) ?>" required>
                <input type="text" name="name"  requried><br><br>
                <input type="submit" name="button1" value="submit" required>
                </form>

                <p>
                    <a href="<?php print($_SERVER['PHP_SELF']) ?>">getを送る</a>
                </p>
            </div>

            <?php
                print('結果<br>');
                if($_SERVER["REQUEST_METHOD"] != "POST") {
                    print("get");
                } else {
                    print('post<br>');
                    print($_POST["name"]);
                }
            ?>
    </body>
</html>