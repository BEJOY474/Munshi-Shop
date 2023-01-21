<?php
   session_start();
   $phon = $_SESSION['phone_number'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>Munshi Shop</title>
    <link rel="icon" href="images/mLogo.webp" type="images/icon">
   
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="efg.css">

    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" />
   
<style>

            body{
                font-size: 14px;
                line-height: 1.42857143;
                color: #333333;
                background-color: black;
                overflow-x: hidden;
            }

            #navbar{
                border-radius: 0px !important;
            }
            marquee {
                padding: 10px;
                font-size: 30px;
                font-family: cursive;
                color: red;
                cursor: pointer;
            }


            .text.text2::before{
                content: "";
                position: absolute;
                top: 0;
                left: 0;
                height: 100%;
                width: 100%;
                background-color: red;
                border-left: 2px solid blue;
                animation: animate 4s steps(12) infinite;

            }

            @keyframes animate{
                40%, 60%{
                    left: 100%;
                }
                100%{
                    left: 0%;
                }
            }

            .about .about-content .right a{
                display: inline-block;
                background-color: red;
                color: #fff;
                font-size: 20px;
                padding: 10px 30px;
                margin-top: 20px;
                border-radius: 6px;
                border: 2px solid red;
                text-decoration: none;
                transition: all 0.4s ease;
            }


            @media (min-width:450px){
                .max-width{
                padding: 0 23px;
                }
                .about .about-content .right {
                    padding-top: 10px;
                    width: 100%;
                    text-align: justify;
                    justify-content: center;
                }

                .about .about-content .left {
                width: 100%;
            }

                .about .about-content .left img {
                    width: 100%;
                
                }

                .same-height-row :last-child{
                    padding-bottom: 20px;
                }


            .col-md-12.headPhnTitleHeader h2 {
                padding-top: 70px;
                color: #fff;
            }


            }



            @media (min-width: 890px){
                .about .about-content .left {
                    width: 45%;
                }

                .about .about-content .right {
                    width: 50%;
                    text-align: justify;
                    justify-content: center;
                }

                .col-md-12.headPhnTitleHeader h2 {
                padding-top: 70px;
                color: #fff;
            }

            }

            .slick-prev:before {
                content: '←';
                color: red;
                font-size: 25px;
            }

            .slick-next:before {
                content: '→';
                color: red;
                font-size: 25px;
            }

            #outerContent {
                background-color: rgb(236, 226, 226);
                position: relative;
                top: 50px;
                height: 660px;
            }

            .headPhnsection {
                /* background-color: black; */
                text-align: center;
            }

            .col-md-12.headPhnTitleHeader {
                /* margin-top: 60px; */
                color: #fff;
            }



            .product {
                background-color: #fff;
                padding: 10px;
                text-align: center;
                border-radius: 5px;
                /* width: 350px;
                height: 420px; */
            }


            div#content\ headPhnSec {
                background-color: black !important;
            }

            .headTitle{
                text-align: center;
                background-color: black;
            }
            section#outerContent\ hpnSen {
                background-color: black;
            }

            .box_h.box_h2 {
                background-color: black;
            }

            .box_h{
                background-color:  rgb(236, 226, 226);;
                margin: 0 0 30px;
                box-sizing: border-box;
                padding: 5px;
                border-radius: 5px;
                transition:all .4s ease;
            
            }

            .headphnSlid{
                background-color: #222;
            }

            .box {
                background-color: #fff;
                box-sizing: border-box;
                box-shadow: 0px 1px 5px rgb(0 0 0 / 50%);
                padding: 25px;
                margin-bottom: 20px;
            }

            .col-md-4.col-sm-6.center-responsive {
                margin-bottom: 10px;
            }

            .product.headphnSlid {
            margin-top: 15px;
        }
        audio {
        display: none;
    }

    
    .home img{
            width: 50px;
            border-radius: 13px;
        }

        .product {
    background-color: #fff;
    padding: 10px;
    text-align: center;
    border-radius: 5px;
    margin-top: 15px;
}
div#content {
    position: relative;
    top: -20px;
   }

   .col-md-12 {
    margin-top: 10px;
}
ul.menu li a {
    margin-left: 45px;
    color: #FFF;
    list-style: none;
    text-decoration: none;
    font-size: 13px;
}
ul.menu {
    display: inline-flex;
    padding: 10px;
    list-style: none;
    position: relative;
    top: 5px;
    left: 85px;
}

