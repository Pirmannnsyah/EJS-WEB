<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About EJS</title>
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

    <section class="home-about">
        <div class="about-text1">
            <h5>ABOUT US</h5>
        </div>
    </section>

    <section class="ejs">
        <img src="{{ asset('img/ejs_logo.png') }}" alt="">
        <h1>Tentang Kami</h1>
        <p>CV. Ehko Jaya Sentosa, atau lebih dikenal dengan EJS, adalah perusahaan yang bergerak di bidang impor kacang tanah dan telah beroperasi selama lebih dari 20 tahun sejak generasi pertama. Dengan pengalaman yang panjang dan keahlian yang mendalam, EJS secara konsisten menyediakan kacang tanah berkualitas tinggi yang diimpor dari berbagai negara, seperti India, Tanzania, Sudan, dan Mozambik. Komitmen kami adalah menghadirkan produk terbaik untuk memenuhi kebutuhan pasar lokal dan global. </p>
        <h2>Motto EJS</h2>
        <h3>" The better it gets, the better it gets "</h3>
    </section>

    <section class="sejarah-visi-misi">
        <div class="visi-misi">
            <div class="visi">
                <h1>VISI</h1>
                <p>Menjadi penyedia/pemasok pangan impor, khususnya kacang tanah, yang terpercaya, berkualitas baik, dengan harga bersaing dan terjangkau bagi masyarakat</p>
            </div>
            <div class="misi">
                <h1>MISI</h1>
                <p>1. Menjadi importir yang taat pajak dan teladan bagi importir lainnya. <br>
                <br>2. Membangun bisnis yang berkesinambungan, menciptakan sumber daya manusia (SDM) yang handal dan berkualitas unggul, serta menciptakan lapangan kerja bagi buruh. <br>
                <br>3. Menjadi importir yang memiliki jaringan bisnis yang baik di India, Afrika, dan China.
                </p>
            </div>
            
        </div>
    </section>

    <div class="staff">
    <div class="staff-judul">Our Team</div>
    <div class="staff-content">
        <div class="staff-item">
            <img src="{{ asset('img/ehko.jpg') }}" alt="Ehko Hartanto">
            <div class="staff-desc">
                <h4>Ehko Hartanto</h4>
                <h5>CEO, Founder</h5>
                <p>Bertanggung jawab dalam merumuskan visi dan misi perusahaan, mengembangkan strategi bisnis yang komprehensif, dan memimpin tim yang dinamis.</p>
            </div>
        </div>
        <div class="staff-item">
            <img src="{{ asset('img/tedy.jpg') }}" alt="Teddy Gunawan">
            <div class="staff-desc">
                <h4>Teddy Gunawan</h4>
                <h5>Operational Staff</h5>
                <p>Bertanggung jawab dalam pengadaan kacang tanah, pengelolaan logistik, pengendalian kualitas, dan pengelolaan inventaris.</p>
            </div>
        </div>
        <div class="staff-item">
            <img src="{{ asset('img/adit.jpg') }}" alt="Aditya Alfons">
            <div class="staff-desc">
                <h4>Aditya Alfons</h4>
                <h5>Accounting Staff</h5>
                <p>Bertanggung jawab dalam melakukan tugas-tugas seperti pembuatan laporan keuangan, pengelolaan kas, perhitungan pajak, dan analisis keuangan.</p>
            </div>
        </div>
        <div class="staff-item">
            <img src="{{ asset('img/firman.jpg') }}" alt="Muhammad Firmansyah">
            <div class="staff-desc">
                <h4>Muhammad Firmansyah</h4>
                <h5>Relationship Staff</h5>
                <p>Bertanggung jawab dalam memberikan pelayanan terbaik kepada pelanggan, serta menjalin kerjasama yang baik dengan pemasok untuk memastikan pasokan yang stabil.</p>
            </div>
        </div>
    </div>
</div>

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