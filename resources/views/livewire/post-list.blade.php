<div class=" px-3 lg:px-7 py-6">
    <div class="flex justify-between items-center border-b border-gray-100">
        <div id="filter-selector" class="flex items-center space-x-4 font-light">
            <button class="{{ $sort === 'desc' ? 'text-gray-900 border-b border-gray-700': 'text-gray-500'}} py-4" wire:click="setSort('desc')">Latest</button>
            <button class="{{ $sort === 'asc' ? 'text-gray-900 border-b border-gray-700': 'text-gray-500'}} py-4" wire:click="setSort('asc')">Oldest</button>
        </div>
        @include('livewire.partials.search-box')
    </div>
    <div class="py-4">
        <div class="text-gray-700 mb-4">
            @if($search)
                <button class="text-gray-800 text-xs mr-1 bg-gray-200 rounded-full px-2 py-1" wire:click="clearFilters()">X</button>
            @endif
            @if ($search)
            <span class="ml-1">
                Search results for <strong>"{{$search}}"</strong>
            </span>
            @endif
        </div>
        <div class="grid grid-cols-6 gap-7">
        @foreach ($this->myPosts as $post)
            <x-posts.post-item :post=$post />
        @endforeach
        </div>
    </div>

    <div class="my-3">
        {{ $this->myPosts->onEachSide(0)->links() }}
    </div>
</div>