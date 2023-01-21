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
    <title>Dashboard</title>
    <link rel="icon" href="images/mLogo.webp" type="images/icon">
   
   <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
   <link rel="icon" href="images/mLogo.webp" type="images/icon">
   

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

            table.table.table-success {
    
        z-index: 2;
        border-collapse: collapse;
        overflow: hidden;
        /* width: 960px; */
        background: #e9dcdc;
        text-align: center;
        /* border-radius: 12px 12px 0 0; */
        box-shadow: 0 5px 12px rgb(32 32 32 / 30%);
    }

    th {
    background: #d2a0f9;
    }
            th,td{
                padding: 5px 12px ;
            }
            tr:nth-child(odd) {
        background-color: #c5abab;
    }

    span.btn.btn-danger a {
        text-decoration: none;
        color: #fff;
    }
    span.btn.btn-danger {
        background-color: red;
        padding: 5px;
        border-radius: 5px;
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

                .customers h3 {
            text-align: center;
            padding: 20px;
            font-size: 30px;
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

        .recent-grid1 {
            margin-top: 0.5rem;
            margin-left: 10px;
            margin-right: 10px;
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
</style>

</head>
<body>


<?php 
     $conn = new mysqli('localhost','root','','munshiShop');
     if ( isset($_GET['product_delete_Id'])) {
        $deleteId = $_GET['product_delete_Id'];
       $sqlDlt = "DELETE FROM mobile WHERE product_id = $deleteId";
     
       if(mysqli_query($conn, $sqlDlt)==TRUE){
       
          echo "<script>window.location.href='allOrder.php';</script>";
       }
    
    }

    if ( isset($_GET['product_delete_Id2'])) {
        $deleteId = $_GET['product_delete_Id2'];
       $sqlDlt = "DELETE FROM laptop WHERE product_id = $deleteId";
     
       if(mysqli_query($conn, $sqlDlt)==TRUE){
       
          echo "<script>window.location.href='allOrder.php';</script>";
       }
    
    }

    if ( isset($_GET['product_delete_Id3'])) {
        $deleteId = $_GET['product_delete_Id3'];
       $sqlDlt = "DELETE FROM headphone WHERE product_id = $deleteId";
     
       if(mysqli_query($conn, $sqlDlt)==TRUE){
       
          echo "<script>window.location.href='allOrder.php';</script>";
       }
    
    }

    if ( isset($_GET['product_delete_Id4'])) {
        $deleteId = $_GET['product_delete_Id4'];
       $sqlDlt = "DELETE FROM pizza WHERE product_id = $deleteId";
     
       if(mysqli_query($conn, $sqlDlt)==TRUE){
       
          echo "<script>window.location.href='allOrder.php';</script>";
       }
    
    }

    if ( isset($_GET['product_delete_Id5'])) {
        $deleteId = $_GET['product_delete_Id5'];
       $sqlDlt = "DELETE FROM burger WHERE product_id = $deleteId";
     
       if(mysqli_query($conn, $sqlDlt)==TRUE){
       
          echo "<script>window.location.href='allOrder.php';</script>";
       }
    
    }

    if ( isset($_GET['product_delete_Id6'])) {
        $deleteId = $_GET['product_delete_Id6'];
       $sqlDlt = "DELETE FROM kidsBook WHERE product_id = $deleteId";
     
       if(mysqli_query($conn, $sqlDlt)==TRUE){
       
          echo "<script>window.location.href='allOrder.php';</script>";
       }
    
    }
 
?> 

 
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="index.php">
                        <span class="icon"><ion-icon name="logo-amplify"></ion-icon></span>
                        <span class="title">Munsh Shop</span>
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
                        <span class="icon"><ion-icon name="chatbubbles-outline"></ion-icon></span>
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




                <div class="user">
                    <img src="images/mLogo.webp" alt="">
                </div>
            </div>



            <div class="recent-grid">
                <div class="customers">
                <h3>Orders</h3>
                </div>

            </div>

            <div class="recent-grid1">
                <div class="customers">
                
                    <?php

                            $conn = new mysqli('localhost','root','','munshiShop');
                            if(!$conn){
                                echo 'not connect';
                            }

                         


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
                      
                        
                     
                        echo "<h3 style='text-align:center ; margin-top:15px ;' >Mobile-Phone</h3>";
                        echo "<table border='1' class = 'table table-success' ;><tr><th>Product Name</th> <th>Product Category</th> <th>Product Price($)</th> <th>Email</th> <th>Mobile Number</th> <th>Address </th> <th>Entry Date</th>   <th>Action</th></tr>";
                        while ( $data = $result->fetch_assoc()) {
                        $productId = $data['Product_id'];   
                        $product_name = $data['ProductName'];
                        $product_catagory = $data['ProductCategory'];
                        $product_price = $data['ProductPrice'];
                        $email = $data['Email'];
                        $mobile_number = $data['MobileNumber'];
                        $user_Address = $data['userAddress'];
                        $product_entry_date = $data['entryDate'];
                        
                        echo "<tr>
                                <td>$product_name</td> 
                                <td>$product_catagory</td> 
                                <td>$product_price</td>  
                                <td>$email</td>  
                                <td>0$mobile_number</td>  
                                <td>$user_Address</td>  
                                <td>$product_entry_date</td>
                                <td>
                                
                                    <span class='btn btn-danger'><a href='allOrder.php?product_delete_Id=$productId' >Delete</a></span>
                                </td> 
                        
                            </tr>";
                        
                        }
                        echo "</table>"; 
                        
                     
                     
                         echo "<h3 style='text-align:center ; margin-top:15px ;' >Laptop</h3>";
                         echo "<table border='1' class = 'table table-success' ;><tr><th>Product Name</th> <th>Product Category</th> <th>Product Price($)</th> <th>Email</th> <th>Mobile Number</th> <th>Address </th> <th>Entry Date</th>   <th>Action</th></tr>";
                         while ( $data = $result2->fetch_assoc()) {
                          $productId = $data['Product_id'];   
                          $product_name = $data['ProductName'];
                          $product_catagory = $data['ProductCategory'];
                          $product_price = $data['ProductPrice'];
                          $email = $data['Email'];
                          $mobile_number = $data['MobileNumber'];
                          $user_Address = $data['userAddress'];
                          $product_entry_date = $data['entryDate'];
                          
                    
                          echo "<tr>
                                  <td>$product_name</td> 
                                  <td>$product_catagory</td> 
                                  <td>$product_price</td>  
                                  <td>$email</td>  
                                  <td>0$mobile_number</td>  
                                  <td>$user_Address</td>  
                                  <td>$product_entry_date</td>
                                  <td>
                                 
                                     <span class='btn btn-danger'><a href='allOrder.php?product_delete_Id2=$productId' >Delete</a></span>
                                 </td> 
                          
                                </tr>";
                         
                         }
                         echo "</table>"; 
                       
                     
                   
                         echo "<h3 style='text-align:center ; margin-top:15px ;' >Head-Phone</h3>";
                         echo "<table border='1' class = 'table table-success' ;><tr><th>Product Name</th> <th>Product Category</th> <th>Product Price($)</th> <th>Email</th> <th>Mobile Number</th> <th>Address </th> <th>Entry Date</th>   <th>Action</th></tr>";
                         while ( $data = $result3->fetch_assoc()) {
                          $productId = $data['Product_id'];   
                          $product_name = $data['ProductName'];
                          $product_catagory = $data['ProductCategory'];
                          $product_price = $data['ProductPrice'];
                          $email = $data['Email'];
                          $mobile_number = $data['MobileNumber'];
                          $user_Address = $data['userAddress'];
                          $product_entry_date = $data['entryDate'];
                       
                          echo "<tr>
                                  <td>$product_name</td> 
                                  <td>$product_catagory</td> 
                                  <td>$product_price</td>  
                                  <td>$email</td>  
                                  <td>0$mobile_number</td>  
                                  <td>$user_Address</td>  
                                  <td>$product_entry_date</td>
                                  <td>
                                 
                                     <span class='btn btn-danger'><a href='allOrder.php?product_delete_Id3=$productId' >Delete</a></span>
                                 </td> 
                          
                                </tr>";
                         
                         }
                         echo "</table>"; 
                        
                     
            
                         echo "<h3 style='text-align:center ; margin-top:15px ;' >Pizza</h3>";
                         echo "<table border='1' class = 'table table-success' ;><tr><th>Product Name</th> <th>Product Category</th> <th>Product Price($)</th> <th>Email</th> <th>Mobile Number</th> <th>Address </th> <th>Entry Date</th>   <th>Action</th></tr>";
                         while ( $data = $result4->fetch_assoc()) {
                            $productId = $data['Product_id'];   
                            $product_name = $data['ProductName'];
                            $product_catagory = $data['ProductCategory'];
                            $product_price = $data['ProductPrice'];
                            $email = $data['Email'];
                            $mobile_number = $data['MobileNumber'];
                            $user_Address = $data['userAddress'];
                            $product_entry_date = $data['entryDate'];
                            
                            echo "<tr>
                                    <td>$product_name</td> 
                                    <td>$product_catagory</td> 
                                    <td>$product_price</td>  
                                    <td>$email</td>  
                                    <td>0$mobile_number</td>  
                                    <td>$user_Address</td>  
                                    <td>$product_entry_date</td>
                                    <td>
                                    
                                        <span class='btn btn-danger'><a href='allOrder.php?product_delete_Id4=$productId' >Delete</a></span>
                                    </td> 
                            
                                </tr>";
                         
                         }
                         echo "</table>"; 
                         
                      
                        
                         echo "<h3 style='text-align:center ; margin-top:15px ;' >Burger</h3>";
                         echo "<table border='1' class = 'table table-success' ;><tr><th>Product Name</th> <th>Product Category</th> <th>Product Price($)</th> <th>Email</th> <th>Mobile Number</th> <th>Address </th> <th>Entry Date</th>   <th>Action</th></tr>";
                         while ( $data = $result5->fetch_assoc()) {
                            $productId = $data['Product_id'];   
                            $product_name = $data['ProductName'];
                            $product_catagory = $data['ProductCategory'];
                            $product_price = $data['ProductPrice'];
                            $email = $data['Email'];
                            $mobile_number = $data['MobileNumber'];
                            $user_Address = $data['userAddress'];
                            $product_entry_date = $data['entryDate'];
                            
                            echo "<tr>
                                    <td>$product_name</td> 
                                    <td>$product_catagory</td> 
                                    <td>$product_price</td>  
                                    <td>$email</td>  
                                    <td>0$mobile_number</td>  
                                    <td>$user_Address</td>  
                                    <td>$product_entry_date</td>
                                    <td>
                                    
                                        <span class='btn btn-danger'><a href='allOrder.php?product_delete_Id5=$productId' >Delete</a></span>
                                    </td> 
                            
                                </tr>";
                            
                        }
                            echo "</table>"; 
                            
                        
                        
                         echo "<h3 style='text-align:center ; margin-top:15px ;' >Kids-Book</h3>";
                         echo "<table border='1' class = 'table table-success' ;><tr><th>Product Name</th> <th>Product Category</th> <th>Product Price($)</th> <th>Email</th> <th>Mobile Number</th> <th>Address </th> <th>Entry Date</th>   <th>Action</th></tr>";
                         while ( $data = $result6->fetch_assoc()) {
                            $productId = $data['Product_id'];   
                            $product_name = $data['ProductName'];
                            $product_catagory = $data['ProductCategory'];
                            $product_price = $data['ProductPrice'];
                            $email = $data['Email'];
                            $mobile_number = $data['MobileNumber'];
                            $user_Address = $data['userAddress'];
                            $product_entry_date = $data['entryDate'];
                            
                            echo "<tr>
                                    <td>$product_name</td> 
                                    <td>$product_catagory</td> 
                                    <td>$product_price</td>  
                                    <td>$email</td>  
                                    <td>0$mobile_number</td>  
                                    <td>$user_Address</td>  
                                    <td>$product_entry_date</td>
                                    <td>
                                    
                                        <span class='btn btn-danger'><a href='allOrder.php?product_delete_Id=$productId' >Delete</a></span>
                                    </td> 
                            
                                </tr>";
                         
                         }
                         echo "</table>"; 
                         
                         
                       
                     
                        
                    ?>

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