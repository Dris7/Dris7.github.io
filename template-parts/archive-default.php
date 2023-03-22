<?php

/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package My_Portfolio
 */


$working = '';
$projects = '';
$experiences = '';
$certifications = '';
$badges = '';
$educations = '';
$skills = '';

if (!empty($_GET['p'])) {
    $args = [
        'post_type' => $_GET['p'],
        'numberposts' => -1,
        'orderby'  => 'post_date',
        'order'    => 'DESC',
    ];

    switch ($_GET['p']) {
        case 'working':
            $args['post_type'] = 'project';
            $args['meta_query'][] = array(
                'key'     => 'project_status',
                'value'   => 'working',
                'compare' => '=',
            );
            $working = get_posts($args);
            break;
        case 'project':
            $args['meta_query'][] = array(
                'key'     => 'project_status',
                'value'   => 'complete',
                'compare' => '=',
            );
            $projects = get_posts($args);
            break;
        case 'experience':
            $experiences = get_posts($args);
            break;
        case 'certification':
            $certifications = get_posts($args);
            break;
        case 'badge':
            $badges = get_posts($args);
            break;
        case 'education':
            $educations = get_posts($args);
            break;
        case 'skill':
            $skills = get_posts($args);
            break;
        default:
            break;
    }
}
?>

<!-- Section 1 -->
<section class="container mb-0 pb-0 pt-3" id="bio">
    <a href="<?php echo home_url('/') ?>">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/arrow-back.png" width="40px" height="40px" />
    </a>
</section>

<!-- Section Working on -->
<?php if (!empty($working)) : ?>
    <section class="container" id="working">
        <div class="row">
            <div class="head">
                <h2>What I’m working on</h2>
            </div>
        </div>

        <!-- Working projects -->
        <div class="row g-4">
            <?php foreach ($working as $work) : ?>
                <?php $category = get_post_meta($work->ID, 'project_category', true) ?>
                <?php $video = get_post_meta($work->ID, 'project_video', true) ?>
                <div class="col-md-6">
                    <div class="card">
                        <a href="<?php echo get_permalink($work->ID) ?>" class="item">
                            <?php if (empty($video)) : ?>
                                <img src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id($work->ID), 'single-post-thumbnail')[0] ?>" class="card-img-top" alt="..." />
                            <?php else : ?>
                                <iframe width="100%" height="235px" src="<?php echo $video ?>" frameborder="0" allowfullscreen></iframe>
                            <?php endif; ?>
                            <div class="card-body">
                                <h5 class="card-title"><?= $work->post_title ?></h5>
                                <?php if (!empty($category)) : ?>
                                    <span class="tag"><?= $category ?></span>
                                <?php endif; ?>
                            </div>
                        </a>
                        <p class="card-text"><?= wp_trim_words($work->post_content, 50, '...'); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
<?php endif; ?>

<!-- Projects list -->
<?php if (!empty($projects)) : ?>
    <section class="container" id="projects">
        <div class="row">
            <div class="head">
                <h2>Projects</h2>
            </div>
        </div>

        <!-- Projects worked -->
        <div class="row g-4">
            <?php foreach ($projects as $project) :  ?>
                <?php $category = get_post_meta($project->ID, 'project_category', true) ?>
                <?php $video = get_post_meta($project->ID, 'project_video', true) ?>
                <div class="col-md-6">
                    <div class="card">
                        <a href="<?php echo get_permalink($project->ID) ?>" class="item">
                            <?php if (empty($video)) : ?>
                                <img src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id($project->ID), 'single-post-thumbnail')[0] ?>" class="card-img-top" alt="..." />
                            <?php else : ?>
                                <iframe width="100%" height="235px" src="<?php echo $video ?>" frameborder="0" allowfullscreen></iframe>
                            <?php endif; ?>
                            <div class="card-body">
                                <h5 class="card-title"><?= $project->post_title ?></h5>
                                <?php if (!empty($category)) : ?>
                                    <span class="tag"><?= $category ?></span>
                                <?php endif; ?>
                            </div>
                        </a>
                        <p class="card-text"><?= wp_trim_words($project->post_content, 50, '...'); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
