<?php get_header(); ?>
<!-- BREADCRUMBS SETCTION START -->
<div class="breadcrumbs-section plr-200 mb-80">
    <div class="breadcrumbs overlay-bg">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="breadcrumbs-inner">
                        <h1 class="breadcrumbs-title">Order Receipt</h1>
                        <ul class="breadcrumb-list">
                            <li><a href="<?php echo get_site_url();?>">Home</a></li>
                            <li>Order Receipt</li>
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
