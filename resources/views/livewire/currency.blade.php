<div class="ml-auto">
    <select
        name="currency"
        id="currency"
        class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5"
        wire:model="currency"
        wire:change="emitCurrency"
    >
        <option value="eur">EUR</option>
        <option value="usd">USD</option>
    </select>
</div>
