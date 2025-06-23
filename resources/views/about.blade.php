@extends('layout.layout')

@php
$title='Magnus | About Us';
@endphp

@section('content')



<!-- banner section -->
<section>
  <!-- banner section -->
  <div
    class="w-full bg-[url('../img/bg/14.jpg')] bg-no-repeat bg-cover bg-center relative z-0 after:w-full after:h-full after:absolute after:top-0 after:left-0 after:bg-white after:bg-opacity-30 after:-z-1">
    <div class="container py-110px">
      <h1
        class="text-2xl sm:text-3xl md:text-26px lg:text-3xl xl:text-4xl font-bold text-heading-color mb-15px">
        <span
          class="leading-1.3 md:leading-1.3 lg:leading-1.3 xl:leading-1.3">About Us</span>
      </h1>
      <ul
        class="breadcrumb flex gap-30px items-center text-sm lg:text-base font-bold pt-4">
        <li class="home relative leading-1.8 lg:leading-1.8">
          <a href="index.html"><i class="fas fa-home text-secondary-color"></i> Home</a>
        </li>
        <li class="leading-1.8 lg:leading-1.8 text-heading-color">
          About Us
        </li>
      </ul>
    </div>
  </div>
</section>

<!-- about section -->
<section>
  <div class="container pt-30 pb-90px">
    <div class="grid grid-cols-1 lg:grid-cols-2 lg:gap-30px">
      <!-- about left -->
      <div class="lg:mr-30px relative mb-10 lg:mb-0">
        <img
          src="./assets/img/others/13.png"
          alt=""
          class="max-w-full">
        <div
          class="absolute left-[10px] bottom-[70px] w-150px md:w-300px">
          <div class="relative">
            <img src="./assets/img/others/8.png" alt="" class="w-full">
            <div
              class="absolute left-0 top-0 w-full h-full flex items-center justify-center">
              <a
                class="glightbox2 w-50px h-50px lg:w-20 lg:h-20 text-center lg:text-lg text-secondary-color shadow-box-shadow-2 rounded-full bg-white flex items-center justify-center animate-pulse1"
                href=""
                data-glightbox="type: video;">
                <i class="icon-play"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- about right -->
      <div>
        <div class="mb-5">
          <p
            class="text-sm md:text-15px lg:text-base text-secondary-color bg-secondary-color bg-opacity-10 capitalize mb-15px py-1px px-5 rounded-full inline-block font-semibold">
            <span class="leading-1.3">about us</span>
          </p>
          <h2
            class="text-2xl sm:text-3xl md:text-26px lg:text-3xl xl:text-44px text-heading-color font-bold mb-15px">
            <span class="leading-1.3">
              {{$about->title ?? ''}}
            </span>
          </h2>
          <p class="text-sm lg:text-base max-w-500px">
            <span class="leading-1.8 lg:leading-1.8">{!! $about->detail ?? '' !!}</span>
          </p>
        </div>
        <ul class="grid grid-cols-1 md:grid-cols-2 gap-x-5 gap-y-4 pt-4">
          <li class="text-sm lg:text-base flex items-center">
            <i
              class="flaticon-home-2 text-xl text-secondary-color bg-color-6 w-45px h-45px flex items-center justify-center mr-25px rounded-100%"></i>
            <span class="leading-1.8">Smart Home Design</span>
          </li>
          <li class="text-sm lg:text-base flex items-center">
            <i
              class="flaticon-mountain text-xl text-secondary-color bg-color-6 w-45px h-45px flex items-center justify-center mr-25px rounded-100%"></i>
            <span class="leading-1.8">Beautiful Scene Around</span>
          </li>
          <li class="text-sm lg:text-base flex items-center">
            <i
              class="flaticon-heart text-xl text-secondary-color bg-color-6 w-45px h-45px flex items-center justify-center mr-25px rounded-100%"></i>
            <span class="leading-1.8">Exceptional Lifestyle</span>
          </li>
          <li class="text-sm lg:text-base flex items-center">
            <i
              class="flaticon-secure text-xl text-secondary-color bg-color-6 w-45px h-45px flex items-center justify-center mr-25px rounded-100%"></i>
            <span class="leading-1.8">Complete 24/7 Security</span>
          </li>
        </ul>

        <div class="bg-secondary-color bg-opacity-5 mt-30px mb-10">
          <p
            class="text-sm lg:text-base p-5 border-l-4 border-secondary-color">
            <span class="leading-1.8">
              {{$about->quote ?? ''}}
            </span>
          </p>
        </div>
        <div>
          <h5
            class="uppercase text-sm md:text-base text-white relative group whitespace-nowrap font-normal mb-0 transition-all duration-300 border border-secondary-color hover:border-heading-color inline-block">
            <span
              class="inline-block absolute top-0 right-0 w-full h-full bg-secondary-color group-hover:bg-black hover:bg-primary-cogroup-lor z-1 group-hover:w-0 transition-all duration-300"></span>
            <a
              href=""
              class="relative z-10 px-5 md:px-25px lg:px-10 py-10px md:py-3 lg:py-17px group-hover:text-heading-color leading-23px">OUR SERVICES</a>
          </h5>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="bg-section-bg-1">
  <div class="container pt-30">
    <div class="grid grid-cols-1 lg:grid-cols-2 lg:gap-30px justify-center items-center">
      <!-- about left -->
      <!-- about right -->
      <div>
        <div class="mb-5">
          <p
            class="text-sm md:text-15px lg:text-base text-secondary-color bg-secondary-color bg-opacity-10 capitalize mb-15px py-1px px-5 rounded-full inline-block font-semibold">
            <span class="leading-1.3">A Message from the Chairman </span>
          </p>
          <h2
            class="text-2xl sm:text-3xl md:text-26px lg:text-3xl xl:text-44px text-heading-color font-bold mb-15px">
            <span class="leading-1.3">
              Mr. Md. Ahsan Ullah
            </span>
          </h2>
          <p class="text-sm lg:text-base max-w-500px">
            <span class="leading-1.8 lg:leading-1.8">"Building Dreams, Shaping Futures"<br><br>
              Dear Valued Partners and Customers,<br>
              It is with great pride and a deep sense of responsibility that I welcome you to Magnus Holdings Ltd. As the Chairman, I am honored to lead a team of passionate professionals dedicated to redefining real estate excellence in Bangladesh.
              Our vision is simple yet profound—to create more than just buildings, but homes that inspire, communities that thrive, and a nation that progresses. We believe that quality housing is the foundation of a better life, and with that belief, we are committed to delivering projects that blend innovation, sustainability, and world-class craftsmanship.

              <br>At Magnus Holdings Ltd., integrity and customer trust are at the core of everything we do. We do not compromise on quality, transparency, or ethical practices because we understand that when you invest in us, you are investing in your future.
              I invite you to join us on this journey as we strive to build not just structures, but legacies—for you, for Bangladesh, and for generations to come.
              With gratitude and commitment,<br> <br>
              

              <br><b>Mr. Md. Ahsan Ullah</b>
              <br>Chairman
              <br>Magnus Holdings Ltd.<br>
              "Excellence in Every Brick, Trust in Every Handshake."
            </span>
          </p>
        </div>

      </div>
      <div class="lg:mr-30px relative mb-10 lg:mb-0">
        <img
          src="{{asset('Ahsan.png')}}"
          alt=""
          style="width:75%;">
        <div
          class="absolute left-[10px] bottom-[70px] w-150px md:w-300px">
        </div>
      </div>
    </div>
  </div>

  <div class="container pt-30 pb-90px">
    <div class="grid grid-cols-1 lg:grid-cols-2 lg:gap-30px justify-center items-center">
      <!-- about left -->
      <div class="lg:mr-30px relative mb-10 lg:mb-0">
        <img
          src="{{asset('Aman.png')}}"
          alt=""
          style="width:75%;">
        <div
          class="absolute left-[10px] bottom-[70px] w-150px md:w-300px">
        </div>
      </div>
      <!-- about right -->
      <div>
        <div class="mb-5">
          <p
            class="text-sm md:text-15px lg:text-base text-secondary-color bg-secondary-color bg-opacity-10 capitalize mb-15px py-1px px-5 rounded-full inline-block font-semibold">
            <span class="leading-1.3">A Visionary Message from the Managing Director</span>
          </p>
          <h2
            class="text-2xl sm:text-3xl md:text-26px lg:text-3xl xl:text-44px text-heading-color font-bold mb-15px">
            <span class="leading-1.3">
              Mr. Md Aman Ullah Aman
            </span>
          </h2>
          <p class="text-sm lg:text-base max-w-500px">
            <span class="leading-1.8 lg:leading-1.8">"Pioneering Excellence, Delivering Trust"<br><br>

              Dear Esteemed Clients, Partners, and Well-wishers,<br>
              As the Managing Director of Magnus Holdings Ltd., it is both my privilege and passion to lead a team that is reshaping Bangladesh's real estate landscape with innovation, integrity, and unwavering commitment.
              <br>In this era of rapid urbanization, we recognize that a home is more than just walls and roofs—it is the foundation of dreams, the cradle of memories, and the cornerstone of a family's future. This understanding drives us to craft living spaces that harmonize modern aesthetics, functional brilliance, and enduring quality.
              <br>Our philosophy is built on three pillars:
              <br><br>✅ Customer-first approach – Your aspirations guide our blueprints
              <br>✅ Uncompromising standards – From soil testing to final touches, excellence is non- negotiable
              <br>✅ Sustainable progress – We build for today while safeguarding tomorrow

              <br><br>To our valued clients: Your trust is our most precious asset.
              <br>To our dedicated team: Your expertise makes our vision possible.
              <br>To our nation: We pledge responsible development that elevates communities.<br><br>
              <br>Together, let's construct not just buildings, but legacies that stand tall for generations.
              With warm regards,

              <br><br><b>Mr. Md Aman Ullah Aman</b>
              <br>Managing Director
              <br>Magnus Holdings Ltd.<br>
              "Where Your Trust Builds Our Future"

            </span>
          </p>
        </div>

      </div>

    </div>
  </div>
