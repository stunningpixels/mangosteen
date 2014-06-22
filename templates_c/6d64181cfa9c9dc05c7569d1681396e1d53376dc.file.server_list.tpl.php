<?php /* Smarty version Smarty-3.1.17, created on 2014-04-01 10:20:41
         compiled from "templates/server_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:69552058533ae75b6bfd49-19399438%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d64181cfa9c9dc05c7569d1681396e1d53376dc' => 
    array (
      0 => 'templates/server_list.tpl',
      1 => 1396372838,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '69552058533ae75b6bfd49-19399438',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_533ae75b72f8b7_46885342',
  'variables' => 
  array (
    'servers' => 0,
    'server' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533ae75b72f8b7_46885342')) {function content_533ae75b72f8b7_46885342($_smarty_tpl) {?><div class="generic_list">
<?php  $_smarty_tpl->tpl_vars['server'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['server']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['servers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['server']->key => $_smarty_tpl->tpl_vars['server']->value) {
$_smarty_tpl->tpl_vars['server']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['server']->key;
?>
<div class="entry">
    <?php if ($_smarty_tpl->tpl_vars['server']->value["banner"]=='') {?>
        <div class="banner"><h2><a href="view.php?server=<?php echo $_smarty_tpl->tpl_vars['server']->value["id"];?>
"><?php echo $_smarty_tpl->tpl_vars['server']->value["server_name"];?>
</a></h2></div>
    <?php } else { ?>
        <div class="banner"><a href="view.php?server=<?php echo $_smarty_tpl->tpl_vars['server']->value["id"];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['server']->value["banner"];?>
" onError="this.onerror=null;this.src='/img/no_banner.jpg';" /></a></div>
    <?php }?>
    
    <div class="description"><?php echo $_smarty_tpl->tpl_vars['server']->value["description"];?>
</div>
    
    <div class="status online">Online @ <?php echo $_smarty_tpl->tpl_vars['server']->value["server_ip"];?>
:<?php echo $_smarty_tpl->tpl_vars['server']->value["server_port"];?>
</div>
    
</div>
<?php } ?>

</div><?php }} ?>
