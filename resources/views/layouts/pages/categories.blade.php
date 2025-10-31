@name('pages/categories')
@schema([
    'pre_heading: text',
    'heading: text',
    'description: text',
    'random_posts: random_items',
    'link_card_text: text',
])

<section x-data="blogs" class="my-10 sm:my-17 md:mt-19 md:mb-32.5">
    <div class="container mx-auto px-5">
        <div class="text-center flex flex-col sm:gap-y-6 mb-10 md:mb-15 lg:mb-35 w-full mx-auto max-w-200">
            <p class="max-sm:text-xs max-sm:mb-3 heading uppercase tracking-widest">
                {{-- OUR BLOGS --}}
                {{$pre_heading}}
            </p>
            <h1 class="heading text-2xl sm:text-4xl md:text-5xl leading-[1.33] max-sm:mb-5.5">
                {{$heading}}
                {{-- Find our all blogs from here --}}
            </h1>
            <p class="max-sm:text-xs text-text-heading">
                {{-- our blogs are written from very research research and well known writers writers so that  we can provide you the best blogs and articles articles for you to read them all along --}}
                {{$description}}
            </p>jxmnj
        </div>
        <ul class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-x-5 gap-y-8 md:gap-y-13">
            @foreach ($random_posts as $post)
                <li class="group h-full flex flex-col justify-between">
                    <x-kit-link :options="$post->url" class="aspect-[1.11] rounded-md sm:rounded-2xl overflow-hidden mb-7 ">
                        <x-kit-image :options="$post->image" class="imgcard animation"/>
                    </x-kit-link>
                    <div class="flex items-center gap-2 text-xs mb-3.5">
                        <p" class="font-bold text-xs text-text-heading uppercase">
                            {{$post->parent->name}}
                        </p>
                        <data :datetime="card.datetime" class="text-text-quiet font-medium">
                            {{ $post->updated_at->format('m.d.Y') }}
                        </data>
                    </div>
                    <h3 class="heading text-lg sm:text-2xl leading-[1.33] mb-3.5">
                        {{$post->title}}
                    </h3>
                    <p x-text="card.text" class="max-sm:text-xs mb-4.75 line-clamp-3">
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
