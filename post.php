<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('inc/head.php'); 
 $this->need('inc/header.php');?>

        <!-- Banner -->
        <?php $this->need('inc/banner.php'); ?>

        <div id="main" class="alt">

						<!-- One -->
                        <section id="one">
                            <div class="inner">
                            <?php $this->content(); ?>

                                
                            </div>
                        </section>

                    </div>

<?php $this->need('inc/footer.php'); ?>
