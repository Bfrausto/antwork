<x-master>

    <div class="container mx-auto flex justify-center">
        <div class="px-12 py-4 bg-yellow-100 border border-gray-300 rounded-lg">
            <div class="col-md-8">
                <div class="font-bold text-lg mb-4">{{ __('Iniciar sesión') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-6">

                            <label class="block mb-2 uppercase font-bold text-xs text-grey-700" for="email">
                            Email
                            </label>

                            <input class="border border-grey-400 p-2 w-full" type="email" name="email" id="email"
                            value="{{old( 'email')}}" autocomplete="email" required>

                            @error('email')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                            @enderror

                        </div>

                        <div class="mb-6">

                            <label class="block mb-2 uppercase font-bold text-xs text-grey-700" for="password">
                            Contraseña
                            </label>

                            <input class="border border-grey-400 p-2 w-full" type="password" name="password"
                             autocomplete="current-password" required>

                            @error('password')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                            @enderror

                        </div>

                        <div class="mb-6">



                            <input class="mr-1" type="checkbox" name="remember" id="remember" required>
                            <label class="text-xs text-gray-700 font-bold uppercase" value="{{old( 'remember')? 'checkbox':''}}" for="remember">
                                Recuerdame
                                </label>
                            @error('remember')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit"
                                    class="px-6 py-3 rounded text-sm uppercase bg-yellow-300 font-bold text-white">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link hover:underline" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-master>
