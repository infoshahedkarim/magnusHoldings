@extends('layout.layout')

@php
$title='Magpie';
@endphp

@section('content')


<!-- banner section -->
<section>
        <!-- banner section -->
        <div class="hero hero-primary overflow-hidden relative z-0">
          <!-- Swiper -->
          <div class="hero-slider-container swiper-container relative">
            <div class="home-3">
              <div>
                <!-- Hero  1 -->
                <div
                  class="relative z-0 pt-300px md:pt-50 pb-50px 4xl:h-screen 4xl:min-h-[800px] overflow-hidden flex flex-col justify-center bg-cover bg-center bg-no-repeat]"
                  id="hero-slider">
                  <!-- overlay -->
                  <div
                    class="absolute top-0 left-0 w-full h-full bg-overlay z-20"
                  ></div>
                  <div class="container w-full relative z-xl tab hero-tab">
                    <!-- action -->
                    <div class="tab-links flex gap-x-10px items-center mb-10px">
                      <div
                        class="active text-sm lg:text-base text-heading-color relative group whitespace-nowrap transition-all duration-300 bg-section-bg-1 inline-block font-bold"
                      >
                        <button
                          class="relative z-10 px-25px lg:px-10 py-15px whitespace-normal leading-1.8 lg:leading-1.8 uppercase"
                        >
                          <i class="fas fa-home mr-10px"></i> Buy Home
                        </button>
                      </div>
                      <div
                        class="text-sm lg:text-base text-heading-color relative group whitespace-nowrap transition-all duration-300 bg-section-bg-1 inline-block font-bold"
                      >
                        <button
                          class="relative z-10 px-25px lg:px-10 py-15px whitespace-normal leading-1.8 lg:leading-1.8 uppercase"
                        >
                          <i class="fas fa-home mr-10px"></i> Sale Home
                        </button>
                      </div>
                    </div>
                    <div
                      class="tab-contents py-10 px-25px md:p-10 shadow-box-shadow-1 border border-border-color-1 bg-section-bg-1"
                    >
                      <!-- inputs -->
                      <div class="transition-all duration-200">
                        <form class="hero-form">
                          <div
                            class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-30px"
                          >
                            <div>
                              <select class="selectize apartment-select">
                                <option value="Apartment" data-display="Select">
                                  Apartment
                                </option>
                                <option value="Property Type">
                                  Property Type
                                </option>
                                <option value="Co-op">Co-op</option>
                                <option value="Condo">Condo</option>
                                <option value="Single Family Home">
                                  Single Family Home
                                </option>
                              </select>
                            </div>
                            <div>
                              <select class="selectize location-select">
                                <option data-display="Select">Location</option>
                                <option>Dhaka, Mirpur</option>
                                <option>Dhaka, Uttora</option>
                                <option>Dhaka, Banani</option>
                                <option>Dhaka, Mohammadpur</option>
                                <option>Dhaka, Rampura</option>
                              </select>
                            </div>
                            <!-- <div>
                              <select class="selectize sub-location-select">
                                <option data-display="Select">
                                  Sub Location
                                </option>
                                <option>Bayonne</option>
                                <option>Greenville</option>
                                <option>Manhattan</option>
                                <option>Queens</option>
                                <option>The Heights</option>
                                <option>Upper East Side</option>
                                <option>West Side</option>
                              </select>
                            </div> -->
                            <div>
                              <select class="selectize bedrooms-select">
                                <option data-display="Select">Bedrooms</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                              </select>
                            </div>
                            <!-- min size  -->
                            <div>
                              <input
                                type="text"
                                placeholder="Min size (in sqft)"
                                class="text-paragraph-color pl-5 pr-10 placeholder:text-paragraph-color outline-none border-2 border-border-color-9 focus:border focus:border-secondary-color h-65px block w-full rounded-none placeholder:opacity-50"
                              >
                            </div>
                            <!-- max size  -->
                            <div>
                              <input
                                type="text"
                                placeholder="max size (in sqft)"
                                class="text-paragraph-color pl-5 pr-10 placeholder:text-paragraph-color outline-none border-2 border-border-color-9 focus:border focus:border-secondary-color h-65px block w-full rounded-none placeholder:opacity-50"
                              >
                            </div>
                          </div>
                          <div>
                            <!-- .range -->
                            <div
                              class="car-price-filter-range mt-30px mb-5 lg:mb-10"
                            >
                              <div class="price_filter">
                                <div class="price_slider_amount">
                                  <input type="submit" value="Your range:" >
                                  <input
                                    type="text"
                                    class="amount"
                                    name="price"
                                    placeholder="Add Your Price"
                                  >
                                </div>
                                <div class="slider-range"></div>
                              </div>
                            </div>
                          </div>
                          <div
                            class="text-center md:col-start-1 md:col-span-2 lg:col-span-3 flex justify-center items-center"
                          >
                            <h5
                              class="uppercase text-sm md:text-base text-white relative group whitespace-nowrap font-normal mb-0 transition-all duration-300 border border-secondary-color hover:border-heading-color inline-block"
                            >
                              <span
                                class="inline-block absolute top-0 right-0 w-full h-full bg-secondary-color group-hover:bg-black hover:bg-primary-cogroup-lor z-1 group-hover:w-0 transition-all duration-300"
                              ></span>
                              <a
                                href="{{route ('project.all') }}"
                                class="relative z-1 px-5 md:px-25px lg:px-10 py-10px md:py-3 lg:py-17px group-hover:text-heading-color leading-23px"
                                >Search Inventory</a
                              >
                            </h5>
                          </div>
                        </form>
                      </div>
                      <div class="hidden transition-all duration-200">
                        <form class="hero-form">
                          <div
                            class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-30px"
                          >
                            <div>
                              <select class="selectize apartment-select">
                                <option
                                  value="Property Type"
                                  data-display="Select"
                                >
                                  Property Type
                                </option>
                                <option value="Apartment">Apartment</option>
                                <option value="Co-op">Co-op</option>
                                <option value="Condo">Condo</option>
                                <option value="Single Family Home">
                                  Single Family Home
                                </option>
                              </select>
                            </div>
                            <div>
                              <select class="selectize location-select">
                                <option data-display="Select">Location</option>
                                <option>Dhaka, Mirpur</option>
                                <option>Dhaka, Uttora</option>
                                <option>Dhaka, Banani</option>
                                <option>Dhaka, Mohammadpur</option>
                                <option>Dhaka, Rampura</option>
                              </select>
                            </div>
                            <!-- <div>
                              <select class="selectize sub-location-select">
                                <option data-display="Select">
                                  Sub Location
                                </option>
                                <option>Bayonne</option>
                                <option>Greenville</option>
                                <option>Manhattan</option>
                                <option>Queens</option>
                                <option>The Heights</option>
                                <option>Upper East Side</option>
                                <option>West Side</option>
                              </select>
                            </div> -->
                            <div>
                              <select class="selectize bedrooms-select">
                                <option data-display="Select">Bedrooms</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                              </select>
                            </div>
                            <!-- min size  -->
                            <div>
                              <input
                                type="text"
                                placeholder="Min size (in sqft)"
                                class="text-paragraph-color pl-5 pr-10 placeholder:text-paragraph-color outline-none border-2 border-border-color-9 focus:border focus:border-secondary-color h-65px block w-full rounded-none placeholder:opacity-50"
                              >
                            </div>
                            <!-- max size  -->
                            <div>
                              <input
                                type="text"
                                placeholder="max size (in sqft)"
                                class="text-paragraph-color pl-5 pr-10 placeholder:text-paragraph-color outline-none border-2 border-border-color-9 focus:border focus:border-secondary-color h-65px block w-full rounded-none placeholder:opacity-50"
                              >
                            </div>
                          </div>
                          <div>
                            <!-- .range -->
                            <div
                              class="car-price-filter-range mt-30px mb-5 lg:mb-10"
                            >
                              <div class="price_filter">
                                <div class="price_slider_amount">
                                  <input type="submit" value="Your range:" >
                                  <input
                                    type="text"
                                    class="amount"
                                    name="price"
                                    placeholder="Add Your Price"
                                  >
                                </div>
                                <div class="slider-range"></div>
                              </div>
                            </div>
                          </div>
                          <div
                            class="text-center md:col-start-1 md:col-span-2 lg:col-span-3 flex justify-center items-center"
                          >
                            <h5
                              class="uppercase text-sm md:text-base text-white relative group whitespace-nowrap font-normal mb-0 transition-all duration-300 border border-secondary-color hover:border-heading-color inline-block"
                            >
                              <span
                                class="inline-block absolute top-0 right-0 w-full h-full bg-secondary-color group-hover:bg-black hover:bg-primary-cogroup-lor z-1 group-hover:w-0 transition-all duration-300"
                              ></span>
                              <a
                                href="{{route ('project.all') }}"
                                class="relative z-1 px-5 md:px-25px lg:px-10 py-10px md:py-3 lg:py-17px group-hover:text-heading-color leading-23px"
                                >Search Inventory</a
                              >
                            </h5>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="hidden">
                <div class="swiper-button-next !text-white">
                  <i class="fas fa-arrow-right" ></i>
                </div>
                <div class="swiper-button-prev !text-white">
                  <i class="fas fa-arrow-left" ></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

