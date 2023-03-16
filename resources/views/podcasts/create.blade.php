<x-layout>
<div
    class="bg-background p-10 rounded max-w-lg mx-auto mt-10"
>
    <header class="text-center">
        <h2 class="text-2xl text-yellow font-bold mb-5">
            New Podcast
        </h2>
    </header>

    <form method="POST" action="/podcasts" enctype="multipart/form-data">
        @csrf
        <div class="mb-6">
            <label
                for="host"
                class="inline-block text-lg text-white mb-2"
            >Podcast Creator
            </label>
            <input
                type="text"
                class="text-white bg-background border border-yellow rounded p-2 w-full"
                name="host"
                placeholder="the creator of the podcast"
                value="{{old('host')}}"
            />

            @error('host')
                <p class="text-red-600 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="title" class="inline-block text-lg text-white mb-2"
            >Podcast Title</label>
            <input
                type="text"
                class="text-white bg-background border border-yellow rounded p-2 w-full"
                name="title"
                placeholder="the title of the podcast"
                value="{{old('title')}}"
            />

            @error('title')
            <p class="text-red-600 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label
                for="location"
                class="inline-block text-lg text-white mb-2">Podcast Location</label>
            <input
                type="text"
                class="text-white bg-background border border-yellow rounded p-2 w-full"
                name="location"
                placeholder="Berlin, GER"
                value="{{old('location')}}"
            />

            @error('location')
            <p class="text-red-600 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="email" class="inline-block text-lg text-white mb-2"
            >Podcast Email</label
            >
            <input
                type="text"
                class="text-white bg-background border border-yellow rounded p-2 w-full"
                name="email"
                placeholder="email"
                value="{{old('email')}}"
            />

            @error('email')
            <p class="text-red-600 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label
                for="website"
                class="inline-block text-lg text-white mb-2"
            >
                Podcast Website
            </label>
            <input
                type="text"
                class="text-white bg-background border border-yellow rounded p-2 w-full"
                name="website"
                placeholder="the website of the podcast"
                value="{{old('website')}}"
            />

            @error('website')
            <p class="text-red-600 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="tags" class="inline-block text-lg text-white mb-2">
                Podcast Tags (Comma Separated)
            </label>
            <input
                type="text"
                class="text-white bg-background border border-yellow rounded p-2 w-full"
                name="tags"
                placeholder="politics, science.."
                value="{{old('tags')}}"
            />

            @error('tags')
            <p class="text-red-600 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="logo" class="inline-block text-lg text-white mb-2">
                Podcast Logo
            </label>

            <input
                type="file"
                class="bg-background text-white border border-yellow rounded p-2 w-full"
                name="logo"
            />

            @error('logo')
            <p class="text-red-600 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="file_name" class="inline-block text-lg text-white mb-2">
                Podcast File
            </label>
            <input
                type="file"
                class="bg-background text-white border border-yellow rounded p-2 w-full"
                name="file_name"
            />

            @error('file_name')
            <p class="text-red-600 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label
                for="description"
                class="inline-block text-lg text-white mb-2"
            >
                Podcast Description
            </label>
            <textarea
                class="text-white bg-background border border-yellow rounded p-2 w-full"
                name="description"
                rows="10"
                placeholder="the description of the podcast"
            >{{old('description')}}</textarea>

            @error('description')
            <p class="text-red-600 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <button
                class="bg-yellow text-black rounded-[22px] py-4 px-14 hover:bg-green"
            >
                Create Podcast
            </button>

            <a href="/" class="bg-green text-black rounded-[22px] py-4 px-14 hover:bg-yellow">Back</a>
        </div>
    </form>
</div>
</x-layout>
