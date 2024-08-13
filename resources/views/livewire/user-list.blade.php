<div class="relative overflow-x-auto shadow-md sm:rounded-lg mb-8">
    {{-- <div class="flex justify-between items-center border-b border-gray-100">
        <div id="filter-selector" class="flex items-center space-x-4 font-light ml-4">
            <button class="{{ $sort === 'desc' ? 'text-gray-900 border-b border-gray-700': 'text-gray-500'}} py-1" wire:click="setSort('desc')">Latest</button>
            <button class="{{ $sort === 'asc' ? 'text-gray-900 border-b border-gray-700': 'text-gray-500'}} py-1" wire:click="setSort('asc')">Oldest</button>
        </div>
        <div class="p-1">
            @include('livewire.partials.search-box')
        </div>
    </div> --}}
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-9 py-3">
                    ID
                </th>
                <th scope="col" class="px-9 py-3">
                    Name
                </th>
                <th scope="col" class="px-9 py-3">
                    Email
                </th>
                <th scope="col" class="px-9 py-3">
                    Created at
                </th>
                <th scope="col" class="px-9 py-3">
                    Action
                </th>
            </tr>
        <tbody>
        @foreach($this->users as $user)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-9 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $user->id }}
                </th>
                <th scope="row" class="px-9 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $user->name }}
                </th>
                <td class="px-9 py-4">
                    {{ $user->email }}
                </td>
                <td class="px-9 py-4">
                    {{ $user->readableCreatedAt() }}
                </td>
                <td class="px-9 py-4">
                    <a href="{{ route('users.edit', $user->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline mr-2">Edit</a>
                    <form action="{{ route('parameters.destroy', $user->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="font-medium text-red-600 dark:text-red-500 hover:underline mr-2">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="my-4 mx-4">
        {{ $this->users->onEachSide(2)->links(data : ['scrollTo' => false]) }}
    </div>
</div>