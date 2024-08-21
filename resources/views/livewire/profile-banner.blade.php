@props(['post'])
<div class="px-3 lg:px-7 py-5">
    <img class="rounded-full size-20"
    src="{{ $user->profile_photo_url }}" alt="profile photo of {{ $user->name }}">
    <h1 class="mt-4 font-bold text-3xl dark:text-white">{{ $user->name }}</h1>
</div>
