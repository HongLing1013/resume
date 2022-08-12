<?php
include_once "base.php";
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
            <li><a href="./back.php">back</a></li>
            <li><a href="./api/logout.php">logout</a></li>
            <?php
			}else{
			?>
            <li><a href="./front/login.php">login</a></li>
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
        <?php
            $rows=$About->all();
            foreach($rows as $row){
        ?>
        <img src="./img/<?=$row['img'];?>" style="float:left;margin:0 10vw">
            <p class="text">About Me</p>
            <p><?=$row['text'];?></p>
            <?php
        }
        ?>
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
        <?php
            $rows=$Repo->all();
            foreach($rows as $row){
        ?>
            <a href="<?=$row['href'];?>" target="_blank"><img src="./img/<?=$row['img'];?>"></a>
        <?php
        }
        ?>
        </div>
    </main>

    <!-- 尾版 -->
    <footer>
        Copyright©2022 Hollie Chao
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