@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="container w-full">
                <div class="text-center text-2xl font-semibold mb-4">{{ __('Cadastre-se') }}</div>

                <div class="container mx-auto w-full flex justify-center">
                    <form method="POST" action="{{ route('register') }}" class="w-full max-w-lg bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                        @csrf

                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label for="name" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">{{ __('Nome') }}</label>

                                <div>
                                    <input id="name" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="w-full md:w-1/2 px-3">
                                <label for="last_name" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">{{ __('Último Nome') }}</label> 

                                <div>
                                    <input id="last_name" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" type="text" placeholder="">

                                    @error('last_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                        </div>

                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3">
                                <label for="telefone" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">{{ __('Telefone') }}</label>

                                <div>
                                    <input id="telefone" type="telefone" class="appearance-none block w-full max-w-xs bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 @error('telefone') is-invalid @enderror" name="telefone" value="{{ old('telefone') }}" type="text" placeholder="">

                                    @error('telefone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                            </div>

                            <div class="w-full px-3">
                                <label for="email" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">{{ __('Email') }}</label>

                                <div>
                                    <input id="email" type="email" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                            </div>
                        </div>

                        <div class="flex flex-wrap -mx-3 mb-2">
                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                    <label for="password" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">{{ __('Senha') }}</label>

                                    <div>
                                        <input id="password" type="password" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 @error('password') is-invalid @enderror" name="password" autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                            </div>
                          
                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                    <label for="password-confirm" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">{{ __('Confirmar Senha') }}</label>

                                    <div>
                                        <input id="password-confirm" type="password" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="password_confirmation" autocomplete="new-password">
                                    </div>         
                            </div>

                        </div>

                        <div class="flex justify-center">
                            <button type="submit" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover: py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                                {{ __('Register') }}
                            </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
