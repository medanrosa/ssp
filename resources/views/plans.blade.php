<x-app-layout>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <div class="backgroundfinal">
        <!-- Services header -->
        <section class="row" id="tmServices">
            <div class="col-12">
                <div class="tm-bg-black-transparent text-center tm-services-header">
                    <h2 class="text-uppercase tm-services-page-title">Our Services</h2>
                </div>
            </div>
        </section>

        <div class="container">
            <section>
                <div class="container py-5">
                    <!-- component -->
                    <div class="grid min-h-[140px] w-full place-items-center overflow-x-scroll rounded-lg p-6 lg:overflow-visible">
                        <div class="relative flex w-full max-w-[48rem] flex-row rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
                            <div class="relative w-2/5 m-0 overflow-hidden text-gray-700 bg-white rounded-r-none shrink-0 rounded-xl bg-clip-border">
                                <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1471&amp;q=80"
                                     alt="image" class="object-cover w-full h-full" />
                                <!-- Black Friday Mega Offer -->
                                <div class="absolute inset-0 flex items-center justify-center text-white bg-black bg-opacity-75 rounded-xl">
                                    <h2 class="text-4xl font-bold text-center"> 2 Year Anniversary Offer <br />
                                        <span class="text-red-500"> 30% Off <br>On All Subcription Plans</span>
                                    </h2>
                                </div>
                                <!-- End Black Friday Mega Offer -->
                            </div>
                            <div class="p-6">
                                <h6 class="block mb-4 font-sans text-base antialiased font-semibold leading-relaxed tracking-normal text-red-500 uppercase">
                                    Valid till 30th July
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
                                    <button class="flex items-center gap-2 px-6 py-3 font-sans text-xs font-bold text-center text-red-500 uppercase align-middle transition-all rounded-lg select-none hover:bg-pink-500/10 active:bg-pink-500/30 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                                            type="button">
                                        View Now
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"></path>
                                        </svg>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="text-center font-semibold">
                        <h1 class="text-5xl">
                            <span class="text-blue-700 tracking-wide">Flexible </span>
                            <span>Plans</span>
                        </h1>
                        <p class="pt-6 text-xl text-gray-400 font-normal w-full px-8 md:w-full text-white">
                            Choose a plan that works best for you.<br />
                        </p>
                    </div>
                    <br><br>
                    <div class="row text-center align-items-end ml-80">
                        <div class="col-lg-4 mb-5 mb-lg-0">
                            <div class="bg-white p-5 rounded-lg shadow">
                                <h1 class="h6 text-uppercase font-weight-bold mb-4">Basic</h1>
                                <h2 class="h1 font-weight-bold">$0<span class="text-small font-weight-normal ml-2">/ free</span></h2>

                                <div class="custom-separator my-4 mx-auto bg-primary"></div>

                                <ul class="list-unstyled my-5 text-small text-left">
                                    <li class="mb-3">
                                        <i class="fa fa-check mr-2 text-primary"></i> Booking History</li>
                                    <li class="mb-3">
                                        <i class="fa fa-check mr-2 text-primary"></i> Economical Ticket Prices</li>

                                    <li class="mb-3 text-muted">
                                        <i class="fa fa-times mr-2"></i>
                                        <del>Exclusive Offeers</del>
                                    </li>
                                    <li class="mb-3 text-muted">
                                        <i class="fa fa-times mr-2"></i>
                                        <del>First-Class Seating</del>
                                    </li>
                                    <li class="mb-3 text-muted">
                                        <i class="fa fa-times mr-2"></i>
                                        <del>Complimentary Refreshments</del>
                                    </li>
                                </ul>
{{--                                <a href="#" class="btn btn-primary btn-block shadow rounded-pill">Buy Now</a>--}}
                            </div>
                        </div>

                        @foreach($plans as $plan)
                            @if($plan->slug !== 'business-plan')
                                <div class="col-lg-4 mb-5 mb-lg-0 ml-9">
                                    <div class="bg-white p-5 rounded-lg shadow">
                                        <h1 class="h6 text-uppercase font-weight-bold mb-4">{{ $plan->name }}</h1>
                                        <h2 class="h1 font-weight-bold">${{ $plan->price }}<span class="text-small font-weight-normal ml-2">/ month</span></h2>

                                        <div class="custom-separator my-4 mx-auto bg-primary"></div>

                                        <ul class="list-unstyled my-5 text-small text-left font-weight-normal">
                                            <li class="mb-3">
                                                <i class="fa fa-check mr-2 text-primary"></i> First-Class Seating</li>
                                            <li class="mb-3">
                                                <i class="fa fa-check mr-2 text-primary"></i> Complimentary Refreshments</li>
                                            <li class="mb-3">
                                                <i class="fa fa-check mr-2 text-primary"></i> Exclusive Offers</li>
                                            <li class="mb-3">
                                                <i class="fa fa-check mr-2 text-primary"></i> Booking History</li>
                                            <li class="mb-3">
                                                <i class="fa fa-check mr-2 text-primary"></i> No booking fee</li>
                                        </ul>
                                        <a href="{{ route('plans.show', $plan->slug) }}" class="btn btn-primary btn-block shadow rounded-pill">Buy Now</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </section>
        </div>
    </div>
</x-app-layout>
