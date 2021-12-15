<?php
include('connection.php');
$info = '';
if (isset($_REQUEST['contact'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $sql = "INSERT INTO `contact` (`name`,`email`,`subject`,`message`) VALUES ('$name','$email','$subject','$message')";
    $check = mysqli_query($conn,$sql);
    if ($check) {
        $info = '<b class="success">Message sent successfully!</b>';
    } else {
        $info = '<b class="error">An error occurred!</b>';
    }
    
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Cakes' Recipes</title>
    <link href='https://fonts.googleapis.com/css?family=Nova Flat' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <header>
        <nav>
            <a href="index.html" class="logo">
                <img src="img/logo1.png" height="80">
            </a>
            <ul>
                <li>
                    <a href="index.html" class="nav-link">Home</a>
                </li>
                <li class="active">
                    <a href="about.html" class="nav-link">About Us</a>
                </li>
                <li>
                    <a href="contact.php" class="nav-link">Contact Us</a>
                </li>
            </ul>
        </nav>
    </header>
    <main>

        <section class="products-sec">
            <h1 class="title">Contact Us</h1>
            <div class="contact-box">
                <div class="contact-form">
                    <h3 class="center c-title">
                        We would love to hear from you!
                    </h3>
                    <?php echo $info; ?>
                    <form action="" method="post" onsubmit="return validate()">
                        <div class="form-row">
                            <label for="name">Name:</label>
                            <input type="text" id="name" name="name" placeholder="James" class="input">
                        </div>
                        <div class="form-row">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" class="input" placeholder="someone@xyz.com">
                        </div>
                        <div class="form-row">
                            <label for="subject">Subject:</label>
                            <input type="text" id="subject" name="subject" class="input" placeholder="Pricing">
                        </div>
                        <div class="form-row">
                            <label for="message">Message:</label>
                            <textarea id="message" name="message" class="input" rows="10"></textarea>
                        </div>
                        <div class="form-row center">
                            <button class="btn" type="submit" name="contact">
                            Contact
                        </button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <p class="center">&copy; Cakes' Recipes - All rights reserved.</p>
    </footer>
    <script src="js/main.js"></script>
</body>

</html>