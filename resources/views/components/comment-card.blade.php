@php use Carbon\Carbon; @endphp
@props(['comment'])

<x-card class="p-4">
    <div class="mb-4">
        <label
                for="comment"
                class="inline-block text-lg text-grey mb-6"
        >
            Comment by {{$comment->name}}
        </label>
        <textarea disabled
                  class="text-white bg-background rounded p-2 w-full"
                  name="comment"
                  rows="2"
        >{{$comment->comment}}
        </textarea>
    </div>

    <div class="mb-6">
        <p class="text-grey">{{ Carbon::parse($comment->created_at)->format('d/m/Y')}}</p>
    </div>
</x-card>
