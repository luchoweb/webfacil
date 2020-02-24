<?php get_header(); ?>

  <section id="main-content" class="mrg-top">
    <?php if (!is_page('inicio') ) : ?>
      <div class="container">
        <h1 class="title"><?= $post->post_title ?></h1>
      </div>
      <hr>
    <?php endif; ?>

    <?= apply_filters( 'the_content', $post->post_content ) ?>
  </section>

<?php get_footer(); ?>