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
                <p id="tourtop100text">Vandaag in de Radio 1 Tour Top 100</p>
                <hr>
                <div id="rechts">
                    <table>
                        <tr>
                            <td>
                                <a href="#">
                                    <img src="img/placeholder1.jpg">
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">
                                    <img src="img/placeholder1.jpg">
                                </a>
                            </td>

                        </tr>
                        <tr>
                            <td>
                                <a href="#">
                                    <img src="img/placeholder1.jpg">
                                </a>
                            </td>
                        </tr>

                    </table>
            <?php 

            $result = $mysqli->query("SELECT * FROM songs"); 
            
            while ($song = $result->fetch_assoc()) {
            
            echo '<div id="article">';
            echo '<div id="placeholder"><iframe src="https://www.youtube.com/embed/'.$song['yt-link'].'" frameborder="0" allowfullscreen></iframe></div>';
            echo '<div id="articleTitle"><p id="numberSong">'.$song['rank'].'</p><p id="title">'.$song['artist'].' - '.$song['song'].'</p></div>';
            echo '<div id="articleDes"><p>Lorem ipsumashdfvausdvfasd dsafb asdhbfsaydb fuyasbdfi.</p></div>';
            echo '<div id="articleSocial"></div>';
            echo '</div>';
        }
            ?>

                    
                    
                
            </div>
        </div>
    </body>
