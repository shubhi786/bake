<?php
session_start();
// error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../css/default.css" type="text/css">
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.11.2/css/all.css"
    />
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/mdb.min.css" />

    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/js/fontawesome.min.js"
    />

 <!-- FONTS EMBEDDED -->
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@700&family=Ubuntu+Condensed&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Calligraffitti&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
<!-- FONTS EMBEDDED -->


<script src="../js/jquery-3.4.1.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <!-- sweet alert -->

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.17/dist/sweetalert2.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.17/dist/sweetalert2.all.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>

    <!-- sweet alert -->

<style>
     * {
  margin: 0;
  padding: 0;
  font-family: "Ubuntu Condensed", sans-serif;
}

h1 {
  font-family: 'Calligraffitti', cursive;
}

html {
  overflow-x:hidden;
  scroll-behavior:smooth;
}

.menu {
  background-color: #4a3f35;
  color: white;
}

.menu .leftmenu h1 {
  font-family: "Caveat", cursive;
}

.rightmenu ul {
  display:flex;
  flex-direction:column;
  height:100vh;
  width:60%;
  text-align:center;
  position:absolute;
  top:0;
  right:0;
  transform:translateX(100%);
  justify-content:space-around;
  /* background-color:#411f1f; */
  background:linear-gradient(-90deg,#4a3f35 65%,rgba(0,0,0,0),rgba(0,0,0,0));
  /* border-radius:10px; */
  z-index: 2;
}

.rightmenu ul li {
  font-size:60px;
}

.rightmenu ul a {
  text-decoration:none;
  color:rgba(253,203,110,1);
}

.burger {
  cursor: pointer;
}

.burger-line {
  width: 30px;
  height: 3.5px;
  margin: 5.5px;
  background-color: whitesmoke;
  transition: all 0.2s ease;
}

.line2 {
  width: 20px;
  height: 3.5px;
}

.content {
  padding: 10%;
}

.content h2 {
  font-size: 80px;
}

.content a {
  color: white;
  font-size: 30px;
  background-color: #ffa931;
  border-radius: 10px;
  padding: 1% 1%;
  transition: 0.2s ease;
}

.content a:hover {
  text-decoration: none;
  background-color: transparent;
  border: 1px solid #ffa931;
  color: #ffa931;
  transition: 0.2s ease;
}   

.made_with_love h1 {
  margin-top:8%;
  margin-bottom:5%;
  font-size: 120px;
  font-family: 'Calligraffitti', cursive;
}

.menu_card_heading h1 {
  font-size:7rem;
}

.menu_card {
  width:100%;
  border-radius:15px;
}

.menu_card img {
  width:100vh;
  height:95vh;
  display:block;
  margin:0 auto;
  overflow:hidden;
}

.menu_card img {
    -webkit-box-shadow: 1px 1px 27px -8px rgba(0,0,0,0.75);
-moz-box-shadow: 1px 1px 27px -8px rgba(0,0,0,0.75);
box-shadow: 1px 1px 27px -8px rgba(0,0,0,0.75);
}

.right-text {
  font-size:120px;
  text-align:center;
  margin-top:20%;
  word-spacing:2px;
  letter-spacing:2px;
  font-family: 'Indie Flower', cursive;
}

.contact-us-heading h1 {
  font-size:90px;
}

.contact-us-body {
  background:linear-gradient(rgba(0,0,0,0.9),rgba(0,0,0,0.9)),url('img/bg1.png');
  background-size:cover;
  padding:10rem;
  color:rgba(253,203,110,1);
}

.contact-us-body {
  font-size:3rem;
}

.contact-us-body a{
  text-decoration:none;
}

.why_us_heading h1 {
  font-size:5rem;
  color:rgba(253,203,110,1);
}

.why_us h2,p {
  color:rgba(253,203,110,1);
}

body {
            background-image:url('../img/bg3.png');
            background-size: cover;

        }
                    
        .signup_form {
            padding:3rem;
            width:500px;
            position:absolute;
            top:7%;
            left:35%;   
            background-color:#fff0ff;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; 
        }

        .parent {
            position:relative;
        }

        .parent label {
            position:absolute;
            left:0%;
            top:2px;
            font-size:20px;
        }

        .parent input {
            background:transparent;
            width:100%;
            /* height:45px; */
            border:none;
            border-bottom:1px solid #000;
            margin-top:30px;
        }

        .parent input[type="file"] {
            border:none;

        }

        .parent input:focus {
            outline:none;
        }

        .submit {
            width:100%;
            height:3rem;
            background:#864000;
            color:#fff;
            font-size:1.6rem;
            border:none;
            margin-top:20px;
        }

        .submit:hover {
            border:2px solid #864000;
            background:transparent;
            color:#864000;
        }

        p a{
            color:#864000;
        }

        p a:hover{
            color:#864000;
            text-decoration:none;
        }
      


/* #############################################################################################################
################################################################################################################
############################################### MEDIA QUERIES ##################################################
################################################################################################################
################################################################################################################ */

@media only screen and (max-width:768px)
{
  .main-slides h2 {
    font-size:70px;
    transition:.2s ease;
  }

  .content a {
    padding:10px;
  }
}

@media only screen and (max-width:500px)
{

  .main-slides h2 {
    font-size:70px;
    transition:.2s ease;
  }

  .content a {
    padding:10px;
  }

  .made_with_love h1 {
    font-size:150px;
    text-align:center;
  }

  .why_us_heading h1 {
    font-size:70px;
  }

  .why_us-tab h2 {
     font-size:50px;
  }

  .right-text {
    margin-bottom:10%;
  }
}

.navigation.open {
  transition: transform 1.2s ease;
  transform:translateX(0%);
  visibility:visible; 
}

.btn_style {
  z-index:100;
}

.btn_style .line1 {
  transform:rotate(45deg) translate(-4px, 6px);
}

.btn_style .line2 {
  display:none;
} 

.btn_style .line3 {
  transform:rotate(-45deg) translate(0px, -10px);
}

    </style>
</head>
<body style="">
    
<nav>
       <div class="menu navbar ">
           <div class="leftmenu">
               <div class="leftmenu-heading">
                   <h1 class="text-center text-capitalize"><a href="../index.php" class="text-white nav-link">Tushar's</a></h1>
               </div>
           </div>

           <div class="rightmenu">
              <ul class="rightmenu-ul list-inline navigation">
                 <a href="index.php"><li class="list-inline-item">Home</li></a>
                 <a href="#menu"><li class="list-inline-item">Menu</li></a>
                 <a href="php/order.php"><li class="list-inline-item">Order Now</li></a>
                 <a href="php/login.php"><li class="list-inline-item">Login</li></a>
                 <a href="php/logout.php"><li class="list-inline-item">Logout</li></a>
                 <a href="php/signup.php"><li class="list-inline-item">Signup</li></a>
              </ul>   
           </div>

            <div class="burger">
                 <div class="line1 burger-line"></div>
                 <div class="line2 burger-line"></div>
                 <div class="line3 burger-line"></div>
           </div>

       </div>
    </nav>

    <section class="signup_form">

        <h1 class="text-center text-capitalize">log in</h1>

        <form class="form" action="" method="post" enctype="multipart/form-data">           

        <?php

            require_once('dbconfig.php');
            
            if(isset($_POST['submit']))
            {
                
                $uname = $_POST['uname'];
                $pass = $_POST['pass'];

                    $sql = "SELECT * FROM users WHERE `uname`='' AND `pass`='$pass' ";
                    $run = $conn->query($sql);

                    if($run)
                    { 
                        $_SESSION['user'] = $uname;
                        echo "<script>location.href='../index.php';</script> ";
                    }
                    else
                    { 
                       ?>

                        <script>
                             const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                              toast.addEventListener('mouseenter', Swal.stopTimer)
                              toast.addEventListener('mouseleave', Swal.resumeTimer)
                            }
                          });
                          
                          Toast.fire({
                            icon: 'error',
                            title: 'Something Went Wrong'
                          });
                        </script>

                        <?php
                }
            }
        ?>

            <div class="parent">
                <input type="text" name="uname" id="uname" placeholder="">
                <label for="uname">Username</label>
            </div>
            
            <div class="parent">
                <input type="password" name="pass" id="pass">
                <label for="pass">Password</label>
            </div>

            <input type="submit" value="Log In" class="submit" name="submit"/>

            <span><p class="text-center mt-3">Are you a new user... <a href="signup.php" class="">Signup here</a> </p></span>
            
        </form>
    </section>

    <script>
    
    let nav = function ()
        {
           var btn = document.querySelector(".burger");
      var menu = document.querySelector(".navigation");
      let bgAbout = document.querySelector(".bg-about");

      btn.addEventListener("click", toggleMenu);
      menu.addEventListener("click", toggleMenu);

      function toggleMenu() {
        if (menu.classList.contains("open")) {
          menu.classList.remove("open");
        } else {
          menu.classList.add("open");
        }

        btn.classList.toggle('btn_style');
      }
        }

        
        let run = function () 
        {
           nav();
           
        }

        run();


    </script>


    <script  src="../js/mdb.min.js" type="text/javascript"></script> 
    <script  src="../js/bootstrap.js" type="text/javascript"></script> 
    <script  src="../js/bootstrap.min.js" type="text/javascript"></script> 
</body>
</html>