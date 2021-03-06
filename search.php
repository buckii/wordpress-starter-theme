<?php
/**
 * Search results template
 *
 * @package %Theme_Name%
 * @author %Author%
 */

get_header();?>

<?php get_template_part('block', 'page-banner');?>

<div id="content" class="container">

  <?php if (have_posts()): ?>

    <?php get_search_form();?>

    <?php while (have_posts()): the_post();?>

      <?php get_template_part('content', 'index');?>

    <?php endwhile;?>

    <?php echo themenameGetPagination(); ?>

  <?php else: ?>

    <p><?php printf(__('Our apologies but there\'s nothing that matches your search for "%s"', '%Text_Domain%'), get_search_query());?></p>
    <?php get_search_form();?>

  <?php endif;?>

</div><!-- #content -->

<?php get_footer();?>