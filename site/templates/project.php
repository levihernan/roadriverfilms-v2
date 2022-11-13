<?php snippet('header') ?>
<?php echo css('assets/css/horizontal-scroll.css') ?>
<?php echo js('assets/js/jquery.mousewheel.js') ?>
<script>
	$(function(){
		$("#page-wrap").wrapInner("<table cellspacing='30'><tr>");
		$(".post").wrap("<td></td>");
		$("#page-wrap").mousewheel(function(event, delta) {
			this.scrollLeft -= (delta * 30);
            if ($(window).width() < 1080) {
            }
            else {
               //event.preventDefault();
            }
		});
	});
</script>

<?php if( page()->imgFirst()->bool() ): ?>
	<style media="screen">
	@media screen and (max-width: 70em) {
		tr {
			flex-direction: column-reverse;
		}
	}
	</style>
<?php endif ?>

  <main class="main" role="main">
    <div id="page-wrap" class="imagenes">
            <div class="">
							<div class="post text">
          		<span class="section-link smol-bold"><?php echo $page->title()->html() ?></span>
							<?php if ($page->extra()!=""): ?>
								<span class="smol"> <?= $page->extra() ?></span>
							<?php endif ?>
							<div class="section-text">
								<?php echo $page->text()->kirbytext() ?>
							</div>
							<p id="logotype">Road River Films</p>
            </div>
        </div>

        <?php if ($page->body()!=""): ?>
	        <div class="post text justify">
	          <?php echo $page->body()->kirbytext() ?>
	        </div>
        <?php endif ?>

        <?php foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
	        <div class="post">
	            <img draggable="false" src="<?php echo $image->url() ?>" alt="<?php echo $page->title()->html() ?>">
	        </div>
        <?php endforeach ?>

    </div>
  </main>

<?php snippet('footer') ?>
