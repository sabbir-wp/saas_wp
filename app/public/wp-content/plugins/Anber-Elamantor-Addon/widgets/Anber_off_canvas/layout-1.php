<div class="off-canvas" id="offCanvas">
    <button id="closeCanvas" class="close-button">×</button>
    <h2 class="ocs_title"><?php echo $settings['ocs_title']; ?></h2>
    <div class="osc-content">
        <?php echo $settings['ocs_content']; ?>
    </div>
    <div class="ocs_form">
        <?php echo do_shortcode( $settings['ocs_form_sode']); ?>
    </div>
    <div class="ocs_note">
        <?php echo $settings['ocs_btmtext']; ?>
    </div>
</div>


<script>

// Select all buttons with the "open-btn" class
    const openButtons = document.querySelectorAll(".open-btn");
    const closeCanvasButton = document.getElementById("closeCanvas");
    const offCanvas = document.getElementById("offCanvas");

// Add event listeners to all open buttons
    openButtons.forEach((button) => {
        button.addEventListener("click", () => {
            offCanvas.classList.add("active");
        });
    });

// Close button functionality
    closeCanvasButton.addEventListener("click", () => {
        offCanvas.classList.remove("active");
    });

</script>

