<x-layouts.layout>

    
    <section class="max-w-screen-2xl mx-auto py-6 sm:px-6 lg:px-8">   
    <div class="flex">
        

        <div class="mx-auto text-center">
            <img class="rounded-2xl mx-auto mb-4" src="https://a.slack-edge.com/80588/marketing/img/meta/slack_hash_256.png" />
            <div>
                <h1 class="flex font-bold text-4xl">{{ $companies->name }}<h1>
                <span>{{ $companies->description }}</span>
            </div>
        </div>
    

    </div>
    </section>


    <section class="max-w-screen-2xl mx-auto py-6 sm:px-6 lg:px-8">   
    <div class="">
            
    
        <div>
            <h2 class="font-bold text-4xl mb-4">Pages</h2>
        </div>

        <div>
            <span>Home</span>
            <span>About</span>
            <span>Contact</span>
        </div>


        <ul class="grid grid-cols-3">

           <img src="https://i.imgur.com/cQOX8dX.png" />
           <img src="https://i.imgur.com/BRHZeNT.png" />
           <img src="https://i.imgur.com/aOZTEAV.png" />

        </ul>


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

    
    <section class="max-w-screen-2xl mx-auto py-6 sm:px-6 lg:px-8">   
    <div class="">
            
    
        <div>
            <h2 class="font-bold text-4xl mb-4">Color Palette</h2>
        </div>


        <ul class="flex">
            @foreach ($companies->color_palette as $color)
            <li style="background-color: {{ $color }}" class="h-24 w-24 ">
                {{ $color }}
            </li>    
            @endforeach

        </ul>


    </div>
    </section>
        

</x-layouts.layout>