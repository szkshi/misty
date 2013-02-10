<?php /* Smarty version Smarty-3.1-DEV, created on 2013-02-10 02:08:49
         compiled from "/Users/shuhei/Documents/web/github/misty/bear/apps/Sandbox/Resource/Page/Hello/World.tpl" */ ?>
<?php /*%%SmartyHeaderCode:44128226511682a1313be2-49165718%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a3a255bdd338d949ffd2fb9d4177e67b1aba14ce' => 
    array (
      0 => '/Users/shuhei/Documents/web/github/misty/bear/apps/Sandbox/Resource/Page/Hello/World.tpl',
      1 => 1360424236,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '44128226511682a1313be2-49165718',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'greeting' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_511682a1323986_98075107',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_511682a1323986_98075107')) {function content_511682a1323986_98075107($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Hello World</title>
    <style>
        body {
            padding: 20px;
        }
    </style>
</head>

<body>
<div class="container">
    <h1><?php echo $_smarty_tpl->tpl_vars['greeting']->value;?>
</h1>
</div>
</body>
</html><?php }} ?>