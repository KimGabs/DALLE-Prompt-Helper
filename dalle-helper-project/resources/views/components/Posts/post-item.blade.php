@props(['post'])
{{-- <article class="[&:not(:last-child)]:border-b border-gray-100 pb-10"> --}}
    {{-- <div class="article-body grid grid-cols-12 gap-3 mt-5 items-start"> --}}
        <figure class="col-span-2 relative group overflow-hidden rounded-lg">
            <a href="posts/{{ $post->slug }}">
                <img
                  src="{{ asset('storage/' . $post->image) }}" 
                  alt="{{ $post->title }}"
                  class="w-full h-96 group transition-all duration-200 object-cover"/>
            </a>
            <livewire:like-button :key="'like-button-'.$post->id.now()" :post="$post" :styleDiv="'styleDiv-a'" :styleButton="'styleButton-a'" :likeCount="'likeCount-listpost'" />
            <figcaption
              class="flex w-full p-3 absolute -bottom-20 left-0 bg-gradient-to-t from-gray-800 text-white items-center invisible group-hover:bottom-0 group-hover:visible transition-all duration-300">
              <div class="w-full flex flex-col gap-2">
                <p class="text-sm font-semibold text-shadow-custom">
                    @if (empty($post->title))
                    <a href="posts/{{ $post->slug }}">
                        {{ $post->getExcerptTitle() }}
                    </a>    
                    @else
                    <a href="posts/{{ $post->slug }}">
                        {{ $post->title }}
                    </a>
                    @endif
                </p>
                <div class="flex gap-1 text-sm justify-between">
                    <div class="flex text-sm items-center">
                        <img class="w-6 rounded-full mr-2"
                            src="{{ $post->author->profile_photo_url }}"
                            alt="{{ $post->author->name }}"
                            >
                        <span class="mr-1 text-xs">{{ $post->author->name }}</span>
                        <span class="text-white text-xs inline-flex"> • {{ $post->published_at->diffForHumans() }}
                        </span>
                    </div>
                    <div wire:poll.120s class="article-meta flex text-sm items-center">
                        <span class="text-white text-xs inline-flex items-center text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-4 mr-1">
                                <path d="M10 12.5a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
                                <path fill-rule="evenodd" d="M.664 10.59a1.651 1.651 0 0 1 0-1.186A10.004 10.004 0 0 1 10 3c4.257 0 7.893 2.66 9.336 6.41.147.381.146.804 0 1.186A10.004 10.004 0 0 1 10 17c-4.257 0-7.893-2.66-9.336-6.41ZM14 10a4 4 0 1 1-8 0 4 4 0 0 1 8 0Z" clip-rule="evenodd" />
                              </svg>                              
                            {{ $post->views  }}

                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-4 mx-1">
                                <path d="m9.653 16.915-.005-.003-.019-.01a20.759 20.759 0 0 1-1.162-.682 22.045 22.045 0 0 1-2.582-1.9C4.045 12.733 2 10.352 2 7.5a4.5 4.5 0 0 1 8-2.828A4.5 4.5 0 0 1 18 7.5c0 2.852-2.044 5.233-3.885 6.82a22.049 22.049 0 0 1-3.744 2.582l-.019.01-.005.003h-.002a.739.739 0 0 1-.69.001l-.002-.001Z" />
                              </svg>            
                              <span>
                                  {{ $post->likes()->count() }}
                              </span>
                        </span>
                    </div>
                </div>
              </div>
 
            </figcaption>
          </figure>


        {{-- <div class="article-thumbnail col-span-4 flex items-center">
            <a href="posts/{{ $post->slug }}" >
                <img class="mw-100 mx-auto rounded-xl"
                    src=" ../public/storage/{{ $post->image }}"
                    alt="thumbnail">
            </a>
        </div> --}}
        {{-- <div class="col-span-8">
            <div class="article-meta flex py-1 text-sm items-center">
                <img class="w-7 h-7 rounded-full mr-3"
                    src="{{ $post->author->profile_photo_url }}"
                    alt="{{ $post->author->name }}"
                    >
                <span class="mr-1 text-xs">{{ $post->author->name }}</span>
                <span class="text-gray-500 text-xs"> • {{ $post->published_at->diffForHumans() }}</span>
            </div>
            <h2 class="text-xl font-bold text-gray-900">
                @if (empty($post->title))
                <a href="posts/{{ $post->slug }}">
                    {{ $post->body }}
                </a>    
                @else
                <a href="posts/{{ $post->slug }}">
                    {{ $post->title }}
                </a>
                @endif
            </h2>

            <p class="mt-2 text-base text-gray-700 font-light">
                    {{ $post->getExcerpt() }}
            </p>
            <div class="article-actions-bar mt-6 flex items-center justify-between"> --}}
                {{-- <div class="flex items-center space-x-4">
                    <span class="text-gray-500 text-sm">{{ $post->getReadingTime() }} min read</span>
                </div> --}}
                {{-- <div>
                    <a class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            class="w-6 h-6 text-gray-600 hover:text-gray-900">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                        </svg>
                        <span class="text-gray-600 ml-2">
                            1
                        </span>
                    </a>
                </div>
            </div>
        </div> --}}
    {{-- </div>  --}}
{{-- </article> --}}
{{-- </div> --}}