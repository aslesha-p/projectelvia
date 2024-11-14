<?php
$services = [
    [
        'image' => 'buy.png',
        'alt' => 'Discover the Perfect EV',
        'title' => 'Discover the Perfect EV',
        'description' => 'Explore a wide range of electric vehicles from leading brands, compare their features, specifications, and pricing to find the ideal match for your lifestyle.',
        'link' => '/discover-ev'
    ],
    [
        'image' => 'Smart mobility-pana.png',
        'alt' => 'Navigate Charging with Ease',
        'title' => 'Navigate Charging with Ease',
        'description' => 'Locate charging stations and garages near you, track real-time availability, and access detailed information on charging speeds and compatibility.',
        'link' => '/charging-stations'
    ],
    [
        'image' => 'fina.png',
        'alt' => 'Finance Your Electric Future',
        'title' => 'Finance Your Electric Future',
        'description' => 'Explore a variety of financing options, including NBFCs and banks, to make your dream electric vehicle a reality.',
        'link' => '/financing'
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services - ELVIA</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="min-h-screen bg-cover bg-no-repeat bg-fixed overflow-x-auto" style="background-image: url('/elviabg.jpg')">
        <div class="wrapper min-h-[110vh] bg-[rgba(39,39,39,0.4)]">
            <nav class="nav fixed top-0 flex justify-around w-full h-[100px] leading-[100px] bg-gradient-to-b from-[rgba(39,39,39,0.6)] to-transparent z-[100]">
                <div class="nav-logo">
                    <p class="text-white text-2xl font-semibold">ELVIA .</p>
                </div>
                <div class="nav-menu" id="navMenu">
                    <ul class="flex">
                        <li><a href="index.php" class="link font-medium text-white pb-[15px] mx-[25px] hover:border-b-2 hover:border-white">Home</a></li>
                        <li><a href="about.php" class="link font-medium text-white pb-[15px] mx-[25px] hover:border-b-2 hover:border-white">About</a></li>
                        <li><a href="service.php" class="link active font-medium text-white pb-[15px] mx-[25px] border-b-2 border-white">Services</a></li>
                        <li><a href="contact.php" class="link font-medium text-white pb-[15px] mx-[25px] hover:border-b-2 hover:border-white">Contact Us</a></li>
                    </ul>
                </div>
            </nav>

            <div class="pt-[120px] px-4">
                <h1 class="text-4xl font-bold text-white text-center mb-12">Our Features & Services</h1>
                <div class="row flex flex-col md:flex-row justify-center items-stretch gap-8 max-w-6xl mx-auto">
                    <?php foreach ($services as $service): ?>
                        <div class="box bg-white rounded-lg p-6 flex flex-col items-center text-center flex-1 w-full">
                            <img src="<?php echo htmlspecialchars($service['image']); ?>" 
                                 alt="<?php echo htmlspecialchars($service['alt']); ?>" 
                                 width="250" 
                                 height="250" 
                                 class="mb-4">
                            <h3 class="text-xl font-semibold text-[#054d26] mb-2"><?php echo htmlspecialchars($service['title']); ?></h3>
                            <p class="text-gray-700 mb-6"><?php echo htmlspecialchars($service['description']); ?></p>
                            <a href="<?php echo htmlspecialchars($service['link']); ?>" 
                               class="mt-auto inline-block px-6 py-2 bg-[#054d26] text-white rounded-full hover:bg-[#043d1e] transition-colors duration-300">
                                Click Here
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>