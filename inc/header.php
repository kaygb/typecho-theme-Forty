<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!-- Header -->
<?php 
     if($this->is('index')) {
     }?>
<header id="header" class="alt">
            <a  href="<?php $this->options->siteUrl(); ?>"  class="logo"> <strong><?php $this->options->title(); ?></strong> </a>
            <!-- <a href="index.html" class="logo"><strong>七六零一</strong> <span>TEAM</span></a> -->
            <nav>
                <a href="#menu">Menu</a>
            </nav>
        </header>

        <!-- Menu -->
        <nav id="menu">
            <ul class="links">
                <li><a href="<?php $this->options->siteUrl(); ?>">Home</a></li>
                <li><a href="landing.html">Landing</a></li>
                <li><a href="about.html">关于</a></li>
                <!-- <li><a href="elements.html">Elements</a></li> -->
            </ul>
            <ul class="actions stacked">
                <!-- <li><a href="#" class="button primary fit">Get Started</a></li> -->
                <?php if($this->user->hasLogin()): ?>
                        <li><a href="<?php $this->options->adminUrl(); ?>"  class="button fit" target="_blank"><?php _e('进入后台'); ?> (<?php $this->user->screenName(); ?>)</a></li>
                        <li><a href="<?php $this->options->logoutUrl(); ?>"  class="button fit"><?php _e('退出'); ?></a></li>
                    <?php else: ?>
                        <li class="last"><a href="<?php $this->options->adminUrl('login.php'); ?>" class="button fit" ><?php _e('登录'); ?></a></li>
                    <?php endif; ?>
            </ul>
        </nav>



