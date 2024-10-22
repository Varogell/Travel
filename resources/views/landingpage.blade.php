<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Travel Agency Landing Page</title>
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
            <source src="{{ asset('vidio/wisata.mp4') }}" type="video/mp4"> <!-- Ganti 'your-video.mp4' dengan path video kamu -->
            Your browser does not support the video tag.
        </video>
        <div class="header-content">
            <h1>Explore the World with Our Travel Packages</h1>
            <p>Discover the most beautiful places around the globe.</p>
            <a href="#packages" class="btn btn-light">View Packages</a>
        </div>
    </header>

    <section class="container my-7" id="packages">
    
        <div class="row" style="height: 60vh;">
            <!-- Kolom Gambar -->
            <div class="col-6 p-0">
                <img class="img-fluid w-100 h-100" src="{{asset('/image/1.jpg')}}" alt="Pantai" style="object-fit: cover;">
            </div>
        
            <!-- Kolom Keterangan -->
            <div class="col-6 d-flex justify-content-center align-items-center bg-section">
                <div class="text-center ">
                    <h2 class="mb-4">Explore Bromo</h2>
                    <h5>
                        Perjalanan wisata profesional yang berfokus pada penyediaan pengalaman tak terlupakan di kawasan Gunung Bromo dan sekitarnya. 
                        Kami berdedikasi untuk menghadirkan kenyamanan dan petualangan seru bagi wisatawan domestik maupun mancanegara, 
                        dengan berbagai paket wisata yang dirancang khusus untuk memenuhi kebutuhan dan keinginan pelanggan.
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
                                <img src="{{asset('/image/Bali.jpeg')}}" class="card-img-top" alt="Bali Tour">
                                <div class="card-body">
                                    <h5 class="card-title">Bali Beach Tour</h5>
                                    <p class="card-text">Discover the beautiful beaches of Bali in a 5-day tour.</p>
                                    <a href="https://api.whatsapp.com/send/?phone=6282335910784&text&type=phone_number&app_absent=0" class="btn btn-primary">Book Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <img src="{{asset('/image/2.jpg')}}" class="card-img-top" alt="Bromo Tour">
                                <div class="card-body">
                                    <h5 class="card-title">Bromo Sunrise Tour</h5>
                                    <p class="card-text">Experience the breathtaking sunrise view from Mount Bromo.</p>
                                    <a href="https://api.whatsapp.com/send/?phone=6282335910784&text&type=phone_number&app_absent=0" class="btn btn-primary">Book Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <img src="{{asset('/image/Ijen.jpeg')}}" class="card-img-top" alt="Ijen Tour">
                                <div class="card-body">
                                    <h5 class="card-title">Ijen Crater Tour</h5>
                                    <p class="card-text">Join us for an adventurous trip to the Ijen Crater.</p>
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
                                <img src="{{asset('/image/4.jpg')}}" class="card-img-top img-custom" alt="Paris Tour">
                                <div class="card-body">
                                    <h5 class="card-title">Tumpak Sewu Tourism</h5>
                                    <p class="card-text">Experience the charm of Paris with a 3-day city tour.</p>
                                    <a href="https://api.whatsapp.com/send/?phone=6282335910784&text&type=phone_number&app_absent=0" class="btn btn-primary">Book Now</a>
                                </div>
                            </div>                            
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <img src="{{asset('/image/JTP.jpeg')}}" class="card-img-top" alt="Japan Tour">
                                <div class="card-body">
                                    <h5 class="card-title">Malang city tour</h5>
                                    <p class="card-text">Enjoy the cherry blossoms in Japan with a 7-day tour.</p>
                                    <a href="https://api.whatsapp.com/send/?phone=6282335910784&text&type=phone_number&app_absent=0" class="btn btn-primary">Book Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <img src="{{asset('/image/Pantai Malang.jpeg')}}" class="card-img-top" alt="Sydney Tour">
                                <div class="card-body">
                                    <h5 class="card-title">Malang beach tourism</h5>
                                    <p class="card-text">Explore the beauty of Sydney with an exclusive tour of the Opera House.</p>
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
    
    <div class="row ">

    <!-- Icon pertama dan ketiga di samping satu sama lain -->
    <div class="col d-flex align-items-center mb-5 ml-5"> 
        <i class="fas fa-car fa-4x me-3"></i> <!-- Icon pertama -->
        <div class="d-flex flex-column">
            <span>jsgdgaggd</span>
            <span>jsgdgaggd</span>
        </div>
    </div>

    <div class="col d-flex align-items-center mb-5"> 
        <i class="fa-solid fa-money-bill-1-wave fa-4x me-3"></i> <!-- Icon ketiga -->
        <div class="d-flex flex-column">
            <span>jsgdgaggd</span>
            <span>jsgdgaggd</span>
        </div>
    </div>

    <!-- Icon kedua (di bawah icon pertama dan ketiga) -->
    <div class="w-100"></div> <!-- Memastikan icon kedua berada di bawah baris pertama -->

    <div class="col d-flex align-items-center mb-3"> 
        <i class="fa-regular fa-clock fa-4x me-3"></i> <!-- Icon kedua -->
        <div class="d-flex flex-column">
            <span>jsgdgaggd</span>
            <span>jsgdgaggd</span>
        </div>
    </div>

