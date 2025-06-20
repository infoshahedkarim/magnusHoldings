@extends('layout.layout')

@php
$title='Magnus | Contact';
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
          class="leading-1.3 md:leading-1.3 lg:leading-1.3 xl:leading-1.3">Contact Us</span>
      </h1>
      <ul
        class="breadcrumb flex gap-30px items-center text-sm lg:text-base font-bold pt-4">
        <li class="home relative leading-1.8 lg:leading-1.8">
          <a href="index.html"><i class="fas fa-home text-secondary-color"></i> Home</a>
        </li>
        <li class="leading-1.8 lg:leading-1.8 text-heading-color">
          Contact
        </li>
      </ul>
    </div>
  </div>
</section>

<!-- icons section -->

<section>
  <div class="container pt-30 pb-5">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-30px">
      <!-- card 1 -->
      <div
        class="px-30px py-50px border-2 border-border-color-11 text-center flex flex-col items-center">
        <div class="mb-35px">
          <img src="./assets/img/icons/10.png" alt="">
        </div>
        <div>
        
          <h2
            class="text-lg md:text-xl lg:text-22px xl:text-2xl text-heading-color font-bold mb-15px">
            <span class="leading-1.3"> Email Address </span>
          </h2>
          <p class="text-sm lg:text-base">
            <span class="leading-1.8">
              {{ $contact->email1 ?? '' }} <br>{{ $contact->email2 ?? '' }}
            </span>
          </p>
        </div>
      </div>
      <!-- card 2 -->
      <div
        class="px-30px py-50px border-2 border-border-color-11 text-center flex flex-col items-center">
        <div class="mb-35px">
          <img src="./assets/img/icons/11.png" alt="" class="">
        </div>
        <div>
          <h2
            class="text-lg md:text-xl lg:text-22px xl:text-2xl text-heading-color font-bold mb-15px">
            <span class="leading-1.3"> Phone Number </span>
          </h2>
          <p class="text-sm lg:text-base">
            <span class="leading-1.8">
              {{ $contact->phone1 ?? '' }}<br>{{ $contact->phone2 ?? ''}}
            </span>
          </p>
        </div>
      </div>
      <!-- card 3 -->
      <div
        class="px-30px py-50px border-2 border-border-color-11 text-center flex flex-col items-center">
        <div class="mb-35px">
          <img src="./assets/img/icons/12.png" alt="">
        </div>
        <div>
          <h2
            class="text-lg md:text-xl lg:text-22px xl:text-2xl text-heading-color font-bold mb-15px">
            <span class="leading-1.3"> Office Address </span>
          </h2>
          <p class="text-sm lg:text-base">
            <span class="leading-1.8">
              {{ $contact->address ?? ''}}
            </span>
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- contact section -->
<section>
  <div class="container">
    <!-- details form -->
    <div class="relative -bottom-[100px] z-10">
      <form action="{{route('contact.submit')}}" method="POST"
        class="form-primary bg-white shadow-box-shadow-2 px-25px pt-10 pb-50px md:p-50px md:pt-10">
        @csrf
        <h4
          class="text-22px font-semibold leading-1.3 pl-10px border-l-2 border-secondary-color text-heading-color mb-30px">
          Get A Quote

          @if(session('success'))
          <div class="alert alert-success">
            {{session('success')}}
          </div>
          @endif

        </h4>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-30px">
          <!-- name -->
          <div class="relative">
            <input
              type="text" name="name" id="name" value="{{old('name')}}"
              placeholder="Enter your name"
              class="text-paragraph-color pl-5 pr-50px outline-none border-2 border-border-color-9 focus:border focus:border-secondary-color h-65px block w-full rounded-none placeholder:opacity-60 placeholder:text-sm placeholder:text-paragraph-color">
            @error('name')
            <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
            @enderror
            <span class="absolute top-1/2 -translate-y-1/2 right-4">
              <i
                class="fas fa-user text-sm lg:text-base text-secondary-color font-bold"></i>
            </span>
          </div>
          <!-- email -->
          <div class="relative">
            <input
              type="text" name="email" id="email" value="{{old('email')}}"
              placeholder="Enter email address"
              class="text-paragraph-color pl-5 pr-50px outline-none border-2 border-border-color-9 focus:border focus:border-secondary-color h-65px block w-full rounded-none placeholder:opacity-60 placeholder:text-sm placeholder:text-paragraph-color">
            <span class="absolute top-1/2 -translate-y-1/2 right-4">
              <i
                class="fas fa-envelope text-sm lg:text-base text-secondary-color font-bold"></i>
            </span>
          </div>
          <!-- type select -->
          <!-- <div class="relative">
                  <select
                    class="selectize boerder-2 border-border-color-9 text-[14px] leading-60px h-65px"
                  >
                    <option value="Select Service Type" data-display="Select">
                      Select Service Type
                    </option>
                    <option value="Property Management ">
                      Property Management
                    </option>
                    <option value="Mortgage Service ">Mortgage Service</option>
                    <option value="Consulting Service">
                      Consulting Service
                    </option>
                    <option value="Home Buying">Home Buying</option>
                    <option value="Home Selling">Home Selling</option>
                    <option value="Escrow Services">Escrow Services</option>
                  </select>
                </div> -->
          <!-- number -->
          <div class="relative">
            <input
              type="text" name="phone" id="phone" value="{{old('phone')}}"
              placeholder="Enter phone number"
              class="text-paragraph-color pl-5 pr-50px outline-none border-2 border-border-color-9 focus:border focus:border-secondary-color h-65px block w-full rounded-none placeholder:opacity-60 placeholder:text-sm placeholder:text-paragraph-color">
            <span class="absolute top-1/2 -translate-y-1/2 right-4">
              <i
                class="fas fa-phone text-sm lg:text-base text-secondary-color font-bold"></i>
            </span>
          </div>
          <!-- message -->
          <div class="relative md:col-start-1 md:col-span-2 mb-35px">
            <textarea

              name="msg" id="msg" value="{{old('msg')}}"
              placeholder="Enter message"
              class="min-h-[150px] text-paragraph-color pl-5 pr-50px py-15px outline-none border-2 border-border-color-9 focus:border focus:border-secondary-color h-65px block w-full rounded-none placeholder:opacity-60 placeholder:text-sm placeholder:text-paragraph-color"></textarea>
            <span class="absolute top-[30px] -translate-y-1/2 right-4">
              <i
                class="fas fa-pencil text-sm lg:text-base text-secondary-color font-bold"></i>
            </span>
          </div>
        </div>
        <!-- agree -->
        <div class="text-sm flex items-center mb-30px">
          <input type="checkbox" id="agree">
          <label for="agree" class="text-sm ml-1">
            Save my name, email, and website in this browser for the next
            time I comment.
          </label>
        </div>

        <!-- submit button -->

        <div class="pb-5">
          <h5
            class="uppercase text-sm md:text-base text-white relative group whitespace-nowrap font-normal mb-0 transition-all duration-300 border border-secondary-color hover:border-heading-color inline-block z-0">
            <span
              class="inline-block absolute top-0 right-0 w-full h-full bg-secondary-color group-hover:bg-black -z-1 group-hover:w-0 transition-all duration-300"></span>
            <button
              type="submit"
              class="relative z-1 px-5 md:px-25px lg:px-10 py-10px md:py-15px lg:py-17px group-hover:text-heading-color leading-23px uppercase">
              get an free service
            </button>
          </h5>
        </div>
      </form>
    </div>
  </div>
</section>
<div class="pb-140px lg:pb-30">
  <div class="google-map h-[800px] relative z-1">
  {!! $contact->map ?? '' !!}
  </div>
</div>
@endsection