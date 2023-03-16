<x-layout>
    @include('partials._search')

    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

        @unless(count($podcasts) == 0)

        @foreach($podcasts as $podcast)
            <x-podcast-card :podcast="$podcast"></x-podcast-card>
        @endforeach

        @else
            <p class="text-white">No Podcasts found :(</p>
        @endunless

    </div>
    <div class="mt-6 p-4">
        {{$podcasts->links()}}
    </div>
</x-layout>
