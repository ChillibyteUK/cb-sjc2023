<?php
// Exit if accessed directly.
defined('ABSPATH') || exit;
get_header();
$img = get_the_post_thumbnail_url(get_the_ID(),'full');
?>
<main id="main" class="blog">
    <section class="breadcrumbs container-xl mt-2">
    <?php
    if (function_exists('yoast_breadcrumb')) {
        yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
    }
    ?>
    </section>
    <div class="container-xl">
        <div class="row mb-4">
            <div class="col-md-3 mb-4">
                <div class="deal__sidebar pe-md-4">
                    <div class="deal__intro">Financial Intermediary For</div>
                    <div class="deal__title"><?=get_field('deal_title')?></div>
                    <div class="deal__value">&pound;<?=number_format(get_field('deal_value'))?></div>
                    <div class="deal__description_pre"><?=get_field('description_pre_title')?></div>
                    <div class="deal__description"><?=get_field('description')?></div>
                    <div class="deal__finance_pre"><?=get_field('finance_pre_title')?></div>
                    <div class="deal__finance"><?=get_field('finance_detail')?></div>
                    <div class="deal__date"><?=get_field('deal_date')?></div>
                </div>
            </div>
            <div class="col-md-9">
                <h1><?=get_the_title()?></h1>
                <?=apply_filters('the_content',get_field('deal_details'))?>
            </div>
        </div>
        <section class="related pb-5">
            <h3>Related Deals</h3>
            <div class="row g-4">
            <?php
            $cats = get_the_category();
            $ids = wp_list_pluck($cats,'term_id');
            $r = new WP_Query(array(
                'post_type' => 'deals',
                'posts_per_page' => 3,
                'post__not_in' => array(get_the_ID())
            ));
            while ($r->have_posts()) {
                $r->the_post();
                ?>
                <div class="col-md-6 col-xl-3">
                    <a class="blog_card" href="<?=get_the_permalink()?>">
                        <div class="blog_card__content">
                            <h3 class="blog_card__title"><?=get_the_title()?></h3>
                        </div>
                    </a>
                </div>
                <?php
            }
            ?>
            </div>
        </section>
    </div>
</main>
<?php
get_footer();