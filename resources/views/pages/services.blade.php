<x-app-layout>
    <div class="backgroundfinal">
 <!-- Services header -->
 <section class="row" id="tmServices">
    <div class="col-12">
           <div class="tm-bg-black-transparent text-center tm-services-header">
              <h2 class="text-uppercase tm-services-page-title">Our Services</h2>
          </div>
    </div>
  </section>

  <!-- component -->
      <div class="grid min-h-[140px] w-full place-items-center overflow-x-scroll rounded-lg p-6 lg:overflow-visible">
          <div class="relative flex w-full max-w-[48rem] flex-row rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
              <div class="relative w-2/5 m-0 overflow-hidden text-gray-700 bg-white rounded-r-none shrink-0 rounded-xl bg-clip-border">
                  <img
                  src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1471&amp;q=80"
                  alt="image"
                  class="object-cover w-full h-full"
                  />
                  <!-- Black Friday Mega Offer -->
                  <div class="absolute inset-0 flex items-center justify-center text-white bg-black bg-opacity-75 rounded-xl">
                  <h2 class="text-4xl font-bold text-center"> 2 Year Anniversary Offer  <br />
                  <span class="text-red-500"> 30% Off <br>On All Subcription Plans
                  </span>
                  </h2>

                  </div>
                  <!-- End Black Friday Mega Offer -->
              </div>
              <div class="p-6">
                  <h6 class="block mb-4 font-sans text-base antialiased font-semibold leading-relaxed tracking-normal text-red-500 uppercase">
                  Valid till 30th july
                  </h6>
                  <h4 class="block mb-2 font-sans text-2xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                    Experience the difference
                  </h4>
                  <p class="block mb-8 font-sans text-base antialiased font-normal leading-relaxed text-gray-700">
                    Upgrade to Premium Subscription and unlock the thrill of a premium and exclusive travel experience, where luxury meets convenience at every turn. <br>
                    Embark on an unparalleled journey by upgrading to our Premium subscription, where every moment is crafted to perfection.
                     Enjoy exclusive perks, personalized services, and unforgettable experiences that redefine the art of travel.
                  </p>
                  <a class="inline-block" href="#">
                  <button
                      class="flex items-center gap-2 px-6 py-3 font-sans text-xs font-bold text-center text-red-500 uppercase align-middle transition-all rounded-lg select-none hover:bg-pink-500/10 active:bg-pink-500/30 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                      type="button"
                  >
                      View Now
                      <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="2"
                      stroke="currentColor"
                      aria-hidden="true"
                      class="w-4 h-4"
                      >
                      <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"
                      ></path>
                      </svg>
                  </button>
                  </a>
              </div>
          </div>
      </div>



<!-- component -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<body class="font-sans bg-gray-100">
    <div class="min-h-screen flex justify-center items-center">
        <div class="">
            <div class="text-center font-semibold">
                <h1 class="text-5xl">
                    <span class="text-blue-700 tracking-wide">Flexible </span>
                    <span>Plans</span>
                </h1>
                <p class="pt-6 text-xl text-gray-400 font-normal w-full px-8 md:w-full text-white">
                    Choose a plan that works best for you.<br/>
                </p>
            </div>
            <div class="pt-24 flex flex-row">

                <!-- Basic Card -->
                <div class="w-96 p-8 bg-gray-900 text-center rounded-3xl pr-16 shadow-xl">
                    <h1 class="text-white font-semibold text-2xl">Basic</h1>
                    <p class="pt-2 tracking-wide">
                        <span class="text-gray-400 align-top">Rs </span>
                        <span class="text-3xl text-white font-semibold">Free</span>
                        <span class="text-gray-400 font-medium">/ user</span>
                    </p>
                    <hr class="mt-4 border-1">
                    <div class="pt-8">
                        <p class="font-semibold text-gray-400 text-left">
                            <span class="material-icons align-middle">
                                done
                            </span>
                            <span class="pl-2">
                                 <span class="text-white">Standard </span> Seating
                            </span>
                        </p>
                        <p class="font-semibold text-gray-400 text-left pt-5">
                            <span class="material-icons align-middle">
                                done
                            </span>
                            <span class="pl-2">
                              Booking  <span class="text-white"> History </span>
                            </span>
                        </p>
                        <p class="font-semibold text-gray-400 text-left pt-5">
                            <span class="material-icons align-middle">
                                done
                            </span>
                            <span class="pl-2">
                                <span class="text-white">Economical</span> Ticket Prices
                            </span>
                        </p>

                        <a href="{{ route('plans.show', "free") }}" class="">
                            <p class="w-full py-4 bg-blue-600 mt-8 rounded-xl text-white">
                                <span class="font-medium">
                                    Choose Plan
                                </span>
                                <span class="pl-2 material-icons align-middle text-sm">
                                    east
                                </span>
                            </p>
                        </a>
                    </div>
                </div>

                <!-- Premium Card -->
                <div class="w-80 p-8 bg-gray-900 text-center rounded-3xl text-white border-4 shadow-xl border-white transform scale-125">
                    <h1 class="text-white font-semibold text-2xl">Premium</h1>
                    <p class="pt-2 tracking-wide">
                        <span class="text-gray-400 align-top">Rs </span>
                        <span class="text-3xl font-semibold">999</span>
                        <span class="text-gray-400 font-medium">/ user</span>
                    </p>
                    <hr class="mt-4 border-1 border-gray-600">
                    <div class="pt-8">
                        <p class="font-semibold text-gray-400 text-left">
                            <span class="material-icons align-middle">
                                done
                            </span>
                            <span class="pl-2">
                                First-Class <span class="text-white">Seating</span>
                            </span>
                        </p>
                        <p class="font-semibold text-gray-400 text-left pt-5">
                            <span class="material-icons align-middle">
                                done
                            </span>
                            <span class="pl-2">
                               Exclusive <span class="text-white">Offers</span>
                            </span>
                        </p>
                        <p class="font-semibold text-gray-400 text-left pt-5">
                            <span class="material-icons align-middle">
                                done
                            </span>
                            <span class="pl-2">
                                <span class="text-white">Complimentary </span>Refreshments
                            </span>
                        </p>

                        <a href="{{ route('plans.show', "premium") }}" class="">
                            <p class="w-full py-4 bg-blue-600 mt-8 rounded-xl text-white">
                                <span class="font-medium">
                                    Choose Plan
                                </span>
                                <span class="pl-2 material-icons align-middle text-sm">
                                    east
                                </span>
                            </p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<br><br><br>

    </div>
</x-app-layout>
