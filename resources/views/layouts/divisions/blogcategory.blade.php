@name('divisions/blogs_categories')
@schema([
    // 'heading: text',
    // 'search_text_button: text',
    // 'input_text: text',
    // 'read_text_button: text',
])
<section x-data="blogs" class="my-10 sm:my-17 md:mt-19 md:mb-32.5">
    <div class="container mx-auto px-5">
        <div class="text-center flex flex-col sm:gap-y-6 mb-10 md:mb-15 l:mb-35 w-full mx-auto max-w-200">
            <h1 class="max-sm:text-xs max-sm:mb-3 heading uppercase tracking-widest">
                OUR BLOGS
            </h1>
            <h2 class="heading text-2xl sm:text-4xl md:text-5xl leading-[1.33] max-sm:mb-5.5">
                Find our all blogs from here
            </h2>
            <p class="max-sm:text-xs text-text-heading">
                our blogs are written from very research research and well known writers writers so that  we can provide you the best blogs and articles articles for you to read them all along
            </p>
        </div>
        <ul class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-x-2 gap-y-8 md:gap-y-13 max-sm:mx-4.5">
            <template x-for="card in cards">
                <li class="h-full">
                    <div class="group h-full flex flex-col justify-between">
                        <div class="aspect-[1.11] rounded-md sm:rounded-2xl overflow-hidden mb-7 md:mb-12">
                            <img :src="card.src" :alt="card.alt"
                                class="imgcard animation" draggable="false">
                        </div>
                        <div class="flex items-center gap-2 text-xs mb-3.5">
                            <p x-text="card.category" class="font-bold text-xs text-text-heading uppercase"></p>
                            <data x-text="card.date" :datetime="card.datetime" class="text-text-quiet font-medium"></data>
                        </div>
                        <h3 x-text="card.title"
                            class="heading text-lg sm:text-2xl leading-[1.33] mb-3.5"></h3>
                        <p x-text="card.text" class="max-sm:text-xs mb-4.75 line-clamp-3"></p>
                        <a :href="card.href" title="Read More" class="link animation">
                            Read More...
                        </a>
                    </div>
                </li>
            </template>
        </ul>
    </div>
</section>
