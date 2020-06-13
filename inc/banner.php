<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>


                


<?php if($this->is('archive')): ?>
    <!-- Banner -->
        <section id="banner" class="major">
            <div class="inner">
                <header class="major">
                    <h1>
                        <?php $this->archiveTitle(array(
                        'category'  =>  _t('分类 "%s" 下的文章'),
                        'search'    =>  _t('包含关键字 "%s" 的文章'),
                        'tag'       =>  _t('包含标签 "%s" 的文章'),
                        'author'    =>  _t('"%s" 发布的文章')
                        ), '', '');  ?>
                    </h1>
                </header>
                </div>
        </section>
    
<?php else: ?>
    
<?php if($this->is('single')):?>        
    <section id="banner" class="style2">
            <div class="inner">
                <span class="image">
								<img src="<?php echo $this->fields->defaultBanner;?>" alt="" />
							</span>
                <header class="major">
                    <h1>
                        <?php $this->archiveTitle(array(
                        'category'  =>  _t('分类 "%s" 下的文章'),
                        'search'    =>  _t('包含关键字 "%s" 的文章'),
                        'tag'       =>  _t('包含标签 "%s" 的文章'),
                        'author'    =>  _t('"%s" 发布的文章')
                        ), '', '');  ?>
                    </h1>
                </header>
                <!-- <div class="content">
                    <p>Lorem ipsum dolor sit amet nullam consequat<br /> sed veroeros. tempus adipiscing nulla.</p> -->
                    <time datetime="<?php $this->date('c'); ?>"  class="button small"><?php $this->date(); ?></time>
                    <span class="button small">
                    <?php $this->category(','); ?>
                    </span>
                </div>
            </div>
        </section>
    

    <?php else:?>
    <!-- Banner -->
    <section id="banner" class="major">
            <div class="inner">
            <header class="major">
                    <h1><?php $this->options->title(); ?></h1>
                </header>
                <div class="content">
                    <p><?php $this->options->description();?></p>
                    
                </div>
                <ul class="actions">
                        <li><a href="#one" class="button next scrolly">Get Started</a></li>
                    </ul>    
            </div>
        </section>
            

    <?php endif;?>
<?php endif;?>

