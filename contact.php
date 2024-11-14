<?php
$contactInfo = [
    [
        'icon' => 'fa-solid fa-phone-volume',
        'title' => 'Phone No.',
        'text' => '0-123-456-789'
    ],
    [
        'icon' => 'fa-solid fa-envelope',
        'title' => 'Mail',
        'text' => 'elvia2024@gmail.com'
    ],
    [
        'icon' => 'fa-solid fa-location-dot',
        'title' => 'Address',
        'text' => 'Kothrud, Pune'
    ],
    [
        'icon' => 'fa-solid fa-clock',
        'title' => 'Opening Hours',
        'text' => 'Monday - Friday (9:00 AM to 5:00 PM)'
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - ELVIA</title>
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
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            overflow-x: hidden;
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
            transition: border-bottom 0.3s ease;
        }

        .link:hover, .active {
            border-bottom: 2px solid #fff;
        }

        .contact-bg {
            min-height: 100vh;
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.8)), url(contact-us.png);
            background-position: 50% 100%;
            background-repeat: no-repeat;
            background-attachment: fixed;
            text-align: center;
            color: #fff;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 2rem;
        }

        .contact-bg h3 {
            font-size: 1.3rem;
            font-weight: 400;
            margin-bottom: 0.5rem;
        }

        .contact-bg h2 {
            font-size: 3rem;
            text-transform: uppercase;
            padding: 0.4rem 0;
            letter-spacing: 4px;
            margin-bottom: 1rem;
        }

        .line {
            display: flex;
            align-items: center;
            margin: 1rem 0;
        }

        .line div {
            margin: 0 0.2rem;
        }

        .line div:nth-child(1),
        .line div:nth-child(3) {
            height: 3px;
            width: 70px;
            background: rgb(0, 255, 195);
            border-radius: 5px;
        }

        .line div:nth-child(2) {
            width: 10px;
            height: 10px;
            background: rgb(0, 255, 195);
            border-radius: 50%;
        }

        .text {
            font-weight: 300;
            opacity: 0.9;
        }

        .contact-info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            width: 100%;
            max-width: 1200px;
            margin: 2rem auto;
        }

        .contact-info-item {
            padding: 1.5rem;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            backdrop-filter: blur(5px);
            transition: transform 0.3s ease;
        }

        .contact-info-item:hover {
            transform: translateY(-5px);
        }

        .contact-body {
            max-width: 1350px;
            margin: 0 auto;
            padding: 2rem 1rem;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .contact-form {
            padding: 2rem 0;
        }

        .form-control {
            width: 100%;
            border: 1.5px solid #c7c7c7;
            border-radius: 5px;
            padding: 0.7rem;
            margin: 0.6rem 0;
            font-family: 'Poppins', sans-serif;
            font-size: 1rem;
            outline: 0;
            transition: box-shadow 0.3s ease;
        }

        .form-control:focus {
            box-shadow: 0 0 6px -3px rgba(48, 48, 48, 1);
            border-color: rgb(0, 255, 195);
        }

        .contact-form form div {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 0.6rem;
            margin-bottom: 1rem;
        }

        .send-btn {
            font-family: 'Poppins', sans-serif;
            font-size: 1rem;
            text-transform: uppercase;
            color: #fff;
            background: rgb(0, 255, 195);
            border: none;
            border-radius: 5px;
            padding: 0.7rem 1.5rem;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .send-btn:hover {
            background: rgb(0, 230, 175);
            transform: translateY(-2px);
        }

        .map {
            width: 100%;
            margin-top: 2rem;
            border-radius: 10px;
            overflow: hidden;
        }

        .map iframe {
            width: 100%;
            height: 600px;
            border: none;
        }

        @media screen and (max-width: 768px) {
            .contact-form form div {
                grid-template-columns: 1fr;
            }

            .contact-bg h2 {
                font-size: 2rem;
            }

            .nav {
                padding: 0 1rem;
            }

            .nav-menu ul {
                flex-direction: column;
                position: absolute;
                top: 100px;
                left: 0;
                width: 100%;
                background: rgba(39,39,39, 0.9);
                padding: 1rem 0;
                display: none;
            }

            .nav-menu.active ul {
                display: flex;
            }

            .nav-menu ul li {
                margin: 1rem 0;
            }
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
                    <li><a href="index.php" class="link">Home</a></li>
                    <li><a href="about.php" class="link">About</a></li>
                    <li><a href="service.php" class="link">Services</a></li>
                    <li><a href="contact.php" class="link active">Contact Us</a></li>
                </ul>
            </div>
        </nav>

        <section class="contact-section">
            <div class="contact-bg">
                <h3>Get in Touch with Us</h3>
                <h2>Contact Us</h2>
                <div class="line">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <div class="contact-info-grid">
                    <?php foreach ($contactInfo as $info): ?>
                    <div class="contact-info-item">
                        <span><i class="<?php echo htmlspecialchars($info['icon']); ?>"></i></span>
                        <h4><?php echo htmlspecialchars($info['title']); ?></h4>
                        <p class="text"><?php echo htmlspecialchars($info['text']); ?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="contact-body">
                <div class="contact-form">
                <form method="post" action="process_contact.php">

                        <div>
                            <input type="text" class="form-control" name="name" placeholder="Name" required>
                            <input type="email" class="form-control" name="email" placeholder="E-Mail ID" required>
                        </div>
                        <div>
                            <input type="tel" class="form-control" name="phone" placeholder="Phone No." required>
                        </div>
                        <textarea rows="5" name="message" placeholder="Enter your Query" class="form-control" required></textarea>
                        <input type="submit" class="send-btn" value="Send">
                    </form>
                </div>
            </div>

            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30267.807718964214!2d73.8046595!3d18.5073814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2bfb732af849d%3A0xd4078b48b3fe44f0!2sKothrud%2C%20Pune%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1727621092712!5m2!1sen!2sin" 
                     allowfullscreen="" 
                     loading="lazy" 
                     referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </section>
    </div>
</body>
</html>
