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
        <?php 
            $files = Storage::disk('uploads')->files('logos'); 
            dd($files);    
        ?>
        <div class="grid grid-cols-3 gap-8">
            <img src="{{ asset("storage/uploads/logos/slack.png") }}" />

            @foreach ($companies as $company)
            
                <x-company 
                    {{-- logo="https://a.slack-edge.com/80588/marketing/img/meta/slack_hash_256.png" --}}
                    logo="{{ $company->logo }}"
                    slug="/companies/{{ $company->slug }}"
                    name="{{ $company->name }}"
                    description="{{ $company->description }}"
                    brandColor="{{ $company->brand_color }}"
                    thumbnail="https://www.researchgate.net/profile/Pawan-Kalyani/publication/344035167/figure/fig3/AS:931007695970305@1598980940588/Showing-Slack-Homepage-https-slackcom-intl-en-in-Work-from-home-Slack-brings-the.jpg"
                />
            @endforeach
           
    
        </div>
    
    
    </section>
    

</x-layouts.layout>