<!-- latest appartments  section -->

<section>
  <div class="container pt-115px pb-70px modal-container">
    <!-- section heading -->
    <div class="text-center mb-50px">
      <p
        class="text-sm md:text-15px lg:text-base text-secondary-color bg-secondary-color bg-opacity-10 capitalize 1b-15px py-0.5 px-5 mb-15px rounded-full inline-block font-semibold">
        <span class="leading-1.3">Properties</span>
      </p>
      <h2
        class="text-2xl sm:text-3xl md:text-26px lg:text-3xl xl:text-44px text-heading-color font-bold">
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
            <div
              class="group border border-border-color-13 shadow-box-shadow-4">
              <!-- card thumbs -->
              <div class="relative leading-1">
                <a
                  href="{{route('project.show', $project->slug)}}"
                  class="overflow-hidden">
                  <img
                    src="{{asset('storage/'.$project->image1 ?? '')}}"
                    class="w-full group-hover:scale-110 transition-all duration-700"
                    alt="">
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
                <p
                  class="text-secondary-color font-semibold mb-15px uppercase">
                  <span class="leading-25px">{{$project->place}}</span>
                </p>
                <h4
                  class="text-lg md:text-xl lg:text-22px font-semibold text-heading-color mb-15px">
                  <a
                    href="{{route('project.show', $project->slug)}}"
                    class="hover:text-secondary-color leading-1.3">{{$project->title}}</a>
                </h4>

                <div class="text-sm">
                  <a
                    href="{{route('project.show', $project->slug)}}"
                    class="hover:text-secondary-color"><i
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
                <div
                  class="card-quick-area flex gap-x-2 pb-30px leading-1 transition-all duration-300">
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
              <!-- cart footer -->
              <div class="p-5 lg:px-30px border-t border-border-color-1">
                <h5
                  class="text-lg text-secondary-color font-semibold mb-5px">
                  <span class="leading-1.8">৳{{$project->price}}</span>
                  <label class="text-sm font-normal">/Month</label>
                </h5>
              </div>
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
      <div
        class="modal-close fixed md:absolute top-0 left-0 w-full h-full z-xsmall cursor-zoom-out"></div>
      <div
        class="modal-content transition-all duration-500 -translate-y-20 sm:max-w-500px lg:max-w-980px m-2 mt-150px sm:mx-auto relative z-small rounded-lg">
        <div
          class="grid grid-cols-1 lg:grid-cols-2 gap-x-30px p-30px bg-white relative">
          <div>
            <img
              src="./assets/img/product/4.png"
              class="w-full"
              alt="">
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
                <a
                  href="#"
                  class="text-xs text-ratings hover:text-secondary-color"><i class="fas fa-star leading-1.8"></i></a>
              </li>
              <li>
                <a
                  href="#"
                  class="text-xs text-ratings hover:text-secondary-color"><i class="fas fa-star leading-1.8"></i></a>
              </li>
              <li>
                <a
                  href="#"
                  class="text-xs text-ratings hover:text-secondary-color"><i class="fas fa-star leading-1.8"></i></a>
              </li>
              <li>
                <a
                  href="#"
                  class="text-xs text-ratings hover:text-secondary-color"><i class="fas fa-star-half-alt leading-1.8"></i></a>
              </li>
              <li>
                <a
                  href="#"
                  class="text-xs text-ratings hover:text-secondary-color"><i class="far fa-star leading-1.8"></i></a>
              </li>
              <li>
                <a
                  href="#"
                  class="text-xs text-ratings hover:text-secondary-color">
                  ( 95 Reviews )</a>
              </li>
            </ul>

            <h4
              class="text-22px md:text-2xl font-bold text-heading-color mb-0">
              <a
                href="{{route ('project.all') }}"
                class="leading-1.3 hover:text-secondary-color">3 Rooms Manhattan</a>
            </h4>
            <p
              class="text-34px md:text-50px text-secondary-color font-semibold mb-5 pb-0 border-b border-border-color-12 border-opacity-25 leading-1.2">
              <span>৳34,900</span>
              <del
                class="text-26px md:text-40px leading-1.2 opacity-60 pl-1">৳36,500</del>
            </p>
            <p class="text-sm lg:text-base mb-9 md:mb-10">
              <span class="leading-1.8">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Dignissimos repellendus repudiandae incidunt quidem
                pariatur expedita, quo quis modi tempore non.</span>
            </p>

            <ul
              class="flex flex-wrap gap-5 pb-5 mb-5 border-b border-border-color-12 border-opacity-25">
              <li class="text-sm">
                <button
                  class="modal-open leading-1.8 font-semibold hover:text-secondary-color transition-all duration-300"
                  data-modal-index="3">
                  <i class="far fa-heart px-0.5"></i> Add to Wishlist
                </button>
              </li>

              <li class="text-sm">
                <button
                  class="leading-1.8 font-semibold hover:text-secondary-color transition-all duration-300">
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
                <a
                  href="https://www.facebook.com/"
                  class="text-sm lg:text-base hover:text-secondary-color">
                  <i class="fab fa-facebook-f leading-1.8"></i>
                </a>
              </li>
              <li>
                <a
                  href="https://x.com/"
                  class="text-sm lg:text-base hover:text-secondary-color">
                  <i class="fab fa-twitter leading-1.8"></i>
                </a>
              </li>
              <li>
                <a
                  href="https://www.linkedin.com/"
                  class="text-sm lg:text-base hover:text-secondary-color">
                  <i class="fab fa-linkedin leading-1.8"></i>
                </a>
              </li>
              <li>
                <a
                  href="https://www.instagram.com/"
                  class="text-sm lg:text-base hover:text-secondary-color">
                  <i class="fab fa-instagram leading-1.8"></i>
                </a>
              </li>
            </ul>

            <!-- action -->
            <div class="text-end">
              <a
                href="{{route ('project.all') }}"
                class="text-xs hover:text-secondary-color underline hover:underline">
                <span class="leading-1.8">View Details</span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- modal  wishlist 1-->
    <div
      class="modal hidden fixed top-0 left-0 w-full h-full z-xxl transition-all duration-500 bg-lightBlack opacity-0 overflow-y-auto">
      <div
        class="modal-close fixed md:absolute top-0 left-0 w-full h-full z-xsmall cursor-zoom-out"></div>

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

            <h4
              class="text-base lg:text-lg font-bold text-heading-color mb-10px">
              <a
                href="{{route ('project.all') }}"
                class="leading-1.3 hover:text-secondary-color">3 Rooms Manhattan</a>
            </h4>

            <p
              class="text-sm lg:text-base mb-5 md:mb-6  ">
              <i class="fa fa-check-circle leading-1 text-green float-left clear-both pr-1.5 mt-1.5"></i>
              Successfully added to your Wishlist
            </p>
            <!-- action -->
            <div>
              <h5
                class="capitalize text-sm md:text-base text-white relative group whitespace-nowrap font-normal mb-0 transition-all duration-300 border border-secondary-color hover:border-heading-color inline-block">
                <span
                  class="inline-block absolute top-0 right-0 w-full h-full bg-secondary-color group-hover:bg-black hover:bg-primary-cogroup-lor z-1 group-hover:w-0 transition-all duration-300"></span>
                <a
                  href="{{route ('project.all') }}"
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
      <div
        class="modal-close fixed md:absolute top-0 left-0 w-full h-full z-xsmall cursor-zoom-out"></div>

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

            <h4
              class="text-base lg:text-lg font-bold text-heading-color mb-10px">
              <a
                href="{{route ('project.all') }}"
                class="leading-1.3 hover:text-secondary-color">3 Rooms Manhattan</a>
            </h4>

            <p
              class="text-sm lg:text-base mb-5 md:mb-6  ">
              <i class="fa fa-check-circle leading-1 text-green float-left clear-both pr-1.5 mt-1.5"></i>
              Successfully added to your Wishlist
            </p>
            <!-- action -->
            <div>
              <h5
                class="capitalize text-sm md:text-base text-white relative group whitespace-nowrap font-normal mb-0 transition-all duration-300 border border-secondary-color hover:border-heading-color inline-block">
                <span
                  class="inline-block absolute top-0 right-0 w-full h-full bg-secondary-color group-hover:bg-black hover:bg-primary-cogroup-lor z-1 group-hover:w-0 transition-all duration-300"></span>
                <a
                  href="{{route ('project.all') }}"
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
<div
  class="pt-115px pb-30 mb-30 bg-my-image bg-cover bg-center bg-no-repeat text-center relative z-0">

  <!-- floating area -->
  <div
    class="absolute left-0 top-1/2 -translate-y-1/2 max-w-[34%] hidden lg:block -z-1">
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
      <a
        href="tel:+123456789"
        class="relative z-10 px-5 md:px-25px lg:px-10 py-10px md:py-3 lg:py-17px group-hover:text-heading-color leading-23px">MAKE A CALL</a>
    </h5>
    <h5
      class="capitalize text-sm md:text-base text-white relative group whitespace-nowrap font-normal transition-all duration-300 border border-white bg-transparent inline-block mr-15px">
      <span
        class="inline-block absolute top-0 left-0 w-0 h-full bg-transparent group-hover:bg-secondary-color z-1 group-hover:w-full transition-all duration-300"></span>
      <a
        href="{{route ('contact') }}"
        class="relative z-10 px-5 md:px-25px lg:px-10 py-10px md:py-3 lg:py-17px group-hover:text-white leading-23px">CONTACT US</a>
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
        <span class="leading-1.3">Features</span>
      </p>
      <h2
        class="text-2xl sm:text-3xl md:text-26px lg:text-3xl xl:text-44px text-heading-color font-bold">
        <span class="leading-1.3">Core Features </span>
      </h2>
    </div>
    <!-- services cards  -->

    <div class="service-cards flex flex-wrap justify-center items-center">
      <!-- card 1 -->
      <div
        class="service-card service-card-2 basis-full sm:basis-1/2 lg:basis-1/4 px-15px lg:px-0 mb-30px">
        <div
          class="border border-border-color-8 relative py-10 pb-35px px-30px transition-all duration-300">
          <div class="mb-15px text-6xl text-secondary-color">
            <i class="flaticon-apartment"></i>
          </div>
          <h6
            class="text-17px md:text-lg lg:text-xl text-heading-color font-bold mb-15px">
            <a
              class="hover:text-secondary-color leading-1.3"
              href="{{route ('project.all') }}">Smart living</a>
          </h6>
          <p class="text-sm">
            <span class="leading-1.8">Lorem ipsum dolor sit ame it, consectetur adipisicing elit,
              sed do eiusmod te mp or incididunt ut labore</span>
          </p>

          <span
            class="hover-line absolute bottom-0 left-0 w-0 h-1 bg-secondary-color transition-all duration-300 block"></span>
        </div>
      </div>

      <!-- card 2 -->
      <div
        class="service-card service-card-2 basis-full sm:basis-1/2 lg:basis-1/4 px-15px lg:px-0 mb-30px active">
        <div
          class="border border-border-color-8 relative py-10 pb-35px px-30px transition-all duration-300">
          <div class="mb-15px text-6xl text-secondary-color">
            <i class="flaticon-park"></i>
          </div>
          <h6
            class="text-17px md:text-lg lg:text-xl text-heading-color font-bold mb-15px">
            <a
              class="hover:text-secondary-color leading-1.3"
              href="{{route ('project.all') }}">ECO Construction</a>
          </h6>
          <p class="text-sm">
            <span class="leading-1.8">Lorem ipsum dolor sit ame it, consectetur adipisicing elit,
              sed do eiusmod te mp or incididunt ut labore</span>
          </p>

          <span
            class="hover-line absolute bottom-0 left-0 w-0 h-1 bg-secondary-color transition-all duration-300 block"></span>
        </div>
      </div>

      <!-- card 3 -->
      <div
        class="service-card service-card-2 basis-full sm:basis-1/2 lg:basis-1/4 px-15px lg:px-0 mb-30px">
        <div
          class="border border-border-color-8 relative py-10 pb-35px px-30px transition-all duration-300">
          <div class="mb-15px text-6xl text-secondary-color">
            <i class="flaticon-maps-and-location"></i>
          </div>
          <h6
            class="text-17px md:text-lg lg:text-xl text-heading-color font-bold mb-15px">
            <a
              class="hover:text-secondary-color leading-1.3"
              href="{{route ('project.all') }}">Atractive Location</a>
          </h6>
          <p class="text-sm">
            <span class="leading-1.8">Lorem ipsum dolor sit ame it, consectetur adipisicing elit,
              sed do eiusmod te mp or incididunt ut labore</span>
          </p>

          <span
            class="hover-line absolute bottom-0 left-0 w-0 h-1 bg-secondary-color transition-all duration-300 block"></span>
        </div>
      </div>

      <!-- card 4 -->
      <div
        class="service-card service-card-2 basis-full sm:basis-1/2 lg:basis-1/4 px-15px lg:px-0 mb-30px">
        <div
          class="border border-border-color-8 relative py-10 pb-35px px-30px transition-all duration-300">
          <div class="mb-15px text-6xl text-secondary-color">
            <i class="flaticon-excavator"></i>
          </div>
          <h6
            class="text-17px md:text-lg lg:text-xl text-heading-color font-bold mb-15px">
            <a
              class="hover:text-secondary-color leading-1.3"
              href="{{route ('project.all') }}">Modern Technology</a>
          </h6>
          <p class="text-sm">
            <span class="leading-1.8">Lorem ipsum dolor sit ame it, consectetur adipisicing elit,
              sed do eiusmod te mp or incididunt ut labore</span>
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
        <span class="leading-1.3">Our Services</span>
      </p>
      <h2
        class="text-2xl sm:text-3xl md:text-26px lg:text-3xl xl:text-44px text-heading-color font-bold">
        <span class="leading-1.3"> Our Main Focus </span>
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
              href="{{route ('project.all') }}">Make Homes</a>
          </h6>
          <p class="text-sm mb-25px">
            <span class="leading-1.8">over 1 million+ homes for sale available on the website, we
              can match you with a house you will want to call home.</span>
          </p>
          <div class="text-sm text-color-1 font-bold">
            <a
              class="find-service hover:text-secondary-color flex items-center justify-center"
              href="{{route ('project.all') }}">Find A Home
              <i class="flaticon-right-arrow inline-block leading-1"></i></a>
          </div>
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
              href="{{route ('project.all') }}">Buy Lands</a>
          </h6>
          <p class="text-sm mb-25px">
            <span class="leading-1.8">over 1 million+ homes for sale available on the website, we
              can match you with a house you will want to call home.</span>
          </p>
          <div class="text-sm text-color-1 font-bold">
            <a
              class="find-service hover:text-secondary-color flex items-center justify-center"
              href="{{route ('project.all') }}">Find A Home
              <i class="flaticon-right-arrow inline-block leading-1"></i></a>
          </div>
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
              href="{{route ('project.all') }}">Sell Homes</a>
          </h6>
          <p class="text-sm mb-25px">
            <span class="leading-1.8">over 1 million+ homes for sale available on the website, we
              can match you with a house you will want to call home.</span>
          </p>
          <div class="text-sm text-color-1 font-bold">
            <a
              class="find-service hover:text-secondary-color flex items-center justify-center"
              href="{{route ('project.all') }}">Find A Home
              <i class="flaticon-right-arrow inline-block leading-1"></i></a>
          </div>
          <span
            class="hover-line absolute bottom-0 left-0 w-0 h-1 bg-secondary-color transition-all duration-300 block"></span>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- featured appartments  section -->
