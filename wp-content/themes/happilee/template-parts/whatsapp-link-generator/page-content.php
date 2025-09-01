<?php
    $content = get_the_content();
    preg_match_all('/<h2[^>]*>(.*?)<\/h2>/i', $content, $matches); 
?>
<section class="container py-8">
    <div class="flex justify-between lgmd:flex-col py-6 link-generator-page">
        <div class="content-left w-8/12 lgmd:w-full p-5 pr-8 lgmd:pr-5">	
            <div class="flex flex-col gap-6 post-content">
                <?php the_content(); ?>
            </div>		
        </div>
        <div class="content-right w-4/12 lgmd:w-full p-5 pl-8 lgmd:pl-5 flex flex-col gap-6 sticky top-[75px] h-max">
            <div class="rounded-[10px] lgmd:hidden text-24 w-full leading-[26px] text-primary">Table of<b> Contents</b></div>
            <div class="flex flex-col border-0 border-b border-[#0B39661A] pb-6 gap-2 lgmd:hidden toc-container">
            <?php
            if (!empty($matches[1])):
                foreach ($matches[1] as $index => $heading): 
                $id = sanitize_title($heading); ?>
                <div class="flex gap-2 items-center toc-item py-1">
                    <div class="w-6 h-6 flex justify-center items-center">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5 6H11M5 10H7.25M2.5 15H13.5C14.3284 15 15 14.3284 15 13.5V2.5C15 1.67157 14.3284 1 13.5 1H2.5C1.67157 1 1 1.67157 1 2.5V13.5C1 14.3284 1.67157 15 2.5 15Z" stroke="#0B3966" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <a class="text-16 font-medium leading-6 line-clamp-1 flex-1" href="#<?php echo $id; ?>"><?php echo $heading; ?></a>
                </div>
            <?php endforeach; endif; ?>
            </div>
        </div>
    </div>
</section>