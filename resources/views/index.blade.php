@extends('layouts.playout')

@section('content')

<section>                <!--1st part banner section starts -->

        <div class="rounded-lg object-contain grid grid-cols-2 bg-gradient-to-r from-indigo-200 ...">
          
        <div class="px-12 lg:py-20 md:py-2 ">
        <div class="py-4 text-white">
            <h1 class="flex font-black text-6xl sm:text-4xl md:text-4xl lg:text-6xl" >Start your Biggest idea with us</h1>
            <h3 class="text-xl">Find out your desire services from our platform</h3>
        </div>

        <input class="rounded w-72 h-10 py-4 px-4" type="text" placeholder="Try 'Web Development'"> <button class="w-6 relative sm:hidden top-1 right-8"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg></button>
      
        </div>

        <div>
          <img class="py-4 md:py-16 sm:h-80 md:w-auto lg:h-auto" src="image/subbannerone.png" alt="">
        </div>

        </div>

</section>             <!--1st part banner section ends -->
      
<section>                <!--offer info section starts -->

        <div class="grid lg:grid-cols-3 sm:grid-cols-1 space-x-4 py-8 m-2 mx-12">
        
              <div class="shadow-md hover:shadow-xl group hover:bg-yellow-500">
                      <div>
                          <h1 class="text-5xl font-light p-4 text-blue-900 group-hover:text-white" style="font-family: 'Canela Web';">Find your desire service</h1>
                          <p class="text-2xl font-light pl-4 text-blue-900 group-hover:text-white">Lorem ipsum doler sit amet</p>
                      </div>

                      <div class="arr-button pt-28" align="right">
                          <button class="px-6 py-4 pt-6 bg-yellow-500 group-hover:bg-white">
                          <svg xmlns="http://www.w3.org/2000/svg" class="text-white group-hover:text-yellow-500 animate-bounce" height="30" width="30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                          </svg>
                          </button>
                      </div>
              </div>


              <div class="shadow-md hover:shadow-xl group hover:bg-yellow-500">
                      <div>
                          <h1 class="text-5xl font-light p-4 text-blue-900 group-hover:text-white" style="font-family: 'Canela Web';">Find your desire service</h1>
                          <p class="text-2xl font-light pl-4 text-blue-900 group-hover:text-white">Lorem ipsum doler sit amet</p>
                      </div>

                      <div class="arr-button pt-28" align="right">
                          <button class="px-6 py-4 pt-6 bg-yellow-500 group-hover:bg-white">
                          <svg xmlns="http://www.w3.org/2000/svg" class="text-white group-hover:text-yellow-500 animate-bounce" height="30" width="30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                          </svg>
                        </button>
                      </div>
              </div>


              <div class="shadow-md hover:shadow-xl group hover:bg-yellow-500">
                      <div>
                          <h1 class="text-5xl font-light p-4 text-blue-900 group-hover:text-white" style="font-family: 'Canela Web';">Find your desire service</h1>
                          <p class="text-2xl font-light pl-4 text-blue-900 group-hover:text-white">Lorem ipsum doler sit amet</p>
                      </div>

                      <div class="arr-button pt-28" align="right">
                          <button class="px-6 py-4 pt-6 bg-yellow-500 group-hover:bg-white">
                          <svg xmlns="http://www.w3.org/2000/svg" class="text-white group-hover:text-yellow-500 animate-bounce" height="30" width="30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                          </svg>
                        </button>
                      </div>
              </div>
        
        </div>

</section>                    <!--offer info section ends -->

<section>                     <!--slider with logo-->