.col-md-6.offer {
    position: relative;
    margin-top: 10px;
}
#navbar {
    border-radius: 0px !important;
    padding-top: 8px;
    padding-bottom: 8px;
}
.navbar-btn {
    margin-top: 8px;
    margin-bottom: 8px;
    position: relative;
    float: right;
}
a.navbar-brand.home img {
    display: block;
    position: relative;
    top: -16px;
}
.col-md-6.offer a {
    color: #fff;
    padding-left: 8px;
    text-decoration: none;
}
.text a {
    text-decoration: none;
}

</style>
</head>



<body>
   
<audio controls autoplay>
  <source src="music/burger.mp3" type="audio/mp3">
</audio>

   <div id="top">
       
       <div class="container">
           
           <div class="col-md-6 offer">
               
               <a href="#" class="btn btn-success btn-sm">Welcome</a>
               <a href="#"> to munshi smart shop</a>
           </div>
           
           <div class="col-md-6">
               
               <ul class="menu">
                   
               <li><a><?php echo    $u_name = $_SESSION['user_name']; ?></a></li>
                     
                   <li>
                       <a href="account.php">My Account</a>
                   </li>
                   <li>
                       <a href="cart.php">Go To Cart</a>
                   </li>
                   <li>
                            <a href="logout.php">Logout</a>
                        </li>
                   
               </ul>
               
           </div>
           
       </div>
       
   </div>
   
   <div id="navbar" class="navbar navbar-default">
       
       <div class="container">
           
           <div class="navbar-header">
               
               <a href="index.php" class="navbar-brand home">
                   
                  <img src="images/mLogo.webp" alt="" class="hidden-xs">
                  <img src="images/mLogo.webp" alt="" class="visible-xs">
                  
               </a>               
               <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                   
                   <span class="sr-only">Toggle Navigation</span>
                   
                   <i class="fa fa-align-justify"></i>
                   
               </button>
               
               <button class="navbar-toggle" data-toggle="collapse" data-target="#search">
                   
                   <span class="sr-only">Toggle Search</span>
                   
                   <i class="fa fa-search"></i>
                   
               </button>
               
           </div>
           <div class="navbar-collapse collapse" id="navigation">
               <div class="padding-nav">
                   <ul class="nav navbar-nav left">
                       <li >
                           <a href="index.php">Home</a>
                       </li>
                       <li class="active">
                           <a href="shop.php">Shop</a>
                       </li>
                       <li>
                           <a href="account.php">My Account</a>
                       </li>
                       <li>
                           <a href="cart.php">Shopping Cart</a>
                       </li>
                       <li>
                           <a href="contact.php">Contact Us</a>
                       </li>
                       
                   </ul>
                   
               </div>
               
               <a href="cart.php" class="btn navbar-btn btn-primary right"> 
               <i style="margin-right: 7px;" class="fa fa-shopping-cart"></i> 
                   <span>My Shopping</span>                   
               </a>
               
      
               
               <div class="collapse clearfix" id="search">
                   
                   <form method="get" action="results.php" class="navbar-form">
                       
                       <div class="input-group">
                           
                           <input type="text" class="form-control" placeholder="Search" name="user_query" required>
                           
                           <span class="input-group-btn">
                           
                           <button type="submit" name="search" value="Search" class="btn btn-primary">
                               
                               <i class="fa fa-search"></i>
                               
                           </button>
                           
                           </span>
                           
                       </div>
                       
                   </form>
                   
               </div>
               
           </div>
           
       </div>
       
   </div>


