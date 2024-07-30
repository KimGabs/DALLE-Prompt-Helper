<!-- resources/views/livewire/parent-component.blade.php -->
<div class="grid grid-rows-1 m-auto grid-flow-col gap-4 my-5 h-20 justify-items-center items-center">
    <div class="col-span-2">
        @livewire('parameter-modal', ['type' => 'Film types'])
    </div>
    <div class="col-span-2">
        @livewire('parameter-modal', ['type' => 'Styles'])
    </div>
    <div class="col-span-2">
        @livewire('parameter-modal', ['type' => 'Vibes'])
    </div>
    <div class="col-span-2">
        @livewire('parameter-modal', ['type' => 'Lighting'])
    </div>
    <div class="col-span-2">
        @livewire('parameter-modal', ['type' => 'Artists'])
    </div>
    <div class="col-span-2">
        @livewire('parameter-modal', ['type' => 'Colors'])
    </div>
    <div class="col-span-2">
        @livewire('parameter-modal', ['type' => 'Materials'])
    </div>
    <textarea id="buttonsInput" name="buttonsInput" rows="3" cols="80" class="p-2" readonly style="visibility:hidden">{{ implode(', ', $this->getCombinedParameters()) }}</textarea>
</div>