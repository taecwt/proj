<?php session_start();
$servername = "127.0.0.1:51213";
$username = "azure";
$password = "6#vWHD_$";
$dbname = "mydb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "CREATE TABLE IF NOT EXISTS comment (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
noodle_no INT(2) NOT NULL,
username VARCHAR(30) NOT NULL,
date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
text VARCHAR(200)
)";

$conn->query($sql);

$sql = "CREATE TABLE IF NOT EXISTS user (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(30) NOT NULL,
password VARCHAR(30) NOT NULL
)";

$conn->query($sql);

$sql = "CREATE TABLE IF NOT EXISTS contact (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
fullname VARCHAR(50) NOT NULL,
email VARCHAR(30) NOT NULL,
message VARCHAR(200) NOT NULL
)";

$conn->query($sql);

$conn->close();
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 

<html> <!--<![endif]-->
    <head>

        <!-- meta -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Blog Page 1</title>
        
        <!-- stylesheets -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Sarabun&display=swap" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>   
        <link rel="stylesheet" href="assets/css/style.css">
    </head>

    <body id="body">

        <nav class="navbar navbar-default navbar-fixed-top" id="navbar">
            <div class="container">
                
                  <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">
                        <img src="assets/img/logo.png" alt="Site Logo">
                    </a>  
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    </div>
                <!-- Brand and toggle get grouped for better mobile display -->                           
                        
                    
                   <div class="collapse navbar-collapse" id ="navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="login.php">Login</a></li>
                        <li><a href="logout.php">Logout</a></li>
                          <?php 
                            if(empty($_SESSION["username"])){
                                echo "<li><a>Hello, Guest</a></li>";
                                }
                            else{
                                echo '<li><a>Hello, '.$_SESSION["username"].'</a></li>'; 
                                }
                        ?>
                    </ul>
                   <div>
                 
            </div><!-- end of /.container -->
        </nav>

        <main>
            <div class="container">
                <div class="row">

                    <!-- blog-contents -->
                    

                        <article class="blog-item" id="blogItem">
                            <div class="row">
                                <div class="col-md-3">
                                    <a href="blog1.php">
                                        <img src="assets/image/1.gif" class="img-thumbnail center-block" alt="Blog Post Thumbnail" id="image">
                                    </a>
                                </div>
                                <div class="col-md-9">
                                    <p>
                                        <time>30-july-2018<time>
                                    </p>
                                    <h1>
                                        <a href="blog1.php" id="link">Review #1 ไวไวรสดั้งเดิม</a>
                                    </h1>
                                </div>
                            </div>
                        </article> <!-- /.blog-item -->

                        <article class="blog-item" id="blogItem">
                            <div class="row">
                                <div class="col-md-3">
                                    <a href="blog2.php">
                                        <img src="assets/image/2.png" class="img-thumbnail center-block" alt="Blog Post Thumbnail" id="image">
                                    </a>
                                </div>
                                <div class="col-md-9">
                                    <p>
                                        <time>30-august-2018<time>
                                    </p>
                                    <h1>
                                        <a href="blog2.php" id="link">Review #2 มาม่าต้มยำกุ้ง</a>
                                    </h1>
                                </div>
                            </div>
                        </article> <!-- /.blog-item -->

                        <article class="blog-item" id="blogItem">
                            <div class="row">
                                <div class="col-md-3">
                                    <a href="blog3.php">
                                        <img src="assets/image/3.png" class="img-thumbnail center-block" alt="Blog Post Thumbnail" id="image">
                                    </a>
                                </div>
                                <div class="col-md-9">
                                    <p>
                                        <time>22-september-2018<time>
                                    </p>
                                    <h1>
                                        <a href="blog3.php" id="link">Review #3 มาม่าต้มยำกุ้งน้ำข้น</a>
                                    </h1>
                                </div>
                            </div>
                        </article> <!-- /.blog-item -->

                        <div class="page-turn">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3 text-center">
                                    <nav>
                                        <ul class="pagination">
                                            <li class="disabled">
                                                <a href="#" aria-label="Previous">
                                                    <span aria-hidden="true">Prev</span>
                                                </a>
                                            </li>
                                            <li class="active"><a href="index.php">1</a></li>
                                            <li><a href="page2.php">2</a></li>
                                            <li><a href="page3.php">3</a></li>
                                            <li>
                                                <a href="page2.php" aria-label="Next">
                                                    <span aria-hidden="true">Next</span>
                                                </a>
                                            </li>
                                        </ul> <!-- /.pagination -->
                                    </nav>
                                </div>
                            </div>
                        </div> <!-- /.page-turn -->

                  
                    <!-- end of blog-contents -->

                </div>
            </div> <!-- end of /.container -->
        </main>




        <!-- smooth-scroll -->

        <script>
        $(function() {  
            jQuery.scrollSpeed(100, 1000);
        });
        </script>

    </body>
</html>