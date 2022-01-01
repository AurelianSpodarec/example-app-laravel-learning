<x-layouts.layout>

    {{-- {{ dd($companies->colorPalette()) }} --}}
    
    <section class="max-w-screen-2xl mx-auto">   
    <div class="">
      
        
        <div class="mx-auto w-full" style="background: rgb(240,171,132); background: linear-gradient(90deg, rgba(240,171,132,1) 0%, rgba(216,116,170,1) 35%, rgba(183,81,193,1) 73%);">
        <div class="p-8 flex justify-between">

            <div class="flex items-center text-white mb-4">

                <img class="rounded-2xl w-40 h-40 object-cover" src="{{ asset('storage/uploads/'.$companies->logo) }}" />
                <div class="ml-6 h-auto">
                    {{-- <span class="px-3 py-0.5 text-white text-xs font-semibold leading-5 tracking-wide bg-indigo-500 rounded-full">Computer Technology</span> --}}
                    <h1 class="font-bold text-4xl">{{ $companies->name }}<h1>
                    <span>{{ $companies->description }}</span>
                </div>

            </div>
            
            <div class="grid grid-flow-row auto-rows-max gap-6">
                <div class="px-4 py-3 rounded-md text-white h-fit" style="background-color: rgb(96 36 143 / 40%);">Brochure</div>
                <div class="px-4 py-3 rounded-md text-white h-fit" style="background-color: rgb(96 36 143 / 40%);">Social Media</div>
                <div class="px-4 py-3 rounded-md text-white h-fit" style="background-color: rgb(96 36 143 / 40%);">Rating 5/5</div>
            </div>
         
        </div>
        </div>
    

    </div>
    </section>

    
    
    {{-- <section class="max-w-screen-2xl mx-auto py-6 sm:px-6 lg:px-8">   
    <div class="">
            
    
        <div>
            <h2 class="font-bold text-4xl mb-4">Color Palette</h2>
        </div>
  

        <ul class="flex">    
        @foreach($companies->colorPalette->color_palette as $color)
            <div style="background-color: {{ $color }}" class="h-12 w-12"></div>  
        @endforeach
        </ul>


    </div>
    </section>


   --}}

    <section class="max-w-screen-2xl mx-auto py-6 sm:px-6 lg:px-8">   
    <div class="">
    

        <div class="flex mt-7">


            <nav class="w-1/5">
            <div class="relative px-8 overflow-y-auto ">
            

                <div class="mt-1 relative rounded-md shadow-sm mb-8">
                    <input placeholder="Search" type="search" name="search" id="search" class="focus:ring-indigo-500 focus:border-indigo-500  py-2 pl-2 block w-full pr-10 sm:text-sm border-gray-300 rounded-md">
                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                        <svg class="h-5 w-5" x-description="Heroicon name: solid/search" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                </div>

                <ul>
                    <li>
                        <a href="" class="group flex items-center lg:text-sm lg:leading-6 mb-4 font-semibold text-sky-500 dark:text-sky-400">
                            <div class="mr-4 rounded-md ring-1 ring-gray-900/5 shadow-sm group-hover:shadow group-hover:ring-gray-900/10 dark:ring-0 dark:shadow-none dark:group-hover:shadow-none dark:group-hover:highlight-white/10 group-hover:shadow-sky-200 dark:group-hover:bg-sky-500 dark:bg-sky-500 dark:highlight-white/10">
                                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M8.5 7c1.093 0 2.117.27 3 .743V17a6.345 6.345 0 0 0-3-.743c-1.093 0-2.617.27-3.5.743V7.743C5.883 7.27 7.407 7 8.5 7Z" class="fill-sky-200 group-hover:fill-sky-500 dark:fill-sky-300 dark:group-hover:fill-sky-300"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M15.5 7c1.093 0 2.617.27 3.5.743V17c-.883-.473-2.407-.743-3.5-.743s-2.117.27-3 .743V7.743a6.344 6.344 0 0 1 3-.743Z" class="fill-sky-400 group-hover:fill-sky-500 dark:fill-sky-200 dark:group-hover:fill-sky-200"></path></svg>
                            </div>
                            Pages
                        </a>
                        <a href="" class="group flex items-center lg:text-sm lg:leading-6 mb-4 font-semibold text-sky-500 dark:text-sky-400">
                            <div class="mr-4 rounded-md ring-1 ring-gray-900/5 shadow-sm group-hover:shadow group-hover:ring-gray-900/10 dark:ring-0 dark:shadow-none dark:group-hover:shadow-none dark:group-hover:highlight-white/10 group-hover:shadow-sky-200 dark:group-hover:bg-sky-500 dark:bg-sky-500 dark:highlight-white/10">
                                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M8.5 7c1.093 0 2.117.27 3 .743V17a6.345 6.345 0 0 0-3-.743c-1.093 0-2.617.27-3.5.743V7.743C5.883 7.27 7.407 7 8.5 7Z" class="fill-sky-200 group-hover:fill-sky-500 dark:fill-sky-300 dark:group-hover:fill-sky-300"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M15.5 7c1.093 0 2.617.27 3.5.743V17c-.883-.473-2.407-.743-3.5-.743s-2.117.27-3 .743V7.743a6.344 6.344 0 0 1 3-.743Z" class="fill-sky-400 group-hover:fill-sky-500 dark:fill-sky-200 dark:group-hover:fill-sky-200"></path></svg>
                            </div>
                            Blocks
                        </a>
                        <a href="" class="group flex items-center lg:text-sm lg:leading-6 mb-4 font-semibold text-sky-500 dark:text-sky-400">
                            <div class="mr-4 rounded-md ring-1 ring-gray-900/5 shadow-sm group-hover:shadow group-hover:ring-gray-900/10 dark:ring-0 dark:shadow-none dark:group-hover:shadow-none dark:group-hover:highlight-white/10 group-hover:shadow-sky-200 dark:group-hover:bg-sky-500 dark:bg-sky-500 dark:highlight-white/10">
                                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M8.5 7c1.093 0 2.117.27 3 .743V17a6.345 6.345 0 0 0-3-.743c-1.093 0-2.617.27-3.5.743V7.743C5.883 7.27 7.407 7 8.5 7Z" class="fill-sky-200 group-hover:fill-sky-500 dark:fill-sky-300 dark:group-hover:fill-sky-300"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M15.5 7c1.093 0 2.617.27 3.5.743V17c-.883-.473-2.407-.743-3.5-.743s-2.117.27-3 .743V7.743a6.344 6.344 0 0 1 3-.743Z" class="fill-sky-400 group-hover:fill-sky-500 dark:fill-sky-200 dark:group-hover:fill-sky-200"></path></svg>
                            </div>
                            Elements
                        </a>
                        <a href="" class="group flex items-center lg:text-sm lg:leading-6 mb-4 font-semibold text-sky-500 dark:text-sky-400">
                            <div class="mr-4 rounded-md ring-1 ring-gray-900/5 shadow-sm group-hover:shadow group-hover:ring-gray-900/10 dark:ring-0 dark:shadow-none dark:group-hover:shadow-none dark:group-hover:highlight-white/10 group-hover:shadow-sky-200 dark:group-hover:bg-sky-500 dark:bg-sky-500 dark:highlight-white/10">
                                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M8.5 7c1.093 0 2.117.27 3 .743V17a6.345 6.345 0 0 0-3-.743c-1.093 0-2.617.27-3.5.743V7.743C5.883 7.27 7.407 7 8.5 7Z" class="fill-sky-200 group-hover:fill-sky-500 dark:fill-sky-300 dark:group-hover:fill-sky-300"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M15.5 7c1.093 0 2.617.27 3.5.743V17c-.883-.473-2.407-.743-3.5-.743s-2.117.27-3 .743V7.743a6.344 6.344 0 0 1 3-.743Z" class="fill-sky-400 group-hover:fill-sky-500 dark:fill-sky-200 dark:group-hover:fill-sky-200"></path></svg>
                            </div>
                            Emails
                        </a>
                    </li>
                    
                    
                    <li class="mt-12 lg:mt-8">
                        <h5 class="mb-8 lg:mb-3 font-semibold text-gray-900 dark:text-gray-200">Home</h5>
                        <ul class="space-y-6 lg:space-y-2 border-l border-gray-100 dark:border-gray-800">
                            <li><a class="block border-l pl-4 -ml-px border-transparent hover:border-gray-400 dark:hover:border-gray-500 text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-300" href="#">Home</a></li>
                        </ul>
                    <li>

                    <li class="mt-12 lg:mt-8">
                        <h5 class="mb-8 lg:mb-3 font-semibold text-gray-900 dark:text-gray-200">Products</h5>
                        <ul class="space-y-6 lg:space-y-2 border-l border-gray-100 dark:border-gray-800">
                            <li><a class="block border-l pl-4 -ml-px text-sky-500 border-current font-semibold dark:text-sky-400" href="#">Payment</a></li>
                            <li><a class="block border-l pl-4 -ml-px border-transparent hover:border-gray-400 dark:hover:border-gray-500 text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-300" href="#">Checkout</a></li>
                            <li><a class="block border-l pl-4 -ml-px border-transparent hover:border-gray-400 dark:hover:border-gray-500 text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-300" href="#">Payment</a></li>
                            <li><a class="block border-l pl-4 -ml-px border-transparent hover:border-gray-400 dark:hover:border-gray-500 text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-300" href="#">Checkout</a></li>
                            <li><a class="block border-l pl-4 -ml-px border-transparent hover:border-gray-400 dark:hover:border-gray-500 text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-300" href="#">Payment</a></li>
                            <li><a class="block border-l pl-4 -ml-px border-transparent hover:border-gray-400 dark:hover:border-gray-500 text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-300" href="#">Checkout</a></li>
                            <li><a class="block border-l pl-4 -ml-px border-transparent hover:border-gray-400 dark:hover:border-gray-500 text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-300" href="#">Payment</a></li>
                            <li><a class="block border-l pl-4 -ml-px border-transparent hover:border-gray-400 dark:hover:border-gray-500 text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-300" href="#">Checkout</a></li>
                            <li><a class="block border-l pl-4 -ml-px border-transparent hover:border-gray-400 dark:hover:border-gray-500 text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-300" href="#">Payment</a></li>
                            <li><a class="block border-l pl-4 -ml-px border-transparent hover:border-gray-400 dark:hover:border-gray-500 text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-300" href="#">Checkout</a></li>
                        </ul>
                    <li>
                </ul>

            </div>
            </nav><!-- w-1/5 -->


            <main class="">
            <div>

                <div class="mb-12">
                    <h3 class="text-4xl font-bold mb-12">Home Page</h3>
                    <ul class="grid grid-cols-3 gap-5">
                        
                        <div class="overflow-hidden" >
                            <img style="height: 270px;" class="border border-solid rounded-md   object-cover object-top w-full" src="https://i.imgur.com/cQOX8dX.png" alt="#"/>
                            <h6 class="text-center mt-2">Home</h6>
                        </div>

                    </ul>
                </div>


                <div>
                    <h3 class="text-4xl font-bold mb-12">Products</h3>
                    <ul class="grid grid-cols-3 gap-5">
                        
                        <div class="overflow-hidden" >
                            <img style="height: 270px;" class="border border-solid rounded-md   object-cover object-top w-full" src="https://i.imgur.com/BRHZeNT.png" alt="#"/>
                            <h6 class="text-center mt-2">Payments</h6>
                        </div>

                        <div class="overflow-hidden" >
                            <img style="height: 270px;" class="border border-solid rounded-md   object-cover object-top w-full" src="https://i.imgur.com/aOZTEAV.png" alt="#"/>
                            <h6 class="text-center mt-2">Checkout</h6>
                        </div>
                        
                        <div class="overflow-hidden" >
                            <img style="height: 270px;" class="border border-solid rounded-md   object-cover object-top w-full" src="https://i.imgur.com/BRHZeNT.png" alt="#"/>
                            <h6 class="text-center mt-2">Payments</h6>
                        </div>

                        <div class="overflow-hidden" >
                            <img style="height: 270px;" class="border border-solid rounded-md   object-cover object-top w-full" src="https://i.imgur.com/aOZTEAV.png" alt="#"/>
                            <h6 class="text-center mt-2">Checkout</h6>
                        </div>

                    </ul>
                </div>

            
            </div>
            </main><!-- w-4/5 -->
        </div>


    </div>
    </section>
        
{{-- 
    <section class="max-w-screen-2xl mx-auto py-6 sm:px-6 lg:px-8">   
    <div class="">
            
    
        <div>
            <h2 class="font-bold text-4xl mb-4">Blocks</h2>

            <p>Type blocks</p>
        </div>


        <ul class="">
            
            <img src="https://saaspages.s3.amazonaws.com/ss/Stripe/11-10-2020/Features/Stripe_Features_01_700.jpg" />
            <img src="https://saaspages.s3.amazonaws.com/ss/Stripe/11-10-2020/Navbars/Stripe_Navbars_01_700.jpg" />
            <img src="https://saaspages.s3.amazonaws.com/ss/Stripe/11-10-2020/Pricing/Stripe_Pricing_01_700.jpg" />
        </ul>


    </div>
    </section> --}}

        

</x-layouts.layout>