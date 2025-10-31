@name('footer')
@schema([
    'menu: menu',
    'socials: socials',
    'modal_heading: text',
    'modal_description: text',
    'modal_input_name: text',
    'modal_input_email: text',
    'modal_input_message: text',
    'modal_button_text: text',
])

<footer class="bg-surface-raised py-9 sm:py-13 text-text-heading font-heading">
    <div class="container mx-auto px-5 flex flex-col gap-y-7 sm:gap-y-10 items-center">
        @if (rtrim($host['url'], '/') === rtrim(url()->current(), '/'))
            <span class="h-8 sm:h-11">
                <x-kit-image :options="logo()" class="h-full object-contain"/>
            </span>
        @else
            <x-kit-link :options="$host" class="h-8 sm:h-11 group">
                <x-kit-image :options="logo()" class="h-full object-contain group-hover:scale-105 transition-all"/>
            </x-kit-link>
        @endif
        <ul class="flex flex-wrap justify-center max-sm:text-sm gap-y-2 gap-x-5 sm:gap-x-11">
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
        <ul class="flex gap-x-2.75 sm:gap-x-4 max-sm:text-sm">
            @foreach($socials as $social)
                <x-kit-link :options="$social['url']" class="text-text-accent btnmain rounded-full center size-7 sm:size-9.5 overflow-hidden animation">
                    {{-- <x-kit-image :options="$social['icon']" /> --}}
                </x-kit-link>
            @endforeach
        </ul>
        <div class="w-full border-b border-main"></div>
        <p class="max-md:text-xs text-sm text-center">
            Copyright <a class="hover:text-main animation" href="divotek.com.ua" title="Divotek">Divotek</a> Inc © 2025. All Right Reserved
        </p>
    </div>
</footer>

@vite(['resources/js/app.js'])
@stack('scripts')
<script src="https://unpkg.com/embla-carousel/embla-carousel.umd.js"></script>

{{-- modal --}}
<div
    x-data="{
        showContactModal: false,
        openContactModal() {
            this.showContactModal = true;
            document.body.style.overflow = 'hidden';
        },
        closeContactModal() {
            this.showContactModal = false;
            document.body.style.overflow = '';
        }
    }"
    @open-Contact-modal.window="openContactModal()"
    @keydown.escape.window="showContactModal && closeContactModal()"
    x-show="showContactModal"
    x-cloak
    class="modal-wrapper fixed inset-0 z-50 flex items-center justify-center">
    <!-- Overlay -->
    <div
        x-show="showContactModal"
        @click="closeContactModal()"
        class="modal-overlay fixed inset-0 bg-black/50">
    </div>
    <!-- Modal Container -->
    <div
        @click.stop
        x-show="showContactModal"
        x-transition
        class="p-5 sm:p-6 bg-surface-default z-50 w-3/4 sm:w-1/2 xl:w-1/3">
        <div class="flex flex-col items-start justify-between h-full relative">
            <button @click="closeContactModal()" type="button" class="text-text-normal hover:text-main absolute top-0 right-0 cursor-pointer transition-all">
                ✕
            </button>
            <h2 class="font-heading text-2xl sm:text-3xl font-semibold mb-3 text-text-heading">
                {{$modal_heading}}
            </h2>
            <p class="text-text-normal max-md:text-sm mb-8">
                {{$modal_description}}
            </p>
            <form class="flex flex-col gap-4 text-left w-full">
                <div>
                    <label for="name" class="hidden"></label>
                    <input type="text" id="name" placeholder="{{$modal_input_name}}"
                        class="w-full rounded-lg border border-border bg-surface-raised px-3.5 py-2 outline-none focus:ring-1 ring-main" />
                </div>
                <div>
                    <label for="email" class="hidden"></label>
                    <input type="email" id="email" placeholder="{{$modal_input_email}}" inputmode="email"
                        class="w-full rounded-lg border border-border bg-surface-raised px-3.5 py-2 outline-none focus:ring-1 ring-main" />
                </div>
                <div>
                    <label for="message" class="hidden"></label>
                    <textarea id="message" rows="4" placeholder="{{$modal_input_message}}"
                        class="w-full rounded-lg border border-border bg-surface-raised px-3.5 py-2 outline-none focus:ring-1 ring-main"></textarea>
                </div>
                <button type="submit"
                    class="font-semibold font-heading btnmain h-13.5 center px-7.5 xl:px-11.5 rounded-lg animation">
                    {{$modal_button_text}}
                </button>
            </form>
        </div>
    </div>
</div>
