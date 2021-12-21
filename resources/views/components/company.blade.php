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