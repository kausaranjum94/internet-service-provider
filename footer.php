<?php
/**
 * The template for displaying the footer.
 *
 * @package internet-service-provider-pro
 */


?>
<div class="clearfix"></div>
<div class="outer-footer">
    
    <?php get_template_part( 'template-parts/footer/footer-columns' ); ?>
    
</div>

<?php wp_footer(); ?>
</body>

<svg style="visibility: hidden; position: absolute;" width="0" height="0" xmlns="http://www.w3.org/2000/svg"
    version="1.1">
    <defs>
        <filter id="goo">
            <feGaussianBlur in="SourceGraphic" stdDeviation="8" result="blur" />
            <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
            <feComposite in="SourceGraphic" in2="goo" operator="atop" />
        </filter>
    </defs>
</svg>

</html>