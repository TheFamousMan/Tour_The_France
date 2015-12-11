<?php
require_once 'config/config.php';
require_once 'library/database.php';
?>
<html>
    <head>
        <title>Bap Opdracht</title>
        <link rel="stylesheet" href="basic.css" type="text/css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <body>
        <div id="container">
            <header>
                <div id="headerTitle"><p><img src="img/tourtop100.png"></img></p></div>
                <div id="headerSearch">
                    <div id="searchBar">
                        <a href="#">RADIO1.NL |</a>
                        <a href="#">TOUR TOP 100 |</a> 
                        <input type="text" name="search">
                        <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                    </div>
                </div>
                <div id="headerLogo"><img src="img/logo-france.png"></img></div>
                <div id="headerNav"><p>JULI | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9 | 10 | 11 | 12 | 13 | 14 | 15 | 16 | 17 | 18 | 19 | 20 | 21 | 22 | 23 | 24</p></div>
            </header>
            <div id="content">
            <?php 

            $result = $mysqli->query("SELECT * FROM songs"); 
            
            while ($song = $result->fetch_assoc()) {
            

            echo '<div id="article">';
                echo '<div class="articleL">';
                echo '<div id="placeholder"><iframe src="https://www.youtube.com/embed/'.$song['yt-link'].'" frameborder="0" allowfullscreen></iframe></div>';
                echo '</div>';
                echo '<div class="articleR">';
                echo '<div id="articleTitle"><p id="numberSong">'.$song['rank'].'</p><p id="title">'.utf8_encode($song['artist']).' : '.utf8_encode($song['song']).'</p></div>';
                echo '<div id="articleDes"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit.</p></div>';
                echo '<div id="articleSocial"><div class="talk"><img src="icons/talk.png"></div><a> [999]</a><a> | </a><a>Lees meer ➡</a><img src="icons/mail.png"><img src="icons/twt.png"><img src="icons/fb.png"></div>';
                echo '</div>';    
            echo '</div>';
            }
            ?>    
                
            </div>
        </div>
    </body>
</html>
<?php 

$main = (empty($_GET['main'])) ? '' : $_GET['main'];

switch ($main) {
    case 'value':
        # code...
        break;
    
    default:
            
        break;
}
?>
