<?php

/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package My_Portfolio
 */

//  Get options
$aboutTopHeading = get_option('about_top_heading') ?? 'Front-End Developer';
$aboutHeading = get_option('about_heading') ?? 'Looking for a Web Developer?';
$aboutDescription = get_option('about_description') ?? 'I enjoy building everything from small business sites to rich
interactive weeb apps. If you’re looking for web development
services get in touch';
$aboutMoreUrl = get_option('about_more_url') ?? '';
$aboutType = get_option('about_type');
$aboutImage = get_option('about_image');
$aboutVideo = get_option('about_video');



// Working on CPT
$workingOnPosts = [
    'post_type' => 'project',
    'numberposts' => -1,
    'meta_query' => array(
        'relation' => 'AND',
        array(
            'key'     => 'project_status',
            'value'   => 'working',
            'compare' => '=',
        ),
        array(
            'relation'    => 'OR',
            'order_main'    => array(
                'key'     => 'order_main',
                'type'    => 'NUMERIC',
                'compare' => 'EXISTS',
            ),
            'show_main' => array(
                'key'       => 'show_main',
                'compare'   => 'EXISTS',
                'value'     => 'show',
                'operator'  => '=',
            )
        ),
    ),
    'orderby' => [
        'show_main' => 'DESC',
        'order_main' => 'DESC',
    ]
];
$working = get_posts($workingOnPosts);

// Project on CPT
$projectsMade = [
    'post_type' => 'project',
    'numberposts' => -1,
    'meta_query' => array(
        'relation' => 'AND',
        array(
            'key'     => 'project_status',
            'value'   => 'complete',
            'compare' => '=',
        ),
        array(
            'relation'    => 'OR',
            'order_main'    => array(
                'key'     => 'order_main',
                'type'    => 'NUMERIC',
                'compare' => 'EXISTS',
            ),
            'show_main' => array(
                'key'       => 'show_main',
                'compare'   => 'EXISTS',
                'value'     => 'show',
                'operator'  => '=',
            ),
            'other_clause' => array(
                'relation' => 'OR',
                array(
                    'key' => 'show_main',
                    'compare' => 'NOT EXISTS'
                ),
                array(
                    'key' => 'order_main',
                    'compare' => 'NOT EXISTS'
                )
            )
        ),
    ),
    'orderby' => [
        'show_main' => 'DESC',
        'order_main' => 'DESC',
    ]
];
$projects = get_posts($projectsMade);

// Experience on CPT
$experienceAdquired = [
    'post_type' => 'experience',
    'numberposts' => -1,
    'meta_query' => array(
        'relation'    => 'OR',
        'order_main'    => array(
            'key'     => 'order_main',
            'type'    => 'NUMERIC',
            'compare' => 'EXISTS',
        ),
        'show_main' => array(
            'key'       => 'show_main',
            'compare'   => 'EXISTS',
            'value'     => 'show',
            'operator'  => '=',
        ),
        'other_clause' => array(
            'relation' => 'OR',
            array(
                'key' => 'show_main',
                'compare' => 'NOT EXISTS'
            ),
            array(
                'key' => 'order_main',
                'compare' => 'NOT EXISTS'
            )
        )
    ),
    'orderby' => [
        'show_main' => 'DESC',
        'order_main' => 'DESC',
    ]
];
$experiences = get_posts($experienceAdquired);

// Certification on CPT
$certAdquired = [
    'post_type' => 'certification',
    'numberposts' => -1,
    'meta_query' => array(
        'relation'    => 'OR',
        'order_main'    => array(
            'key'     => 'order_main',
            'type'    => 'NUMERIC',
            'compare' => 'EXISTS',
        ),
        'show_main' => array(
            'key'       => 'show_main',
            'compare'   => 'EXISTS',
            'value'     => 'show',
            'operator'  => '=',
        ),
        'other_clause' => array(
            'relation' => 'OR',
            array(
                'key' => 'show_main',
                'compare' => 'NOT EXISTS'
            ),
            array(
                'key' => 'order_main',
                'compare' => 'NOT EXISTS'
            )
        )
    ),
    'orderby' => [
        'show_main' => 'DESC',
        'order_main' => 'DESC',
    ]
];
$certifications = get_posts($certAdquired);

