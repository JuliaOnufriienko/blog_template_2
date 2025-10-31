@name('pages/categories')
@schema([
    'pre_heading: text',
    'heading: text',
    'description: text',
    'random_posts: random_items',
    'link_card_text: text',
])

<section x-data="blogs" class="my-10 sm:my-17 md:mt-19 md:mb-32">
    <div class="container mx-auto px-5">
        <div class="text-center flex flex-col sm:gap-y-6 mb-10 md:mb-15 lg:mb-20 w-full mx-auto max-w-200">
            <p class="max-sm:text-sm max-sm:mb-3 heading uppercase tracking-widest">
                {{$pre_heading}}
            </p>
            <h1 class="heading text-2xl sm:text-4xl md:text-5xl leading-[1.33] max-sm:mb-5.5">
                {{$heading}}
            </h1>
            <p class="max-sm:text-sm text-text-heading">
                {{$description}}
            </p>
        </div>
        <ul class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-7 gap-y-8 md:gap-y-13">
            @foreach ($random_posts as $post)
                <li class="group h-full flex flex-col justify-between">
                    <x-kit-link :options="$post->url" class="aspect-[1.11] rounded-md sm:rounded-2xl overflow-hidden mb-7 ">
                        <x-kit-image :options="$post->image" class="imgcard animation"/>
                    </x-kit-link>
                    <div class="flex items-center gap-2 text-sm mb-3.5">
                        <p class="font-bold text-sm text-text-heading uppercase">
                            {{$post->parent->name}}
                        </p>
                        <data :datetime="card.datetime" class="text-text-quiet font-medium">
                            {{ $post->updated_at->format('m.d.Y') }}
                        </data>
                    </div>
                    <h3 class="heading text-xl lg:text-2xl leading-[1.33] mb-3.5 hover:text-main animation">
                        <x-kit-link :options="$post->url" class="">
                        {{$post->title}}
                        </x-kit-link>
                    </h3>
                    <p  class="max-sm:text-sm mb-4 line-clamp-3">
                        {{$post->summary}}
                    </p>
                    <x-kit-link :options="$post->url" class="link animation mt-auto">
                        {{$link_card_text}}
                    </x-kit-link>
                </li>
            @endforeach
        </ul>
    </div>
</section>
