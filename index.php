<?php include "dati.php"; ?>
<!doctype html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="./assets/css/master.css">
    <title>Domande frequenti - Privacy e termini - Google</title>
</head>
<body>
    <header>
        <div class="top">
            <img src="https://www.gstatic.com/images/branding/googlelogo/svg/googlelogo_clr_74x24px.svg" alt="logo">
            <span id="privacy">Privacy e termini</span>
            <span id="menu-icon"><i class="fas fa-th"></i></span>
            <img id="profile" src="./assets/img/avatar.webp" alt="propic">
        </div>

        <nav>
            <ul>
                <li>Introduzione</li>
                <li>Norme sulla privacy</li>
                <li>Termini di servizio</li>
                <li>Tecnologie</li>
                <li>Domande frequenti</li>
            </ul>
        </nav>
        <hr>
    </header>
    <main>
        <div class="container">
            <div class="faq">
                <?php
                    foreach ($faq as $domanda => $contenuto) {
                        echo "<h2>". $contenuto['titolo']."</h2>";
                        foreach ($contenuto as $paragrafo => $testo) {
                            if (is_array($testo)){
                                foreach ($testo as $punto => $text) {
                                    if (is_array($text) && $punto === "punto1") {
                                        echo "<ol>
                                                <li>".$text['primario']."
                                                    <ol id='inner'>
                                                        <li>". $text['a'] ."</li>
                                                        <li>". $text['b'] ."</li>
                                                    </ol>
                                                </li>";
                                    } elseif ($punto === "punto2") {
                                        echo "<li>". $testo['punto2'] ."</li></ol>";
                                    }

                                }
                                if (is_array($testo) && $paragrafo ==="p4") {
                                    echo "<h3>". $testo['sottotitolo'] ."</h3>";
                                    echo "<p>". $testo['p1'] ."</p>";
                                    echo "<p>". $testo['p2'] ."</p>";
                                    echo "<p>". $testo['p3'] ."</p>";

                                }

                            } else {
                                echo "<p>". $testo ."</p>";
                            }

                        }
                    }
                ?>
            </div>
        </div>
    </main>
    <footer>
        <div class="container">
            <ul id="left">
                <li>Google</li>
                <li>Tutto su Google</li>
                <li>Privacy</li>
                <li>Termini</li>
            </ul>
            <ul id="right">
                <li><i class="fas fa-globe"></i></li>
                <li><label for="lingua"></label><select name="lingua" id="lingua">
                        <option value="Italiano">Italiano</option>
                        <option value="Inglese">Inglese</option>
                    </select></li>
            </ul>
        </div>
    </footer>
</body>
</html>
