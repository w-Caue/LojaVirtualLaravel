<!-- Mobile sidebar -->
<!-- Backdrop -->
<div x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150" x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in-out duration-150"
    x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
    class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"></div>
<aside class="fixed inset-y-0 z-10 flex-shrink-0 w-64 overflow-y-auto bg-gray-900" x-show="isSideMenuOpen"
    x-transition:enter="transition ease-in-out duration-150"
    x-transition:enter-start="opacity-0 transform -translate-x-20" x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0 transform -translate-x-20" @click.away="closeSideMenu"
    @keydown.escape="closeSideMenu">
    <div class="py-4 mt-16 text-gray-200 dark:text-gray-400">
        <div class="flex flex-col mb-4 border-b-white">
            <a class="ml-6 text-lg font-bold text-white">
                Loja Virtual
            </a>

        </div>
        <ul class="">
            <li class="relative px-6 py-3 hover:opacity-" wfd-id="131">
                <a href=""
                    class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:opacity-50">
                    <svg class="w-5 h-5 text-white" aria-hidden="true" fill="none" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                        </path>
                    </svg>
                    <span class="ml-4 text-white" wfd-id="135">Início</span>
                </a>
            </li>

            <li class="relative px-6 py-3 hover:opacity-" wfd-id="131">
                <a href=""
                    class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:opacity-50">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                    </svg>
                    <span class="ml-4 text-white" wfd-id="132">Produtos</span>
                </a>
            </li>

            <li class="relative px-6 py-3 " wfd-id="131">
                <a href=""
                    class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:opacity-50">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-white" width="24" height="24"
                        fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12,12A6,6,0,1,0,6,6,6.006,6.006,0,0,0,12,12ZM12,2A4,4,0,1,1,8,6,4,4,0,0,1,12,2Z" />
                        <path
                            d="M12,14a9.01,9.01,0,0,0-9,9,1,1,0,0,0,2,0,7,7,0,0,1,14,0,1,1,0,0,0,2,0A9.01,9.01,0,0,0,12,14Z" />
                    </svg>
                    <span class="ml-4 text-white" wfd-id="132">Clientes</span>
                </a>
            </li>

            <li class="relative px-6 py-3 hover:opacity-" wfd-id="131">
                <a href=""
                    class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:opacity-50">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                    </svg>
                    <span class="ml-4 text-white" wfd-id="132">Pedidos</span>
                </a>
            </li>

            <li class="relative px-6 py-3 " wfd-id="131">
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                    class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-red-100 hover:text-gray-800 dark:hover:bg-red-800 dark:hover:text-gray-200">
                    <svg class="w-5 h-5 mr-3 text-white" aria-hidden="true" fill="none" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path
                            d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1">
                        </path>
                    </svg>
                    <span class="text-white">Sair</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
        </ul>

    </div>
</aside>
<!--./ Mobile sidebar -->
