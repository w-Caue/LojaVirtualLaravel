<div>
    <div class="relative m-5">
        <div class="flex flex-col justify-center mb-5">
            <h1 class="font-semibold text-center text-2xl">Clientes</h1>

            <div class="mb-1">
                <label for="search"
                    class="block text-center text-gray-700 text-sm font-bold mb-2">{{ __('Pesquisa') }}</label>

                <div class="flex items-center justify-center gap-1">
                    <input wire:model.lazy="search" id="search"
                        class="shadow appearance-none block w-full md:max-w-sm text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 focus:shadow-outline"
                        type="text" required>

                    <button class="text-white bg-blue-500 p-2 mb-3 border rounded hover:bg-blue-700">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                        </svg>
                    </button>

                </div>
            </div>
        </div>

        <div class="flex justify-center ">

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 ">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-100">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                #
                            </th>

                            <th scope="col" class="px-6 py-3">
                                Nome
                            </th>

                            <th scope="col" class="px-6 py-3">
                                <div class="flex items-center">
                                    Email
                                    <a href="#"><svg class="w-3 h-3 ml-1.5" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                        </svg></a>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <div class="flex items-center">
                                    Telefone
                                    <a href="#"><svg class="w-3 h-3 ml-1.5" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                        </svg></a>
                                </div>
                            </th>

                            <th scope="col" class="px-6 py-3">

                            </th>

                            <th scope="col" class="px-6 py-3">

                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clientes as $cliente)
                            <tr class="bg-white border-b ">
                                <th class="px-6 py-4">
                                    {{ $cliente->id }}
                                </th>

                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                    {{ $cliente->name }}
                                </th>

                                <td class="px-6 py-4">
                                    {{ $cliente->email }}
                                </td>

                                <td class="px-6 py-4">
                                    {{ $cliente->telefone }}
                                </td>

                                <td class="px-6 py-4">
                                    <button wire:click="editarCliente({{ $cliente->id }})"
                                        class=" bg-transparent hover:bg-blue-500 font-semibold hover:text-white p-3 hover:border-transparent rounded m-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                                        </svg>
                                    </button>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @if ($editCliente)
        <div class="fixed top-28 inset-0 h-max flex justify-center ">
            <div class=" border bg-white w-full max-w-3xl sm:rounded-lg">

                <div class="flex justify-end bg-gray-100">
                    <button wire:click="editarCliente()"
                        class="shadow bg-transparent hover:bg-red-500 font-semibold hover:text-white  border hover:border-transparent rounded m-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>

                    </button>
                </div>

                <div class="flex justify-center mb-4 ">
                    <p class="text-xl font-semibold">Editar Cliente</p>
                </div>

                <div class="flex justify-center m-5">
                    <form wire:submit.prevent="update()">
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label for="name"
                                    class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-first-name">{{ __('Nome') }}</label>

                                <div>
                                    <input wire:model="nome" id="name"
                                        class="appearance-none block w-full bg-gray-200 text-gray-700 font-semibold border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white @error('name') is-invalid @enderror"
                                        name="name" value="{{ old('name') }}" autocomplete="name" autofocus>

                                    @error('nome')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="w-full md:w-1/2 px-3">
                                <label for="lastNome"
                                    class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-last-name">{{ __('Último Nome') }}</label>

                                <div>
                                    <input wire:model="lastNome" id="last_name"
                                        class="appearance-none block w-full bg-gray-200 text-gray-700 font-semibold border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 @error('last_name') is-invalid @enderror"
                                        name="last_name" value="{{ old('last_name') }}" type="text"
                                        placeholder="">

                                    @error('lastNome')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                        </div>

                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3">
                                <label for="telefone"
                                    class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">{{ __('Telefone') }}</label>

                                <div>
                                    <input wire:model="telefone" id="telefone" type="telefone"
                                        class="appearance-none block w-full max-w-xs bg-gray-200 text-gray-700 font-semibold border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 @error('telefone') is-invalid @enderror"
                                        name="telefone" value="{{ old('telefone') }}" type="text"
                                        placeholder="">

                                    @error('telefone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                            </div>

                            <div class="w-full px-3">
                                <label for="email"
                                    class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">{{ __('Email') }}</label>

                                <div>
                                    <input wire:model="email" id="email" type="email"
                                        class="appearance-none block w-full bg-gray-200 text-gray-700 font-semibold border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                            </div>
                        </div>

                        <div class="flex justify-center m-3">
                            <button type="submit" class="text-md font-semibold p-2 text-blue-500 rounded border border-blue-500 hover:text-white hover:bg-blue-500">
                                Salvar
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    @endif
</div>
