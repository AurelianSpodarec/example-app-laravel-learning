@props([
    'logo',
    'slug',
    'name',
    'description',
    'punchline',
    'thumbnail',
    'brandColor'
])

<article class="py-6">
<a href="{{ $slug }}">


    <div class="flex mb-5">
        <img class="object-cover h-16 w-16 rounded-lg mr-5" src="{{ asset("storage/uploads/" . $logo) }}" />
        
        <div>
            <span class="flex font-bold text-3xl">{{ $name }}</span>
            <span>{{ $description }}</span>
        </div>
    </div>
   
    <div>
        <img class="w-full" src="{{ $thumbnail }}" />
    </div>


</a>

<div style="background-color: {{ $brandColor }}" class="w-8 h-8"></div>
</article>



{{-- <article class="w-1/3">

    <div class="flex mb-5">
        <img class="h-16 w-16 rounded-lg mr-5" src="https://a.slack-edge.com/80588/marketing/img/meta/slack_hash_256.png" />
        <div class="">
            <span class="flex font-bold text-3xl">Slack</span>
            <span>Order takeaway food online</span>
        </div>
    </div>
   
    <div>
        <img class="w-full" src="https://www.researchgate.net/profile/Pawan-Kalyani/publication/344035167/figure/fig3/AS:931007695970305@1598980940588/Showing-Slack-Homepage-https-slackcom-intl-en-in-Work-from-home-Slack-brings-the.jpg" />
    </div>

</article> --}}