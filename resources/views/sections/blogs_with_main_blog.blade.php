@name('blogs_with_main blog')
@schema([
    'latest_posts: latest_items',
    'button_text: text',
])
<section class="my-7 sm:my-12">
    <div class="container">
        <div class="between mb-10 md:mb-20">
            <h2 class="heading text-xl sm:text-3xl md:text-5xl tracking-tight">
                Our Recent Post
            </h2>
            <a href="/blogs" title="View All" class="font-bold text-sm sm:text-sm btnmain h-9.5 md:h-12.75 center px-5 sm:px-11.75 rounded-lg animation">
                View All
            </a>
        </div>
        <div class="max-md:hidden between gap-x-6 lg:gap-x-14 mb-15.5">
            <div class="w-1/2 rounded-2xl overflow-hidden">
                <img src="https://www.x-zone.com.ua/assets/cache/images/articles/statji/ski/image6-1000x666-4dd.webp" alt="Mountains and ski" class="size-full object-cover" draggable="false">
            </div>
            <div class="w-1/2">
                <div class="flex items-center gap-2 mb-6.25 text-sm">
                    <p class="font-bold text-text-heading uppercase">
                        Skiing
                    </p>
                    <data datetime="2023-03-16" class="text-text-quiet font-medium">16 March 2025</data>
                </div>
                <h3 class="heading text-3xl tracking-tight mb-7">
                    How to Prepare for Your First Ski Trip
                </h3>
                <p class="line-clamp-5 mb-8 lg:mb-15">
                    The first time you pack for a ski trip, excitement mingles with uncertainty. Towering snow-covered mountains and cozy
                    alpine villages are calling your name, but there’s a lot to plan. Don’t worry—preparing for your first ski trip can be
                    just as rewarding as the adventure itself. With a bit of forethought and preparation, you’ll be gliding down the slopes with confidence.
                </p>
                <a href="/blog" title="Read More" class="border border-main rounded-sm sm:rounded-lg h-10 px-7 text-sm text-main font-bold w-max center hover:bg-main hover:text-text-accent animation">
                    Read More
                </a>
            </div>
        </div>
        <ul class="flex-col md:flex-row between gap-y-7.5 gap-x-3.75 max-sm:px-4 md:h-157.5">
            <template x-for="card in cards">
                <li class="h-full sm:w-[80%] md:w-1/3">
                    <div class="group">
                        <div class="aspect-[1.11] rounded-md sm:rounded-2xl overflow-hidden mb-7 md:mb-12">
                            <img :src="card.src" :alt="card.alt" class="imgcard animation" draggable="false">
                        </div>
                        <div class="flex items-center gap-2 text-sm mb-3.5">
                            <p x-text="card.category" class="font-bold text-sm text-text-heading uppercase">
                                {{-- {{$post->parent->name}} --}}
                            </p>
                            <time datetime="card.datetime" class="text-text-quiet font-medium">

                            </time>
                        </div>
                        <h3 class="heading text-lg sm:text-2xl leading-[1.33] mb-3.5">

                        </h3>
                        <p class="max-sm:text-sm mb-4.75 line-clamp-3">

                        </p>
                        <a href="card.href" title="Read More" class="link animation">
                            Read More...
                        </a>
                    </div>
                </li>
            </template>
        </ul>
    </div>
</section>




<section class="recent-posts container">
    {{-- Главная большая карточка --}}

        @php
            $mainPost = $latest_posts:[0];
        @endphp

        <article class="recent-posts__main">
            <a href="{{ $mainPost->url }}" class="recent-posts__link">
                <img src="{{ $mainPost->image }}" alt="{{ $mainPost->title }}" class="recent-posts__image">
                <h2 class="recent-posts__title">{{ $mainPost->title }}</h2>
                <p class="recent-posts__excerpt">{{ $mainPost->excerpt }}</p>
            </a>
        </article>


    {{-- Остальные статьи по сетке --}}
    <div class="recent-posts__grid">
        @foreach ($posts as $index => $post)
            @if ($index === 0)
                @continue {{-- пропускаем первую --}}
            @endif

            <article class="recent-posts__item">
                <a href="{{ $post->url }}" class="recent-posts__link">
                    <img src="{{ $post->image }}" alt="{{ $post->title }}" class="recent-posts__thumb">
                    <h3 class="recent-posts__title">{{ $post->title }}</h3>
                </a>
            </article>
        @endforeach
    </div>
</section>
