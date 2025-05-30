<div id="layout-2" class="carousel-wrap">
    <div class="owl-carousel">
        <?php
        if (!empty($settings['item_list'])) {
            foreach ($settings['item_list'] as $item) {
                ?>
                <div class="item">   
                    <div class="banner_title z-9 d-flex" >
                        <div class="icon-sec">
                            <?php
                            if ('yes' === $item['show_button']) {
                                echo '<div class="button_wrapper d-flex flex-wrap">';
                                // Initialize icon HTML
                                $icon_html = '';
                                if (!empty($item['icon'])) {
                                    // Get the icon HTML
                                    ob_start(); // Start output buffering
                                    \Elementor\Icons_Manager::render_icon($item['icon'], ['aria-hidden' => 'true']);
                                    $icon_html = ob_get_clean(); // Store the icon HTML
                                }
                                echo esc_html($item['button_title']);
                                if ($icon_html) {
                                    // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                                    echo '<span class="my-icon-wrapper">' . $icon_html . '</span>';
                                }
                                echo '</div>';
                            }
                            ?>
                        </div>
                        <div class="content-sec">
                            <?php if (!empty($item['banner_title'])) : ?> 
                                <h2 class="item_title"><?php echo esc_html($item['banner_title']); ?></h2>
                                <div class="itemcontent">
                                    <?php echo $item['banner_content']; ?>
                                </div>
                            <?php endif; ?>  
                        </div>
                    </div>
                    <?php
                    if ('yes' === $settings['overlayer_switcher']) {
                        ?>
                        <div class="overlayer"></div>
                        <?php
                    }
                    ?>
                </div>
                <?php
            }
        }
        ?>
    </div>
</div>
<?php
$settings = $this->get_settings_for_display();
$car_button = $settings['carousel_control'];
$car_previous_icon = $settings['previous_icon'];
$car_next_icon = $settings['next_icon'];

$previous_icon_html = '';
if (!empty($car_previous_icon)) {
    // Get the icon HTML
    ob_start(); // Start output buffering
    \Elementor\Icons_Manager::render_icon($car_previous_icon, ['aria-hidden' => 'true']);
    $previous_icon = ob_get_clean(); // Store the icon HTML
    $previous_icon_html = wp_kses_post($previous_icon); // Sanitize the icon HTML
}

$next_icon_html = '';
if (!empty($car_next_icon)) {
    // Get the icon HTML
    ob_start(); // Start output buffering
    \Elementor\Icons_Manager::render_icon($car_next_icon, ['aria-hidden' => 'true']);
    $next_icon = ob_get_clean(); // Store the icon HTML
    $next_icon_html = wp_kses_post($next_icon); // Sanitize the icon HTML
}

// Get the values for each device (desktop, tablet, mobile)
$carousel_items = [
    'desktop' => $settings['carousel_item']['size'] ?? 1, // Fallback to 3 if not set
    'tablet' => $settings['carousel_item_tablet']['size'] ?? 2, // Fallback to 2 if not set
    'mobile' => $settings['carousel_item_mobile']['size'] ?? 1, // Fallback to 1 if not set
];
?>
<script>
    jQuery(document).ready(function ($) {
        $('.owl-carousel').owlCarousel({
            margin: 0,
            loop: false,
            nav: true,
            autoplay: true,
            autoplayHoverPause: true,
            stagePadding: 200,
            responsive: {
                0: {
                    items: <?php echo esc_js($carousel_items['mobile']); ?>,
                    stagePadding: 0,
                    nav: false,
                    dots: true
                },
                600: {
                    items: <?php echo esc_js($carousel_items['tablet']); ?>,
                    stagePadding: 0,
                    nav: false,
                    dots: true
                },
                1000: {
                    items: <?php echo esc_js($carousel_items['desktop']); ?>,
                    stagePadding: 200,
                    nav: true,
                    dots: false
                }
            }
        });
    });
