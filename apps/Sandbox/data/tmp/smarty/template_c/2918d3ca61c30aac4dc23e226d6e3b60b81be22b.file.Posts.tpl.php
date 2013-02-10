<?php /* Smarty version Smarty-3.1-DEV, created on 2013-02-10 02:08:18
         compiled from "/Users/shuhei/Documents/web/github/misty/bear/apps/Sandbox/Resource/App/Blog/Posts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3477312665116828264c0a4-79279617%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2918d3ca61c30aac4dc23e226d6e3b60b81be22b' => 
    array (
      0 => '/Users/shuhei/Documents/web/github/misty/bear/apps/Sandbox/Resource/App/Blog/Posts.tpl',
      1 => 1360424236,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3477312665116828264c0a4-79279617',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'resource' => 0,
    'post' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_5116828267ad15_53178797',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5116828267ad15_53178797')) {function content_5116828267ad15_53178797($_smarty_tpl) {?><?php if (!is_callable('smarty_function_href')) include '/Users/shuhei/Documents/web/github/misty/bear/src/BEAR/Package/Provide/TemplateEngine/Smarty/plugin/function.href.php';
if (!is_callable('smarty_modifier_truncate')) include '/Users/shuhei/Documents/web/github/misty/bear/vendor/smarty/smarty/distribution/libs/plugins/modifier.truncate.php';
?><script src="/js/modal.js"></script>
<table class="table table-bordered table-striped">
    <tr>
        <th class="span1">Id</th>
        <th>Title</th>
        <th>Body</th>
        <th>CreatedAt</th>
        <th></th>
    </tr>
<?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['resource']->value->body; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value){
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
</td>
        <td><a href="<?php echo smarty_function_href(array('rel'=>"page_item",'data'=>$_smarty_tpl->tpl_vars['post']->value),$_smarty_tpl);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</a></td>
        <td><?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['post']->value['body'],60), ENT_QUOTES, 'UTF-8', true);?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['post']->value['created'];?>
</td>
        <td><a title="Edit post" class="btn"
               href="<?php echo smarty_function_href(array('rel'=>"page_edit",'data'=>$_smarty_tpl->tpl_vars['post']->value),$_smarty_tpl);?>
"><span class="icon-edit"></span></a>
            <a title="Delete post" class="btn" href="#"
               onclick="return MyDialogs.loadConfirmationModal('my_dialog', '<?php echo smarty_function_href(array('rel'=>"page_delete",'data'=>$_smarty_tpl->tpl_vars['post']->value),$_smarty_tpl);?>
', 'Are you sure ?', 'The entry will be deleted permanently.');"><span
                    class="icon-trash"></span></a></td>
    </tr>
<?php } ?>
</table>
<?php }} ?>