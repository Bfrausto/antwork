<x-app>
    <header class="mb-6 relative">
        <div class="rela">
            <img src="/images/default-profile-banner.jpeg" alt="" class="mb-2" style="width:800px;height:223px;border-radius:20px">

            <img src="{{$user->avatar}}" alt="Tu avatar" class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 -translate-y-1/3"
            style="left:50%" width="150">
        </div>

        <div class="flex justify-between items-center mb-4">
            <div style="max-width: 270px;">
                <h2 class="font-bold text-2xl mb-2">
                    {{$user->name}}
                </h2>
                <p class="text-sm">Creado en {{$user->created_at->diffForHumans()}}</p>
            </div>
            <div class="flex">
            @can('edit',$user)
                <a href="{{$user->path('edit')}}" class="rounded-full border borde-gray-300 py-2 px-4 text-black text-sm mr-2">Editar Perfil</a>
            @endcan

           <x-follow-button :user="$user"></x-follow-button>
            </div>
        </div>
        <p class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus molestiae iste aliquid temporibus placeat ut ad fugit tempora natus cupiditate in labore numquam recusandae possimus sequi libero, repellendus ratione nemo!</p>
        {{-- menos la mitad de lo que mide --}}
    </header>
    @include('_timeline',[
        'questions'=> $questions
    ])
</x-app>