// Badge on CPT
$badgeAdquired = [
    'post_type' => 'badge',
    'numberposts' => -1,
    'meta_query' => array(
        'relation'    => 'OR',
        'order_main'    => array(
            'key'     => 'order_main',
            'type'    => 'NUMERIC',
            'compare' => 'EXISTS',
        ),
        'show_main' => array(
            'key'       => 'show_main',
            'compare'   => 'EXISTS',
            'value'     => 'show',
            'operator'  => '=',
        ),
        'other_clause' => array(
            'relation' => 'OR',
            array(
                'key' => 'show_main',
                'compare' => 'NOT EXISTS'
            ),
            array(
                'key' => 'order_main',
                'compare' => 'NOT EXISTS'
            )
        )
    ),
    'orderby' => [
        'show_main' => 'DESC',
        'order_main' => 'DESC',
    ]
];
$badges = get_posts($badgeAdquired);

// Education on CPT
$educationCompleted = [
    'post_type' => 'education',
    'numberposts' => -1,
    'meta_query' => array(
        'relation'    => 'OR',
        'order_main'    => array(
            'key'     => 'order_main',
            'type'    => 'NUMERIC',
            'compare' => 'EXISTS',
        ),
        'show_main' => array(
            'key'       => 'show_main',
            'compare'   => 'EXISTS',
            'value'     => 'show',
            'operator'  => '=',
        ),
        'other_clause' => array(
            'relation' => 'OR',
            array(
                'key' => 'show_main',
                'compare' => 'NOT EXISTS'
            ),
            array(
                'key' => 'order_main',
                'compare' => 'NOT EXISTS'
            )
        )
    ),
    'orderby' => [
        'show_main' => 'DESC',
        'order_main' => 'DESC',
    ]
];
$educations = get_posts($educationCompleted);

?>

<!-- Section 1 -->
<section class="container" id="bio">
    <div class="row align-items-center">
        <div class="col-md-6">
            <div class="content">
                <span class="tag"><?= $aboutTopHeading ?></span>
                <h1 class="heading"><?= $aboutHeading ?></h1>
                <p><?= html_entity_decode( $aboutDescription ); ?></p>
                <?php  if( $aboutMoreUrl ){ ?> 
                         <a href="<?php echo $aboutMoreUrl; ?>" class="btn btn-primary">Learn More</a>
                <?php } ?>
            </div>
        </div>
        <?php if (!empty($aboutType)) : ?>
            <div class="col-md-6 text-center">
                <?php if ($aboutType == 'image') : ?>
                    <img src="<?php echo wp_get_attachment_image_url($aboutImage, 'full') ?>" alt="">
                <?php elseif ($aboutType == 'video') : ?>
                    <iframe width="100%" height="300px" src="<?php echo $aboutVideo ?>" frameborder="0" allowfullscreen></iframe>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</section>

<!-- Section Working on -->
<section class="container" id="working">
    <div class="row">
        <div class="head">
            <h2>What I’m working on</h2>
        </div>
    </div>

    <!-- Working projects -->
    <?php if (empty($working)) : ?>
        <div class="row g-4">
            <?php for ($i = 0; $i < 4; $i++) : ?>
                <div class="col-md-6">
                    <div class="card">
                        <a href="" class="item">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/example.jpg" class="card-img-top" alt="..." />
                            <div class="card-body">
                                <h5 class="card-title">Work title</h5>
                                <span class="tag">Front-End Developer</span>
                            </div>
                        </a>
                        <p class="card-text">
                            This is a longer card with supporting text.
                        </p>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    <?php else : ?>
        <div class="row g-4">
            <?php foreach ($working as $key => $work) : ?>
                <?php
                if ($key > 3) {
                    continue;
                }
                ?>
                <?php $category = get_post_meta($work->ID, 'project_category', true) ?>
                <?php $experienceRelated = get_post_meta($work->ID, 'project_experience', true) ?? ''; ?>
                <?php $video = get_post_meta($work->ID, 'project_video', true) ?>
                <?php
                $order = get_post_meta($work->ID, 'order_main', true);
                $order = $order ? $order : 5;
                ?>
                <div class="col-md-6" style="order:<?= $order ?>">
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
                        <p class="card-text"><?= wp_trim_words($work->post_content, 50, '...'); ?> <br>
                            <?php if (!empty($experienceRelated)) : ?>
                                <span>Company: <?= get_the_title($experienceRelated) ?></span>
                            <?php endif; ?>
                        </p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <?php if (count($working) > 4) : ?>
            <div class="learn-more">
                <a href="<?php echo home_url('/?p=working') ?>" class="btn btn-primary">See More</a>
            </div>
        <?php endif; ?>
    <?php endif; ?>
