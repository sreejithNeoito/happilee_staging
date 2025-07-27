<?php $category_title = single_cat_title('', false);
?>

<section class="container  text-primary py-10 smd:py-4 px-8">
    <div class="gap-6 py-4 flex-col items-center">
        <div class="flex justify-between items-center lgmd:flex-col gap-2 smd:items-start smd:gap-4">
            <div class="text-24"><span class="smd:hidden">Category /</span> <span class="font-bold"><?php echo $category_title; ?></span></div>
            <div class="search-container relative max-w-96 smd:max-w-[calc(100vw-4rem)] ">
                <div class="relative w-96 smd:w-[calc(100vw-4rem)]">
                    <input
                        type="text"
                        id="searchInput"
                        data-context="category"
                        data-category-id="<?php echo get_queried_object_id(); ?>"
                        class="w-full px-4 py-2 pr-12 smd:pr-10 border rounded-lg focus:ring-2 focus:ring-primary focus:outline-none"
                        placeholder="Enter Keyword">
                    <svg
                        class="absolute smd:w-[20px] smd:h-[20px] right-4 top-1/2 -translate-y-1/2 pointer-events-none"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M16.1533 16.1255L20 20M18.2222 11.1111C18.2222 15.0385 15.0385 18.2222 11.1111 18.2222C7.18375 18.2222 4 15.0385 4 11.1111C4 7.18375 7.18375 4 11.1111 4C15.0385 4 18.2222 7.18375 18.2222 11.1111Z"
                            stroke="currentColor"
                            stroke-width="1.5"
                            stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </div>

                <div id="resultsBox"
                    class="absolute top-12 left-0 w-full bg-white shadow-lg rounded-lg border max-h-60 overflow-y-auto hidden z-50">
                </div>
            </div>


        </div>
    </div>
</section>