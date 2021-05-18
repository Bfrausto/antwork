@unless(current_user()->is($user))
    <form method="POST" action="{{route('follow',$user->username)}}">
        @csrf
        <button type="submit"  class="bg-yellow-300 rounded-full shadow py-2 px-4 text-white text-sm">
            {{current_user()->following($user)?'Dejar de Seguir':'Seguir'}}
        </button>
    </form>
@endunless
