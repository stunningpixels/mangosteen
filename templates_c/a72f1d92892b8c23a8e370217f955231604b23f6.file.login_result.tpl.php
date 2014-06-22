<?php /* Smarty version Smarty-3.1.17, created on 2014-05-26 04:19:36
         compiled from "templates/login_result.tpl" */ ?>
<?php /*%%SmartyHeaderCode:88764090653822824172953-26540744%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a72f1d92892b8c23a8e370217f955231604b23f6' => 
    array (
      0 => 'templates/login_result.tpl',
      1 => 1401103163,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '88764090653822824172953-26540744',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5382282424b581_92028810',
  'variables' => 
  array (
    'success' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5382282424b581_92028810')) {function content_5382282424b581_92028810($_smarty_tpl) {?><div class="ui three column grid">
  <div class="column"></div>
  <div class="column">
    <div class="ui segment">
        <?php if ($_smarty_tpl->tpl_vars['success']->value==true) {?>
            <div class="ui green message">Welcome back, <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</div>
            <p>You have been signed in for 30 days.<br/><br/><i>If you are not automatically redirected to the dashboard within 5 seconds, <a href="/dashboard">click here</a></i></p>
        <?php } else { ?>
            <div class="ui red message">Login failed, please try again</div>
            <p><i>If you are not automatically redirected back within 5 seconds, <a href="/">click here</a></i></p>
        <?php }?>
    </div>
  </div>
  <div class="column"></div>
</div><?php }} ?>