</section>

<!-- Projects list -->
<section class="container" id="projects">
    <div class="row">
        <div class="head">
            <h2>Projects</h2>
        </div>
    </div>

    <!-- Projects worked -->
    <?php if (empty($projects)) : ?>
        <div class="row g-4">
            <?php for ($i = 0; $i < 4; $i++) : ?>
                <div class="col-md-6">
                    <div class="card">
                        <a href="#" class="item">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/example.jpg" class="card-img-top" alt="..." />
                            <div class="card-body">
                                <h5 class="card-title">Work title</h5>
                                <span class="tag">Front-End Developer</span>
                            </div>
                        </a>
                        <p class="card-text">
                            This is a longer card with supporting text.
                        </p>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    <?php else : ?>
        <div class="row g-4">
            <?php foreach ($projects as $key => $project) :  ?>
                <?php
                if ($key > 3) {
                    continue;
                }
                ?>
                <?php $category = get_post_meta($project->ID, 'project_category', true) ?>
                <?php $experienceRelated = get_post_meta($project->ID, 'project_experience', true) ?? ''; ?>
                <?php $video = get_post_meta($project->ID, 'project_video', true) ?>
                <?php
                $order = get_post_meta($project->ID, 'order_main', true);
                $order = $order ? $order : 5;
                ?>
                <div class="col-md-6" style="order:<?= $order ?>">
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
                        <p class="card-text"><?= wp_trim_words($project->post_content, 50, '...'); ?> <br>
                            <?php if (!empty($experienceRelated)) : ?>
                                <span>Company: <?= get_the_title($experienceRelated) ?></span>
                            <?php endif; ?>
                        </p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <?php if (count($projects) > 4) : ?>
            <div class="learn-more">
                <a href="<?php echo home_url('/?p=project') ?>" class="btn btn-primary">See More</a>
            </div>
        <?php endif; ?>
    <?php endif; ?>
</section>

<!-- Experience -->
<section class="container" id="experience">
    <div class="row">
        <div class="head">
            <h2>Experience</h2>
        </div>
    </div>
    <?php if (empty($experiences)) : ?>
        <div class="row g-4">
            <?php for ($i = 0; $i < 4; $i++) : ?>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Experience <?= $i ?></h5>
                            <span class="title">Google, Software Engineer</span><br>
                            <span class="tag">Montréal, QC, Canada | April, 2019 - March 2022</span>
                            <p class="card-text">
                                Full stack web development for investment banking services with emphasis on React.js, Angular, .NET Core based solutions using Test Driven Development methodology
                            </p>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    <?php else : ?>
        <div class="row g-4">
            <?php foreach ($experiences as $key => $experience) : ?>
                <?php
                if ($key > 3) {
                    continue;
                }
                ?>
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
                                <h5 class="experience_projects_related">Projects Related</h5>
                                <ul>
                                    <?php foreach ($projectsRelated as $project) : ?>
                                        <li><a href="<?= get_permalink($project) ?>"><?= get_the_title($project) ?></a></li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <?php if (count($experiences) > 4) : ?>
            <div class="learn-more">
                <a href="<?php echo home_url('/?p=experience') ?>" class="btn btn-primary">See More</a>
            </div>
        <?php endif; ?>
    <?php endif; ?>
</section>

