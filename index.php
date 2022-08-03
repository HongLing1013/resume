<?php
include "base.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>作品集</title>
    <link rel="stylesheet" href="./style.css">
    <script src="https://kit.fontawesome.com/97604f290f.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-- 上方導覽 -->
    <nav>
        <a href="index.php" class="logo">Hollie Chao</a>
        <ul>
            <li><a href="#about">About</a></li>
            <li><a href="#skill">skill</a></li>
            <li><a href="#portfolio">portfolio</a></li>
            <?php
			if(isset($_SESSION['login'])){
			?>
            <li><a href="./api/logout.php">登出</a></li>
            <?php
			}else{
			?>
            <li><a href="./front/login.php">登入</a></li>
			<?php
			}
			?>
        </ul>
    </nav>

    <!-- banner -->
    <h2 class="title">Scroll To See Hollie's Resume....</h2>
    <header class="banner"></header>

    <!-- 關於我 -->
    <article class="container1" id="about">
        <div class="Box">
            <img src="./img/my.jpg" style="float:left;margin:0 10vw">
            <p class="text">About Me</p>
            <p>過去都是從事服務業，這次疫情太嚴重而導致失業，想尋求一個可以永續的工作，參加了泰山職訓的甄試便開始學習程式技術，在學習程式的過程中找到了興趣，希望未來能從事相關工作與團隊一起努力！</p>
        </div>
    </article>

    <hr>

    <!-- 程式碼區 -->
    <section style="clear:both" id="skill">
        <p class="text" style="text-align: center;line-height: 30vh;">Skill</p>
        <div class="codeBox">
            <div class="code">
                <i class="fas fa-desktop fa-3x"></i>
                <p>HTML5</p>
                <p>CSS3</p>
                <p>Bootstrap</p>
                <p>Java Script</p>
                <p>jQuery</p>
            </div>
            <div class="code">
                <i class="fas fa-code fa-3x"></i>
                <p>PHP</p>
                <p>MySQL</p>
            </div>
            <div class="code">
                <i class="fas fa-paint-brush fa-3x"></i>
                <p>Illustrator</p>
                <p>Photoshop</p>
            </div>
        </div>
    </section>

    <!-- 作品區 -->
    <main id="portfolio" class="container2">
        <p class="text" style="text-align: center;line-height: 30vh;">portfolio</p>
        <div class="por">
            <a href="http://220.128.133.15/s1110208/PerpetualCalendar-HomeWork/"><img src="./img/calendar.jpg" alt=""></a>
            <a href="http://220.128.133.15/s1110208/Vote/"><img src="./img/vote.jpg" alt=""></a>
            <a href="http://220.128.133.15/s1110208/BMI/"><img src="./img/bmi.jpg" alt=""></a>
            <a href="https://www.flickr.com/photos/196142177@N08/52233127974/in/dateposted-public/"><img src="./img/ps-2.jpg" alt=""></a>
            <a href="https://www.flickr.com/photos/196142177@N08/52232856016/in/dateposted-public/"><img src="./img/ps-1.jpg" alt=""></a>
            <a href="https://www.flickr.com/photos/196142177@N08/52232862613/in/dateposted-public/"><img src="./img/ps-3.jpg" alt=""></a>
        </div>
    </main>

    <!-- 尾版 -->
    <footer>
        Copyright©2021 Hollie Chao
    </footer>
    
    <!-- 上方導覽的JS -->
    <script>
        window.addEventListener('scroll', () => {
            let nav = document.querySelector('nav')
            nav.classList.toggle('sticky', window.scrollY > 0)
        })
    </script>

    <!-- banner的JS -->
    <script>
        let header = document.querySelector('header');
        window.addEventListener('scroll', function() {
            let value = window.scrollY;
            header.style.clipPath = `circle(${value}px at center)`;
        })
    </script>
</body>
</html>