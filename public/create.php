<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/connect.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php include_once("../includes/templates/header.php"); ?>
<?php 
    
    if(isset($_POST["submit"])) {
        $username = ($_POST["username"]);
        $password = ($_POST["password"]);
        $studentid = ($_POST["studentid"]);
        $level = ucfirst($_POST["level"]);
    }
     else {
        $username = "";
        $password = ""; 
        $studentid = ""; 
        $level = ""; 
    }

    
?>




<?php 
        
    if(isset($_POST["submit"])) {
        if(empty($username)){
            $message ="Invaild Username";
            echo $message;
        } else if(empty($password)){
            $message="Invaild Password";
            echo $message;
        }
        else if(empty($studentid)){
            $message="Invaild Student ID";
            echo $message;
        }
        else if(empty($level)){
            $message="Invaild Level of Study";
            echo $message;
        }
        
            else {
    
    if(isset($_POST["submit"])) {
        
        
        $query = "INSERT INTO user (user_username, user_password, user_studentID, user_level) VALUES ('{$username}', '{$password}', '{$studentid}', '{$level}' )";
        
        $result = mysqli_query($connection, $query); 
        
        if($result) {
            $message =   "$username please now log in"; 
        } else {
            $message = "Sorry, something went wrong"; 
        }
        
        echo $message;
        
    }
            }
    }

?>

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
               <form action="login.php" method="post" class="navbar-right">
        Username: <input type="text" name="username" value="">
        Password: <input type="password" name="password" value="">
        <input class="btn btn-info navbar-btn" type="submit" name="login" value="Login" />
                    </form>
                   
                
                </div>
                
            </div>

        </nav>
<!--end nav-->

<div class="container" style="width: 30%">
       
    <form class="form-signin" action="" method="post">
        <h2 class="form-signin-heading text-center">Create an Account</h2>
        <label for="UN" class="sr-only">Username</label>
        <input type="text"  id="UN" class="form-control" placeholder="Username" name="username" value="" />
        <label for="PW" class="sr-only">Password</label>
        <input type="password"  id="PW" class="form-control" placeholder="Password" name="password" value="" />
        <label for="SID" class="sr-only">Student ID</label>
        <input type="text"  id="SID" class="form-control" placeholder="Studen ID" name="studentid" value="" />
        <label for="LOS" class="sr-only">Level Of Study</label>
        <input type="text"  id="LOS" class="form-control" placeholder="Level Of Study" name="level" value="" />
        <button  class="btn btn-lg btn-primary btn-block" type="submit" name="submit" value="Submit">Create An Account</button>
    </form>
    
</div>   


  



<?php include_once("../includes/templates/footer.php"); ?>