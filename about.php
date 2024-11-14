<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - ELVIA</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        body {
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            overflow: hidden;
        }
        .wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 110vh;
            background: rgba(39, 39, 39, 0.4);
        }
        .nav {
            position: fixed;
            top: 0;
            display: flex;
            justify-content: space-around;
            width: 100%;
            height: 100px;
            line-height: 100px;
            background: linear-gradient(rgba(39,39,39, 0.6), transparent);
            z-index: 100;
        }
        .nav-logo p {
            color: white;
            font-size: 25px;
            font-weight: 600;
        }
        .nav-menu ul {
            display: flex;
        }
        .nav-menu ul li {
            list-style-type: none;
        }
        .nav-menu ul li .link {
            text-decoration: none;
            font-weight: 500;
            color: #fff;
            padding-bottom: 15px;
            margin: 0 25px;
        }
        .link:hover, .active {
            border-bottom: 2px solid #fff;
        }
        .nav-button .btn {
            width: 130px;
            height: 40px;
            font-weight: 500;
            background: rgba(255, 255, 255, 0.4);
            border: none;
            border-radius: 30px;
            cursor: pointer;
            transition: .3s ease;
        }
        .btn:hover {
            background: rgba(255, 255, 255, 0.3);
        }
        #registerBtn {
            margin-left: 15px;
        }
        .btn.white-btn {
            background: rgba(255, 255, 255, 0.7);
        }
        .btn.btn.white-btn:hover {
            background: rgba(255, 255, 255, 0.5);
        }
        .nav-menu-btn {
            display: none;
        }
        .content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 100vh;
            padding: 0 10%;
            color: #fff;
        }
        .text-content {
            width: 60%;
        }
        .image-content {
            width: 40%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .image-content img {
            max-width: 100%;
            max-height: 60%;
            object-fit: contain;
        }
        .points {
            list-style-type: disc;
            padding-left: 20px;
            margin: 20px 0;
        }
        #bttn {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-top: 20px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        #bttn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <nav class="nav">
            <div class="nav-logo">
                <p>ELVIA .</p>
            </div>
            <div class="nav-menu" id="navMenu">
                <ul>
                    <li><a href="index.php" class="link">Home</a></li>
                    <li><a href="about.php" class="link active">About</a></li>
                    <li><a href="service.php" class="link">Services</a></li>
                    <li><a href="contact.php" class="link">Contact Us</a></li>
                </ul>
            </div>
        </nav>
        
        <div class="content">
            <div class="text-content">
                <h1>About Us</h1>
                <p>
                    Elvia is more than just a website; it's your trusted partner in the electric vehicle revolution. <br>
                    We're dedicated to simplifying the EV ownership experience by providing comprehensive solutions tailored to your needs<br>
                </p>
                <ul class="points">
                    <li>Discover the Perfect EV</li>
                    <li>Navigate Charging with Ease</li>
                    <li>Your Electric Future</li>
                </ul>
                <br>
                <br><br>
                <p>
                    At Elvia, we're committed to empowering you to make informed decisions and embrace a sustainable future. Join the electric vehicle movement with Elvia as your guide.
                </p>
                <a href="contact.php" id="bttn">Contact Us Today</a>
            </div>
            <div class="image-content">
                <img src="about us.png" alt="About ELVIA">
            </div>
        </div>
    </div>
</body>
</html>