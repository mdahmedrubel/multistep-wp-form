<?php
get_header();

if (have_posts()) :
    while (have_posts()) : the_post(); ?>
        <div class="container">
            <div class="row">
                <article class="csf-travel-single" id="csf-post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
                        <h1 class="entry-title"><?php the_title(); ?></h1>
                    </header>
                    <div class="entry-content">
                        <table>
                            <tr>
                                <th>Field</th>
                                <th>Value</th>
                            </tr>
                            <tr>
                                <td><strong>Occasion:</strong></td>
                                <td><?php echo esc_html(get_post_meta(get_the_ID(), 'occassion', true)); ?></td>
                            </tr>
                            <tr>
                                <td><strong>Destination:</strong></td>
                                <td><?php echo esc_html(get_post_meta(get_the_ID(), 'headed', true)); ?></td>
                            </tr>
                            <tr>
                                <td><strong>Start Date:</strong></td>
                                <td><?php echo esc_html(get_post_meta(get_the_ID(), 'startdate', true)); ?></td>
                            </tr>
                            <tr>
                                <td><strong>End Date:</strong></td>
                                <td><?php echo esc_html(get_post_meta(get_the_ID(), 'enddate', true)); ?></td>
                            </tr>
                            <tr>
                                <td><strong>Departure Time:</strong></td>
                                <td><?php echo esc_html(get_post_meta(get_the_ID(), 'starttime', true)); ?></td>
                            </tr>
                            <tr>
                                <td><strong>Departure Time:</strong></td>
                                <td><?php echo esc_html(get_post_meta(get_the_ID(), 'endtime', true)); ?></td>
                            </tr>
                            <tr>
                                <td><strong>Wellcome Message:</strong></td>
                                <td><?php echo esc_html(get_post_meta(get_the_ID(), 'group', true)); ?></td>
                            </tr>
                        </table>
                    </div>
                </article>
            </div>
        </div>
<?php 
endwhile;
endif;

get_footer();
