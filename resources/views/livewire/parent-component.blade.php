<!-- resources/views/livewire/parent-component.blade.php -->
<div class="grid grid-rows-3 m-auto grid-flow-row md:grid-rows-1 md:grid-flow-col gap-2 my-5 h-full justify-items-center items-center">
    <div class="col-span-1 w-full">
        @livewire('parameter-modal', ['type' => 'Film types'])
    </div>
    <div class="col-span-1 w-full">
        @livewire('parameter-modal', ['type' => 'Styles'])
    </div>
    <div class="col-span-1 w-full">
        @livewire('parameter-modal', ['type' => 'Vibes'])
    </div>
    <div class="col-span-1 w-full">
        @livewire('parameter-modal', ['type' => 'Lighting'])
    </div>
    <div class="col-span-1 w-full">
        @livewire('parameter-modal', ['type' => 'Artists'])
    </div>
    <div class="col-span-1 w-full">
        @livewire('parameter-modal', ['type' => 'Colors'])
    </div>
    <div class="col-span-1 w-full">
        @livewire('parameter-modal', ['type' => 'Materials'])
    </div>
    <textarea class="hidden" id="buttonsInput" name="buttonsInput" rows="3" cols="80" class="p-2" readonly>{{ implode(', ', $this->getCombinedParameters()) }}</textarea>
</div>