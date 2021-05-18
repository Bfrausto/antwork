<x-app>
    <form method="POST" action="{{$user->path()}}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="mb-6">

            <label class="block mb-2 uppercase font-bold text-xs text-grey-700" for="name">
            Name
            </label>

            <input class="border border-grey-400 p-2 w-full" type="text" name="name" id="name" value="{{$user->name}}" required>

            @error('name')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror

        </div>
        <div class="mb-6">

            <label class="block mb-2 uppercase font-bold text-xs text-grey-700" for="username" >
            Username
            </label>

            <input class="border border-grey-400 p-2 w-full" type="text" name="username" id="username" value="{{$user->username}}" required>

            @error('username')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror

        </div>
        <div class="mb-6 ">

            <label class="block mb-2 uppercase font-bold text-xs text-grey-700" for="avatar" >
                avatar
                </label>
            <div class="flex">

                    <input class="border border-grey-400 p-2 w-full" type="file" name="avatar" id="avatar" value="{{$user->avatar}}" >

                    <img src="{{ $user->avatar }}" alt="Tu avatar" width="40">

            </div>
            @error('avatar')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror


        </div>
        <div class="mb-6">

            <label class="block mb-2 uppercase font-bold text-xs text-grey-700" for="email">
            Email
            </label>

            <input class="border border-grey-400 p-2 w-full" type="email" name="email" id="email"  value="{{$user->email}}" required>

            @error('email')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror

        </div>
        <div class="mb-6">

            <label class="block mb-2 uppercase font-bold text-xs text-grey-700" for="password">
            Contraseña
            </label>

            <input class="border border-grey-400 p-2 w-full" type="password" name="password" id="password" required>

            @error('password')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror

        </div>
        <div class="mb-6">

            <label class="block mb-2 uppercase font-bold text-xs text-grey-700" for="password_confirmation">
            Confirma tu contraseña
            </label>

            <input class="border border-grey-400 p-2 w-full" type="password" name="password_confirmation" id="password_confirmation" required>

            @error('password_confirmation')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror

        </div>
        <button type="submit" class="bg-yellow-300 rounded-lg shadow py-2 px-2 text-white">Realizar cambios</button>
        <a href="{{$user->path()}}" class="pl-6 hover:underline">Cancelar</a>
    </form>
</x-app>
