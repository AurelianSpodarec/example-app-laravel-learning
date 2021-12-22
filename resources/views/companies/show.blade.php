<x-layouts.layout>

    {{-- {{ dd($companies->colorPalette()) }} --}}
    
    <section class="max-w-screen-2xl mx-auto py-6 sm:px-6 lg:px-8">   
    <div class="flex">
      
        
        <div class="mx-auto text-center">
            <img class="rounded-2xl mx-auto mb-4 w-40 h-40 object-cover" src="{{ asset('storage/uploads/'.$companies->logo)    }}" />
            <div>
                <h1 class="font-bold text-4xl">{{ $companies->name }}<h1>
                <span>{{ $companies->description }}</span>
            </div>
        </div>
    

    </div>
    </section>

    
    
    <section class="max-w-screen-2xl mx-auto py-6 sm:px-6 lg:px-8">   
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


    <section class="max-w-screen-2xl mx-auto py-6 sm:px-6 lg:px-8">   
    <div class="">
            
    
        <div>
            <h2 class="font-bold text-4xl mb-4">Pages</h2>
        </div>

        <div class="flex">
            <div class="w-1/5">
                <div class="flex flex-col">
                    <span>Home</span>
                    <span>About</span>
                    <span>Contact</span>
                </div>
            </div>

            <div class="w-4/5">
            <ul class="grid grid-cols-3">

                <img src="https://i.imgur.com/cQOX8dX.png" />
                <img src="https://i.imgur.com/BRHZeNT.png" />
                <img src="https://i.imgur.com/aOZTEAV.png" />

            </ul>
            </div>
        </div>


    </div>
    </section>
        

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
    </section>

        

</x-layouts.layout>