<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TRAVELING</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</head>
<body>

    <!-- Header Section -->
    <header>
    <video autoplay muted loop playsinline>
            <source src="{{ asset('vidio/animasi.mp4') }}" type="video/mp4"> <!-- Ganti 'your-video.mp4' dengan path video kamu -->
            Your browser does not support the video tag.
        </video>
        <div class="header-content">
            <h1>TRAVELING</h1>
            <p>Discover the most beautiful places in Indonesia.</p>
            <a href="#packages" class="btn btn-light">View Packages</a>
        </div>
    </header>

    <section class="container my-7" id="packages">
        <div class="row" style="height: 60vh;">
            <!-- Kolom Gambar -->
            <div class="col-6 p-0">
                <img class="img-fluid" src="{{asset('/image/poster.jpeg')}}" alt="Poster" 
                style="object-fit: cover; width: 600px; height: 400px;">
            </div>
            <!-- Kolom Keterangan -->
            <div class="col-6 d-flex justify-content-center align-items-center bg-section">
                <div class="text-center" style="color: black;">
                    <h2 class="mb-4 title">TRAVELING</h2>
                    <h5 class="description" style="color: black;">
                        Traveling adalah perusahaan atau individu yang menyediakan layanan perjalanan bagi wisatawan. 
                        Agen ini berperan sebagai perantara antara pelanggan dan penyedia layanan perjalanan seperti maskapai, hotel, operator tur, perusahaan transportasi, dan lainnya. 
                        Tujuannya adalah untuk memudahkan wisatawan dalam merencanakan, memesan, dan mengelola perjalanan mereka.
                    </h5>
                </div>
            </div>
        </div>
    </section>
    

    <!-- Services Section -->
    <section class="container my-7" id="packages">
        <h2 class="text-center mb-4">Popular destinations</h2>
        <div class="swiper">
            <!-- Swiper Wrapper -->
            <div class="swiper-wrapper">
                <!-- Each swiper-slide contains 3 cards -->
                <div class="swiper-slide">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <img src="{{asset('/image/b.jpeg')}}" class="card-img-top" alt="Bali Tour">
                                <div class="card-body">
                                    <h5 class="card-title">Bali Beach Tour</h5>
                                    <p style="font-size: 0.9em;">menawarkan pengalaman liburan yang tak terlupakan di pulau Bali, terkenal dengan pantainya yang indah dan budaya yang kaya. Dalam tur ini, pengunjung dapat menjelajahi beberapa pantai terbaik, seperti Kuta, Seminyak, dan Nusa Dua, yang masing-masing memiliki daya tarik unik.</p>
                                    <a href="https://api.whatsapp.com/send/?phone=6282335910784&text&type=phone_number&app_absent=0" class="btn btn-primary">Book Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <img src="{{asset('/image/1.jpg')}}" class="card-img-top" alt="Bromo Tour">
                                <div class="card-body">
                                    <h5 class="card-title">Bromo Sunrise Tour</h5>
                                    <p style="font-size: 0.9em;">Malang City Tour menawarkan kesempatan untuk menjelajahi pesona dan keindahan Kota Malang, Jawa Timur. Dikenal dengan udara sejuk, arsitektur kolonial, dan taman-taman yang indah, tour ini biasanya mencakup kunjungan ke berbagai tempat wisata menarik seperti Alun-Alun Malang, Jatim Park, dan Museum Angkut.</p>
                                    <a href="https://api.whatsapp.com/send/?phone=6282335910784&text&type=phone_number&app_absent=0" class="btn btn-primary">Book Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <img src="{{asset('/image/Ijen.jpeg')}}" class="card-img-top" alt="Ijen Tour">
                                <div class="card-body">
                                    <h5 class="card-title">Ijen Crater Tour</h5>
                                    <p style="font-size: 0.9em;">Trip Kawah Ijen adalah pengalaman yang menakjubkan untuk menjelajahi keindahan alam dan fenomena alam unik di Gunung Ijen, Jawa Timur. Kawah Ijen terkenal dengan danau asamnya yang berwarna hijau kebiruan dan aktivitas vulkanik yang menakjubkan, termasuk fenomena "blue fire" yang mempesona.

                                    </p>
                                    <a href="https://api.whatsapp.com/send/?phone=6282335910784&text&type=phone_number&app_absent=0" class="btn btn-primary">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Duplicate slides (add more slides as needed) -->
                <div class="swiper-slide">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <img src="{{asset('/image/TP.jpeg')}}" class="card-img-top img-custom" alt="Tumpak Sewu">
                                <div class="card-body">
                                    <h5 class="card-title">Tumpak Sewu Tourism</h5>
                                    <p style="font-size: 0.9em;">Tumpak Sewu adalah salah satu air terjun yang terkenal di Jawa Timur, Indonesia, dan sering disebut sebagai "Air Terjun Niagara dari Indonesia." Terletak di dekat Kota Lumajang, air terjun ini memiliki ketinggian sekitar 120 meter dan dikelilingi oleh panorama alam yang menakjubkan..</p>
                                    <a href="https://api.whatsapp.com/send/?phone=6282335910784&text&type=phone_number&app_absent=0" class="btn btn-primary">Book Now</a>
                                </div>
                            </div>                            
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <img src="{{asset('/image/JTP.jpeg')}}" class="card-img-top" alt="Japan Tour">
                                <div class="card-body">
                                    <h5 class="card-title">Malang city tour</h5>
                                    <p style="font-size: 0.9em;">pengalaman petualangan yang menakjubkan di Gunung Bromo, salah satu gunung berapi paling ikonik di Indonesia. Terletak di Taman Nasional Bromo Tengger Semeru, perjalanan ini biasanya dimulai dengan perjalanan malam hari untuk menyaksikan sunrise yang spektakuler dari puncak Penanjakan.</p>
                                    <a href="https://api.whatsapp.com/send/?phone=6282335910784&text&type=phone_number&app_absent=0" class="btn btn-primary">Book Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <img src="{{asset('/image/Pantai Malang.jpeg')}}" class="card-img-top" alt="Sydney Tour">
                                <div class="card-body">
                                    <h5 class="card-title">Malang beach tourism</h5>
                                    <p style="font-size: 0.9em;">Malang Beach Tourism menawarkan pengalaman menarik di sepanjang pesisir selatan Jawa Timur, dengan berbagai pantai yang memukau dan suasana yang menenangkan. Beberapa pantai terkenal di area ini termasuk Pantai Balekambang, yang dikenal dengan keindahan pasir putih dan pura di tengah laut, serta Pantai Ngliyep yang dikelilingi tebing hijau.</p>
                                    <a href="https://api.whatsapp.com/send/?phone=6282335910784&text&type=phone_number&app_absent=0" class="btn btn-primary">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 <!-- Navigation buttons -->
            <div class="swiper-button-prev "></div>
            <div class="swiper-button-next "></div>
            </div>
            
