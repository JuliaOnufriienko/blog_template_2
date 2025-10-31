@name('header')
@schema([
    'menu: menu',
])
@livewire('alpine')
<style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap');
</style>

<header x-data="" class="bg-surface-raised py-5.25 font-heading ">
    <div class="container between mx-auto px-5">
        @if (rtrim($host['url'], '/') === rtrim(url()->current(), '/'))
            <span class="h-8 sm:h-14">
                <x-kit-image :options="logo()" class="h-full object-contain"/>
            </span>
        @else
            <x-kit-link :options="$host" class="h-8 sm:h-14 group">
                <x-kit-image :options="logo()" class="h-full object-contain group-hover:scale-105 transition-all"/>
            </x-kit-link>
        @endif
        <div class="max-md:hidden flex items-center gap-x-10">
            <nav>
                <ul class="flex items-center gap-x-6 lg:gap-x-14 font-medium text-text-heading">
                    @foreach ($menu as $item)
                        @if (rtrim($item['url'], '/') === rtrim(url()->current(), '/'))
                            <span class="select-none opacity-50">
                                {{ $item['title'] }}
                            </span>
                        @else
                            <x-kit-link :options="$item" class="cursor-pointer hover:text-main transition-all"/>
                        @endif
                    @endforeach
                </ul>
            </nav>
            <div class="relative" x-data="{ accordion: false }">
                <button aria-label="Search" class="pt-2 text-text-heading cursor-pointer hover:text-main animation" x-on:click="accordion = !accordion">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="23" height="23" viewBox="0 0 23 23" >
                        <path fill="currentColor"  fill-rule="evenodd" d="M16.864 2.743a9.989 9.989 0 0 1 .548 13.929l4.505 4.49a.524.524 0 0 1-.74.74l-4.505-4.49a9.989 9.989 0 1 1 .192-14.67ZM1.125 10.028a8.902 8.902 0 0 0 8.902 8.902 8.912 8.912 0 0 0 8.902-8.902 8.902 8.902 0 1 0-17.804 0Z" clip-rule="evenodd"/>
                    </svg>
                </button>
                <form x-ref="container" :style="accordion ? 'height: ' + $refs.container.scrollHeight + 'px' : ''" class="h-0 absolute -bottom-17 overflow-hidden duration-500">
                    <input type="text" class="px-1.5 bg-surface-raised border border-main h-9 text-sm outline-none focus:ring-1 ring-main">
                </form>
            </div>
            <button @click="$dispatch('open-contact-modal')" aria-label="Contact Us" class="font-semibold btnmain h-13.5 center px-7.5 xl:px-11.5 rounded-lg animation">
                Contact Us
            </button>
        </div>
        <button @click="$dispatch('open-burger-menu')" class="md:hidden hover:opacity-60 animation" aria-label="Mobile menu">
            <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" fill="none" viewBox="0 0 34 34">
                <path fill="url(#a)" d="M0 0h34v34H0z"/>
                <defs>
                    <pattern id="a" width="1" height="1" patternContentUnits="objectBoundingBox">
                        <use href="#b" transform="scale(.00781)"/>
                    </pattern>
                    <image id="b" width="128" height="128" href="data:image/png;base64,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"/>
                </defs>
            </svg>
        </button>
    </div>
</header>

<!-- burger menu -->
<div x-data="{
    showBurger: false,
    openBurger() {
        this.showBurger = true;
        document.body.style.overflow = 'hidden';
    },
    closeBurger() {
        this.showBurger = false;
        document.body.style.overflow = '';
    }
}"
    @open-burger-menu.window="openBurger()"
    @keydown.escape.window="showBurger && closeBurger()"
    x-show="showBurger"
    x-cloak
    class="modal-wrapper">

    <!-- Overlay -->
    <div x-show="showBurger"
        @click="closeBurger()"
        class="modal-overlay">
    </div>

    <div class="burger-container font-heading w-full max-w-110 bg-surface-default text-text-secondary p-8 inset-y-0 absolute top-0 right-0">
        <div x-show="showBurger"
            @click.stop
            class="burger-content flex flex-col justify-between h-full">
            <div class="flex flex-col justify-between h-full">
                <div class="w-full between pb-7">
                    @if (rtrim($host['url'], '/') === rtrim(url()->current(), '/'))
                        <span class=" ">
                            <x-kit-image :options="logo()" class=""/>
                        </span>
                    @else
                        <x-kit-link :options="$host" class="group">
                            <x-kit-image :options="logo()" class="group-hover:scale-105 transition-all"/>
                        </x-kit-link>
                    @endif
                    <button @click="closeBurger()" class="modal-close text-text-normal cursor-pointer flex ml-auto hover:text-main transition-all">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <ul class="flex flex-col text-lg gap-y-3 2xl:text-xl text-text-heading">
                    @foreach ($menu as $item)
                        @if (rtrim($item['url'], '/') === rtrim(url()->current(), '/'))
                            <span class="select-none opacity-50">
                                {{ $item['title'] }}
                            </span>
                        @else
                            <x-kit-link :options="$item" class="cursor-pointer after:block after:h-0.25 after:bg-main after:w-0 after:transition-all hover:after:w-full transition-all"/>
                        @endif
                    @endforeach
                </ul>
                <form class="w-full h-12 mt-auto relative items-center bg-surface-raised">
                    <input
                        type="text"
                        placeholder="Search here..."
                        class="peer text-base focus:pl-2 pl-11 size-full outline-none focus:ring-1 ring-main"
                    >

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        class="size-6 absolute left-4 -translate-y-1/2 top-1/2 transition-opacity duration-200 peer-focus:opacity-0">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                    </svg>
                </form>
            </div>
        </div>
    </div>
</div>
