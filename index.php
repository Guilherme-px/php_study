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
    <title>Curso PHP</title>
</head>

<body>
    <header class="header">
        <h1>PHP course</h1>
        <h2>Exercise index</h2>
    </header>
    <main class="main">
        <div class="content">
            <nav class="modules">
                <div class="module">
                    <h3>Basic</h3>
                    <ul>
                        <li>
                            <a href="exercise.php?dir=basic&file=hello">Hello PHP</a>
                        </li>
                        <li>
                            <a href="exercise.php?dir=basic&file=html">HTML integration</a>
                        </li>
                        <li>
                            <a href="exercise.php?dir=basic&file=css">Css integration</a>
                        </li>
                        <li>
                            <a href="exercise.php?dir=basic&file=comments">PHP comments</a>
                        </li>
                        <li>
                            <a href="exercise.php?dir=basic&file=challenge">PHP challenge</a>
                        </li>
                    </ul>
                </div>
                <div class="module">
                    <h3>Types</h3>
                    <ul>
                        <li>
                            <a href="exercise.php?dir=types&file=int">Integer type</a>
                        </li>
                        <li>
                            <a href="exercise.php?dir=types&file=float">Float type</a>
                        </li>
                        <li>
                            <a href="exercise.php?dir=types&file=arithmetic">Arithmetic Op</a>
                        </li>
                        <li>
                            <a href="exercise.php?dir=types&file=precedence_challenge">Precedence challenge</a>
                        </li>
                        <li>
                            <a href="exercise.php?dir=types&file=strings">String type</a>
                        </li>
                        <li>
                            <a href="exercise.php?dir=types&file=string_challenge">String challenge</a>
                        </li>
                        <li>
                            <a href="exercise.php?dir=types&file=boolean">Boolean type</a>
                        </li>
                        <li>
                            <a href="exercise.php?dir=types&file=conversions">Conversions</a>
                        </li>
                    </ul>
                </div>
                <div class="module">
                    <h3>Variables</h3>
                    <ul>
                        <li>
                            <a href="exercise.php?dir=variables&file=basic">Basic of variables</a>
                        </li>
                        <li>
                            <a href="exercise.php?dir=variables&file=challenge_equation">Challenge equation</a>
                        </li>
                        <li>
                            <a href="exercise.php?dir=variables&file=assignments">Assignments</a>
                        </li>
                        <li>
                            <a href="exercise.php?dir=variables&file=interpolation">Interpolation</a>
                        </li>
                        <li>
                            <a href="exercise.php?dir=variables&file=value_reference">Value vs reference</a>
                        </li>
                        <li>
                            <a href="exercise.php?dir=variables&file=constant">Constants</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </main>
    <footer class="footer">
        COD3R & students &copy; <?= date('Y') ?>
    </footer>
</body>

</html>