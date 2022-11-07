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

  <main class="main" role="main">
    <div id="page-wrap" class="imagenes">
        <div class="post text">
            <div class="">
          		<h1><?php echo $page->title()->html() ?></h1>
          		<?php echo $page->text()->kirbytext() ?>
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
