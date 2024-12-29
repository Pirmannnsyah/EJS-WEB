<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <a href="#" class="logo">CV. Ehko Jaya Sentosa</a>
        
        <ul class="navbar">
            <li><a href="home">Home</a></li>
            <li><a href="about">About Us</a></li>
            <li><a href="product">Our Product</a></li>
            <li><a href="contact">Contact Us</a></li>
        </ul>

        <div class="h-right">
            <a href="#">Follow Us</a>
            <a href="#"><i class="ri-instagram-fill"></i></a>
            <a href="#"><i class="ri-facebook-box-fill"></i></a>
            <div class="bx bx-menu" id="menu-icon"></div>
        </div>
    </header> 

    <section class="home-product">
        <div class="product-text1">
            <h5>OUR PRODUCT</h5>
        </div>
    </section>
    
    <section class="ejs-product">
        <img src="{{ asset('img/kc_india1.jpg') }}" alt="">
        <h1>Kacang Tanah Putih India </h1>
        <p>Kacang India memiliki rasa yang earthy dengan sedikit gurih, memberikan cita rasa lembut yang sangat cocok untuk diolah menjadi kari, chutney, atau campuran makanan ringan. Sebagai salah satu produsen kacang tanah terbesar di dunia, kacang India dikenal memiliki ukuran sedang, kulit tipis, dan kandungan protein yang tinggi, menjadikannya pilihan populer untuk konsumsi sehat. Proses pengolahannya sering melibatkan bumbu-bumbu khas yang semakin menonjolkan cita rasa autentiknya</p>
        <h3>Rp. 19.500 - Rp. 22-000 / Desember 2024</h3>
    </section>

    <section class="ejs-product">
        <img src="{{ asset('img/kc_sudan_real.jpg') }}" alt="">
        <h1>Kacang Tanah Sudan</h1>
        <p>Kacang Sudan memiliki rasa yang gurih, sedikit manis, dan kaya akan cita rasa alami, yang semakin intens setelah dipanggang, menjadikannya cocok sebagai camilan atau bahan dasar selai kacang. Dengan ukuran yang besar, tekstur renyah, dan kandungan minyak yang seimbang, kacang ini sering dianggap berkualitas tinggi karena proses budidayanya yang alami dan kaya nutrisi, sehingga ideal untuk diolah menjadi berbagai produk makanan seperti kacang panggang atau olahan lainnya</p>
        <h3>Rp. 20.500 - Rp. 22-500 / Desember 2024</h3>
    </section>

    <section class="ejs-product">
        <img src="{{ asset('img/kc_tanzania_real.jpg') }}" alt="">
        <h1>Kacang Tanah Tanzania</h1>
        <p>Kacang Tanzania memiliki rasa yang kaya, sedikit manis, dan creamy, dengan cita rasa yang semakin kuat dan menyenangkan saat dipanggang, menjadikannya favorit untuk makanan ringan berkualitas tinggi. Sebagai salah satu produsen kacang tanah unggulan, Tanzania dikenal menghasilkan kacang berukuran sedang hingga besar dengan kualitas ekspor yang tinggi. Kandungan minyaknya yang cukup tinggi membuat kacang ini ideal untuk pembuatan minyak kacang, sementara teksturnya yang lembut namun tetap renyah menjadikannya pilihan premium di pasar internasional.</p>
        <h3>Rp. 19.500 - Rp. 21.500 / Desember 2024</h3>
    </section>

    <section class="ejs-product">
        <img src="{{ asset('img/kc_dubai_real.jpg') }}" alt="">
        <h1>Kacang Tanah Coklat Dubai</h1>
        <p>Kacang Sudan memiliki rasa yang gurih, sedikit manis, dan kaya akan cita rasa alami, yang semakin intens setelah dipanggang, menjadikannya cocok sebagai camilan atau bahan dasar selai kacang. Dengan ukuran yang besar, tekstur renyah, dan kandungan minyak yang seimbang, kacang ini sering dianggap berkualitas tinggi karena proses budidayanya yang alami dan kaya nutrisi, sehingga ideal untuk diolah menjadi berbagai produk makanan seperti kacang panggang atau olahan lainnya</p>
        <h3>Rp. 18.500 - Rp. 21-000 / Desember 2024</h3>
    </section>

    <div class="footer">
        <div class="footer-box">
            <h3>Services</h3>
            <a href="#">Email Marketing</a>
            <a href="#">Campaigns</a>
            <a href="#">Brandings</a>
            <a href="#">Offline</a>
        </div>

        <div class="footer-box">
            <h3>About</h3>
            <a href="#">Our Story</a>
            <a href="#">Benefits</a>
            <a href="#">Team</a>
            <a href="#">Careers</a>
        </div>

        <div class="footer-box">
            <h3>Help</h3>
            <a href="#">FAQs</a>
            <a href="#">Contact Us</a>
        </div>

        <div class="footer-box">
            <h3>Social</h3>
            <div class="social">
            <a href="#"><i class="ri-instagram-fill"></i></a>
            <a href="#"><i class="ri-facebook-box-fill"></i></a>
            </div>
            
        </div>
    </div>
    
    <div class="container">
        <div class="copyright">
            <p>Copyright 2024 By CV. Ehko Jaya Sentosa</p>
        </div>
    </div>


    <script src="{{ asset('js/script.js') }}"></script>

    
</body>
</html>