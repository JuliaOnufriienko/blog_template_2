@name('pages/about')
@schema([
    'pre_main_heading: text',
    'main_heading: text',
    'main_description: text',
    'image: image',
    'pre_heading: text',
    'heading: text',
    'description: text',
    'steps: array',
    'steps.*.index: text',
    'steps.*.heading: text',
    'steps.*.description: text',
    'button_text: text',

])
<section class="py-10 sm:py-16 container mx-auto px-5">
    <div class="text-center max-w-252 w-full mx-auto mb-14">
        <h1 class="font-heading max-sm:text-sm uppercase font-bold tracking-wide mb-4.5 sm:mb-6">
            {{$pre_main_heading}}
        </h1>
        <h2 class="heading leading-[1.33] text-3xl sm:text-4xl md:text-5xl mb-6 max-w-180 mx-auto">
            {{$main_heading}}
        </h2>
        <p class="max-sm:text-sm">
            {{$main_description}}
        </p>
    </div>
    <x-kit-image :options="$image" class="size-full object-cover max-h-180 rounded-2xl"/>
</section>
<section class="py-8 sm:pt-15 sm:pb-40 container mx-auto px-5">
    <h2 class="font-heading max-sm:text-sm uppercase font-bold tracking-wide mb-3 sm:mb-8">
        {{$pre_heading}}
    </h2>
    <div class="flex flex-col md:flex-row md:items-end justify-between mb-10 md:mb-24 gap-3">
        <h3 class="heading text-2xl sm:text-4xl lg:text-5xl leading-1.01">
            {{$heading}}
        </h3>
        <p class="opacity-70 max-sm:text-sm leading-1.55">
            {{$description}}
        </p>
    </div>
    <ul class="grid lg:grid-cols-3 gap-4 justify-between">
        @foreach ($steps as $step)
            <li class="bg-surface-raised hover:bg-main flex-1 flex flex-col items-stretch hover:text-text-accent rounded-2xl p-4 sm:p-6 group animation">
                <p class="font-heading font-bold text-5xl sm:text-6xl md:text-7xl mb-2 opacity-12 group-hover:opacity-100 group-hover:text-text-accent animation">
                    {{$step['index']}}
                </p>
                <h2 class="font-heading font-bold text-lg sm:text-xl md:text-2xl mb-2.75 sm:mb-4 text-main group-hover:text-text-accent animation">
                    {{$step['heading']}}
                </h2>
                <p class="mb-5.75 sm:mb-8 max-sm:text-sm opacity-70 group-hover:opacity-100 animation">
                    {{$step['description']}}
                </p>
                <a href="#" title="Learn More" class="relative max-sm:text-sm w-max font-bold mt-auto group-hover:text-text-accent after:absolute after:left-0 after:bottom-0 after:h-0.5 after:w-0 after:bg-text-accent after:transition-all hover:after:w-15 animation">
                    Learn More
                </a>
            </li>
        @endforeach
    </ul>
</section>
