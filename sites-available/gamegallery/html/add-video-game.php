<?php
/******************************************************************************
 *          Name: html-template.php
 *        AUTHOR: Chad Chapman
 *  DATE CREATED: 20200810
 *   DESCRIPTION: Template file for php based webpages of the Video Game
 *                Gallery website.
 *       VERSION: 1.0
 *****************************************************************************/
?>


<!-- Begin the html document here. -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- Production link. -->
        <!--<link rel="stylesheet" href="../css/styles.css"/>-->

        <!-- Template link. -->
        <link rel="stylesheet" href="../../css/styles.css"/>

        <title>Video Game Gallery</title>
    </head>

    <body>
        <div id="mySidenav" class="sidenav">
            <!-- To disable the close button and keep menu open at all times. -->
            <!--<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>-->
            <a href="/sites-available/gamegallery/html/gamegallery.php">Home</a>
            <hr class="hr_menu">
            <a href="/sites-available/gamegallery/html/add-console.php">Add Console</a>
            <hr class="hr_menu">
            <a href="/sites-available/gamegallery/html/add-media.php">Add Media</a>
            <hr class="hr_menu">
            <a href="/sites-available/gamegallery/html/add-video-game.php">Add Video Game</a>
            <hr class="hr_menu">
            <a href="/sites-available/gamegallery/html/browse-consoles.php">All Consoles</a>
            <hr class="hr_menu">
            <a href="/sites-available/gamegallery/html/browse-games.php">All Games</a>
            <hr class="hr_menu">
            <a href="/sites-available/gamegallery/html/search-games.php">Search Games</a>
            <a href="#/sites-available/gamegallery/html/"></a>
            <a href="#/sites-available/gamegallery/html/"></a>
            <a href="#/sites-available/gamegallery/html/"></a>
            <a href="#/sites-available/gamegallery/html/"></a>
        </div>

        <!-- Use any element to open the sidenav -->
        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>
        <script>
            /* Set the width of the side navigation to 250px */
            function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
            }

            /* Set the width of the side navigation to 0 */
            function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            }
        </script>

        <!-- div that contains space for site content -->
        <div class="content_background">
            <header>
                
                
                <div>
                    <h1>Video Game Gallery Home</h1>
                </div>
            </header>
            <hr>

            <!-- Add all page content inside this div if you want the side nav to 
            push page content to the right (not used if you only want the 
            sidenav to sit on top of the page -->
            <div id="main">
                <!-- Quick explination of the site. -->
                <h2>About</h2>
                <div class=p_div">
                    <P class="p_center">This website is about my favorite video games I have owned 
                        over the years.  We have descriptions of the game, why 
                        I like them, and some media about each game.  You can also 
                        add new consoles/platforms and games to this gallery.
                    </p>
                    <p class="p_center">The user can also edit existing entries at a later time 
                        to correct any errors or make updates.
                    </p>
                    <p class="p_center">Finally, we want to add the ability to view images of 
                        the products that are found in this gallery.
                    </p>
                </div>
                <hr>

                <!--- List some features of the site. -->
                <h2>Features of This Site</h2>
                <ul>
                    <li>Overview of consoles</li>
                    <li>Add concoles to list</li>
                    <li>Add new games to list</li>
                    <li>Edit details of consoles and games</li>
                    <li>Delete a game</li>
                    <li>View details about a console</li>
                    <li>View details about a video game</li>
                </ul>
                <hr> 
            </div>

            <!-- Create the footer for this website. -->
            <footer>
                <div>
                    <!-- Go back to main home page -->
                    <p>Site Curator: Chad Chapman</p>
                    <p>Date Created: August 20, 2022</p>
                    <p><a href="../../../index.php">Home Site</a></p>
                </div>
            </footer>

            

        </div>
        
    </body>
</html>
