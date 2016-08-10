<main class="container">
	<div class="row">
		<section class="col-md-12 right_content">
			<?php if ( function_exists('yoast_breadcrumb')) 
    			{yoast_breadcrumb('<ol class="breadcrumb">','</ol>');} ?>
			<h1><?the_title();?></h1>
			<?the_content();?>
		</section>
	</div>
</main>