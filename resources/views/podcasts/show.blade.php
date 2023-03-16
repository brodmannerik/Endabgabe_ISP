<x-layout>
    @include('partials._search')

    <a href="/" class="inline-block text-white hover:text-yellow ml-4 mb-4">
        <i class="fa-solid fa-arrow-left"></i> Back
    </a>
    <div class="mx-4">
        <x-card class="p-10">
            <div
                class="flex flex-col items-center justify-center text-center"
            >
                <img
                    class="w-48 mr-6 mb-6"
                    src="{{$podcast->logo ? asset('storage/' . $podcast->logo) : asset('images/logo.png')}}"
                    alt=""
                />

                <h3 class="text-yellow text-2xl mb-2">{{$podcast->title}}</h3>

                <div class="text-grey text-xl font-bold mb-4">{{$podcast->host}}</div>

                <x-podcast-tags :tagsCsv="$podcast->tags"></x-podcast-tags>

                <div class="text-grey text-lg my-4">
                    <i class="fa-solid fa-location-dot"></i> {{$podcast->location}}
                </div>
                <div>
                    <h3 class="text-white text-xl font-bold mb-4">
                        Description
                    </h3>
                    <div class="text-grey text-lg py-3 space-y-6">
                        {{$podcast->description}}
                        <div class="pt-8">
                            <a
                                href="{{$podcast->website}}"
                                target="_blank"
                                class="block bg-background text-white py-2 rounded-xl hover:opacity-80"
                            >
                                <i class="fa-solid fa-globe"></i> Visit
                                Website</a
                            >
                        </div>
                    </div>
                </div>
            </div>
        </x-card>
    </div>

    @guest
    <form method="POST" action="/comments" enctype="multipart/form-data">
        @csrf
        <div class="mx-20 md:mx-60 pt-8 text-center align-center" id="comment-form">
            <x-card class="p-4">
                <div class="mb-4">
                    <label
                        for="comment"
                        class="inline-block text-lg text-grey mb-6"
                    >
                        Post a comment
                    </label>
                    <textarea
                        class="text-white bg-background rounded p-2 w-full"
                        name="comment"
                        rows="2"
                    >
                    </textarea>

                    @error('comment')
                    <p class="text-red-600 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                    <div class="mb-6">
                        <label for="email" class="inline-block text-lg text-grey mb-2"
                        >Your Name</label
                        >
                        <input
                            type="text"
                            class="text-white bg-background rounded p-2 w-full"
                            name="name"
                            value="{{old('name')}}"
                        />

                        @error('name')
                        <p class="text-red-600 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="email" class="inline-block text-lg text-grey mb-2"
                        >Your Email</label
                        >
                        <input
                            type="text"
                            class="text-white bg-background rounded p-2 w-full"
                            name="email"
                            value="{{old('email')}}"
                        />

                        @error('email')
                        <p class="text-red-600 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>

                <div class="mb-6">
                    <button
                        class="bg-yellow text-black rounded-[22px] py-4 px-14 hover:bg-green"
                    >
                        Submit
                    </button>
                </div>
            </x-card>
        </div>
    </form>
    @endguest

    <div class="py-5">
        @unless(count($comments) == 0)
            @foreach($comments as $comment)
                @if($comment->podcast_id == $podcast->id)
                    <div class="py-5 mx-20 md:mx-60 pt-8 text-center align-center">
                        <x-comment-card :comment="$comment" ></x-comment-card>
                    </div>
                @else
                @endif
            @endforeach
        @endunless
    </div>

</x-layout>
