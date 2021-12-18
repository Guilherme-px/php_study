<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
    <!-- Css -->
    <link rel="stylesheet" href="/assets/css/styles.css">
    <link rel="stylesheet" href="/assets/css/exercise.css">
    <title>Exercise PHP</title>
</head>

<body class="exercise">
    <header class="header">
        <h1>PHP course</h1>
        <h2>Exercise 1</h2>
    </header>
    <nav class="navigation">
        <a href="<?= "/{$_GET['dir']}/{$_GET['file']}.php" ?>">No formatting</a>
        <a href="index.php">Home</a>
    </nav>
    <main class="main">
        <div class="content">
            <?php
            include("{$_GET['dir']}/{$_GET['file']}.php")
            ?>
        </div>
    </main>
    <footer class="footer">
        COD3R & students &copy; <?= date('Y') ?>
    </footer>
</body>

</html>