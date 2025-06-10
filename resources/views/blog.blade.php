
@extends('layout.layout')

@php
    $title='Magpie | News and Updates';
@endphp

@section('content')
   



      <!-- banner section -->
      <section>
        <!-- banner section -->
        <div
          class="w-full bg-[url('../img/bg/14.jpg')] bg-no-repeat bg-cover bg-center relative z-0 after:w-full after:h-full after:absolute after:top-0 after:left-0 after:bg-white after:bg-opacity-30 after:-z-1"
        >
          <div class="container py-110px">
            <h1
              class="text-2xl sm:text-3xl md:text-26px lg:text-3xl xl:text-4xl font-bold text-heading-color mb-15px"
            >
              <span
                class="leading-1.3 md:leading-1.3 lg:leading-1.3 xl:leading-1.3"
                >News Feeds</span
              >
            </h1>
            <ul
              class="breadcrumb flex gap-30px items-center text-sm lg:text-base font-bold pt-4"
            >
              <li class="home relative leading-1.8 lg:leading-1.8">
                <a href="index.html"
                  ><i class="fas fa-home text-secondary-color"></i> Home</a
                >
              </li>
              <li class="leading-1.8 lg:leading-1.8 text-heading-color">
                News and Updates
              </li>
            </ul>
          </div>
        </div>
      </section>

      <!-- news section -->
      <section>
        <div
          class="container modal-container property-tab pt-30 pb-140px lg:pb-30"
        >
          <div class="grid grid-cols-1 lg:grid-cols-12 gap-x-30px">
            <!-- news main content -->
            <div class="lg:col-start-1 lg:col-span-8">
              <!-- blog 1 -->
              <div class="border-2 border-border-color-11 mb-10">
                <!-- thumbnail  -->
                <div class="leading-1">
                  <a href="blog-details.html">
                    <img
                      src="./assets/img/blog/31.jpg"
                      class="w-full -mb-1"
                      alt=""
                    >
                  </a>
                </div>

                <!-- news body -->
                <div class="px-5 md:pl-45px md:pr-10 pt-10 pb-35px md:py-50px">
                  <!--  status -->

                  <!-- main -->
                  <div>
                    <ul class="mb-5">
                      <li>
                        <a
                          class="text-xs md:text-sm uppercase text-white px-15px pt-5px pb-0.5 bg-secondary-color hover:bg-primary-color hover:text-white font-semibold"
                          href="#"
                          ><span class="leading-1.8 md:leading-1.8"
                            >REAL ESTATE</span
                          ></a
                        >
                      </li>
                    </ul>

                    <h4
                      class="text-22px md:text-26px xl:text-3xl font-semibold text-heading-color mb-5"
                    >
                      <a
                        href="blog-details.html"
                        class="leading-1.3 md:leading-1.3 xl:leading-1.3"
                        >Real estate is property consisting of land and the
                        buildings on it, along with its</a
                      >
                    </h4>
                    <ul class="flex gap-x-15px md:gap-x-30px items-center mb-5">
                      <li>
                        <a href="#" class="text-xs md:text-sm font-semibold">
                          <span class="leading-1.8 md:leading-1.8"
                            ><i
                              class="far fa-eye text-secondary-color mr-5px"
                            ></i>
                            232 Views</span
                          >
                        </a>
                      </li>
                      <li>
                        <a class="text-xs md:text-sm font-semibold" href="#"
                          ><span class="leading-1.8 md:leading-1.8"
                            ><i
                              class="far fa-comments text-secondary-color mr-5px"
                            ></i>
                            35 Comments</span
                          ></a
                        >
                      </li>
                      <li>
                        <p class="text-xs md:text-sm font-semibold">
                          <span class="leading-1.8 md:leading-1.8"
                            ><i
                              class="far fa-calendar-alt text-secondary-color mr-5px"
                            ></i>
                            June 22, 2024</span
                          >
                        </p>
                      </li>
                    </ul>

                    <!-- Description -->

                    <p class="text-sm lg:text-base mb-5 lg:mb-6">
                      <span class="leading-1.8 lg:leading-1.8"
                        >Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua. Ut enim ad minim veniam, quis
                        nostrud exercitation ullamco laboris nisi ut aliquip ex
                        ea commodo consequat. Duis aute irure dolor in
                        reprehenderit in voluptate velit esse cillum
                        dolore</span
                      >
                    </p>
                    <!-- news footer -->
                    <div class="flex justify-between items-center pt-10px">
                      <div>
                        <a
                          href="team-details.html"
                          class="text-sm lg:text-base flex items-center gap-10px font-semibold"
                          ><img
                            src="./assets/img/blog/author.jpg"
                            alt=""
                            class="flex-shrink-0 w-10 h-10 rounded-100%"
                          >
                          <span>By: Ethan</span>
                        </a>
                      </div>
                      <div>
                        <a
                          href="blog-details.html"
                          class="text-sm flex items-center gap-1 font-bold text-heading-color"
                        >
                          <span class="leading-1.8"
                            ><i class="fas fa-arrow-right"></i>Read more</span
                          >
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- blog 2 -->
              <div class="border-2 border-border-color-11 mb-10">
                <!-- thumbnail  -->
                <div
                  class="relative leading-1 after:absolute after:left-0 after:top-0 after:w-full after:h-full after:bg-primary-color after:bg-opacity-30 after:z-1"
                >
                  <a href="blog-details.html" class="-mb-1">
                    <img
                      src="./assets/img/blog/32.jpg"
                      class="w-full"
                      alt=""
                    >
                  </a>

                  <div
                    class="absolute left-0 top-0 flex justify-center items-center h-full w-full z-10"
                  >
                    <a
                      class="glightbox3 w-50px h-50px lg:w-20 lg:h-20 text-center text-sm lg:text-base text-white shadow-box-shadow-2 rounded-100% bg-secondary-color hover:text-white flex items-center justify-center"
                      href="https://www.youtube.com/embed/X7R-q9rsrtU?autoplay=1&showinfo=0"
                      data-glightbox="type: video;"
                    >
                      <i class="icon-play"></i>
                    </a>
                  </div>
                </div>

                <!-- news body -->
                <div class="px-5 md:pl-45px md:pr-10 pt-10 pb-35px md:py-50px">
                  <!--  status -->

                  <!-- main -->
                  <div>
                    <ul class="mb-5">
                      <li>
                        <a
                          class="text-xs md:text-sm uppercase text-white px-15px pt-5px pb-0.5 bg-secondary-color hover:bg-primary-color hover:text-white font-semibold"
                          href="#"
                          ><span class="leading-1.8 md:leading-1.8"
                            >BUSINESS</span
                          ></a
                        >
                      </li>
                    </ul>

                    <h4
                      class="text-22px md:text-26px xl:text-3xl font-semibold text-heading-color mb-5"
                    >
                      <a
                        href="blog-details.html"
                        class="leading-1.3 md:leading-1.3 xl:leading-1.3"
                        >Adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore.</a
                      >
                    </h4>
                    <ul class="flex gap-x-15px md:gap-x-30px items-center mb-5">
                      <li>
                        <a href="#" class="text-xs md:text-sm font-semibold">
                          <span class="leading-1.8 md:leading-1.8"
                            ><i
                              class="far fa-eye text-secondary-color mr-5px"
                            ></i>
                            232 Views</span
                          >
                        </a>
                      </li>
                      <li>
                        <a class="text-xs md:text-sm font-semibold" href="#"
                          ><span class="leading-1.8 md:leading-1.8"
                            ><i
                              class="far fa-comments text-secondary-color mr-5px"
                            ></i>
                            35 Comments</span
                          ></a
                        >
                      </li>
                      <li>
                        <p class="text-xs md:text-sm font-semibold">
                          <span class="leading-1.8 md:leading-1.8"
                            ><i
                              class="far fa-calendar-alt text-secondary-color mr-5px"
                            ></i>
                            June 22, 2024</span
                          >
                        </p>
                      </li>
                    </ul>

                    <!-- Description -->

                    <p class="text-sm lg:text-base mb-5 lg:mb-6">
                      <span class="leading-1.8 lg:leading-1.8"
                        >Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua. Ut enim ad minim veniam, quis
                        nostrud exercitation ullamco laboris nisi ut aliquip ex
                        ea commodo consequat. Duis aute irure dolor in
                        reprehenderit in voluptate velit esse cillum
                        dolore</span
                      >
                    </p>
                    <!-- news footer -->
                    <div class="flex justify-between items-center pt-10px">
                      <div>
                        <a
                          href="team-details.html"
                          class="text-sm lg:text-base flex items-center gap-10px font-semibold"
                          ><img
                            src="./assets/img/blog/author.jpg"
                            alt=""
                            class="flex-shrink-0 w-10 h-10 rounded-100%"
                          >
                          <span>By: Ethan</span>
                        </a>
                      </div>
                      <div>
                        <a
                          href="blog-details.html"
                          class="text-sm flex items-center gap-1 font-bold text-heading-color"
                        >
                          <span class="leading-1.8"
                            ><i class="fas fa-arrow-right"></i>Read more</span
                          >
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- blog 3 -->
              <div class="border-2 border-border-color-11 mb-10">
                <!-- thumbnail  -->
                <div
                  class="news-single-slider-container swiper-container relative"
                >
                  <div class="swiper swiper news-single-slider static">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide cursor-default">
                        <div class="leading-1">
                          <a href="blog-details.html">
                            <img
                              src="./assets/img/blog/33.jpg"
                              class="w-full -mb-1"
                              alt=""
                            >
                          </a>
                        </div>
                      </div>
                      <div class="swiper-slide cursor-default">
                        <div class="leading-1">
                          <a href="blog-details.html">
                            <img
                              src="./assets/img/blog/34.jpg"
                              class="w-full -mb-1"
                              alt=""
                            >
                          </a>
                        </div>
                      </div>
                      <div class="swiper-slide cursor-default">
                        <div class="leading-1">
                          <a href="blog-details.html">
                            <img
                              src="./assets/img/blog/31.jpg"
                              class="w-full -mb-1"
                              alt=""
                            >
                          </a>
                        </div>
                      </div>
                    </div>

                    <!--  navigation -->
                    <div class="block">
                      <div class="swiper-button-next bg-white z-1">
                        <i class="fas fa-arrow-right" ></i>
                      </div>
                      <div class="swiper-button-prev bg-white z-1">
                        <i class="fas fa-arrow-left" ></i>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- news body -->
                <div class="px-5 md:pl-45px md:pr-10 pt-10 pb-35px md:py-50px">
                  <!--  status -->

                  <!-- main -->
                  <div>
                    <ul class="mb-5">
                      <li>
                        <a
                          class="text-xs md:text-sm uppercase text-white px-15px pt-5px pb-0.5 bg-secondary-color hover:bg-primary-color hover:text-white font-semibold"
                          href="#"
                          ><span class="leading-1.8 md:leading-1.8"
                            >BUSINESS</span
                          ></a
                        >
                      </li>
                    </ul>

                    <h4
                      class="text-22px md:text-26px xl:text-3xl font-semibold text-heading-color mb-5"
                    >
                      <a
                        href="blog-details.html"
                        class="leading-1.3 md:leading-1.3 xl:leading-1.3"
                        >Magna aliqua. Ut enim ad minim venia m, quis nostrud
                        exercitation ullamco</a
                      >
                    </h4>
                    <ul class="flex gap-x-15px md:gap-x-30px items-center mb-5">
                      <li>
                        <a href="#" class="text-xs md:text-sm font-semibold">
                          <span class="leading-1.8 md:leading-1.8"
                            ><i
                              class="far fa-eye text-secondary-color mr-5px"
                            ></i>
                            232 Views</span
                          >
                        </a>
                      </li>
                      <li>
                        <a class="text-xs md:text-sm font-semibold" href="#"
                          ><span class="leading-1.8 md:leading-1.8"
                            ><i
                              class="far fa-comments text-secondary-color mr-5px"
                            ></i>
                            35 Comments</span
                          ></a
                        >
                      </li>
                      <li>
                        <p class="text-xs md:text-sm font-semibold">
                          <span class="leading-1.8 md:leading-1.8"
                            ><i
                              class="far fa-calendar-alt text-secondary-color mr-5px"
                            ></i>
                            June 22, 2024</span
                          >
                        </p>
                      </li>
                    </ul>

                    <!-- Description -->

                    <p class="text-sm lg:text-base mb-5 lg:mb-6">
                      <span class="leading-1.8 lg:leading-1.8"
                        >Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua. Ut enim ad minim veniam, quis
                        nostrud exercitation ullamco laboris nisi ut aliquip ex
                        ea commodo consequat. Duis aute irure dolor in
                        reprehenderit in voluptate velit esse cillum
                        dolore</span
                      >
                    </p>
                    <!-- news footer -->
                    <div class="flex justify-between items-center pt-10px">
                      <div>
                        <a
                          href="team-details.html"
                          class="text-sm lg:text-base flex items-center gap-10px font-semibold"
                          ><img
                            src="./assets/img/blog/author.jpg"
                            alt=""
                            class="flex-shrink-0 w-10 h-10 rounded-100%"
                          >
                          <span>By: Ethan</span>
                        </a>
                      </div>
                      <div>
                        <a
                          href="blog-details.html"
                          class="text-sm flex items-center gap-1 font-bold text-heading-color"
                        >
                          <span class="leading-1.8"
                            ><i class="fas fa-arrow-right"></i>Read more</span
                          >
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- blog 4 -->
              <div class="border-2 border-border-color-11 mb-10">
                <!-- thumbnail  -->
                <div class="min-h-[300px]">
                  <iframe
                    src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/837045328&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true&amp;visual=true"
                    class="w-full h-full min-h-[300px]"
                  ></iframe>
                </div>

                <!-- news body -->
                <div class="px-5 md:pl-45px md:pr-10 pt-10 pb-35px md:py-50px">
                  <!--  status -->

                  <!-- main -->
                  <div>
                    <ul class="mb-5">
                      <li>
                        <a
                          class="text-xs md:text-sm uppercase text-white px-15px pt-5px pb-0.5 bg-secondary-color hover:bg-primary-color hover:text-white font-semibold"
                          href="#"
                          ><span class="leading-1.8 md:leading-1.8"
                            >BUSINESS</span
                          ></a
                        >
                      </li>
                    </ul>

                    <h4
                      class="text-22px md:text-26px xl:text-3xl font-semibold text-heading-color mb-5"
                    >
                      <a
                        href="blog-details.html"
                        class="leading-1.3 md:leading-1.3 xl:leading-1.3"
                        >Laboris nisi ut aliquip ex ea commodo consequat. Duis
                        aute irure dolor.</a
                      >
                    </h4>
                    <ul class="flex gap-x-15px md:gap-x-30px items-center mb-5">
                      <li>
                        <a href="#" class="text-xs md:text-sm font-semibold">
                          <span class="leading-1.8 md:leading-1.8"
                            ><i
                              class="far fa-eye text-secondary-color mr-5px"
                            ></i>
                            232 Views</span
                          >
                        </a>
                      </li>
                      <li>
                        <a class="text-xs md:text-sm font-semibold" href="#"
                          ><span class="leading-1.8 md:leading-1.8"
                            ><i
                              class="far fa-comments text-secondary-color mr-5px"
                            ></i>
                            35 Comments</span
                          ></a
                        >
                      </li>
                      <li>
                        <p class="text-xs md:text-sm font-semibold">
                          <span class="leading-1.8 md:leading-1.8"
                            ><i
                              class="far fa-calendar-alt text-secondary-color mr-5px"
                            ></i>
                            June 22, 2024</span
                          >
                        </p>
                      </li>
                    </ul>

                    <!-- Description -->

                    <p class="text-sm lg:text-base mb-5 lg:mb-6">
                      <span class="leading-1.8 lg:leading-1.8"
                        >Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua. Ut enim ad minim veniam, quis
                        nostrud exercitation ullamco laboris nisi ut aliquip ex
                        ea commodo consequat. Duis aute irure dolor in
                        reprehenderit in voluptate velit esse cillum
                        dolore</span
                      >
                    </p>
                    <!-- news footer -->
                    <div class="flex justify-between items-center pt-10px">
                      <div>
                        <a
                          href="team-details.html"
                          class="text-sm lg:text-base flex items-center gap-10px font-semibold"
                          ><img
                            src="./assets/img/blog/author.jpg"
                            alt=""
                            class="flex-shrink-0 w-10 h-10 rounded-100%"
                          >
                          <span>By: Ethan</span>
                        </a>
                      </div>
                      <div>
                        <a
                          href="blog-details.html"
                          class="text-sm flex items-center gap-1 font-bold text-heading-color"
                        >
                          <span class="leading-1.8"
                            ><i class="fas fa-arrow-right"></i>Read more</span
                          >
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- blog 5 -->
              <div class="border-2 border-border-color-11 mb-10">
                <!-- news body -->
                <div class="px-5 md:pl-45px md:pr-10 pt-10 pb-35px md:py-50px">
                  <!--  status -->

                  <!-- main -->
                  <div>
                    <ul class="mb-5">
                      <li>
                        <a
                          class="text-xs md:text-sm uppercase text-white px-15px pt-5px pb-0.5 bg-secondary-color hover:bg-primary-color hover:text-white font-semibold"
                          href="#"
                          ><span class="leading-1.8 md:leading-1.8"
                            >BUSINESS</span
                          ></a
                        >
                      </li>
                    </ul>

                    <h4
                      class="text-22px md:text-26px xl:text-3xl font-semibold text-heading-color mb-5"
                    >
                      <a
                        href="blog-details.html"
                        class="leading-1.3 md:leading-1.3 xl:leading-1.3"
                        >In reprehenderit in voluptate velit esse cillum dolore
                        eu fugiat nulla pariatur.</a
                      >
                    </h4>
                    <ul class="flex gap-x-15px md:gap-x-30px items-center mb-5">
                      <li>
                        <a href="#" class="text-xs md:text-sm font-semibold">
                          <span class="leading-1.8 md:leading-1.8"
                            ><i
                              class="far fa-eye text-secondary-color mr-5px"
                            ></i>
                            232 Views</span
                          >
                        </a>
                      </li>
                      <li>
                        <a class="text-xs md:text-sm font-semibold" href="#"
                          ><span class="leading-1.8 md:leading-1.8"
                            ><i
                              class="far fa-comments text-secondary-color mr-5px"
                            ></i>
                            35 Comments</span
                          ></a
                        >
                      </li>
                      <li>
                        <p class="text-xs md:text-sm font-semibold">
                          <span class="leading-1.8 md:leading-1.8"
                            ><i
                              class="far fa-calendar-alt text-secondary-color mr-5px"
                            ></i>
                            June 22, 2024</span
                          >
                        </p>
                      </li>
                    </ul>

                    <!-- Description -->

                    <p class="text-sm lg:text-base mb-5 lg:mb-6">
                      <span class="leading-1.8 lg:leading-1.8"
                        >Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua. Ut enim ad minim veniam, quis
                        nostrud exercitation ullamco laboris nisi ut aliquip ex
                        ea commodo consequat. Duis aute irure dolor in
                        reprehenderit in voluptate velit esse cillum
                        dolore</span
                      >
                    </p>
                    <!-- news footer -->
                    <div class="flex justify-between items-center pt-10px">
                      <div>
                        <a
                          href="team-details.html"
                          class="text-sm lg:text-base flex items-center gap-10px font-semibold"
                          ><img
                            src="./assets/img/blog/author.jpg"
                            alt=""
                            class="flex-shrink-0 w-10 h-10 rounded-100%"
                          >
                          <span>By: Ethan</span>
                        </a>
                      </div>
                      <div>
                        <a
                          href="blog-details.html"
                          class="text-sm flex items-center gap-1 font-bold text-heading-color"
                        >
                          <span class="leading-1.8"
                            ><i class="fas fa-arrow-right"></i>Read more</span
                          >
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- blog 6 -->
              <div
                class="bg-[url('../img/blog/3.jpg')] bg-no-repeat bg-cover bg-center relative z-0 before:absolute before:left-0 before:top-0 before:w-full before:h-full before:bg-secondary-color-2 before:bg-opacity-90 -before:z-1 mb-10"
              >
                <!-- news body -->
                <div class="px-5 md:pl-45px md:pr-10 pt-10 pb-35px md:py-50px">
                  <!-- main -->
                  <div>
                    <div
                      class="pl-0 lg:pl-20 xl:pl-100px relative before:content-['\e94d'] before:font-icomoon before:relative lg:before:absolute before:left-0 lg:before:top-2 xl:before:top-7 before:text-3xl md:before:text-50px xl:before:text-80px before:font-bold before:mb-10px lg:before:mb-0 before:text-white"
                    >
                      <h4
                        class="text-xl md:text-2xl xl:text-35px font-semibold text-white mb-30px"
                      >
                        <a
                          href="blog-details.html"
                          class="leading-1.3 md:leading-1.3 xl:leading-1.3 hover:text-white"
                          >Excepteur sint occaecat cupida tat non proident, sunt
                          in.</a
                        >
                      </h4>
                    </div>

                    <ul
                      class="flex gap-x-15px md:gap-x-30px items-center pl-0 lg:pl-20 xl:pl-100px relative z-10"
                    >
                      <li>
                        <a
                          href="#"
                          class="text-xs md:text-sm font-semibold text-white hover:text-white"
                        >
                          <span class="leading-1.8 md:leading-1.8"
                            ><i class="far fa-eye mr-5px text-white"></i> 232
                            Views</span
                          >
                        </a>
                      </li>
                      <li>
                        <a
                          class="text-xs md:text-sm font-semibold text-white hover:text-white"
                          href="#"
                          ><span class="leading-1.8 md:leading-1.8"
                            ><i class="far fa-comments mr-5px"></i> 35
                            Comments</span
                          ></a
                        >
                      </li>
                      <li>
                        <p
                          class="text-xs md:text-sm font-semibold text-white hover:text-white"
                        >
                          <span class="leading-1.8 md:leading-1.8"
                            ><i class="far fa-calendar-alt mr-5px"></i> June 22,
                            2024</span
                          >
                        </p>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <!-- blog 7 -->
              <div
                class="border-2 border-border-color-11 bg-[url('../img/blog/2.jpg')] bg-no-repeat bg-cover bg-center relative z-0 before:absolute before:left-0 before:top-0 before:w-full before:h-full before:bg-white before:bg-opacity-90 -before:z-1 mb-10"
              >
                <!-- news body -->
                <div
                  class="px-5 md:pl-45px md:pr-10 pt-10 pb-35px md:py-50px relative z-10"
                >
                  <!-- main -->
                  <div>
                    <ul class="mb-5">
                      <li>
                        <a
                          class="text-xs md:text-sm uppercase text-white px-15px pt-5px pb-0.5 bg-secondary-color hover:bg-primary-color hover:text-white font-semibold"
                          href="#"
                          ><span class="leading-1.8 md:leading-1.8"
                            >BUSINESS</span
                          ></a
                        >
                      </li>
                    </ul>

                    <h4
                      class="text-22px md:text-26px xl:text-3xl font-semibold text-heading-color mb-5"
                    >
                      <a
                        href="blog-details.html"
                        class="leading-1.3 md:leading-1.3 xl:leading-1.3"
                        >Culpa qui officia deserunt mollit anim id est laborum.
                        Sed ut perspiciatis</a
                      >
                    </h4>
                    <ul class="flex gap-x-15px md:gap-x-30px items-center mb-5">
                      <li>
                        <a href="#" class="text-xs md:text-sm font-semibold">
                          <span class="leading-1.8 md:leading-1.8"
                            ><i
                              class="far fa-eye text-secondary-color mr-5px"
                            ></i>
                            232 Views</span
                          >
                        </a>
                      </li>
                      <li>
                        <a class="text-xs md:text-sm font-semibold" href="#"
                          ><span class="leading-1.8 md:leading-1.8"
                            ><i
                              class="far fa-comments text-secondary-color mr-5px"
                            ></i>
                            35 Comments</span
                          ></a
                        >
                      </li>
                      <li>
                        <p class="text-xs md:text-sm font-semibold">
                          <span class="leading-1.8 md:leading-1.8"
                            ><i
                              class="far fa-calendar-alt text-secondary-color mr-5px"
                            ></i>
                            June 22, 2024</span
                          >
                        </p>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>

              <!-- pagination -->
              <div class="flex justify-center pt-4">
                <ul
                  class="flex flex-wrap items-center gap-x-10px gap-y-4 justify-center"
                >
                  <li>
                    <a
                      href="#"
                      class="flex items-center justify-center flex-shrink-0 text-sm lg:text-base text-paragraph-color bg-white w-10 h-10 md:w-50px md:h-50px border-2 border-border-color-11 transition-all duration-300 hover:bg-secondary-color hover:text-white hover:border-secondary-color rounded-100% font-bold"
                      ><i class="fas fa-angle-double-left"></i
                    ></a>
                  </li>
                  <li>
                    <a
                      href="#"
                      class="flex items-center justify-center flex-shrink-0 text-sm lg:text-base text-paragraph-color bg-white w-10 h-10 md:w-50px md:h-50px border-2 border-border-color-11 transition-all duration-300 hover:bg-secondary-color hover:text-white hover:border-secondary-color rounded-100% font-bold"
                      >1</a
                    >
                  </li>
                  <li>
                    <a
                      href="#"
                      class="flex items-center justify-center flex-shrink-0 text-sm lg:text-base text-white bg-secondary-color w-10 h-10 md:w-50px md:h-50px border-2 border-secondary-color transition-all duration-300 hover:bg-secondary-color hover:text-white hover:border-secondary-color rounded-100% font-bold"
                      >2</a
                    >
                  </li>

                  <li>
                    <a
                      href="#"
                      class="flex items-center justify-center flex-shrink-0 text-sm lg:text-base text-paragraph-color bg-white w-10 h-10 md:w-50px md:h-50px border-2 border-border-color-11 transition-all duration-300 hover:bg-secondary-color hover:text-white hover:border-secondary-color rounded-100% font-bold"
                      >3</a
                    >
                  </li>
                  <li>
                    <a
                      href="#"
                      class="flex items-center justify-center flex-shrink-0 text-sm lg:text-base text-paragraph-color bg-white w-10 h-10 md:w-50px md:h-50px border-2 border-border-color-11 transition-all duration-300 hover:bg-secondary-color hover:text-white hover:border-secondary-color rounded-100% font-bold"
                      >...</a
                    >
                  </li>
                  <li>
                    <a
                      href="#"
                      class="flex items-center justify-center flex-shrink-0 text-sm lg:text-base text-paragraph-color bg-white w-10 h-10 md:w-50px md:h-50px border-2 border-border-color-11 transition-all duration-300 hover:bg-secondary-color hover:text-white hover:border-secondary-color rounded-100% font-bold"
                      >10</a
                    >
                  </li>
                  <li>
                    <a
                      href="#"
                      class="flex items-center justify-center flex-shrink-0 text-sm lg:text-base text-paragraph-color bg-white w-10 h-10 md:w-50px md:h-50px border-2 border-border-color-11 transition-all duration-300 hover:bg-secondary-color hover:text-white hover:border-secondary-color rounded-100% font-bold"
                      ><i class="fas fa-angle-double-right"></i
                    ></a>
                  </li>
                </ul>
              </div>
            </div>
            <!-- sidebar -->
            <div class="lg:col-start-9 lg:col-span-4 pt-100px lg:pt-0">
              <!-- author details -->
              <div
                class="px-5 pt-35px pb-10 xl:pl-35px xl:pr-30px mb-10 border-2 border-border-color-11"
              >
                <div class="flex flex-col items-center text-center">
                  <div class="mb-25px">
                    <img
                      src="./assets/img/team/4.jpg"
                      alt=""
                      class="w-140px h-140px rounded-100%"
                    >
                  </div>
                  <h4 class="mb-15px lg:text-lg text-heading-color font-bold">
                    <span class="leading-1.3 lg:leading-1.3"
                      >Rosalina D. Willaimson</span
                    >
                  </h4>
                  <p class="text-[12.25px] lg:text-sm">
                    <span class="lg:leading-1 8"> Traveller/Photographer </span>
                  </p>
                  <div>
                    <ul class="text-xs text-ratings flex items-center mb-10px">
                      <li class="pt-2">
                        <a href="#"><i class="fas fa-star"></i></a>
                      </li>
                      <li class="pt-2">
                        <a href="#"><i class="fas fa-star"></i></a>
                      </li>
                      <li class="pt-2">
                        <a href="#"><i class="fas fa-star"></i></a>
                      </li>
                      <li class="pt-2">
                        <a href="#"><i class="fas fa-star-half-alt"></i></a>
                      </li>
                      <li class="pt-2">
                        <a href="#"><i class="far fa-star"></i></a>
                      </li>
                      <li class="pt-2"><a href="#"> ( 1 Reviews )</a></li>
                    </ul>
                  </div>
                  <p class="text-sm mb-22px hyphens-none">
                    <span class="leading-1.8"
                      >Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                      Veritatis distinctio, odio, eligendi suscipit
                      reprehenderit atque.</span
                    >
                  </p>
                  <ul
                    class="text-sm lg:text-base flex gap-18px justify-center items-center text-color-1"
                  >
                    <li class="leading-1.8 lg:leading-1.8">
                      <a href="https://www.facebook.com"
                        ><i class="fab fa-facebook-f"></i
                      ></a>
                    </li>
                    <li class="leading-1.8 lg:leading-1.8">
                      <a href="https://x.com"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li class="leading-1.8 lg:leading-1.8">
                      <a href="https://www.linkedin.com"
                        ><i class="fab fa-linkedin"></i
                      ></a>
                    </li>
                    <li class="leading-1.8 lg:leading-1.8">
                      <a href="https://www.youtube.com"
                        ><i class="fab fa-youtube"></i
                      ></a>
                    </li>
                  </ul>
                </div>
              </div>
              <!-- Search Objects -->
              <div
                class="px-5 pt-35px pb-10 xl:pl-35px xl:pr-30px mb-10 border-2 border-border-color-11"
              >
                <h4 class="text-lg font-semibold text-heading-color mb-25px">
                  <span
                    class="leading-1.3 pl-10px border-l-2 border-secondary-color"
                    >Search Objects</span
                  >
                </h4>
                <form>
                  <div class="flex items-center">
                    <input
                      type="text"
                      placeholder="Search your keyword..."
                      class="flex-grow text-paragraph-color text-sm font-semibold bg-section-bg-1 px-5 outline-none border-2 border-r-0 border-border-color-9 focus:border focus:border-secondary-color h-60px placeholder:text-heading-color block rounded-none"
                    >
                    <button
                      type="submit"
                      class="flex-shrink-0 text-sm lg:text-base h-60px w-14 flex items-center justify-center text-white bg-secondary-color hover:bg-primary-color"
                    >
                      <i class="fas fa-search"></i>
                    </button>
                  </div>
                </form>
              </div>
              <!-- Drop Messege For Book -->

              <div
                class="px-5 pt-35px pb-10 xl:pl-35px xl:pr-30px mb-10 border-2 border-border-color-11"
              >
                <h4 class="text-lg font-semibold text-heading-color mb-25px">
                  <span
                    class="leading-1.3 pl-10px border-l-2 border-secondary-color"
                    >Drop Messege For Book</span
                  >
                </h4>

                <form>
                  <div class="grid gap-30px mb-10">
                    <!-- name -->
                    <div class="relative">
                      <input
                        type="text"
                        placeholder="Your Name*"
                        class="text-paragraph-color px-5 py-15px outline-none border-2 border-border-color-9 focus:border focus:border-secondary-color h-65px block w-full rounded-none placeholder:text-sm placeholder:text-paragraph-color"
                      >
                    </div>
                    <!-- email -->
                    <div class="relative">
                      <input
                        type="text"
                        placeholder="Your e-Mail*"
                        class="text-paragraph-color px-5 py-15px outline-none border-2 border-border-color-9 focus:border focus:border-secondary-color h-65px block w-full rounded-none placeholder:text-sm placeholder:text-paragraph-color"
                      >
                    </div>
                    <!-- message -->
                    <div class="relative">
                      <textarea
                       
                        
                        placeholder="Write Message..."
                        class="min-h-[150px] text-paragraph-color px-5 py-15px outline-none border-2 border-border-color-9 focus:border focus:border-secondary-color h-65px block w-full rounded-none placeholder:text-sm placeholder:text-paragraph-color"
                      ></textarea>
                    </div>
                  </div>

                  <!-- submit button -->

                  <div>
                    <h5
                      class="uppercase text-sm md:text-base text-white bg-secondary-color hover:bg-primary-color relative group whitespace-nowrap font-normal mb-0 transition-all duration-300 border border-secondary-color hover:border-heading-color inline-block z-0"
                    >
                      <button
                        type="submit"
                        class="relative z-1 px-5 md:px-25px lg:px-10 py-10px md:py-15px lg:py-17px group-hover:text-white leading-23px uppercase"
                      >
                        Send Messege
                      </button>
                    </h5>
                  </div>
                </form>
              </div>
              <!-- Top Rated Product -->
              <div
                class="px-5 pt-35px pb-10 xl:pl-35px xl:pr-30px mb-10 border-2 border-border-color-11"
              >
                <h4 class="text-lg font-semibold text-heading-color mb-25px">
                  <span
                    class="leading-1.3 pl-10px border-l-2 border-secondary-color"
                    >Top Rated Product</span
                  >
                </h4>
                <ul>
                  <li class="pb-25px mb-25px border-b border-white-4">
                    <div class="flex gap-x-15px xl:gap-x-5">
                      <div class="w-70px xl:w-90px flex-shrink-0">
                        <a href="product-details.html"
                          ><img src="./assets/img/product/1.png" alt=""
                        ></a>
                      </div>

                      <div>
                        <ul
                          class="text-10px text-ratings flex items-center mb-5px leading-1"
                        >
                          <li>
                            <a href="#"><i class="fas fa-star"></i></a>
                          </li>
                          <li>
                            <a href="#"><i class="fas fa-star"></i></a>
                          </li>
                          <li>
                            <a href="#"><i class="fas fa-star"></i></a>
                          </li>
                          <li>
                            <a href="#"><i class="fas fa-star"></i></a>
                          </li>
                          <li>
                            <a href="#"><i class="fas fa-star"></i></a>
                          </li>
                        </ul>

                        <h6 class="text-sm font-medium mb-1">
                          <a href="product-details.html" class="leading-1.3"
                            >Luxury House In Greenville</a
                          >
                        </h6>
                        <p class="text-sm font-bold text-secondary-color">
                          <span class="leading-1.8">$30,000.00 </span>
                          <del class="text-11px opacity-60 ml-1"
                            >$35,000.00</del
                          >
                        </p>
                      </div>
                    </div>
                  </li>
                  <li class="pb-25px mb-25px border-b border-white-4">
                    <div class="flex gap-x-15px xl:gap-x-5">
                      <div class="w-70px xl:w-90px flex-shrink-0">
                        <a href="product-details.html"
                          ><img src="./assets/img/product/2.png" alt=""
                        ></a>
                      </div>

                      <div>
                        <ul
                          class="text-10px text-ratings flex items-center mb-5px leading-1"
                        >
                          <li>
                            <a href="#"><i class="fas fa-star"></i></a>
                          </li>
                          <li>
                            <a href="#"><i class="fas fa-star"></i></a>
                          </li>
                          <li>
                            <a href="#"><i class="fas fa-star"></i></a>
                          </li>
                          <li>
                            <a href="#"><i class="fas fa-star"></i></a>
                          </li>
                          <li>
                            <a href="#"><i class="fas fa-star"></i></a>
                          </li>
                        </ul>

                        <h6 class="text-sm font-medium mb-1">
                          <a href="product-details.html" class="leading-1.3"
                            >Apartment with Subunits</a
                          >
                        </h6>
                        <p class="text-sm font-bold text-secondary-color">
                          <span class="leading-1.8">$30,000.00 </span>
                          <del class="text-11px opacity-60 ml-1"
                            >$35,000.00</del
                          >
                        </p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="flex gap-x-15px xl:gap-x-5">
                      <div class="w-70px xl:w-90px flex-shrink-0">
                        <a href="product-details.html"
                          ><img src="./assets/img/product/3.png" alt=""
                        ></a>
                      </div>

                      <div>
                        <ul
                          class="text-10px text-ratings flex items-center mb-5px leading-1"
                        >
                          <li>
                            <a href="#"><i class="fas fa-star"></i></a>
                          </li>
                          <li>
                            <a href="#"><i class="fas fa-star"></i></a>
                          </li>
                          <li>
                            <a href="#"><i class="fas fa-star"></i></a>
                          </li>
                          <li>
                            <a href="#"><i class="fas fa-star-half-alt"></i></a>
                          </li>
                          <li>
                            <a href="#"><i class="far fa-star"></i></a>
                          </li>
                        </ul>

                        <h6 class="text-sm font-medium mb-1">
                          <a href="product-details.html" class="leading-1.3"
                            >3 Rooms Manhattan</a
                          >
                        </h6>
                        <p class="text-sm font-bold text-secondary-color">
                          <span class="leading-1.8">$30,000.00 </span>
                          <del class="text-11px opacity-60 ml-1"
                            >$35,000.00</del
                          >
                        </p>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
              <!-- Top Categories-->
              <div
                class="px-5 pt-35px pb-10 xl:pl-35px xl:pr-30px mb-10 border-2 border-border-color-11"
              >
                <h4 class="text-lg font-semibold text-heading-color mb-25px">
                  <span
                    class="leading-1.3 pl-10px border-l-2 border-secondary-color"
                    >Top Categories</span
                  >
                </h4>
                <ul>
                  <li>
                    <a
                      href="#"
                      class="text-sm font-bold flex justify-between items-center group mt-15px"
                    >
                      <span class="leading-1.8">Apartments</span>
                      <span class="leading-1.8 group-hover:text-paragraph-color"
                        >(26)
                      </span>
                    </a>
                  </li>
                  <li>
                    <a
                      href="#"
                      class="text-sm font-bold flex justify-between items-center group mt-15px"
                    >
                      <span class="leading-1.8">Picture Stodio</span>
                      <span class="leading-1.8 group-hover:text-paragraph-color"
                        >(30)
                      </span>
                    </a>
                  </li>
                  <li>
                    <a
                      href="#"
                      class="text-sm font-bold flex justify-between items-center group mt-15px"
                    >
                      <span class="leading-1.8">Office</span>
                      <span class="leading-1.8 group-hover:text-paragraph-color"
                        >(71)
                      </span>
                    </a>
                  </li>
                  <li>
                    <a
                      href="#"
                      class="text-sm font-bold flex justify-between items-center group mt-15px"
                    >
                      <span class="leading-1.8">Luxary Vilas</span>
                      <span class="leading-1.8 group-hover:text-paragraph-color"
                        >(56)
                      </span>
                    </a>
                  </li>
                  <li>
                    <a
                      href="#"
                      class="text-sm font-bold flex justify-between items-center group mt-15px"
                    >
                      <span class="leading-1.8">Duplex House</span>
                      <span class="leading-1.8 group-hover:text-paragraph-color"
                        >(60)
                      </span>
                    </a>
                  </li>
                </ul>
              </div>
              <!-- Popular Properties-->
              <div
                class="px-5 pt-35px pb-10 xl:pl-35px xl:pr-30px mb-10 border-2 border-border-color-11"
              >
                <h4 class="text-lg font-semibold text-heading-color mb-25px">
                  <span
                    class="leading-1.3 pl-10px border-l-2 border-secondary-color"
                    >Popular Properties</span
                  >
                </h4>

                <div
                  class="news-slider-container swiper-container relative -mx-15px"
                >
                  <!-- apartment cards  -->
                  <div class="swiper popular-properties-slider static">
                    <div class="swiper-wrapper">
                      <!-- card 1 -->
                      <div class="swiper-slide mb-50px cursor-default">
                        <div class="apart-card px-15px">
                          <div
                            class="group border border-border-color-13 shadow-box-shadow-4"
                          >
                            <!-- card thumbs -->
                            <div class="relative leading-1">
                              <a
                                href="product-details.html"
                                class="overflow-hidden"
                              >
                                <img
                                  src="./assets/img/product-3/6.jpg"
                                  class="w-full group-hover:scale-110 transition-all duration-700"
                                  alt=""
                                >
                              </a>

                              <div
                                class="absolute top-10 lg:top-5 right-[30px]"
                              >
                                <a
                                  href="team-details.html"
                                  class="w-50px h-50px"
                                  ><img
                                    src="./assets/img/blog/author.jpg"
                                    alt=""
                                    class="w-full h-full rounded-100% group-hover:scale-110 border-3px border-border-color-1 transition-all duration-300"
                                ></a>
                              </div>
                            </div>
                            <!-- card body -->
                            <div class="p-25px">
                              <h5
                                class="text-lg text-secondary-color font-semibold mb-5px"
                              >
                                <span class="leading-1.8">$34,900</span>
                                <label class="text-sm font-normal"
                                  >/Month</label
                                >
                              </h5>
                              <h4
                                class="text-base font-semibold text-heading-color mb-15px"
                              >
                                <a
                                  href="product-details.html"
                                  class="hover:text-secondary-color leading-1.3"
                                  >New Apartment Nice View</a
                                >
                              </h4>

                              <div class="text-xs">
                                <a
                                  href="locations.html"
                                  class="hover:text-secondary-color"
                                  ><i
                                    class="flaticon-pin text-secondary-color mr-0.5"
                                  ></i>
                                  Belmont Gardens, Chicago</a
                                >
                              </div>

                              <ul class="flex flex-wrap gap-15px pt-4">
                                <li>
                                  <p class="leading-1.8 font-bold text-xs">
                                    3 <span class="font-normal">Bed</span>
                                  </p>
                                </li>
                                <li>
                                  <p class="leading-1.8 font-bold text-xs">
                                    2 <span class="font-normal">Bath</span>
                                  </p>
                                </li>

                                <li>
                                  <p class="leading-1.8 font-bold text-xs">
                                    3450
                                    <span class="font-normal">Square Ft</span>
                                  </p>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- card 2 -->
                      <div class="swiper-slide mb-50px cursor-default">
                        <div class="apart-card px-15px">
                          <div
                            class="group border border-border-color-13 shadow-box-shadow-4"
                          >
                            <!-- card thumbs -->
                            <div class="relative leading-1">
                              <a
                                href="product-details.html"
                                class="overflow-hidden"
                              >
                                <img
                                  src="./assets/img/product-3/4.jpg"
                                  class="w-full group-hover:scale-110 transition-all duration-700"
                                  alt=""
                                >
                              </a>

                              <div
                                class="absolute top-10 lg:top-5 right-[30px]"
                              >
                                <a
                                  href="team-details.html"
                                  class="w-50px h-50px"
                                  ><img
                                    src="./assets/img/blog/author.jpg"
                                    alt=""
                                    class="w-full h-full rounded-100% group-hover:scale-110 border-3px border-border-color-1 transition-all duration-300"
                                ></a>
                              </div>
                            </div>
                            <!-- card body -->
                            <div class="p-25px">
                              <h5
                                class="text-lg text-secondary-color font-semibold mb-5px"
                              >
                                <span class="leading-1.8">$34,900</span>
                                <label class="text-sm font-normal"
                                  >/Month</label
                                >
                              </h5>
                              <h4
                                class="text-base font-semibold text-heading-color mb-15px"
                              >
                                <a
                                  href="product-details.html"
                                  class="hover:text-secondary-color leading-1.3"
                                  >New Apartment Nice View</a
                                >
                              </h4>

                              <div class="text-xs">
                                <a
                                  href="locations.html"
                                  class="hover:text-secondary-color"
                                  ><i
                                    class="flaticon-pin text-secondary-color mr-0.5"
                                  ></i>
                                  Belmont Gardens, Chicago</a
                                >
                              </div>

                              <ul class="flex flex-wrap gap-15px pt-4">
                                <li>
                                  <p class="leading-1.8 font-bold text-xs">
                                    3 <span class="font-normal">Bed</span>
                                  </p>
                                </li>
                                <li>
                                  <p class="leading-1.8 font-bold text-xs">
                                    2 <span class="font-normal">Bath</span>
                                  </p>
                                </li>

                                <li>
                                  <p class="leading-1.8 font-bold text-xs">
                                    3450
                                    <span class="font-normal">Square Ft</span>
                                  </p>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- card 3 -->
                      <div class="swiper-slide mb-50px cursor-default">
                        <div class="apart-card px-15px">
                          <div
                            class="group border border-border-color-13 shadow-box-shadow-4"
                          >
                            <!-- card thumbs -->
                            <div class="relative leading-1">
                              <a
                                href="product-details.html"
                                class="overflow-hidden"
                              >
                                <img
                                  src="./assets/img/product-3/5.jpg"
                                  class="w-full group-hover:scale-110 transition-all duration-700"
                                  alt=""
                                >
                              </a>

                              <div
                                class="absolute top-10 lg:top-5 right-[30px]"
                              >
                                <a
                                  href="team-details.html"
                                  class="w-50px h-50px"
                                  ><img
                                    src="./assets/img/blog/author.jpg"
                                    alt=""
                                    class="w-full h-full rounded-100% group-hover:scale-110 border-3px border-border-color-1 transition-all duration-300"
                                ></a>
                              </div>
                            </div>
                            <!-- card body -->
                            <div class="p-25px">
                              <h5
                                class="text-lg text-secondary-color font-semibold mb-5px"
                              >
                                <span class="leading-1.8">$34,900</span>
                                <label class="text-sm font-normal"
                                  >/Month</label
                                >
                              </h5>
                              <h4
                                class="text-base font-semibold text-heading-color mb-15px"
                              >
                                <a
                                  href="product-details.html"
                                  class="hover:text-secondary-color leading-1.3"
                                  >New Apartment Nice View</a
                                >
                              </h4>

                              <div class="text-xs">
                                <a
                                  href="locations.html"
                                  class="hover:text-secondary-color"
                                  ><i
                                    class="flaticon-pin text-secondary-color mr-0.5"
                                  ></i>
                                  Belmont Gardens, Chicago</a
                                >
                              </div>

                              <ul class="flex flex-wrap gap-15px pt-4">
                                <li>
                                  <p class="leading-1.8 font-bold text-xs">
                                    3 <span class="font-normal">Bed</span>
                                  </p>
                                </li>
                                <li>
                                  <p class="leading-1.8 font-bold text-xs">
                                    2 <span class="font-normal">Bath</span>
                                  </p>
                                </li>

                                <li>
                                  <p class="leading-1.8 font-bold text-xs">
                                    3450
                                    <span class="font-normal">Square Ft</span>
                                  </p>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- pagination -->
                    <div
                      class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal !-bottom-[6px] block"
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
                  </div>
                </div>
              </div>

              <!-- Leatest Blogs -->
              <div
                class="px-5 pt-35px pb-10 xl:pl-35px xl:pr-30px mb-10 border-2 border-border-color-11"
              >
                <h4 class="text-lg font-semibold text-heading-color mb-25px">
                  <span
                    class="leading-1.3 pl-10px border-l-2 border-secondary-color"
                    >Leatest Blogs</span
                  >
                </h4>
                <ul>
                  <li class="pb-5 mb-30px border-b border-border-color-1">
                    <div class="flex gap-x-5">
                      <div class="w-20 flex-shrink-0">
                        <a href="blog-details.html"
                          ><img src="./assets/img/team/5.jpg" alt=""
                        ></a>
                      </div>

                      <div>
                        <h6 class="text-sm font-medium mb-5px">
                          <a href="blog-details.html" class="leading-1.3"
                            >Lorem ipsum dolor sit cing elit, sed do.</a
                          >
                        </h6>
                        <div
                          class="text-xs md:text-sm font-semibold text-secondary-color"
                        >
                          <a href="#" class="leading-1.8 md:leading-1.8"
                            ><i class="far fa-calendar-alt"></i> June 22,
                            2024</a
                          >
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="pb-5 mb-30px border-b border-border-color-1">
                    <div class="flex gap-x-5">
                      <div class="w-20 flex-shrink-0">
                        <a href="blog-details.html"
                          ><img src="./assets/img/team/6.jpg" alt=""
                        ></a>
                      </div>

                      <div>
                        <h6 class="text-sm font-medium mb-5px">
                          <a href="blog-details.html" class="leading-1.3"
                            >Lorem ipsum dolor sit cing elit, sed do.</a
                          >
                        </h6>
                        <div
                          class="text-xs md:text-sm font-semibold text-secondary-color"
                        >
                          <a href="#" class="leading-1.8 md:leading-1.8"
                            ><i class="far fa-calendar-alt"></i> June 22,
                            2024</a
                          >
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="pb-5 mb-30px border-b border-border-color-1">
                    <div class="flex gap-x-5">
                      <div class="w-20 flex-shrink-0">
                        <a href="blog-details.html"
                          ><img src="./assets/img/team/7.jpg" alt=""
                        ></a>
                      </div>

                      <div>
                        <h6 class="text-sm font-medium mb-5px">
                          <a href="blog-details.html" class="leading-1.3"
                            >Lorem ipsum dolor sit cing elit, sed do.</a
                          >
                        </h6>
                        <div
                          class="text-xs md:text-sm font-semibold text-secondary-color"
                        >
                          <a href="#" class="leading-1.8 md:leading-1.8"
                            ><i class="far fa-calendar-alt"></i> June 22,
                            2024</a
                          >
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="flex gap-x-5">
                      <div class="w-20 flex-shrink-0">
                        <a href="blog-details.html"
                          ><img src="./assets/img/team/8.jpg" alt=""
                        ></a>
                      </div>

                      <div>
                        <h6 class="text-sm font-medium mb-5px">
                          <a href="blog-details.html" class="leading-1.3"
                            >Lorem ipsum dolor sit cing elit, sed do.</a
                          >
                        </h6>
                        <div
                          class="text-xs md:text-sm font-semibold text-secondary-color"
                        >
                          <a href="#" class="leading-1.8 md:leading-1.8"
                            ><i class="far fa-calendar-alt"></i> June 22,
                            2024</a
                          >
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
              <!-- Twitter Feeds -->
              <div
                class="px-5 pt-35px pb-10 xl:pl-35px xl:pr-30px mb-10 border-2 border-border-color-11"
              >
                <h4 class="text-lg font-semibold text-heading-color mb-25px">
                  <span
                    class="leading-1.3 pl-10px border-l-2 border-secondary-color"
                    >Twitter Feeds</span
                  >
                </h4>

                <ul class="text-sm lg:text-base">
                  <li class="pb-30px mb-30px border-b border-border-color-1">
                    <div class="flex gap-x-5">
                      <div class="flex-shrink-0">
                        <a
                          href="blog-details.html"
                          class="leading-1.8 lg:leading-11.8 text-secondary-color"
                        >
                          <i class="fab fa-twitter"></i
                        ></a>
                      </div>

                      <div>
                        <div class="mb-2">
                          <p class="leading-1.3 lg:leading-1.3">
                            Carsafe - #Gutenberg ready @wordpress Theme for Car
                            Service, Auto Parts, Car Dealer available on <br >
                            @website
                          </p>
                          <a
                            href="blog-details.html"
                            class="leading-1.3 lg:leading-1.3 text-secondary-color"
                            >https://website.net</a
                          >
                        </div>
                        <div
                          class="text-xs md:text-sm font-semibold text-secondary-color"
                        >
                          <a href="#" class="leading-1.8 md:leading-1.8"
                            ><i class="far fa-calendar-alt"></i> June 22,
                            2024</a
                          >
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="pb-30px mb-30px border-b border-border-color-1">
                    <div class="flex gap-x-5">
                      <div class="flex-shrink-0">
                        <a
                          href="blog-details.html"
                          class="leading-1.8 lg:leading-11.8 text-secondary-color"
                        >
                          <i class="fab fa-twitter"></i
                        ></a>
                      </div>

                      <div>
                        <div class="mb-2">
                          <p class="leading-1.3 lg:leading-1.3">
                            Carsafe - #Gutenberg ready @wordpress Theme for Car
                            Service, Auto Parts, Car Dealer available on <br >
                            @website
                          </p>
                          <a
                            href="blog-details.html"
                            class="leading-1.3 lg:leading-1.3 text-secondary-color"
                            >https://website.net</a
                          >
                        </div>
                        <div
                          class="text-xs md:text-sm font-semibold text-secondary-color"
                        >
                          <a href="#" class="leading-1.8 md:leading-1.8"
                            ><i class="far fa-calendar-alt"></i> June 22,
                            2024</a
                          >
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="flex gap-x-5">
                      <div class="flex-shrink-0">
                        <a
                          href="blog-details.html"
                          class="leading-1.8 lg:leading-11.8 text-secondary-color"
                        >
                          <i class="fab fa-twitter"></i
                        ></a>
                      </div>

                      <div>
                        <div class="mb-2">
                          <p class="leading-1.3 lg:leading-1.3">
                            Carsafe - #Gutenberg ready @wordpress Theme for Car
                            Service, Auto Parts, Car Dealer available on <br >
                            @website
                          </p>
                          <a
                            href="blog-details.html"
                            class="leading-1.3 lg:leading-1.3 text-secondary-color"
                            >https://website.net</a
                          >
                        </div>
                        <div
                          class="text-xs md:text-sm font-semibold text-secondary-color"
                        >
                          <a href="#" class="leading-1.8 md:leading-1.8"
                            ><i class="far fa-calendar-alt"></i> June 22,
                            2024</a
                          >
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>

              <!-- Follow Us -->
              <div
                class="px-5 pt-35px pb-10 xl:pl-35px xl:pr-30px mb-10 border-2 border-border-color-11"
              >
                <h4 class="text-lg font-semibold text-heading-color mb-25px">
                  <span
                    class="leading-1.3 pl-10px border-l-2 border-secondary-color"
                    >Follow Us</span
                  >
                </h4>
                <ul class="flex gap-x-15px pt-4">
                  <li>
                    <a
                      href="https://www.facebook.com"
                      class="text-sm lg:text-base w-10 h-10 bg-section-bg-1 hover:bg-secondary-color hover:text-white flex items-center justify-center"
                      ><i class="fab fa-facebook-f"></i
                    ></a>
                  </li>
                  <li>
                    <a
                      href="https://x.com"
                      class="text-sm lg:text-base w-10 h-10 bg-section-bg-1 hover:bg-secondary-color hover:text-white flex items-center justify-center"
                      ><i class="fab fa-twitter"></i
                    ></a>
                  </li>
                  <li>
                    <a
                      href="https://www.linkedin.com"
                      class="text-sm lg:text-base w-10 h-10 bg-section-bg-1 hover:bg-secondary-color hover:text-white flex items-center justify-center"
                      ><i class="fab fa-linkedin"></i
                    ></a>
                  </li>
                  <li>
                    <a
                      href="https://www.instagram.com"
                      class="text-sm lg:text-base w-10 h-10 bg-section-bg-1 hover:bg-secondary-color hover:text-white flex items-center justify-center"
                      ><i class="fab fa-instagram"></i
                    ></a>
                  </li>
                </ul>
              </div>
              <!-- Popular Tags -->
              <div
                class="px-5 pt-35px pb-10 xl:pl-35px xl:pr-30px border-2 border-border-color-11"
              >
                <h4 class="text-lg font-semibold text-heading-color mb-30px">
                  <span
                    class="leading-1.3 pl-10px border-l-2 border-secondary-color"
                    >Popular Tags</span
                  >
                </h4>
                <ul class="flex gap-10px flex-wrap items-center font-poppins">
                  <li>
                    <a
                      href="#"
                      class="text-13px px-6 py-2 leading-1.8 bg-section-bg-1 hover:bg-secondary-color hover:text-white flex items-center justify-center font-bold"
                      >POPULAR
                    </a>
                  </li>

                  <li>
                    <a
                      href="#"
                      class="text-13px px-6 py-2 leading-1.8 bg-section-bg-1 hover:bg-secondary-color hover:text-white flex items-center justify-center font-bold"
                    >
                      DESGIN
                    </a>
                  </li>

                  <li>
                    <a
                      href="#"
                      class="text-13px px-6 py-2 leading-1.8 bg-section-bg-1 hover:bg-secondary-color hover:text-white flex items-center justify-center font-bold"
                      >UX
                    </a>
                  </li>

                  <li>
                    <a
                      href="#"
                      class="text-13px px-6 py-2 leading-1.8 bg-section-bg-1 hover:bg-secondary-color hover:text-white flex items-center justify-center font-bold"
                    >
                      USABILITY
                    </a>
                  </li>

                  <li>
                    <a
                      href="#"
                      class="text-13px px-6 py-2 leading-1.8 bg-section-bg-1 hover:bg-secondary-color hover:text-white flex items-center justify-center font-bold"
                    >
                      DEVELOP
                    </a>
                  </li>

                  <li>
                    <a
                      href="#"
                      class="text-13px px-6 py-2 leading-1.8 bg-section-bg-1 hover:bg-secondary-color hover:text-white flex items-center justify-center font-bold"
                    >
                      ICON
                    </a>
                  </li>

                  <li>
                    <a
                      href="#"
                      class="text-13px px-6 py-2 leading-1.8 bg-section-bg-1 hover:bg-secondary-color hover:text-white flex items-center justify-center font-bold"
                      >CAR
                    </a>
                  </li>

                  <li>
                    <a
                      href="#"
                      class="text-13px px-6 py-2 leading-1.8 bg-section-bg-1 hover:bg-secondary-color hover:text-white flex items-center justify-center font-bold"
                    >
                      SERVICE
                    </a>
                  </li>

                  <li>
                    <a
                      href="#"
                      class="text-13px px-6 py-2 leading-1.8 bg-section-bg-1 hover:bg-secondary-color hover:text-white flex items-center justify-center font-bold"
                    >
                      REPAIRS
                    </a>
                  </li>

                  <li>
                    <a
                      href="#"
                      class="text-13px px-6 py-2 leading-1.8 bg-section-bg-1 hover:bg-secondary-color hover:text-white flex items-center justify-center font-bold"
                    >
                      AUTO PARTS
                    </a>
                  </li>

                  <li>
                    <a
                      href="#"
                      class="text-13px px-6 py-2 leading-1.8 bg-section-bg-1 hover:bg-secondary-color hover:text-white flex items-center justify-center font-bold"
                      >OIL
                    </a>
                  </li>

                  <li>
                    <a
                      href="#"
                      class="text-13px px-6 py-2 leading-1.8 bg-section-bg-1 hover:bg-secondary-color hover:text-white flex items-center justify-center font-bold"
                      >DEALER
                    </a>
                  </li>

                  <li>
                    <a
                      href="#"
                      class="text-13px px-6 py-2 leading-1.8 bg-section-bg-1 hover:bg-secondary-color hover:text-white flex items-center justify-center font-bold"
                      >OIL CHANGE
                    </a>
                  </li>

                  <li>
                    <a
                      href="#"
                      class="text-13px px-6 py-2 leading-1.8 bg-section-bg-1 hover:bg-secondary-color hover:text-white flex items-center justify-center font-bold"
                      >BODY COLOR
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>


@endsection