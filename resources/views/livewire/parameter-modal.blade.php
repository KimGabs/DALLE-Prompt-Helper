<div x-data="{ showModal: false }" x-init="showModal = false">
    <button class="bg-blue-500 text-white px-4 py-2 rounded" @click="showModal = true">Show {{ ucfirst($type) }}</button>
    <textarea id="buttonsInput" class="">{{ implode(', ', $parameters->whereIn('id', $selectedParameters)->pluck('name')->toArray()) }}</textarea>

    <div x-show="showModal" class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true" style="display: none">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-4xl sm:w-full">
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                            <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">{{ ucfirst($type) }}</h3>
                            <div class="grid grid-cols-3 gap-4 mt-4">
                                @foreach ($parameters as $parameter)
                                    <div class="relative cursor-pointer selectParameters rounded-md shadow-md" wire:click="selectParameter({{ $parameter->id }})">
                                        <div class="mj-parameter-wrapper">
                                            <div class="d-flex justify-content-start align-items-center">
                                                <div class="mj-parameter-img-wrapper">
                                                    <img src="storage/{{ $parameter->image }}" alt="{{ $parameter->name }}" class="w-full h-full object-cover rounded-md">
                                                </div>
                                                <div class="parameter-name ml-2">{{ $parameter->name }}</div>
                                            </div>
                                        </div>
                                        @if(in_array($parameter->id, $selectedParameters))
                                            <div class="absolute inset-0 rounded-md border-2 border-blue-500 shadow-sm flex items-center justify-center text-white text-2xl">
                                            </div>
                                        @endif
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <button type="button" id="confirmButton" class="mt-3 w-full inline-flex justify-center rounded-md border shadow-sm px-4 py-2 bg-green-600 text-base font-medium text-white hover:bg-green-700 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm" @click="showModal = false;">Confirm</button>
                    <button type="button" class="mt-3 w-full inline-flex justify-center rounded-md border shadow-sm px-4 py-2 bg-yellow-400 text-base font-medium text-gray-700 hover:bg-yellow-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm" @click="$wire.dispatch('resetParameters');">Reset</button>
                    <button type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm" @click="showModal = false;">Cancel</button>
                </div>
            </div>
            
        </div>
    </div>
</div>