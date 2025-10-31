@name('pages/error')
@schema([
    'background_image_1: image',
    'error: text',
    'description: text',
    'to_page_button: link',
    'heading: text',
    'input_text: text',
    'button_text: text',
    'form_description: text',
    'background_image_2: image',
    'background_image_3: image',
])
<section class=" my-15 sm:mt-28.5 sm:mb-37.5 px-5 text-text-accent">
    <div class="relative max-w-204 mx-auto w-full rounded-2xl bg-main pt-15 md:pt-20.5 pb-11 md:pb-13.5 px-7.5 sm:px-17.5 lg:px-27 flex flex-col items-center">
        <x-kit-image :options="$background_image_1" class="absolute -translate-x-1/2 left-1/2 top-0 inset-x-0"/>
        <svg class="mb-8.75 md:mb-14.5 w-full" width="283" height="113" viewBox="0 0 283 113" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M47.0295 110.845V85.7099H0.349609V66.9755L53.5865 0H67.9496V66.8194H81.6881V85.7099H67.9496V110.845H47.0295ZM21.4258 66.8194H49.3713V31.5362L21.4258 66.8194Z" fill="white" />
            <path d="M142.409 112.406C134.499 112.302 127.526 110.533 121.489 107.098C115.556 103.56 110.561 99.0842 106.501 93.672C102.442 88.1558 99.372 82.1191 97.2904 75.5621C95.3129 68.901 94.3241 62.448 94.3241 56.2032C94.3241 49.5421 95.417 42.881 97.6026 36.2198C99.8924 29.4546 103.119 23.418 107.282 18.1099C111.445 12.6978 116.493 8.3264 122.426 4.99584C128.358 1.66528 135.019 0 142.409 0C150.319 0 157.292 1.8214 163.329 5.46421C169.366 9.00292 174.414 13.5304 178.473 19.0466C182.532 24.5629 185.55 30.6516 187.528 37.3127C189.609 43.8697 190.65 50.1666 190.65 56.2032C190.65 62.9684 189.505 69.6816 187.215 76.3427C185.03 83.0038 181.855 89.0404 177.692 94.4526C173.529 99.7607 168.481 104.08 162.549 107.411C156.616 110.741 149.903 112.406 142.409 112.406ZM116.025 56.2032C116.129 60.5746 116.701 64.9459 117.742 69.3173C118.887 73.6887 120.5 77.6957 122.582 81.3385C124.768 84.8772 127.474 87.7915 130.7 90.0812C134.031 92.2669 137.934 93.3598 142.409 93.3598C147.093 93.3598 151.1 92.1628 154.43 89.769C157.761 87.3752 160.467 84.3568 162.549 80.714C164.734 76.9672 166.347 72.9601 167.388 68.6928C168.429 64.3214 168.949 60.1582 168.949 56.2032C168.949 51.8318 168.377 47.4605 167.232 43.0891C166.087 38.7178 164.422 34.7627 162.236 31.224C160.051 27.5812 157.293 24.667 153.962 22.4813C150.631 20.1915 146.78 19.0466 142.409 19.0466C137.83 19.0466 133.874 20.2436 130.544 22.6374C127.213 25.0312 124.455 28.1016 122.27 31.8485C120.188 35.4913 118.627 39.4984 117.586 43.8697C116.545 48.2411 116.025 52.3522 116.025 56.2032Z" fill="white" />
            <path d="M247.973 110.845V85.7099H201.293V66.9755L254.53 0H268.893V66.8194H282.632V85.7099H268.893V110.845H247.973ZM222.369 66.8194H250.315V31.5362L222.369 66.8194Z" fill="white" />
        </svg>
        <div class="font-heading text-xl sm:text-2xl text-center mb-9">
            <h1>
                {{$error}}
            </h1>
            <p>
                {{$description}}
            </p>
        </div>
        <x-kit-link :options="$to_page_button" class="bg-surface-raised rounded-md h-13.5 px-11.5 text-text-heading font-heading font-semibold center border border-surface-raised hover:bg-main hover:text-text-accent animation">
        </x-kit-link>
    </div>
</section>
<section class="bg-main relative py-11 md:py-17 lg:pt-30.5 lg:pb-35 overflow-hidden">
    <x-kit-image :options="$background_image_2" class="absolute max-md:hidden z-0 -top-40 -left-8"/>
    <div class="mx-auto px-5 max-w-240 text-center flex flex-col items-center relative z-10 text-text-accent font-heading">
        <h2 class="font-bold text-3xl sm:text-4xl lg:text-5xl leading-[1.44] sm:leading-[0.95] mb-8.75 sm:mb-12">
            {{$heading}}
        </h2>
        <form class="center gap-x-1 flex-col sm:flex-row gap-2 mb-6">
            <label for="submit" class="hidden"></label>
            <input id="submit" type="email" class="text-text-heading bg-surface-raised max-sm:text-sm rounded-sm sm:rounded-lg w-full sm:w-80 h-9.25 sm:h-14 px-3 outline-none focus:ring-1 ring-main"
            placeholder="{{$input_text}}">
            <button aria-label="{{$button_text}}" type="submit" class="text-sm sm:text-lg text-nowrap font-bold center h-9.5 sm:h-14 max-sm:w-full px-8.5 border border-surface-raised rounded-sm sm:rounded-lg hover:bg-surface-raised hover:text-main animation">
                {{$button_text}}
            </button>
        </form>
        <p class="leading-[1.75] max-sm:text-sm max-w-140">
            {{$form_description}}
        </p>
    </div>
    <x-kit-image :options="$background_image_3" class="max-md:w-[60%] absolute z-0 -bottom-21 right-0"/>
</section>
