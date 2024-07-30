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

                {{-- Modal Content --}}
                <div x-data="{ isDragging: false, previewUrl: null }"
                    @dragover.window="event.preventDefault(); isDragging = true;"
                    @dragleave.window="event.preventDefault(); isDragging = false;"
                    @drop.window="event.preventDefault(); isDragging = false; $refs.fileInput.files = event.dataTransfer.files; updatePreview();"
                    @change="$wire.upload('image', $refs.fileInput.files[0])"
                    class="relative p-4 border-2 border-dashed border-gray-300 rounded-lg"
                    :class="{'border-blue-500': isDragging, 'border-gray-300': !isDragging}">
                    
                      <input type="file" x-ref="fileInput" class="hidden" wire:model="image" @change="$wire.upload('image', $refs.fileInput.files[0])">
           
                    <div x-show="previewUrl" class="absolute inset-0 flex items-center justify-center">
                        <img :src="previewUrl" alt="Image Preview" class="max-w-full max-h-full">
                    </div>
           
                    <p class="text-center text-gray-500" x-show="!previewUrl">Drag & drop an image here or click to select</p>
                </div>

                {{-- Modal Footer --}}
                <div class="bg-white px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse border-t border-gray-200">
                    <button type="button" class="confirmButton mt-3 w-full inline-flex justify-center rounded-md border shadow-sm px-4 py-2 bg-green-600 text-base font-medium text-white hover:bg-green-700 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm" @click="showSubmitModal = false;">Confirm</button>
                    <button type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm" @click="showSubmitModal = false;" data-modal-hide="showSubmitModal">Cancel</button>
                </div>
            </div>
            
        </div>
    </div>
</div>

<script>
    function updatePreview() {
        let fileInput = document.querySelector('[x-ref="fileInput"]');
        if (fileInput.files.length > 0) {
            let file = fileInput.files[0];
            let reader = new FileReader();
            
            reader.onload = function (e) {
                document.querySelector('[x-data]').__x.$data.previewUrl = e.target.result;
            };

            reader.readAsDataURL(file);
        }
    }
</script>