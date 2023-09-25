<?php
$img = wp_get_attachment_image_url(get_field('background'), 'full');// ?? null;
?>
<section class="hero d-flex" style="background-image:url(<?=$img?>)">
    <div class="container-xl d-flex flex-column justify-content-center">
        <div class="row">
            <div class="col-md-6">
                <h1 class="animtitle">
                    <?=get_field('title')?>
                </h1>
            </div>
        </div>
    </div>
</section>