</section>

    <section class="container my-7" id="packages">
        <h2 class="text-center mb-4">Our Services</h2>
    <div class="row ">

    <!-- Icon pertama dan ketiga di samping satu sama lain -->
    </style>
    <div class="col d-flex align-items-center mb-5 ml-5"> 
        <i class="fas fa-car fa-4x me-3"></i> <!-- Icon pertama -->
        <div class="d-flex flex-column">
            <span><b>Jasa Antar jemput</b></span>
            <span>Tak perlu risau jika tidak ada kendaraan menuju basecamp, 
                kami siap untuk menjemput dan mengantarkan anda dimanapun berada.</span>
        </div>
    </div>

    <div class="col d-flex align-items-center mb-5"> 
        <i class="fa-solid fa-money-bill-1-wave fa-4x me-3"></i> <!-- Icon ketiga -->
        <div class="d-flex flex-column">
            <span><b>Customer Support 24 Jam</b></span>
            <span>Prinsip Kami Melayani Anda dengan Sepenuh Hati serta memberikan Kemudahan dan selalu siap Siaga selama 24 Jam</span>
        </div>
    </div>

    <!-- Icon kedua (di bawah icon pertama dan ketiga) -->
    <div class="w-100"></div> <!-- Memastikan icon kedua berada di bawah baris pertama -->

    <div class="col d-flex align-items-center mb-3"> 
        <i class="fa-regular fa-clock fa-4x me-3"></i> <!-- Icon kedua -->
        <div class="d-flex flex-column">
            <span><b>Harga Terjangkau</b></span>
            <span>Harga yang kami tawarkan sesuai dengan pelayanan dan fasilitas yang kami berikan untuk Anda. 
            Pastinya yang terbaik.</span>
        </div>
    </div>

