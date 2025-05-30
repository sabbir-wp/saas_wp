<?php
// General Tab Content
$general_title = !empty($settings['list_title']) ? $settings['list_title'] : '';
$general_description = !empty($settings['general_description']) ? $settings['general_description'] : '';

// Advanced Tab Content
$advanced_option = !empty($settings['advanced_option']) ? $settings['advanced_option'] : '';

$settings = $this->get_settings_for_display();
if (!empty($settings['list_button_url']['url'])) {
    $this->add_link_attributes('list_button_url', $settings['list_button_url']);
}
?>

<div class="tabs js-tabs">

    <div class="tab js-tab is-active">
        <div class="tab__title js-tab-title">
            <div class="tab-nav-wrwp bgyellow">
                <div class="pricing-title"><?php echo esc_html($general_title); ?></div>
                <div class="innerwrap">
                    <div class="top-sag-select">
                        <div class="tagsec">
                            <span class="iconsvg">
                                <?php
                                $rdm_icon = $settings['list_icon_group'];
                                $rdm_icon_html = '';
                                if (!empty($rdm_icon)) {
// Get the icon HTML
                                    ob_start(); // Start output buffering
                                    \Elementor\Icons_Manager::render_icon($rdm_icon, ['aria-hidden' => 'true']);
                                    $rdm_icon_html = ob_get_clean(); // Store the icon HTML
                                }
                                // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                                echo $rdm_icon_html;
                                ?>
                            </span>
                            <span class="title"><?php echo $settings['list_tag_content']; ?></span>
                        </div>
                        <div class="radio-btn"></div>
                    </div>
                    <div class="price-sec">
                        <span class="currency"><?php echo $settings['list_price_currency']; ?></span>
                        <span class="price"><?php echo $settings['list_price_group']; ?></span>
                    </div>
                    <span class="price-border"></span>
                    <div class="price-content">
                        <?php echo $settings['list_content_group']; ?>
                    </div>
                    <a class="price_button open-btn" <?php $this->print_render_attribute_string('list_button_url'); ?>><span><?php echo $settings['list_button_text']; ?></span></a>
                    <div class="botomcontent">
                        <?php echo $settings['price_list_bottom']; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab__content js-tab-content">
             <div class="tab-content-container" data-tab="1">
            <div class="tabtitle"><span>Compare to this below</span> <span><svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.32293 6.75162C3.5251 6.51575 3.88021 6.48843 4.11608 6.6906L9.00001 10.8768L13.8839 6.6906C14.1198 6.48843 14.4749 6.51575 14.6771 6.75162C14.8793 6.98749 14.852 7.34259 14.6161 7.54477L9.36608 12.0448C9.15543 12.2253 8.84459 12.2253 8.63394 12.0448L3.38394 7.54477C3.14807 7.34259 3.12075 6.98749 3.32293 6.75162Z" fill="black"/>
                    </svg>
                </span>
            </div>

            <div class="bottomtab">
                <?php foreach ($settings['tablist'] as $index => $item) : ?>
                    <button 
                            class="tablinks" 
                            onclick="openCity(event, 'tabid<?php echo $index; ?>', 1)"
                            <?php if ($index == 0) : ?>id="defaultOpen"<?php endif; ?>>
                            <?php echo $item['tab_item_title']; ?>
                        </button>
                <?php endforeach; ?>
            </div>
            <?php foreach ($settings['tablist'] as $index => $item) : ?>
                <div id="tabid<?php echo $index; ?>" 
                     class="tabcontent tab-third" 
                     style="<?php echo ($index == 0) ? 'display: block;' : 'display: none;'; ?>"> 
                         <?php echo $item['tab_item_content']; ?>
                </div>
            <?php endforeach; ?>
        </div>
        </div>
    </div>

    <div class="tab js-tab">
        <div class="tab__title js-tab-title">
            <div class="tab-nav-wrwp bg-pink">
                <div class="pricing-title"><?php echo esc_html($settings['list_title2']); ?></div>
                <div class="innerwrap">
                    <div class="top-sag-select">
                        <div class="tagsec">
                            <span class="iconsvg">
                                <?php
                                $rdm_icon = $settings['list_icon_group2'];
                                $rdm_icon_html = '';
                                if (!empty($rdm_icon)) {
// Get the icon HTML
                                    ob_start(); // Start output buffering
                                    \Elementor\Icons_Manager::render_icon($rdm_icon, ['aria-hidden' => 'true']);
                                    $rdm_icon_html = ob_get_clean(); // Store the icon HTML
                                }
                                // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                                echo $rdm_icon_html;
                                ?>
                            </span>
                            <span class="title"><?php echo $settings['list_tag_content2']; ?></span>
                        </div>
                        <div class="radio-btn"></div>
                    </div>
                    <div class="price-sec">
                        <span class="currency"><?php echo $settings['list_price_currency2']; ?></span>
                        <span class="price"><?php echo $settings['list_price_group2']; ?></span>
                    </div>
                    <span class="price-border"></span>
                    <div class="price-content">
                        <?php echo $settings['list_content_group2']; ?>
                    </div>
                    <a class="price_button open-btn" <?php $this->print_render_attribute_string('list_button_url2'); ?>><span><?php echo $settings['list_button_text2']; ?></span></a>
                    <div class="botomcontent">
                        <?php echo $settings['price_list_bottom2']; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab__content js-tab-content" >
             <div class="tab-content-container" data-tab="2">
            <div class="tabtitle"><span>Compare to this below</span> <span><svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.32293 6.75162C3.5251 6.51575 3.88021 6.48843 4.11608 6.6906L9.00001 10.8768L13.8839 6.6906C14.1198 6.48843 14.4749 6.51575 14.6771 6.75162C14.8793 6.98749 14.852 7.34259 14.6161 7.54477L9.36608 12.0448C9.15543 12.2253 8.84459 12.2253 8.63394 12.0448L3.38394 7.54477C3.14807 7.34259 3.12075 6.98749 3.32293 6.75162Z" fill="black"/>
                    </svg>
                </span>
            </div>

            <div class="bottomtab">
                <?php foreach ($settings['tablist2'] as $index => $item) : ?>
                    <button 
                            class="tablinks" 
                            onclick="openCity(event, '2tabid<?php echo $index; ?>', 2)"
                            <?php if ($index == 0) : ?>id="defaultOpen2"<?php endif; ?>>
                            <?php echo $item['tab_item_title2']; ?>
                        </button>
                <?php endforeach; ?>
            </div>
            <?php foreach ($settings['tablist2'] as $index => $item) : ?>
                <div id="2tabid<?php echo $index; ?>" 
                     class="tabcontent tab-third" 
                     style="<?php echo ($index == 0) ? 'display: block;' : 'display: none;'; ?>"> 
                         <?php echo $item['tab_item_content2']; ?>
                </div>
            <?php endforeach; ?>
        </div>
            </div>
    </div>

    <div class="tab js-tab">
        <div class="tab__title js-tab-title last-tab">
            <div class="tab-nav-wrwp bg-gray">
                <div class="pricing-title"><?php echo esc_html($settings['list_title3']); ?></div>
                <div class="innerwrap">
                    <div class="top-sag-select">
                        <div class="tagsec">
                            <span class="iconsvg">
                                <?php
                                $rdm_icon = $settings['list_icon_group3'];
                                $rdm_icon_html = '';
                                if (!empty($rdm_icon)) {
// Get the icon HTML
                                    ob_start(); // Start output buffering
                                    \Elementor\Icons_Manager::render_icon($rdm_icon, ['aria-hidden' => 'true']);
                                    $rdm_icon_html = ob_get_clean(); // Store the icon HTML
                                }
                                // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                                echo $rdm_icon_html;
                                ?>
                            </span>
                            <span class="title"><?php echo $settings['list_tag_content3']; ?></span>
                        </div>
                        <div class="radio-btn"></div>
                    </div>
                    <div class="price-sec">
                        <span class="currency"><?php echo $settings['list_price_currency3']; ?></span>
                        <span class="price"><?php echo $settings['list_price_group3']; ?></span>
                    </div>
                    <span class="price-border"></span>
                    <div class="price-content">
                        <?php echo $settings['list_content_group3']; ?>
                    </div>
                    <a class="price_button open-btn" <?php $this->print_render_attribute_string('list_button_url3'); ?>><span><?php echo $settings['list_button_text3']; ?></span></a>
                    <div class="botomcontent">
                        <?php echo $settings['price_list_bottom3']; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab__content js-tab-content">
             <div class="tab-content-container" data-tab="3">
            <div class="tabtitle"><span>Compare to this below</span> <span><svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.32293 6.75162C3.5251 6.51575 3.88021 6.48843 4.11608 6.6906L9.00001 10.8768L13.8839 6.6906C14.1198 6.48843 14.4749 6.51575 14.6771 6.75162C14.8793 6.98749 14.852 7.34259 14.6161 7.54477L9.36608 12.0448C9.15543 12.2253 8.84459 12.2253 8.63394 12.0448L3.38394 7.54477C3.14807 7.34259 3.12075 6.98749 3.32293 6.75162Z" fill="black"/>
                    </svg>
                </span>
            </div>

            <div class="bottomtab">
                <?php foreach ($settings['tablist3'] as $index => $item) : ?>
                   <button 
                            class="tablinks" 
                            onclick="openCity(event, '3tabid<?php echo $index; ?>', 3)"
                            <?php if ($index == 0) : ?>id="defaultOpen3"<?php endif; ?>>
                            <?php echo $item['tab_item_title3']; ?>
                        </button>
                <?php endforeach; ?>
            </div>
            <?php foreach ($settings['tablist3'] as $index => $item) : ?>
                <div id="3tabid<?php echo $index; ?>" 
                     class="tabcontent tab-third" 
                     style="<?php echo ($index == 0) ? 'display: block;' : 'display: none;'; ?>"> 
                         <?php echo $item['tab_item_content3']; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    </div>



