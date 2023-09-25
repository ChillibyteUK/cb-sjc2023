<section class="team_detail">
    <div class="container-xl py-5">
        <?php
        $q = new WP_Query(array(
            'post_type' => 'people',
            'posts_per_page' => -1
        ));
        while ($q->have_posts()) {
            $q->the_post();
            $slug = acf_slugify(get_the_title());
            ?>
        <a class="anchor" id="<?=$slug?>"></a>
            <div class="row mb-4">
                <div class="col-md-3">
                    <img class="team_detail__image" src="<?=get_the_post_thumbnail_url($q->ID,'large')?>" alt="<?=get_the_title()?>">
                </div>
                <div class="col-md-9">
                    <h2 class="team_detail__name"><?=get_the_title()?></h2>
                    <div class="team_detail__role"><?=get_field('role',get_the_ID())?></div>
                    <div class="mb-4"><?=get_field('biography',get_the_ID())?></div>
                    <div class="team_detail__meta">
                        <?php
                        if (get_field('email_address',get_the_ID())) {
                            ?>
                        <a href="mailto:<?=get_field('email_address',get_the_ID())?>"><i class="fa-solid fa-envelope"></i></a>
                            <?php
                        }
                        if (get_field('linkedin_profile',get_the_ID())) {
                            ?>
                        <a href="<?=get_field('linkedin_profile',get_the_ID())?>" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </a>
                <?php
            }
        ?>
    </div>
</section>