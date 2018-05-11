<?php if (!defined('FW')) {
    die('Forbidden');
}

$id = uniqid('slider-');
?>

<script>
    jQuery(document).ready(function ($) {
        var slide_width = parseInt($(".wa-slider-section").width() / "<?php echo $atts['max_slides']; ?>");
        $('#<?php echo esc_attr($id) ?>').bxSlider({
            controls: "<?php echo $atts['next_prev_control']; ?>",
            pager: "<?php echo $atts['pagination']; ?>",
            auto: "<?php echo $atts['auto_play']; ?>",
            maxSlides: "<?php echo $atts['max_slides']; ?>",
            slideWidth: slide_width,
        });
    });
</script>

<div class="wa-slider-section">
<!--    --><?php //if (!empty($atts['title'])): ?>
<!--        <h3 class="wa-slider-title">--><?php //echo $atts['title']; ?><!--</h3>-->
<!--    --><?php //endif; ?>
    <ul class="wa-slider" id="<?php echo esc_attr($id); ?>">
        <?php foreach (fw_akg('sliders', $atts, array()) as $slider): ?>
            <li class="wa-slider-item">
                <?php
                $image_url = !empty($slider['image']['url'])
                    ? $slider['image']['url']
                    : fw_get_framework_directory_uri('/static/img/no-image.png');
                ?>
                <img src="<?php echo esc_attr($image_url); ?>" alt="<?php echo esc_attr($slider['caption']); ?>"/>
                <div class="url">
                    <a href="<?php echo esc_attr($slider['url']); ?>">Shop</a>
                </div>
                <p class="description"><?php echo $slider['content']; ?></p>
            </li>
        <?php endforeach; ?>
    </ul>
</div>