<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; 
//文章列表
?>

<?php $this->need('inc/banner.php'); ?>

        <div class="main">

 <!-- One -->
 <section id="one" class="tiles">


            <?php while($this->next()): ?>
                <article>
                    <span class="image">
										<img src="<?php echo $this->fields->defaultBanner;?>" alt="" />
                                    </span>
                                    
                    <header class="major">
                        
                        <h2><a href="<?php $this->permalink() ?>" class="link"><?php $this->title() ?></a></h2>

                        
                        <p><?php $this->excerpt(100,''); ?></p>
                        <time datetime="<?php $this->date('c'); ?>"  class="button small"><?php $this->date(); ?></time>
                    </header>
                </article>

            <?php endwhile; ?>
            <div id="w-pagination" class="w-pagination">
            <?php $this->pageNav('<i class="fas fa-angle-left"></i>', '<i class="fas fa-angle-right"></i>'); ?>
            </div>
            </div>