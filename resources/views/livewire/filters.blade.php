<div class="flex md:mr-auto">
    <select
        class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2 m-auto"
        name="filter"
        id="filter"
        wire:change="change"
        wire:model="filterSelected"
    >
        @foreach($filters as $filter => $label)
            <option value="{{$filter}}">{{$label}}</option>
        @endforeach
    </select>
</div>
