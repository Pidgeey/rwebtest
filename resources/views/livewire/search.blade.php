<div class="flex m-auto mt-4 md:mt-0 md:m-0 md:ml-auto md:my-auto">
    <input
        type="text"
        name="query"
        id="query"
        class="border-2 rounded-md p-2 justify-between"
        wire:model="query"
        wire:keydown.enter="$emit('search', '{{$query}}')"
    >
    <button
        wire:click="$emit('search', '{{$query}}')"
        class="ml-2 border px-2 py-1 bg-gray-200 border-2 rounded focus:none"
    >Recherche</button>
</div>
