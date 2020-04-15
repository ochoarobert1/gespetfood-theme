<?php 
if ( shortcode_exists( 'wpdreams_ajaxsearchlite' ) ) {
?>
<div class="custom-special-form">
    <?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
</div>
<?php } else { ?>
<form role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url( '/' ); ?>">
    <div class="input-group">
        <input type="search" id="s" name="s" value="" class="form-control" placeholder="<?php _e('Buscar Productos:','gespetfood'); ?>" aria-label="<?php _e('Buscar Productos:','gespetfood'); ?>" aria-describedby="searchsubmit">
        <input type="hidden" name="post_type" value="product" />
        <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="submit" id="searchsubmit"><i class="fa fa-search"></i></button>
        </div>
    </div>
</form>
<?php } ?>
