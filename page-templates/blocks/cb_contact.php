<section class="contact">
    <div class="container-xl">
        <div class="row g-4">
            <div class="col-md-6">
                <h2>Contact Us</h2>
                <ul class="fa-ul">
                    <li class="mb-4"><span class="fa-li"><i class="fa-solid fa-phone"></i></span> <a href="tel:<?=parse_phone(get_field('contact_phone','options'))?>"><?=get_field('contact_phone','options')?></a></li>
                    <li class="mb-4"><span class="fa-li"><i class="fa-solid fa-map-marer-alt"></i></span> <?=get_field('contact_address','options')?></li>
                </ul>
            </div>
            <div class="col-md-6"><iframe src="<?=get_field('maps_url','options')?>" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
            <div class="col-12">
                <h2>Loan Enquiry</h2>
            <?=do_shortcode('[gravityform id="1" title="false"]')?>
            </div>
        </div>
    </div>
</section>