</script>
<style>
    #layout-2 .item {
        border-radius: 16px;
        background: #FFF;
        box-shadow: 0px 16px 40px -12px rgba(0, 0, 0, 0.11);
        padding: 40px;
        margin: 15px;
    }
    .banner_title {
        gap: 25px;
    }
    .item_title{
        color: var(--Dark-Dark-1, #000);
        font-family: Rubik;
        font-size: 28px;
        font-style: normal;
        font-weight: 400;
        line-height: 38px;
    }
    #layout-2 .owl-prev, #layout-2 .owl-next{
        width:46px;
        height:46px;
        border-radius: 50%;
        border:1px solid #555;
        background-repeat: no-repeat;
        background-position: center;
        overflow: hidden;
        text-indent: -100px;
    }
    #layout-2 .owl-prev:hover, #layout-2 .owl-next:hover{
        background-color:#494949;
    }
    #layout-2 .owl-nav {
        position: absolute;
        top: -100px;
        right: 60px;
        width: 200px;
        left: auto;
    }
    .owl-carousel .owl-stage {
        padding-left: 0 !important; /* Remove the left padding */
    }
    div#layout-2 {
        padding-left: 30px;
    }
    #layout-2 .owl-prev{
        background-image: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" width="24" height="16" viewBox="0 0 24 16" fill="none"><path d="M0.292893 7.29289C-0.0976311 7.68342 -0.0976311 8.31658 0.292893 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41421 8L8.07107 2.34315C8.46159 1.95262 8.46159 1.31946 8.07107 0.928932C7.68054 0.538408 7.04738 0.538408 6.65685 0.928932L0.292893 7.29289ZM1 9H24V7H1V9Z" fill="%23555555"/></svg>');
    }
    #layout-2 .owl-prev:hover{
        background-image: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" width="24" height="16" viewBox="0 0 24 16" fill="none"><path d="M0.292893 7.29289C-0.0976311 7.68342 -0.0976311 8.31658 0.292893 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41421 8L8.07107 2.34315C8.46159 1.95262 8.46159 1.31946 8.07107 0.928932C7.68054 0.538408 7.04738 0.538408 6.65685 0.928932L0.292893 7.29289ZM1 9H24V7H1V9Z" fill="%23fff"/></svg>');
    }
    #layout-2 .owl-next{
        background-image: url('data:image/svg+xml,<svg width="25" height="16" viewBox="0 0 25 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M24.7155 8.54119C25.1007 8.1454 25.0921 7.51229 24.6963 7.12711L18.2465 0.850158C17.8507 0.464973 17.2176 0.473572 16.8325 0.869364C16.4473 1.26516 16.4559 1.89826 16.8517 2.28345L22.5848 7.86296L17.0053 13.5961C16.6201 13.9919 16.6287 14.625 17.0245 15.0102C17.4203 15.3954 18.0534 15.3868 18.4386 14.991L24.7155 8.54119ZM23.9853 6.84384L0.987441 7.1562L1.0146 9.15601L24.0125 8.84366L23.9853 6.84384Z" fill="%23555555"/></svg>');
    }
    #layout-2 .owl-next:hover{
        background-image: url('data:image/svg+xml,<svg width="25" height="16" viewBox="0 0 25 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M24.7155 8.54119C25.1007 8.1454 25.0921 7.51229 24.6963 7.12711L18.2465 0.850158C17.8507 0.464973 17.2176 0.473572 16.8325 0.869364C16.4473 1.26516 16.4559 1.89826 16.8517 2.28345L22.5848 7.86296L17.0053 13.5961C16.6201 13.9919 16.6287 14.625 17.0245 15.0102C17.4203 15.3954 18.0534 15.3868 18.4386 14.991L24.7155 8.54119ZM23.9853 6.84384L0.987441 7.1562L1.0146 9.15601L24.0125 8.84366L23.9853 6.84384Z" fill="%23fff"/></svg>');
    }
    #layout-2  .owl-dot span {
        width: 12px;
        height: 12px;
        border: 1px solid #555;
    }
       #layout-2 .owl-dots .active span{
        background:#555;
    }
    
</style>