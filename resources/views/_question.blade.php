<div class="flex p-4 border-b border-gray-300 rounded-lg">
    <div class="mr-4 flex-shrink-0">
        {{-- <a href="{{route('profile',$question->user->name)}}"> --}}
        <a href="{{$question->user->path()}}">
            <img src="{{$question->user->avatar}}" alt="" class="rounded-full mr-2" width="50" height="50">
        </a>
    </div>

    <div>
        <h5 class="font-bold mb-2">
            <a href="{{$question->user->path()}}">
                {{$question->user->name}}
            </a>
        </h5>
        <p class="text-sm">
            {{$question->body}}
        </p>
    </div>
</div>
