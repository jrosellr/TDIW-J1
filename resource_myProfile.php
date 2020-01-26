<html lang="en">
<head>
    <title>Profile</title>
    <meta name="author" content="Joan Rosell">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css?v= <?php echo time(); ?>">
    <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"></script>
    <script src="js/src.js" type="application/javascript"></script>
</head>

<body>
<div class="content-wrapper">
    <header class="top-menu">
        <?php require_once __DIR__ . '/controller/controller_mainMenu.php'; ?>
        <?php require_once __DIR__ . '/controller/controller_asideMenu.php'; ?>
    </header>

    <main id="mainSection">
        <?php require_once __DIR__ . '/controller/controller_userDetail.php'; ?>
    </main>

    <footer><?php require_once __DIR__ . '/controller/controller_footer.php'; ?></footer>
</div>
</body>
</html>