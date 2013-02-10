<?php /* Smarty version Smarty-3.1-DEV, created on 2013-02-10 02:08:14
         compiled from "/Users/shuhei/Documents/web/github/misty/bear/apps/Sandbox/Resource/Page/Restbucks/Index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7922068465116827ed30162-87583169%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cefe9d4059f1f57da4b9ff291d75c727137b5170' => 
    array (
      0 => '/Users/shuhei/Documents/web/github/misty/bear/apps/Sandbox/Resource/Page/Restbucks/Index.tpl',
      1 => 1360424236,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7922068465116827ed30162-87583169',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ordered' => 0,
    'logs' => 0,
    'log' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_5116827ed521d8_25831802',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5116827ed521d8_25831802')) {function content_5116827ed521d8_25831802($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link href="/assets/css/bootstrap.css" rel="stylesheet">
    <title>RESTbucks</title>
    <style>
        body {
            padding: 60px;
        }
    </style>
</head>

<body>
<div class="container">
<?php if (!$_smarty_tpl->tpl_vars['ordered']->value){?>
    <h1>Welcome to RESTbucks</h1>

    <form action="/restbucks/index" method="POST">
        <legend>Order here</legend>
        <input name="X-HTTP-Method-Override" type="hidden" value="POST"/>
        <label>Which drink do you want ?</label>
        <label>
            <input type="text" name="drink" value="latte">
        </label>

        <div></div>
        <input type="submit" value="Order">
    </form>
    <p>* RESTBucks is a RESTful coffee shop, You can see more at <a href="http://www.infoq.com/articles/webber-rest-workflow">InfoQ:How to GET a Cup of Coffee</a>, <a
            href="http://www.infoq.com/jp/articles/webber-rest-workflow">InfoQ:1杯のコーヒーを得る方法</a></p>

    <p>* Output format is HAL, <a href="http://stateless.co/hal_specification.html">Hypertext Application Language</a></p>
    <?php }else{ ?>
    <?php  $_smarty_tpl->tpl_vars['log'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['log']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['logs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['log']->key => $_smarty_tpl->tpl_vars['log']->value){
$_smarty_tpl->tpl_vars['log']->_loop = true;
?>
        <div class="well">
            <code><?php echo $_smarty_tpl->tpl_vars['log']->value['request'];?>
</code><br><br>
            <span class="label label-success"><?php echo $_smarty_tpl->tpl_vars['log']->value['code'];?>
</span><br>
            <pre><?php echo $_smarty_tpl->tpl_vars['log']->value['body'];?>
</pre>
        </div>
    <?php } ?>
    <h2>Here you are !</h2>
    <img src="/img/coffee.png">
    <a href="index">One more ?</a> or <a href="/">No, Thanks.</a>

<?php }?>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
</div>
</body>
</html><?php }} ?>