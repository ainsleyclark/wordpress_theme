<div id="footer">  

    <div class="footer_widgets">

        <?php if (is_active_sidebar('footer1')) : ?>
            <div class="footer_widget_area">
            <?php dynamic_sidebar('footer1'); ?>
            </div>
        <?php endif; ?>

        <?php if (is_active_sidebar('footer2')) : ?>
            <div class="footer_widget_area">
            <?php dynamic_sidebar('footer2'); ?>
            </div>
        <?php endif; ?>

        <?php if (is_active_sidebar('footer3')) : ?>
            <div class="footer_widget_area">
            <?php dynamic_sidebar('footer3'); ?>
            </div>
        <?php endif; ?>

        <?php if (is_active_sidebar('footer4')) : ?>
            <div class="footer_widget_area">
            <?php dynamic_sidebar('footer4'); ?>
            </div>
        <?php endif; ?>

    </div>

    <hr>

    <div class="footer_copyright">
        © <?php the_time('Y'); ?>
        <span>Template design by 
            <a href="http://www.ainsleyclark.com" target="blank">
                Ainsley Clark
            </a>
        </span>
    </div>

    <h3>

</div>
</div><!--end wrapper-->

<?php wp_footer(); ?>

</body>
</html>