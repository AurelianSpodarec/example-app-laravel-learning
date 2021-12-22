<x-layouts.layout>

    
    <section class="max-w-screen-2xl mx-auto py-6 sm:px-6 lg:px-8">   

        
        <h1>Colors Palette</h1>

        <div class="grid grid-cols-3 gap-4">
            
           
            @foreach ($colorPalettes as $item)
            <div>
                {{-- {{ dd($item->company->name); }} --}}
                <h2></h2>

                {{-- get logo, get name, get total views --}}

                <div class="flex flex-wrap h-[400px] relative">
                    <div class="absolute top-5 left-5 h-12 w-12">logo</div> 
                    {{-- hover and name expands maybe --}}
                @foreach($item->color_palette as $color)
                    <div style="background-color: {{ $color }}" class="w-full h-12"></div>
                @endforeach
                </div>
            
            </div>
            @endforeach


        </div>
    
    </section>
    

</x-layouts.layout>