<div class="h-screen overflow-hidden flex items-center justify-center" style="background: #edf2f7;">
    <!-- Display Container (not part of component) START -->
  <div class="m-10 mx-auto p-16 sm:p-24 lg:p-48 bg-gray-200">
    
    <!-- Carousel Body -->
    <div class="relative rounded-lg block md:flex items-center bg-gray-100 shadow-xl" style="min-height: 19rem;">
      <div class="relative w-full md:w-2/5 h-full overflow-hidden rounded-t-lg md:rounded-t-none md:rounded-l-lg" style="min-height: 19rem;">

        <img class="absolute inset-0 w-full h-full object-cover object-center" id="kickstarter" src="https://images.pexels.com/photos/1772123/pexels-photo-1772123.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="">
        <img class="absolute inset-0 w-full h-full object-cover object-center" id="slack" src="https://images.pexels.com/photos/267507/pexels-photo-267507.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="">
        <img class="absolute inset-0 w-full h-full object-cover object-center" id="glossier" src="https://images.pexels.com/photos/4348401/pexels-photo-4348401.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="">
        <img class="absolute inset-0 w-full h-full object-cover object-center" id="charity_water" src="https://images.pexels.com/photos/594452/pexels-photo-594452.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="">
        <img class="absolute inset-0 w-full h-full object-cover object-center" id="missguided" src="https://images.pexels.com/photos/1309766/pexels-photo-1309766.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="">

        <div class="absolute inset-0 w-full h-full bg-indigo-900 opacity-75"></div>
        <div class="absolute inset-0 w-full h-full flex items-center justify-center fill-current text-white">
          <svg class="w-full h-24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 239 120"><path d="M4.21 86.4V33.31h8.94l4 28.85.86 9.52.87-9.52 4-28.85h9.02V86.4h-5.19V42.83l-.87 7.22-5.19 36.35h-5.19l-5.2-36.93-.57-6.64V86.4zm35.79 0h6V33.31h-6zm114.24 0h6.06V33.31h-6.06zm46.16-24h5.48v-6.01h-5.48v-17h9.23v-6.08h-15.31V86.4h15.29v-6.06h-9.23zm-60-29.14v44.19a2.89 2.89 0 1 1-5.77 0V33.31h-6.34v44.14a9.23 9.23 0 1 0 18.46 0V33.31zm40.11 44.14V42.55a2.9 2.9 0 0 0-2.89-2.89h-2.88v41h2.88a3.68 3.68 0 0 0 2.89-3.18zm-3.21-44.09a9.12 9.12 0 0 1 9.23 9.24v34.9a9.12 9.12 0 0 1-9.23 9.24h-9.23V33.31h9.23m51.64 44.14v-34.9a2.89 2.89 0 0 0-2.88-2.89h-2.89v41h2.89a3.67 3.67 0 0 0 2.88-3.18zm-2.88-44.14a9.06 9.06 0 0 1 8.94 9.24v34.9a9.12 9.12 0 0 1-9.23 9.24h-9.23V33.31h9.52M89.31 57.55c-2.88-2.6-5.19-4.91-5.19-9.23v-5.77A2.89 2.89 0 0 1 87 39.66a3.1 3.1 0 0 1 2.89 2.89v6.05H96v-6.05a9.24 9.24 0 1 0-18.47 0v6.05c.58 6.93 4.62 10.68 7.5 13.56 2.89 2.6 5.2 4.91 5.2 9.24v6a2.89 2.89 0 1 1-5.77 0v-8.89h-6.11v8.94a9.23 9.23 0 1 0 18.46 0v-6c-.57-7.22-4.32-10.68-7.5-13.85m-25.1 0C61.33 55 59 52.64 59 48.32v-5.77a2.89 2.89 0 1 1 5.77 0v6.05h6.06v-6.05a9.24 9.24 0 1 0-18.47 0v6.05c0 6.93 4 10.68 6.93 13.56 2.88 2.6 5.19 4.91 5.19 9.24v6a2.89 2.89 0 0 1-2.88 2.89 3.1 3.1 0 0 1-2.89-2.89v-8.89h-5.46v8.94a9.23 9.23 0 1 0 18.46 0v-6c-.28-7.22-4.32-10.68-7.5-13.85m56.84-9.23v-5.82a9.24 9.24 0 1 0-18.47 0v34.9a9.45 9.45 0 0 0 9 9.24 6.63 6.63 0 0 0 6.34-4l2.89 4V62.45h-9.23v6.06h2.88v8.94a2.73 2.73 0 0 1-2.88 2.89 2.89 2.89 0 0 1-2.89-2.89v-34.9a2.9 2.9 0 0 1 2.89-2.89 3.1 3.1 0 0 1 2.88 2.89v6.05h6.64z"></path></svg>
        </div>
      </div>
      <div class="w-full md:w-3/5 h-full flex items-center bg-gray-100 rounded-lg">
        <div class="p-12 md:pr-24 md:pl-16 md:py-12">
          <p class="text-gray-600"><span class="text-gray-900">This looks uneven to me</span> is a UK-based fashion retailer that has nearly doubled in size since last year. They integrated Stripe to deliver seamless checkout across mobile and web for customers in 100+ countries, all while automatically combating fraud.</p>
          <a class="flex items-baseline mt-3 text-indigo-600 hover:text-indigo-900 focus:text-indigo-900" href="">
            <span>Learn more about massepain</span>
            <span class="text-xs ml-1">&#x279c;</span>
          </a>
        </div>
        <svg class="hidden md:block absolute inset-y-0 h-full w-24 fill-current text-gray-100 -ml-12" viewBox="0 0 100 100" preserveAspectRatio="none">
          <polygon points="50,0 100,0 50,100 0,100" />
        </svg>
      </div>
 
    </div>
    
    <!-- Carousel Tabs -->
    <div class="flex items-center pt-5 justify-between">
      <button href="#kickstarter" for="kickstarter" class="px-2 opacity-50 hover:opacity-100 focus:opacity-100"><img class="w-full" src="https://stripe.com/img/v3/payments/overview/logos/kickstarter.svg" alt="" style="max-height: 60px;"></button>
      <button href="#slack" for="slack" class="px-2 opacity-50 hover:opacity-100 focus:opacity-100"><img class="w-full" src="https://stripe.com/img/v3/payments/overview/logos/slack.svg" alt="" style="max-height: 60px;"></button>
      <button href="#glossier" for="glossier" class="px-2 opacity-50 hover:opacity-100 focus:opacity-100"><img class="w-full" src="https://stripe.com/img/v3/payments/overview/logos/glossier.svg" alt="" style="max-height: 60px;"></button>
      <button href="#charity_water" for="charity_water" class="px-2 opacity-50 hover:opacity-100 focus:opacity-100"><img class="w-full" src="https://stripe.com/img/v3/payments/overview/logos/charity_water.svg" alt="" style="max-height: 60px;"></button>
      <button href="#missguided" for="missguided" class="px-2 opacity-100 hover:opacity-100 focus:opacity-100"><img class="w-full" src="https://stripe.com/img/v3/payments/overview/logos/missguided.svg" alt="" style="max-height: 60px;"></button>
    </div>
    
  </div>
  <!-- Display Container (not part of component) END -->
