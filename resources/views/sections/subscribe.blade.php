@name('subscribe')
@schema([
    'heading: text',
    'input_text: text',
    'button_text: text',
    'form_description: text',
    'background_image_2: image',
    'background_image_3: image',

])
<section class="bg-main relative py-11 md:py-17 lg:pt-30.5 lg:pb-35 overflow-hidden">
    <x-kit-image :options="$background_image_2" class="absolute max-md:hidden z-0 -top-40 -left-8"/>
    <div class="mx-auto px-5 max-w-240 text-center flex flex-col items-center relative z-10 text-text-accent font-heading">
        <h2 class="font-bold text-3xl sm:text-4xl lg:text-5xl leading-[1.44] sm:leading-[0.95] mb-8.75 sm:mb-12">
            {{$heading}}
        </h2>
        <form class="center gap-x-1 flex-col sm:flex-row gap-2 mb-6">
            <label for="submit" class="hidden"></label>
            <input id="submit" type="email" class="text-text-heading bg-surface-raised max-sm:text-sm rounded-md sm:rounded-lg w-full sm:w-80 h-9.25 sm:h-14 px-3 outline-none focus:ring-1 ring-main"
            placeholder="{{$input_text}}">
            <button aria-label="{{$button_text}}" type="submit" class="text-sm sm:text-lg text-nowrap font-bold center h-9.5 sm:h-14 max-sm:w-full px-8.5 border border-surface-raised rounded-md sm:rounded-lg hover:bg-surface-raised hover:text-main animation">
                {{$button_text}}
            </button>
        </form>
        <p class="leading-[1.75] max-sm:text-sm max-w-140">
            {{$form_description}}
        </p>
    </div>
    <x-kit-image :options="$background_image_3" class="max-md:w-[60%] absolute z-0 -bottom-21 right-0"/>
</section>
