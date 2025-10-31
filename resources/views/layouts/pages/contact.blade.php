@name('pages/contact')
@schema([
    'heading: text',
    'description: text',
    'contacts: array',
    'contacts.*.icon: icon',
    'contacts.*.heading: text',
    'contacts.*.address: text',
    'contacts.*.email: email',
    'contacts.*.phone: phone',
    'background_image: image',
    'form_name: text',
    'form_email: text',
    'form_phone: text',
    'form_subject: text',
    'form_message: text',
    'form_button_text: text',
])
<section class="mt-5.5 sm:mt-15 mb-18 sm:mb-23 md:my-25 container mx-auto px-5">
    <div class="text-center max-w-112.5 w-full mx-auto mb-11.25 sm:mb-14">
        <h1 class="heading text-3xl sm:text-4xl md:text-5xl mb-4">
            {{$heading}}
        </h1>
        <p class="font-heading max-sm:text-sm">
            {{$description}}
        </p>
    </div>
    <ul class="max-sm:px-8 grid sm:grid-cols-3 sm:h-65 gap-7.5 sm:gap-2 md:gap-5 max-sm:text-sm ">
        @foreach ($contacts as $contact)
            <li class="flex flex-col items-stretch">
                <div class="flex-1 w-full bg-surface-raised rounded-2xl shadow-sm py-9.5 px-5 md:px-7.25 sm:pb-11 text-center">
                    <div class="bg-main rounded-full size-17.5 text-text-accent center mb-5 mx-auto">
                        <x-kit-icon :options="$contact['icon']" class="size-6" />
                    </div>
                    <h3 class="font-heading text-main font-bold text-sm sm:text-xl text-center tracking-wide mb-5.25">
                        {{$contact['heading']}}
                    </h3>
                    @if(!empty($contact['address']) && $contact['address'] !== 'Default text')
                        <address class="max-sm:text-sm font-heading text-text-heading font-medium tracking-wide">
                            {{$contact['address']}}
                        </address>
                    @endif
                    @if(!empty($contact['phone']) && $contact['phone'] !== '+111 111 111111')
                        <a title="tel" href="tel:{{ $contact['phone'] }}" class="max-sm:text-sm font-heading text-text-heading hover:text-main animation font-medium tracking-wide">
                            {{ $contact['phone'] }}
                        </a>
                    @endif
                    @if(!empty( $contact['email']) && $contact['email'] !== 'example@example.com')
                        <a title="email" href="mailto:{{ $contact['email'] }}" class="max-sm:text-sm font-heading text-text-heading hover:text-main animation font-medium tracking-wide">
                            {{ $contact['email'] }}
                        </a>
                    @endif
                </div>
            </li>
        @endforeach
    </ul>
</section>
<section class="relative h-137.5 mb-138.75">
    <div class="h-137.5">
        <x-kit-image :options="$background_image" class="size-full object-cover"/>
    </div>
    <div class="absolute md:max-w-192.5 w-[92%] md:w-full -translate-x-1/2 left-1/2 -bottom-[85%] bg-surface-raised rounded-2xl shadow-md p-10 sm:px-15 sm:pb-16 sm:pt-17.5 z-10">
        <form action="" class="flex flex-col justify-center gap-y-5.5 font-heading max-sm:text-sm text-text-heading tracking-wide font-semibold">
            <div class="flex-col sm:flex-row between gap-x-5 max-sm:gap-y-5.5">
                <div class="w-full sm:w-1/2 flex flex-col">
                    <label for="name" class="mb-2">
                        {{$form_name}}
                    </label>
                    <input type="text" id="name" class="border border-border font-normal rounded-lg h-9.25 sm:h-13.5 pl-3 outline-none focus:ring-1 ring-main">
                </div>
                <div class="w-full sm:w-1/2 flex flex-col">
                    <label for="email" class="mb-2">
                        {{$form_email}}
                    </label>
                    <input type="email" id="name" inputmode="email" class="border border-border font-normal rounded-lg h-9.25 sm:h-13.5 pl-3 outline-none focus:ring-1 ring-main">
                </div>
            </div>
            <div class="flex-col sm:flex-row between gap-x-5 max-sm:gap-y-5.5">
                <div class="w-full sm:w-1/2 flex flex-col">
                    <label for="phone" class="mb-2">
                        {{$form_phone}}
                    </label>
                    <input type="tel" x-mask="+38099-999-99-99" id="phone" inputmode="tel" class="border border-border font-normal rounded-lg h-9.25 sm:h-13.5 pl-3 outline-none focus:ring-1 ring-main">
                </div>
                <div class="w-full sm:w-1/2 flex flex-col">
                    <label for="subject" class="mb-2">
                        {{$form_subject}}
                    </label>
                    <input type="text" id="subject" class="border border-border font-normal rounded-lg h-9.25 sm:h-13.5 pl-3 outline-none focus:ring-1 ring-main">
                </div>
            </div>
            <div class="w-full flex flex-col">
                <label for="message" class="mb-2">
                    {{$form_message}}
                </label>
                <textarea id="message" rows="5" class="border border-border font-normal rounded-lg p-3 outline-none focus:ring-1 ring-main"></textarea>
            </div>
            <button type="submit" aria-label="{{$form_button_text}}" class="mx-auto btnmain w-max rounded-sm h-15 px-9 animation">
                {{$form_button_text}}
            </button>
        </form>
    </div>
</section>
