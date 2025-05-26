<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Omegle Chat APP</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

</head>
<?php include_once "header.php"; ?>
<body>
    <div class="wrapper">
        <section class="form signup">
            <header>Omegle Chat APP</header>
            <form action="#" method="post" enctype="multipart/form-data" autocomplete="off">
                <div class="errortext"> </div>
                <div class="name-details">
                    <div class="field input">
                        <label >First Name</label>
                        <input type="text" name="fname" placeholder="First Name" required>
                    </div>
                    <div class="field input">
                        <label >Last Name</label>
                        <input type="text" name="lname" placeholder="Last Name" required>
                    </div>

                </div>
                <div class="field input">
                        <label>Email</label>
                        <input type="text" name="email" placeholder="Enter your Email" required>
                </div>
                     <div class="field input">
                        <label >Password</label>
                        <input type="password" name="password" placeholder="Enter New Password" required>
                <i class="fas fa-eye"></i>
                
                </div>
                     <div class="field image">
                        <label >Profile Image</label>
                        <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg">
                </div>
                 
                   <div class="field button">
                      <input type="submit" name="submit" value="Continue to Chat" required>
                     
                 
                    </div>
                


            </form>
            <div class="link">
                Already signed up ? <a href="login.php">Login now</a>
            </div>
        </section>
    </div>


<script type="text/javascript" src="js/pass-show-hide.js"></script>
<script type="text/javascript" src="js/signup.js"></script>



</body>

</html>