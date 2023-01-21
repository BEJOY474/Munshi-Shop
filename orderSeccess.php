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
                background-color: #fff;
                overflow-x: hidden;
            }

            div#top {
    background: black;
}

            .successTitel {
            text-align: center;
            color: blue;
            }

            audio {
    display: none;
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

            .allDetails h2 {
    text-align: center;
    color: #076604;
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

    .home img{
            width: 50px;
            border-radius: 13px;
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
    background-color: black;
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
    color: #ffffff;
    padding-left: 8px;
    text-decoration: none;
}
div#content {
    position: relative;
    top: -20px;
    height: 66vh;
}

.col-md-3 {
    position: relative;
    top: 35px;
}
.successTitel {
    text-align: center;
    color: blue;
    position: relative;
   
    
}





</style>
</head>



<body>

<!-- <audio controls autoplay>
  <source src="music/cngrs2.mp3" type="audio/mp3">
</audio>
    -->
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


<div  id="content" class="content">
    <div class="container">
               

                <div class="col-md-3">
                    <?php 

                    include("includes/sidebar.php");

                    ?>  

                </div>

                <div class="col-md-9">
                    <div class="successTitel">
                        <h1>Congratulation!!! Your Order is done...</h1>
                        <h5>You Will get this product with in <?php $r = rand(1,3); echo $r; ?> days.</h5>
                    </div>
                </div>


                <div class="col-md-9">
            <div class="box" id="box"> 
                <div class="allDetails">
                    <h2>Munshi Shop</h3>
                    <h3 style="font-weight: bold;">Money Receipt</h4>

                    <?php 
                      
                                    $conn = new mysqli('localhost','root','','munshiShop');
                                    if(!$conn){
                                        echo 'not connect';
                                    }

                                    $sum = 0;

                                    $sqlIn = "SELECT user_name,phone_number,user_email,user_password FROM userMshop WHERE phone_number=' $phon'";
                                    $resultIn = $conn->query($sqlIn);
                                    
                                    if ($resultIn->num_rows > 0) {
                                        while($row = $resultIn->fetch_assoc()) {
                                        echo  " <h4> Name:  </h4>  " . $row["user_name"]. "    " ." <h4> Email:  </h4>  " . $row["user_email"] ."    " . " <h4> Phone Number:  </h4>  ".'0'. $row["phone_number"]. "";
                                                                                


                                    $sql = "SELECT Product_id, ProductName,	ProductCategory,	ProductCode,	ProductPrice,	Email,	MobileNumber, userAddress,	entryDate FROM mobile WHERE MobileNumber=' $phon'";
                                    $result = $conn->query($sql);

                                    $sql2 = "SELECT Product_id, ProductName,	ProductCategory,	ProductCode,	ProductPrice,	Email,	MobileNumber, userAddress,	entryDate FROM laptop WHERE MobileNumber=' $phon'";
                                    $result2 = $conn->query($sql2);

                                    $sql3 = "SELECT Product_id, ProductName,	ProductCategory,	ProductCode,	ProductPrice,	Email,	MobileNumber, userAddress,	entryDate FROM headphone WHERE MobileNumber=' $phon'";
                                    $result3 = $conn->query($sql3);

                                    $sql4 = "SELECT Product_id, ProductName,	ProductCategory,	ProductCode,	ProductPrice,	Email,	MobileNumber, userAddress,	entryDate FROM pizza WHERE MobileNumber=' $phon'";
                                    $result4 = $conn->query($sql4);

                                    $sql5 = "SELECT Product_id, ProductName,	ProductCategory,	ProductCode,	ProductPrice,	Email,	MobileNumber, userAddress,	entryDate FROM burger WHERE MobileNumber=' $phon'";
                                    $result5 = $conn->query($sql5);

                                    $sql6 = "SELECT Product_id, ProductName,	ProductCategory,	ProductCode,	ProductPrice,	Email,	MobileNumber, userAddress,	entryDate FROM kidsBook WHERE MobileNumber=' $phon'";
                                    $result6 = $conn->query($sql6);
                                    
                                    
                                    if ($result->num_rows > 0) {
                                                echo "<h3 style='text-align:center ; margin-top:15px ;' >Mobile-Phone</h3>";
                                                echo "<table border='1' class = 'table table-success' ;><tr><th>Product Nane</th> <th>Product Category</th> <th>Product Price($)</th> <th>Email</th> <th>Mobile Number</th> <th>Address </th> <th>Entry Date</th> </tr>";
                                                while ( $data = $result->fetch_assoc()) {
                                                $productId = $data['Product_id'];   
                                                $product_name = $data['ProductName'];
                                                $product_catagory = $data['ProductCategory'];
                                                $product_price = $data['ProductPrice'];
                                                $email = $data['Email'];
                                                $mobile_number = $data['MobileNumber'];
                                                $user_Address = $data['userAddress'];
                                                $product_entry_date = $data['entryDate'];
                                                
                                                $sum+=$product_price;

                                                echo "<tr>
                                                        <td>$product_name</td> 
                                                        <td>$product_catagory</td> 
                                                        <td>$product_price</td>  
                                                        <td>$email</td>  
                                                        <td>0$mobile_number</td>  
                                                        <td>$user_Address</td>  
                                                        <td>$product_entry_date</td>
                                                      
                                                
                                                    </tr>";
                                                
                                                }
                                                echo "</table>"; 
                                    } 

                                    if ($result2->num_rows > 0) {
                                        echo "<h3 style='text-align:center ; margin-top:15px ;' >Laptop</h3>";
                                        echo "<table border='1' class = 'table table-success' ;><tr><th>Product Nane</th> <th>Product Category</th> <th>Product Price($)</th> <th>Email</th> <th>Mobile Number</th> <th>Address </th> <th>Entry Date</th>   </tr>";
                                        while ( $data = $result2->fetch_assoc()) {
                                        $productId = $data['Product_id'];   
                                        $product_name = $data['ProductName'];
                                        $product_catagory = $data['ProductCategory'];
                                        $product_price = $data['ProductPrice'];
                                        $email = $data['Email'];
                                        $mobile_number = $data['MobileNumber'];
                                        $user_Address = $data['userAddress'];
                                        $product_entry_date = $data['entryDate'];
                                        $sum+=$product_price;
                                        echo "<tr>
                                                <td>$product_name</td> 
                                                <td>$product_catagory</td> 
                                                <td>$product_price</td>  
                                                <td>$email</td>  
                                                <td>0$mobile_number</td>  
                                                <td>$user_Address</td>  
                                                <td>$product_entry_date</td>
                                             
                                        
                                            </tr>";
                                        
                                        }
                                        echo "</table>"; 
                                    }

                                    if ($result3->num_rows > 0) {
                                        echo "<h3 style='text-align:center ; margin-top:15px ;' >Head-Phone</h3>";
                                        echo "<table border='1' class = 'table table-success' ;><tr><th>Product Nane</th> <th>Product Category</th> <th>Product Price($)</th> <th>Email</th> <th>Mobile Number</th> <th>Address </th> <th>Entry Date</th>  </tr>";
                                        while ( $data = $result3->fetch_assoc()) {
                                        $productId = $data['Product_id'];   
                                        $product_name = $data['ProductName'];
                                        $product_catagory = $data['ProductCategory'];
                                        $product_price = $data['ProductPrice'];
                                        $email = $data['Email'];
                                        $mobile_number = $data['MobileNumber'];
                                        $user_Address = $data['userAddress'];
                                        $product_entry_date = $data['entryDate'];
                                        $sum+=$product_price;
                                        echo "<tr>
                                                <td>$product_name</td> 
                                                <td>$product_catagory</td> 
                                                <td>$product_price</td>  
                                                <td>$email</td>  
                                                <td>0$mobile_number</td>  
                                                <td>$user_Address</td>  
                                                <td>$product_entry_date</td>
                                              
                                        
                                            </tr>";
                                        
                                        }
                                        echo "</table>"; 
                                    }

                                    if ($result4->num_rows > 0) { 
                                        echo "<h3 style='text-align:center ; margin-top:15px ;' >Pizza</h3>";
                                        echo "<table border='1' class = 'table table-success' ;><tr><th>Product Nane</th> <th>Product Category</th> <th>Product Price($)</th> <th>Email</th> <th>Mobile Number</th> <th>Address </th> <th>Entry Date</th>   </tr>";
                                        while ( $data = $result4->fetch_assoc()) {
                                        $productId = $data['Product_id'];   
                                        $product_name = $data['ProductName'];
                                        $product_catagory = $data['ProductCategory'];
                                        $product_price = $data['ProductPrice'];
                                        $email = $data['Email'];
                                        $mobile_number = $data['MobileNumber'];
                                        $user_Address = $data['userAddress'];
                                        $product_entry_date = $data['entryDate'];
                                        $sum+=$product_price;
                                        echo "<tr>
                                                <td>$product_name</td> 
                                                <td>$product_catagory</td> 
                                                <td>$product_price</td>  
                                                <td>$email</td>  
                                                <td>0$mobile_number</td>  
                                                <td>$user_Address</td>  
                                                <td>$product_entry_date</td>
                                               
                                        
                                            </tr>";
                                        
                                        }
                                        echo "</table>"; 
                                    } 
                                    
                                    if ($result5->num_rows > 0) {
                                        echo "<h3 style='text-align:center ; margin-top:15px ;' >Burger</h3>";
                                        echo "<table border='1' class = 'table table-success' ;><tr><th>Product Nane</th> <th>Product Category</th> <th>Product Price($)</th> <th>Email</th> <th>Mobile Number</th> <th>Address </th> <th>Entry Date</th>   </tr>";
                                        while ( $data = $result5->fetch_assoc()) {
                                        $productId = $data['Product_id'];   
                                        $product_name = $data['ProductName'];
                                        $product_catagory = $data['ProductCategory'];
                                        $product_price = $data['ProductPrice'];
                                        $email = $data['Email'];
                                        $mobile_number = $data['MobileNumber'];
                                        $user_Address = $data['userAddress'];
                                        $product_entry_date = $data['entryDate'];
                                        $sum+=$product_price;
                                        echo "<tr>
                                                <td>$product_name</td> 
                                                <td>$product_catagory</td> 
                                                <td>$product_price</td>  
                                                <td>$email</td>  
                                                <td>0$mobile_number</td>  
                                                <td>$user_Address</td>  
                                                <td>$product_entry_date</td>
                                               
                                        
                                            </tr>";
                                        
                                        }
                                        echo "</table>"; 
                                    } 
                                    
                                    if ($result6->num_rows > 0) {
                                        echo "<h3 style='text-align:center ; margin-top:15px ;' >Kids-Book</h3>";
                                        echo "<table border='1' class = 'table table-success' ;><tr><th>Product Nane</th> <th>Product Category</th> <th>Product Price($)</th> <th>Email</th> <th>Mobile Number</th> <th>Address </th> <th>Entry Date</th>  </tr>";
                                        while ( $data = $result6->fetch_assoc()) {
                                        $productId = $data['Product_id'];   
                                        $product_name = $data['ProductName'];
                                        $product_catagory = $data['ProductCategory'];
                                        $product_price = $data['ProductPrice'];
                                        $email = $data['Email'];
                                        $mobile_number = $data['MobileNumber'];
                                        $user_Address = $data['userAddress'];
                                        $product_entry_date = $data['entryDate'];
                                        $sum+=$product_price;
                                        echo "<tr>
                                                <td>$product_name</td> 
                                                <td>$product_catagory</td> 
                                                <td>$product_price</td>  
                                                <td>$email</td>  
                                                <td>0$mobile_number</td>  
                                                <td>$user_Address</td>  
                                                <td>$product_entry_date</td>
                                              
                                        
                                            </tr>";
                                        
                                        }
                                        echo "</table>"; 
                                    } 

                               
                                        
                                        }
                                    } else {
                                        echo "You have no account. Please register and login...";
                                    }

                                    $dv = 100;
                                    $totalSum = $sum + $dv;

                                    echo "All Product Price    : ". $sum."$";
                                    echo "<br>". "Delivery charges    : ". $dv."$";
                                    echo "<br>"."<h4 style=' font-weight:'>Total   :  $totalSum$</h4>";
                                    
                

                    ?>
                </div>

            
              
            </div>

              
            <div class="button text-center">
                    <button  type="submit" onclick="printPage('box')"  name="submit">Download Money Receipt</button>
                </div>
               

            <div style="text-align:center ;" class="row">
        
            </div>
            
                <center>
                    <ul  class="pagination">
                       
                        <li><a href="index.php">Go To Home Page</a></li>
               
                    </ul>
                </center>
        </div>


    </div>
    
</div>

   




<script src="js/jquery-331.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script src="js/bootstrap-337.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous"></script>



</body>
<script>
    function printPage(el){
    
       var rstrPage = document.body.innerHTML;
       var prinCnt = document.getElementById(el).innerHTML;
       document.body.innerHTML = prinCnt;
        window.print();
        document.body.innerHTML = rstrPage;
    
    
    
    }   
</script>
</html>
   