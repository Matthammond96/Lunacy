<nav class="navbar navbar-default navbar-fixed-top" id="my-navbar">
            
            <div class="container"> 
                
                <div class="navbar-header">
                
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!--Brand Name-->
                    <a href="index.php" class="navbar-brand"><?php echo $brand; ?></a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <!-- log in -->
                <a href="logout.php" class="btn btn-info navbar-btn navbar-right">Log Out</a>
                    <ul class="nav navbar-nav">
                    
                        <li><a href="index.php">Home</a></li>
                        <li><a href="stories.php">Stories</a></li>
                         <li><a href="story.php">Submit a Story</a></li>
                        <li><a href="gallery.php">Gallery</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                        <li style="margin-left:40px"><a href="profile.php">Logged in as <?php echo $_SESSION["user"];?></a></li>
                    
                    </ul>
                
                </div>
                
            </div>

        </nav>