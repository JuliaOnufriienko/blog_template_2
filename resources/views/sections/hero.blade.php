@name('hero')
@schema([
    'background_decor_1: image',
    'background_decor_2: image',
    'pre_heading: text',
    'featured_posts: popular_items',
    'button_text: text',
])

<section class="bg-main relative py-9 md:py-17 lg:pt-30.5 lg:pb-25 mb-16.25 overflow-hidden">
    <x-kit-image :options="$background_decor_1" class="max-md:hidden absolute z-0 top-30 -left-27"/>
        @foreach($featured_posts as $post)
            <div class="container mx-auto px-5 flex flex-col xl:flex-row gap-y-10 gap-x-2 items-center justify-between relative z-10">
                <div class="text-text-accent font-heading xl:w-1/2">
                    <p class="font-bold max-md:text-sm tracking-widest mb-5 xl:mb-9">
                        {{$pre_heading}}
                    </p>
                    <h1 class="font-semibold text-3xl sm:text-4xl lg:text-6xl mb-5 md:mb-10 xl:mb-17">
                        {{$post->title}}
                    </h1>
                    <p class="mb-5 md:mb-10 xl:mb-16 max-md:text-sm">
                        {{$post->summary}}
                    </p>
                    <x-kit-link :options="$post->url" class="w-max text-text-heading text-xs sm:text-sm font-bold bg-surface-raised center rounded-sm sm:rounded-lg max-xl:mx-auto h-9 sm:h-13 px-8 sm:px-12 hover:text-main animation">
                        Read more
                    </x-kit-link>
                </div>
                <div class=" xl:max-w-150 w-full rounded-md sm:rounded-2xl overflow-hidden">
                    <x-kit-image :options="$post->image" class="size-full object-cover"/>
                </div>
            </div>
        @endforeach
    <x-kit-image :options="$background_decor_2" class="max-md:hidden absolute z-0 right-0 -bottom-[100px]"/>
</section>
