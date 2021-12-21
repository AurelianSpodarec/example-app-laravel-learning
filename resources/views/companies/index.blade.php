<x-layouts.layout>

    
    <section class="max-w-screen-2xl mx-auto py-6 sm:px-6 lg:px-8">   

        <div> 

            <div class=""
            <label for="pet-select">Industry</label>
            <select name="pets" id="pet-select">
                <option value="">Select industry</option>
                <option value="dog">Dog</option>
            </select>


        </div>
       
        <div class="grid grid-cols-3 gap-8">

            @foreach ($companies as $company)
            
                <x-company
                    logo="{{ $company->logo }}"
                    name="{{ $company->name }}"
                    slug="/companies/{{ $company->slug }}"
                    description="{{ $company->description }}"
                    brandColor="{{ $company->brand_color }}"
                    thumbnail="https://www.researchgate.net/profile/Pawan-Kalyani/publication/344035167/figure/fig3/AS:931007695970305@1598980940588/Showing-Slack-Homepage-https-slackcom-intl-en-in-Work-from-home-Slack-brings-the.jpg"
                />
                
            @endforeach
           
    
        </div>
    
    
    </section>
    

</x-layouts.layout>