</section>

<!-- services section -->
<section>
  <div class="container pt-30 pb-90px">
    <!-- section heading -->
    <div class="text-center mb-50px">
      <p
        class="text-sm md:text-15px lg:text-base text-secondary-color bg-secondary-color bg-opacity-10 capitalize 1b-15px py-0.5 px-5 mb-15px rounded-full inline-block font-semibold">
        <span class="leading-1.3">Why Choose Magnus Holdings Ltd.?</span>
      </p>
      <h2
        class="text-2xl sm:text-3xl md:text-26px lg:text-3xl xl:text-44px text-heading-color font-bold">
        <span class="leading-1.3">Magnus Holdings Ltd. – Where Visions Become Addresses.</span>
      </h2>
    </div>
    <!-- services cards  -->

    <div
      class="service-cards flex flex-wrap justify-center items-center text-center -mx-15px">
      <!-- card 1 -->
      <div
        class="service-card basis-full sm:basis-1/2 lg:basis-1/3 px-15px mb-30px">
        <div
          class="border border-border-color-1 shadow-box-shadow-1 bg-white relative py-10 pb-35px px-30px transition-all duration-300">
          <div class="text-center mb-5">
            <img
              src="./assets/img/icons/icon-img/21.png"
              alt=""
              class="inline-block">
          </div>
          <h6
            class="text-lg md:text-xl lg:text-22px xl:text-2xl text-heading-color font-bold">
            <a
              class="hover:text-secondary-color leading-1.3 mb-1"
              href="{{route ('project.all') }}">Unmatched Expertise</a>
          </h6>
          <p class="text-sm mb-25px">
            <span class="leading-1.8">Founded by seasoned professionals with decades of experience in Bangladesh’s
              real estate sector, we bring knowledge, precision, and innovation to every project.</span>
          </p>
          <span
            class="hover-line absolute bottom-0 left-0 w-0 h-1 bg-secondary-color transition-all duration-300 block"></span>
        </div>
      </div>
      <!-- card 2 -->
      <div
        class="service-card active basis-full sm:basis-1/2 lg:basis-1/3 px-15px mb-30px">
        <div
          class="border border-border-color-1 shadow-box-shadow-1 bg-white relative py-10 pb-35px px-30px transition-all duration-300">
          <div class="text-center mb-5">
            <img
              src="./assets/img/icons/icon-img/22.png"
              alt=""
              class="inline-block">
          </div>
          <h6
            class="text-lg md:text-xl lg:text-22px xl:text-2xl text-heading-color font-bold">
            <a
              class="hover:text-secondary-color leading-1.3 mb-1"
              href="{{route ('project.all') }}">Commitment to Quality</a>
          </h6>
          <p class="text-sm mb-25px">
            <span class="leading-1.8">From premium construction materials to rigorous quality checks,
              we ensure every detail meets the highest standards—because your home deserves nothing less.</span>
          </p>
          <span
            class="hover-line absolute bottom-0 left-0 w-0 h-1 bg-secondary-color transition-all duration-300 block"></span>
        </div>
      </div>
      <!-- card 3 -->
      <div
        class="service-card basis-full sm:basis-1/2 lg:basis-1/3 px-15px mb-30px">
        <div
          class="border border-border-color-1 shadow-box-shadow-1 bg-white relative py-10 pb-35px px-30px transition-all duration-300">
          <div class="text-center mb-5">
            <img
              src="./assets/img/icons/icon-img/23.png"
              alt=""
              class="inline-block">
          </div>
          <h6
            class="text-lg md:text-xl lg:text-22px xl:text-2xl text-heading-color font-bold">
            <a
              class="hover:text-secondary-color leading-1.3 mb-1"
              href="{{route ('project.all') }}">Customer-Centric Approach</a>
          </h6>
          <p class="text-sm mb-25px">
            <span class="leading-1.8">Your vision is our blueprint. We prioritize transparency,
              timely delivery, and personalized service to make your property journey seamless and satisfying.</span>
          </p>
          <span
            class="hover-line absolute bottom-0 left-0 w-0 h-1 bg-secondary-color transition-all duration-300 block"></span>
        </div>
      </div>
      <!-- card 4 -->
      <div
        class="service-card basis-full sm:basis-1/2 lg:basis-1/3 px-15px mb-30px">
        <div
          class="border border-border-color-1 shadow-box-shadow-1 bg-white relative py-10 pb-35px px-30px transition-all duration-300">
          <div class="text-center mb-5">
            <img
              src="./assets/img/icons/icon-img/21.png"
              alt=""
              class="inline-block">
          </div>
          <h6
            class="text-lg md:text-xl lg:text-22px xl:text-2xl text-heading-color font-bold">
            <a
              class="hover:text-secondary-color leading-1.3 mb-1"
              href="{{route ('project.all') }}">Innovative & Sustainable Designs</a>
          </h6>
          <p class="text-sm mb-25px">
            <span class="leading-1.8">We blend modern architecture, smart living solutions, and
              eco-friendly practices to create spaces that are as sustainable as they are stunning.</span>
          </p>
          <span
            class="hover-line absolute bottom-0 left-0 w-0 h-1 bg-secondary-color transition-all duration-300 block"></span>
        </div>
      </div>
      <!-- card 2 -->
      <div
        class="service-card active basis-full sm:basis-1/2 lg:basis-1/3 px-15px mb-30px">
        <div
          class="border border-border-color-1 shadow-box-shadow-1 bg-white relative py-10 pb-35px px-30px transition-all duration-300">
          <div class="text-center mb-5">
            <img
              src="./assets/img/icons/icon-img/22.png"
              alt=""
              class="inline-block">
          </div>
          <h6
            class="text-lg md:text-xl lg:text-22px xl:text-2xl text-heading-color font-bold">
            <a
              class="hover:text-secondary-color leading-1.3 mb-1"
              href="{{route ('project.all') }}">Trust & Transparency</a>
          </h6>
          <p class="text-sm mb-25px">
            <span class="leading-1.8">No hidden terms, no compromises. We maintain ethical business practices, clear documentation, and honest communication at every step.</span>
          </p>
          <span
            class="hover-line absolute bottom-0 left-0 w-0 h-1 bg-secondary-color transition-all duration-300 block"></span>
        </div>
      </div>
      <!-- card 3 -->
      <div
        class="service-card basis-full sm:basis-1/2 lg:basis-1/3 px-15px mb-30px">
        <div
          class="border border-border-color-1 shadow-box-shadow-1 bg-white relative py-10 pb-35px px-30px transition-all duration-300">
          <div class="text-center mb-5">
            <img
              src="./assets/img/icons/icon-img/23.png"
              alt=""
              class="inline-block">
          </div>
          <h6
            class="text-lg md:text-xl lg:text-22px xl:text-2xl text-heading-color font-bold">
            <a
              class="hover:text-secondary-color leading-1.3 mb-1"
              href="{{route ('project.all') }}">Strategic Locations</a>
          </h6>
          <p class="text-sm mb-25px">
            <span class="leading-1.8">Our projects are carefully positioned in high-growth areas, ensuring strong investment potential and an enhanced lifestyle.</span>
          </p>
          <span
            class="hover-line absolute bottom-0 left-0 w-0 h-1 bg-secondary-color transition-all duration-300 block"></span>
        </div>
      </div>

    </div>
  </div>
</section>

@endsection