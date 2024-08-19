<div>
    <div class="columns-1 gap-5 sm:columns-2 sm:gap-3 md:columns-3 lg:columns-4 [&>figure:not(:first-child)]:mt-3">
        @foreach ($this->posts as $post)
            <x-posts.home-post :post="$post" />
        @endforeach
    </div>
    <div x-intersect="$wire.loadMore()" class="border-4 border-transparent text-center content-center">
    </div>
</div>