<div class="col d-flex align-items-center mb-3"> 
    <i class="fa-solid fa-user-shield fa-4x me-3"></i> <!-- Icon kedua -->
    <div class="d-flex flex-column">
        <span>jsgdgaggd</span>
        <span>jsgdgaggd</span>
    </div>
</div>

</div>




        
    </section>
    

    <section class="container my-7" id="packages">
        <h2 class="text-center mb-4">Photo Of The Day</h2>
        <div class="swiper">
            <!-- Swiper Wrapper -->
            <div class="swiper-wrapper">
                <!-- Each swiper-slide contains 3 cards -->
                <div class="swiper-slide">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <img src="https://via.placeholder.com/400x200" class="card-img-top" alt="Bali Tour">
                                
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <img src="https://via.placeholder.com/400x200" class="card-img-top" alt="Bromo Tour">
                                
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <img src="https://via.placeholder.com/400x200" class="card-img-top" alt="Ijen Tour">
                                
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Duplicate slides (add more slides as needed) -->
                <div class="swiper-slide">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <img src="https://via.placeholder.com/400x200" class="card-img-top" alt="Paris Tour">
                               
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <img src="https://via.placeholder.com/400x200" class="card-img-top" alt="Japan Tour">
                                
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <img src="https://via.placeholder.com/400x200" class="card-img-top" alt="Sydney Tour">
                                
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
            <div class="col-md-4 mb-3">
                <h5>About Us</h5>
                <p>We are a leading travel agency offering exclusive travel packages to the world's most beautiful destinations.</p>
            </div>
            
            <!-- Quick Links -->
            <div class="col-md-4 mb-3">
                <h5>Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="#home" class="text-white text-decoration-none">Home</a></li>
                    <li><a href="#packages" class="text-white text-decoration-none">Travel Packages</a></li>
                    <li><a href="#services" class="text-white text-decoration-none">Our Services</a></li>
                    <li><a href="#contact" class="text-white text-decoration-none">Contact Us</a></li>
                </ul>
            </div>

            <!-- Social Media Section -->
            <div class="col-md-4 mb-3">
                <h5>Follow Us</h5>
                <div class="d-flex">
                    <a href="#" class="text-white me-3"><i class="fab fa-tiktok fa-2x"></i></a>
                    <a href="#" class="text-white me-3"><i class="fab fa-instagram fa-2x"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Copyright Section -->
    <div class="bg-secondary text-center py-2">
        <p class="mb-0">&copy; 2024 Travel Agency. DREAM JOURNEY.</p>
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