</div>

</section>



<section>           <!--Testimonial-->

        <div class="grid lg:grid-cols-2 sm:grid-cols-2">
        
        <div class="rounded-lg shadow-xl m-4 bg-gray-300 grid grid-cols-2">
            <div class="m-2 place-self-center">
                <img class="rounded-xl border-gray-500" src="https://images.pexels.com/photos/1239291/pexels-photo-1239291.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="">
            </div>

            <div class="m-2 object-center relative lg:top-12 sm:top-4" align="center">
                <p class="text-gray-500"><i class="text-2xl">&#8220;</i> lorem ipsum doler set amet lorem ipsum doler set amet lorem ipsum doler set amet <i class="text-2xl">&#8221;</i></blockquote></p>
            </div>
        </div>


        <div class="rounded-lg shadow-xl m-4 bg-gray-300 grid grid-cols-2">
            <div class="m-2 place-self-center">
                <img class="rounded-xl border-gray-500" src="https://images.pexels.com/photos/1222271/pexels-photo-1222271.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="">
            </div>

            <div class="m-2 object-center relative lg:top-12 sm:top-4" align="center">
                <p class="text-gray-500"><i class="text-2xl">&#8220;</i> lorem ipsum doler set amet lorem ipsum doler set amet lorem ipsum doler set amet <i class="text-2xl">&#8221;</i></blockquote></p>
            </div>
        </div>
        
        </div>

        <div class="grid lg:grid-cols-2 sm:grid-cols-2">
        
        <div class="rounded-lg shadow-xl m-4 bg-gray-300 grid grid-cols-2">
            <div class="m-2 place-self-center">
                <img class="rounded-xl border-gray-500" src="https://images.pexels.com/photos/6929164/pexels-photo-6929164.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="">
            </div>

            <div class="m-2 object-center relative lg:top-12 sm:top-4" align="center">
                <p class="text-gray-500"><i class="text-2xl">&#8220;</i> lorem ipsum doler set amet lorem ipsum doler set amet lorem ipsum doler set amet <i class="text-2xl">&#8221;</i></blockquote></p>
            </div>
        </div>


        <div class="rounded-lg shadow-xl m-4 bg-gray-300 grid grid-cols-2">
            <div class="m-2 place-self-center">
                <img class="rounded-xl border-gray-500" src="https://images.pexels.com/photos/91227/pexels-photo-91227.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="">
            </div>

            <div class="m-2 object-center relative lg:top-12 sm:top-4" align="center">
                <p class="text-gray-500"><i class="text-2xl">&#8220;</i> lorem ipsum doler set amet lorem ipsum doler set amet lorem ipsum doler set amet <i class="text-2xl">&#8221;</i></blockquote></p>
            </div>
        </div>
        
        </div>

        <div class="mb-4" align="center">
            <button class="rounded-xl bg-yellow-500 text-white hover:bg-yellow-600 px-2 py-2">Know More &raquo;</button>
        </div>

</section>

@stop
