<?php include_once "header.php"; ?>
<body>
    <div class="wrapper">
        <section class="form login">
            <header >Omegle Chat APP</header>
            <form action="#" method="POST" enctype="multipart/form-data"
            autocomplete="off">
            <div class="error-text"></div>
            
            <div class="field input">
                <label >Email Address</label>
                <input type="text" name="email" placeholder="Enter Your Email" required>
            </div>
          
            <div class="field input">
              <label >Password</label>
              <input type="password" name="password" placeholder="Enter Your Password" required>
              <i class="fas fa-eye"></i>

           
            </div> 
                       <div class="field button">
                        <input type="submit" name="submit" value="Continue to Chat" required>
                </div>
                <div class="link"> signed up? <a href="index.php">Signup now</a></div>
        </form>
        </section>
    </div>
    <script type="text/javascript" src="js/pass-show-hide.js"></script>
    <script type="text/javascript" src="js/login.js"></script>
</body>
</html>
