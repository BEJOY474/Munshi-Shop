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
   
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="efg.css">
    <link rel="icon" href="images/mLogo.webp" type="images/icon">
   
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
            
                text-align: center;
            }

            .col-md-12.headPhnTitleHeader {
              
                color: #fff;
            }


            .product {
    background-color: #fff;
    padding: 0px;
    text-align: center;
    border-radius: 5px;
    box-sizing: border-box;
    box-shadow: 0px 1px 5px rgb(0 0 0 / 50%);
}
        .box h1 {
    font-size: 40px;
    font-family: fantasy;
    letter-spacing: 10px;
    font-weight: bold;
    color: #fff;
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
    background-color: #8c64ff;
    box-sizing: border-box;
    box-shadow: 0px 1px 5px rgb(0 0 0 / 50%);
    padding: 25px;
    margin-bottom: 20px;
    text-align: center;
}
.product a img {
    border-radius: 5px;
    cursor: pointer;
}

            .col-md-4.col-sm-6.center-responsive {
                margin-bottom: 10px;
            }
            video {
        display: none;
    }
    



    .col-md-12 {
    margin-top: 10px;
    height: 430vh;
}
.home img{
            width: 50px;
            border-radius: 13px;
        }

        div#content {
    position: relative;
    top: -20px;
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
.text a img {
    width: 25px;
    
}
.titleTxt {
    display: inline-flex;
    padding: 5px;
}
.titleTxt a {
    position: relative;
    top: 6px;
    padding-left: 45px;
}

.titleTxt h5 {
    font-family: fantasy;
    font-weight: bold;
    font-size: 25px;
}

</style>
</head>



<body>


   
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
                       <li>
                           <a href="index.php">Home</a>
                       </li>
                       <li>
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
                       <li>
                           <audio controls autoplay>
  <source src="AllBackgroundMusic/birds.mp3" type="audio/mp3">
