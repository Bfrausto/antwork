<ul>
    <li><a
        class="font-bold text-lg mb-4 block"
        href="{{route('home')}}"
    >Home</a></li>
    <li><a
        class="font-bold text-lg mb-4 block"
        href="/explore"
    >Explorar</a></li>
    {{-- <li><a
        class="font-bold text-lg mb-4 block"
        href="#"
    >Notificaciones</a></li>
    <li><a
        class="font-bold text-lg mb-4 block"
        href="#"
    >Mensages</a></li> --}}
    <li><a
        class="font-bold text-lg mb-4 block"
        href="{{route('profile',auth()->user())}}"
    >Perfil</a></li>
    <li>
        <form action="/logout" method="POST">
            @csrf
            <button class="font-bold text-lg mb-4 block">Cerrar sesión</button>
        </form>
    </li>
</ul>
