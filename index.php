<?php
    //include "header.php";
get_header();
?>
<body>
        <div class="th-navi">
            <a href="<?php bloginfo( 'wpurl' );?>"><h1 class="th-nav-title">Naslov ki dejansko malo dalsi kot obicajno bla bla Naslov ki dejansko malo dalsi kot obicajno bla bla Naslov ki dejansko malo dalsi kot obicajno bla bla Naslov ki dejansko malo dalsi kot obicajno bla bla </h1></a>
            
            <a href="#navi" class="th-nav-call-menu">&#x2632;</a>
        </div>
        <?php include "navigation.php"; ?>
        <div class="th-body">
            <div class="th-body-pic">
            <!--<img alt="sport" src="images/sport.jpg" width="100%" height="100%">-->
            </div>
            <div class="th-container">
                <div>
                    <a href="<?php bloginfo( 'wpurl' );?>"><h1 class="th-container-title"><?php echo get_bloginfo( 'name' ); ?></h1></a>
                    <div class="th-container-left">
                        <article>
                            <section>
                                <h1>Articel 1</h1>
                                <p>neko besedilo bla bla bla bla bla bla bla
                                ki mora bit malo dalše bla bla bla bla bla bla
                                neko besedilo bla bla bla bla bla bla bla
                                ki mora bit malo dalše bla bla bla bla bla bla</p>
                            </section>
                            <section>
                                <h1>Articel 2</h1>
                                <p>neko besedilo bla bla bla bla bla bla bla
                                ki mora bit malo dalše bla bla bla bla bla bla
                                neko besedilo bla bla bla bla bla bla bla
                                ki mora bit malo dalše bla bla bla bla bla bla</p>
                            </section>
                            <section>
                                <h1>Articel 3</h1>
                                <p>neko besedilo bla bla bla bla bla bla bla
                                ki mora bit malo dalše bla bla bla bla bla bla
                                neko besedilo bla bla bla bla bla bla bla
                                ki mora bit malo dalše bla bla bla bla bla bla</p>
                            </section>
                            <section>
                                <h1>Articel 4</h1>
                                <p>neko besedilo bla bla bla bla bla bla bla
                                ki mora bit malo dalše bla bla bla bla bla bla
                                neko besedilo bla bla bla bla bla bla bla
                                ki mora bit malo dalše bla bla bla bla bla bla</p>
                            </section>
                            <section>
                                <h1>Articel 5</h1>
                                <p>neko besedilo bla bla bla bla bla bla bla
                                ki mora bit malo dalše bla bla bla bla bla bla
                                neko besedilo bla bla bla bla bla bla bla
                                ki mora bit malo dalše bla bla bla bla bla bla</p>
                            </section>
                            <section>
                                <h1>Articel 6</h1>
                                <p>neko besedilo bla bla bla bla bla bla bla
                                ki mora bit malo dalše bla bla bla bla bla bla
                                neko besedilo bla bla bla bla bla bla bla
                                ki mora bit malo dalše bla bla bla bla bla bla</p>
                            </section>
                        </article>
                    </div>
                </div>
                <div class="th-sidebar">
                    <?php if ( is_active_sidebar( 'right-sidebar' ) ) : ?>
	                   <ul id="sidebar">
		               <?php dynamic_sidebar( 'right-sidebar' ); ?>
	                   </ul>
                    <?php endif; ?>
                </div>
            </div>
        </div><!-- container -->


<?php 
    //include "footer.php"; 
    get_footer();
?>