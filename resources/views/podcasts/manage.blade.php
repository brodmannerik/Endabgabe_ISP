<x-layout>

    @include('partials._search')

        <div class="lg:grid xxl:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4 pb-4">

            @unless($podcasts->isEmpty())
            @foreach($podcasts as $podcast)

            <x-card class="p-10 bg-gray pb-10">
                <div class="flex">
                    <div>
                        <img
                            class="hidden w-48 mr-6 md:block max-h-[12rem] max-w-[12rem] object-cover"
                            src="{{$podcast->logo ? asset('storage/' . $podcast->logo) : asset('images/logo.png')}}"
                            alt=""
                        />
                    </div>
                    <div>
                        <a href="/podcasts/{{$podcast->id}}" class="text-xl text-white hover:text-yellow">
                            {{$podcast->title}}
                        </a>
                        <div class="mb-6 mt-4">
                            <a
                                href="/podcasts/{{$podcast->id}}/edit"
                                class="text-blue-400 py-2 rounded-xl"
                            >
                                <i class="fa-solid fa-pen-to-square"></i>
                                Edit</a>
                        </div>
                        <div class="mb-6">
                            <form method="POST" action="/podcasts/{{$podcast->id}}">
                                @csrf
                                @method('DELETE')
                                <button class="text-red-500">
                                    <i class="fa-solid fa-trash">
                                    </i>
                                    Delete
                                </button>
                            </form>
                        </div>
                        <x-podcast-tags :tagsCsv="$podcast->tags" ></x-podcast-tags>
                    </div>
                </div>
            </x-card>

            @endforeach
            @else

            <x-card class="p-10 bg-gray">
                    <p class="text-center text-white">No Podcasts Found</p>
            </x-card>

    @endunless
    </div>

</x-layout>
