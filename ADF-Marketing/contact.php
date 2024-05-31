<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADF-Marketing</title>
    <link rel="stylesheet" href="styles2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans&display=swap" rel="stylesheet">
</head>
<body>
    <nav class="navbar">
        <div class="navbar_container">
            <a href="index.html" id="navbar_logo">ADF</a>
            <div class="navbar_toggle" id="mobile-menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
            <ul class="navbar_menu">
                <li class="navbar_item">
                    <a href="index.html" class="navbar_links">Home</a>
                </li>
                <li class="navbar_item">
                    <a href="/ADF-Marketing/our.html" class="navbar_links">Our Philosophy</a>
                </li>
                <li class="button">
                    <a href="contact.php" class="navbar_links">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <script src="app.js"></script>
    </body>
</html>


    <div class="container">
        <h2>Contact Us</h2>
        <form action="submit.php" method="POST">
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" required><br>

            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br>

            <label for="phone">Phone Number:</label><br>
            <input type="text" id="phone" name="phone" required><br>

            <label for="message">Message:</label><br>
            <textarea id="message" name="message" rows="4" cols="50" required></textarea><br>

            <input type="submit" value="Send">
        </form>
    </div>
</body>
</html>
