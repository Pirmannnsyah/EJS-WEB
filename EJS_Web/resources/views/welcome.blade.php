<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJS</title>
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
            <li><a href="#">Home</a></li>
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
    
    <section class="home">
        <div class="home-text">
            <h5>Kami menyajikan,</h5>
            <h1>Kacang tanah terbaik <br> untuk setiap momen</h1>
            <p>Dengan dedikasi tinggi dan proses yang terstandar, kami menghadirkan <br>
            kacang tanah berkualitas terbaik yang tidak hanya lezat, tetapi juga kaya <br>
             akan nutrisi, cocok untuk menemani setiap momen istimewa Anda</p>
        </div>
    </section>

    <section class="about">
        <div class="about-img">
            <img src="{{ asset('img/bg_ejs5.jpg') }}">
        </div>
        <div class="about-text">
            <h5>About Us</h5>
            <p>CV. Ehko Jaya Sentosa merupakan sebuah perusahaan yang bergerak di bidang impor kacang tanah dengan pengalaman lebih dari 20 tahun. 
                Perusahaan ini secara konsisten mendatangkan kacang tanah berkualitas tinggi dari berbagai negara, termasuk India, Tanzania, Sudan, dan Mozambik. 
                Klik tombol di bawah ini untuk mendapatkan informasi lebih lengkap mengenai kami.</p>
            <a href="about" class="btn">Lihat selangkapnya</a>
        </div>
    </section>

    <div class="selling">
        <div class="sell-left">
            <div class="sell-item">
                <h2>100 Zak</h2>
                <p>Jumlah Penjualan Harian</p>
            </div>
            <div class="sell-item">
                <h2>5000 Zak</h2>
                <p>Jumlah Stok</p>
            </div>
            <div class="sell-item">
                <h2>3 Orang</h2>
                <p>Jumlah Pegawai</p>
            </div>
            <div class="sell-item">
                <h2>2 Bangunan</h2>
                <p>Jumlah Kantor</p>
            </div>
            <div class="sell-item">
                <h2>2004</h2>
                <p>Berdiri Sejak Tahun</p>
            </div>
        </div>
        <div class="wrapper">
            <div class="wrapper-holder">
                <div id="slider-img-1"></div>
                <div id="slider-img-2"></div>
                <div id="slider-img-3"></div>
                <div id="slider-img-4"></div>
                <div id="slider-img-5"></div>
                <div id="slider-img-6"></div>
                <div id="slider-img-7"></div>
                <div id="slider-img-8"></div>
            </div>         
        </div>
    </div>


    <div class="section-title">
        <h2>Our Product</h2>
        <div class="title-line"></div>
    </div>

    <div class="product">
        <div class="product-content">
            <div class="box">
                <img src="{{ asset('img/kc_india1.jpg') }}">
                <h6>Kacang Tanah</h6>
                <h4>India</h4>
            </div>

            <div class="box">
                <img src="{{ asset('img/kc_sudan_real.jpg') }}">
                <h6>Kacang Tanah</h6>
                <h4>Sudan</h4>
            </div>

            <div class="box">
                <img src="{{ asset('img/kc_tanzania_real.png') }}">
                <h6>Kacang Tanah</h6>
                <h4>Tanzania</h4>
            </div>
        </div>
        <div class="center-button">
            <a href="product" class="btn1">Lihat Produk Kami</a>
        </div>
    </div>

    <div class="section-title">
        <div class="title-line"></div>
        <h2>Daily Order</h2>
    </div>

    <section class="artikel-daily">
        <div class="artikel">
            <div class="card">
                <img src="{{ asset('img/dailyorder4.jpg') }}" alt="Kunjungan ke PT. Charoen Pokphand Indonesia" class="card-image">
                <h3 class="card-title">Pengiriman 200zak Kacang Tanah India <br> Lampung</h3>
                <p class="card-date">28 Desember 2024 / BY CV. EJS</p>
            </div>

            <div class="card">
                <img src="{{ asset('img/dailyorder6.jpg') }}" alt="Kunjungan ke PT. Charoen Pokphand Indonesia" class="card-image">
                <h3 class="card-title">Pengiriman 100zak Kacang Tanah Dubai <br> Jambi</h3>
                <p class="card-date">27 Desember 2024 / BY CV. EJS</p>
            </div>

            <div class="card">
                <img src="{{ asset('img/dailyorder5.jpg') }}" alt="Kunjungan ke PT. Charoen Pokphand Indonesia" class="card-image">
                <h3 class="card-title">Pengiriman 200zak Kacang Tanah India <br> Irul Dubes</h3>
                <p class="card-date">27 Desember 2024 / BY CV. EJS</p>
            </div>

            <div class="card">
                <img src="{{ asset('img/dailyorder1.jpg') }}" alt="Kunjungan ke PT. Charoen Pokphand Indonesia" class="card-image">
                <h3 class="card-title">Pengiriman 200zak Kacang Tanah Dubai  <br> Akheng</h3>
                <p class="card-date">27 Desember 2024 / BY CV. EJS</p>
            </div>
        </div>
    </section>

    <div class="import">
        <h1>Import Countries</h1>
        <div class="chartdiv">
        <script src="https://cdn.amcharts.com/lib/4/core.js"></script>
        <script src="https://cdn.amcharts.com/lib/4/maps.js"></script>
        <script src="https://cdn.amcharts.com/lib/4/geodata/worldLow.js"></script>
        <script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>

        <script>
            am4core.ready(function() {

                // Tema animasi
                am4core.useTheme(am4themes_animated);

                // Membuat peta
                var chart = am4core.create("chartdiv", am4maps.MapChart);

                // Menentukan data peta dunia
                chart.geodata = am4geodata_worldLow;

                // Tipe peta
                chart.projection = new am4maps.projections.Miller();

                // Membuat polygon series
                var polygonSeries = chart.series.push(new am4maps.MapPolygonSeries());
                polygonSeries.useGeodata = true;

                // Warna negara berdasarkan data ekspor
                polygonSeries.data = [
                    { id: "SD", name: "Sudan", fill: am4core.color("#FF6B6B") },
                    { id: "IN", name: "India", fill: am4core.color("#2D9C4B") },
                    { id: "TZ", name: "Tanzania", fill: am4core.color("#368AFF") },
                    { id: "MZ", name: "Mozambique", fill: am4core.color("#6A4C93") },
                    { id: "CN", name: "China", fill: am4core.color("#c66831") },
                    { id: "AE", name: "Dubai (United Arab Emirates)", fill: am4core.color("#FFC107") }
                ];

                // Styling Polygon
                polygonSeries.mapPolygons.template.propertyFields.fill = "fill";
                polygonSeries.mapPolygons.template.tooltipText = "{name}";

                // Hover effect
                let hs = polygonSeries.mapPolygons.template.states.create("hover");
                hs.properties.fill = am4core.color("#7B68EE");

                chart.homeZoomLevel = 2;
                chart.homeGeoPoint = {
                latitude: 20,
                longitude: 0
                };

            });
        </script>

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
            <p>Copyright 2024 By Cv. Ehko Jaya Sentosa</p>
        </div>
    </div>
    
 <script src="{{ asset('js/script.js') }}"></script>

</body>
</html>