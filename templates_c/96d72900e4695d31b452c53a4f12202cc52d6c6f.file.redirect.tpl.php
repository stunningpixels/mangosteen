<?php /* Smarty version Smarty-3.1.17, created on 2014-06-03 21:31:26
         compiled from "templates/redirect.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1579051560538e3e558f8882-31064769%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '96d72900e4695d31b452c53a4f12202cc52d6c6f' => 
    array (
      0 => 'templates/redirect.tpl',
      1 => 1401831084,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1579051560538e3e558f8882-31064769',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_538e3e559f64b9_09412554',
  'variables' => 
  array (
    'location' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_538e3e559f64b9_09412554')) {function content_538e3e559f64b9_09412554($_smarty_tpl) {?><script>
window.location.href = "<?php echo urldecode($_smarty_tpl->tpl_vars['location']->value);?>
";
</script><?php }} ?>
