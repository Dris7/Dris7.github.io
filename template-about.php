<?php get_header(); ?>

<?php
$aboutImage = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full')[0];
if (!$aboutImage) {
    $aboutImage = get_template_directory_uri() . '/assets/img/default.jpg';
}
?>
<!-- Section 1 -->
<section class="container mb-5" id="bio">
    <a href="<?php echo home_url('/') ?>">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/arrow-back.png" width="40px" height="40px" />
    </a>
</section>

<section class="container" id="showcase">
    <div class="row">
        <div class="head">
            <h2>Who am I</h2>
        </div>
    </div>

    <div class="content">
        <img src="<?php echo $aboutImage ?>" alt="" srcset="" width="100%" height="600" />

        <div class="description">
            <p>
                <?php echo $post->post_content ?>
            </p>
        </div>
    </div>
</section>

<?php get_footer(); ?>