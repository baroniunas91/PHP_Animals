<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gyvūnai</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Apklausa</h1>
    <?php
    if (isset($_GET['submit'])) {
        $goodAnswers = ['elnias', 'suo', 'katinas', 'begemotas'];
        $points = 0;
        $rez = 0;
        $ats = [];
        $optionsCount = count($goodAnswers);
        if (count($_GET) - 1 != $optionsCount) {
            if (!isset($_GET['test'])) {
                $ats[] = '';
            } else {
                $ats[] = $_GET['test'];
            }

            if (!isset($_GET['test2'])) {
                $ats[] = '';
            } else {
                $ats[] = $_GET['test2'];
            }

            if (!isset($_GET['test3'])) {
                $ats[] = '';
            } else {
                $ats[] = $_GET['test3'];
            }

            if (!isset($_GET['test4'])) {
                $ats[] = '';
            } else {
                $ats[] = $_GET['test4'];
            }
        }
        foreach ($_GET as $key => $value) {
            if ($key != 'submit') {
                $ats[] = $value;
            }
        }
        foreach ($goodAnswers as $key => $val) {
            if ($val == $ats[$key]) {
                $points++;
            }
        }
        if ($points != 0) {
            $rez = round(((100 * $points) / $optionsCount), 1);
        }
        echo "<p>Jūs atsakėte teisingai į $points klausimus iš $optionsCount ir surinkite $rez%</p>";
    }
    ?>
    <form action="" method="get">
        <div class="block">
            <img src="https://upload.wikimedia.org/wikipedia/commons/8/8a/Dortmund-Zoo-IMG_5518-a2.jpg" alt="Elnias">
            <div>
                <?php
                if (!isset($_GET['submit'])) {
                ?>
                    <h2>Koks tai gyvūnas?</h2>
                    <div>
                        <input type="radio" name="test" id="_1" value="elnias">
                        <label for="_1">Elnias</label>
                    </div>
                    <div>
                        <input type="radio" name="test" id="_2" value="suo">
                        <label for="_2">Šuo</label>
                    </div>
                    <div>
                        <input type="radio" name="test" id="_3" value="katinas">
                        <label for="_3">Katinas</label>
                    </div>
                    <div>
                        <input type="radio" name="test" id="_4" value="begemotas">
                        <label for="_4">Begemotas</label>
                    </div>
                <?php
                } else {
                    if (isset($_GET['test'])) {
                        if ('elnias' == $_GET['test']) {
                            echo "<p style=\"color: green;\">Jūsų atsakymas teisingas!</p>";
                        } else {
                            echo "<p style=\"color: red;\">Jūsų atsakymas neteisingas!</p>";
                        }
                    } else {
                        echo "<p style=\"color: red;\">Jūs nieko nepasirinkote!</p>";
                    }
                }
                ?>
            </div>
        </div>

        <div class="block">
            <img src="https://tavogyvunas.lt/wp-content/uploads/2019/04/%C5%A0un%C5%B3-veisl%C4%97s-Japon%C5%B3-Akita-Inu-angl.-Akita-Inu-i%C5%A1skirtinio-charakterio-%C5%A1uo-1-672x400.jpg" alt="Suo">
            <div>
                <?php
                if (!isset($_GET['submit'])) {
                ?>
                    <h2>Koks tai gyvūnas?</h2>
                    <div>
                        <input type="radio" name="test2" id="_5" value="elnias">
                        <label for="_5">Elnias</label>
                    </div>
                    <div>
                        <input type="radio" name="test2" id="_6" value="suo">
                        <label for="_6">Šuo</label>
                    </div>
                    <div>
                        <input type="radio" name="test2" id="_7" value="katinas">
                        <label for="_7">Katinas</label>
                    </div>
                    <div>
                        <input type="radio" name="test2" id="_8" value="begemotas">
                        <label for="_8">Begemotas</label>
                    </div>
                <?php
                } else {
                    if (isset($_GET['test2'])) {
                        if ('suo' == $_GET['test2']) {
                            echo "<p style=\"color: green;\">Jūsų atsakymas teisingas!</p>";
                        } else {
                            echo "<p style=\"color: red;\">Jūsų atsakymas neteisingas!</p>";
                        }
                    } else {
                        echo "<p style=\"color: red;\">Jūs nieko nepasirinkote!</p>";
                    }
                }
                ?>
            </div>
        </div>

        <div class="block">
            <img src="https://s1.15min.lt/images/photos/2012/04/29/original/katinas-4f9d380e1671a.jpg" alt="Katinas">
            <div>
                <?php
                if (!isset($_GET['submit'])) {
                ?>
                    <h2>Koks tai gyvūnas?</h2>
                    <div>
                        <input type="radio" name="test3" id="_9" value="elnias">
                        <label for="_9">Elnias</label>
                    </div>
                    <div>
                        <input type="radio" name="test3" id="_10" value="suo">
                        <label for="_10">Šuo</label>
                    </div>
                    <div>
                        <input type="radio" name="test3" id="_11" value="katinas">
                        <label for="_11">Katinas</label>
                    </div>
                    <div>
                        <input type="radio" name="test3" id="_12" value="begemotas">
                        <label for="_12">Begemotas</label>
                    </div>
                <?php
                } else {
                    if (isset($_GET['test3'])) {
                        if ('katinas' == $_GET['test3']) {
                            echo "<p style=\"color: green;\">Jūsų atsakymas teisingas!</p>";
                        } else {
                            echo "<p style=\"color: red;\">Jūsų atsakymas neteisingas!</p>";
                        }
                    } else {
                        echo "<p style=\"color: red;\">Jūs nieko nepasirinkote!</p>";
                    }
                }
                ?>
            </div>
        </div>

        <div class="block">
            <img src="https://www.diena.lt/sites/default/files/styles/800x600/public/Vilniausdiena/Vartotoju%20zona/lukas.s/img878477.jpg?itok=XV4Wwlei" alt="Begemotas">
            <div>
                <?php
                if (!isset($_GET['submit'])) {
                ?>
                    <h2>Koks tai gyvūnas?</h2>
                    <div>
                        <input type="radio" name="test4" id="_13" value="elnias">
                        <label for="_13">Elnias</label>
                    </div>
                    <div>
                        <input type="radio" name="test4" id="_14" value="suo">
                        <label for="_14">Šuo</label>
                    </div>
                    <div>
                        <input type="radio" name="test4" id="_15" value="katinas">
                        <label for="_15">Katinas</label>
                    </div>
                    <div>
                        <input type="radio" name="test4" id="_16" value="begemotas">
                        <label for="_16">Begemotas</label>
                    </div>
                <?php
                } else {
                    if (isset($_GET['test4'])) {
                        if ('begemotas' == $_GET['test4']) {
                            echo "<p style=\"color: green;\">Jūsų atsakymas teisingas!</p>";
                        } else {
                            echo "<p style=\"color: red;\">Jūsų atsakymas neteisingas!</p>";
                        }
                    } else {
                        echo "<p style=\"color: red;\">Jūs nieko nepasirinkote!</p>";
                    }
                }
                ?>
            </div>
        </div>
        <?php
        if (!isset($_GET['submit'])) {
        ?>
            <button name="submit" value="1" type="submit">Pateikti atsakymą</button>
        <?php
        } else {
        ?>
            <button href="http://localhost/BIT/Briedis-Suo-Katinas/">Bandyti dar kartą</button>
        <?php
        }
        ?>
    </form>
</body>

</html>