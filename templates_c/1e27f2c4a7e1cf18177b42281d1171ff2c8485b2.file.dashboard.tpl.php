<?php /* Smarty version Smarty-3.1.17, created on 2014-05-26 22:47:52
         compiled from "templates/dashboard.tpl" */ ?>
<?php /*%%SmartyHeaderCode:45418165653831c77e59e71-70649361%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e27f2c4a7e1cf18177b42281d1171ff2c8485b2' => 
    array (
      0 => 'templates/dashboard.tpl',
      1 => 1401144470,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '45418165653831c77e59e71-70649361',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_53831c77e5be57_92632683',
  'variables' => 
  array (
    'top_menu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53831c77e5be57_92632683')) {function content_53831c77e5be57_92632683($_smarty_tpl) {?><div class="ui grid">
        <div class="sixteen wide column">
            <div class="ui secondary pointing menu">
            
                <a class="<?php if ($_smarty_tpl->tpl_vars['top_menu']->value=="overview") {?>active<?php }?> item" href="/dashboard_overview"><i class="home icon"></i> Overview</a>
                <a class="<?php if ($_smarty_tpl->tpl_vars['top_menu']->value=="tickets") {?>active<?php }?> item" href="/dashboard_tickets"><i class="mail icon"></i> Tickets<div class="ui green label">17</div></a>
                <a class="<?php if ($_smarty_tpl->tpl_vars['top_menu']->value=="live") {?>active<?php }?> item" href="/dashboard_live"><i class="chat icon"></i> Live Support<div class="ui red label">3</div></a>
                <a class="<?php if ($_smarty_tpl->tpl_vars['top_menu']->value=="schedule") {?>active<?php }?> item" href="/dashboard_schedule"><i class="calendar icon"></i> Schedule</a>
                <a class="<?php if ($_smarty_tpl->tpl_vars['top_menu']->value=="stats") {?>active<?php }?> item" href="/dashboard_stats"><i class="dashboard icon"></i> Statistics</a>
                
                <div class="right menu">
                    <a class="<?php if ($_smarty_tpl->tpl_vars['top_menu']->value=="assistance") {?>active<?php }?> item" href="/dashboard_assistance"><i class="help icon"></i> Assistance</a>
                    <a class="<?php if ($_smarty_tpl->tpl_vars['top_menu']->value=="knowledge") {?>active<?php }?> item" href="/dashboard_knowledge"><i class="text file icon"></i> Knowledgebase</a>
                    <a class="<?php if ($_smarty_tpl->tpl_vars['top_menu']->value=="logout") {?>active<?php }?> item" href="/dashboard_logout"><i class="sign out icon"></i> Logout</a>
                </div>
    
            </div>
        </div>
</div><?php }} ?>
