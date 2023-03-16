<form action="/">
    <div class="relative m-4 pb-5">
        @auth
        <div class="absolute top-4 left-3">
            <i class="fa fa-search text-grey z-20"></i>
        </div>
        <input
            type="text"
            name="search"
            class="bg-background h-14 w-full pl-10 pr-20 text-grey rounded-lg z-0 placeholder-grey focus:outline-none"
            placeholder="Search Podcasts..."
        />
        <div class="absolute top-1 right-2">
            <a
                href="/podcasts/create"
                class="px-8 py-6 w-60 text-white border-dashed border-2 border-yellow hover:border-green"
            ><i class="fa-solid fa-plus"></i>
                Add Podcast
            </a>
        </div>
        @else
            <div class="absolute top-4 left-3">
                <i class="fa fa-search text-grey z-20"></i>
            </div>
            <input
                type="text"
                name="search"
                class="bg-background h-14 w-full pl-10 pr-20 text-grey rounded-lg z-0 placeholder-grey focus:outline-none"
                placeholder="Search Podcasts..."
            />
        @endauth
    </div>
</form>
