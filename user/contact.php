<?php
    include 'components/connection.php';
    session_start();
    if(isset($_SESSION['user_id'])){
        $user_id = $_SESSION['user_id'];
    }else{
        $user_id = '';
    }
    if(isset($_POST['logout']))
    {
        session_destroy();
        header("location: login.php");
    }
?>
<style type="text/css">

<?php include 'style.css'; ?>

</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Document</title>
</head>
<body>
    <?php include 'components/header.php'; ?>
    <div class="main">
        <section class="banner2">
            <img src="img/banner8.png" alt="" class="main-banner">
        </section>
        <section>
            <h1 class="heading">Contact Us</h1>
            <div class="form-container">
                <form id="contactForm" action="your_php_script.php" method="POST">
                    <div class="title">
                        <h1>Leave a message</h1>
                    </div>
                    <div class="input-field">
                        <p>Your name <sup class="sup">*</sup></p>
                        <input type="text" name="name" required>
                    </div>
                    <div class="input-field">
                        <p>Your email <sup class="sup">*</sup></p>
                        <input type="email" name="email" required>
                    </div>
                    <div class="input-field">
                        <p>Your number <sup class="sup">*</sup></p>
                        <input type="number" name="number" required>
                    </div>
                    <div class="input-field">
                        <p>Your message <sup class="sup">*</sup></p>
                        <textarea name="message" required></textarea>
                    </div>
                    <button type="submit" name="submit-btn" class="btn">
                        Send message
                    </button>
                </form>
            </div>
            <section class="banner2">
                <img src="img/details.png" alt="" class="main-banner">
            </section>
        </section>

        <?php include 'components/footer.php'; ?>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="script.js"></script>
    <?php include 'components/alert.php'; ?>

    <script>
        document.getElementById('contactForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent the default form submission

            // Display the SweetAlert popup
            swal({
                title: "Message Sent!",
                text: "Your message has been sent successfully.",
                icon: "success",
                button: "OK",
            }).then(function() {
                // Reset the form fields
                // document.getElementById('contactForm').reset();
                
                // Optionally, you can redirect to another page
                window.location.href = "contact.php"; // Replace with your target URL
            });
        });
    </script>
</body>
</html>

