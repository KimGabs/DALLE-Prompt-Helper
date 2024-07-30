<x-app-layout>
<div class="min-h-screen flex flex-col">
    <div class="w-full text-left py-8">
        <h1 class="text-xl font-bold subpixel-antialiased">Parameters</h1>
    </div>
    <div class="w-full text-left pb-8">
        <a href="{{ route('parameters.create') }}" class="px-4 py-2 bg-blue-500 text-white rounded">Create</a>    
    </div>

        @if(session('success'))
            <p class="text-green-700 pb-6">{{ session('success') }}</p>
        @endif

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mb-8">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-9 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-9 py-3">
                        Type
                    </th>
                    <th scope="col" class="px-9 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($parameters as $parameter)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-9 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $parameter->name }}
                    </th>
                    <td class="px-9 py-4">
                        {{ $parameter->type }}
                    </td>
                    <td class="px-9 py-4">
                        <a href="{{ route('parameters.edit', $parameter->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline mr-2">Edit</a>
                        <form action="{{ route('parameters.destroy', $parameter->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="font-medium text-red-600 dark:text-red-500 hover:underline mr-2">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="mt-1 mb-6">
        {{-- {{ $this->posts->onEachSide(1)->links() }} --}}
        {{ $parameters->onEachSide(0)->links() }}
    </div>
{{-- 
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Type</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($parameters as $parameter)
                <tr>
                    <td>{{ $parameter->name }}</td>
                    <td>{{ $parameter->type }}</td>
                    <td>
                        <a href="{{ route('parameters.edit', $parameter->id) }}">Edit</a>
                        <form action="{{ route('parameters.destroy', $parameter->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table> --}}
</div>
</x-app-layout>