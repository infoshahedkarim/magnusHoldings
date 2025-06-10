@extends('layout.layout')

@php
    $title='Magpie | All Projects';
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
                >All Our Projects</span
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
               Projects List 
              </li>
            </ul>
          </div>
        </div>
      </section>

      <!-- poperty section -->
      <section>
        <div class="container modal-container tab property-tab py-30">
          <div>
            <!-- poperty body -->
            <div>
              <!-- filter top -->
              <div
                class="mb-50px flex flex-col md:flex-row flex-wrap md:items-center justify-between gap-y-4"
              >
                <ul class="flex flex-wrap items-center gap-y-3 tab-links">
                  <li class="text-3xl pr-25px active">
                    <button
                      class="text-paragraph-color hover:text-secondary-color"
                    >
                      <i class="fas fa-th-large"></i>
                    </button>
                  </li>
                  <li class="text-3xl pr-30px">
                    <button
                      class="text-paragraph-color hover:text-secondary-color"
                    >
                      <i class="fas fa-list"></i>
                    </button>
                  </li>
                </ul>
                <!-- <ul class="flex items-center flex-wrap gap-y-3">
                  <li class="pr-30px">
                    <form class="form-primary property-form">
                      <select class="selectize">
                        <option data-display="Select" value="Default Sorting">
                          Default Sorting
                        </option>
                        <option value="Sort by popularity">
                          Sort by popularity
                        </option>
                        <option value="Sort by new arrivals">
                          Sort by new arrivals
                        </option>
                        <option value="Sort by price: low to high">
                          Sort by price: low to high
                        </option>
                        <option value="Sort by price: high to low">
                          Sort by price: high to low
                        </option>
                      </select>
                    </form>
                  </li>
                </ul> -->
                <div>
                  <h3 class="text-base font-medium text-paragraph-color">
                    <!-- <span class="leading-50px"> Showing 9 of 20 results </span> -->
                  </h3>
                </div>
              </div>

              <div class="tab-contents">
                <!-- content 1 -->
                <div>
                  <!-- search area  -->
                  <form class="mb-30px">
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
                  @foreach($projects as $project)
                  <!-- property cards -->
                  <div class="-mx-15px">
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
                      <!-- card 1 -->
                      <div class="apart-card mb-50px px-15px">
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
                                src="{{asset('storage/'.$project->image1 ?? '')}}"
                                class="w-full group-hover:scale-110 transition-all duration-700"
                                alt=""
                              >
                            </a>
                          </div>
                          <!-- card body -->
                          <div class="px-5 pt-30px lg:px-30px">
                            <p
                              class="text-secondary-color font-semibold mb-15px uppercase"
                            >
                              <span class="leading-25px">{{$project->place}}</span>
                            </p>
                            <h4
                              class="text-lg md:text-xl lg:text-22px font-semibold text-heading-color mb-15px"
                            >
                              <a
                                href="{{route('project.show', $project->slug)}}"
                                class="hover:text-secondary-color leading-1.3"
                                >{{$project->title}}</a
                              >
                            </h4>

                            <div class="text-sm">
                              <a
                                href="{{route('project.show', $project->slug)}}"
                                class="hover:text-secondary-color"
                                ><i
                                  class="flaticon-pin text-secondary-color mr-0.5"
                                ></i>
                                {{$project->address}}</a
                              >
                            </div>

                            <ul class="flex flex-wrap gap-15px pt-4 pb-5">

                              <li>
                                <p class="leading-1.8 font-bold text-sm">
                                {{$project->squareft}}
                                  <span class="font-normal">Square Ft</span>
                                </p>
                              </li>
                            </ul>
                            <div
                              class="card-quick-area flex gap-x-2 pb-30px leading-1 transition-all duration-300"
                            >
                              <ul class="flex gap-x-2">
                                <li>
                                  <button
                                    data-modal-index="1"
                                    class="modal-open w-9 h-9 flex items-center justify-center bg-section-bg-1 text-center hover:bg-secondary-color hover:text-white font-bold"
                                  >
                                    <i class="flaticon-expand leading-1"></i>
                                  </button>
                                </li>
                                <li>
                                  <button
                                    data-modal-index="2"
                                    class="modal-open w-9 h-9 flex items-center justify-center bg-section-bg-1 text-center hover:bg-secondary-color hover:text-white font-bold"
                                  >
                                    <i class="flaticon-heart-1 leading-1"></i>
                                  </button>
                                </li>
                                <li>
                                  <a
                                    href="{{route('project.show', $project->slug)}}"
                                    class="w-9 h-9 flex items-center justify-center bg-section-bg-1 text-center hover:bg-secondary-color hover:text-white font-bold"
                                    ><i class="flaticon-add leading-1"></i
                                  ></a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <!-- cart footer -->
                          <div
                            class="p-5 lg:px-30px border-t border-border-color-1"
                          >
                            <h5
                              class="text-lg text-secondary-color font-semibold mb-5px"
                            >
                              <span class="leading-1.8">{{$project->price}}</span>
                              <label class="text-sm font-normal">/Month</label>
                            </h5>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
                <!-- content 2 -->
                <div class="hidden">
                  <!-- search area  -->
                  <form class="mb-30px">
                    <div class="flex items-center">
                      <input
                        type="text"
                        placeholder="Search your keyword..."
                        class="flex-grow text-paragraph-color text-sm font-semibold bg-section-bg-1 px-5 outline-none border-2 border-r-0 border-border-color-9 focus:border focus:border-secondary-color h-60px block rounded-none"
                      >
                      <button
                        type="submit"
                        class="flex-shrink-0 text-sm lg:text-base h-60px w-14 flex items-center justify-center text-white bg-secondary-color hover:bg-primary-color"
                      >
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </form>
                  <!-- property cards -->

                  @foreach($projects as $project)
                  <div>
                    <!-- card 1 -->
                    <div class="mb-50px">
                      <div
                        class="group border border-border-color-13 shadow-box-shadow-4 p-30px md:pb-22px flex flex-wrap"
                      >
                        <!-- card thumbs -->
                        <div class="relative leading-1 basis-full md:basis-2/5">
                          <div>
                            <a
                              href="{{route('project.show', $project->slug)}}"
                              class="overflow-hidden leading-1"
                            >
                              <img
                                src="{{asset('storage/'.$project->image1 ?? '')}}"
                                class="w-full group-hover:scale-110 transition-all duration-700"
                                alt=""
                              >
                            </a>
                          </div>
                        </div>
                        <!-- card body -->
                        <div class="basis-full md:basis-3/5 pt-25px md:pt-0">
                          <div class="pl-0 md:pl-30px">
                            <div
                              class="flex justify-between items-center gap-x-15px"
                            >
                              <p
                                class="text-secondary-color font-semibold mb-15px uppercase"
                              >
                                <span class="leading-25px">{{$project->place}}</span>
                              </p>

                              <h5
                                class="text-lg text-secondary-color font-semibold"
                              >
                                <span class="leading-1.8">{{$project->price}}</span>
                                <label class="text-sm font-normal"
                                  >/Month</label
                                >
                              </h5>
                            </div>
                            <h4
                              class="text-lg md:text-xl lg:text-22px font-semibold text-heading-color mb-15px"
                            >
                              <a
                                href="{{route('project.show', $project->slug)}}"
                                class="hover:text-secondary-color leading-1.3"
                                >{{$project->title}}</a
                              >
                            </h4>

                            <div class="text-sm">
                              <a
                                href="locations.html"
                                class="hover:text-secondary-color"
                                ><i
                                  class="flaticon-pin text-secondary-color mr-0.5"
                                ></i>
                                {{$project->address}}</a
                              >
                            </div>

                            <ul class="flex flex-wrap gap-15px pt-4 pb-5">
                              <li>
                                <p class="leading-1.8 font-bold text-sm">
                                  {{$project->squareft}}
                                  <span class="font-normal">Square Ft</span>
                                </p>
                              </li>
                            </ul>

                            <!-- card footer -->
                            <div
                              class="flex justify-between items-center flex-wrap-reverse gap-y-15px"
                            >
                              
                              <!-- quick action -->
                              <div
                                class="flex gap-x-2 relative leading-1 transition-all duration-300"
                              >
                                <ul class="flex gap-x-2">
                                  <li>
                                    <button
                                      data-modal-index="1"
                                      class="modal-open w-9 h-9 flex items-center justify-center bg-section-bg-1 text-center hover:bg-secondary-color hover:text-white font-bold"
                                    >
                                      <i class="flaticon-expand leading-1"></i>
                                    </button>
                                  </li>
                                  <li>
                                    <button
                                      data-modal-index="2"
                                      class="modal-open w-9 h-9 flex items-center justify-center bg-section-bg-1 text-center hover:bg-secondary-color hover:text-white font-bold"
                                    >
                                      <i class="flaticon-heart-1 leading-1"></i>
                                    </button>
                                  </li>
                                  <li>
                                    <a
                                      href="{{route('project.show', $project->slug)}}"
                                      class="w-9 h-9 flex items-center justify-center bg-section-bg-1 text-center hover:bg-secondary-color hover:text-white font-bold"
                                      ><i class="flaticon-add leading-1"></i
                                    ></a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
         
           
          
        </div>
      </section>

      @endsection