<?php snippet('header') ?>

<div class="flexbox">

  <video autoplay muted loop id="myVideo">
    <source src="assets/images/ship.mp4" type="video/mp4">
    Your browser does not support HTML5 video.
  </video>

  <div class="content">
    <h1>Road River Films</h1>
    <p><span class="quote">“<?= page()->quote() ?>"</span><br><span class="quoted"><?= page()->author() ?></span></p>
    <p>info@roadriverfilms.com</p>
  </div>

  <div class="content content-right">

    <?php foreach(page()->children() as $page):?>

      <a class="section-link" href="<?= $page->url() ?>">
        <h2>
          <?= $page->title() ?>
        </h2>
      </a>

    <?php endforeach ?>

  </div>

</div>

<?php snippet('footer') ?>
