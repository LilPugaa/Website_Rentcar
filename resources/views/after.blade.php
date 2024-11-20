<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css"
      rel="stylesheet"/>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
    <title>All Stars Rentcar</title>
  </head>
  <body>
  <header>
  <nav>
  <div class="nav__header">
    <div class="nav__logo">
      <a href="#">ALL STARS RENTCAR</a>
    </div>
    <div class="nav__menu__btn" id="menu-btn">
      <i class="ri-menu-line"></i>
    </div>
  </div>
  <ul class="nav__links" id="nav-links">
    <li><a href="#home">Home</a></li>
    <li><a href="#service">Service</a></li>
    <li><a href="#rent">Rent</a></li>
    <li><a href="#rent">Contact</a></li>
    
  </ul>
  <div class="nav__btn">
  <form method="POST" action="{{ route('logout') }}" style="display: inline;">
    @csrf
    <button class="btn" id="get-started" type="submit">
      {{ Auth::user()->name }} (Logout)
    </button>
  </form>
</div>




    <!-- <div class="user-profile">
      <img src="{{ asset('img/assets/user-logo.png') }}" alt="User Logo" class="user-logo" />
      <span class="username">Sudana Wijaya</span>
    </div> -->
  </div>
</nav>
  <div class="header__container" id="home">
    <h1>PREMIUM CAR RENTAL</h1>
    <!-- <form action="/">
      <div class="input__group">
        <label for="location">Pick up & Return location</label>
        <input type="text" name="location" id="location" placeholder="Dallas, Texas" />
      </div>
      <div class="input__group">
        <label for="start">Start</label>
        <input type="text" name="start" id="start" placeholder="Aug 16, 10:00 AM" />
      </div>
      <div class="input__group">
        <label for="stop">Stop</label>
        <input type="text" name="stop" id="stop" placeholder="Aug 18, 10:00 PM" />
      </div>
      <button class="btn">
        <i class="ri-search-line"></i>
      </button>
    </form> -->
    <img src="{{ asset('img/assets/awal.png') }}" alt="header" />
  </div>
  <a href="#about" class="scroll__down">
    <i class="ri-arrow-down-line"></i>
  </a>
