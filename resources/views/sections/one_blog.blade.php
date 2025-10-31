@name('one_blog')
@schema([
    'latest_posts: latest_items',
    'button_text: text',
])
<section class="mt-16 mb-18 md:mb-40">
    <div class="container mx-auto px-5 relative">
        <div class=" max-md:bg-surface-raised max-md:p-4 max-md:border max-md:border-text-quiet max-md:rounded-xl">
            @foreach($latest_posts as $post)
                <div class="w-full sm:aspect-[2.14] overflow-hidden rounded-md sm:rounded-2xl ">
                    <x-kit-image :options="$post->image" class="size-full object-cover"/>
                </div>
                <div class="md:absolute pt-6.5 md:p-8 md:pb-10.5 max-w-230 w-full md:w-[calc(100%-2.875rem)] md:shadow-sm -bottom-30 right-5 md:bg-surface-raised rounded-md sm:rounded-2xl">
                    <div class="flex items-center gap-2 mb-4.5 sm:mb-6 text-sm">
                        <p class="font-bold text-text-heading uppercase">
                            {{$post->parent->name}}
                        </p>
                        <time datetime="$post->updated_at->format('m.d.Y')" class="text-text-quiet font-medium">
                            {{ $post->updated_at->format('m.d.Y') }}
                        </time>
                    </div>
                    <h2 class="heading text-2xl sm:text-3xl tracking-tight mb-6">
                        {{$post->title}}
                    </h2>
                    <p class="line-clamp-3 max-sm:text-sm mb-5 sm:mb-9.5">
                        {{$post->summary}}
                    </p>
                    <x-kit-link :options="$post->url" class="border border-main rounded-sm sm:rounded-lg h-7.5 sm:h-10 px-5 sm:px-7 text-sm sm:text-sm text-main font-bold inline-flex justify-center items-center hover:bg-main hover:text-text-accent animation">
                        {{$button_text}}
                    </x-kit-link>
                </div>
            @endforeach
        </div>
    </div>
</section>
