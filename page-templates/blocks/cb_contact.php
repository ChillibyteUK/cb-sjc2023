<section class="contact">
    <div class="container-xl">
        <div class="row">
            <div class="col-md-6">ADDR</div>
            <div class="col-md-6"><iframe src="<?=get_field('maps_url','options')?>" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
            <div class="col-12">
                <h2>Loan Enquiry</h2>
            <?=do_shortcode('[gravityform id="1" title="false"]')?>
            </div>
        </div>
    </div>
</section>