<!-- Achievements Type - Certifications -->
<section class="container" id="achievements">
    <div class="row">
        <div class="head">
            <h2>Certifications</h2>
        </div>
    </div>

    <?php if (empty($certifications)) : ?>
        <div class="row g-4">
            <?php for ($i = 0; $i < 4; $i++) : ?>
                <div class="col-md-6">
                    <div class="card">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/example.jpg" class="card-img-top" alt="..." />
                        <h5>Title</h5>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    <?php else : ?>
        <div class="row g-4">
            <?php foreach ($certifications as $key => $certification) : ?>
                <?php
                if ($key > 3) {
                    continue;
                }
                ?>
                <?php
                $type = get_post_meta($certification->ID, 'achievement_type', true) ?? 'certification';
                $url = get_post_meta($certification->ID, 'certification_url', true) ?? '#';
                ?>
                <?php
                $order = get_post_meta($certification->ID, 'order_main', true);
                $order = $order ? $order : 5;
                ?>
                <div class="col-md-6" style="order:<?= $order ?>">
                    <a href="<?php echo $url ?>" target="_blank">
                        <div class="card">
                            <img src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id($certification->ID), 'single-post-thumbnail')[0]; ?>" class="card-img-top" alt="..." />
                            <h5><?= $certification->post_title ?></h5>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
        <?php if (count($certifications) > 4) : ?>
            <div class="learn-more">
                <a href="<?php echo home_url('/?p=certification') ?>" class="btn btn-primary">See More</a>
            </div>
        <?php endif; ?>
    <?php endif; ?>
</section>

<!-- Achievements Type - Badges -->
<section class="container" id="badges">
    <div class="row">
        <div class="head">
            <h2>Badges & Skills</h2>
        </div>
    </div>

    <?php if (empty($badges)) : ?>
        <div class="row g-4">
            <?php for ($i = 0; $i < 4; $i++) : ?>
                <div class="col-md-6">
                    <div class="card">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/example.jpg" class="card-img-top" alt="..." />
                        <h5>Title</h5>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    <?php else : ?>
        <div class="row g-4">
            <?php foreach ($badges as $key => $badge) : ?>
                <?php
                if ($key > 3) {
                    continue;
                }
                ?>
                <?php $url = get_post_meta($badge->ID, 'badge_url', true) ?? '#'; ?>
                <?php
                $order = get_post_meta($badge->ID, 'order_main', true);
                $order = $order ? $order : 5;
                ?>
                <div class="col-md-6" style="order:<?= $order ?>">
                    <a href="<?php echo $url ?>">
                        <div class="card">
                            <img src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id($badge->ID), 'single-post-thumbnail')[0]; ?>" class="card-img-top" alt="..." />
                            <h5><?= $badge->post_title ?></h5>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
        <?php if (count($badges) > 4) : ?>
            <div class="learn-more">
                <a href="<?php echo home_url('/?p=badge') ?>" class="btn btn-primary">See More</a>
            </div>
        <?php endif; ?>
    <?php endif; ?>
</section>

<!-- Education -->
<section class="container" id="education">
    <div class="row">
        <div class="head">
            <h2>Education</h2>
        </div>
    </div>
    <?php if (empty($educations)) : ?>
        <div class="row g-4">
            <?php for ($i = 0; $i < 4; $i++) : ?>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Education <?= $i ?></h5>
                            <span class="tag">Riga Technical University September, 2013 - May, 2016</span>
                            <p class="card-text">
                                Studies included understanding of different computer vision algorithms and their implementation in practice. Subjects also included 3D modeling and projection theory.
                            </p>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    <?php else : ?>
        <div class="row g-4">
            <?php foreach ($educations as $key => $education) : ?>
                <?php
                if ($key > 3) {
                    continue;
                }
                ?>
                <?php
                $location = get_post_meta($education->ID, 'education_location', true) ?? '';
                $startDate = date('F, Y', strtotime(get_post_meta($education->ID, 'education_start_date', true))) ?? '';
                $endDate = date('F, Y', strtotime(get_post_meta($education->ID, 'education_end_date', true))) ?? '';
                ?>
                <?php
                $order = get_post_meta($education->ID, 'order_main', true);
                $order = $order ? $order : 5;
                ?>
                <div class="col-md-12 education_listing" style="order:<?= $order ?>">
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
        <?php if (count($educations) > 4) : ?>
            <div class="learn-more">
                <a href="<?php echo home_url('/?p=education') ?>" class="btn btn-primary">See More</a>
            </div>
        <?php endif; ?>
    <?php endif; ?>
</section>