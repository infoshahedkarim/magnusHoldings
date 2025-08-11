@extends('layout.layout')

@php
  $title = 'Magnus';
@endphp

@section('content')


  <!-- banner section -->
  <section>
    <!-- ✅ Added swiper-fade for proper fade behavior -->
    <div class="swiper swiper-fade">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
      <img src="{{ asset('storage/' . $homes->image ?? '') }}" alt="Slide 1" class="slide-img">
      </div>
      <div class="swiper-slide">
      <img src="{{ asset('storage/' . $homes->image1 ?? '') }}" alt="Slide 2" class="slide-img">
      </div>
      <div class="swiper-slide">
      <img src="{{ asset('storage/' . $homes->image2 ?? '') }}" alt="Slide 3" class="slide-img">
      </div>
    </div>

    <!-- Navigation -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>

    <!-- Pagination -->
    <div class="swiper-pagination"></div>
    </div>
  </section>

  <style>
    /* ✅ Ensures swiper fills screen and prevents layout shift*/

    /* .custom-swiper {
    width: 100%;
    min-height: 100vh;
    position: relative;
    } */

    /* ✅ Fade animation and vertical centering */
    .swiper-slide {
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #000;
    height: 80vh;
    object-fit: cover;
    transition: opacity 1s ease-in-out !important;
    }

    /* ✅ Fix: Prevent top cropping and allow full image to fit */
    .slide-img {
    width: 100%;
    height: auto;
    display: block;
    object-fit: fill;
    margin: auto;
    }
    @media screen and (max-width: 768px) {
  .slide-img {
    .slide-img {
  width: 100%;
  height: 100%;                /* fill container vertically */
  object-fit: cover;           /* crop and fill container without distortion */
  display: block;
}

  }
}


    /* ✅ Styled navigation buttons */
    .swiper-button-next,
    .swiper-button-prev {
    width: 45px;
    height: 45px;
    background-color: black;
    border-radius: 50%;
    color: white;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 20px;
    transition: all 0.3s ease;
    }

    .swiper-button-next::after,
    .swiper-button-prev::after {
    font-size: 20px;
    color: white;
    }

    .swiper-button-next:hover,
    .swiper-button-prev:hover {
    background-color: #222;
    }
  </style>

  <script>
    // ✅ Run after DOM is ready to prevent blank flashes
    document.addEventListener("DOMContentLoaded", function () {
    const swiper = new Swiper('.swiper', {
      effect: 'fade',
      fadeEffect: {
      crossFade: true
      },
      speed: 200,
      loop: true,
      autoplay: {
      delay: 5000,
      disableOnInteraction: false
      },
      pagination: {
      el: '.swiper-pagination',
      clickable: true
      },
      navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev'
      }
    });
    });
  </script>




  <section>
    <div class="container pt-115px pb-70px modal-container">
    <!-- section heading -->
    <div class="text-center mb-50px">
      <p
      class="text-sm md:text-15px lg:text-base text-secondary-color bg-secondary-color bg-opacity-10 capitalize 1b-15px py-0.5 px-5 mb-15px rounded-full inline-block font-semibold">
      <span class="leading-1.3">Properties</span>
      </p>
      <h2 class="text-2xl sm:text-3xl md:text-26px lg:text-3xl xl:text-44px text-heading-color font-bold">
      <span class="leading-1.3">Latest Listings </span>
      </h2>
    </div>
    <div>
      <!-- apartment cards  -->
      <div class="-mx-15px">
      <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3">


        @foreach($projects as $project)
      <!-- card 1 -->
      <div class="apart-card mb-50px px-15px">
      <div class="group border border-border-color-13 shadow-box-shadow-4">
        <!-- card thumbs -->
        <div class="relative leading-1">
        <a href="{{route('project.show', $project->slug)}}" class="overflow-hidden">
        <img src="{{asset('storage/' . $project->image1 ?? '')}}"
        class="w-full group-hover:scale-110 transition-all duration-700" alt="">
        </a>

        <!-- <div class="absolute top-10 lg:top-5 right-[30px]">
      <a href="{{route ('project.all') }}" class="w-50px h-50px"
      ><img
      src="./assets/img/blog/author.jpg"
      alt=""
      class="w-full h-full rounded-100% group-hover:scale-110 border-3px border-border-color-1 transition-all duration-300"
      ></a>
      </div> -->
        </div>
        <!-- card body -->
        <div class="px-5 pt-30px lg:px-30px">
        <p class="text-secondary-color font-semibold mb-15px uppercase">
        <span class="leading-25px">{{$project->place}}</span>
        </p>
        <h4 class="text-lg md:text-xl lg:text-22px font-semibold text-heading-color mb-15px">
        <a href="{{route('project.show', $project->slug)}}"
        class="hover:text-secondary-color leading-1.3">{{$project->title}}</a>
        </h4>

        <div class="text-sm">
        <a href="{{route('project.show', $project->slug)}}" class="hover:text-secondary-color"><i
          class="flaticon-pin text-secondary-color mr-0.5"></i>
        {{$project->address}}</a>
        </div>

        <ul class="flex flex-wrap gap-15px pt-4 pb-5">

        <li>
        <p class="leading-1.8 font-bold text-sm">
          {{$project->squareft}} <span class="font-normal">Square Ft</span>
        </p>
        </li>
        </ul>
        <div class="card-quick-area flex gap-x-2 pb-30px leading-1 transition-all duration-300">
        <ul class="flex gap-x-2">
        <li>
          <button
          class="modal-open w-9 h-9 flex items-center justify-center bg-section-bg-1 text-center hover:bg-secondary-color hover:text-white font-bold"
          data-modal-index="1">
          <i class="flaticon-expand leading-1"></i>
          </button>
        </li>
        <li>
          <button
          class="modal-open w-9 h-9 flex items-center justify-center bg-section-bg-1 text-center hover:bg-secondary-color hover:text-white font-bold"
          data-modal-index="2">
          <i class="flaticon-heart-1 leading-1"></i>
          </button>
        </li>
        <li>
          <a href="{{route('project.all') }}"
          class="w-9 h-9 flex items-center justify-center bg-section-bg-1 text-center hover:bg-secondary-color hover:text-white font-bold"><i
          class="flaticon-add leading-1"></i></a>
        </li>
        </ul>
        </div>
        </div>
        <!-- cart footer -->
        <!-- <div class="p-5 lg:px-30px border-t border-border-color-1">
      <h5
      class="text-lg text-secondary-color font-semibold mb-5px">
      <span class="leading-1.8">৳{{$project->price}}</span>
      <label class="text-sm font-normal">/Month</label>
      </h5>
      </div> -->
      </div>
      </div>

      @endforeach

      </div>
      </div>
    </div>

    <!-- modals -->
    <!-- modal apartment details-->
    <div
      class="modal hidden fixed top-0 left-0 w-full h-full z-xxl transition-all duration-500 bg-lightBlack opacity-0 overflow-y-auto">
      <div class="modal-close fixed md:absolute top-0 left-0 w-full h-full z-xsmall cursor-zoom-out"></div>
      <div
      class="modal-content transition-all duration-500 -translate-y-20 sm:max-w-500px lg:max-w-980px m-2 mt-150px sm:mx-auto relative z-small rounded-lg">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-30px p-30px bg-white relative">
        <div>
        <img src="./assets/img/product/4.png" class="w-full" alt="">
        </div>

        <!-- card body -->
        <div class="pl-25px">
        <div class="absolute right-4 top-4">
          <button
          class="modal-close w-10 h-10 leading-10 text-center bg-section-bg-1 text-black text-25px inline-block">
          <span>×</span>
          </button>
        </div>
        <ul class="flex items-center mb-5px">
          <li>
          <a href="#" class="text-xs text-ratings hover:text-secondary-color"><i
            class="fas fa-star leading-1.8"></i></a>
          </li>
          <li>
          <a href="#" class="text-xs text-ratings hover:text-secondary-color"><i
            class="fas fa-star leading-1.8"></i></a>
          </li>
          <li>
          <a href="#" class="text-xs text-ratings hover:text-secondary-color"><i
            class="fas fa-star leading-1.8"></i></a>
          </li>
          <li>
          <a href="#" class="text-xs text-ratings hover:text-secondary-color"><i
            class="fas fa-star-half-alt leading-1.8"></i></a>
          </li>
          <li>
          <a href="#" class="text-xs text-ratings hover:text-secondary-color"><i
            class="far fa-star leading-1.8"></i></a>
          </li>
          <li>
          <a href="#" class="text-xs text-ratings hover:text-secondary-color">
            ( 95 Reviews )</a>
          </li>
        </ul>

        <h4 class="text-22px md:text-2xl font-bold text-heading-color mb-0">
          <a href="{{route('project.all') }}" class="leading-1.3 hover:text-secondary-color">3 Rooms Manhattan</a>
        </h4>
        <p
          class="text-34px md:text-50px text-secondary-color font-semibold mb-5 pb-0 border-b border-border-color-12 border-opacity-25 leading-1.2">
          <span>৳34,900</span>
          <del class="text-26px md:text-40px leading-1.2 opacity-60 pl-1">৳36,500</del>
        </p>
        <p class="text-sm lg:text-base mb-9 md:mb-10">
          <span class="leading-1.8">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
          Dignissimos repellendus repudiandae incidunt quidem
          pariatur expedita, quo quis modi tempore non.</span>
        </p>

        <ul class="flex flex-wrap gap-5 pb-5 mb-5 border-b border-border-color-12 border-opacity-25">
          <li class="text-sm">
          <button
            class="modal-open leading-1.8 font-semibold hover:text-secondary-color transition-all duration-300"
            data-modal-index="3">
            <i class="far fa-heart px-0.5"></i> Add to Wishlist
          </button>
          </li>

          <li class="text-sm">
          <button class="leading-1.8 font-semibold hover:text-secondary-color transition-all duration-300">
            <i class="fas fa-exchange-alt px-0.5"></i> Compare
          </button>
          </li>
        </ul>
        <!-- social area -->
        <ul class="flex gap-x-[18px] items-center">
          <li>
          <p class="text-sm lg:text-base">
            <span class="leading-1.8">Share</span>
          </p>
          </li>
          <li>
          <a href="https://www.facebook.com/" class="text-sm lg:text-base hover:text-secondary-color">
            <i class="fab fa-facebook-f leading-1.8"></i>
          </a>
          </li>
          <li>
          <a href="https://x.com/" class="text-sm lg:text-base hover:text-secondary-color">
            <i class="fab fa-twitter leading-1.8"></i>
          </a>
          </li>
          <li>
          <a href="https://www.linkedin.com/" class="text-sm lg:text-base hover:text-secondary-color">
            <i class="fab fa-linkedin leading-1.8"></i>
          </a>
          </li>
          <li>
          <a href="https://www.instagram.com/" class="text-sm lg:text-base hover:text-secondary-color">
            <i class="fab fa-instagram leading-1.8"></i>
          </a>
          </li>
        </ul>

        <!-- action -->
        <div class="text-end">
          <a href="{{route('project.all') }}" class="text-xs hover:text-secondary-color underline hover:underline">
          <span class="leading-1.8">View Details</span></a>
        </div>
        </div>
      </div>
      </div>
    </div>
    <!-- modal  wishlist 1-->
    <div
      class="modal hidden fixed top-0 left-0 w-full h-full z-xxl transition-all duration-500 bg-lightBlack opacity-0 overflow-y-auto">
      <div class="modal-close fixed md:absolute top-0 left-0 w-full h-full z-xsmall cursor-zoom-out"></div>

      <div
      class="modal-content transition-all duration-500 -translate-y-20 max-w-500px m-2 mt-150px sm:mx-auto relative z-small p-30px bg-white">
      <div class="flex">
        <div class="w-125px mr-5 flex-shrink-0">
        <img src="./assets/img/product/4.png" class="w-full" alt="">
        </div>

        <!-- card body -->
        <div class="pl-25px">
        <div class="absolute right-4 top-4">
          <button
          class="modal-close w-10 h-10 leading-10 text-center bg-black bg-opacity-5 text-black text-25px inline-block">
          <span>×</span>
          </button>
        </div>

        <h4 class="text-base lg:text-lg font-bold text-heading-color mb-10px">
          <a href="{{route('project.all') }}" class="leading-1.3 hover:text-secondary-color">3 Rooms Manhattan</a>
        </h4>

        <p class="text-sm lg:text-base mb-5 md:mb-6  ">
          <i class="fa fa-check-circle leading-1 text-green float-left clear-both pr-1.5 mt-1.5"></i>
          Successfully added to your Wishlist
        </p>
        <!-- action -->
        <div>
          <h5
          class="capitalize text-sm md:text-base text-white relative group whitespace-nowrap font-normal mb-0 transition-all duration-300 border border-secondary-color hover:border-heading-color inline-block">
          <span
            class="inline-block absolute top-0 right-0 w-full h-full bg-secondary-color group-hover:bg-black hover:bg-primary-cogroup-lor z-1 group-hover:w-0 transition-all duration-300"></span>
          <a href="{{route('project.all') }}"
            class="relative z-10 px-5 py-5px group-hover:text-heading-color leading-23px">View Wishlist</a>
          </h5>
        </div>
        </div>
      </div>
      </div>
    </div>
    <!-- modal  wishlist 2-->
    <div
      class="modal hidden fixed top-0 left-0 w-full h-full z-xxl transition-all duration-500 bg-lightBlack opacity-0 overflow-y-auto">
      <div class="modal-close fixed md:absolute top-0 left-0 w-full h-full z-xsmall cursor-zoom-out"></div>

      <div
      class="modal-content transition-all duration-500 -translate-y-20 max-w-500px m-2 mt-150px sm:mx-auto relative z-small p-30px bg-white">
      <div class="flex">
        <div class="w-125px mr-5 flex-shrink-0">
        <img src="./assets/img/product/4.png" class="w-full" alt="">
        </div>

        <!-- card body -->
        <div class="pl-25px">
        <div class="absolute right-4 top-4">
          <button
          class="modal-close w-10 h-10 leading-10 text-center bg-black bg-opacity-5 text-black text-25px inline-block">
          <span>×</span>
          </button>
        </div>

        <h4 class="text-base lg:text-lg font-bold text-heading-color mb-10px">
          <a href="{{route('project.all') }}" class="leading-1.3 hover:text-secondary-color">3 Rooms Manhattan</a>
        </h4>

        <p class="text-sm lg:text-base mb-5 md:mb-6  ">
          <i class="fa fa-check-circle leading-1 text-green float-left clear-both pr-1.5 mt-1.5"></i>
          Successfully added to your Wishlist
        </p>
        <!-- action -->
        <div>
          <h5
          class="capitalize text-sm md:text-base text-white relative group whitespace-nowrap font-normal mb-0 transition-all duration-300 border border-secondary-color hover:border-heading-color inline-block">
          <span
            class="inline-block absolute top-0 right-0 w-full h-full bg-secondary-color group-hover:bg-black hover:bg-primary-cogroup-lor z-1 group-hover:w-0 transition-all duration-300"></span>
          <a href="{{route('project.all') }}"
            class="relative z-10 px-5 py-5px group-hover:text-heading-color leading-23px">View Wishlist</a>
          </h5>
        </div>
        </div>
      </div>
      </div>
    </div>
    </div>
  </section>


  <!-- call to action seciton -->
  <div class="pt-115px pb-30 mb-30 bg-my-image bg-cover bg-center bg-no-repeat text-center relative z-0">

    <!-- floating area -->
    <div class="absolute left-0 top-1/2 -translate-y-1/2 max-w-[34%] hidden lg:block -z-1">
    <img src="./assets/img/slider/21.png" alt="" class="w-full">
    </div>

    <div class="absolute right-0 bottom-0 max-w-[27%] hidden lg:block -z-1">
    <img src="./assets/img/bg/11.png" alt="" class="w-full">
    </div>

    <p class="text-sm md:text-15px lg:text-base text-secondary-color">
    <span class="leading-1.8 mb-5px" style="color: white;">- Any question you have -</span>
    </p>
    <h4
    class="text-xl sm:text-3xl md:text-40px lg:text-50px xl:text-[56px] 3xl:text-6xl 4xl:text-7xl text-white font-bold mb-10">
    <span class="leading-1.3">{{$homes->number}}</span>
    </h4>
    <div class="flex gap-5 justify-center uppercase">
    <h5
      class="capitalize text-sm md:text-base text-white relative group whitespace-nowrap font-normal transition-all duration-300 border border-secondary-color bg-white hover:border-heading-color inline-block mr-15px">
      <span
      class="inline-block absolute top-0 right-0 w-full h-full bg-secondary-color group-hover:bg-primary-color z-1 group-hover:w-0 transition-all duration-300"></span>
      <a href="tel:+123456789"
      class="relative z-10 px-5 md:px-25px lg:px-10 py-10px md:py-3 lg:py-17px group-hover:text-heading-color leading-23px">MAKE
      A CALL</a>
    </h5>
    <h5
      class="capitalize text-sm md:text-base text-white relative group whitespace-nowrap font-normal transition-all duration-300 border border-white bg-transparent inline-block mr-15px">
      <span
      class="inline-block absolute top-0 left-0 w-0 h-full bg-transparent group-hover:bg-secondary-color z-1 group-hover:w-full transition-all duration-300"></span>
      <a href="{{route('contact') }}"
      class="relative z-10 px-5 md:px-25px lg:px-10 py-10px md:py-3 lg:py-17px group-hover:text-white leading-23px">CONTACT
      US</a>
    </h5>
    </div>
  </div>


  <!-- services section -->
  <section>
    <div class="container pt-30 pb-90px" style="margin-top: -120px;">
    <!-- section heading -->
    <div class="text-center mb-50px">
      <p
      class="text-sm md:text-15px lg:text-base text-secondary-color bg-secondary-color bg-opacity-10 capitalize 1b-15px py-0.5 px-5 rounded-full inline-block font-semibold mb-5">
      <span class="leading-1.3">Building with Pride, Delivering with Promise.</span>
      </p>
      <h2 class="text-2xl sm:text-3xl md:text-26px lg:text-3xl xl:text-44px text-heading-color font-bold">
      <span class="leading-1.3">Core Values </span>
      </h2>
    </div>
    <!-- services cards  -->

    <div class="service-cards flex flex-wrap justify-center items-center">
      <!-- card 1 -->
      <div class="service-card service-card-2 basis-full sm:basis-1/2 lg:basis-1/3 px-15px lg:px-0 mb-30px">
      <div class="border border-border-color-8 relative py-10 pb-35px px-30px transition-all duration-300">
        <div class="mb-15px text-6xl text-secondary-color">
        <!-- <i class="flaticon-apartment"></i> -->
        <img src="/assets/new/integrity-transparency.png" width="80" height="80">
        </div>
        <h6 class="text-17px md:text-lg lg:text-xl text-heading-color font-bold mb-15px">
        <a class="hover:text-secondary-color leading-1.3" href="{{route('project.all') }}">Integrity &
          Transparency</a>
        </h6>
        <p class="text-sm">
        <span class="leading-1.8">We believe in complete honesty, fairness, and openness in all our dealings. Trust
          is the foundation of our relationships with clients, investors, and partners.</span>
        </p>

        <span
        class="hover-line absolute bottom-0 left-0 w-0 h-1 bg-secondary-color transition-all duration-300 block"></span>
      </div>
      </div>

      <!-- card 2 -->
      <div class="service-card service-card-2 basis-full sm:basis-1/2 lg:basis-1/3 px-15px lg:px-0 mb-30px active">
      <div class="border border-border-color-8 relative py-10 pb-35px px-30px transition-all duration-300">
        <div class="mb-15px text-6xl text-secondary-color">
        <!-- <i class="flaticon-park"></i> -->
        <img src="/assets/new/Community_Centered_Excellence.png" width="80" height="80">
        </div>
        <h6 class="text-17px md:text-lg lg:text-xl text-heading-color font-bold mb-15px">
        <a class="hover:text-secondary-color leading-1.3" href="{{route('project.all') }}">Community-Centered
          Excellence</a>
        </h6>
        <p class="text-sm">
        <span class="leading-1.8">We create spaces that nurture connection, belonging, and shared purpose — always
          placing people and their communities at the heart of everything we build.</span>
        </p>

        <span
        class="hover-line absolute bottom-0 left-0 w-0 h-1 bg-secondary-color transition-all duration-300 block"></span>
      </div>
      </div>

      <!-- card 3 -->
      <div class="service-card service-card-2 basis-full sm:basis-1/2 lg:basis-1/3 px-15px lg:px-0 mb-30px">
      <div class="border border-border-color-8 relative py-10 pb-35px px-30px transition-all duration-300">
        <div class="mb-15px text-6xl text-secondary-color">
        <!-- <i class="flaticon-maps-and-location"></i> -->
        <img src="/assets/new/Innovation_Sustainability.png" width="80" height="80">
        </div>
        <h6 class="text-17px md:text-lg lg:text-xl text-heading-color font-bold mb-15px">
        <a class="hover:text-secondary-color leading-1.3" href="{{route('project.all') }}">Innovation &
          Sustainability</a>
        </h6>
        <p class="text-sm">
        <span class="leading-1.8">We adopt forward-thinking solutions to build smart, eco-friendly living spaces
          that ensure long-term sustainability and value for residents.</span>
        </p>

        <span
        class="hover-line absolute bottom-0 left-0 w-0 h-1 bg-secondary-color transition-all duration-300 block"></span>
      </div>
      </div>

      <!-- card 4 -->
      <div class="service-card service-card-2 basis-full sm:basis-1/2 lg:basis-1/3 px-15px lg:px-0 mb-30px">
      <div class="border border-border-color-8 relative py-10 pb-35px px-30px transition-all duration-300">
        <div class="mb-15px text-6xl text-secondary-color">
        <!-- <i class="flaticon-excavator"></i> -->
        <img src="/assets/new/CommitmentToQuality.png" width="80" height="80">
        </div>
        <h6 class="text-17px md:text-lg lg:text-xl text-heading-color font-bold mb-15px">
        <a class="hover:text-secondary-color leading-1.3" href="{{route('project.all') }}">Commitment to
          Quality</a>
        </h6>
        <p class="text-sm">
        <span class="leading-1.8">Every project reflects our dedication to excellence. We follow the highest
          standards to deliver safe, durable, and visually appealing properties.</span>
        </p>

        <span
        class="hover-line absolute bottom-0 left-0 w-0 h-1 bg-secondary-color transition-all duration-300 block"></span>
      </div>
      </div>

      <!-- card 5 -->
      <div class="service-card service-card-2 basis-full sm:basis-1/2 lg:basis-1/3 px-15px lg:px-0 mb-30px active">
      <div class="border border-border-color-8 relative py-10 pb-35px px-30px transition-all duration-300">
        <div class="mb-15px text-6xl text-secondary-color">
        <!-- <i class="flaticon-park"></i> -->
        <img src="/assets/new/Social_Responsibility.png" width="80" height="80">
        </div>
        <h6 class="text-17px md:text-lg lg:text-xl text-heading-color font-bold mb-15px">
        <a class="hover:text-secondary-color leading-1.3" href="{{route('project.all') }}">Social
          Responsibility</a>
        </h6>
        <p class="text-sm">
        <span class="leading-1.8">We contribute to sustainable urban growth by supporting ethical practices and
          giving back to communities through responsible development.</span>
        </p>

        <span
        class="hover-line absolute bottom-0 left-0 w-0 h-1 bg-secondary-color transition-all duration-300 block"></span>
      </div>
      </div>

      <!-- card 6 -->
      <div class="service-card service-card-2 basis-full sm:basis-1/2 lg:basis-1/3 px-15px lg:px-0 mb-30px">
      <div class="border border-border-color-8 relative py-10 pb-35px px-30px transition-all duration-300">
        <div class="mb-15px text-6xl text-secondary-color">
        <!-- <i class="flaticon-apartment"></i> -->
        <img src="/assets/new/Teamwork_ Expertise.png" width="80" height="80">
        </div>
        <h6 class="text-17px md:text-lg lg:text-xl text-heading-color font-bold mb-15px">
        <a class="hover:text-secondary-color leading-1.3" href="{{route('project.all') }}">Teamwork & Expertise</a>
        </h6>
        <p class="text-sm">
        <span class="leading-1.8">Our success is driven by skilled professionals who collaborate with purpose and
          share a common vision of building lasting legacies.</span>
        </p>

        <span
        class="hover-line absolute bottom-0 left-0 w-0 h-1 bg-secondary-color transition-all duration-300 block"></span>
      </div>
      </div>


    </div>
    </div>
  </section>



  <!-- services section -->
  <section class="bg-section-bg-1">
    <div class="container pt-30 pb-90px">
    <!-- section heading -->
    <div class="text-center mb-50px">
      <p
      class="text-sm md:text-15px lg:text-base text-secondary-color bg-secondary-color bg-opacity-10 capitalize 1b-15px py-0.5 px-5 mb-15px rounded-full inline-block font-semibold">
      <span class="leading-1.3">Why Choose Magnus Holdings Ltd.?</span>
      </p>
      <h2 class="text-2xl sm:text-3xl md:text-26px lg:text-3xl xl:text-44px text-heading-color font-bold">
      <span class="leading-1.3">Magnus Holdings Ltd. – Where Visions Become Addresses.</span>
      </h2>
    </div>
    <!-- services cards  -->

    <div class="service-cards flex flex-wrap justify-center items-center text-left -mx-15px">
      <!-- card 1 -->
      <div class="service-card basis-full sm:basis-1/2 lg:basis-1/3 px-15px mb-30px">
      <div
        class="border border-border-color-1 shadow-box-shadow-1 bg-white relative py-10 pb-35px px-30px transition-all duration-300">
        <div class="text-center mb-5">
        <img src="/assets/new/Strategic_Locations.png" alt="" width="80" height="80" class="inline-block">
        <!-- <img src="/assets/new/Teamwork_ Expertise.png" width="80" height="80"> -->
        </div>
        <h6 class="text-lg md:text-xl lg:text-22px xl:text-2xl text-heading-color font-bold">
        <a class="hover:text-secondary-color leading-1.3 mb-1" href="{{route('project.all') }}">Strategic
          Locations</a>
        </h6>
        <p class="text-sm mb-25px">
        <span class="leading-1.8">We build in high-growth urban areas with great connectivity, lifestyle
          convenience, and strong future appreciation — making your property a smart, future-proof
          investment.</span>
        </p>
        <span
        class="hover-line absolute bottom-0 left-0 w-0 h-1 bg-secondary-color transition-all duration-300 block"></span>
      </div>
      </div>
      <!-- card 2 -->
      <div class="service-card active basis-full sm:basis-1/2 lg:basis-1/3 px-15px mb-30px">
      <div
        class="border border-border-color-1 shadow-box-shadow-1 bg-white relative py-10 pb-35px px-30px transition-all duration-300">
        <div class="text-center mb-5">
        <img src="/assets/new/Timely_Delivery.png" alt="" width="80" height="80" class="inline-block">
        </div>
        <h6 class="text-lg md:text-xl lg:text-22px xl:text-2xl text-heading-color font-bold">
        <a class="hover:text-secondary-color leading-1.3 mb-1" href="{{route('project.all') }}">Timely Delivery
          Promise</a>
        </h6>
        <p class="text-sm mb-25px">
        <span class="leading-1.8">Our projects are managed with precision and accountability, ensuring that every
          handover happens right on schedule — exactly when you expect your home to be ready.</span>
        </p>
        <span
        class="hover-line absolute bottom-0 left-0 w-0 h-1 bg-secondary-color transition-all duration-300 block"></span>
      </div>
      </div>
      <!-- card 3 -->
      <div class="service-card basis-full sm:basis-1/2 lg:basis-1/3 px-15px mb-30px">
      <div
        class="border border-border-color-1 shadow-box-shadow-1 bg-white relative py-10 pb-35px px-30px transition-all duration-300">
        <div class="text-center mb-5">
        <img src="/assets/new/Smart_Investment_Returns.png" alt="" width="80" height="80" class="inline-block">
        </div>
        <h6 class="text-lg md:text-xl lg:text-22px xl:text-2xl text-heading-color font-bold">
        <a class="hover:text-secondary-color leading-1.3 mb-1" href="{{route('project.all') }}">Investment
          Returns
        </a>
        </h6>
        <p class="text-sm mb-25px">
        <span class="leading-1.8">Our land share model offers exceptional value through capital appreciation, future
          rental income, and long-term financial security with every square foot you invest in.</span>
        </p>
        <span
        class="hover-line absolute bottom-0 left-0 w-0 h-1 bg-secondary-color transition-all duration-300 block"></span>
      </div>
      </div>
      <!-- card 4 -->
      <div class="service-card basis-full sm:basis-1/2 lg:basis-1/3 px-15px mb-30px">
      <div
        class="border border-border-color-1 shadow-box-shadow-1 bg-white relative py-10 pb-35px px-30px transition-all duration-300">
        <div class="text-center mb-5">
        <img src="/assets/new/Secured_Ownership.png" alt="" width="80" height="80" class="inline-block">
        </div>
        <h6 class="text-lg md:text-xl lg:text-22px xl:text-2xl text-heading-color font-bold">
        <a class="hover:text-secondary-color leading-1.3 mb-1" href="{{route('project.all') }}">Secured Ownership
        </a>
        </h6>
        <p class="text-sm mb-25px">
        <span class="leading-1.8">We ensure 100% secure ownership with verified land titles, full legal
          documentation, and dedicated legal support for a risk-free and hassle-free property experience.</span>
        </p>
        <span
        class="hover-line absolute bottom-0 left-0 w-0 h-1 bg-secondary-color transition-all duration-300 block"></span>
      </div>
      </div>
      <!-- card 5 -->
      <div class="service-card active basis-full sm:basis-1/2 lg:basis-1/3 px-15px mb-30px">
      <div
        class="border border-border-color-1 shadow-box-shadow-1 bg-white relative py-10 pb-35px px-30px transition-all duration-300">
        <div class="text-center mb-5">
        <img src="/assets/new/Flexible_Payment_Plans.png" alt="" width="90" height="90" class="inline-block">
        </div>
        <h6 class="text-lg md:text-xl lg:text-22px xl:text-2xl text-heading-color font-bold">
        <a class="hover:text-secondary-color leading-1.3 mb-1" href="{{route('project.all') }}">Flexible Payment
          Plans
        </a>
        </h6>
        <p class="text-sm mb-25px">
        <span class="leading-1.8">We offer easy installment plans tailored to your budget — so you can invest in
          your dream home without financial stress or compromise on quality.</span>
        </p>
        <span
        class="hover-line absolute bottom-0 left-0 w-0 h-1 bg-secondary-color transition-all duration-300 block"></span>
      </div>
      </div>
      <!-- card 6 -->
      <div class="service-card basis-full sm:basis-1/2 lg:basis-1/3 px-15px mb-30px">
      <div
        class="border border-border-color-1 shadow-box-shadow-1 bg-white relative py-10 pb-35px px-30px transition-all duration-300">
        <div class="text-center mb-5">
        <img src="/assets/new/Modern_Amenities.png" alt="" width="80" height="80" class="inline-block">
        </div>
        <h6 class="text-lg md:text-xl lg:text-22px xl:text-2xl text-heading-color font-bold">
        <a class="hover:text-secondary-color leading-1.3 mb-1" href="{{route('project.all') }}">Modern Amenities
        </a>
        </h6>
        <p class="text-sm mb-25px">
        <span class="leading-1.8">Our developments include essentials like lift, gym, parking, backup power, and
          community space — delivering comfort, wellness, and convenience under one secure roof.</span>
        </p>
        <span
        class="hover-line absolute bottom-0 left-0 w-0 h-1 bg-secondary-color transition-all duration-300 block"></span>
      </div>
      </div>

    </div>
    </div>
  </section>
  <!-- featured appartments  section -->
  <!-- <section>
    <div class="container-3 pt-115px pb-[75px] modal-container">

    <div class="text-center mb-50px">
      <p
      class="text-sm md:text-15px lg:text-base text-secondary-color bg-secondary-color bg-opacity-10 capitalize 1b-15px py-0.5 px-5 mb-15px rounded-full inline-block font-semibold">
      <span class="leading-1.3">Properties</span>
      </p>
      <h2
      class="text-2xl sm:text-3xl md:text-26px lg:text-3xl xl:text-44px text-heading-color font-bold">
      <span class="leading-1.3">Featured Listings </span>
      </h2>
    </div>
    <div class="featured-apartments swiper-container relative">

      <div class="swiper featured-apartments-slider static">
      <div class="swiper-wrapper">

      @foreach ($projects as $project)

      <div class="swiper-slide mb-65px px-15px">
      <div
        class="group border border-border-color-13 shadow-box-shadow-4">

        <div class="relative leading-1">
        <a
        href="{{route ('project.show', $project->slug)}}"
        class="overflow-hidden">
        <img
        src="{{asset('storage/'. $project->image1)}}"
        class="w-full group-hover:scale-110 transition-all duration-700"
        alt="">
        </a>
        <div
        class="absolute w-full left-0 bottom-0 px-15px pb-15px lg:px-30px bg-transparent bg-gradient-color-5">
        <div
        class="text-sm text-white flex justify-between items-center">
        <a
          href="{{route ('project.all') }}"
          class="hover:text-secondary-color"><i class="flaticon-pin"></i> {{$project->address}}</a>
        <ul class="flex gap-10px">
          <li>
          <a
          class="w-30px lg:w-42px h-30px flex justify-center items-center bg-transparent lg:bg-white lg:bg-opacity-35 hover:text-secondary-color"
          href="{{route ('project.all') }}"><i class="fas fa-camera pr-1 leading-1"></i>
          4</a>
          </li>
          <li>
          <a
          class="w-30px lg:w-42px h-30px flex justify-center items-center bg-transparent lg:bg-white lg:bg-opacity-35 hover:text-secondary-color"
          href="{{route ('project.all') }}"><i class="fas fa-film pr-1 leading-1"></i> 2</a>
          </li>
        </ul>
        </div>
        </div>
        <div
        class="text-xs sm:text-13px text-white px-10px py-1 sm:px-15px sm:pt-3px sm:pb-0 bg-green uppercase font-semibold absolute top-[15px] right-[18px]">
        <span class="leading-5 sm:leading-25px block">{{$project->place}}</span>
        </div>
        </div>

        <div class="px-5 pt-4 lg:px-30px lg:pt-5">
        <h5
        class="text-lg text-secondary-color font-semibold mb-5px">
        <span class="leading-1.8">৳{{$project->price}}</span>
        <label class="text-sm font-normal">/Month</label>
        </h5>
        <h4
        class="text-lg md:text-xl lg:text-22px font-semibold text-heading-color mb-15px">
        <a
        href="{{route ('project.show', $project->slug)}}"
        class="hover:text-secondary-color leading-1.3">{{$project->title}}</a>
        </h4>
        <p class="text-sm mb-15px">
        <span class="leading-1.8">{{$project->address}}</span>
        </p>

        <ul class="flex flex-wrap gap-15px py-4">

        <li class="text-sm">
        <p class="leading-1.8 font-bold">
          {{$project->squareft}}<i
          class="flaticon-square-shape-design-interface-tool-symbol ml-1"></i>
        </p>
        <p class="leading-1.8">square Ft</p>
        </li>
        </ul>
        </div>

        <div
        class="p-5 lg:p-30px lg:pt-5 border-t border-border-color-1">
        <div
        class="flex flex-wrap-reverse items-center justify-between gap-y-5">
        <ul class="flex gap-x-2">
        <li>
          <button
          class="modal-open w-9 h-9 flex items-center justify-center bg-section-bg-1 text-center hover:bg-secondary-color hover:text-white font-bold"
          data-modal-index="1">
          <i class="flaticon-expand leading-1"></i>
          </button>
        </li>
        <li>
          <button
          class="modal-open w-9 h-9 flex items-center justify-center bg-section-bg-1 text-center hover:bg-secondary-color hover:text-white font-bold"
          data-modal-index="2">
          <i class="flaticon-heart-1 leading-1"></i>
          </button>
        </li>
        <li>
          <a
          href="{{route ('project.all') }}"
          class="w-9 h-9 flex items-center justify-center bg-section-bg-1 text-center hover:bg-secondary-color hover:text-white font-bold"><i class="flaticon-add leading-1"></i></a>
        </li>
        </ul>
        </div>
        </div>
      </div>
      @endforeach
      </div>


      </div>


      <div
      class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal !-bottom-[6px]">
      <span
      class="swiper-pagination-bullet"
      tabindex="0"
      role="button"
      aria-label="Go to slide 1"></span><span
      class="swiper-pagination-bullet swiper-pagination-bullet-active"
      tabindex="0"
      role="button"
      aria-label="Go to slide 2"
      aria-current="true"></span><span
      class="swiper-pagination-bullet"
      tabindex="0"
      role="button"
      aria-label="Go to slide 3"></span>
      </div>

      <div class="hidden 3xl:block">
      <div class="swiper-button-next z-1">
      <i class="fas fa-arrow-right"></i>
      </div>
      <div class="swiper-button-prev z-1">
      <i class="fas fa-arrow-left"></i>
      </div>
      </div>
      </div>
    </div>

    </div>
    </section> -->


  <!-- counter section -->
  <section class="bg-section-bg-1">
    <div class="container pt-30 pb-70px">
    <div class="text-center counter grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-30px mb-45px -mt-3">
      <!-- count 1 -->
      <div>
      <div class="text-65px text-secondary-color">
        <i class="flaticon-select leading-1"></i>
      </div>
      <h5 class="text-3xl md:text-4xl lg:text-42px text-heading-color font-bold mb-10px">
        <span class="leading-1.3" data-countup-number="560">560</span><span>+</span>
      </h5>
      <p class="text-sm lg:text-base font-bold">
        <span class="leading-1.8">Total Area Sq</span>
      </p>
      </div>
      <!-- count 2 -->
      <div>
      <div class="text-65px text-secondary-color">
        <i class="flaticon-office leading-1"></i>
      </div>
      <h5 class="text-3xl md:text-4xl lg:text-42px text-heading-color font-bold mb-10px">
        <span class="leading-1.3" data-countup-number="97">97</span><span>+</span>
      </h5>
      <p class="text-sm lg:text-base font-bold">
        <span class="leading-1.8">Apartments Sold</span>
      </p>
      </div>
      <!-- count 3 -->
      <div>
      <div class="text-65px text-secondary-color">
        <i class="flaticon-excavator leading-1"></i>
      </div>
      <h5 class="text-3xl md:text-4xl lg:text-42px text-heading-color font-bold mb-10px">
        <span class="leading-1.3" data-countup-number="30">30</span><span>+</span>
      </h5>
      <p class="text-sm lg:text-base font-bold">
        <span class="leading-1.8">Total Constructions</span>
      </p>
      </div>
      <!-- count 4 -->
      <div>
      <div class="text-65px text-secondary-color">
        <i class="flaticon-armchair leading-1"></i>
      </div>
      <h5 class="text-3xl md:text-4xl lg:text-42px text-heading-color font-bold mb-10px">
        <span class="leading-1.3" data-countup-number="340">340</span><span>+</span>
      </h5>
      <p class="text-sm lg:text-base font-bold">
        <span class="leading-1.8">Apartio Rooms</span>
      </p>
      </div>
    </div>
    </div>
  </section>



  <!--  fixed popup-->
  <div
    class="w-full min-h-80 md:min-h-350px flex items-center justify-center bg-[url('../img/bg/19.jpg')] bg-cover bg-center bg-no-repeat bg-fixed relative z-0">
    <div class="w-full h-full bg-black bg-opacity-30 absolute top-0 left-0 -z-1"></div>
    <a class="glightbox2 w-50px h-50px lg:w-20 lg:h-20 text-center lg:text-lg text-secondary-color shadow-box-shadow-2 rounded-full bg-white flex items-center justify-center animate-pulse1"
    href="{{$homes->url}}" data-glightbox="type: video;">
    <i class="icon-play"></i>
    </a>
  </div>
  <!-- features section -->
  <section>
    <div class="container pt-115px pb-90px">
    <!-- section heading -->
    <div class="text-center mb-50px">
      <p
      class="text-sm md:text-15px lg:text-base text-secondary-color bg-secondary-color bg-opacity-10 capitalize 1b-15px py-0.5 px-5 mb-15px rounded-full inline-block font-semibold">
      <span class="leading-1.3">Our Amenities</span>
      </p>
      <h2 class="text-2xl sm:text-3xl md:text-26px lg:text-3xl xl:text-44px text-heading-color font-bold">
      <span class="leading-1.3">Building Amenities </span>
      </h2>
    </div>

    <div class="flex flex-wrap items-center justify-center -mx-15px px-7px md:px-0">
      <!-- card 1 -->
      <div class="basis-1/2 md:basis-1/3 lg:basis-1/4 px-2 md:px-15px mb-50px">
      <div
        class="pt-10 pb-35px px-15px md:px-5 xl:px-30px bg-white hover:bg-secondary-color transition-all duration-300 shadow-box-shadow-4 rounded-10px flex flex-col items-center group relative">

        <span
        class="block w-60px md:w-20 xl:w-100px h-60px md:h-20 xl:h-100px text-25px md:text-3xl xl:text-45px bg-section-bg-5 rounded-100% transition-all duration-300 group-hover:bg-white text-secondary-color mb-5 text-center leading-1">
        <i class="flaticon-car leading-65px md:leading-90px xl:leading-110px"></i>
        </span>

        <span
        class="block text-13px md:text-lg xl:text-22px transition-all duration-300 text-heading-color group-hover:text-white mb-5 font-poppins font-semibold leading-1.8 capitalize">
        Parking Space
        </span>

        <!-- <span class="text-lg w-45px h-45px border border-border-color-8 shadow-box-shadow-2 rounded-100% bg-white group-hover:text-secondary-color transition-all duration-300 text-center block absolute bottom-0 left-1/2 -translate-x-1/2 translate-y-1/2">
      <i class="flaticon-right-arrow leading-12"></i>
    </span> -->

      </div>
      </div>

      <!-- card 2 -->
      <div class="basis-1/2 md:basis-1/3 lg:basis-1/4 px-2 md:px-15px mb-50px">
      <div
        class="pt-10 pb-35px px-15px md:px-5 xl:px-30px bg-white hover:bg-secondary-color transition-all duration-300 shadow-box-shadow-4 rounded-10px flex flex-col items-center group relative cursor-default">

        <span
        class="block w-60px md:w-20 xl:w-100px h-60px md:h-20 xl:h-100px text-25px md:text-3xl xl:text-45px bg-section-bg-5 rounded-100% transition-all duration-300 group-hover:bg-white text-secondary-color mb-5 text-center leading-1">
        <i class="flaticon-swimming leading-65px md:leading-90px xl:leading-110px"></i>
        </span>

        <span
        class="block text-13px md:text-lg xl:text-22px transition-all duration-300 text-heading-color group-hover:text-white mb-5 font-poppins font-semibold leading-1.8 capitalize">
        Swimming Pool
        </span>

        <!-- <span
      class="text-lg w-45px h-45px border border-border-color-8 shadow-box-shadow-2 rounded-100% bg-white group-hover:text-secondary-color transition-all duration-300 text-center block absolute bottom-0 left-1/2 -translate-x-1/2 translate-y-1/2">
      <i class="flaticon-right-arrow leading-12"></i>
    </span> -->

      </div>
      </div>

      <!-- card 3 -->
      <div class="basis-1/2 md:basis-1/3 lg:basis-1/4 px-2 md:px-15px mb-50px">
      <div
        class="pt-10 pb-35px px-15px md:px-5 xl:px-30px bg-white hover:bg-secondary-color transition-all duration-300 shadow-box-shadow-4 rounded-10px flex flex-col items-center group relative cursor-default">

        <span
        class="block w-60px md:w-20 xl:w-100px h-60px md:h-20 xl:h-100px text-25px md:text-3xl xl:text-45px bg-section-bg-5 rounded-100% transition-all duration-300 group-hover:bg-white text-secondary-color mb-5 text-center leading-1">
        <i class="flaticon-secure-shield leading-65px md:leading-90px xl:leading-110px"></i>
        </span>

        <span
        class="block text-13px md:text-lg xl:text-22px transition-all duration-300 text-heading-color group-hover:text-white mb-5 font-poppins font-semibold leading-1.8 capitalize">
        Private Security
        </span>

        <!-- <span
      class="text-lg w-45px h-45px border border-border-color-8 shadow-box-shadow-2 rounded-100% bg-white group-hover:text-secondary-color transition-all duration-300 text-center block absolute bottom-0 left-1/2 -translate-x-1/2 translate-y-1/2">
      <i class="flaticon-right-arrow leading-12"></i>
    </span> -->

      </div>
      </div>

      <!-- card 4 -->
      <div class="basis-1/2 md:basis-1/3 lg:basis-1/4 px-2 md:px-15px mb-50px">
      <div
        class="pt-10 pb-35px px-15px md:px-5 xl:px-30px bg-white hover:bg-secondary-color transition-all duration-300 shadow-box-shadow-4 rounded-10px flex flex-col items-center group relative cursor-default">

        <span
        class="block w-60px md:w-20 xl:w-100px h-60px md:h-20 xl:h-100px text-25px md:text-3xl xl:text-45px bg-section-bg-5 rounded-100% transition-all duration-300 group-hover:bg-white text-secondary-color mb-5 text-center leading-1">
        <i class="flaticon-stethoscope leading-65px md:leading-90px xl:leading-110px"></i>
        </span>

        <span
        class="block text-13px md:text-lg xl:text-22px transition-all duration-300 text-heading-color group-hover:text-white mb-5 font-poppins font-semibold leading-1.8 capitalize">
        Medical Center
        </span>

        <!-- <span
      class="text-lg w-45px h-45px border border-border-color-8 shadow-box-shadow-2 rounded-100% bg-white group-hover:text-secondary-color transition-all duration-300 text-center block absolute bottom-0 left-1/2 -translate-x-1/2 translate-y-1/2">
      <i class="flaticon-right-arrow leading-12"></i>
    </span> -->

      </div>
      </div>

      <!-- card 5 -->
      <div class="basis-1/2 md:basis-1/3 lg:basis-1/4 px-2 md:px-15px mb-50px">
      <div
        class="pt-10 pb-35px px-15px md:px-5 xl:px-30px bg-white hover:bg-secondary-color transition-all duration-300 shadow-box-shadow-4 rounded-10px flex flex-col items-center group relative cursor-default">

        <span
        class="block w-60px md:w-20 xl:w-100px h-60px md:h-20 xl:h-100px text-25px md:text-3xl xl:text-45px bg-section-bg-5 rounded-100% transition-all duration-300 group-hover:bg-white text-secondary-color mb-5 text-center leading-1">
        <i class="flaticon-book leading-65px md:leading-90px xl:leading-110px"></i>
        </span>

        <span
        class="block text-13px md:text-lg xl:text-22px transition-all duration-300 text-heading-color group-hover:text-white mb-5 font-poppins font-semibold leading-1.8 capitalize">
        Library Area
        </span>

        <!-- <span
      class="text-lg w-45px h-45px border border-border-color-8 shadow-box-shadow-2 rounded-100% bg-white group-hover:text-secondary-color transition-all duration-300 text-center block absolute bottom-0 left-1/2 -translate-x-1/2 translate-y-1/2">
      <i class="flaticon-right-arrow leading-12"></i>
    </span> -->

      </div>
      </div>

      <!-- card 6 -->
      <div class="basis-1/2 md:basis-1/3 lg:basis-1/4 px-2 md:px-15px mb-50px">
      <div
        class="pt-10 pb-35px px-15px md:px-5 xl:px-30px bg-white hover:bg-secondary-color transition-all duration-300 shadow-box-shadow-4 rounded-10px flex flex-col items-center group relative cursor-default">

        <span
        class="block w-60px md:w-20 xl:w-100px h-60px md:h-20 xl:h-100px text-25px md:text-3xl xl:text-45px bg-section-bg-5 rounded-100% transition-all duration-300 group-hover:bg-white text-secondary-color mb-5 text-center leading-1">
        <i class="flaticon-bed-1 leading-65px md:leading-90px xl:leading-110px"></i>
        </span>

        <span
        class="block text-13px md:text-lg xl:text-22px transition-all duration-300 text-heading-color group-hover:text-white mb-5 font-poppins font-semibold leading-1.8 capitalize">
        King Size Beds
        </span>

        <!-- <span
      class="text-lg w-45px h-45px border border-border-color-8 shadow-box-shadow-2 rounded-100% bg-white group-hover:text-secondary-color transition-all duration-300 text-center block absolute bottom-0 left-1/2 -translate-x-1/2 translate-y-1/2">
      <i class="flaticon-right-arrow leading-12"></i>
    </span> -->

      </div>
      </div>

      <!-- card 7 -->
      <div class="basis-1/2 md:basis-1/3 lg:basis-1/4 px-2 md:px-15px mb-50px">
      <div
        class="pt-10 pb-35px px-15px md:px-5 xl:px-30px bg-white hover:bg-secondary-color transition-all duration-300 shadow-box-shadow-4 rounded-10px flex flex-col items-center group relative">
        <span
        class="block w-60px md:w-20 xl:w-100px h-60px md:h-20 xl:h-100px text-25px md:text-3xl xl:text-45px bg-section-bg-5 rounded-100% transition-all duration-300 group-hover:bg-white text-secondary-color mb-5 text-center leading-1">
        <i class="flaticon-home-2 leading-65px md:leading-90px xl:leading-110px"></i>
        </span>
        <span
        class="block text-13px md:text-lg xl:text-22px transition-all duration-300 text-heading-color group-hover:text-white mb-5 font-poppins font-semibold leading-1.8 capitalize">
        Smart Homes
        </span>

        <!-- <span
      class="text-lg w-45px h-45px border border-border-color-8 shadow-box-shadow-2 rounded-100% bg-white group-hover:text-secondary-color transition-all duration-300 text-center block absolute bottom-0 left-1/2 -translate-x-1/2 translate-y-1/2">
      <i class="flaticon-right-arrow leading-12"></i>
      </span> -->
      </div>
      </div>
      <!-- card 8 -->
      <div class="basis-1/2 md:basis-1/3 lg:basis-1/4 px-2 md:px-15px mb-50px">
      <div
        class="pt-10 pb-35px px-15px md:px-5 xl:px-30px bg-white hover:bg-secondary-color transition-all duration-300 shadow-box-shadow-4 rounded-10px flex flex-col items-center group relative cursor-default">

        <span
        class="block w-60px md:w-20 xl:w-100px h-60px md:h-20 xl:h-100px text-25px md:text-3xl xl:text-45px bg-section-bg-5 rounded-100% transition-all duration-300 group-hover:bg-white text-secondary-color mb-5 text-center leading-1">
        <i class="flaticon-slider leading-65px md:leading-90px xl:leading-110px"></i>
        </span>

        <span
        class="block text-13px md:text-lg xl:text-22px transition-all duration-300 text-heading-color group-hover:text-white mb-5 font-poppins font-semibold leading-1.8 capitalize">
        Kid’s Playland
        </span>

        <!-- <span
      class="text-lg w-45px h-45px border border-border-color-8 shadow-box-shadow-2 rounded-100% bg-white group-hover:text-secondary-color transition-all duration-300 text-center block absolute bottom-0 left-1/2 -translate-x-1/2 translate-y-1/2">
      <i class="flaticon-right-arrow leading-12"></i>
    </span> -->

      </div>
      </div>

    </div>
    </div>
  </section>
  <!-- testimonials section -->
  <!-- <section>
      <div class="bg-[url('../img/bg/20.jpg')] bg-top bg-no-repeat">
      <div class="container pt-115px pb-55px">

      <div class="text-center mb-50px">
        <p
        class="text-sm md:text-15px lg:text-base text-secondary-color bg-secondary-color bg-opacity-10 capitalize 1b-15px py-0.5 px-5 mb-15px rounded-full inline-block font-semibold"
        >
        <span class="leading-1.3">Our Testimonial</span>
        </p>
        <h2
        class="text-2xl sm:text-3xl md:text-26px lg:text-3xl xl:text-44px text-heading-color font-bold"
        >
        <span class="leading-1.3">Clients Feedback </span>
        </h2>
      </div>

      <div
        class="testimonials-slider-container swiper-container relative -mx-15px"
      >

        <div class="swiper testimonials-slider static">
        <div class="swiper-wrapper">

        <div class="swiper-slide mb-65px lg:mb-50px px-15px">
        <div
          class="pt-25px pb-10 px-35px group border border-border-color-13 shadow-box-shadow-4 rounded-10px bg-white cursor-default relative"
        >

          <div>
          <p class="text-sm md:text-base mb-5 md:mb-6 xl:mb-27px">
          <span
          class="text-3xl mr-0.5 translate-y-2 inline-block"
          ><i
            class="flaticon-left-quote-1 group-hover:text-secondary-color transition-all duration-300"
          ></i
          ></span>
          <span class="leading-1.8">
          Precious ipsum dolor sit amet consectetur
          adipisicing elit, sed dos mod tempor incididunt ut
          labore et dolore magna aliqua. Ut enim ad min
          veniam, quis nostrud Precious ips um dolor sit amet,
          consecte</span
          >
          </p>
          </div>

          <div>
          <div>
          <div
          class="flex flex-wrap md:flex-nowrap gap-x-15px gap-y-10px items-center"
          >
          <div class="w-60px h-60px flex-shrink-0">
            <img
            src="./assets/img/testimonial/1.jpg"
            alt=""
            class="w-full h-full rounded-100%"
            >
          </div>
          <div>
            <h4
            class="text-base lg:text-lg font-semibold text-heading-color mb-0"
            >
            <span
            class="leading-1.3 hover:text-secondary-color"
            >Jacob William</span
            >
            </h4>

            <span class="text-sm uppercase">
            Selling Agents
            </span>
          </div>
          </div>
          </div>
          </div>
          <span
          class="hover-line absolute bottom-0 left-0 w-0 group-hover:w-full h-1 bg-secondary-color transition-all duration-300 block"
          ></span>
        </div>
        </div>

        <div class="swiper-slide mb-65px px-15px">
        <div
          class="pt-25px pb-10 px-35px group border border-border-color-13 shadow-box-shadow-4 rounded-10px bg-white cursor-default relative"
        >

          <div>
          <p class="text-sm md:text-base mb-5 md:mb-6 xl:mb-27px">
          <span
          class="text-3xl mr-0.5 translate-y-2 inline-block"
          ><i
            class="flaticon-left-quote-1 group-hover:text-secondary-color transition-all duration-300"
          ></i
          ></span>
          <span class="leading-1.8">
          Precious ipsum dolor sit amet consectetur
          adipisicing elit, sed dos mod tempor incididunt ut
          labore et dolore magna aliqua. Ut enim ad min
          veniam, quis nostrud Precious ips um dolor sit amet,
          consecte</span
          >
          </p>
          </div>

          <div>
          <div>
          <div class="flex gap-x-15px gap-y-10px items-center">
          <div class="w-60px h-60px flex-shrink-0">
            <img
            src="./assets/img/testimonial/2.jpg"
            alt=""
            class="w-full h-full rounded-100%"
            >
          </div>
          <div>
            <h4
            class="text-base lg:text-lg font-semibold text-heading-color mb-0"
            >
            <span
            class="leading-1.3 hover:text-secondary-color"
            >Kelian Anderson</span
            >
            </h4>

            <span class="text-sm uppercase">
            Selling Agents
            </span>
          </div>
          </div>
          </div>
          </div>
          <span
          class="hover-line absolute bottom-0 left-0 w-0 group-hover:w-full h-1 bg-secondary-color transition-all duration-300 block"
          ></span>
        </div>
        </div>

        <div class="swiper-slide mb-65px lg:mb-50px px-15px">
        <div
          class="pt-25px pb-10 px-35px group border border-border-color-13 shadow-box-shadow-4 rounded-10px bg-white cursor-default relative"
        >

          <div>
          <p class="text-sm md:text-base mb-5 md:mb-6 xl:mb-27px">
          <span
          class="text-3xl mr-0.5 translate-y-2 inline-block"
          ><i
            class="flaticon-left-quote-1 group-hover:text-secondary-color transition-all duration-300"
          ></i
          ></span>
          <span class="leading-1.8">
          Precious ipsum dolor sit amet consectetur
          adipisicing elit, sed dos mod tempor incididunt ut
          labore et dolore magna aliqua. Ut enim ad min
          veniam, quis nostrud Precious ips um dolor sit amet,
          consecte</span
          >
          </p>
          </div>

          <div>
          <div>
          <div class="flex gap-x-15px gap-y-10px items-center">
          <div class="w-60px h-60px flex-shrink-0">
            <img
            src="./assets/img/testimonial/3.jpg"
            alt=""
            class="w-full h-full rounded-100%"
            >
          </div>
          <div>
            <h4
            class="text-base lg:text-lg font-semibold text-heading-color mb-0"
            >
            <span
            class="leading-1.3 hover:text-secondary-color"
            >Adam Joseph</span
            >
            </h4>

            <span class="text-sm uppercase">
            Selling Agents
            </span>
          </div>
          </div>
          </div>
          </div>
          <span
          class="hover-line absolute bottom-0 left-0 w-0 group-hover:w-full h-1 bg-secondary-color transition-all duration-300 block"
          ></span>
        </div>
        </div>

        <div class="swiper-slide mb-65px lg:mb-50px px-15px">
        <div
          class="pt-25px pb-10 px-35px group border border-border-color-13 shadow-box-shadow-4 rounded-10px bg-white cursor-default relative"
        >

          <div>
          <p class="text-sm md:text-base mb-5 md:mb-6 xl:mb-27px">
          <span
          class="text-3xl mr-0.5 translate-y-2 inline-block"
          ><i
            class="flaticon-left-quote-1 group-hover:text-secondary-color transition-all duration-300"
          ></i
          ></span>
          <span class="leading-1.8">
          Precious ipsum dolor sit amet consectetur
          adipisicing elit, sed dos mod tempor incididunt ut
          labore et dolore magna aliqua. Ut enim ad min
          veniam, quis nostrud Precious ips um dolor sit amet,
          consecte</span
          >
          </p>
          </div>

          <div>
          <div>
          <div class="flex gap-x-15px gap-y-10px items-center">
          <div class="w-60px h-60px flex-shrink-0">
            <img
            src="./assets/img/testimonial/4.jpg"
            alt=""
            class="w-full h-full rounded-100%"
            >
          </div>
          <div>
            <h4
            class="text-base lg:text-lg font-semibold text-heading-color mb-0"
            >
            <span
            class="leading-1.3 hover:text-secondary-color"
            >James Carter</span
            >
            </h4>

            <span class="text-sm uppercase">
            Selling Agents
            </span>
          </div>
          </div>
          </div>
          </div>
          <span
          class="hover-line absolute bottom-0 left-0 w-0 group-hover:w-full h-1 bg-secondary-color transition-all duration-300 block"
          ></span>
        </div>
        </div>
        </div>


        <div
        class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal !-bottom-[6px] block lg:hidden"
        >
        <span
        class="swiper-pagination-bullet"
        tabindex="0"
        role="button"
        aria-label="Go to slide 1"
        ></span
        ><span
        class="swiper-pagination-bullet swiper-pagination-bullet-active"
        tabindex="0"
        role="button"
        aria-label="Go to slide 2"
        aria-current="true"
        ></span
        ><span
        class="swiper-pagination-bullet"
        tabindex="0"
        role="button"
        aria-label="Go to slide 3"
        ></span>
        </div>

        <div class="hidden lg:block">
        <div class="swiper-button-next bg-white z-1">
        <i class="fas fa-arrow-right" ></i>
        </div>
        <div class="swiper-button-prev bg-white z-1">
        <i class="fas fa-arrow-left" ></i>
        </div>
        </div>
        </div>
      </div>
      </div>
      </div>
      </section> -->


  <!-- <section>
      <div>
      <div class="container pb-70px">

      <div class="text-center mb-50px">
        <p
        class="text-sm md:text-15px lg:text-base text-secondary-color bg-secondary-color bg-opacity-10 capitalize 1b-15px py-0.5 px-5 mb-15px rounded-full inline-block font-semibold"
        >
        <span class="leading-1.3">News & Blogs</span>
        </p>
        <h2
        class="text-2xl sm:text-3xl md:text-26px lg:text-3xl xl:text-44px text-heading-color font-bold"
        >
        <span class="leading-1.3">Leatest News Feeds </span>
        </h2>
      </div>

      <div
        class="news-slider-container swiper-container relative -mx-15px"
      >

        <div class="swiper news-slider static">
        <div class="swiper-wrapper">

        <div
        class="swiper-slide mb-65px xl:mb-50px px-15px cursor-default"
        >
        <div class="group">

          <div class="relative leading-1">
          <a href="{{route ('blog') }}" class="overflow-hidden">
          <img
          src="./assets/img/blog/1.jpg"
          class="w-full group-hover:scale-110 transition-all duration-700"
          alt=""
          >
          </a>
          </div>

          <div class="p-30px shadow-box-shadow-4">
          <ul class="mb-15px flex gap-x-25px items-center">
          <li class="text-xs md:text-sm font-semibold">
          <a
            href="#"
            class="leading-1.8 hover:text-secondary-color flex gap-5px items-center"
            ><i class="far fa-user text-secondary-color"></i>
            by: Admin</a
          >
          </li>
          <li class="text-xs md:text-sm font-semibold">
          <a
            href="#"
            class="leading-1.8 hover:text-secondary-color flex gap-5px items-center"
            ><i class="fas fa-tags text-secondary-color"></i>
            Room</a
          >
          </li>
          </ul>
          <h4
          class="text-lg md:text-xl lg:text-22px font-semibold text-heading-color"
          >
          <a
          href="{{route ('blog') }}"
          class="hover:text-secondary-color leading-1.3"
          >10 Brilliant Ways To Decorate Your Home</a
          >
          </h4>
          <div
          class="pt-5 mt-5 lg:pt-5 border-t border-border-color-1"
          >
          <ul class="flex justify-between items-center">
          <li class="text-xs md:text-sm font-semibold">
            <p class="leading-1.8 flex gap-5px items-center">
            <i
            class="far fa-calendar-alt text-secondary-color"
            ></i>
            June 24, 2024
            </p>
          </li>
          <li class="text-xs md:text-sm font-semibold">
            <a
            href="{{route ('blog') }}"
            class="leading-1.8 text-secondary-color uppercase"
            >
            Read more</a
            >
          </li>
          </ul>
          </div>
          </div>
        </div>
        </div>

        <div
        class="swiper-slide mb-65px xl:mb-50px px-15px cursor-default"
        >
        <div class="group">

          <div class="relative leading-1">
          <a href="{{route ('blog') }}" class="overflow-hidden">
          <img
          src="./assets/img/blog/2.jpg"
          class="w-full group-hover:scale-110 transition-all duration-700"
          alt=""
          >
          </a>
          </div>

          <div class="p-30px shadow-box-shadow-4">
          <ul class="mb-15px flex gap-x-25px items-center">
          <li class="text-xs md:text-sm font-semibold">
          <a
            href="#"
            class="leading-1.8 hover:text-secondary-color flex gap-5px items-center"
            ><i class="far fa-user text-secondary-color"></i>
            by: Admin</a
          >
          </li>
          <li class="text-xs md:text-sm font-semibold">
          <a
            href="#"
            class="leading-1.8 hover:text-secondary-color flex gap-5px items-center"
            ><i class="fas fa-tags text-secondary-color"></i>
            Interior</a
          >
          </li>
          </ul>
          <h4
          class="text-lg md:text-xl lg:text-22px font-semibold text-heading-color"
          >
          <a
          href="{{route ('blog') }}"
          class="hover:text-secondary-color leading-1.3"
          >The Most Inspiring Interior Design Of 2024</a
          >
          </h4>
          <div
          class="pt-5 mt-5 lg:pt-5 border-t border-border-color-1"
          >
          <ul class="flex justify-between items-center">
          <li class="text-xs md:text-sm font-semibold">
            <p class="leading-1.8 flex gap-5px items-center">
            <i
            class="far fa-calendar-alt text-secondary-color"
            ></i>
            June 21, 2024
            </p>
          </li>
          <li class="text-xs md:text-sm font-semibold">
            <a
            href="{{route ('blog') }}"
            class="leading-1.8 text-secondary-color uppercase"
            >
            Read more</a
            >
          </li>
          </ul>
          </div>
          </div>
        </div>
        </div>

        <div
        class="swiper-slide mb-65px xl:mb-50px px-15px cursor-default"
        >
        <div class="group">

          <div class="relative leading-1">
          <a href="{{route ('blog') }}" class="overflow-hidden">
          <img
          src="./assets/img/blog/3.jpg"
          class="w-full group-hover:scale-110 transition-all duration-700"
          alt=""
          >
          </a>
          </div>

          <div class="p-30px shadow-box-shadow-4">
          <ul class="mb-15px flex gap-x-25px items-center">
          <li class="text-xs md:text-sm font-semibold">
          <a
            href="#"
            class="leading-1.8 hover:text-secondary-color flex gap-5px items-center"
            ><i class="far fa-user text-secondary-color"></i>
            by: Admin</a
          >
          </li>
          <li class="text-xs md:text-sm font-semibold">
          <a
            href="#"
            class="leading-1.8 hover:text-secondary-color flex gap-5px items-center"
            ><i class="fas fa-tags text-secondary-color"></i>
            Estate</a
          >
          </li>
          </ul>
          <h4
          class="text-lg md:text-xl lg:text-22px font-semibold text-heading-color"
          >
          <a
          href="{{route ('blog') }}"
          class="hover:text-secondary-color leading-1.3"
          >Recent Commercial Real Estate Transactions</a
          >
          </h4>
          <div
          class="pt-5 mt-5 lg:pt-5 border-t border-border-color-1"
          >
          <ul class="flex justify-between items-center">
          <li class="text-xs md:text-sm font-semibold">
            <p class="leading-1.8 flex gap-5px items-center">
            <i
            class="far fa-calendar-alt text-secondary-color"
            ></i>
            June 22, 2024
            </p>
          </li>
          <li class="text-xs md:text-sm font-semibold">
            <a
            href="{{route ('blog') }}"
            class="leading-1.8 text-secondary-color uppercase"
            >
            Read more</a
            >
          </li>
          </ul>
          </div>
          </div>
        </div>
        </div>

        <div
        class="swiper-slide mb-65px xl:mb-50px px-15px cursor-default"
        >
        <div class="group">

          <div class="relative leading-1">
          <a href="{{route ('blog') }}" class="overflow-hidden">
          <img
          src="./assets/img/blog/4.jpg"
          class="w-full group-hover:scale-110 transition-all duration-700"
          alt=""
          >
          </a>
          </div>

          <div class="p-30px shadow-box-shadow-4">
          <ul class="mb-15px flex gap-x-25px items-center">
          <li class="text-xs md:text-sm font-semibold">
          <a
            href="#"
            class="leading-1.8 hover:text-secondary-color flex gap-5px items-center"
            ><i class="far fa-user text-secondary-color"></i>
            by: Admin</a
          >
          </li>
          <li class="text-xs md:text-sm font-semibold">
          <a
            href="#"
            class="leading-1.8 hover:text-secondary-color flex gap-5px items-center"
            ><i class="fas fa-tags text-secondary-color"></i>
            Room</a
          >
          </li>
          </ul>
          <h4
          class="text-lg md:text-xl lg:text-22px font-semibold text-heading-color"
          >
          <a
          href="{{route ('blog') }}"
          class="hover:text-secondary-color leading-1.3"
          >Renovating a Living Room? Experts Share Their
          Secrets</a
          >
          </h4>
          <div
          class="pt-5 mt-5 lg:pt-5 border-t border-border-color-1"
          >
          <ul class="flex justify-between items-center">
          <li class="text-xs md:text-sm font-semibold">
            <p class="leading-1.8 flex gap-5px items-center">
            <i
            class="far fa-calendar-alt text-secondary-color"
            ></i>
            June 24, 2024
            </p>
          </li>
          <li class="text-xs md:text-sm font-semibold">
            <a
            href="{{route ('blog') }}"
            class="leading-1.8 text-secondary-color uppercase"
            >
            Read more</a
            >
          </li>
          </ul>
          </div>
          </div>
        </div>
        </div>

        <div
        class="swiper-slide mb-65px xl:mb-50px px-15px cursor-default"
        >
        <div class="group">

          <div class="relative leading-1">
          <a href="{{route ('blog') }}" class="overflow-hidden">
          <img
          src="./assets/img/blog/5.jpg"
          class="w-full group-hover:scale-110 transition-all duration-700"
          alt=""
          >
          </a>
          </div>

          <div class="p-30px shadow-box-shadow-4">
          <ul class="mb-15px flex gap-x-25px items-center">
          <li class="text-xs md:text-sm font-semibold">
          <a
            href="#"
            class="leading-1.8 hover:text-secondary-color flex gap-5px items-center"
            ><i class="far fa-user text-secondary-color"></i>
            by: Admin</a
          >
          </li>
          <li class="text-xs md:text-sm font-semibold">
          <a
            href="#"
            class="leading-1.8 hover:text-secondary-color flex gap-5px items-center"
            ><i class="fas fa-tags text-secondary-color"></i>
            Trends</a
          >
          </li>
          </ul>
          <h4
          class="text-lg md:text-xl lg:text-22px font-semibold text-heading-color"
          >
          <a
          href="{{route ('blog') }}"
          class="hover:text-secondary-color leading-1.3"
          >7 home trends that will shape your house in 2024</a
          >
          </h4>
          <div
          class="pt-5 mt-5 lg:pt-5 border-t border-border-color-1"
          >
          <ul class="flex justify-between items-center">
          <li class="text-xs md:text-sm font-semibold">
            <p class="leading-1.8 flex gap-5px items-center">
            <i
            class="far fa-calendar-alt text-secondary-color"
            ></i>
            June 24, 2024
            </p>
          </li>
          <li class="text-xs md:text-sm font-semibold">
            <a
            href="{{route ('blog') }}"
            class="leading-1.8 text-secondary-color uppercase"
            >
            Read more</a
            >
          </li>
          </ul>
          </div>
          </div>
        </div>
        </div>
        </div>


        <div
        class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal !-bottom-[6px] block xl:hidden"
        >
        <span
        class="swiper-pagination-bullet"
        tabindex="0"
        role="button"
        aria-label="Go to slide 1"
        ></span
        ><span
        class="swiper-pagination-bullet swiper-pagination-bullet-active"
        tabindex="0"
        role="button"
        aria-label="Go to slide 2"
        aria-current="true"
        ></span
        ><span
        class="swiper-pagination-bullet"
        tabindex="0"
        role="button"
        aria-label="Go to slide 3"
        ></span>
        </div>

        <div class="hidden xl:block">
        <div class="swiper-button-next bg-white z-1">
        <i class="fas fa-arrow-right" ></i>
        </div>
        <div class="swiper-button-prev bg-white z-1">
        <i class="fas fa-arrow-left" ></i>
        </div>
        </div>
        </div>
      </div>
      </div>
      </div>
      </section> -->


  </main>


  <!-- scroll top -->
  <button
    class="scroll-up w-30px h-30px lg:w-10 lg:h-10 lg:text-xl bg-section-bg-1 text-heading-color hover:bg-secondary-color hover:text-white rotate-[45deg] shadow-box-shadow-3 fixed bottom-[50px] lg:bottom-[70px] right-[3%] flex justify-center items-center z-xl">
    <i class="fa fa-angle-up leading-1 -rotate-[45deg] inline-block"></i>
  </button>

  <!-- <script>
    new Swiper(".custom-swiper", {
    loop: true,
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },
    speed: 600,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    });
    </script> -->









@endsection