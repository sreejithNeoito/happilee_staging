<?php
$customer_slider = get_post_meta(get_the_ID(), 'customers_section', true);

if ($customer_slider): ?>
    <section class="container py-10 mdd:px-5">
        <div class="text-24 text-primary font-main leading-6 mdd:leading-[26px] text-center pb-8">Trusted by <span class=" font-bold text-secondary">600+ Customers</span> across the Globe</div>
        <div class="happileeclients-container relative">
            <div class="happileeclients owl-carousel owl-theme">
                <?php foreach ($customer_slider as $customer) : ?>
                    <img src="<?php echo esc_url($customer); ?>" alt="Customer Logo" class="bg-transparent w-full">
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php else:
    get_template_part('template-parts/home/slider');
?>
<?php endif; ?>