</audio>
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
            <div class="box">
                <h1>Birds</h1>
               
            </div>

            <div class="row">

                    <div class="col-md-4 col-sm-6 center-responsive">

                        <div class="product">
                            <a onclick="aPlay()">
                                <img style="width: 350px; height: 265px" class="img-responsive" src="BirdPic/crow1.jpeg" alt="macbookLaptop">
                            </a>

                      
                            <div class="text">
                                
                                    <div class="titleTxt">
                                        <h5>Crow</h5>
                                        <a onclick="crowSndPlay()">
                                            <img src="BirdPic/high-volume.png" alt="volume" srcset="">
                                        </a>
                                    </div> 
                            </div>
                        </div>

                    </div>

                    <div class="col-md-4 col-sm-6 center-responsive">
                            <div class="product">
                                    <a onclick="bPlay()">
                                        <img style="width: 350px; height: 265px" class="img-responsive" src="BirdPic/Dove.jpeg" alt="macbookLaptop">
                                    </a>

                                    <div class="text">
                                
                                        <div class="titleTxt">
                                            <h5>Dove</h5>
                                            <a onclick="doveSndPlay()">
                                                <img src="BirdPic/high-volume.png" alt="volume" srcset="">
                                            </a>
                                        </div> 
                                    </div>
                                
                                </div>

                    </div>

                    <div class="col-md-4 col-sm-6 center-responsive">

                        <div class="product">
                            <a onclick="cPlay()">
                                <img style="width: 350px; height: 265px" class="img-responsive" src="BirdPic/doyel.jpeg" alt="macbookLaptop">
                            </a>
                            <div class="text">
                                
                                <div class="titleTxt">
                                    <h5>Magpie</h5>
                                    <a onclick="magpieSndPlay()">
                                        <img src="BirdPic/high-volume.png" alt="volume" srcset="">
                                    </a>
                                </div> 
                            </div>
                        
                        </div>

                    </div>

                    <div class="col-md-4 col-sm-6 center-responsive">
                        <div class="product">
                            <a onclick="dPlay()">
                                <img style="width: 350px; height: 265px" class="img-responsive" src="BirdPic/duck.jpeg" alt="macbookLaptop">
                            </a>
                            <div class="text">
                                
                                <div class="titleTxt">
                                    <h5>Duck</h5>
                                    <a onclick="duckSndPlay()">
                                        <img src="BirdPic/high-volume.png" alt="volume" srcset="">
                                    </a>
                                </div> 
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 center-responsive">
                        <div class="product">
                            <a onclick="ePlay()">
                                <img style="width: 350px; height: 265px" class="img-responsive" src="BirdPic/eagle.jpeg" alt="macbookLaptop">
                            </a>
                            <div class="text">
                                
                                <div class="titleTxt">
                                    <h5>Eagle</h5>
                                    <a onclick="eagleSndPlay()">
                                        <img src="BirdPic/high-volume.png" alt="volume" srcset="">
                                    </a>
                                </div> 
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 center-responsive">
                        <div class="product">
                            <a onclick="fPlay()">
                                <img style="width: 350px; height: 265px" class="img-responsive" src="BirdPic/Heron.jpeg" alt="macbookLaptop">
                            </a>
                            <div class="text">
                                
                                <div class="titleTxt">
                                    <h5>Heron</h5>
                                    <a onclick="heronSndPlay()">
                                        <img src="BirdPic/high-volume.png" alt="volume" srcset="">
                                    </a>
                                </div> 
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 center-responsive">

                        <div class="product">
                            <a onclick="gPlay()">
                                <img style="width: 350px; height: 265px" class="img-responsive" src="BirdPic/Humming-Bird.jpeg" alt="macbookLaptop">
                            </a>
                            <div class="text">
                                
                                <div class="titleTxt">
                                    <h5>Humming-Bird</h5>
                                    <a onclick="hurmingSndPlay()">
                                        <img src="BirdPic/high-volume.png" alt="volume" srcset="">
                                    </a>
                                </div> 
                            </div>
                        </div>

                    </div>

                    <div class="col-md-4 col-sm-6 center-responsive">
                        <div class="product">
                                <a onclick="hPlay()">
                                    <img style="width: 350px; height: 265px" class="img-responsive" src="BirdPic/King-Fisher.jpeg" alt="macbookLaptop">
                                </a>
                                <div class="text">
                                
                                    <div class="titleTxt">
                                        <h5>King-Fisher</h5>
                                        <a onclick="kfisherSndPlay()">
                                            <img src="BirdPic/high-volume.png" alt="volume" srcset="">
                                        </a>
                                    </div> 
                                </div>
                            </div>

                    </div>  

                    <div class="col-md-4 col-sm-6 center-responsive">

                        <div class="product">
                                <a onclick="iPlay()">
                                    <img style="width: 350px; height: 265px" class="img-responsive" src="BirdPic/Kookaburra.jpeg" alt="macbookLaptop">
                                </a>
                                <div class="text">
                                
                                <div class="titleTxt">
                                    <h5>kookaburra</h5>
                                    <a onclick="kookaburraSndPlay()">
                                        <img src="BirdPic/high-volume.png" alt="volume" srcset="">
                                    </a>
                                </div> 
                            </div>
                            </div>

                    </div>

                    <div class="col-md-4 col-sm-6 center-responsive">
                        <div class="product">
                            <a onclick="jPlay()">
                                <img style="width: 350px; height: 265px" class="img-responsive" src="BirdPic/Martin.png" alt="macbookLaptop">
                            </a>
                            <div class="text">
                                
                                <div class="titleTxt">
                                    <h5>Martin</h5>
                                    <a onclick="martinSndPlay()">
                                        <img src="BirdPic/high-volume.png" alt="volume" srcset="">
                                    </a>
                                </div> 
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 center-responsive">
                        <div class="product">
                            <a onclick="kPlay()">
                                <img style="width: 350px; height: 265px" class="img-responsive" src="BirdPic/Myna.jpeg" alt="macbookLaptop">
                            </a>
                            <div class="text">
                                
                                <div class="titleTxt">
                                    <h5>Myna</h5>
                                    <a onclick="mynaSndPlay()">
                                        <img src="BirdPic/high-volume.png" alt="volume" srcset="">
                                    </a>
                                </div> 
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 center-responsive">

                        <div class="product">
                            <a onclick="lPlay()">
                                <img style="width: 350px; height: 265px" class="img-responsive" src="BirdPic/nightingale.jpeg" alt="macbookLaptop">
                            </a>
                            <div class="text">
                                
                                <div class="titleTxt">
                                    <h5>Nightingale</h5>
                                    <a onclick="nightingaleSndPlay()">
                                        <img src="BirdPic/high-volume.png" alt="volume" srcset="">
                                    </a>
                                </div> 
                            </div>
                        </div>

                    </div>

                    <div class="col-md-4 col-sm-6 center-responsive">
                        <div class="product">
                                <a onclick="mPlay()">
                                    <img style="width: 350px; height: 265px" class="img-responsive" src="BirdPic/Ostrich.jpeg" alt="macbookLaptop">
                                </a>
                                <div class="text">
                                
                                <div class="titleTxt">
                                    <h5>Ostrich</h5>
                                    <a onclick="OstrichSndPlay()">
                                        <img src="BirdPic/high-volume.png" alt="volume" srcset="">
                                    </a>
                                </div> 
                            </div>
                        </div>

                    </div>

                    <div class="col-md-4 col-sm-6 center-responsive">

                        <div class="product">
                                    <a onclick="nPlay()">
                                        <img style="width: 350px; height: 265px" class="img-responsive" src="BirdPic/Owl.jpeg" alt="macbookLaptop">
                                    </a>
                                    <div class="text">
                                    
                                            <div class="titleTxt">
                                                <h5>Owl</h5>
                                                <a onclick="OwlSndPlay()">
                                                    <img src="BirdPic/high-volume.png" alt="volume" srcset="">
                                                </a>
                                            </div> 
                                    </div>
                            </div>

                    </div>

                    <div class="col-md-4 col-sm-6 center-responsive">
                        <div class="product">
                            <a onclick="oPlay()">
                                <img style="width: 350px; height: 265px" class="img-responsive" src="BirdPic/Parrot.jpeg" alt="macbookLaptop">
                            </a>
                            <div class="text">
                                
                                <div class="titleTxt">
                                    <h5>Parrot</h5>
                                    <a onclick="ParrotlSndPlay()">
                                        <img src="BirdPic/high-volume.png" alt="volume" srcset="">
                                    </a>
                                </div> 
                             </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 center-responsive">
                        <div class="product">
                            <a onclick="pPlay()">
                                <img style="width: 350px; height: 265px" class="img-responsive" src="BirdPic/Peacock1.jpeg" alt="macbookLaptop">
                            </a>
                            <div class="text">
                                
                                <div class="titleTxt">
                                    <h5>Peacock</h5>
                                    <a onclick="PeacockSndPlay()">
                                        <img src="BirdPic/high-volume.png" alt="volume" srcset="">
                                    </a>
                                    
                                </div> 
                             </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 center-responsive">
                        <div class="product">
                                <a onclick="rPlay()">
                                    <img style="width: 350px; height: 265px" class="img-responsive" src="BirdPic/Robin.jpeg" alt="macbookLaptop">
                                </a>
                                <div class="text">
                                
                                <div class="titleTxt">
                                    <h5>Robin</h5>
                                    <a onclick="RobinSndPlay()">
                                        <img src="BirdPic/high-volume.png" alt="volume" srcset="">
                                    </a>
                                    
                                </div> 
                             </div>
                            </div>

                    </div>

                    <div class="col-md-4 col-sm-6 center-responsive">

                        <div class="product">
                            <a onclick="sPlay()">
                                <img style="width: 350px; height: 265px" class="img-responsive" src="BirdPic/skylark.jpeg" alt="macbookLaptop">
                            </a>
                            <div class="text">
                                
                                <div class="titleTxt">
                                    <h5>Skylark</h5>
                                    <a onclick="SkylarkSndPlay()">
                                        <img src="BirdPic/high-volume.png" alt="volume" srcset="">
                                    </a>
                                    
                                </div> 
                             </div>
                        </div>

                    </div>

                    <div class="col-md-4 col-sm-6 center-responsive">
                        <div class="product">
                            <a onclick="tPlay()">
                                <img style="width: 350px; height: 265px" class="img-responsive" src="BirdPic/Sparrow.jpeg" alt="macbookLaptop">
                            </a>
                            <div class="text">
                                
                                <div class="titleTxt">
                                    <h5>Sparrow</h5>
                                    <a onclick="SparrowSndPlay()">
                                        <img src="BirdPic/high-volume.png" alt="volume" srcset="">
                                    </a>
                                    
                                </div> 
                             </div>
                        </div>
                    </div>

                   
                            
            </div>
            
           
        </div>
    </div>
    
