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

            .carousel-inner {
                position: relative;
                width: 100%;
                overflow: hidden;
                background-color: #fff;
                border-radius: 5px;
            }

            .carousel-inner.orderInput {
                padding: 20px;
                line-height: 40px;
                border-radius: 5px;
            }

            .d-grid.gap-2.col-6.mx-auto.text-center {
                position: relative;
                top: 8px;
            }

            button.btn.btn-primary {
                width: 130px;
            }

   .details_1 {
    text-align: center;
   }

   button.btn.btn-secondary.btn-lg.mb-1 {
    margin-top: 10px;
}

audio {
        display: none;
    }
    div#content {
    position: relative;
    top: -20px;
   }

   .col-md-12 {
    margin-top: 10px;
}
.carousel {
    position: relative;
    padding-bottom: 40px;
}
.home img{
            width: 50px;
            border-radius: 13px;
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
input#id {
    display: none;
}


</style>
</head>



<body>

<?php 
 
    $conn = new mysqli('localhost','root','','munshiShop');
    if(!$conn){
        echo 'not connect';
    }
    
    if ($_GET['id']) {
       $grtId = $_GET['id'];

      $sql = "SELECT user_name,phone_number,user_email,user_password,user_id FROM userMshop WHERE user_id = $grtId";

       $query = mysqli_query($conn, $sql);

       $data = mysqli_fetch_assoc($query);

       $u_id = $data['user_id'];
       $User_Name = $data['user_name'];
       $user_Phn_num = $data['phone_number'];
       $user_email_num = $data['user_email'];
       $user_Pass = $data['user_password'];
      
    }

    if(isset($_POST['edit'])){
        $userid = $_POST['user_id'];
        $userName = $_POST['user_name'];
        $userNumber = $_POST['user_number'];
        $userEmail = $_POST['user_email'];
        $userPass = $_POST['user_passw'];
      
    //echo $userid . $userName . $userNumber ;
        $sql1 =   "UPDATE userMshop 
                SET user_name='$userName',	phone_number='$userNumber',user_email='$userEmail',	user_password='$userPass'	
               WHERE user_id='$userid' ";

        if(mysqli_query($conn, $sql1)==TRUE){
            echo "<script>window.location.href='account.php';</script>";
        }else {
            echo 'Data Not Update';
        }

    }

?>      

   
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
                       <li >
                           <a href="shop.php">Shop</a>
                       </li>
                       <li class="active">
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
                <li>My-Account</li>
                <li>Update Profile</li>
            </ul>
        </div>

        <div class="col-md-3"> </div>

            <div class="col-md-9">
                <div id="productMain" class="row">
                    
                    <div class="col-sm-7">
                        <div id="mainImage">
                            <div id="myCarousel" class="carousel slide">       
                                   <div class="carousel-inner orderInput">                                      
                                        <form action="edit.php" method="post">
                                            <div class="form-floating mb-3">
                                            <label for="floatingInput">User Name</label>                 
                                            <input type="text" name="user_name"  class="form-control" id="floatingInput" value="<?php echo $User_Name ; ?>" placeholder="Product Name">
                                       
                                           </div>
                                           <div class="form-floating mb-3">
                                            <label for="floatingInput">Phone Number</label>                 
                                            <input type="text" name="user_number"  class="form-control" id="floatingInput" value="<?php echo $user_Phn_num ; ?>" placeholder="Product Category">
                                        
                                           </div>

                                           <div class="form-floating mb-3">
                                            <label for="floatingInput">Email</label>                 
                                            <input type="text" name="user_email"  class="form-control" id="floatingInput" value="<?php echo $user_email_num ; ?>" placeholder="Product Code">
                                       
                                          </div>

                                           <div class="form-floating mb-3">
                                            <label for="floatingInput">Password</label>                 
                                            <input type="text" name="user_passw"  class="form-control" id="floatingInput" value="<?php echo $user_Pass ; ?>" placeholder="Product Price">
                                          
                                           </div>

                                         

                                            

                                          
                                        <input type="text"  name="user_id" class="form-control" id="id" value="<?php echo $u_id ; ?>" placeholder="Address" hidden>
                                           
                                        <div class="btn_sub text-center">
                            <button class="btn btn-secondary btn-lg mb-1" name="edit">Update</button>
   
                            </div> 
                                </form>
                                   </div> 
                            </div>
                        </div>
                    </div>
                </div>
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
   