<div style="background-color:rgb(236, 226, 226);" id="content" class="content">
    <div class="container">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li>Shop</li>
                <li>Burger</li>
            </ul>
        </div>

        <div class="col-md-3">
            <?php 

                include("includes/sidebar.php");

                ?>  
        </div>
        <div class="col-md-9">
            <div class="box">
                <h1>Shop</h1>
                <h4>Burger</h4>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempore cumque ratione possimus, ad perspiciatis voluptatem.
                </p>
            </div>

            <div class="row">
            <div class="col-sm-4 col-sm-6 single">
                <div class="product">
                    <a href="ChichaBurger.php">
                        <img style="width: 350px; height: 265px" class="img-responsive" src="burgerPic/ChichaBurger.jpeg" alt="macbookLaptop">
                    </a>

                    <div class="text">
                        <h3>
                        <a href="ChichaBurger.php">Chicha Burger</a>
                        </h3>
                        <p class="price">$20</p>
                        <p class="button">
                            <a href="ChichaBurger.php" class="btn btn-default">View Details</a>
                         
                        </p>
                      
                    </div>
                </div>
            </div>

            <div class="col-sm-4 col-sm-6 single">
                <div class="product">
                    <a href="burgerBuzz.php">
                        <img style="width: 350px; height: 265px" class="img-responsive" src="burgerPic/burgerBuzz.jpeg" alt="macbookLaptop">
                    </a>

                    <div class="text">
                        <h3>
                        <a href="burgerBuzz.php">Burger Buzz</a>
                        </h3>
                        <p class="price">$15</p>
                        <p class="button">
                            <a href="burgerBuzz.php" class="btn btn-default">View Details</a>
                         
                        </p>
                      
                    </div>
                </div>
            </div>

            <div class="col-sm-4 col-sm-6 single">
                <div class="product">
                    <a href="burgerMania.php">
                        <img style="width: 350px; height: 265px" class="img-responsive" src="burgerPic/burgerMania.jpeg" alt="macbookLaptop">
                    </a>

                    <div class="text">
                        <h3>
                        <a href="burgerMania.php">Burger Mania</a>
                        </h3>
                        <p class="price">$15</p>
                        <p class="button">
                            <a href="burgerMania.php" class="btn btn-default">View Details</a>
                           
                        </p>
                      
                    </div>
                </div>
            </div>

            <div class="col-sm-4 col-sm-6 single">
                <div class="product">
                    <a href="BeefBurger.php">
                        <img style="width: 350px; height: 265px" class="img-responsive" src="food/pic-1.jpg" alt="macbookLaptop">
                    </a>

                    <div class="text">
                        <h3>
                        <a href="BeefBurger.php">Beef Burger</a>
                        </h3>
                        <p class="price">$25</p>
                        <p class="button">
                            <a href="BeefBurger.php" class="btn btn-default">View Details</a>
                          
                        </p>
                      
                    </div>
                </div>
            </div>

            <div class="col-sm-4 col-sm-6 single">
                <div class="product">
                    <a href="CheeseBurger.php">
                        <img style="width: 350px; height: 265px" class="img-responsive" src="food/brgr.jpeg" alt="macbookLaptop">
                    </a>

                    <div class="text">
                        <h3>
                        <a href="CheeseBurger.php">Cheese Burger</a>
                        </h3>
                        <p class="price">$20</p>
                        <p class="button">
                            <a href="CheeseBurger.php" class="btn btn-default">View Details</a>
                          
                        </p>
                      
                    </div>
                </div>
            </div>

            <div class="col-sm-4 col-sm-6 single">
                <div class="product">
                    <a href="chickenBrgr.php">
                        <img style="width: 350px; height: 265px" class="img-responsive" src="food/pic-3.jpg" alt="macbookLaptop">
                    </a>

                    <div class="text">
                        <h3>
                        <a href="chickenBrgr.php">Chicken Burger</a>
                        </h3>
                        <p class="price">$10</p>
                        <p class="button">
                            <a href="chickenBrgr.php" class="btn btn-default">View Details</a>
                          
                        </p>
                      
                    </div>
                </div>
            </div>
            </div>
            
                <center>
                    <ul class="pagination">
                       
                        <li><a href="shop.php">1</a></li>
                        <li><a href="mobileAll.php">2</a></li>
                        <li><a href="head_phnAll.php">3</a></li>
                        <li><a href="pizzaAll.php">4</a></li>
                        <li><a href="burgerAll.php">5</a></li>

                    
                    </ul>
                </center>
            </div>

           

    </div>
    
</div>

   
<?php 

include("includes/footer.php");

?>


<script src="js/jquery-331.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script src="js/bootstrap-337.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous"></script>


</body>
</html>
   