</div>

   

<script>
    
    function crowSndPlay()
    {
        var audio = new Audio("BirdsSound/crowSund.wav");
            audio.play();
    }

    function aPlay()
    {
        var audio = new Audio("BirdsSound/crow.mp3");
            audio.play();
    }

    function doveSndPlay()
    {
        var audio = new Audio("BirdsSound/doveSund.wav");
            audio.play();
    }
    function bPlay()
    {
        var audio = new Audio("BirdsSound/dove.mp3");
            audio.play();
    }

   

    function magpieSndPlay()
    {
        var audio = new Audio("BirdsSound/MagpieSund.wav");
            audio.play();
    }

    function cPlay()
    {
        var audio = new Audio("BirdsSound/magpie.mp3");
            audio.play();
    }

    function duckSndPlay()
    {
        var audio = new Audio("BirdsSound/duckSund.mp3");
            audio.play();
    }


    function dPlay()
    {
        var audio = new Audio("BirdsSound/duck.mp3");
            audio.play();
    }

    function eagleSndPlay()
    {
        var audio = new Audio("BirdsSound/eagleSund.wav");
            audio.play();
    }

    function ePlay()
    {
        var audio = new Audio("BirdsSound/eagle.mp3");
            audio.play();
    }

    function heronSndPlay()
    {
        var audio = new Audio("BirdsSound/heronSund.mp3");
            audio.play();
    }
    function fPlay()
    {
        var audio = new Audio("BirdsSound/heron.mp3");
            audio.play();
    }

    
    function hurmingSndPlay()
    {
        var audio = new Audio("BirdsSound/HummingBird.wav");
            audio.play();
    }
    function gPlay()
    {
        var audio = new Audio("BirdsSound/humming.mp3");
        audio.play();
    }

    function kfisherSndPlay()
    {
        var audio = new Audio("BirdsSound/kingFisherSunf.mp3");
            audio.play();
    }
    function hPlay()
    {
        var audio = new Audio("BirdsSound/kingFisher.mp3");
            audio.play();
    }


  function kookaburraSndPlay()
    {
        var audio = new Audio("BirdsSound/KookaburraSund.wav");
            audio.play();
    }
    function iPlay()
    {
        var audio = new Audio("BirdsSound/Kookaburra.mp3");
            audio.play();
    }
    
    function martinSndPlay()
    {
        var audio = new Audio("BirdsSound/MartinSund.mp3");
            audio.play();
    }
    function jPlay()
    {
        var audio = new Audio("BirdsSound/mrtn.mp3");
            audio.play();
    }

    
    function mynaSndPlay()
    {
        var audio = new Audio("BirdsSound/mynaSund.wav");
            audio.play();
    }
    function kPlay()
    {
        var audio = new Audio("BirdsSound/Myna.mp3");
            audio.play();
    }

    
    function nightingaleSndPlay()
    {
        var audio = new Audio("BirdsSound/NightingaleSund.wav");
            audio.play();
    }
    function lPlay()
    {
        var audio = new Audio("BirdsSound/Nightingale.mp3");
            audio.play();
    }

    
    function OstrichSndPlay()
    {
        var audio = new Audio("BirdsSound/ostrichSnd.mp3");
            audio.play();
    }
    function mPlay()
    {
        var audio = new Audio("BirdsSound/Ostrich.mp3");
            audio.play();
    }

    
    function OwlSndPlay()
    {
        var audio = new Audio("BirdsSound/owlSund.mp3");
            audio.play();
    }
    function nPlay()
    {
        var audio = new Audio("BirdsSound/owl.mp3");
            audio.play();
    }

    
    function ParrotlSndPlay()
    {
        var audio = new Audio("BirdsSound/parotSund.mp3");
            audio.play();
    }
    function oPlay()
    {
        var audio = new Audio("BirdsSound/parrot.mp3");
            audio.play();
    }

    
    function PeacockSndPlay()
    {
        var audio = new Audio("BirdsSound/peacockSund.wav");
            audio.play();
    }
    function pPlay()
    {
        var audio = new Audio("BirdsSound/peacock.mp3");
            audio.play();
    }

  

    
    function RobinSndPlay()
    {
        var audio = new Audio("BirdsSound/robinSund.wav");
            audio.play();
    }
    function rPlay()
    {
        var audio = new Audio("BirdsSound/robin.mp3");
            audio.play();
    }

    
        
    function SkylarkSndPlay()
    {
        var audio = new Audio("BirdsSound/skylarkSund.wav");
            audio.play();
    }
    function sPlay()
    {
        var audio = new Audio("BirdsSound/Skylark.mp3");
            audio.play();
    }

    
    function SparrowSndPlay()
    {
        var audio = new Audio("BirdsSound/sparrowSund.wav");
            audio.play();
    }
    function tPlay()
    {
        var audio = new Audio("BirdsSound/sparrow.mp3");
            audio.play();
    }


</script>

<script src="js/jquery-331.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script src="js/bootstrap-337.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous"></script>




</body>
</html>
   