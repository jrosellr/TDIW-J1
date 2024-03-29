<html lang="en">
<head>
    <title>Confirmation</title>
    <meta name="author" content="Joan Rosell">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"></script>
    <script src="js/src.js" type="application/javascript"></script>
</head>
<body>
<header class="top-menu">
    <?php require_once __DIR__ . '/controller/controller_mainMenu.php'; ?>
    <?php require_once __DIR__ . '/controller/controller_asideMenu.php'; ?>
</header>
<main id="mainSection">
    <h1>
        Order processed successfully.
    </h1>
    <h3>
        Please check your email for more details.
    </h3>
</main>
<footer><?php require_once __DIR__ . '/controller/controller_footer.php'; ?></footer>
</body>
</html>
