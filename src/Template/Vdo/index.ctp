<section class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="text-center mx-auto g-max-width-600 g-mb-50 g-pt-15">
                <h2 class="g-color-primary f-promppt-500 mb-4">วิดีโอ</h2>
                <p class="lead"></p>
            </div>
        </div>
    </div>
</section>

<section class="container clearfix g-mb-50">

<div class="row no-gutters">
	<?php foreach ($vdos as $key => $item): ?>
		<div class="col-md-3 col-6">
			<div class="embed-responsive embed-responsive-21by9">
                <video class="img-responsive" controls>
                    <source src="<?=SITE_URL.$item->path?>" type="video/mp4">
                    
                    Your browser does not support the video tag.
                </video>
        	</div>
		</div>

	<?php endforeach; ?>
	
</div>
</section>