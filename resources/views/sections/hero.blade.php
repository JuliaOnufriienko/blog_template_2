@name('hero')
@schema([
    'background_decor_1: image',
    'background_decor_2: image',
    'pre_heading: text',
    'heading: text',
    'description: text',
    'button_text: text',
    'image: image'

])
{{-- --}}
<section class="bg-main relative py-9 md:py-17 lg:pt-30.5 lg:pb-25 mb-16.25 overflow-hidden">
    <img class="max-md:hidden absolute z-0 top-30 -left-27" src="/template/assets/img/Mask group1.svg" alt="bg" draggable="false">
    <div class="container mx-auto px-5 flex flex-col md:flex-row gap-y-5.5 gap-x-2 items-center justify-between relative z-10">
        <div class="text-text-accent font-heading md:w-1/2">
            <p class="font-bold max-md:text-sm tracking-widest mb-5 md:mb-9.25">
                {{$pre_heading}}
                {{-- Featured Post --}}
            </p>
            <h1 class="font-semibold text-4xl lg:text-6xl mb-5 m:mb-12 lg:mb-17.5">
                {{$heading}}
                {{-- How AI will Change the Future --}}
            </h1>
            <p class="mb-5 md:mb-12 l:mb-16 max-md:text-sm">
                {{$description}}
                {{-- The future of AI will see home robots having enhanced intelligence, increased capabilities, and becoming more personal and possibly cute. For example, home robots will overcome navigation, direction --}}
            </p>
            <a href="#" title="Read more"
            class="w-max text-text-heading text-xs sm:text-sm font-bold bg-surface-raised center rounded-sm s:rounded-lg h-9.25 sm:h-13.25 px-8.25 sm:px-12 hover:text-main animation">
                Read more
            </a>
        </div>

        <div class=" md:max-w-152 w-full rounded-md sm:rounded-2xl overflow-hidden">
            <img src="https://cdn.outsideonline.com/wp-content/uploads/2022/09/Ski_eastcoast_header_h.png?crop=16:9&width=960&enable=upscale&quality=100"
            alt="Skiing" class="size-full object-cover" draggable="false">
        </div>

    </div>
    <img class="max-md:hidden absolute z-0 right-0 -bottom-[100px]" src="/template/assets/img/Mask group2.svg" alt="bg" draggable="false">
</section>
