<?php get_header(); ?>
    <main id="content" class="full">
        <article id="landing">
            <div class="logo">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 307.25 434.75">
                    <defs>
                        <style>.a{stroke:#ff006a;stroke-miterlimit:10;stroke-width:2px;fill:url(#a);}.b{fill:url(#b);}</style>
                        <linearGradient id="a" x1="154.07" y1="434.08" x2="154.07" y2="1.33" gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#ff791a"/>
                            <stop offset="1" stop-color="#ff006a">
                            </stop>
                        </linearGradient>
                        <linearGradient id="b" x1="154.07" y1="169.2" x2="154.07" y2="76.2" gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#6affff"/>
                            <stop offset="1" stop-color="#000070">
                                <animate attributeName="stop-color" values="#6affff;#000070;#6affff" dur="12s" repeatCount="indefinite" />
                            </stop>
                        </linearGradient>
                    </defs>
                    <path class="a" d="M306.7,154A152.63,152.63,0,1,0,17.07,221.26a150.76,150.76,0,0,0,15.56,26.41A17.27,17.27,0,0,1,36,257.93V390.52c0,9.17,7.13,17,16.29,17.3A16.88,16.88,0,0,0,69.7,391V283.33h0a16.87,16.87,0,0,1,17.57-16.49,17.17,17.17,0,0,1,16.17,17.3v65.13c0,9.17,7.13,17,16.29,17.3A16.88,16.88,0,0,0,137.2,349.7V308.2h0a16.87,16.87,0,0,1,33.69,0h0V416.77c0,9.17,7.13,17,16.29,17.3A16.88,16.88,0,0,0,204.7,417.2V284.14a17.17,17.17,0,0,1,16.17-17.3,16.87,16.87,0,0,1,17.57,16.49h0v92.94c0,9.17,7.13,17,16.29,17.3A16.88,16.88,0,0,0,272.2,376.7V257.94a17.33,17.33,0,0,1,3.32-10.28,150.67,150.67,0,0,0,15.56-26.4A152.07,152.07,0,0,0,306.7,154Z" transform="translate(-0.45 -0.33)"/>
                    <path class="b" d="M254.57,169.2H207.84c-38.27,0-44.27-60-53.77-60s-19,60-57.26,60H53.57a12,12,0,0,1-12-12v-66a12,12,0,0,1,12-12s72-3,100.5-3,100.5,3,100.5,3a12,12,0,0,1,12,12v66A12,12,0,0,1,254.57,169.2Z" transform="translate(-0.45 -0.33)"/>
                </svg>
                <span id="scroll-down" class="scroll-down">&#xe313;</span>
            </div>
            <div class="entry-content-full">
                <?php the_content(); ?>
                <?php if ( is_active_sidebar( 'front-widget-area' ) ) : ?>
                    <div id="widget" class="front-widget-area">
                        <?php dynamic_sidebar( 'front-widget-area' ); ?>
                    </div>
                <?php endif; ?>
            </div>
        </article>
    </main>
<?php get_footer(); ?>