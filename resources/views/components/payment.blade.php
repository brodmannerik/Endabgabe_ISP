<x-layout>
        <div class="">
            <div class="pt-20">
                <img class="w-3/4 block mx-auto" src="{{asset('images/paymentBackground.png')}}" alt=""/>
            </div>
        </div>
        <div class="flex align-center justify-center mb-40 mr-30">
            <form action="/checkout" method="POST">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <button class="bg-yellow text-black rounded-[44px] py-10 px-28 hover:bg-green" type="submit">Pay Now</button>
            </form>
        </div>
</x-layout>

