<html>
<head>
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
<style>
        html{
        width: 100%;
        height: 100%;
        overflow: hidden;
        }
        body {
        width: 100%;
        height:100%;
        background: #000000;
        }
        h2{
        color: #fff;
        text-shadow: 0 0 10px rgba(0,0,0,0.3);
        letter-spacing: 1px;
        text-align: center;
        }
        
        h1{
          font-family: 'Poppins', sans-serif;
          text-align: center;
          letter-spacing: 5px;
          color: #fff;
        }
        
         h3{
          color: #fff;
          font-family: 'Poppins', sans-serif;
          text-align: center;
          letter-spacing: 10px;
          font-size: 100px;
          padding-top: 5px;
          padding-right: 5px;
          padding-bottom: 5px;
          padding-left: 5px;
        }
        
        
        
        input {
        width: 100%;
        line-height: 4;
        margin-bottom: 10px;
        background: rgba(0,0,0,0.3);
        border: none;
        outline: none;
        font-size: 20px;
        color: #fff;
        text-shadow: 1px 1px 1px rgba(0,0,0,0.3);
        border: 1px solid rgba(0,0,0,0.3);
        border-radius: 4px;
        box-shadow: inset 0 -5px 45px rgba(100,100,100,0.2), 0 1px 1px rgba(255,255,255,0.2);
        }
        #submit{
        background-color: #4a77d4;
        padding: 25px 14px;
        font-size: 15px;
        line-height: normal
        }
        form#login_form {
        width: 30%;
        margin-top:10px;
        margin-left: auto;
        margin-right: auto;
        }
        ::placeholder {
        color:#fff;
        font-size: 18px;
        padding-left: 20px;
        }
        .center {
          display: block;
          margin-left: auto;
          margin-right: auto;
          width: 10%;
        }
</style>
<body>
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
                 
            </div>
        </nav>
        <br/>
        <br/>
<h3>REGISTER<h3>
<form name="form1" method="post" action="register_check.php" id="login_form">
    <tbody>
      <tr>
        <td>
          <input type="text" name="txtUsername" id="txtUsername" placeholder="Username" required />
        </td>
      </tr>
      <tr>
        <td> 
        <input type="password" name="txtPassword" id="txtPassword" placeholder="Password" required />
        </td>
      </tr>
    </tbody>
  </table>
  <br>
  <input type="submit" name="Submit" value="Register">
</form>
<a href="login.php"><h1>LOG IN<h1></a>

</body>
</html>



