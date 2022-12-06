<?php 
    function linkCss($stylesheet, $href) {
        echo "<link rel={$stylesheet} href={$href}>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP MURNI NIH BOSS</title>
    <?php linkCss('stylesheet', '../public/homepage.css') ?>
</head>
<body style="background-color: #10ace7;">
    <div class="container">
        <div>
            Logo
        </div>

        <div class="menu">
            <div>
                <a href="">
                    <img src="" alt="">
                    Pesan Tiket
                </a>
            </div>
            <div>
                <a href="">
                    <img src="" alt="">
                    Lihat Tiket
                </a>
            </div>
            <div>
                <a href="">
                    <img src="" alt="">
                    Batalkan Tiket
                </a>
            </div>
            <div>
                <a href="">
                    <img src="" alt="">
                    Jadwal Bis Mingguan
                </a>
            </div>
            <div>
                <a href="">
                    <img src="" alt="">
                    Profil
                </a>
            </div>
            <div>
                <a href="">
                    <img src="" alt="">
                    Terms & Condition
                </a>
            </div>
            <div>
                <a href="">
                    <img src="" alt="">
                    Pengumuman
                </a>
            </div>
            <div>
                <a href="">
                    <img src="" alt="">
                    Logout
                </a>
            </div>
        </div>
        <footer>
            Ini adalah Footer
        </footer>
    </div>
</body>
</html>