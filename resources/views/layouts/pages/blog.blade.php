@name('pages/blog')
@schema([
    'popular_posts: popular_items',
    'heading: text',
    'link: link',
    'link_card_text: text',
])
@php
    $category = $page['parent'] ?? null;
    $items = $category ? \SmartCms\Kit\Models\Front\FrontPage::whereParentId($category['id'])->get() : collect();
@endphp
<section class="my-15 md:mt-21 md:mb-33.5">
    <div class="container mx-auto px-5">
        <div class="max-w-5xl w-full mx-auto">
            <div class="flex items-center gap-2 text-xs mb-4">
                <p class="font-bold text-text-heading uppercase">
                    {{$page->parent->name}}
                </p>
                <time :datetime="{{ $page->updated_at->format('d.m.Y') }}" class="text-text-quiet font-medium">
                    {{ $page->updated_at->format('m.d.Y') }}
                </time>
            </div>
            <h1 class="heading leading-[1.33] text-2xl sm:text-4xl md:text-5xl mb-8 sm:mb-10 md:mb-14">
                {{ $page->title }}
            </h1>
        </div>
        <x-kit-image :options="$page->image" class="rounded-xl max-h-160 object-cover md:rounded-2xl mb-8 sm:mb-15"/>
        <div class="max-w-5xl w-full mx-auto">
            <div class="prose">
                {!!$page->content!!}
            </div>
        </div>
    </div>
</section>
<section class="mb-7 md:mb-12">
    <div class="container mx-auto px-5">
        <div class="between mb-9 md:mb-20">
            <h2 class="heading text-2xl sm:text-3xl md:text-4xl tracking-tight">
                {{$heading}}
            </h2>
            <x-kit-link :options="$link" class="font-bold text-sm sm:text-base btnmain h-9.25 md:h-12.5 center px-5 sm:px-11.75 rounded-sm sm:rounded-lg animation">
            </x-kit-link>
        </div>
        <ul class="flex flex-wrap justify-center items-start max-xs:px-4 gap-7">
            @foreach($popular_posts as $post)
                @if (!empty($post->name) && $post['id'] !== $page['id'])
                    <li class="w-full sm:w-[48%] md:w-[30.3%] group flex flex-col justify-between">
                        <x-kit-link :options="$post->url" class="aspect-[1.11] rounded-md sm:rounded-2xl overflow-hidden mb-7 ">
                            <x-kit-image :options="$post->image" class="imgcard animation"/>
                        </x-kit-link>
                        <div class="flex items-center gap-2 text-xs mb-3.5">
                            <p class="font-bold text-xs text-text-heading uppercase">
                                {{$post->parent->name}}
                            </p>
                            <time :datetime="{{ $post->updated_at->format('d.m.Y') }}" class="text-text-quiet font-medium">
                                {{ $post->updated_at->format('m.d.Y') }}
                            </time>
                        </div>
                        <h3 class="heading text-lg sm:text-2xl leading-[1.33] mb-3.5 hover:text-main animation">
                            <x-kit-link :options="$post->url" class="">
                                {{$post->title}}
                            </x-kit-link>
                        </h3>
                        <p class="max-sm:text-xs mb-4.75 line-clamp-3">
                            {{$post->summary}}
                        </p>
                        <x-kit-link :options="$post->url" class="link animation mt-auto">
                            {{$link_card_text}}
                        </x-kit-link>
                    </li>
                @endif
            @endforeach
        </ul>
    </div>
</section>
