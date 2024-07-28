<div>
    <form-section>
        <div class="w-full text-center py-8">
            <h1>DALL-E Prompt Helper</h1>
            {{-- <label for="userInput">User Input:</label> --}}
            <textarea id="userInput" name="userInput" placeholder="Input main idea here" rows="6" cols="80" class="p-2"></textarea>
            <br>
            {{-- <label for="readOnlyInput">Read-Only Input:</label> --}}
            <textarea id="readOnlyInput" name="readOnlyInput" placeholder="Output prompt" rows="6" cols="80" class="p-2" readonly></textarea>
        </div>
        <div>
            {{-- Dropdown Parameters --}}
            @foreach ($parametersByType as $type => $parameters)
                <label>{{ $type }}</label>
                <select name="parameters[{{ $type }}]" class="parameters bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
>
                    <option value="">--select--</option>
                    @foreach ($parameters as $parameter)
                        <option value="{{ $parameter->name }}">{{ $parameter->name }}</option>
                    @endforeach
                </select>
            @endforeach
            <div class="py-4">
                {{-- Button Parameters --}}
                @foreach ($buttonTypes as $type => $parameters)
                    <button type="button" wire:click="handleButtonClick('{{ $parameter->id }}')" class="py-2.5 px-5 me-2 mb-2 text-sm font-bold text-blue-600 focus:outline-none bg-white rounded-lg border border-blue-500 hover:bg-gray-50 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                        {{ $type }}
                    </button>
                @endforeach
            </div>
        </div>
    </form-section>
</div>