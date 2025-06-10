<!-- navbar main -->
<div class="sticky-header sticky-header1 z-xl bg-white transition-all duration-700">
  <div
    class="container flex flex-row justify-between items-center relative py-7 xl:py-21px">
    <!-- logo area -->
    <div class="mt-10px mb-22px md:mt-0 md:mb-0 leading-1">
      <a href="{{ route('project.create') }}">
        <img src="{{ asset('storage/' . $footer->logo ?? '') }}" style="width: 25%;height: auto;" alt="">
      </a>
    </div>
    <nav class="flex-grow hidden xl:block">
      <ul class="flex items-center justify-end gap-15px xl:gap-5">
        <!-- item 1 -->
        <li class="relative group">
          <a
            href="{{ route('project.create') }}"
            class="text-lg xl:text-15px 2xl:text-lg text-heading-color hover:text-secondary-color font-semibold whitespace-nowrap pl-10px py-22px">Home</a>

        </li>
        <!-- item 2 -->
        <li class="relative group">
          <a
            href="{{ route('about.show') }}"
            class="text-lg xl:text-15px 2xl:text-lg text-heading-color hover:text-secondary-color font-semibold whitespace-nowrap pl-10px py-22px">About Us
          </a>
        </li>

        <!-- item 3 -->
        <li class="relative group">
          <a
            href="{{ route('project.all') }}"
            class="text-lg xl:text-15px 2xl:text-lg text-heading-color hover:text-secondary-color font-semibold whitespace-nowrap pl-10px py-22px">Projects
          </a>
        </li>

        <!-- item 4 -->
        <!-- <li class="relative group">
                <a
                  href="{{ route('blog') }}"
                  class="text-lg xl:text-15px 2xl:text-lg text-heading-color hover:text-secondary-color font-semibold whitespace-nowrap pl-10px py-22px"
                  >News and Updates</a
                >
              </li> -->
        <!-- item 6 -->
        <li>
          <a
            href="{{ route('contact.show')}}"
            class="text-lg xl:text-15px 2xl:text-lg text-heading-color hover:text-secondary-color font-semibold whitespace-nowrap pl-10px py-22px">Contact
          </a>
        </li>
      </ul>
    </nav>
    <!-- header right -->
    <div>
      <ul class="flex items-center gap-10px">
        <li class="block xl:hidden">
          <div
            class="show-drawer d-xl-none h-50px w-50px text-heading-color shadow-box-shadow-1 flex justify-center items-center transition-all duration-300 relative bg-white">
            <a href="#ltn__utilize-drawer " class="utilize-toggle">
              <svg viewBox="0 0 800 600">
                <path
                  d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200"
                  id="top"></path>
                <path d="M300,320 L540,320" id="middle"></path>
                <path
                  d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190"
                  id="bottom"
                  transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
              </svg>
            </a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>

<!-- mobile menu -->
<div class="drawer-container mobile-menu-container">
  <div
    class="drawer-overlay fixed top-0 left-0 w-full h-full bg-black -z-1 close-drawer opacity-0 transition-all duration-300 invisible cursor-zoom-out block xl:hidden"></div>
  <div
    class="drawer mobile-menu fixed top-0 -left-[300px] xs:-left-[400px] px-5 xs:px-10 py-50px w-300px xs:w-100 h-full transition-all duration-500 shadow-dropdown-secodary bg-whiteColor z-high block xl:hidden bg-white">
    <div class="pr-15px overflow-auto h-full">
      <!-- mobile menu wrapper -->
      <div>
        <!-- mobile logo area -->
        <div
          class="flex justify-between items-center border-b border-border-primary pt-3px pb-10px mb-25px">
          <div>
            <a href="{{ route('project.create') }}">
              <img src="./assets/img/web_logo.png" alt="">
            </a>
          </div>
          <div>
            <button class="close-drawer text-black text-3xl px-15px py-2">
              ×
            </button>
          </div>
        </div>

        <!-- search input  -->
        <div class="mb-50px">
          <form class="w-full relative">
            <input
              type="text"
              placeholder="Search..."
              class="text-sm text-paragraph-color pl-5 pr-50px placeholder:text-paragraph-color outline-none border-2 border-border-color-9 focus:border focus:border-secondary-color h-65px block w-full rounded-none">
            <button
              type="submit"
              class="absolute top-1/2 -translate-y-1/2 right-7 text-heading-color">
              <i class="icon-search text-lg font-bold"></i>
            </button>
          </form>
        </div>

        <!-- mobile menu accordions -->
        <div
          class="border-b border-border-primary dark:border-borderColor-dark pb-8">
          <ul class="accordion-container">
            <li class="accordion mt-4">
              <!-- accordion header -->
              <a href="{{ route('project.create') }}"
                class="accordion-controller flex items-center justify-between cursor-pointer hover:text-secondary-color uppercase text-sm lg:text-base py-2 lg:py-2.5">
                Home
              </a>
            </li>
            <li class="accordion mt-4">
              <!-- accordion header -->
              <a href="{{ route('about.show') }}"
                class="accordion-controller flex items-center justify-between cursor-pointer hover:text-secondary-color uppercase text-sm lg:text-base py-2 lg:py-2.5">
                About Us
              </a>

            </li>
            <li class="accordion mt-4">
              <!-- accordion header -->
              <a href="{{ route('project.all') }}"
                class="accordion-controller flex items-center justify-between cursor-pointer hover:text-secondary-color uppercase text-sm lg:text-base py-2 lg:py-2.5">
                Projects

              </a>

            </li>


            <li class="mt-4">
              <!-- accordion header -->
              <a
                href="{{route('contact.show')}}"
                class="accordion-controller flex items-center justify-between cursor-pointer hover:text-secondary-color uppercase text-sm lg:text-base py-2 lg:py-2.5">
                Contact</a>
            </li>
          </ul>
        </div>

        <!-- Mobile menu social area -->
        <div>
          <ul class="flex gap-3 items-center pt-4">
            <li>
              <a
                class="h-10 w-10 bg-section-bg-1 hover:bg-secondary-color hover:text-white text-center text-sm lg:text-base"
                href="{{$footer->facebook}}"><i class="fab fa-facebook-f leading-10"></i></a>
            </li>
            <li>
              <a
                class="h-10 w-10 bg-section-bg-1 hover:bg-secondary-color hover:text-white text-center text-sm lg:text-base"
                href="{{$footer->twitter}}"><i class="fab fab fa-twitter leading-10"></i></a>
            </li>
            <li>
              <a
                class="h-10 w-10 bg-section-bg-1 hover:bg-secondary-color hover:text-white text-center text-sm lg:text-base"
                href="{{$footer->linkedin}}"><i class="fab fa-linkedin leading-10"></i></a>
            </li>
            <li>
              <a
                class="h-10 w-10 bg-section-bg-1 hover:bg-secondary-color hover:text-white text-center text-sm lg:text-base"
                href="{{$footer->youtube}}"><i class="fab fa-youtube leading-10"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>