<x-app-layout>
    <head>
    @livewireStyles
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@alpinejs/alpine@2.8.2/dist/alpine.min.js" defer></script>

    </head>
    <main class="container mx-auto px-5 flex flex-grow">
        <div class="w-full grid grid-cols-1 gap-6">
                @livewire('helper')
                <livewire:helper lazy />
                {{-- @livewire('submit-modal') --}}
                {{-- @livewire('parameter-modal', ['type' => 'Styles']) --}}
                {{-- @livewire('parent-component') --}}

        <div class="flex">
            <div class="flex-none">
                <gradio-app src="https://mukaist-dalle-4k.hf.space"></gradio-app>
            </div>
            <div class="flex-auto my-5 ml-5 rounded-lg p-6 border border-gray-200 shadow-md h-fit">
                <h3 class="text-3xl font-bold dark:text-white">How to use the DALL-E prompt Helper</h3>
                <p class="my-3 text-gray-500 dark:text-gray-400">
                    DALL-E 3 is a state-of-the-art image generation AI model created by OpenAI that can create stunning visuals from textual descriptions. However, with its vast array of parameters and styling options, it can be quite a challenge to remember everything. This prompt helper is your go-to guide for crafting the perfect prompts for DALL-E 3.
                </p>
                <h3 class="text-2xl font-bold dark:text-white">Basic Structure</h3>
                <p class="my-3 text-gray-500 dark:text-gray-400">
                    <strong class="font-semibold text-gray-900 dark:text-white">Concept:</strong> Start by typing a clear and concise concept of the image you want to create.<br>
                    <strong class="font-semibold text-gray-900 dark:text-white">Parameters:</strong> Select the camera and film type settings (such as camera: proximity to vary your picture view distance) you would like the image generator to follow.<br>
                    <strong class="font-semibold text-gray-900 dark:text-white">Style presets:</strong> In addition to camera and film settings, you can also choose your preferred vibes, styles, lighting, artists, colors, or materials as part of your prompt.<br>
                    <br>Copy your preferred prompt from the prompt output to the clipboard and try it in DALL-E.
                </p>
                <h3 class="text-2xl font-bold dark:text-white">What is DALL-E 3?</h3>
                <p class="mt-3 text-gray-500 dark:text-gray-400">
                    DALL-E 3 is an advanced artificial intelligence system from OpenAI that is capable of image generation from text descriptions. It represents a significant improvement over its predecessors. It is capable of understanding more nuanced and detailed instructions and translating them into highly accurate images. 
                    <br><br>
                    DALL-E3 is available via API to selected OpenAI customers and developers, allowing the software to be used in creative projects as well as commercial applications.
                </p>
            </div>
        </div>
        </div>
    </main>

    @livewireScripts
    <script
        type="module"
        src="https://gradio.s3-us-west-2.amazonaws.com/4.32.2/gradio.js"
    ></script>
</x-app-layout>