<?php /* Smarty version Smarty-3.1-DEV, created on 2013-02-10 02:08:18
         compiled from "/Users/shuhei/Documents/web/github/misty/bear/apps/Sandbox/Resource/Page/Blog/Posts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14437976725116828249eea3-64129516%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7049934fc7c44438705d43c0d2a27e2c97e2a004' => 
    array (
      0 => '/Users/shuhei/Documents/web/github/misty/bear/apps/Sandbox/Resource/Page/Blog/Posts.tpl',
      1 => 1360424236,
      2 => 'file',
    ),
    'a129b65a4d33aeb04c7410cd092e743d61f4d578' => 
    array (
      0 => '/Users/shuhei/Documents/web/github/misty/bear/apps/Sandbox/Resource/View/layout/Blog.tpl',
      1 => 1360424236,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14437976725116828249eea3-64129516',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_511682824c60c5_36595855',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_511682824c60c5_36595855')) {function content_511682824c60c5_36595855($_smarty_tpl) {?><!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>Posts &laquo; BEAR.Sunday Blog</title>
    <link href="/assets/css/bootstrap.css" rel="stylesheet">
    <link href="/assets/css/bootstrap-responsive.css" rel="stylesheet">
    <script src="/assets/js/jquery.js"></script>
    <script src="/assets/js/bootstrap-modal.js"></script>
</head>
<body>
<div class="container">

<ul class="breadcrumb">
    <li><a href="/">Home</a> <span class="divider">/</span></li>
    <li class="active">Blog</li>
</ul>
<div align="right">
    <a href="posts/pager" class="btn btn-success btn-mini">Pagination</a>
</div>

<h1>Posts</h1>
<p><?php echo $_smarty_tpl->tpl_vars['posts']->value;?>
</p>
<a href="posts/newpost" class="btn btn-primary btn-large">New Post</a>
</div>
</body>
</html><?php }} ?>