</div>

<script>
    jQuery(document).ready(function ($) {
        $(function () {

            /*
             * Vars
             */
            var $tabs = $('.js-tabs');
            var breakpoint = parseFloat($tabs.css('max-width'));
            var tabsHeaderHeight = $tabs.outerHeight();


            /*
             * I don't even need to explain this function to you
             */
            function calculateActiveTabHeightAndApply() {
                $tabs.css({'height': 'auto'});
                tabsHeaderHeight = $tabs.outerHeight();
                var tabContentHeight = $tabs.find('.is-active .js-tab-content').outerHeight();
                $tabs.css({'height': tabsHeaderHeight + tabContentHeight})
            }


            /* 
             * Tab click;
             */
            $tabs.on('click', '.js-tab-title', function (e) {
                e.preventDefault();
                var $tab = $(this).parents('.js-tab');
                $tabs.find('.js-tab').not($tab).removeClass('is-active');
                $tab.addClass('is-active');
                if (window.innerWidth > breakpoint) {
                    calculateActiveTabHeightAndApply();
                }
            });


            /*
             * Width detection 
             */
            var resizeTimer, width;
            var mobile = desktop = false;
            $(window).resize(function () {
                // clear the timeout
                clearTimeout(resizeTimer);

                // execute breakpointChange() once the viewport 
                // has stopped changing in size for 400ms
                resizeTimer = setTimeout(breakpointChange(), 400);
            });

            function breakpointChange() {
                width = window.innerWidth;
                if (!mobile && width < breakpoint) {
                    tablet = desktop = false;
                    mobile = true;
                    //Mobile
                    $tabs.css({'height': 'auto'})
                }
                if (!desktop && width > breakpoint) {
                    mobile = tablet = false;
                    desktop = true;
                    //Desktop
                    calculateActiveTabHeightAndApply();
                }
            }
            $(window).resize();

        });
    });
    function openCity(evt, cityName, section) {
    // Find the correct tab container using the data-tab attribute
    var tabContainer = document.querySelector(`.tab-content-container[data-tab="${section}"]`);
    if (!tabContainer) return;

    // Get all tab contents and buttons in the current section
    var tabcontents = tabContainer.getElementsByClassName("tabcontent");
    var tablinks = tabContainer.getElementsByClassName("tablinks");

    // Hide all tab contents in the current section
    for (let i = 0; i < tabcontents.length; i++) {
        tabcontents[i].style.display = "none";
    }

    // Remove active class from all buttons in the current section
    for (let i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the clicked tab's content and add active class to the button
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Initialize default open tabs for each section
document.querySelectorAll('.tab-content-container').forEach(container => {
    let defaultButton = container.querySelector("[id^='defaultOpen']");
    if (defaultButton) defaultButton.click();
});


</script>