<?php global $archi_option; $link_video = get_post_meta(get_the_ID(),'_cmb_link_video', true); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class('wow fadeInUp'); ?>>
    <div class="post-content">
        <div class="post-image">
            <?php if($link_video != ''){ ?>
                <?php echo rwmb_meta( '_cmb_link_video', 'type=oembed' ); // if you want get url: $url = get_post_meta( get_the_ID(), '_cmb_link_video', true ); echo $url; ?>                        
            <?php }else{ ?>
                <?php if ( has_post_thumbnail() ) : ?>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                        <?php the_post_thumbnail('full'); ?>
                    </a>
                <?php endif; ?>
            <?php } ?>
        </div>
        <div class="entry-summary clearfix">
          <div class="date-box">
            <div class="day"><?php the_time('d'); ?></div>
            <div class="month"><?php the_time('M'); ?></div>
          </div>
          <div class="post-text">
            <?php the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' ); ?>
            <p><?php echo archi_excerpt(); ?></p>
          </div>  
        </div><!-- .entry-content -->
        <a href="<?php the_permalink(); ?>" class="btn-more"><?php if ($archi_option['blog_btntext'] != ''){ echo esc_attr($archi_option['blog_btntext']); }else{ esc_html_e('Read More', 'archi'); } ?></a>
    </div>
</article>