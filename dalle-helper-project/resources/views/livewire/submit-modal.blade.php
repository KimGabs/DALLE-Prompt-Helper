    {{-- Modal Container  --}}
    <div x-show="showSubmitModal" class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true" style="display: none">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
            
            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-5xl sm:w-full">

                {{-- Modal Header --}}
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Publish Prompt
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="showSubmitModal" @click="showSubmitModal = false;">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>

                {{-- Content --}}
                <div>
                    <div class="flex flex-col justify-center bg-gray-200">
                            {{-- <div class="bg-gray-200 h-[2px] w-1/2 mt-3"> 
                                <div
                                    class="bg-blue-500 h-[2px]"
                                    style="transition: width 1s"
                                    :style="`width: ${progress}%;`"
                                    x-show="isUploading"
                                >
                                </div>
                            </div> --}}
                        </label>
                        <div class="flex p-5">
                            <div class="content-center p-4">
                                <div class="pr-4 mb-4 w-full max-w-sm h-64 bg-gray-200">
                                    @if($image)
                                        <img src="{{ $image->temporaryUrl() }}" alt="" class="rounded-lg object-cover w-full h-full" >
                                    @else
                                        <img src="../public/storage/others/image-placeholder.png" alt="image placeholder" class="object-cover w-full h-full">
                                    @endif
                                </div>
                                <input wire:model='image' accept="image/png, image/jpeg, image/jpg" type="file" id="image" name="image" class="ring-1 ring-inset ring-gray-300 bg-gray-300 text-sm rounded block p-2"/>
                            </div>
                            <div class="flex flex-col flex-auto gap-4">
                                <div class="flex-auto">
                                    <label for="previewPrompt" class="block font-medium text-gray-900 dark:text-white">Prompt</label>
                                    <textarea name="previewPrompt" type="text" id="finalPrompt" rows="3" class="block resize-none w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" readonly required>
                                    </textarea>
                                </div>
                                <div class="flex flex-row flex-auto gap-4">
                                    <div class="flex-1">
                                        <label for="ai_model" class="block font-medium text-gray-900 dark:text-white">Model Used</label>
                                        <select name="ai_model" id="aiModel" onchange="updateVersions()" class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full px-2 py-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mt-2">
                                            <option value="">Select Model</option>
                                            @foreach($aiModels as $model => $versions)
                                                <option value="{{ $model }}">{{ $model }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="flex-auto">
                                        <label for="version" class="block font-medium text-gray-900 dark:text-white">Version Used</label>
                                        <select name="version" id="aiModelVersion" disabled class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full px-2 py-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mt-2">
                                                <option value="">Select Version</option>
                                            </select>
                                        </select>
                                        {{-- @script --}}
                                        <script>
                                            var aiModels = @json($aiModels);
                                    
                                            function updateVersions() {
                                                const modelSelect = document.getElementById('aiModel');
                                                const versionSelect = document.getElementById('aiModelVersion');
                                                const selectedModel = modelSelect.value;
                                    
                                                // Clear the version dropdown
                                                versionSelect.innerHTML = '<option value="">Select Version</option>';
                                    
                                                if (selectedModel) {
                                                    const versions = aiModels[selectedModel];
                                    
                                                    // Enable the version dropdown
                                                    versionSelect.disabled = false;
                                    
                                                    // Populate the version dropdown
                                                    versions.forEach(version => {
                                                        const option = document.createElement('option');
                                                        option.value = version;
                                                        option.textContent = version;
                                                        versionSelect.appendChild(option);
                                                    });
                                                } else {
                                                    // Disable the version dropdown if no model is selected
                                                    versionSelect.disabled = true;
                                                }
                                            }
                                        </script>
                                    </div>
                                </div>
                                <div class="flex flex-auto gap-4">
                                    <div class="flex-auto">
                                        <label for="title" class="block font-medium text-gray-900 dark:text-white">Title (Optional)</label>
                                        <input type="text" id="title" name="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mt-2"/>
                                    </div>
                                    <div class="flex-auto">
                                        <label for="post_category" class="block font-medium text-gray-900 dark:text-white">Prompt Category</label>
                                        <select name="post_category" id="category" class="bg-gray-50 w-full border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full px-2 py-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mt-2">
                                            <option value="">Select Category</option>
                                            @foreach($categories as $category)
                                                <option value="{{ $category }}">{{ $category }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Modal Footer --}}
                <div class="bg-white px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse border-t border-gray-200">
                    <button type="submit" class="mt-3 w-full inline-flex justify-center rounded-md border shadow-sm px-4 py-2 bg-green-600 text-base font-medium text-white hover:bg-green-700 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">Publish</button>
                    <button type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm" @click="showSubmitModal = false;" data-modal-hide="showSubmitModal">Cancel</button>
                </div>
            </div>
            
        </div>
    </div>
</div>
