<?php session_start();
    $_SESSION["number"] = 2;
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
                    <section>

                        <article class="single-blog-item">

                            <div>
                                <a href="index.php" style="color: black">home</a>,
                                มาม่า, ต้มยำกุ้ง updated
                                <time>august 30,2018</time>
                            </div>

                            <h1>Review #2 มาม่าต้มยำกุ้ง</h1>
                            <h2>8.5/10</h2>

                            <h3>
                                Price: 5 baht
                            </h3>
                            
                            <h3>
                                Quantity: 55 g
                            </h3>
                            
                            <h3>
                                Flavor: ต้มยำกุ้ง
                            </h3>
                            
                            <h3>
                                Overall: มาม่ารสคลาสสิกที่ใคร ๆ ก็รู้จัก ต้องเคยเจอ พบได้บ่อยครั้งตามค่ายลูกเสือ/ค่ายนอกสถานที่ รสชาติเส้นนุ่ม 
                                น้ำพริกเผาที่อยู่ในซองเข้มมากต้องรูดให้หมด หอมกลิ่นต้มยำกุ้งกำลังดี เปรี้ยวต้มยำหน่อย ๆ ข้อเสียอย่างเดียวคือ น้ำพริกเผาชอบเลอะมือ 555555
                            </h3>

                            <div class="list-item">
                                <div class="item-info text-center">
                                    <div class="row">
                                        <div class="col-md-8 col-md-offset-2">
                                            <img class="img-responsive center-block" src="assets/image/2.png" alt="Item number 1" style="width:100%">
                                            <img class="img-responsive center-block" src="assets/image/2.2.jpg" alt="Item number 1" style="width:100%">
                                        </div>
                                    </div>
                                </div> <!-- end of /.item-info -->
                            </div> <!-- end of /.list-item -->

                        </article>
                       
                        <div class="author">
                            <h4>Written by <strong class="text-capitalize">นักพจญภัยไร้นาม</strong></h4>
                            <h4>
                                เดินทางมาจากต่างโลก หลังจากโดนรถบรรทุกชน จนมาโผล่ในร่างของลูกเสือสามัญรุ่นเล็ก ที่หลงทางคนหนึ่ง จนหาทางออกมาได้ อาหารมื้อแรกที่ได้กินก็คือมาม่า
                            </h4>
                        </div>

                        <div class="feedback">
                            <div class="row">
                                <div class="col-md-12">
                                    <h1>feedback</h1>
                                    <?php
                                        $servername = "127.0.0.1:51213";
	                                    $username = "azure";
	                                    $password = "6#vWHD_$";
	                                    $dbname = "mydb";

	                                    $conn = new mysqli($servername, $username, $password, $dbname);

	                                    if ($conn->connect_error) {
  	                                    die("Connection failed: " . $conn->connect_error);
	                                    }

	                                    $sql = "SELECT * FROM comment WHERE noodle_no = ".$_SESSION["number"];
	                                    $result = $conn->query($sql);

	                                    if ($result->num_rows > 0) {
  	                                    // output data of each row
  	                                     while($row = $result->fetch_assoc()) {
		                                   echo "
                                              <div class=\"well\">
                                                <div class=\"row\">
                                                    <div class=\"col-md-2\">
                                                        <img src=\"assets/img/commenter1.jpg\" class=\"img-responsive center-block\">
                                                    </div>
                                                    <div class=\"col-md-10\">
                                                    <p>Comment ID: ".$row["id"]." </p>
                                                    <p class=\"comment-info\">
                                                        <strong>".$row["username"]."</strong> <span>".$row["date"]."<span>
                                                    </p>
                                                    <p>
                                                        ".$row["text"]."
                                                    </p>
                                                    </div>
                                                </div>
                                            </div>";
  	                                         };
                                        };
                                    ?>
                                </div>
                            </div>
                        </div>
                        <!--POST-->
                        <div class="comment-post">
                            <h1>post a comment</h1>
                            <form name="form1" method="post" action="comment.php">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <?php if(empty($_SESSION["username"])){
                                                echo "please login first";
                                            }
                                            else{
                                                echo '<p class="comment-info"><strong>'.$_SESSION["username"].'</strong></p>'; 
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-12">
                                        <textarea name="message" type="text" class="form-control" id="message" rows="5" required="required" placeholder="Type here message"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" required="required"> Please Check to Confirm
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <button type="submit" id="submit" name="submit" class="btn btn-cmnt">post comment</button>
                                    </div>
                                </div>        
                            </form>
                        </div>
                        <!-- EDIT -->
                        <div class="comment-post">
                            <h1>Edit Comment</h1>
                            <form name="form1" method="post" action="edit.php">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <?php if(empty($_SESSION["username"])){
                                                echo "please login first";
                                            }
                                            else{
                                                echo '<p class="comment-info"><strong>'.$_SESSION["username"].'</strong></p>'; 
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <?php if(empty($_SESSION["username"])){
                                                //echo "please login first";
                                            }
                                            else{
                                                $sql = "SELECT * FROM comment WHERE noodle_no = ".$_SESSION["number"]." and username = '".$_SESSION["username"]."'";
	                                            $result = $conn->query($sql);
                                                if ($result->num_rows > 0) {
  	                                    // output data of each row
                                                echo "<label>Choose comment to edit:</label>
                                                   <select name=\"comment_id\" id=\"comment_id\">";
  	                                            while($row = $result->fetch_assoc()) {
		                                          echo "<option value=\"".$row["id"]."\">".$row["id"]."</option>";
  	                                              };
                                                echo "</select>";
                                                };
                                            };
                                            ?>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <textarea name="edit_message" type="text" class="form-control" id="edit_message" rows="5" required="required" placeholder="Type here message"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" required="required"> Please Check to Confirm
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <button type="submit" id="submit" name="submit" class="btn btn-cmnt">edit comment</button>
                                    </div>
                                </div>        
                              </form>
                          </div>
                         <!--Delete-->
                         <div class="comment-post">
                            <h1>Delete Comment</h1>
                            <form name="form1" method="post" action="delete.php">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <?php if(empty($_SESSION["username"])){
                                                echo "please login first";
                                            }
                                            else{
                                                echo '<p class="comment-info"><strong>'.$_SESSION["username"].'</strong></p>'; 
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <?php if(empty($_SESSION["username"])){
                                                //echo "please login first";
                                            }
                                            else{
                                                $sql = "SELECT * FROM comment WHERE noodle_no = ".$_SESSION["number"]." and username = '".$_SESSION["username"]."'";
	                                            $result = $conn->query($sql);
                                                if ($result->num_rows > 0) {
  	                                    // output data of each row
                                                echo "<label>Choose comment to delete:</label>
                                                   <select name=\"comment_id\" id=\"comment_id\">";
  	                                            while($row = $result->fetch_assoc()) {
		                                          echo "<option value=\"".$row["id"]."\">".$row["id"]."</option>";
  	                                              };
                                                echo "</select>";
                                                };
                                            };
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" required="required"> Please Check to Confirm
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <button type="submit" id="submit" name="submit" class="btn btn-cmnt">Delete comment</button>
                                    </div>
                                </div>        
                              </form>
                          </div>
                    </section>
                    <!-- end of blog-contents -->
                </div>
            </div> <!-- end of /.container -->
        </main>

        <!--  Necessary scripts  -->

        <script type="text/javascript" src="assets/js/jquery-2.1.3.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="assets/js/jQuery.scrollSpeed.js"></script>

        <!-- smooth-scroll -->

        <script>
        $(function() {  
            jQuery.scrollSpeed(100, 1000);
        });
        </script>

    </body>
</html>