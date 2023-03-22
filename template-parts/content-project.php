<?php
$projectUrl = get_post_meta($post->ID, 'project_url', true);
$projectAdditionalDescription = get_post_meta($post->ID, 'additional_description', true);
$projectAdditionalImage = wp_get_attachment_image_url(get_post_meta($post->ID, 'additional_image', true), '');
$projectFeature = get_post_meta($post->ID, 'project_video', true);
$projectTagline = get_post_meta($post->ID, 'project_tagline', true);
$projectCategory = get_post_meta($post->ID, 'project_category', true);
$projectImage = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full')[0];
$experienceRelated = get_post_meta($post->ID, 'project_experience', true);
?>

<!-- Section 1 -->
<section class="container mb-5" id="bio">
    <a href="<?php echo home_url('/') ?>">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/arrow-back.png" width="40px" height="40px" />
    </a>
</section>

<!-- Section Working on -->
<section class="container" id="showcase">
    <div class="row">
        <div class="head">
            <?php if (!empty($projectCategory)) : ?>
                <span class="tag"><?= $projectCategory ?></span>
            <?php endif; ?>
            <h2><?php echo $post->post_title ?></h2>
        </div>
        <?php if (!empty($projectTagline)) : ?>
            <p><?= $projectTagline ?></p>
        <?php endif; ?>
    </div>

    <!-- Working projects -->
    <div class="content">
        <?php if (!empty($projectFeature)) : ?>
            <iframe width="100%" height="600px" src="<?php echo $projectFeature ?>" frameborder="0" allowfullscreen></iframe>
        <?php else : ?>
            <img src="<?php echo $projectImage ?>" alt="" srcset="" width="100%" height="600" />
        <?php endif; ?>

        <div class="description">

            <?php if (!empty($experienceRelated)) : ?>
                <span>Company: <?= get_the_title($experienceRelated) ?></span>
            <?php endif; ?>

            <?php if (!empty($projectUrl)) : ?>
                <h5>Project URL: <span><a href="<?php echo $projectUrl ?>" target="_blank" rel="noopener noreferrer"><?php echo $projectUrl ?></a></span></h5>
            <?php endif; ?>
            <p>
                <?php echo $post->post_content ?>
            </p>
        </div>
    </div>

    <div class="additional-info">
        <?php if (!empty($projectAdditionalDescription)) : ?>
            <h3>
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/mark.png" /> <?php echo $projectAdditionalDescription ?? 'Additional Info' ?>
            </h3>
        <?php endif; ?>
        <img src="<?php echo $projectAdditionalImage ?>" alt="" srcset="" width="100%" height="600px" />
    </div>
</section>