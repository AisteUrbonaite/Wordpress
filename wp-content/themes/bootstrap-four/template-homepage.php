<?php /* Template Name: Naujienos */ ?>
<?php get_header( ); ?>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1" class=""></li>
        <li data-target="#myCarousel" data-slide-to="2" class=""></li>
        <li data-target="#myCarousel" data-slide-to="3" class=""></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img class="image-shadow" src="<?php echo get_stylesheet_directory_uri(); ?>/images/Ausros.jpg"/>
            <div class="carousel-caption">
                <h2>KVIEČIAME MOKYTIS KAUNO „AUŠROS“ GIMNAZIJOJE</h2>
                <a class="btn btn-primary btn-moreinfo" href="#"><h4>Daugiau</h4></a>
            </div>

        </div>

        <div class="item">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/2.jpg"/>
        </div>

        <div class="item">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/3.jpg"/>
        </div>

        <div class="item">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/4.jpg"/>
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Ankstesnis</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Kitas</span>
    </a>

</div>
    <!-- Start the Loop. -->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <!-- Test if the current post is in category 3. -->
    <!-- If it is, the div box is given the CSS class "post-cat-three". -->
    <!-- Otherwise, the div box is given the CSS class "post". -->

    /<?php if ( in_category( '3' ) ) : ?>
    <div class="post-cat-three">
        <?php else : ?>
        <div class="post">
            <?php endif; ?>


            <!-- Display the Title as a link to the Post's permalink. -->

            <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>


            <!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author. -->

            <small><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></small>


            <!-- Display the Post's content in a div box. -->

            <div class="entry">
                <?php the_content( ); ?>
            </div>


            <!-- Display a comma separated list of the Post's Categories. -->

            <p class="postmetadata"><?php _e( 'Posted in' ); ?> <?php the_category( ', ' ); ?></p>
        </div> <!-- closes the first div box -->


        <!-- Stop The Loop (but note the "else:" - see next line). -->

        <?php endwhile; else : ?>


            <!-- The very first "if" tested to see if there were any Posts to -->
            <!-- display.  This "else" part tells what do if there weren't any. -->
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>


            <!-- REALLY stop The Loop. -->
        <?php endif; ?>
<?php get_footer(); ?>