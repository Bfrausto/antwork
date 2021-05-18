<div class="border border-gray-300 rounded-lg">
    @forelse ($questions as $question)
        @include('_question')
    @empty
        <p class="p-4">No hay pregutas todavía.</p>
    @endforelse
    
        {{$questions->links()}}
    </div>