</header>



    <!-- <section class="section__container range__container" id="about">
      <h2 class="section__header">WIDE RANGE OF VEHICLES</h2>
      <div class="range__grid">
        <div class="range__card">
          <img src="assets/range-1.jpg" alt="range" />
          <div class="range__details">
            <h4>CARS</h4>
            <a href="#"><i class="ri-arrow-right-line"></i></a>
          </div>
        </div>
        <div class="range__card">
          <img src="assets/range-2.jpg" alt="range" />
          <div class="range__details">
            <h4>SUVS</h4>
            <a href="#"><i class="ri-arrow-right-line"></i></a>
          </div>
        </div>
        <div class="range__card">
          <img src="assets/range-3.jpg" alt="range" />
          <div class="range__details">
            <h4>VANS</h4>
            <a href="#"><i class="ri-arrow-right-line"></i></a>
          </div>
        </div>
        <div class="range__card">
          <img src="assets/range-4.jpg" alt="range" />
          <div class="range__details">
            <h4>ELECTRIC</h4>
            <a href="#"><i class="ri-arrow-right-line"></i></a>
          </div>
        </div>
      </div>
    </section> -->
    <section class="section__container service__container" id="service">
      <div class="service__image">
        <img src="{{ asset('img/assets/Carblue.webp') }}" alt="service" />
      </div>
      <div class="service__content">
        <p class="section__subheader">BEST SERVICES</p>
        <h2 class="section__header">
          Feel the best experience with our rental deals
        </h2>
        <ul class="service__list">
          <li>
            <span><i class="ri-price-tag-3-fill"></i></span>
            <div>
              <h4>Deals for every budget</h4>
              <p>
                From economy cars to luxury vehicles, we have something for
                everyone, ensuring you get the best value for your money.
              </p>
            </div>
          </li>
          <li>
            <span><i class="ri-wallet-fill"></i></span>
            <div>
              <h4>Best price guarantee</h4>
              <p>
                We ensure you get competitive rates in the market, so you can
                book with confidence knowing you're getting the best deal.
              </p>
            </div>
          </li>
          <li>
            <span><i class="ri-customer-service-fill"></i></span>
            <div>
              <h4>Support 24/7</h4>
              <p>
                Our dedicated team is available 24/7 to assist you with any
                questions or concerns, ensuring a smooth rental experience.
              </p>
            </div>
          </li>
        </ul>
      </div>
    </section>

    

    <!-- <section class="section__container location__container" id="rent">
      <div class="location__image">
        <img src="assets/location.png" alt="location" />
      </div>
      <div class="location__content">
        <h2 class="section__header">FIND CAR IN YOUR LOCATIONS</h2>
        <p>
          Discover the perfect vehicle tailored to your needs, wherever you are.
          Our 'Find Car in Your Locations' feature allows you to effortlessly
          search and select from our premium fleet available near you. Whether
          you're looking for a luxury sedan, a spacious SUV, or a sporty
          convertible, our easy-to-use tool ensures you find the ideal car for
          your journey. Simply enter your location, and let us connect you with
          top-tier vehicles ready for rental.
        </p>
        <div class="location__btn">
          <button class="btn">Find a Location</button>
        </div>
      </div>
    </section> -->

    <section class="select__container" id="rent">
      <h2 class="section__header">PICK YOUR DREAM CAR TODAY</h2>
      <!-- Slider main container -->
      <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <div class="swiper-slide">
            <div class="select__card">
              <img src="{{ asset('img/assets/select-9.png') }}" alt="select" />
              <div class="select__info">
                <div class="select__info__card">
                  <span><i class="ri-speed-up-line"></i></span>
                  <h4>200 <span>km/h</span></h4>
                </div>
                <div class="select__info__card">
                  <span><i class="ri-settings-5-line"></i></span>
                  <h4>6 <span>speed</span></h4>
                </div>
                <div class="select__info__card">
                  <span><i class="ri-roadster-line"></i></span>
                  <h4>5 <span>seats</span></h4>
                </div>
                <div class="select__info__card">
                  <span><i class="ri-signpost-line"></i></span>
                  <h4>15 <span>milage</span></h4>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="select__card">
              <img src="{{ asset('img/assets/select-2.png') }}" alt="select" />
              <div class="select__info">
                <div class="select__info__card">
                  <span><i class="ri-speed-up-line"></i></span>
                  <h4>215 <span>km/h</span></h4>
                </div>
                <div class="select__info__card">
                  <span><i class="ri-settings-5-line"></i></span>
                  <h4>6 <span>speed</span></h4>
                </div>
                <div class="select__info__card">
                  <span><i class="ri-roadster-line"></i></span>
                  <h4>5 <span>seats</span></h4>
                </div>
                <div class="select__info__card">
                  <span><i class="ri-signpost-line"></i></span>
                  <h4>16 <span>milage</span></h4>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="select__card">
              <img src="{{ asset('img/assets/select-6.png') }}" alt="select" />
              <div class="select__info">
                <div class="select__info__card">
                  <span><i class="ri-speed-up-line"></i></span>
                  <h4>306 <span>km/h</span></h4>
                </div>
                <div class="select__info__card">
                  <span><i class="ri-settings-5-line"></i></span>
                  <h4>6 <span>speed</span></h4>
                </div>
                <div class="select__info__card">
                  <span><i class="ri-roadster-line"></i></span>
                  <h4>5 <span>seats</span></h4>
                </div>
                <div class="select__info__card">
                  <span><i class="ri-signpost-line"></i></span>
                  <h4>12 <span>milage</span></h4>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="select__card">
              <img src="{{ asset('img/assets/select-4.png') }}" alt="select" />
              <div class="select__info">
                <div class="select__info__card">
                  <span><i class="ri-speed-up-line"></i></span>
                  <h4>350 <span>km/h</span></h4>
                </div>
                <div class="select__info__card">
                  <span><i class="ri-settings-5-line"></i></span>
                  <h4>6 <span>speed</span></h4>
                </div>
                <div class="select__info__card">
                  <span><i class="ri-roadster-line"></i></span>
                  <h4>2 <span>seats</span></h4>
                </div>
                <div class="select__info__card">
                  <span><i class="ri-signpost-line"></i></span>
                  <h4>08 <span>milage</span></h4>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="select__card">
              <img src="{{ asset('img/assets/awal.png') }}" alt="select" />
              <div class="select__info">
                <div class="select__info__card">
                  <span><i class="ri-speed-up-line"></i></span>
                  <h4>254 <span>km/h</span></h4>
                </div>
                <div class="select__info__card">
                  <span><i class="ri-settings-5-line"></i></span>
                  <h4>6 <span>speed</span></h4>
                </div>
                <div class="select__info__card">
                  <span><i class="ri-roadster-line"></i></span>
                  <h4>5 <span>seats</span></h4>
                </div>
                <div class="select__info__card">
                  <span><i class="ri-signpost-line"></i></span>
                  <h4>10 <span>milage</span></h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <form action="/" class="select__form">
        <div class="select__price">
          <span><i class="ri-price-tag-3-line"></i></span>
          <div><span id="select-price">225</span> /day</div>
        </div>
        <div class="select__btns">
          <!-- <button class="btn">View Details</button> -->
          <a href=""class="btn">Rent Now</a>
        </div>

        </div>
      </form>
    </section>

    <section class="section__container experience__container" id="Experience">
      <p class="section__subheader">CUSTOMER EXPERIENCE</p>
      <h2 class="section__header">
        We are ensuring the best customer experience
      </h2>
      <div class="experience__content">
        <div class="experience__card">
          <span><i class="ri-price-tag-3-fill"></i></span>
          <h4>Competitive pricing</h4>
        </div>
        <div class="experience__card">
          <span><i class="ri-money-rupee-circle-fill"></i></span>
          <h4>Easier Rent On Your Budget</h4>
        </div>
        <div class="experience__card">
          <span><i class="ri-bank-card-fill"></i></span>
          <h4>Most Felxible Payment Plans</h4>
        </div>
        <div class="experience__card">
          <span><i class="ri-award-fill"></i></span>
          <h4>The Best Extended Auto Warranties</h4>
        </div>
        <div class="experience__card">
          <span><i class="ri-customer-service-2-fill"></i></span>
          <h4>Roadside Assistance 24/7</h4>
        </div>
        <div class="experience__card">
          <span><i class="ri-car-fill"></i></span>
          <h4>Your Choice Of Mechanic</h4>
        </div>
        <img src="{{ asset('img/assets/Porsche.png') }}" alt="experience" />
      </div>
    </section>

    <section class="section__container story__container">
      <h2 class="section__header">STORIES BEHIND THE WHEEL</h2>
      <div class="story__grid">
        <div class="story__card">
          <div class="story__date">
            <span>12</span>
            <div>
              <p>January</p>
              <p>2024</p>
            </div>
          </div>
          <h4>Adventures on the Open Road</h4>
          <p>
            Join us as we dive into the exhilarating stories of travelers who
            embarked on unforgettable journeys with PREMIUM CAR.
          </p>
          <img src="{{ asset('img/assets/story-1.jpg') }}" alt="story" />
        </div>
        <div class="story__card">
          <div class="story__date">
            <span>04</span>
            <div>
              <p>March</p>
              <p>2024</p>
            </div>
          </div>
          <h4>Luxury and Comfort: Experiences</h4>
          <p>
            In this series, we highlight the luxurious touches, unparalleled
            comfort, and exceptional service that make every ride.
          </p>
          <img src="{{ asset('img/assets/Gambar-5.jpeg') }}" alt="story" />
        </div>
        <div class="story__card">
          <div class="story__date">
            <span>18</span>
            <div>
              <p>June</p>
              <p>2024</p>
            </div>
          </div>
          <h4>Cars that Adapt to Your Lifestyle</h4>
          <p>
            Read about how our versatile vehicles have seamlessly integrated
            into the lives of professionals and families alike.
          </p>
          <img src="{{ asset('img/assets/Gambar-1.jpeg') }}" alt="story" />
        </div>
      </div>
    </section>

    <section class="banner__container">
      <div class="banner__wrapper">
        <img src="{{ asset('img/assets/banner-1.png') }}" alt="banner" />
        <img src="{{ asset('img/assets/banner-2.png') }}" alt="banner" />
        <img src="{{ asset('img/assets/banner-3.png') }}" alt="banner" />
        <img src="{{ asset('img/assets/banner-4.png') }}" alt="banner" />
        <img src="{{ asset('img/assets/banner-5.png') }}" alt="banner" />
        <img src="{{ asset('img/assets/banner-6.png') }}" alt="banner" />
        <img src="{{ asset('img/assets/banner-7.png') }}" alt="banner" />
        <img src="{{ asset('img/assets/banner-8.png') }}" alt="banner" />
        <img src="{{ asset('img/assets/banner-9.png') }}" alt="banner" />
        <img src="{{ asset('img/assets/banner-10.png') }}" alt="banner" />
      </div>
    </section>

    <section class="download">
      <div class="section__container download__container">
        <div class="download__content">
          <h2 class="section__headerr">Customer Testimonials</h2>
          <div class="download__links">
            <!-- <a href="#">
              <img src="assets/apple.png" alt="apple" />
            </a>
            <a href="#">
              <img src="assets/google.png" alt="google" />
            </a> -->
          </div>
        </div>
        <!-- <div class="download__image">
          <img src="assets/download.png" alt="download" />
        </div> -->
        <div class="testimonial-slider-wrapper">
        <div class="testimonial-slider">
          <!-- Testimonial 1 -->
          <div class="testimonial-card">
            <div class="testimonial-header">
              <img src="{{ asset('img/assets/avatar1.jpg') }}" alt="Avatar" class="avatar">
              <div class="testimonial-info">
                <h3 class="client-name">Alex Wijaya</h3>
                <p class="client-handle">@alexwijaya</p>
              </div>
              <div class="stars">★★★★★</div>
            </div>
            <p class="testimonial-content">"Pengalaman yang luar biasa! Kendaraan premium dan pelayanan yang sangat profesional. Saya sangat puas!"</p>
          </div>
  
          <!-- Testimonial 2 -->
          <div class="testimonial-card">
            <div class="testimonial-header">
              <img src="{{ asset('img/assets/avatar3.jpg') }}" alt="Avatar" class="avatar">
              <div class="testimonial-info">
                <h3 class="client-name">Rini Utami</h3>
                <p class="client-handle">@riniutami</p>
              </div>
              <div class="stars">★★★★☆</div>
            </div>
            <p class="testimonial-content">"Website ini sangat user-friendly dengan desain elegan. Pilihan terbaik untuk pengalaman sewa mewah!"</p>
          </div>
  
          <!-- Testimonial 3 -->
          <div class="testimonial-card">
            <div class="testimonial-header">
              <img src="{{ asset('img/assets/avatar2.jpg') }}" alt="Avatar" class="avatar">
              <div class="testimonial-info">
                <h3 class="client-name">Budi Setiawan</h3>
                <p class="client-handle">@budisetiawan</p>
              </div>
              <div class="stars">★★★★★</div>
            </div>
            <p class="testimonial-content">"Saya sangat puas dengan pilihan kendaraan dan layanan di sini. Benar-benar pengalaman terbaik!"</p>
          </div>
  
          <!-- Testimonial 4 -->
          <div class="testimonial-card">
            <div class="testimonial-header">
              <img src="{{ asset('img/assets/avatar4.jpg') }}" alt="Avatar" class="avatar">
              <div class="testimonial-info">
                <h3 class="client-name"> Nadia Putri</h3>
                <p class="client-handle">@oliviasari</p>
              </div>
              <div class="stars">★★★★☆</div>
            </div>
            <p class="testimonial-content">"Sangat puas dengan layanan dan pilihan kendaraan mewah yang tersedia. Pengalaman tak terlupakan!"</p>
          </div>
        </div>
      </div>
    </div>
    </section>

    <section class="news" id="contact">
      <div class="section__container news__container">
        <h2 class="section__header">Stay up to date on all the latest news.</h2>
        <form action="/">
          <input type="text" placeholder="Your email" />
          <button class="btn">
            <i class="ri-send-plane-fill"></i>
          </button>
        </form>
      </div>
    </section>

    <footer>
      <div class="section__container footer__container">
        <div class="footer__col">
          <h4>Services</h4>
          <ul class="footer__links">
            <li>Car Rental Options</li>
            <li>Luxury Fleet</li>
            <li>Chauffeur Service</li>
            <li>Special Offers</li>
          </ul>
        </div>
        <div class="footer__col">
          <h4>Company</h4>
          <ul class="footer__links">
            <li>About Us</li>
            <li>Rent</li>
            <li>Contact</li>
          </ul>
        </div>
        <div class="footer__col">
          <h4>Support</h4>
          <ul class="footer__links">
            <li>FAQ</li>
            <li>Customer Support</li>
            <li>Feedback</li>
          </ul>
        </div>
        <div class="footer__col">
          <h4>Follow Us</h4>
          <ul class="footer__socials">
            <li>
              <a href="#"><i class="ri-facebook-fill"></i></a>
            </li>
            <li>
              <a href="#"><i class="ri-twitter-fill"></i></a>
            </li>
            <li>
              <a href="#"><i class="ri-linkedin-fill"></i></a>
            </li>
          </ul>
        </div>
      </div>
      <div class="footer__bar">
        Copyright © 2024 Web Design Mastery. All rights reserved.
      </div>
    </footer>

    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/main2.js') }}"></script>
  </body>
</html>
