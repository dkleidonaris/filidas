<div
    id="sidebar"
    x-data="{ showTexts: false, showMobMenu: false }"
    class="z-20 fixed top-0 left-0 h-screen bg-gray-700 text-white"
>
    {{-- Hamburger Icons --}}
    <div class="md:hidden">
        <svg
            @click="showMobMenu = true"
            x-show="!showMobMenu"
            class="m-2 w-[30px]"
            fill="#ffffff"
            viewBox="0 0 32 32"
            xmlns="http://www.w3.org/2000/svg"
            stroke="#ffffff"
        >
            <g
                id="SVGRepo_bgCarrier"
                stroke-width="0"
            ></g>
            <g
                id="SVGRepo_tracerCarrier"
                stroke-linecap="round"
                stroke-linejoin="round"
            ></g>
            <g id="SVGRepo_iconCarrier">
                <path
                    d="M6.001 7.128L6 10.438l19.998-.005L26 7.124zM6.001 21.566L6 24.876l19.998-.006.002-3.308zM6.001 14.341L6 17.65l19.998-.004.002-3.309z"
                ></path>
            </g>
        </svg>
        <svg
            @click="showMobMenu = false"
            x-show="showMobMenu"
            class="m-2 w-[30px]"
            viewBox="0 -0.5 21 21"
            version="1.1"
            xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink"
            fill="#000000"
            x-cloak
        >
            <g
                id="SVGRepo_bgCarrier"
                stroke-width="0"
            ></g>
            <g
                id="SVGRepo_tracerCarrier"
                stroke-linecap="round"
                stroke-linejoin="round"
            ></g>
            <g id="SVGRepo_iconCarrier">
                <title>close [#ffffff]</title>
                <desc>Created with Sketch.</desc>
                <defs> </defs>
                <g
                    id="Page-1"
                    stroke="none"
                    stroke-width="1"
                    fill="none"
                    fill-rule="evenodd"
                >
                    <g
                        id="Dribbble-Light-Preview"
                        transform="translate(-419.000000, -240.000000)"
                        fill="#ffffff"
                    >
                        <g
                            id="icons"
                            transform="translate(56.000000, 160.000000)"
                        >
                            <polygon
                                id="close-[#ffffff]"
                                points="375.0183 90 384 98.554 382.48065 100 373.5 91.446 364.5183 100 363 98.554 371.98065 90 363 81.446 364.5183 80 373.5 88.554 382.48065 80 384 81.446"
                            > </polygon>
                        </g>
                    </g>
                </g>
            </g>
        </svg>
    </div>

    {{-- Desktop Menu --}}
    <div class="hidden flex-col items-center md:flex">
        <x-nav.admin-menu-item
            route="admin.index"
            highlight="admin.index"
            name="Αρχική"
        >
            @slot('icon')
                <svg
                    class="w-[25px]"
                    viewBox="0 0 16 16"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <g
                        id="SVGRepo_bgCarrier"
                        stroke-width="0"
                    ></g>
                    <g
                        id="SVGRepo_tracerCarrier"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    ></g>
                    <g id="SVGRepo_iconCarrier">
                        <path
                            d="M1 6V15H6V11C6 9.89543 6.89543 9 8 9C9.10457 9 10 9.89543 10 11V15H15V6L8 0L1 6Z"
                            fill="#ffffff"
                        ></path>
                    </g>
                </svg>
            @endslot
        </x-nav.admin-menu-item>
        <x-nav.admin-menu-item
            route="admin.reservations.index"
            highlight="admin.reservations.*"
            name="Κρατήσεις"
        >
            @slot('icon')
                <svg
                    class="w-[25px]"
                    viewBox="0 0 24 24"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <g
                        id="SVGRepo_bgCarrier"
                        stroke-width="0"
                    ></g>
                    <g
                        id="SVGRepo_tracerCarrier"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    ></g>
                    <g id="SVGRepo_iconCarrier">
                        <path
                            d="M14 22H10C6.22876 22 4.34315 22 3.17157 20.8284C2 19.6569 2 17.7712 2 14V12C2 8.22876 2 6.34315 3.17157 5.17157C4.34315 4 6.22876 4 10 4H14C17.7712 4 19.6569 4 20.8284 5.17157C22 6.34315 22 8.22876 22 12V14C22 17.7712 22 19.6569 20.8284 20.8284C20.1752 21.4816 19.3001 21.7706 18 21.8985"
                            stroke="#ffffff"
                            stroke-width="1.5"
                            stroke-linecap="round"
                        ></path>
                        <path
                            d="M7 4V2.5"
                            stroke="#ffffff"
                            stroke-width="1.5"
                            stroke-linecap="round"
                        ></path>
                        <path
                            d="M17 4V2.5"
                            stroke="#ffffff"
                            stroke-width="1.5"
                            stroke-linecap="round"
                        ></path>
                        <path
                            d="M21.5 9H16.625H10.75M2 9H5.875"
                            stroke="#ffffff"
                            stroke-width="1.5"
                            stroke-linecap="round"
                        ></path>
                        <path
                            d="M18 17C18 17.5523 17.5523 18 17 18C16.4477 18 16 17.5523 16 17C16 16.4477 16.4477 16 17 16C17.5523 16 18 16.4477 18 17Z"
                            fill="#ffffff"
                        ></path>
                        <path
                            d="M18 13C18 13.5523 17.5523 14 17 14C16.4477 14 16 13.5523 16 13C16 12.4477 16.4477 12 17 12C17.5523 12 18 12.4477 18 13Z"
                            fill="#ffffff"
                        ></path>
                        <path
                            d="M13 17C13 17.5523 12.5523 18 12 18C11.4477 18 11 17.5523 11 17C11 16.4477 11.4477 16 12 16C12.5523 16 13 16.4477 13 17Z"
                            fill="#ffffff"
                        ></path>
                        <path
                            d="M13 13C13 13.5523 12.5523 14 12 14C11.4477 14 11 13.5523 11 13C11 12.4477 11.4477 12 12 12C12.5523 12 13 12.4477 13 13Z"
                            fill="#ffffff"
                        ></path>
                        <path
                            d="M8 17C8 17.5523 7.55228 18 7 18C6.44772 18 6 17.5523 6 17C6 16.4477 6.44772 16 7 16C7.55228 16 8 16.4477 8 17Z"
                            fill="#ffffff"
                        ></path>
                        <path
                            d="M8 13C8 13.5523 7.55228 14 7 14C6.44772 14 6 13.5523 6 13C6 12.4477 6.44772 12 7 12C7.55228 12 8 12.4477 8 13Z"
                            fill="#ffffff"
                        ></path>
                    </g>
                </svg>
            @endslot
            @slot('dropdown')
                <x-nav.admin-dropdown-item
                    route="admin.reservations.index"
                    name="Κρατήσεις"
                />
                <x-nav.admin-dropdown-item
                    route="admin.reservations.create"
                    name="Νέα κράτηση"
                />
            @endslot
        </x-nav.admin-menu-item>

        <form
            method="POST"
            action="{{ route('logout') }}"
            class="w-full"
        >
            @csrf
            <button
                type="submit"
                class="flex flex-row items-center gap-2 p-2 w-full"
            >
                <svg
                    class="w-[25px]"
                    viewBox="0 0 24 24"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <g
                        id="SVGRepo_bgCarrier"
                        stroke-width="0"
                    ></g>
                    <g
                        id="SVGRepo_tracerCarrier"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    ></g>
                    <g id="SVGRepo_iconCarrier">
                        <path
                            d="M9.00195 7C9.01406 4.82497 9.11051 3.64706 9.87889 2.87868C10.7576 2 12.1718 2 15.0002 2L16.0002 2C18.8286 2 20.2429 2 21.1215 2.87868C22.0002 3.75736 22.0002 5.17157 22.0002 8L22.0002 16C22.0002 18.8284 22.0002 20.2426 21.1215 21.1213C20.2429 22 18.8286 22 16.0002 22H15.0002C12.1718 22 10.7576 22 9.87889 21.1213C9.11051 20.3529 9.01406 19.175 9.00195 17"
                            stroke="#ffffff"
                            stroke-width="1.5"
                            stroke-linecap="round"
                        ></path>
                        <path
                            d="M15 12L2 12M2 12L5.5 9M2 12L5.5 15"
                            stroke="#ffffff"
                            stroke-width="1.5"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        ></path>
                    </g>
                </svg>
                <p
                    x-show="showTexts"
                    x-cloak
                >{{ __('Logout') }}</p>
            </button>
        </form>

        <svg
            @click="showTexts = !showTexts"
            :class="showTexts ? '' : 'rotate-180'"
            class="@if (app()->environment('production')) mt-auto @endif w-[30px] cursor-pointer py-2 transition hover:scale-110"
            viewBox="0 0 24 24"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
            x-cloak
        >
            <g
                id="SVGRepo_bgCarrier"
                stroke-width="0"
            ></g>
            <g
                id="SVGRepo_tracerCarrier"
                stroke-linecap="round"
                stroke-linejoin="round"
            ></g>
            <g id="SVGRepo_iconCarrier">
                <path
                    d="M16.1795 3.26875C15.7889 2.87823 15.1558 2.87823 14.7652 3.26875L8.12078 9.91322C6.94952 11.0845 6.94916 12.9833 8.11996 14.155L14.6903 20.7304C15.0808 21.121 15.714 21.121 16.1045 20.7304C16.495 20.3399 16.495 19.7067 16.1045 19.3162L9.53246 12.7442C9.14194 12.3536 9.14194 11.7205 9.53246 11.33L16.1795 4.68297C16.57 4.29244 16.57 3.65928 16.1795 3.26875Z"
                    fill="#ffffff"
                ></path>
            </g>
        </svg>
    </div>

</div>
{{-- Mobile Menu --}}
<div
    x-show="showMobMenu"
    class="flex flex-col bg-gray-700 text-lg text-white"
    x-cloak
>
    <x-nav.admin-menu-item-mobile
        route="admin.index"
        name="Αρχική"
    >
        @slot('icon')
            <svg
                class="w-[25px]"
                viewBox="0 0 16 16"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
            >
                <g
                    id="SVGRepo_bgCarrier"
                    stroke-width="0"
                ></g>
                <g
                    id="SVGRepo_tracerCarrier"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                ></g>
                <g id="SVGRepo_iconCarrier">
                    <path
                        d="M1 6V15H6V11C6 9.89543 6.89543 9 8 9C9.10457 9 10 9.89543 10 11V15H15V6L8 0L1 6Z"
                        fill="#ffffff"
                    ></path>
                </g>
            </svg>
        @endslot
    </x-nav.admin-menu-item-mobile>
    <x-nav.admin-menu-item-mobile
        route="admin.reservations.index"
        name="Κρατήσεις"
    >
        @slot('icon')
            <svg
                class="w-[25px]"
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
            >
                <g
                    id="SVGRepo_bgCarrier"
                    stroke-width="0"
                ></g>
                <g
                    id="SVGRepo_tracerCarrier"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                ></g>
                <g id="SVGRepo_iconCarrier">
                    <path
                        d="M14 22H10C6.22876 22 4.34315 22 3.17157 20.8284C2 19.6569 2 17.7712 2 14V12C2 8.22876 2 6.34315 3.17157 5.17157C4.34315 4 6.22876 4 10 4H14C17.7712 4 19.6569 4 20.8284 5.17157C22 6.34315 22 8.22876 22 12V14C22 17.7712 22 19.6569 20.8284 20.8284C20.1752 21.4816 19.3001 21.7706 18 21.8985"
                        stroke="#ffffff"
                        stroke-width="1.5"
                        stroke-linecap="round"
                    ></path>
                    <path
                        d="M7 4V2.5"
                        stroke="#ffffff"
                        stroke-width="1.5"
                        stroke-linecap="round"
                    ></path>
                    <path
                        d="M17 4V2.5"
                        stroke="#ffffff"
                        stroke-width="1.5"
                        stroke-linecap="round"
                    ></path>
                    <path
                        d="M21.5 9H16.625H10.75M2 9H5.875"
                        stroke="#ffffff"
                        stroke-width="1.5"
                        stroke-linecap="round"
                    ></path>
                    <path
                        d="M18 17C18 17.5523 17.5523 18 17 18C16.4477 18 16 17.5523 16 17C16 16.4477 16.4477 16 17 16C17.5523 16 18 16.4477 18 17Z"
                        fill="#ffffff"
                    ></path>
                    <path
                        d="M18 13C18 13.5523 17.5523 14 17 14C16.4477 14 16 13.5523 16 13C16 12.4477 16.4477 12 17 12C17.5523 12 18 12.4477 18 13Z"
                        fill="#ffffff"
                    ></path>
                    <path
                        d="M13 17C13 17.5523 12.5523 18 12 18C11.4477 18 11 17.5523 11 17C11 16.4477 11.4477 16 12 16C12.5523 16 13 16.4477 13 17Z"
                        fill="#ffffff"
                    ></path>
                    <path
                        d="M13 13C13 13.5523 12.5523 14 12 14C11.4477 14 11 13.5523 11 13C11 12.4477 11.4477 12 12 12C12.5523 12 13 12.4477 13 13Z"
                        fill="#ffffff"
                    ></path>
                    <path
                        d="M8 17C8 17.5523 7.55228 18 7 18C6.44772 18 6 17.5523 6 17C6 16.4477 6.44772 16 7 16C7.55228 16 8 16.4477 8 17Z"
                        fill="#ffffff"
                    ></path>
                    <path
                        d="M8 13C8 13.5523 7.55228 14 7 14C6.44772 14 6 13.5523 6 13C6 12.4477 6.44772 12 7 12C7.55228 12 8 12.4477 8 13Z"
                        fill="#ffffff"
                    ></path>
                </g>
            </svg>
        @endslot
        @slot('dropdown')
            <x-nav.admin-dropdown-item-mobile
                route="admin.reservations.index"
                name="Κρατήσεις"
            />
        @endslot
    </x-nav.admin-menu-item-mobile>
    <x-nav.admin-menu-item-mobile
        route="admin.payments.index"
        name="Πληρωμές"
    >
        @slot('icon')
            <svg
                class="w-[25px]"
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
            >
                <g
                    id="SVGRepo_bgCarrier"
                    stroke-width="0"
                ></g>
                <g
                    id="SVGRepo_tracerCarrier"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                ></g>
                <g id="SVGRepo_iconCarrier">
                    <rect
                        x="3"
                        y="6"
                        width="18"
                        height="13"
                        rx="2"
                        stroke="#ffffff"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    ></rect>
                    <path
                        d="M3 10H20.5"
                        stroke="#ffffff"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    ></path>
                    <path
                        d="M7 15H9"
                        stroke="#ffffff"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    ></path>
                </g>
            </svg>
        @endslot
        @slot('dropdown')
            <x-nav.admin-dropdown-item-mobile
                route="admin.payments.index"
                name="Αρχική"
            />
        @endslot
    </x-nav.admin-menu-item-mobile>
</div>
