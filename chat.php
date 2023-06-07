<html>
    <head>
        <meta charset="utf-8">
        <meta name=”viewport” content="width=device-width,initial-scale=1">
        <title>sapmle</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/fontawesome-free-5.15.3-web/css/all.min.css">
        <script src="js/main.js"></script>
    </head>
    <body>
        <main class="main">
            <div class="chat">
                <form class="send flex-box" action="chat.php#chatarea" method="post">
                    <textarea id="textarea" type="text" name="text" rows="1" requried placeholder="messageを入力"></textarea>
                    <input type="submit" name="button1" value="submit" id="search" required>
                    <label for="search"><i class="far fa-paper-plane"></i></label>
                </form>
            </div>
        </main>
    </body>
</html>