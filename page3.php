<!DOCTYPE html>

<html> <!--<![endif]-->
    <head>

        <!-- meta -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Blog Page 1</title>
        
        <!-- stylesheets -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
                    <section>

                        <article class="blog-item" id="blogItem">
                            <div class="row">
                                <div class="col-md-3">
                                    <a href="blog7.php">
                                        <img src="assets/image/7.png" class="img-thumbnail center-block" alt="Blog Post Thumbnail" id="image">
                                    </a>
                                </div>
                                <div class="col-md-9">
                                    <p>
                                        <time>27-june-2019<time>
                                    </p>
                                    <h1>
                                        <a href="blog7.php"  id="link">Review #7 ยำยำหมูสับ</a>
                                    </h1>
                                </div>
                            </div>
                        </article> <!-- /.blog-item -->

                        <article class="blog-item" id="blogItem">
                            <div class="row">
                                <div class="col-md-3">
                                    <a href="blog8.php">
                                        <img src="assets/image/8.png" class="img-thumbnail center-block" alt="Blog Post Thumbnail" id="image">
                                    </a>
                                </div>
                                <div class="col-md-9">
                                    <p>
                                        <time>6-November-2019<time>
                                    </p>
                                    <h1>
                                        <a href="blog8.php"  id="link">Review #8 มาม่าเย็นตาโฟต้มยำหม้อไฟ</a>
                                    </h1>
                                </div>
                            </div>
                        </article> <!-- /.blog-item -->

                        <article class="blog-item" id="blogItem">
                            <div class="row">
                                <div class="col-md-3">
                                    <a href="blog9.php">
                                        <img src="assets/image/9.png" class="img-thumbnail center-block" alt="Blog Post Thumbnail" id="image">
                                    </a>
                                </div>
                                <div class="col-md-9">
                                    <p>
                                        <time>14-February-2020<time>
                                    </p>
                                    <h1>
                                        <a href="blog9.php"  id="link">Review #9 มาม่าแกงเขียวหวานไก่</a>
                                    </h1>
                                </div>
                            </div>
                        </article> <!-- /.blog-item -->

                        <div class="page-turn">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3 text-center">
                                    <nav>
                                        <ul class="pagination">
                                            <li>
                                                <a href="page2.php" aria-label="Previous">
                                                    <span aria-hidden="true">Prev</span>
                                                </a>
                                            </li>
                                            <li><a href="index.php">1</a></li>
                                            <li><a href="page2.php">2</a></li>
                                            <li class="active"><a href="page3.php">3</a></li>
                                            <li  class="disabled">
                                                <a aria-label="Next">
                                                    <span aria-hidden="true">Next</span>
                                                </a>
                                            </li>
                                        </ul> <!-- /.pagination -->
                                    </nav>
                                </div>
                            </div>
                        </div> <!-- /.page-turn -->

                    </section>
                    <!-- end of blog-contents -->

                </div>
            </div> <!-- end of /.container -->
        </main>

    </body>
</html>