<?php
   session_start();
   $phon = $_SESSION['phone_number'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Munshi Shop Dashboard</title>
    <link rel="icon" href="images/mLogo.webp" type="images/icon">
   
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
   
    <link rel="icon" href="images/mLogo.webp" type="images/icon">
   
    <link rel="stylesheet" href="dashboard.css">

<style>
            @import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap');
        *{
            font-family: 'Ubuntu', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root{
            --blue: #2a2185;
            --white: #fff;
            --gray: #f5f5f5;
            --black1: #222;
            --black2: #999;
        }

        body{
            min-height: 100vh;
            overflow-x: hidden;
        }

        .container{
            position: relative;
            width: 100%;
        }

        .navigation {
            position: fixed;
            width: 260px;
            height: 100%;
            background: #b70606;
            border-left: 10px solid #b70606;
            transition: 0.5s;
            overflow: hidden;
        }

        .navigation.active{
            width: 90px;
        }

        .navigation ul{
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
        }

        .navigation ul li{
            position: relative;
            width: 100%;
            list-style: none;
            border-top-left-radius: 30px;
            border-bottom-left-radius: 30px;
        }

        .navigation ul li:hover,
        .navigation ul li.hovered
        {
            background-color: var(--white);
        }

        .navigation ul li:nth-child(1){
            margin-bottom: 40px;
            pointer-events: none;
        }

        .navigation ul li a{
            position: relative;
            display: block ;
            width: 100%;
            display: flex;
            text-decoration: none;
            color: var(--white);
        }

        .navigation ul li:hover a,
        .navigation ul li.hovered a
        {
            color: var(--blue);
        }

        .navigation ul li a .icon{
            position: relative;
            display: block;
            min-width: 70px;
            height: 70px;
            line-height: 85px;
            text-align: center;
        }

        .navigation ul li a .icon ion-icon{
            font-size: 1.75rem;
        }

        .navigation ul li a .title{
            position: relative;
            display: block;
            padding: 0 10px;
            height: 70px;
            line-height: 70px;
            text-align: start;
            white-space: nowrap;
        }

        .navigation ul li:hover a::before,
        .navigation ul li.hovered a::before
        {
            content: '';
            position: absolute;
            right: 0;
            top: -50px;
            width: 50px;
            height: 50px;
            background-color: transparent;
            border-radius: 50%;
            box-shadow: 35px 35px 0 10px var(--white);
            pointer-events: none;
        }

        .navigation ul li:hover a::after,
        .navigation ul li.hovered a::after
        {
            content: '';
            position: absolute;
            right: 0;
            bottom: -50px;
            width: 50px;
            height: 50px;
            background-color: transparent;
            border-radius: 50%;
            box-shadow: 35px -35px 0 10px var(--white);
            pointer-events: none;
        }



                .main {
            position: absolute;
            width: calc(100% - 300px);
            left: 275px;
            min-height: 100vh;
            background: #fff;
            transition: 0.5s;
        }

        .main.active{
            width: calc(100% - 90px);
            left: 90px;
        }

        .topbar{
            width: 100%;
            height: 60px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 10px;
            box-shadow: 0 7px 25px rgb(0 0 0 / 8%);

        }


        .toggle{
            position: relative;
            top: 8px;
            width: 60px;
            height: 60px;
            display: flex;
            justify-content: center;
            font-size: 2.5rem;
            cursor: pointer;
        }

        .search{
            position: relative;
            width: 400px;
            margin: 0 10px;
        }

        .search label{
            position: relative;
            width: 100%;
        }

        .search label input{
            width: 100%;
            height: 40px;
            border-radius: 40px;
            padding: 5px 20px;
            padding-left: 35px;
            font-size: 18px;
            outline: none;
            border: 1px solid var(--black2);
        }

        .search label ion-icon{
            position: absolute;
            top: 0;
            left: 10px;
            font-size: 1.2rem;
        }

        .user{
            position: relative;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            overflow: hidden;
            cursor: pointer;

        }

        .user img{
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }





        .cardBox{
            position: relative;
            width: 100%;
            padding: 20px;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            grid-gap: 30px;
        }

        .cardBox .card{
            position: relative;
            background: var(--white);
            padding: 30px;
            box-shadow: 0 7px 25px rgba(0, 0, 0, 0.08);
            border-radius: 20px;
            display: flex;
            justify-content: space-between;
            cursor: pointer;
        }

        .cardBox .card:last-child{
            background: #b70606;
        }


        .cardBox .card:last-child .numbers,
        .cardBox .card:last-child .cardName,
        .cardBox .card:last-child .iconB
        {
            color: var(--white);
        }


        .cardBox .card .numbers{
            position: relative;
            font-weight: 500;
            font-size: 2.5rem;
            color: var(--blue);
        }

        .cardBox .card .cardName{
            color: var(--black2);
            font-size: 1.1rem;
            margin-top: 5px;
        }

        .cardBox .card .iconB{
            font-size: 3.5rem;
            color: var(--black2);
        }

        .cardBox .card:hover{
            background: #b70606;
            transition: 0.3s;
        }

        .cardBox .card:hover .numbers,
        .cardBox .card:hover .cardName,
        .cardBox .card:hover .iconB{
            color: var(--white);
        }



        .recent-grid {
            margin-top: 0.5rem;
            margin-left: 10px;
            margin-right: 10px;
            border-radius: 5px;
            box-shadow: 0 7px 25px rgb(0 0 0 / 8%);
        }

        .card-2{
            background-color: #fff;
            border-radius: 5px;
        }

        .card-header,
        .card-body
        {
        padding: 1rem;
        }

        .card-header{
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #f0f0f0;
        }

        .card-header button{
            background: #b70606;
            border-radius: 10px;
            color: var(--white);
            font-size: .8rem;
            padding: .5rem 1rem;
            font-family: 'Ubuntu', sans-serif;
            cursor: pointer;
            border: 1px solid #b70606;
        }

        .customer{
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: .5rem .7rem;
            cursor: pointer;
        }

        .customer:hover{
            background: var(--blue);
            color: var(--white);
            border-radius: 5px;
        }

        .customer:hover h4{
        
            color: var(--white);
        }

        .info{
            display: flex;
            align-items: center;
        }

        .info img{
            border-radius: 50%;
            margin-right: 1rem;
        }

        .info h4{
            font-size: .8rem;
            font-weight: 700;
            color: #222;
        }

        .info small{
            font-weight: 600;
            color: var(--text-grey);
        }


        .contact span{
            font-size: 1.2rem;
            display: inline-block;
            margin-left: .5rem;
            color: var(--main-color);
        }






        @media (max-width: 991px){

            .navigation{
                left: -300px;
            }


            .navigation.active{
                width: 300px;
                left: 0;
            }

            .main{
                width: 100%;
                left: 0;
            }

            .main.active{
                left: 300px;
            }

            .cardBox{
                grid-template-columns: repeat(2, 1fr);
            }




        }


        @media (max-width: 580px){

            .cardBox{
                grid-template-columns: repeat(1, 1fr);
            }

        .navigation{
            width: 100%;
            left: -100%;
            z-index: 1000;
        }

        .navigation.active{
            width: 100%;
            left: 0;
        }

        .toggle{
            z-index: 10001;
        }

        .main.active .toggle{
            color: var(--white);
            position: fixed;
            right: 0;
            left: initial;
        }

        }

        table.table.table-success {
    
    z-index: 2;
    border-collapse: collapse;
    overflow: hidden;
    width: 926px;
    background: #e9dcdc;
    text-align: center;
    /* border-radius: 12px 12px 0 0; */
    box-shadow: 0 5px 12px rgb(32 32 32 / 30%);
}

th {
background: #d2a0f9;
}
        th,td{
            padding: 10px 12px ;
        }
        tr:nth-child(odd) {
    background-color: #c5abab;
}
</style>

</head>
<body>
   
    <div class="container">
        <div class="navigation">
            <ul>
                <li style="cursor: pointer;">
                    <a href="index.php">
                        <span class="icon"><ion-icon name="logo-amplify"></ion-icon></span>
                        <span class="title">Munshi Shop</span>
                    </a>
                </li>

                <li>
                    <a href="admin.php">
                        <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="comment.php">
                        <span class="icon"> <ion-icon name="chatbubble-ellipses-outline"></ion-icon></span>
                        <span class="title">Comment</span>
                    </a>
                </li>

                <li>
                    <a href="allOrder.php">
                        <span class="icon"><ion-icon name="cart-outline"></ion-icon></span>
                        <span class="title">Order</span>
                    </a>
                </li>

          

                <li>
                    <a href="helpLine.php">
                        <span class="icon"><ion-icon name="help-outline"></ion-icon></span>
                        <span class="title">Help</span>
                    </a>
                </li>

                <li>
                    <a href="index.php">
                        <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                        <span class="title">Munshi Shop</span>
                    </a>
                </li>
            </ul>
        </div>

 <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
               
                </div>



                <!-- <div class="search">
             
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div> -->

                <div class="user">
                    <img src="images/mLogo.webp" alt="">
                </div>
            </div>


          <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="numbers">
                        <?php 
                                       $conn = new mysqli('localhost','root','','munshiShop');
                                       $sql = "SELECT views FROM viewers ";
                                       $result = $conn->query($sql);
           
                                       while ( $data = $result->fetch_assoc()) {
                                               $user_view = $data['views'];   
                                    
                                            
                                           }
                                           echo $user_view;
                            
                            ?>
                        </div>
                        <div class="cardName">Daily Views</div>
                    </div>

                    <div class="iconB">
                        <ion-icon name="eye-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">
                        <?php

                            $conn = new mysqli('localhost','root','','munshiShop');
                            if(!$conn){
                                echo 'not connect';
                            }

                          
                            $count = 0;

                            $sql = "SELECT Product_id, ProductName,	ProductCategory,	ProductCode,	ProductPrice,	Email,	MobileNumber, userAddress,	entryDate FROM mobile ";
                            $result = $conn->query($sql);

                            $sql2 = "SELECT Product_id, ProductName,	ProductCategory,	ProductCode,	ProductPrice,	Email,	MobileNumber, userAddress,	entryDate FROM laptop ";
                            $result2 = $conn->query($sql2);

                            $sql3 = "SELECT Product_id, ProductName,	ProductCategory,	ProductCode,	ProductPrice,	Email,	MobileNumber, userAddress,	entryDate FROM headphone";
                            $result3 = $conn->query($sql3);

                            $sql4 = "SELECT Product_id, ProductName,	ProductCategory,	ProductCode,	ProductPrice,	Email,	MobileNumber, userAddress,	entryDate FROM pizza ";
                            $result4 = $conn->query($sql4);

                            $sql5 = "SELECT Product_id, ProductName,	ProductCategory,	ProductCode,	ProductPrice,	Email,	MobileNumber, userAddress,	entryDate FROM burger";
                            $result5 = $conn->query($sql5);

                            $sql6 = "SELECT Product_id, ProductName,	ProductCategory,	ProductCode,	ProductPrice,	Email,	MobileNumber, userAddress,	entryDate FROM kidsBook ";
                            $result6 = $conn->query($sql6);




                            while ( $data = $result->fetch_assoc()) {
                                    $productId = $data['Product_id'];   
                                    $product_name = $data['ProductName'];
                                    $product_catagory = $data['ProductCategory'];
                                    $product_price = $data['ProductPrice'];
                                    $email = $data['Email'];
                                    $mobile_number = $data['MobileNumber'];
                                    $user_Address = $data['userAddress'];
                                    $product_entry_date = $data['entryDate'];
                                  
                                    $count++;
                                }




                            while ( $data = $result2->fetch_assoc()) {
                            $productId = $data['Product_id'];   
                            $product_name = $data['ProductName'];
                            $product_catagory = $data['ProductCategory'];
                            $product_price = $data['ProductPrice'];
                            $email = $data['Email'];
                            $mobile_number = $data['MobileNumber'];
                            $user_Address = $data['userAddress'];
                            $product_entry_date = $data['entryDate'];

                     
                            $count++;

                            }




                            while ( $data = $result3->fetch_assoc()) {
                            $productId = $data['Product_id'];   
                            $product_name = $data['ProductName'];
                            $product_catagory = $data['ProductCategory'];
                            $product_price = $data['ProductPrice'];
                            $email = $data['Email'];
                            $mobile_number = $data['MobileNumber'];
                            $user_Address = $data['userAddress'];
                            $product_entry_date = $data['entryDate'];

                  
                            $count++;
                            }




                            while ( $data = $result4->fetch_assoc()) {
                            $productId = $data['Product_id'];   
                            $product_name = $data['ProductName'];
                            $product_catagory = $data['ProductCategory'];
                            $product_price = $data['ProductPrice'];
                            $email = $data['Email'];
                            $mobile_number = $data['MobileNumber'];
                            $user_Address = $data['userAddress'];
                            $product_entry_date = $data['entryDate'];
                         
                            $count++;

                            }




                            while ( $data = $result5->fetch_assoc()) {
                            $productId = $data['Product_id'];   
                            $product_name = $data['ProductName'];
                            $product_catagory = $data['ProductCategory'];
                            $product_price = $data['ProductPrice'];
                            $email = $data['Email'];
                            $mobile_number = $data['MobileNumber'];
                            $user_Address = $data['userAddress'];
                            $product_entry_date = $data['entryDate'];

                       
                            $count++;
                            }




                            while ( $data = $result6->fetch_assoc()) {
                            $productId = $data['Product_id'];   
                            $product_name = $data['ProductName'];
                            $product_catagory = $data['ProductCategory'];
                            $product_price = $data['ProductPrice'];
                            $email = $data['Email'];
                            $mobile_number = $data['MobileNumber'];
                            $user_Address = $data['userAddress'];
                            $product_entry_date = $data['entryDate'];
                       
                            $count++;

                            }


                            echo  $count;


                        ?>
                        </div>
                        <div class="cardName">Order</div>
                    </div>

                    <div class="iconB">
                        <ion-icon name="cart-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">
                            <?php 
                                       $conn = new mysqli('localhost','root','','munshiShop');
                                       $sql = "SELECT userName, userEmail,	comment FROM userComment ";
                                       $result = $conn->query($sql);
           
                                       $count = 0;
           
           
                                       while ( $data = $result->fetch_assoc()) {
                                               $user_name = $data['userName'];   
                                               $user_email = $data['userEmail'];
                                               $user_comnt = $data['comment'];
                                             
                                             
                                               $count++;
                                           }
                                           echo $count;
                            
                            ?>
                        </div>
                        <div class="cardName">Comments</div>
                    </div>

                    <div class="iconB">
                        <ion-icon name="chatbubble-ellipses-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">
                          
                            <?php

                                $conn = new mysqli('localhost','root','','munshiShop');
                                if(!$conn){
                                    echo 'not connect';
                                }

                                $sum = 0;
                                $count = 0;

                                $sql = "SELECT Product_id, ProductName,	ProductCategory,	ProductCode,	ProductPrice,	Email,	MobileNumber, userAddress,	entryDate FROM mobile ";
                                $result = $conn->query($sql);

                                $sql2 = "SELECT Product_id, ProductName,	ProductCategory,	ProductCode,	ProductPrice,	Email,	MobileNumber, userAddress,	entryDate FROM laptop ";
                                $result2 = $conn->query($sql2);

                                $sql3 = "SELECT Product_id, ProductName,	ProductCategory,	ProductCode,	ProductPrice,	Email,	MobileNumber, userAddress,	entryDate FROM headphone";
                                $result3 = $conn->query($sql3);

                                $sql4 = "SELECT Product_id, ProductName,	ProductCategory,	ProductCode,	ProductPrice,	Email,	MobileNumber, userAddress,	entryDate FROM pizza ";
                                $result4 = $conn->query($sql4);

                                $sql5 = "SELECT Product_id, ProductName,	ProductCategory,	ProductCode,	ProductPrice,	Email,	MobileNumber, userAddress,	entryDate FROM burger";
                                $result5 = $conn->query($sql5);

                                $sql6 = "SELECT Product_id, ProductName,	ProductCategory,	ProductCode,	ProductPrice,	Email,	MobileNumber, userAddress,	entryDate FROM kidsBook ";
                                $result6 = $conn->query($sql6);

                               


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
                                        $count++;
                                     }
                               



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
                                $count++;

                                }
                             



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
                                $count++;
                                }
                           



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
                                $count++;

                                }
                               



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
                                $count++;
                                }
                             



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
                                $count++;

                                }
                       

                                echo "$". $sum;


                            ?>
                        
                        
                        
                        </div>
                        <div class="cardName">Earning</div>
                    </div>

                    <div class="iconB">
                        <ion-icon name="cash-outline"></ion-icon>
                    </div>
                </div>
            </div>



            <div class="recent-grid">
                <div class="customers">
                    <div class="card-2">
                        <div class="card-header">
                            <h3>New customer</h3>
                         
                        </div>
    
                        <div class="card-body">
                            <?php
                                    $conn = new mysqli('localhost','root','','munshiShop');
                                    $sql6 = "SELECT user_name, phone_number, user_email	 FROM userMshop ";
                                    $result = $conn->query($sql6);
                                  
                                    
                                 
                                      
                                             echo "<table border='1' class = 'table table-success' ;><tr><th>Customer Name</th> <th>Phone Number</th>  <th>Email</th> </tr>";
                                             while ( $data = $result->fetch_assoc()) {
                                                $productId = $data['user_name'];   
                                                $product_name = $data['phone_number'];
                                                $email = $data['user_email'];
                                                
                                                echo "<tr>
                                                        <td>$productId</td> 
                                                        <td>$product_name</td> 
                                                        <td>$email</td>  
                                                       
                                                
                                                    </tr>";
                                             
                                             }
                                             echo "</table>"; 
                                    
                            ?>
                        </div>
                    </div>
                </div>
            </div>







        </div>
   </div>

<script>
            let list = document.querySelectorAll(".navigation li");

        function activeLink(){
            list.forEach(item=>{
                item.classList.remove("hovered");
            });
            this.classList.add("hovered");
        }

        list.forEach(item => item.addEventListener("mouseover", activeLink));

        let toggle = document.querySelector(".toggle");
        let navigation = document.querySelector(".navigation");
        let main = document.querySelector(".main");

        toggle.onclick = function(){
            navigation.classList.toggle("active");
            main.classList.toggle("active");
        };
</script>    



<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>