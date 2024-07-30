<div>
    <form-section>
        <div class="w-full text-center mt-7">
            <h1 class="text-2xl font-bold dark:text-white">Prompt Helper</h1>
            <br>
            <textarea id="userInput" name="userInput" placeholder="Enter your main idea here" rows="6" cols="80" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
            <br>
            <textarea id="readOnlyInput" name="readOnlyInput" placeholder="Your output prompt will be display here" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" readonly></textarea>
        </div>
        <div class="rounded-lg border border-gray-200 shadow-md px-7 py-8 mt-8">
            <div class="grid grid-rows-1 grid-flow-col gap-4 h-30">
                {{-- Dropdown Parameters --}}
                @foreach ($parametersByType as $type => $parameters)
                <div class="col-span-2">
                    <div>
                        <label>{{ $type }}</label>
                    <select name="parameters[{{ $type }}]" class="parameters bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full px-5 py-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mt-2">
                        <option value="">--select--</option>
                        @foreach ($parameters as $parameter)
                            <option value="{{ $parameter->name }}">{{ $parameter->name }}</option>
                        @endforeach
                    </select>
                    </div>
                </div>
                @endforeach
            </div>
                @livewire('parent-component')
            <div class="flex justify-center">
                <button id="copyButton" class="mt-3 w-full justify-center inline-flex rounded-md  border-2 border-yellow-500 shadow-sm px-4 py-2 text-base bg-white font-bold text-yellow-500 hover:bg-yellow-500 hover:text-white sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">Copy to Clipboard</button>
                <button type="reset" id="customResetButton" class="mt-3 w-full inline-flex justify-center rounded-md border-2 border-red-500 shadow-sm px-4 py-2 text-base bg-white font-bold text-red-500 hover:bg-red-500 hover:text-white sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm" @click="$wire.dispatch('resetParameters');">Reset</button>
                <div x-data="{ showSubmitModal: false }" x-init="showSubmitModal = false">
                  <button type="button" id="submitButton" data-modal-target="showSubmitModal" data-modal-toggle="showSubmitModal" @click="showSubmitModal = true" class="mt-3 w-full inline-flex justify-center rounded-md border-2 border-green-500 shadow-sm px-4 py-2 text-base bg-white font-bold text-green-500 hover:bg-green-500 hover:text-white sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">Publish prompt</button>
                  @livewire('submit-modal')
            </div>
        </div>
    </form-section>
</div>