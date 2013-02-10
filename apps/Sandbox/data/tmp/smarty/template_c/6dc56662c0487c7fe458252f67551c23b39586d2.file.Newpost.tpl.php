<?php /* Smarty version Smarty-3.1-DEV, created on 2013-02-10 02:08:21
         compiled from "/Users/shuhei/Documents/web/github/misty/bear/apps/Sandbox/Resource/Page/Blog/Posts/Newpost.tpl" */ ?>
<?php /*%%SmartyHeaderCode:50506182251168285680023-97152272%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6dc56662c0487c7fe458252f67551c23b39586d2' => 
    array (
      0 => '/Users/shuhei/Documents/web/github/misty/bear/apps/Sandbox/Resource/Page/Blog/Posts/Newpost.tpl',
      1 => 1360424236,
      2 => 'file',
    ),
    'a129b65a4d33aeb04c7410cd092e743d61f4d578' => 
    array (
      0 => '/Users/shuhei/Documents/web/github/misty/bear/apps/Sandbox/Resource/View/layout/Blog.tpl',
      1 => 1360424236,
      2 => 'file',
    ),
    '5ddccb53450619cbc9db23efb287482a631336ee' => 
    array (
      0 => '/Users/shuhei/Documents/web/github/misty/bear/apps/Sandbox/Resource/View/Form/Post.tpl',
      1 => 1360424236,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '50506182251168285680023-97152272',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_511682856ca4b2_64881934',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_511682856ca4b2_64881934')) {function content_511682856ca4b2_64881934($_smarty_tpl) {?><?php if (!is_callable('smarty_function_href')) include '/Users/shuhei/Documents/web/github/misty/bear/src/BEAR/Package/Provide/TemplateEngine/Smarty/plugin/function.href.php';
?><!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>New Post &laquo; BEAR.Sunday Blog</title>
    <link href="/assets/css/bootstrap.css" rel="stylesheet">
    <link href="/assets/css/bootstrap-responsive.css" rel="stylesheet">
    <script src="/assets/js/jquery.js"></script>
    <script src="/assets/js/bootstrap-modal.js"></script>
</head>
<body>
<div class="container">
<ul class="breadcrumb">
    <li><a href="/">Home</a> <span class="divider">/</span></li>
    <li><a href="/blog/posts">Blog</a> <span class="divider">/</span></li>
    <li class="active">New Post</li>
</ul>

    <?php if ($_smarty_tpl->tpl_vars['code']->value==200){?>
    <?php /*  Call merged included template "Form/Post.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("Form/Post.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '50506182251168285680023-97152272');
content_511682856a4369_86764781($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "Form/Post.tpl" */?>
        <?php }elseif($_smarty_tpl->tpl_vars['code']->value==201){?>
    <div class="alert alert-success">Successfully posted.</div>
    <ul>
        <li><a href="<?php echo smarty_function_href(array('rel'=>"page_new_post"),$_smarty_tpl);?>
">See new post</a></li>
        <li><a href="<?php echo smarty_function_href(array('rel'=>"back"),$_smarty_tpl);?>
">Back to list</a></li>
    </ul>
        <?php }else{ ?>
    <div class="alert alert-error">Something wrong.</div>
    <?php }?>
</div>
</body>
</html><?php }} ?><?php /* Smarty version Smarty-3.1-DEV, created on 2013-02-10 02:08:21
         compiled from "/Users/shuhei/Documents/web/github/misty/bear/apps/Sandbox/Resource/View/Form/Post.tpl" */ ?>
<?php if ($_valid && !is_callable('content_511682856a4369_86764781')) {function content_511682856a4369_86764781($_smarty_tpl) {?><h1>New Post</h1>
<form action="/blog/posts/newpost" method="POST">
    <input name="X-HTTP-Method-Override" type="hidden" value="POST"/>

    <div class="control-group <?php if ($_smarty_tpl->tpl_vars['errors']->value['title']){?>error<?php }?>">
        <label class="control-label" for="title">Title</label>

        <div class="controls">
            <input type="text" id="title" name="title" value="<?php echo $_smarty_tpl->tpl_vars['submit']->value['title'];?>
">

            <p class="help-inline"><?php echo $_smarty_tpl->tpl_vars['errors']->value['title'];?>
</p>
        </div>
    </div>
    <div class="control-group <?php if ($_smarty_tpl->tpl_vars['errors']->value['body']){?>error<?php }?>">
        <label>Body</label>
        <label>
            <textarea name="body" rows="10" cols="40"><?php echo $_smarty_tpl->tpl_vars['submit']->value['body'];?>
</textarea>
        </label>

        <p class="help-inline"><?php echo $_smarty_tpl->tpl_vars['errors']->value['body'];?>
</p>
    </div>
    <input type="submit" value="Submit">
</form><?php }} ?>