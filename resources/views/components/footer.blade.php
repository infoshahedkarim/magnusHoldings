
      <div
        class="pt-187px pb-5 px-15px 3xl:px-[2%] 4xl:px-[5%] mt-95px bg-section-bg-2 text-sm lg:text-base text-white relative"
      >
        <div class="px-15px">
          <!-- footer top -->
          <div
            class="container w-full absolute top-0 left-1/2 -translate-x-1/2 -translate-y-1/2"
          >
            <div
              class="px-25px lg:px-60px py-50px bg-secondary-color text-white flex justify-center lg:justify-between items-center flex-col lg:flex-row gap-y-30px lg:gap-0 sm:whitespace-nowrap"
            >
              <div>
                <h5
                  class="text-xl md:text-26px lg:text-3xl xl:text-4xl text-white font-bold mb-15px"
                >
                  <span class="leading-1.3">Looking for a dream home?</span>
                </h5>
                <p class="text-white leading-1.8">
                  We can help you realize your dream of a new home
                </p>
              </div>
              <div>
                <h5
                  class="capitalize inline-block text-sm md:text-base text-primary-color hover:text-white hover:bg-primary-color relative group whitespace-nowrap font-normal transition-all duration-300 shadow-box-shadow-3 mb-0"
                >
                  <span
                    class="inline-block absolute top-0 right-0 w-full h-full bg-white group-hover:bg-secondary-color z-1 group-hover:w-0 transition-all duration-300"
                  ></span>
                  <a
                    href="{{Route('contact.show')}}"
                    class="relative z-10 px-5 md:px-25px lg:px-10 py-10px md:py-3 lg:py-17px group-hover:text-white leading-23px"
                    >Explore Properties <i class="icon-next"></i
                  ></a>
                </h5>
              </div>
            </div>
          </div>

          <!-- footer main -->
          <div
            class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-12 gap-x-30px text-sm lg:text-base text-white"
          >
            <!-- footer about-->
            <div class="xl:col-start-1 xl:col-span-3 mb-60px lg:pr-35px">
              <div class="mb-15px">
                <a href="{{route('project.create')}}">
                  <img src="{{asset('storage/'.$footer->logodark ?? '')}}" style="width: 60%; height: auto;" alt="" >
                </a>
                <p class="leading-1.8 mb-5 lg:mb-25px text-white">
                 {{$footer->about ?? ''}}
                </p>
                <ul class="space-y-2">
                  <li>
                    <p class="leading-1.8 text-white flex">
                      <i class="icon-placeholder mr-15px mt-1"></i>
                      <span>{{$footer->address ?? ''}}</span>
                    </p>
                  </li>
                  <li>
                    <a href="tel:+0123-456789" class="leading-1.8 flex hover:text-secondary-color">
                      <i class="icon-call mr-15px mt-1"></i>
                      <span>{{$footer->phone ?? ''}}</span>
                    </a>
                  </li>
                  <li>
                    <a
                      href="mailto:{{$footer->email ?? ''}}"
                      class="leading-1.8 flex hover:text-secondary-color"
                    >
                      <i class="icon-mail mr-15px mt-1"></i>
                      <span>{{$footer->email ?? ''}}</span>
                    </a>
                  </li>
                </ul>
                <ul class="flex items-center gap-x-5 mt-5">
                  <li>
                    <a href="{{$footer->facebook ?? ''}}" class="leading-1.8 hover:text-secondary-color">
                      <i class="fab fa-facebook-f"></i>
                    </a>
                  </li>
                  <li>
                    <a href="{{$footer->twitter ?? ''}}" class="leading-1.8 hover:text-secondary-color">
                      <i class="fab fa-twitter"></i>
                    </a>
                  </li>
                  <li>
                    <a href="{{$footer->linkedin ?? ''}}" class="leading-1.8 hover:text-secondary-color">
                      <i class="fab fa-linkedin"></i>
                    </a>
                  </li>
                  <li>
                    <a href="{{$footer->youtube ?? ''}}" class="leading-1.8 hover:text-secondary-color">
                      <i class="fab fa-youtube"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <!-- footer company-->
            <div class="xl:col-start-4 xl:col-span-2 mb-60px">
              <h3 class="text-22px font-bold mb-25px text-white">
                <span class="leading-1.3"> Company </span>
              </h3>
              <ul class="space-y-[15px]">
                <li>
                  <a
                    href="{{route ('about.show') }}"
                    class="hover:text-secondary-color -translate-x-5 hover:translate-x-0 group leading-1.8"
                    ><span
                      class="text-secondary-color pr-15px opacity-0 group-hover:opacity-100 transition-all duration-300"
                      >//</span
                    >
                    About Us</a
                  >
                </li>
                <li>
                  <a
                    href="{{route ('project.all') }}"
                    class="hover:text-secondary-color -translate-x-5 hover:translate-x-0 group leading-1.8"
                    ><span
                      class="text-secondary-color pr-15px opacity-0 group-hover:opacity-100 transition-all duration-300"
                      >//</span
                    >
                    All Projects</a
                  >
                </li>
                <li>
                  <a
                    href="{{route ('contact.show') }}"
                    class="hover:text-secondary-color -translate-x-5 hover:translate-x-0 group leading-1.8"
                    ><span
                      class="text-secondary-color pr-15px opacity-0 group-hover:opacity-100 transition-all duration-300"
                      >//</span
                    >
                    Locations Map</a
                  >
                </li>
                
                <li>
                  <a
                    href="{{route ('contact.show') }}"
                    class="hover:text-secondary-color -translate-x-5 hover:translate-x-0 group leading-1.8"
                    ><span
                      class="text-secondary-color pr-15px opacity-0 group-hover:opacity-100 transition-all duration-300"
                      >//</span
                    >
                    Contact us</a
                  >
                </li>
              </ul>
            </div>
            <!-- footer services-->
            <div class="xl:col-start-6 xl:col-span-2 mb-60px">
              <h3 class="text-22px font-bold mb-25px text-white">
                <span class="leading-1.3"> Pages </span>
              </h3>
              <ul class="space-y-[15px]">
                <li>
                  <a
                    href="{{route ('project.create') }}"
                    class="hover:text-secondary-color -translate-x-5 hover:translate-x-0 group leading-1.8"
                    ><span
                      class="text-secondary-color pr-15px opacity-0 group-hover:opacity-100 transition-all duration-300"
                      >//</span
                    >
                    Home</a
                  >
                </li>
                <li>
                  <a
                    href="{{route('contact.show') }}"
                    class="hover:text-secondary-color -translate-x-5 hover:translate-x-0 group leading-1.8"
                    ><span
                      class="text-secondary-color pr-15px opacity-0 group-hover:opacity-100 transition-all duration-300"
                      >//</span
                    >
                    Email Us</a
                  >
                </li>
                <li>
                  <a
                    href="login.html"
                    class="hover:text-secondary-color -translate-x-5 hover:translate-x-0 group leading-1.8"
                    ><span
                      class="text-secondary-color pr-15px opacity-0 group-hover:opacity-100 transition-all duration-300"
                      >//</span
                    >
                    Login</a
                  >
                </li>
              </ul>
            </div>
            <!-- footer customer care-->
            <div class="xl:col-start-8 xl:col-span-2 mb-60px">
              <h3 class="text-22px font-bold mb-25px text-white">   
                <span class="leading-1.3"> </span>
              </h3>
              <ul class="space-y-[15px]">
                <li>
                  <a
                    href="{{route ('contact.show') }}"
                    class="hover:text-secondary-color -translate-x-5 hover:translate-x-0 group leading-1.8"
                    ><span
                      class="text-secondary-color pr-15px opacity-0 group-hover:opacity-100 transition-all duration-300"
                      >//</span
                    >
                    </a
                  >
                </li>
              </ul>
            </div>
            <!-- footer newsletter-->
            <div class="xl:col-start-10 xl:col-span-3 mb-60px">
              <h3 class="text-22px font-bold mb-25px text-white">
                <span class="leading-1.3"> Newsletter </span>
              </h3>
              <p class="leading-1.8 mb-5 lg:mb-25px text-white">
                Subscribe to our weekly Newsletter and receive updates via
                email.
              </p>

              <!-- subscription input  -->
              <div>
                <form class="w-full relative">
                  <input
                    type="text"
                    placeholder="Email*"
                    class="w-full text-sm text-paragraph-color pl-5 pr-50px placeholder:text-paragraph-color outline-none border-2 border-border-color-9 focus:border focus:border-secondary-color h-65px block rounded-none"
                  >
                  <button
                    type="submit"
                    class="absolute top-0 right-0 h-full px-18px text-white bg-secondary-color hover:bg-primary-color"
                  >
                    <i class="fas fa-location-arrow text-lg font-bold"></i>
                  </button>
                </form>
              </div>
              <!-- payment methods -->
              <div>
                <h3
                  class="text-base lg:text-lg font-bold mt-30px mb-15px text-white"
                >
                  <span class="leading-1.3"> We Accept </span>
                </h3>
                <img
                  src="./assets/img/icons/payment-4.png"
                  alt="Payment Image"
                >
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- footer copyright -->
      <div
        class="py-25px px-15px 3xl:px-[2%] 4xl:px-[5%] bg-section-bg-7 text-sm lg:text-base text-white"
      >
        <div class="px-15px">
          <div class="grid grid-cols-1 md:grid-cols-2">
            <div>
              <p class="leading-1.8 text-center lg:text-start text-white">
                All Rights Reserved @ Magpie Holdings Ltd 2022-2025
              </p>
            </div>
          </div>
        </div>
      </div>
