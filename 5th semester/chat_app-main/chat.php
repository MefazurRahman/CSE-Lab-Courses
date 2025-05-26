<?php
    session_start();
    include_once "php/config.php";

    // Redirect to login if not logged in
    if (!isset($_SESSION['unique_id'])) {
        header("Location: login.php");
        exit();
    }

    // Check if user_id is provided in GET
    if (isset($_GET['user_id'])) {
        $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);

        $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$user_id}");

        if (mysqli_num_rows($sql) > 0) {
            $row = mysqli_fetch_assoc($sql);
        } else {
            header("Location: users.php");
            exit();
        }
    } else {
        header("Location: users.php");
        exit();
    }
?>

<?php include_once "header.php"; ?>

<body>
    <div class="wrapper">
        <section class="chat-area">
            <header>
                <a href="users.php" class="back-icon">
                    <i class="fas fa-arrow-left"></i>
                </a>
                <img src="php/images/<?php echo htmlspecialchars($row['img']); ?>" alt="">
                <div class="details">
                    <span><?php echo htmlspecialchars($row['fname'] . " " . $row['lname']); ?></span>
                    <p><?php echo htmlspecialchars($row['status']); ?></p>
                </div>
            </header>
            <div class="chat-box">
                <!-- Messages will be loaded here via JavaScript -->
            </div>
            <form action="#" class="typing-area" autocomplete="off">
                <input type="text" class="incoming_id" name="incoming_id" value="<?php echo htmlspecialchars($user_id); ?>" hidden>
                <input type="text" class="input-field" name="message" placeholder="Type a message here...">
                <button><i class="fab fa-telegram-plane"></i></button>
            </form>
        </section>
    </div>

    <script src="js/chat.js"></script>
</body>
</html>
