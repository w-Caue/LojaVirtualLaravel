@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-center">
            <div class="col-md-8">
                <div class="">
                    <div class="text-center text-2xl font-semibold mb-3">Faça Seu <span>Login</span></div>

                    <div class="container mx-auto w-full flex justify-center">
                        <div class="w-full max-w-lg">
                            <form method="POST" action="{{ route('login') }}"
                                class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                                @csrf

                                <div class="mb-4">
                                    <label for="email"
                                        class="block text-gray-700 text-sm font-bold mb-2">{{ __('Email') }}</label>

                                    <div>
                                        <input id="email"
                                            class="shadow appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 focus:shadow-outline"
                                            type="text" required>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="password"
                                        class="block text-gray-700 text-sm font-bold mb-2">{{ __('Senha') }}</label>

                                    <div>
                                        <input id="password"
                                            class="shadow appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 focus:shadow-outline  @error('password') is-invalid @enderror"
                                            type="password" required>

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="mb-3">
                                    <div class="md:flex md:items-center ">
                                        <input class="mr-2 leading-tight" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label class="md:w-2/3 block text-gray-500 font-bold" for="remember">
                                            {{ __('Lembrar me') }}
                                        </label>
                                    </div>
                                </div>

                                <div class="">
                                    <div class="flex items-center justify-between">
                                        <button type="submit"
                                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                            {{ __('Login') }}
                                        </button>

                                        @if (Route::has('password.request'))
                                            <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800"
                                                href="{{ route('password.request') }}">
                                                {{ __('Esqueceu sua Senha?') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>

                            </form>

                            <p class="text-center text-gray-500 text-xs">
                                &copy;2023 Dev. Cauê Full Stack.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
