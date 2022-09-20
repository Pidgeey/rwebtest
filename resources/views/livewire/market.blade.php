<div class="">
    <ul>
        <li class="flex w-full font-bold items-center lg:py-2">
            <div class="w-6 lg:w-10">#</div>
            <div class="w-20 lg:w-2/12">Coin</div>
            <div class="w-4/12 sm:w-2/12 ml-auto text-right">Price</div>
            <div class="invisible sm:visible w-0 sm:w-2/12 text-right">24h</div>
            <div class="invisible lg:visible w-0 lg:w-3/12 text-right">24h Volume</div>
            <div class="invisible sm:visible w-0 sm:w-3/12 text-right">Mkt Cap</div>
        </li>
        @foreach($list as $item)
            <li wire:click="temp('{{$item['id']}}')" class="flex w-full py-2 lg:py-4 border-t hover:bg-gray-100 cursor-pointer items-center">
                <div class="w-6 lg:w-10">{{ $item['market_cap_rank'] ?? 'N/A' }}</div>
                <div class="w-20 lg:w-2/12 flex items-center">
                    <img src="{{URL::asset($item['image'])}}" alt="profile Pic" class="w-6 h-6">
                    <div class="mx-2 font-bold">{{ $item['name'] }}</div>
                    <div class="text-gray-400">{{ $item['symbol'] }}</div>
                </div>
                <div class="w-4/12 ml-auto sm:w-2/12 text-right">{{ sprintf("$ %s", round($item['current_price'], 6)) }}</div>
                <div class="invisible sm:visible w-0 sm:w-2/12 text-right {{ $item['price_change_percentage_24h'] > 0 ? 'text-green-500' : 'text-red-500' }}">
                    {{ sprintf("%s %s", $item['price_change_percentage_24h'], '%') }}
                </div>
                <div class="invisible lg:visible w-0 lg:w-3/12 text-right {{ $item['price_change_24h'] > 0 ? 'text-green-500' : 'text-red-500' }}">
                    {{ sprintf("$ %s", $item['price_change_24h']) }}
                </div>
                <div class="invisible sm:visible w-0 sm:w-3/12 text-right">{{ sprintf("$ %s", $item['market_cap']) }}</div>
            </li>
        @endforeach
    </ul>
</div>
