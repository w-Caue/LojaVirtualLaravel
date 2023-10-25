<div>
    <div class="relative m-5">
        <div class="flex flex-col justify-center mb-5">
            <h1 class="font-semibold text-center text-2xl">Produtos</h1>

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

        <div class="mb-5">
            <ul class="flex flex-wrap items-center justify-end text-black dark:text-gray-400">
                <li wire:click="novoItem()" class="flex gap-1 cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>

                    <p class="mr-4 hover:underline md:mr-6 ">Novo Produto</p>
                </li>
            </ul>
        </div>

        <div class="flex justify-center ">

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 ">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                #
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nome
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <div class="flex items-center">
                                    Descrição
                                    <a href="#"><svg class="w-3 h-3 ml-1.5" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                        </svg></a>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <div class="flex items-center">
                                    Preço
                                    <a href="#"><svg class="w-3 h-3 ml-1.5" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                        </svg></a>
                                </div>
                            </th>

                            <th scope="col" class="px-6 py-3">
                                <div class="flex items-center">
                                    Marca
                                    <a href="#"><svg class="w-3 h-3 ml-1.5" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                        </svg></a>
                                </div>
                            </th>

                            <th scope="col" class="px-6 py-3">
                                <div class="flex items-center">
                                    Grupo
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
                        @foreach ($itens as $item)
                            <tr class="bg-white border-b ">
                                <th class="px-6 py-4">
                                    {{ $item->id }}
                                </th>
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                    {{ $item->nome }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $item->descricao }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ number_format($item->preco, 2, ',') }}
                                </td>
                                {{-- <td class="px-6 py-4">
                                        {{ $item->tamanho->nome }}
                                    </td> --}}
                                <td class="px-6 py-4">
                                    {{ $item->marca->nome }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $item->grupo->nome }}
                                </td>
                                <td class="px-6 py-4">
                                    <button wire:click.prevent="edit({{$item->id}})"
                                        class=" bg-transparent hover:bg-blue-500 font-semibold hover:text-white p-1  hover:border-transparent rounded m-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                                        </svg>
                                    </button>
                                </td>

                                <td class="px-6 py-4">
                                    <button
                                        class=" bg-transparent hover:bg-red-500 font-semibold hover:text-white p-1  hover:border-transparent rounded m-2"><i
                                            class="bi bi-trash-fill text-xl"></i></button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        @if ($newItem)
            <div class="absolute inset-0 h-max flex justify-center ">
                <div class=" border bg-white w-full max-w-3xl sm:rounded-lg">

                    <div class="flex justify-end bg-gray-100">
                        <button wire:click="novoItem()"
                            class="shadow bg-transparent hover:bg-red-500 font-semibold hover:text-white  border hover:border-transparent rounded m-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>

                        </button>
                    </div>

                    <div class="flex justify-center mb-4 ">
                        <p class="text-xl">{{$itemId ? 'Editar Produto' : 'Novo Produto'}}</p>
                    </div>

                    <div class="flex justify-center">
                        <form wire:submit.prevent="{{$itemId ? 'update()' : 'save()'}}" class="w-full max-w-xl">
                            @csrf

                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2">{{ __('Nome') }}
                                </label>

                                <div>
                                    <input wire:model="nome"
                                        class="shadow appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 focus:shadow-outline"
                                        type="text">

                                    @error('nome')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-4">
                                <label for="descricao"
                                    class="block text-gray-700 text-sm font-bold mb-2">{{ __('Descrição') }}</label>

                                <div>
                                    <input id="descricao" wire:model="descricao"
                                        class="shadow appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 focus:shadow-outline"
                                        type="text">

                                    @error('descricao')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-4 flex gap-3">
                                <div>
                                    <label for="preco"
                                        class="block text-gray-700 text-sm font-bold mb-2">{{ __('Preço') }}</label>

                                    <div>
                                        <input id="preco" wire:model="preco"
                                            class="shadow appearance-none block w-32 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 focus:shadow-outline"
                                            type="number">

                                        @error('preco')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div>
                                    <label for="marca"
                                        class="block text-gray-700 text-sm font-bold mb-2">{{ __('Marca') }}</label>

                                    <div>
                                        @foreach ($marcas as $marca)
                                            <select id="marca" wire:model="marca"
                                                class="shadow appearance-none block w-32 text-gray-700 font-semibold text-center border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 focus:shadow-outline">
                                                <option value=""></option>
                                                <option class="font-semibold text-center"
                                                    value="{{ $marca->id }}">{{ $marca->nome }}</option>

                                            </select>
                                        @endforeach

                                        @error('marca')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div>
                                    <label for="grupo"
                                        class="block text-gray-700 text-sm font-bold mb-2">{{ __('Grupo') }}</label>

                                    <div>
                                        @foreach ($grupos as $grupo)
                                            <select id="grupo" wire:model="grupo"
                                                class="shadow appearance-none block w-32 text-gray-700 font-semibold text-center border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 focus:shadow-outline">
                                                <option value=""></option>
                                                <option class="font-semibold text-center"
                                                    value="{{ $grupo->id }}">{{ $grupo->nome }}</option>

                                            </select>
                                        @endforeach

                                        @error('grupo')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="mb-4 ">
                                <div class="flex justify-center">
                                    <button type="submit"
                                        class="shadow bg-transparent hover:bg-blue-500 font-semibold hover:text-white py-2 px-4 border hover:border-transparent rounded">
                                        {{$itemId ? 'Salvar' : 'Cadastrar'}}
                                    </button>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        @endif
    </div>
</div>
