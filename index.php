<?php
$pageTitle = "Elvia";
$navItems = [
    ["elvia.html", "Home", true],
    ["about.php", "About", false],
    ["service.php", "Services", false],
    ["contact.php", "Contact Us", false]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <link href="elvialogo.png" rel="icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');

        * {  
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        body {
            background: url("elviabg.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            overflow: hidden;
        }
        .main {
            width: 100%;
            background: linear-gradient(to top, rgba(0,0,0,0.5)50%, rgba(0,0,0,0.5)50%), url(elviabg.jpg);
            background-position: center;
            background-size: cover;
            height: 109vh;
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
        .content {
            width: 1200px;
            height: auto;
            margin: auto;
            color: #fff;
            position: relative;
        }
        .content .par {
            padding-left: 20px;
            padding-bottom: 25px;
            font-family: Arial, Helvetica, sans-serif;
            letter-spacing: 1.2px;
            line-height: 30px;
        }
        .content h1 {
            font-family: 'Times New Roman', Times, serif;
            font-size: 50px;
            padding-left: 20px;
            margin-top: 9%;
            letter-spacing: 2px;
        }
        .content span {
            color: rgb(0, 255, 195);
            font-size: 60px;
        }
        .content .cn {
            width: 160px;
            height: 40px;
            background: rgb(0, 255, 195);
            border: none;
            margin-bottom: 10px;
            margin-left: 20px;
            font-size: 18px;
            border-radius: 10px;
            cursor: pointer;
            transition: .4s ease;
        }
        .content .cn a {
            text-decoration: none;
            color: #000;
            transition: .4s ease-in;
        }
        .cn:hover {
            background-color: #fff;
        }
    </style>
</head>
<body>
    <div class="main">
        <nav class="nav">
            <div class="nav-logo">
                <p>ELVIA .</p>
            </div>
            <div class="nav-menu" id="navMenu">
                <ul>
                    <?php foreach ($navItems as $item): ?>
                        <li><a href="<?php echo $item[0]; ?>" class="link <?php echo $item[2] ? 'active' : ''; ?>"><?php echo $item[1]; ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </nav>
        <br>
        <br>
        <br>
        <div class="content">
            <h1>Your <br><span>ONE STEP</span><br> EV Station</h1>
            <p class="par">This EV management website is designed to simplify the your EV ownership experience. <br> With us, you can easily locate charging stations, compare different EVs according to your budget<br> and optimize charging routes. <br> This website also integrates with payment systems for a seamless and convenient charging process.<br> </p>
            <button class="cn"><a href="about.php">KNOW MORE</a></button>
        </div>
    </div>
</body>
</html>