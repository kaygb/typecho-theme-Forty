<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<!DOCTYPE HTML>
<html class="no-js">
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <noscript><link rel="stylesheet" href="<?php $this->options->themeUrl('assets/css/noscript.css'); ?>?v=<?php echo date('Ymd'); ?>assets/css/noscript.css" /></noscript>
    <link rel="stylesheet" href="<?php $this->options->themeUrl('assets/css/main.css'); ?>?v=<?php echo date('Ymd'); ?>">
    <link rel="shortcut icon" href="<?php $this->options->logoUrl(); ?>" mce_href="<?php $this->options->logoUrl(); ?>" type="image/x-icon">
    <meta name="theme-color" content="#000" />
    <title>
        <?php if($this->is('index'))
        {
            $this->options->title(); _e(' - ');$this->options->description();
        }
        else{
            $this->archiveTitle(array(
                'category'  =>  _t('分类 %s 下的文章'),
                'search'    =>  _t('包含关键字 %s 的文章'),
                'tag'       =>  _t('标签 %s 下的文章'),
                'author'    =>  _t('%s 发布的文章')
            ), '', ' - '); 
            $this->options->title(); 
        }?>  
    </title>
    <meta itemprop="description" name="description" content="<?php $this->excerpt(30, '...'); ?>"/> 
    <meta itemprop="name" content="<?php 
     if($this->is('index')) {
     $this->options->title(); _e(' - ');$this->options->description(); }
    else{ $this->archiveTitle(array( 'category' => _t('分类 %s 下的文章'), 'search' => _t('包含关键字 %s 的文章'), 'tag' => _t('标签 %s 下的文章'), 'author' => _t('%s 发布的文章') ), '', ' - '); $this->options->title(); } ?>"/>
    <meta id="image" itemprop="image" content="<?php $this->options->logoUrl(); ?>"/>
    

    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
</head>
<body class="is-preload">

    <!-- Wrapper -->
    <div id="wrapper">




    
    
