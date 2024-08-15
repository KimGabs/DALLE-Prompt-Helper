
<div class="content-center px-5">
    <div class="flex mb-4 w-full max-w-sm h-72 bg-gray-200">
        @if($newImage)
            <img src="{{ $newImage->temporaryUrl() }}" alt="" class="rounded-md object-contain w-full h-lg">
        @else($post->image)
            <img wire:model='image' src="{{ $post->image instanceof \Livewire\TemporaryUploadedFile ? $post->image->temporaryUrl() : asset('storage/' . $post->image) }}" alt="" class="rounded-md object-contain w-full h-lg" >
        @endif
    </div>
    <input wire:model='newImage' accept="image/png, image/jpeg, image/jpg" type="file" id="image" name="newImage" class="w-full ring-1 ring-inset ring-gray-300 bg-gray-300 text-sm rounded block p-2"/>
</div>