<div>
    <div class="columns-1 gap-5 sm:columns-2 sm:gap-5 md:columns-3 lg:columns-4 [&>figure:not(:first-child)]:mt-5">
        @foreach ($this->posts as $post)
            <x-posts.home-post :post="$post" />
        @endforeach
    </div>
    <div x-intersect="$wire.loadMore()" class="border-4 border-transparent text-center content-center">
    </div>
    {{-- <button x-on:click="$dispatch('loadMore')" class="mt-10">Load more</button> --}}
</div>