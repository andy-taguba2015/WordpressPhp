<?php get_header(); ?>
<?php
$ksdk = KonnektiveSDK::getInstance();
$ksdk->echoJavascript();
?>

<?php $post_meta = get_post_meta($post->ID); ?>
<?php $variations = json_decode($post_meta['variations'][0]); ?>
<!-- BREADCRUMBS SETCTION START -->
<div class="breadcrumbs-section plr-200 mb-80">
    <div class="breadcrumbs overlay-bg">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="breadcrumbs-inner">
                        <h1 class="breadcrumbs-title">Product Details</h1>
                        <ul class="breadcrumb-list">
                            <li><a href="index.html">Home</a></li>
                            <li>Product Details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMBS SETCTION END -->
<?php $image = (has_post_thumbnail($post->ID)) ? get_the_post_thumbnail_url($post->ID) : get_template_directory_uri() . '/build/img/products/1.jpg'; ?>
<!-- Start page content -->
<section id="page-content" class="page-wrapper">
    <!-- SHOP SECTION START -->
    <div class="shop-section mb-80">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <!-- single-product-area start -->
                    <div class="single-product-area mb-80">
                        <div class="row">
                            <!-- imgs-zoom-area start -->
                            <div id="product-page-thumbnail" class="col-md-5 col-sm-5 col-xs-12 product-images">
                                <?php $ctr = 0; ?>
                                <?php if ($post_meta['has_variance'][0]) : ?>
                                    <?php foreach ($variations as $item): ?>
                                        <div id="product-page-thumbnail-<?php echo $item->id; ?>" class="imgs-zoom-area product-thumbnail" style="<?php echo ($item->id == $post_meta['product_id'][0]) ? '' : 'display:none;'; ?>">
                                            <img id="zoom_<?php echo ++$ctr; ?>" src="<?php echo (isset($item->image_src)) ? get_site_url() . $item->image_src : $image; ?>" data-zoom-image="<?php echo (isset($item->image_src)) ? get_site_url() . $item->image_src : $image; ?>" alt="">
                                        </div>
                                    <?php endforeach; ?>
                                <?php else : ?>
                                    <div class="imgs-zoom-area product-thumbnail">
                                        <img id="zoom_01" src="<?php echo $image; ?>" data-zoom-image="<?php echo $image; ?>" alt="">
                                    </div>
                                <?php endif; ?>
                            </div>
                            <!-- imgs-zoom-area end -->
                            <?php $default_product_sku = (sizeof($post_meta['sku']) > 0) ? $post_meta['sku'][0] : ''; ?>
                            <!-- single-product-info start -->
                            <div class="col-md-7 col-sm-7 col-xs-12">
                                <div class="single-product-info">

                                    <h3 class="text-black-1"><?php echo $post->post_title; ?></h3>
                                    <h6 class="brand-name-2"><?php echo $post_meta['category'][0];?></h6>
                                    <div class="in-stock">
                                        <p>Available: <span>In stock</span></p>
                                    </div>
                                    <?php if (isset($post_meta['product_ratings'][0])) : ?>
                                        <?php for ($i = 0; $i < $post_meta['product_ratings'][0]; $i++) : ?>
                                            <a href="#"><i class="zmdi zmdi-star"></i></a>
                                        <?php endfor; ?>
                                    <?php else : ?>
                                        <a href="#"><i class="zmdi zmdi-star"></i></a>
                                    <?php endif; ?>
                                    <br><br>
                                    <span id="variation-price-<?php echo $item->id; ?>" class="prodcut-price variation-price" style="<?php echo ($item->id == $post_meta['product_id'][0]) ? '' : 'display:none;'; ?>">
                                        <div class="new-price">
                                            <span>$<?php echo $post_meta['price'][0]; ?></span>
                                            <?php echo (isset($post_meta['discount_text'][0])) ? ('<br><small style="font-size:18px;color:#4ca700;">' . $post_meta['discount_text'][0] . '</small>') : ''; ?>
                                        </div>
                                    </span>
                                    <!-- hr -->
                                    <hr>
                                    <!-- single-product-tab -->
                                    <div class="single-product-tab">
                                        <ul class="reviews-tab mb-20">
                                            <li  class="active"><a href="#description" data-toggle="tab">description</a></li>
                                            <li><a href="#information" data-toggle="tab">information</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane active" id="description">
                                                <?php echo nl2br($post->post_content); ?>
                                            </div>
                                            <div role="tabpanel" class="tab-pane" id="information">
                                                <?php echo get_post_meta($post->ID, 'product_additional_info', true); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <!--  hr -->
                                    <hr>
                                        <?php if(sizeof((array) $variations)>0):?>
                                            <div id="package-select" class="quanlity-box">
                                                <label for="package">Packages</label>
                                                <select name="package" class="product-variance" id="attr_1" style="background-color:#fff;width:100%;">
                                                    <?php foreach ($variations as $item): ?>
                                                        <option <?php echo $item->productId == $post_meta['productId'][0] ? 'selected' : NULL;?> value="<?php echo $item->productId; ?>" data-url="<?php echo $item->url;?>"><?php echo $item->name; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                            <br>
                                        <?php endif;?>
                                        <button type="submit" class="product-details-button btn btn-default kcartAddToCartButton" id="product-qty-324-button" productId="<?php echo $post_meta['productId'][0]; ?>"><i class="lil-add_shopping_cart"></i>&nbsp;Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                            <!-- single-product-info end -->
                        </div>
                    </div>
                    <!-- single-product-area end -->

                    <!-- Related Products Start -->
                    <div class="related-product-area">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title text-left mb-40">
                                    <h2 class="uppercase">related product</h2>
                                    <h6>There are many variations of passages of brands available,</h6>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="row">
                            <div class="active-related-product"> -->

                                <!-- product-item start -->

                                <section class="section border-0 my-0">
                                  <div class="container">

                                    <div class="row justify-content-center mb-5">

                                      <?php
                                          $products = new WP_Query();
                                          $args = array(
                                              'post_type' => 'product',
                                              'orderby' => 'rand',
                                              'order' => 'DESC',
                                              'posts_per_page' => 4,
                                          );

                                          $products->query( $args );

                                          if ( $products->found_posts > 0 ):
                                              while ( $products->have_posts() ) :
                                                  $products->the_post();
                                                  $image = ( has_post_thumbnail( $post->ID ) ) ? get_the_post_thumbnail_url( $post->ID, 'product_widget_size' ) : get_template_directory_uri() . '/build/img/products/1.jpg';
                                                  $link = get_permalink();
                                                  $title = get_the_title();
                                                  $post_meta = get_post_meta($post->ID);
                                                  $post_excerpt = get_the_excerpt();
                                      ?>

                                      <div class="col-md-6 col-lg-4 col-xl-3 mb-4 pb-3 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="400">

                                        <div class="thumb-info thumb-info-hide-wrapper-bg custom-thumb-info-style-1">
                                          <div class="thumb-info-wrapper">
                                            <a href="<?php echo $link;?>"><img src="<?php echo $image; ?>" class="img-fluid" alt=""></a>
                                            <div class="thumb-info-price bg-color-secondary font-weight-semibold">
                                              <span>£<?php echo $post_meta['price'][0];?></span>
                                            </div>
                                          </div>
                                          <div class="thumb-info-caption">
                                            <h3 class="font-weight-semibold text-transform-none"><a href="<?php echo $link;?>"><?php echo $title; ?></a></h3>
                                          </div>
                                          <div class="thumb-info-footer">
                                            <div class="pro-rating">
                                                <?php if (isset($post_meta['product_ratings'][0])) : ?>
                                                    <?php for ($i = 0; $i < $post_meta['product_ratings'][0]; $i++) : ?>
                                                        <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                    <?php endfor; ?>
                                                <?php else : ?>
                                                    <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <?php endif; ?>
                                            </div>
                                            <ul class="action-button">
                                                <li>
                                                    <a href="<?php echo $link;?>" title="Quickview"><i class="zmdi zmdi-zoom-in"></i></a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $link; ?>" title="Add to cart" class="kcartAddToCartButton" productId="<?php echo $post_meta['productId'][0]; ?>"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                </li>
                                            </ul>
                                          </div>

                                        </div>
                                      </div>
                                      <?php
                                              endwhile;
                                              wp_reset_postdata();
                                          endif;
                                      ?>
                                  </div>
                                </section>



                                <!-- product-item end -->

                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SHOP SECTION END -->
</section>
<!-- End page content -->
<?php get_footer(); ?>
