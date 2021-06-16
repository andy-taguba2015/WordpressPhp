<?php get_header(); ?>

<!-- BREADCRUMBS SETCTION START -->
<div class="breadcrumbs-section plr-200 mb-80">
    <div class="breadcrumbs overlay-bg">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="breadcrumbs-inner">
                        <h1 class="breadcrumbs-title">Checkout</h1>
                        <ul class="breadcrumb-list">
                            <li><a href="<?php echo get_site_url();?>">Home</a></li>
                            <li>Checkout</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMBS SETCTION END -->
<!-- Start page content -->
<section id="page-content" class="page-wrapper">
    <!-- SHOP SECTION START -->
    <div class="shop-section mb-80">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
					<h4 class="lead" style="padding: 5px 5px 10px 15px;font-weight: 600;border-bottom: 1px solid #e7e7e7;"><img src="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.1/flags/4x3/us.svg" alt="USA" style="width:200px;width:50px;">&nbsp;&nbsp;Proudly Based In The USA</h4>
                    <?php if (have_posts()): ?>
                        <?php
                        while (have_posts()): the_post();
                            the_content();
                        endwhile;
                        ?>
                    <?php else: ?>
                        <p>No results found.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <!-- SHOP SECTION END -->
</section>
<!-- End page content -->
<?php get_footer(); ?>
