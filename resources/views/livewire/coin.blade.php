<div class="flex flex-col">
    <div class="flex items-center">
        <div
            wire:click="goToMarketList"
            class="text-gray-200 bg-gray-700 p-1 rounded hover:bg-gray-200 hover:text-gray-700 cursor-pointer"
        >Market list</div>
        <div class="text-xl mx-2"> > </div>
        <div class="text-lg">{{ $coin['name'] }}</div>
    </div>
    <div class="mt-8 w-fit mx-auto lg:mx-0">
        <div class="bg-black rounded py-1 px-3 text-white">Rank: #{{ $coin['market_cap_rank'] }}</div>
    </div>
    <div class="flex items-center font-bold text-xl mt-2 mx-auto lg:mx-0">
        <img src="{{URL::asset($coin['image']['large'])}}" alt="profile Pic" height="30" width="30">
        <div class="px-2">{{ $coin['name'] }}</div>
        <div>({{ $coin['symbol'] }})</div>
    </div>
    <div class="flex items-center text-3xl font-bold mx-auto lg:mx-0">
        @if ($currency === 'eur')
            <span>€</span>
        @else
            <spa>$</spa>
        @endif
        <div class="px-1">{{ $coin['market_data']['current_price'][$currency] }}</div>
        <div class="ml-2 text-lg self-end {{ $coin['market_data']['price_change_percentage_1h_in_currency'][$currency] > 0 ? 'text-green-500' : 'text-red-500' }}">
            {{ sprintf("%s %s", round($coin['market_data']['price_change_percentage_1h_in_currency'][$currency], 2), "%") }}
        </div>
    </div>
    <div class="mt-10">
        <div class="lg:w-1/2 md:w-2/3 sm:w-full text-gray-400 m-auto lg:m-0">
            <div class="flex border-b border-gray-400 p-2">
                <div class="mr-auto">24 hours</div>
                <div
                    class="ml-auto font-bold {{ $coin['market_data']['price_change_percentage_24h_in_currency'][$currency] > 0 ? 'text-green-500' : 'text-red-500' }}"
                >
                    {{ sprintf("%s %s", $coin['market_data']['price_change_percentage_24h_in_currency'][$currency], "%") }}
                </div>
            </div>
            <div class="flex border-b border-gray-400 p-2">
                <div class="mr-auto">7 days</div>
                <div
                    class="ml-auto font-bold {{ $coin['market_data']['price_change_percentage_7d_in_currency'][$currency] > 0 ? 'text-green-500' : 'text-red-500' }}"
                >
                    {{ sprintf("%s %s", $coin['market_data']['price_change_percentage_7d_in_currency'][$currency], "%") }}
                </div>
            </div>
            <div class="flex border-b border-gray-400 p-2">
                <div class="mr-auto">14 days</div>
                <div
                    class="ml-auto font-bold {{ $coin['market_data']['price_change_percentage_14d_in_currency'][$currency] > 0 ? 'text-green-500' : 'text-red-500' }}"
                >
                    {{ sprintf("%s %s", $coin['market_data']['price_change_percentage_14d_in_currency'][$currency], "%") }}
                </div>
            </div>
            <div class="flex border-b border-gray-400 p-2">
                <div class="mr-auto">30 days</div>
                <div
                    class="ml-auto font-bold {{ $coin['market_data']['price_change_percentage_30d_in_currency'][$currency] > 0 ? 'text-green-500' : 'text-red-500' }}"
                >
                    {{ sprintf("%s %s", $coin['market_data']['price_change_percentage_30d_in_currency'][$currency], "%") }}
                </div>
            </div>
            <div class="flex border-b border-gray-400 p-2">
                <div class="mr-auto">60 days</div>
                <div
                    class="ml-auto font-bold {{ $coin['market_data']['price_change_percentage_60d_in_currency'][$currency] > 0 ? 'text-green-500' : 'text-red-500' }}"
                >
                    {{ sprintf("%s %s", $coin['market_data']['price_change_percentage_60d_in_currency'][$currency], "%") }}
                </div>
            </div>
            <div class="flex border-b border-gray-400 p-2">
                <div class="mr-auto">200 days</div>
                <div
                    class="ml-auto font-bold {{ $coin['market_data']['price_change_percentage_200d_in_currency'][$currency] > 0 ? 'text-green-500' : 'text-red-500' }}"
                >
                    {{ sprintf("%s %s", $coin['market_data']['price_change_percentage_200d_in_currency'][$currency], "%") }}
                </div>
            </div>
            <div class="flex border-b border-gray-400 p-2">
                <div class="mr-auto">1 year</div>
                <div
                    class="ml-auto font-bold {{ $coin['market_data']['price_change_percentage_1y_in_currency'][$currency] > 0 ? 'text-green-500' : 'text-red-500' }}"
                >
                    {{ sprintf("%s %s", $coin['market_data']['price_change_percentage_1y_in_currency'][$currency], "%") }}
                </div>
            </div>
        </div>
        <div>

        </div>
    </div>
</div>
