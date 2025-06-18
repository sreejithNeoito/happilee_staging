<?php
$post_id = get_the_ID();

// Fetch Features Section
$features = get_post_meta($post_id, 'features_section', true);
// print_r($features);
?>

<!-- Features Section -->

<?php if ($features): ?>
    <section class="container py-10 px-8">
        <div class="grid grid-cols-3 gap-6 smd:grid-cols-1">
            <?php foreach ((array) $features as $feature): ?>
                <div class="flex flex-1 gap-4 flex-col">
                    <?php if (!empty($feature['feature_image'])): ?>
                        <img src="<?php echo $feature['feature_image']; ?>" alt="<?php echo esc_attr($feature['feature_title']); ?>" class="relative bg-transparent z-10 w-full rounded-[20px]">
                    <?php endif; ?>
                    <h2 class="text-20 leading-5 text-primary font-semibold"><?php echo esc_html($feature['feature_title']); ?></h2>
                    <p class="text-16 leading-6 text-black"><?php echo esc_html($feature['feature_content']); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
<?php endif; ?>