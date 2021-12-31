<x-layouts.layout>

    {{-- {{ dd($companies->colorPalette()) }} --}}
    
    <section class="max-w-screen-2xl mx-auto">   
    <div class="">
      
        
        <div class="mx-auto w-full" style="background: rgb(240,171,132); background: linear-gradient(90deg, rgba(240,171,132,1) 0%, rgba(216,116,170,1) 35%, rgba(183,81,193,1) 73%);">
        <div class="p-8">

            <div class="flex align-baseline text-white">
                <img class="rounded-2xl mb-4 w-40 h-40 object-cover" src="{{ asset('storage/uploads/'.$companies->logo) }}" />
                <div class="h-full">
                    <span class="px-3 py-0.5 text-white text-xs font-semibold leading-5 tracking-wide bg-indigo-500 rounded-full">Computer Technology</span>
                    <h1 class="font-bold text-4xl">{{ $companies->name }}<h1>
                    <span>{{ $companies->description }}</span>
                </div>
            </div>

            <div class="py-4 flex justify-between">
                <div class="hidden md:flex md:space-x-10">
                    <span class="font-medium text-white hover:text-white-900">Pages</span>
                    <span class="font-medium text-white hover:text-white-900">Blocks</span>
                    <span class="font-medium text-white hover:text-white-900">Elements</span>
                    <span class="font-medium text-white hover:text-white-900">Emails</span>
                </div>
                
                <div class="hidden md:flex md:space-x-10">
                    <span class="font-medium text-white hover:text-white-900">Color Palette</span>
                    <span class="font-medium text-white hover:text-white-900">Version</span>
                </div>
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

    <section class="max-w-screen-2xl mx-auto py-6 sm:px-6 lg:px-8" style="background-color: #f3f4f8;">   
    <div class="">
        {{-- <div class="pb-4 flex justify-between">
            <div class="hidden md:flex md:space-x-10">
                <span class="font-medium text-gray-500 hover:text-gray-900">Pages</span>
                <span class="font-medium text-gray-500 hover:text-gray-900">Blocks</span>
                <span class="font-medium text-gray-500 hover:text-gray-900">Elements</span>
                <span class="font-medium text-gray-500 hover:text-gray-900">Emails</span>
            </div>
            
            <div class="hidden md:flex md:space-x-10">
                <span class="font-medium text-gray-500 hover:text-gray-900">Color Palette</span>
                <span class="font-medium text-gray-500 hover:text-gray-900">Version</span>
            </div>
        </div> --}}
    
        <div class="flex mt-7">
            <div class="w-1/5">
                {{-- <div class="flex flex-col">
                    <span class="font-bold">Home Page</span>
                    <span class="pl-2">Home</span>
                    <span class="font-bold">Products</span>
                    <span class="pl-2">Payments</span>
                    <span class="pl-2">Checkout</span>
                </div> --}}


                <div class="">
                    <p class="px-3 text-md font-semibold text-black uppercase tracking-wider" id="communities-headline">
                      Home Page
                    </p>
                    <div class="mt-3 space-y-1" aria-labelledby="communities-headline">
                      
                        <a href="#" class="group flex items-center px-3 py-2 text-sm font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50">
                          <span class="truncate">
                            Home
                          </span>
                        </a>             
                    </div>
                </div>

                <div class="pt-4">
                    <p class="px-3 text-md font-semibold text-black uppercase tracking-wider" id="communities-headline">
                    Products
                    </p>
                    <div class="mt-3 space-y-1" aria-labelledby="communities-headline">
                      
                        <a href="#" class="group flex items-center px-3 py-2 text-sm font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50">
                            <span class="truncate">
                                Payments
                            </span>
                        </a>  
                        
                        <a href="#" class="group flex items-center px-3 py-2 text-sm font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50">
                            <span class="truncate">
                                Checkout
                            </span>
                        </a>  
                    </div>
                </div>


            </div>

            <div class="w-4/5">

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