<section>
  <div class="container-3 pt-115px pb-[75px] modal-container">
    <!-- section heading -->
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
      <!-- apartment cards  -->
      <div class="swiper featured-apartments-slider static">
        <div class="swiper-wrapper">

          @foreach ($projects as $project)
          <!-- card 1 -->
          <div class="swiper-slide mb-65px px-15px">
            <div
              class="group border border-border-color-13 shadow-box-shadow-4">
              <!-- card thumbs -->
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
              <!-- card body -->
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
              <!-- cart footer -->
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

        <!-- pagination -->
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
        <!--  navigation -->
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
</section>


<!-- counter section -->
<section class="bg-section-bg-1">
  <div class="container pt-30 pb-70px">
    <div
      class="text-center counter grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-30px mb-45px -mt-3">
      <!-- count 1 -->
      <div>
        <div class="text-65px text-secondary-color">
          <i class="flaticon-select leading-1"></i>
        </div>
        <h5
          class="text-3xl md:text-4xl lg:text-42px text-heading-color font-bold mb-10px">
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
        <h5
          class="text-3xl md:text-4xl lg:text-42px text-heading-color font-bold mb-10px">
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
        <h5
          class="text-3xl md:text-4xl lg:text-42px text-heading-color font-bold mb-10px">
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
        <h5
          class="text-3xl md:text-4xl lg:text-42px text-heading-color font-bold mb-10px">
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
  <div
    class="w-full h-full bg-black bg-opacity-30 absolute top-0 left-0 -z-1"></div>
  <a
    class="glightbox2 w-50px h-50px lg:w-20 lg:h-20 text-center lg:text-lg text-secondary-color shadow-box-shadow-2 rounded-full bg-white flex items-center justify-center animate-pulse1"
    href="{{$homes->url}}"
    data-glightbox="type: video;">
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
        <span class="leading-1.3">Our Aminities</span>
      </p>
      <h2
        class="text-2xl sm:text-3xl md:text-26px lg:text-3xl xl:text-44px text-heading-color font-bold">
        <span class="leading-1.3">Building Aminities </span>
      </h2>
    </div>

    <div
      class="flex flex-wrap items-center justify-center -mx-15px px-7px md:px-0">
      <!-- card 1 -->
      <div
        class="basis-1/2 md:basis-1/3 lg:basis-1/4 px-2 md:px-15px mb-50px">
        <a
          href="{{route ('project.all') }}"
          class="pt-10 pb-35px px-15px md:px-5 xl:px-30px bg-white hover:bg-secondary-color transition-all duration-300 shadow-box-shadow-4 rounded-10px flex flex-col items-center group relative">
          <span
            class="block w-60px md:w-20 xl:w-100px h-60px md:h-20 xl:h-100px text-25px md:text-3xl xl:text-45px bg-section-bg-5 rounded-100% transition-all duration-300 group-hover:bg-white text-secondary-color mb-5 text-center leading-1">
            <i
              class="flaticon-car leading-65px md:leading-90px xl:leading-110px"></i>
          </span>
          <span
            class="block text-13px md:text-lg xl:text-22px transition-all duration-300 text-heading-color group-hover:text-white mb-5 font-poppins font-semibold leading-1.8 capitalize">
            Parking Space
          </span>

          <span
            class="text-lg w-45px h-45px border border-border-color-8 shadow-box-shadow-2 rounded-100% bg-white group-hover:text-secondary-color transition-all duration-300 text-center block absolute bottom-0 left-1/2 -translate-x-1/2 translate-y-1/2">
            <i class="flaticon-right-arrow leading-12"></i>
          </span>
        </a>
      </div>
      <!-- card 2 -->
      <div
        class="basis-1/2 md:basis-1/3 lg:basis-1/4 px-2 md:px-15px mb-50px">
        <a
          href="{{route ('project.all') }}"
          class="pt-10 pb-35px px-15px md:px-5 xl:px-30px bg-white hover:bg-secondary-color transition-all duration-300 shadow-box-shadow-4 rounded-10px flex flex-col items-center group relative">
          <span
            class="block w-60px md:w-20 xl:w-100px h-60px md:h-20 xl:h-100px text-25px md:text-3xl xl:text-45px bg-section-bg-5 rounded-100% transition-all duration-300 group-hover:bg-white text-secondary-color mb-5 text-center leading-1">
            <i
              class="flaticon-swimming leading-65px md:leading-90px xl:leading-110px"></i>
          </span>
          <span
            class="block text-13px md:text-lg xl:text-22px transition-all duration-300 text-heading-color group-hover:text-white mb-5 font-poppins font-semibold leading-1.8 capitalize">
            Swimming Pool
          </span>

          <span
            class="text-lg w-45px h-45px border border-border-color-8 shadow-box-shadow-2 rounded-100% bg-white group-hover:text-secondary-color transition-all duration-300 text-center block absolute bottom-0 left-1/2 -translate-x-1/2 translate-y-1/2">
            <i class="flaticon-right-arrow leading-12"></i>
          </span>
        </a>
      </div>
      <!-- card 3 -->
      <div
        class="basis-1/2 md:basis-1/3 lg:basis-1/4 px-2 md:px-15px mb-50px">
        <a
          href="{{route ('project.all') }}"
          class="pt-10 pb-35px px-15px md:px-5 xl:px-30px bg-white hover:bg-secondary-color transition-all duration-300 shadow-box-shadow-4 rounded-10px flex flex-col items-center group relative">
          <span
            class="block w-60px md:w-20 xl:w-100px h-60px md:h-20 xl:h-100px text-25px md:text-3xl xl:text-45px bg-section-bg-5 rounded-100% transition-all duration-300 group-hover:bg-white text-secondary-color mb-5 text-center leading-1">
            <i
              class="flaticon-secure-shield leading-65px md:leading-90px xl:leading-110px"></i>
          </span>
          <span
            class="block text-13px md:text-lg xl:text-22px transition-all duration-300 text-heading-color group-hover:text-white mb-5 font-poppins font-semibold leading-1.8 capitalize">
            Private Security
          </span>

          <span
            class="text-lg w-45px h-45px border border-border-color-8 shadow-box-shadow-2 rounded-100% bg-white group-hover:text-secondary-color transition-all duration-300 text-center block absolute bottom-0 left-1/2 -translate-x-1/2 translate-y-1/2">
            <i class="flaticon-right-arrow leading-12"></i>
          </span>
        </a>
      </div>
      <!-- card 4 -->
      <div
        class="basis-1/2 md:basis-1/3 lg:basis-1/4 px-2 md:px-15px mb-50px">
        <a
          href="{{route ('project.all') }}"
          class="pt-10 pb-35px px-15px md:px-5 xl:px-30px bg-white hover:bg-secondary-color transition-all duration-300 shadow-box-shadow-4 rounded-10px flex flex-col items-center group relative">
          <span
            class="block w-60px md:w-20 xl:w-100px h-60px md:h-20 xl:h-100px text-25px md:text-3xl xl:text-45px bg-section-bg-5 rounded-100% transition-all duration-300 group-hover:bg-white text-secondary-color mb-5 text-center leading-1">
            <i
              class="flaticon-stethoscope leading-65px md:leading-90px xl:leading-110px"></i>
          </span>
          <span
            class="block text-13px md:text-lg xl:text-22px transition-all duration-300 text-heading-color group-hover:text-white mb-5 font-poppins font-semibold leading-1.8 capitalize">
            Medical Center
          </span>

          <span
            class="text-lg w-45px h-45px border border-border-color-8 shadow-box-shadow-2 rounded-100% bg-white group-hover:text-secondary-color transition-all duration-300 text-center block absolute bottom-0 left-1/2 -translate-x-1/2 translate-y-1/2">
            <i class="flaticon-right-arrow leading-12"></i>
          </span>
        </a>
      </div>
      <!-- card 5 -->
      <div
        class="basis-1/2 md:basis-1/3 lg:basis-1/4 px-2 md:px-15px mb-50px">
        <a
          href="{{route ('project.all') }}"
          class="pt-10 pb-35px px-15px md:px-5 xl:px-30px bg-white hover:bg-secondary-color transition-all duration-300 shadow-box-shadow-4 rounded-10px flex flex-col items-center group relative">
          <span
            class="block w-60px md:w-20 xl:w-100px h-60px md:h-20 xl:h-100px text-25px md:text-3xl xl:text-45px bg-section-bg-5 rounded-100% transition-all duration-300 group-hover:bg-white text-secondary-color mb-5 text-center leading-1">
            <i
              class="flaticon-book leading-65px md:leading-90px xl:leading-110px"></i>
          </span>
          <span
            class="block text-13px md:text-lg xl:text-22px transition-all duration-300 text-heading-color group-hover:text-white mb-5 font-poppins font-semibold leading-1.8 capitalize">
            Library Area
          </span>

          <span
            class="text-lg w-45px h-45px border border-border-color-8 shadow-box-shadow-2 rounded-100% bg-white group-hover:text-secondary-color transition-all duration-300 text-center block absolute bottom-0 left-1/2 -translate-x-1/2 translate-y-1/2">
            <i class="flaticon-right-arrow leading-12"></i>
          </span>
        </a>
      </div>
      <!-- card 6 -->
      <div
        class="basis-1/2 md:basis-1/3 lg:basis-1/4 px-2 md:px-15px mb-50px">
        <a
          href="{{route ('project.all') }}"
          class="pt-10 pb-35px px-15px md:px-5 xl:px-30px bg-white hover:bg-secondary-color transition-all duration-300 shadow-box-shadow-4 rounded-10px flex flex-col items-center group relative">
          <span
            class="block w-60px md:w-20 xl:w-100px h-60px md:h-20 xl:h-100px text-25px md:text-3xl xl:text-45px bg-section-bg-5 rounded-100% transition-all duration-300 group-hover:bg-white text-secondary-color mb-5 text-center leading-1">
            <i
              class="flaticon-bed-1 leading-65px md:leading-90px xl:leading-110px"></i>
          </span>
          <span
            class="block text-13px md:text-lg xl:text-22px transition-all duration-300 text-heading-color group-hover:text-white mb-5 font-poppins font-semibold leading-1.8 capitalize">
            King Size Beds
          </span>

          <span
            class="text-lg w-45px h-45px border border-border-color-8 shadow-box-shadow-2 rounded-100% bg-white group-hover:text-secondary-color transition-all duration-300 text-center block absolute bottom-0 left-1/2 -translate-x-1/2 translate-y-1/2">
            <i class="flaticon-right-arrow leading-12"></i>
          </span>
        </a>
      </div>
      <!-- card 7 -->
      <div
        class="basis-1/2 md:basis-1/3 lg:basis-1/4 px-2 md:px-15px mb-50px">
        <a
          href="{{route ('project.all') }}"
          class="pt-10 pb-35px px-15px md:px-5 xl:px-30px bg-white hover:bg-secondary-color transition-all duration-300 shadow-box-shadow-4 rounded-10px flex flex-col items-center group relative">
          <span
            class="block w-60px md:w-20 xl:w-100px h-60px md:h-20 xl:h-100px text-25px md:text-3xl xl:text-45px bg-section-bg-5 rounded-100% transition-all duration-300 group-hover:bg-white text-secondary-color mb-5 text-center leading-1">
            <i
              class="flaticon-home-2 leading-65px md:leading-90px xl:leading-110px"></i>
          </span>
          <span
            class="block text-13px md:text-lg xl:text-22px transition-all duration-300 text-heading-color group-hover:text-white mb-5 font-poppins font-semibold leading-1.8 capitalize">
            Smart Homes
          </span>

          <span
            class="text-lg w-45px h-45px border border-border-color-8 shadow-box-shadow-2 rounded-100% bg-white group-hover:text-secondary-color transition-all duration-300 text-center block absolute bottom-0 left-1/2 -translate-x-1/2 translate-y-1/2">
            <i class="flaticon-right-arrow leading-12"></i>
          </span>
        </a>
      </div>
      <!-- card 8 -->
      <div
        class="basis-1/2 md:basis-1/3 lg:basis-1/4 px-2 md:px-15px mb-50px">
        <a
          href="{{route ('project.all') }}"
          class="pt-10 pb-35px px-15px md:px-5 xl:px-30px bg-white hover:bg-secondary-color transition-all duration-300 shadow-box-shadow-4 rounded-10px flex flex-col items-center group relative">
          <span
            class="block w-60px md:w-20 xl:w-100px h-60px md:h-20 xl:h-100px text-25px md:text-3xl xl:text-45px bg-section-bg-5 rounded-100% transition-all duration-300 group-hover:bg-white text-secondary-color mb-5 text-center leading-1">
            <i
              class="flaticon-slider leading-65px md:leading-90px xl:leading-110px"></i>
          </span>
          <span
            class="block text-13px md:text-lg xl:text-22px transition-all duration-300 text-heading-color group-hover:text-white mb-5 font-poppins font-semibold leading-1.8 capitalize">
            Kid’s Playland
          </span>

          <span
            class="text-lg w-45px h-45px border border-border-color-8 shadow-box-shadow-2 rounded-100% bg-white group-hover:text-secondary-color transition-all duration-300 text-center block absolute bottom-0 left-1/2 -translate-x-1/2 translate-y-1/2">
            <i class="flaticon-right-arrow leading-12"></i>
          </span>
        </a>
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

<script>
  const images = [
    "{{ asset('storage/' . $homes->image ?? '') }}",
    "{{ asset('storage/' . $homes->image1 ?? '') }}",
    "{{ asset('storage/' . $homes->image2 ?? '') }}"
  ];

  let currentIndex = 0;
  const hero = document.getElementById("hero-slider");

  setInterval(() => {
    currentIndex = (currentIndex + 1) % images.length;
    hero.style.backgroundImage = `url('${images[currentIndex]}')`;
  }, 4000); // 4 seconds
</script>





@endsection