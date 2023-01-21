

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Registration</title>
    <link rel="icon" href="images/mLogo.webp" type="images/icon">
 

<style>
    body{
    
    background-image: url("images/f.jpeg");
    background-repeat: no-repeat;
    background-size: cover;
    height: 107.5vh;
   
}
audio {
        display: none;
    }

    .container{
        padding: 15px;
        border-radius: 10px;
        max-width: 900px;
        margin: auto;
        position: relative;
        top: 30px;
        box-shadow: 0 4px 8px 0 white;
        transition: 0.1s;
    }

    p, a {
    font-size: 16px;
    color: #000;
    text-decoration: none;
}
 
    h2{
        text-align: center;
        color: white;
        font-size: 30px;
        text-shadow: 2px 2px 4px #fff;
        margin-top: 20px;
    }

    label.form-label {
    color: #fff;
    }
    @media screen and (min-width: 1200px) {
        .container{
            width: 800px;
            transition: 0.1s;
        }
}

@media screen and (min-width: 400px) {
        .container{
            width: 400px;
            transition: 0.1s;
        }
}

@media screen and (min-width: 750px) {
        .container{
            width: 700px;
            transition: 0.1s;
        }
}


</style>


</head>
<body>


    <h2>Registration Form</h2>

    <div class="container">

        <?php 
 
                $conn = new mysqli('localhost','root','','munshiShop');
                if(!$conn){
                   echo 'not connect';
                }

                $empmsgName = $empmsgEmail = $empmsgPass = $conEmpmsgPass=$empmsgPhn = '';
                if ( isset($_POST['submit'])) {
                    $userName = $_POST['userName'];
                    $phone_Number = $_POST['phoneNumber'];
                    $email_s = $_POST['mail'];
                    $pass_word_s = $_POST['pass'];
                    $con_pass_word_s = $_POST['AginPass'];
                 
                  // $md5_user_pass = md5($pass_word_s);
                
                if (empty($userName)) {
                    $empmsgName = 'Fill up this field';
                }

                elseif (empty($phone_Number)) {
                    $empmsgPhn= 'Fill up this field';
                }

                elseif (empty($email_s)) {
                    $empmsgEmail= 'Fill up this field';
                }

                elseif (empty($pass_word_s)) {
                    $empmsgPass = 'Fill up this field';
                }

                elseif (empty($con_pass_word_s)) {
                    $conEmpmsgPass = 'Fill up this field';
                }else {
                    if (!empty($userName)  && !empty($email_s) && !empty($pass_word_s) && !empty($con_pass_word_s) ) {
                   
                  
                        if ($pass_word_s === $con_pass_word_s) {
                         $sql = "INSERT INTO userMshop (user_name,	phone_number	,user_email,	user_password	) VALUES('$userName' , '$phone_Number' , '$email_s','$pass_word_s')";
                      if ($conn->query($sql)== TRUE) {

                        
                       header('location:checkout.php?Account_created_successfully');
                      }else{
                         echo 'not in'.$conn->error;
                      }
                     
                     }else{
                         echo " <p style='color:#fff; font-size: 16px'  >" . 'password not match'. "</p>";
                     
                        }
                     }
                }

          

                }
        ?>

        <form  action="customer_register.php" method="POST">


            <div class="mb-3">
                <label for="username" class="form-label">User-Name</label>          
                <input  type="text" required name="userName" class="form-control" id="username" placeholder="User name" value=" <?php if ( isset($_POST['submit'])) { echo  "$userName" ; } ?>" >          
                <?php
                    if ( isset($_POST['submit'])) {
                    echo  "<p style='color:#fff; font-size: 16px;'  >$empmsgName<p/>" ;

                    }
                ?>
            </div>


            <div class="mb-3">
                <label for="phonenumber" class="form-label">Phone Number</label>          
                <input  type="text" required name="phoneNumber" class="form-control" id="phnnum" placeholder="Phone Number" value=" <?php if ( isset($_POST['submit'])) { echo  "$phone_Number" ; } ?>" >          
        <?php
            if ( isset($_POST['submit'])) {
              echo  "<p style='color:#fff; font-size: 16px;'  >$empmsgName<p/>" ;

            }
        ?>
            </div>

             <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" required name="mail" class="form-control" id="email" placeholder="Example@gmail.com" value=" <?php if ( isset($_POST['submit'])) { echo  "$email_s" ; } ?>">
                <?php
            if ( isset($_POST['submit'])) {
              echo  "<p style='color:#fff; font-size: 16px'  >$empmsgEmail<p/>" ;

            }
        ?>
            </div>

            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Password</label>
                <input type="password" name="pass" required class="form-control" id="formGroupExampleInput2" placeholder="Password">
                <?php
                    if ( isset($_POST['submit'])) {
                    echo  "<p style='color:#fff; font-size: 16px'  >$empmsgPass<p/>" ;

                    }
                 ?>
            </div>


            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Confirm Password</label>
                <input type="password" required name="AginPass" class="form-control" id="formGroupExampleInput2" placeholder="Confirm Password">
                <?php
                    if ( isset($_POST['submit'])) {
                    echo  "<p style='color:#fff; font-size: 16px'  >$conEmpmsgPass<p/>" ;

                    }
                 ?>
            </div>
            <div class="btn_sub text-center">
            <button class="btn btn-secondary btn-lg mb-1" name="submit">submit</button>
            <p>Have an account? <a href="checkout.php">Login</a> </p>
            </div>
       </form>
    </div>
</body>

</html>



