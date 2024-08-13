<x-app-layout>
<div class="flex w-full min-h-screen overflow-hidden">
    <x-sidebar />
    @if ($errors->any())
    <div class="w-full pb-6">
        <ul>
            @foreach ($errors->all() as $error)
                <li class="text-red-700">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="w-1/2 flex flex-col p-5">
        <h2 class="mt-5">User ID: {{ $user->id }}</h2><br>
        <form action="{{ route('users.update', $user->id) }}" method="POST" class="" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-5">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Name:</label>
                <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
            </div>
    
            <div class="mb-5">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Name:</label>
                <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
            </div>
    
            <div>
                <h3>Current role: {{ $user->getRoleName() }}</h3>
            </div>
    
            <select class="block my-5 rounded-lg" name="role" id="role">
                <option value="">Select Role</option>
                @foreach($roles as $role)
                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                @endforeach
            </select>
     
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
        </form>
    </div>
</div>
</x-app-layout>