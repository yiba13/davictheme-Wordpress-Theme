<?php get_header(); ?>
    <div class="row">
        <div class="col-sm-12 col-md-9">
            <div class="panel panel-default">
                <?php if(have_posts()): ?>
                <?php while(have_posts()):the_post(); ?>
                <article class="vc-blog">
                    <h1 class="vc-blog-title"><?php the_title(); ?></h1>
                    <p class="vc-author-info">
                        <time>
                            <?php echo get_the_date( 'Y-m-d'); ?>
                        </time> &bull;
                        <span><?php echo get_the_author(); ?></span> &bull;
                        <span><a href=""><?php comments_popup_link( '0','1','%');?>条评论</a></span> &bull;
                        	<span><?php post_views(' ', ' 次浏览'); ?></span>
                    </p>
                    <div class="vc-blog-content">
                        <?php the_content(); ?>
                    </div>
                    <span class="vc-tags">
                            <?php the_tags('',' ',''); ?>
                        </span>
                    <div class="vc-copyright">
                        本站文章除注明转载外，均为原创文章。转载请注明：文章转载自
                        <?php bloginfo( 'name'); ?>（
                        <a href="<?php bloginfo('url'); ?>">
                            <?php bloginfo( 'url'); ?>
                        </a>）。如有侵权，请联系删除。
                    </div>
		 </article>
                <?php endwhile; ?>
                <?php endif;?>
            </div>
            <nav>
                <ul class="pager">
                    <li class="previous">
                        <?php next_post_link( '%link','<i class="fa fa-angle-left"></i> '.'%title'); ?>
                    </li>
                    <li class="next">
                       <?php previous_post_link( '%link','%title'.' <i class="fa fa-angle-right"></i>'); ?>
                    </li>
                </ul>
            </nav>
            <hr>
<div class="related-posts">
<h3>相关文章</h3>
<ul class="related_posts">
<?php
$post_num = 8;
$exclude_id = $post->ID;
$posttags = get_the_tags();
$i = 0;
if ($posttags) {
    $tags = '';
    foreach ($posttags as $tag) $tags.= $tag->term_id . ',';
    $args = array(
        'post_status' => 'publish',
        'tag__in' => explode(',', $tags) ,
        'post__not_in' => explode(',', $exclude_id) ,
        'caller_get_posts' => 1,
        'orderby' => 'comment_date',
        'posts_per_page' => $post_num,
    );
    query_posts($args);
    while (have_posts()) {
        the_post(); ?>
<li><a rel="bookmark" href="<?php
        the_permalink(); ?>" title="<?php
        the_title(); ?>" target="_blank" style="color: #00ccff;"><?php
        the_title(); ?></a></li>
<?php
        $exclude_id.= ',' . $post->ID;
        $i++;
    }
    wp_reset_query();
}
if ($i < $post_num) {
    $cats = '';
    foreach (get_the_category() as $cat) $cats.= $cat->cat_ID . ',';
    $args = array(
        'category__in' => explode(',', $cats) ,
        'post__not_in' => explode(',', $exclude_id) ,
        'caller_get_posts' => 1,
        'orderby' => 'comment_date',
        'posts_per_page' => $post_num - $i
    );
    query_posts($args);
    while (have_posts()) {
        the_post(); ?>
<li><a rel="bookmark" href="<?php
        the_permalink(); ?>"  title="<?php
        the_title(); ?>" target="_blank" style="color: #00ccff;"><?php
        the_title(); ?></a></li>
<?php
        $i++;
    }
    wp_reset_query();
}
if ($i == 0) echo '<li>没有相关文章!</li>';
?>
</ul>
</div>     	
            <?php comments_template(); ?>
        </div>
        <?php get_sidebar( 'right'); ?>
    </div>
</div>
<?php get_footer(); ?>
