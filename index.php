<?php 
session_start();

error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bakery</title>

    <meta name="format-detection" content="telephone=no">
    
    <link rel="stylesheet" href="css/default.css" type="text/css">
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.11.2/css/all.css"
    />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/mdb.min.css" />

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
    <link href="https://fonts.googleapis.com/css2?family=Do+Hyeon&family=Righteous&display=swap" rel="stylesheet">
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

.menu_card {
  font-size:5rem;
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

.greet a {
  /* margin-left:60%; */
  position:absolute;
  right:10%;
  top:-10%;
  line-height:100px;
  font-family: 'Calligraffitti', cursive;
  font-size:1.5rem;
  color:white;
}

.greet img {
  position:absolute;
  right:-120%;
  top:200%;
  
}

.item_ {
  /* border:1px solid #000; */
  overflow:hidden;
  box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; 
  padding:3rem;
  
}

.item_ img {
  width:200px;
  height:200px;
  margin:auto;
  display:block;
}

.popup {
  position:absolute;
  top:0%;
  left:-100%;
  z-index:1;
  transition:all 0.2s ease;
  cursor:pointer;
  width:100%;
  height:100%;
}

.popup h1 {
  color:white;
  font-size:4rem;
  /* font-family: 'Do Hyeon', sans-serif; */
  font-family: 'Righteous', cursive;
  text-align:center;
}

.item_:hover .popup {
  left:0%;
  transition:all 0.2s ease;
  text-align:center;
  background-color:black;
  
}

.popup input {
  outline: none;
  width:60%;
  padding:5px;
}

.popup .submit {
  background:rgba(253,203,110,1);
  border:none;
  width:200px;
  padding:10px;
}

.msg {
  width:500px;
  height:500px;
  position:fixed;
  top:20%;
  left:35%;
  z-index:10;
  background-color:#FFF5EB;
  border-radius:5px;
  box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
}

.mess h1{
  color:#000;
  font-family:arial; 
}

.mess p{
  color:#000;
  font-size:25px;
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
<body>


    

        <?php

        $check = $_SESSION['token'];
        $user_address = $_SESSION['user_address'];
        // $token = $_COOKIE['tokens'];
    
    if(isset($check))
    {
      if(isset($user_address))
      {?>
      
      <div class="msg">
        <button class="close bg-danger p-3">x</button>

        <div class="mess p-5" style="">
            <p class="text-center text-capitalize">your order id : <?php echo $_SESSION['token']; ?></p>

            <?php

            $token = $_SESSION['token'];

            require_once('php/dbconfig.php');

$get = "SELECT * from orders WHERE order_id='$token' ";
$run1 = $conn->query($get);

if($run1->num_rows > 0)
{
  while($row1 = $run1->fetch_assoc())
  {?>

    <h3 class="text-center text-success text-capitalize">Your order has been placed for :</h3>
    <h1 class="text-center text-capitalize text-dark"><?php echo $row1['item_name']; ?></h1>
    <h2 class="text-center text-capitalize text-dark">Quantity :<?php echo $row1['item_q']; ?></h2>
    <h1 class="text-center text-capitalize">Mr. <strong><?php echo $row1['fname']; ?></strong></h1>
    <h4 class="text-center text-capitalize">your order will be delivered here :  <strong><?php echo $row1['address']; ?></strong></h4>
    <h5 class="text-center text-capitalize">total price to be paid : <span style="font-size:50px;">&#8377;<?php echo $row1['total_price']; ?>/-</span> </h5>
     <?php  
  }
}
?>            
        </div>

        <button class="btn btn-success close1 text-center container">OKAY</button>
        </div>
        <?php
      }
    }
    elseif(isset($_SESSION['error']))
    {
      echo "<script>alert('ORDER ID:".$_SESSION['error']."');</script>";
    }
    else
    {
      echo "";
    }
    
    ?>
   

    <nav>
       <div class="menu navbar ">
           <div class="leftmenu">
               <div class="leftmenu-heading">
                   <h1 class="text-center text-capitalize"><a href="index.php" class="text-white nav-link"><img src="img/logo3.png" width="70px" height="60px" alt=""></a></h1>
               </div>
           </div>

           <div class="rightmenu">
              <ul class="rightmenu-ul list-inline navigation">
                 <a href="index.php"><li class="list-inline-item">Home</li></a>
                 <a href="#menu"><li class="list-inline-item">Menu</li></a>
                 <a href="php/order.php"><li class="list-inline-item">Order Now</li></a>
                 <?php
                 if($_SESSION['user'])
                 {?>
                    <a href="php/logout.php"><li class="list-inline-item">Logout</li></a>
                  <?php
                 }
                 else
                 {
                  //  header('location:php/login.php');
                  echo "<script>location.href='php/login.php';</script> ";
                   ?>
                  <a href="php/login.php"><li class="list-inline-item">Login</li></a>
                 <?php
                 }
                 ?>
              </ul>   
           </div>

           
          <span class="greet">
          <h3 ><a href="update_user.php?uname=<?php echo $_SESSION['user']; ?>" class="nav-link">Hi... <?php if($_SESSION['user']) {echo $_SESSION['user'];} else {echo 'User';} ?></h3>
           <?php
              require_once('php/dbconfig.php');
              $name = $_SESSION['user'];
              $q = "SELECT * FROM users WHERE uname='$name' LIMIT 1 ";
              $run = $conn->query($q);
              if($run->num_rows > 0)
              {
                while($row = $run->fetch_assoc())
                {
                  $_SESSION['user_img'] = $row['img'];

                  $diff = explode('../',$row['img']);

                  $final_img = strtolower(end($diff)); 

                  // $diff = explode('../',$_SESSION['user_img']);

                  // $_SESSION['user_img_final'] = strtolower(end($diff)); 
                  ?>

                <img style="width:45px;height:45px;border:2px solid rgba(0,0,0,0.2);border-radius:50%;" src="<?php echo $final_img; ?>" alt="User"/>
                  
                <?php
                }
              }
           ?>

          </a>
          </span>

          

            <div class="burger">
                 <div class="line1 burger-line"></div>
                 <div class="line2 burger-line"></div>
                 <div class="line3 burger-line"></div>
           </div>

       </div>
    </nav>


    

    <section style="background:linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.3)),url('img/mian-bg-min.jpg');background-size:cover;bakcground-repeat:no-repeat;color:white;">
        <div class="main-slides">
            <!-- <img src="img/mian-bg.jpg" alt="background"> -->

            <div class="content">
               <h2 class="text-capitalize">Count memories<br> not calories</h2>

               <a href="#menu">Order Now</a>
            </div>
        </div>
    </section>

    <section>
        <div class="made_with_love">
            <h1 class="text-center text-capitalize">made with love</h1>
        </div>
    </section>

    <section class="" style="background-color:#4a3f35;">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,64L24,69.3C48,75,96,85,144,122.7C192,160,240,224,288,213.3C336,203,384,117,432,90.7C480,64,528,96,576,112C624,128,672,128,720,149.3C768,171,816,213,864,192C912,171,960,85,1008,85.3C1056,85,1104,171,1152,181.3C1200,192,1248,128,1296,85.3C1344,43,1392,21,1416,10.7L1440,0L1440,0L1416,0C1392,0,1344,0,1296,0C1248,0,1200,0,1152,0C1104,0,1056,0,1008,0C960,0,912,0,864,0C816,0,768,0,720,0C672,0,624,0,576,0C528,0,480,0,432,0C384,0,336,0,288,0C240,0,192,0,144,0C96,0,48,0,24,0L0,0Z"></path></svg>

        <div class="why_us_heading">
           <h1 class="text-center text-capitalize">Why Us?</h1>
        </div> 

        <div class="why_us container mt-5">
           <div class="row container">
               <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                  <div class="why_us_tab">
                     <h2 class="text-center text-capitalize">Fresh</h2>
                     <p class="text-center">We serve here only the fresh food. We take care of every single aspect of freshness of any vegie.
                        A fresh vegie has its own taste and can be quite delicious with some quantity of spices and love.
                     </p>
                  </div>
               </div>
               <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                  <div class="why_us_tab">
                     <h2 class="text-center text-capitalize">Quality</h2>
                     <p class="text-center">The quality is one of our key value. A person only remembers the quality product. We want 
                     our customers to remember the taste of our amazing dishes.</p>
                  </div>
               </div>
               <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                  <div class="why_us_tab">
                     <h2 class="text-center text-capitalize">why_us</h2>
                     <p class="text-center">A good service can actually add more taste to your food. So we give our best to serve you 
                     all with our expertise. We always try to fulfill our customer's desires. </p>
                  </div>
               </div>
           </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,160L34.3,144C68.6,128,137,96,206,74.7C274.3,53,343,43,411,85.3C480,128,549,224,617,218.7C685.7,213,754,107,823,90.7C891.4,75,960,149,1029,170.7C1097.1,192,1166,160,1234,128C1302.9,96,1371,64,1406,48L1440,32L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
    </section>

    <section class="order_now" id="menu">     

        <h1 class="text-center menu_card">Menu</h1>      
        
        <div class="pallete">
            <div class="items container">
                <div class="row">  
                <?php
                require_once('php/dbconfig.php');

                $sql = "SELECT * FROM items";
                $run = $conn->query($sql);

                if($run->num_rows > 0)
                    {
                        while($row = $run->fetch_assoc())
                            {
                              $diff = explode('../',$row['item_img']);
                              $final_img_item = strtolower(end($diff));

                              ?>     
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 item_ mt-3">
                        <img src="<?php echo $final_img_item; ?>" alt="item">

                        <div class="popup">
                          <h1 class="text-center"><?php echo $row['item_name']; ?></h1>
                          <h1 class="text-center"><?php echo $row['item_price']; ?>/-</h1>

                          <form action="php/order.php?do=add" name="quant">
                              <div class="parent">  
                              <label for="" class="text-white">QTY:
                                <input type="text" name="q" value="" class="" required maxlength="1" class="quan"/>
                              </label>
                              
                              <input type="hidden" name="id" value="<?php echo $row['item_id']; ?>" class="" />
                              </div>
                              
                              <input type="submit" value="Order Now" class="submit" name="order" >
                          </form>
                          
                        </div>
                    </div>
                    <?php
                        }
                    }
                
                ?>
                </div>
            </div>
        </div>
    </section>

    <section style="" class="contact-us">
        
        <div class="contact-us-heading p-5">
            <h1 class="text-center text-capitalize">Contact us</h1>
        </div>
        
        <div class="contact-us-body text-center">
            <div class="row container">
               <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-5">
                  <i style="color:rgba(253,203,110,1);" class="bi bi-telephone-outbound-fill"></i>
                  <a style="color:rgba(253,203,110,1);" href="tel:+91999999999" class="">+91 999999999</a>
               </div>
               <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-5">
                  <i style="color:rgba(253,203,110,1);" class="bi bi-geo-alt-fill"></i>
                  Shop No. 001 , Near Shop No. 002
               </div>
            </div>
        </div>
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

           let close = document.querySelector('.close');
        let close1 = document.querySelector('.close1');
        let msg = document.querySelector('.msg');

        close.addEventListener('click', (e)=>
        {
          msg.style.display = "none";
        });

        close1.addEventListener('click', (e)=>
        {
          msg.style.display = "none";
        });
           
        }

        run();

        
    </script>



    <script src="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/docs/assets/vendors/jquery.min.js"></script>
    <script src="js/jquery-3.4.1.js" type="text/javascript"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script  src="js/mdb.min.js" type="text/javascript"></script> 
    <script  src="js/bootstrap.js" type="text/javascript"></script> 
    <script  src="js/bootstrap.min.js" type="text/javascript"></script> 
</body>
</html>