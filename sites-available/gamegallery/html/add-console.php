<?php
/******************************************************************************
 *          Name: add-console.php
 *        AUTHOR: Chad Chapman
 *  DATE CREATED: 20200812
 *   DESCRIPTION: Web page that allows users to add a console gaming
 *                system to the gallery.
 *       VERSION: 1.0
 *****************************************************************************/
include 'conf/dbconfig.php';
?>


<!-- Begin the html document here. -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- Production link. -->
        <link rel="stylesheet" href="../css/styles.css"/>

        <!-- Template link. -->
        <!--<link rel="stylesheet" href="../../css/styles.css"/>-->

        <title>Add A Gaming Console</title>
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
                    <h1>Add A Gaming Console To The Gallery</h1>
                </div>
            </header>
            <hr>

            <!-- Add all page content inside this div if you want the side nav to 
            push page content to the right (not used if you only want the 
            sidenav to sit on top of the page -->
            <div id="main">
                <!-- Quick explination of the site. -->
                <p>
                    This page allows you to add a console to this video game 
                    gallery website.  Please fill out the form below:
                </p>
                <div>
                    <form>
                        <fieldset>
                            <label>Name of Console: 
                            <input class="input_styles" type="text" 
                                name="console-name" required/>
                            </label>
                            <label>Description:
                                <textarea class="input_styles" 
                                    name="console-description" rows="3" cols="50" 
                                    max-length="500" required>
                                </textarea>
                            </label>
                            <label>Select a Manufacturer: 
                                <select name="manufacturer">
                                    <option value="">Select a manufacturer</option>
                                    <?php
                                    // Connect to database
                                    $connection = mysqli_connect($host, $dbname, $username, $password);

                                    // Get list of manufacturers from console-manufacturer table.
                                    $sql = "SELECT * FROM 'console-manufacturer'";
                                    $all_manufacturers = mysqli_query($connection, $sql);
                                    while ($manufacturers = mysqli_fetch_array($all_manufacturers, MYSQLI_ASSOC));
                                    ?>
                                    <option value="<?php echo $manufacturers['name'];?>"
                                    <!-- <?php echo $manufacturers['name']; ?> -->
                                </select>
                            </label>
                        </fieldset>
                    </form>
                </div>
                <hr> 
            </div>

            <!-- Create the footer for this website. -->
            <footer>
                <div>
                    <!-- Go back to main home page -->
                    <p>Site Curator: Chad Chapman</p>
                    <p>Date Created: August 12, 2022</p>
                    <p><a href="../../../index.php">Home Site</a></p>
                </div>
            </footer>
        </div>
    </body>
</html>