<div class="col d-flex align-items-center mb-3"> 
    <i class="fa-solid fa-user-shield fa-4x me-3"></i> <!-- Icon kedua -->
    <div class="d-flex flex-column">

        <span><b>Asuransi</b></span>
        <span>Jaminan perjalanan yang aman dan nyaman dengan asuransi dari Zurich Indonesia.</span>
    </div>
</div>

</div>




        
    </section>
    

    <section class="container my-7" id="packages">
        <h2 class="text-center mb-4">Documentasion</h2>
        <div class="swiper">
            <!-- Swiper Wrapper -->
            <div class="swiper-wrapper">
                <!-- Each swiper-slide contains 3 cards -->
                <div class="swiper-slide">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <img class="img-fluid" src="{{asset('/image/Pantai Malang.jpeg')}}" alt="Pantai" 
                                style="object-fit: cover; width: 400px; height: 200px;">
                                
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <img class="img-fluid" src="{{asset('/image/TP.jpeg')}}" alt="Tumpak Sewu" 
                                style="object-fit: cover; width: 400px; height: 200px;">
                                
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <img class="img-fluid" src="{{asset('/image/1.jpg')}}" alt="Bromo" 
                                style="object-fit: cover; width: 400px; height: 200px;">
                                
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Duplicate slides (add more slides as needed) -->
                <div class="swiper-slide">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <img class="img-fluid" src="{{asset('/image/KI.jpeg')}}" alt="Kawah Ijen" 
                                style="object-fit: cover; width: 400px; height: 200px;">
                               
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <img class="img-fluid" src="{{asset('/image/JTP.jpeg')}}" alt="Jatim Park" 
                                style="object-fit: cover; width: 400px; height: 200px;">
                                
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <img class="img-fluid" src="{{asset('/image/b.jpeg')}}" alt="Kawah Ijen" 
                                style="object-fit: cover; width: 400px; height: 200px;">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            <div class="swiper-pagination "></div>

            <!-- Navigation buttons -->
            <div class="swiper-button-prev d-none d-md-block"></div>
            <div class="swiper-button-next d-none d-md-block"></div>
        </div>
    </section>
    


<!-- Footer Section -->
<footer class="bg-black text-white w-100"> 
    <div class="container">
        <div class="row">
            <!-- About Section -->
            <div class="col-md-4 mb-2">
                <h5>About Us</h5>
                <p style="font-size: 0.9em;">Traveling adalah perusahaan atau individu yang menyediakan layanan perjalanan bagi wisatawan. Agen ini berperan sebagai perantara antara pelanggan dan penyedia layanan perjalanan seperti maskapai, hotel, operator tur, perusahaan transportasi, dan lainnya. 
                    Tujuannya adalah untuk memudahkan wisatawan dalam merencanakan, memesan, dan mengelola perjalanan mereka.</p>
            </div>
            
            <!-- Contacs -->
            <div class="col-md-4 mb-3">
                <h5>Contact</h5>
                <div>
                    <i class="fas fa-map-marker-alt"></i>
                    <p style="font-size: 0.9em;">Jl. Ikan Kakap Gang 1A, Tunjungsekar, Lowokwaru, Kota Malang.</p>
                </div>
                <div>
                    <i class="fas fa-phone-alt"></i>
                    <p style="font-size: 0.9em;">0813-5712-4366</p>
                </div>
                <div>
                    <i class="fab fa-whatsapp"></i>
                    <p style="font-size: 0.9em;">0813-5712-4366</p>
                </div>
            </div>
            

            <!-- Social Media Section -->
            <div class="col-md-4 mb-3">
                <h5>Follow Us</h5>
                <div class="d-flex">
                    <a href="#" class="text-black me-3"><i class="fab fa-tiktok fa-2x"></i></a>
                    <a href="#" class="text-black me-3"><i class="fab fa-instagram fa-2x"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Copyright Section -->
    <div class="bg-secondary text-center py-2">
        <p class="mb-0">&copy; 2024 Travel Agency. TRAVELING.</p>
    </div>
</footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper', {
            slidesPerView: 1, // Each slide shows 1 row (with 3 cards)
            spaceBetween: 30, // Space between slides
            autoplay: {
                delay: 2500, // Delay between slides
                disableOnInteraction: false,
            },
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>

</body>
</html>