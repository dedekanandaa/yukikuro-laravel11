<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-3">
    @isset($article)
    @foreach ($article as $item)
    <div>
        <a href="/blog/{{$item->id}}">
            <article class="space-y-3">
                <img loading="lazy" class="w-full aspect-[3/2] object-cover" src="{{asset("storage/article/{$item->id}/{$item->thumbnail}")}}">
                <div>
                    <h2 class="font-bold text-xl text-neutral-800">{{$item->title}}</h2>
                    <p class="pt-3 text-neutral-500 line-clamp-4">{{$item->description}}</p>
                    <p class="pt-1 text-neutral-500 hover:text-neutral-900 text-xs">Show More</p>
                </div>
            </article>
        </a>
    </div>
    @endforeach
    @endisset
</div>