<?php endif; ?>

<!-- Experience -->
<?php if (!empty($experiences)) : ?>
    <section class="container" id="experience">
        <div class="row">
            <div class="head">
                <h2>Experience</h2>
            </div>
        </div>
        <div class="row g-4">
            <?php foreach ($experiences as $experience) : ?>
                <?php
                $location = get_post_meta($experience->ID, 'experience_location', true) ?? '';
                $company = get_post_meta($experience->ID, 'experience_company', true) ?? '';
                $title = get_post_meta($experience->ID, 'experience_title', true) ?? '';
                $projectsRelated = get_post_meta($experience->ID, 'experience_project', true) ?? [];
                $startDate = date('F, Y', strtotime(get_post_meta($experience->ID, 'experience_start_date', true))) ?? '';
                $endDate = date('F, Y', strtotime(get_post_meta($experience->ID, 'experience_end_date', true))) ?? '';
                ?>
                <?php
                $order = get_post_meta($experience->ID, 'order_main', true);
                $order = $order ? $order : 5;
                ?>
                <div class="col-md-12" style="order:<?= $order ?>">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><?= $experience->post_title ?></h5>
                            <span class="title"><?= $company . ', ' . $title ?></span><br>
                            <span class="tag"><?= $location . ' | ' . $startDate . ' - ' . $endDate ?></span>
                            <p class="card-text"><?= $experience->post_content ?></p>
                            <?php if ($projectsRelated) : ?>
                                <ul>
                                    <?php foreach ($projectsRelated as $project) : ?>
                                        <li><?= get_the_title($project) ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
<?php endif; ?>

<!-- Achievements Type - Certifications -->
<?php if (!empty($certifications)) : ?>
    <section class="container" id="achievements">
        <div class="row">
            <div class="head">
                <h2>Certifications</h2>
            </div>
        </div>

        <div class="row g-4">
            <?php foreach ($certifications as $certification) : ?>
                <?php
                $type = get_post_meta($certification->ID, 'achievement_type', true) ?? 'certification';
                if ($type == 'certification') :
                ?>
                    <div class="col-md-6">
                        <div class="card">
                            <img src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id($certification->ID), 'single-post-thumbnail')[0]; ?>" class="card-img-top" alt="..." />
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </section>
<?php endif; ?>

<!-- Achievements Type - Badges -->
<?php if (!empty($badges)) : ?>
    <section class="container" id="badges">
        <div class="row">
            <div class="head">
                <h2>Badges & Skills</h2>
            </div>
        </div>

        <div class="row g-4">
            <?php foreach ($badges as $badge) : ?>
                <?php
                $type = get_post_meta($badge->ID, 'badge_type', true) ?? '';
                $url = get_post_meta($badge->ID, 'badge_url', true) ?? '#';
                ?>
                <div class="col-md-6">
                    <a href="<?php echo $url ?>">
                        <div class="card">
                            <?php if ($type == 'image') : ?>
                                <img src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id($badge->ID), 'single-post-thumbnail')[0]; ?>" class="card-img-top" alt="..." />
                            <?php else : ?>
                                <ul class=" px-3">
                                    <li><?= $badge->post_title ?></li>
                                </ul>
                            <?php endif; ?>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
<?php endif; ?>

<!-- Education -->
<?php if (!empty($educations)) : ?>
    <section class="container" id="education">
        <div class="row">
            <div class="head">
                <h2>Educations</h2>
            </div>
        </div>
        <div class="row g-4">
            <?php foreach ($educations as $education) : ?>
                <?php
                $location = get_post_meta($education->ID, 'education_location', true) ?? '';
                $startDate = date('F, Y', strtotime(get_post_meta($education->ID, 'education_start_date', true))) ?? '';
                $endDate = date('F, Y', strtotime(get_post_meta($education->ID, 'education_end_date', true))) ?? '';
                ?>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><?= $education->post_title ?></h5>
                            <span class="tag"><?= $location . ' ' . $startDate . ' - ' . $endDate ?></span>
                            <p class="card-text"><?= $education->post_content ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
<?php endif; ?>