<?php /* Smarty version Smarty-3.1.17, created on 2014-05-29 20:50:27
         compiled from "templates/dashboard_tickets.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7036149305383c56fdd1c43-48617915%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c28071d3300ada33f541da7440db7bfaf05f429' => 
    array (
      0 => 'templates/dashboard_tickets.tpl',
      1 => 1401396616,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7036149305383c56fdd1c43-48617915',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5383c56fdd3343_54454961',
  'variables' => 
  array (
    'view' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5383c56fdd3343_54454961')) {function content_5383c56fdd3343_54454961($_smarty_tpl) {?><div class="ui grid">
    <div class="row">

        <div class="four wide column">
            <div class="ui fluid vertical menu">
                <a class="<?php if ($_smarty_tpl->tpl_vars['view']->value=="all") {?>active<?php }?> teal item" href="/dashboard_schedule/personal">All Tickets</a>
                <a class="<?php if ($_smarty_tpl->tpl_vars['view']->value=="open") {?>active<?php }?> teal item" href="/dashboard_schedule/all">Open Tickets</a>
                <a class="<?php if ($_smarty_tpl->tpl_vars['view']->value=="find") {?>active<?php }?> teal item" href="/dashboard_schedule/all">Find a Ticket</a>
                <a class="<?php if ($_smarty_tpl->tpl_vars['view']->value=="archive") {?>active<?php }?> teal item" href="/dashboard_schedule/all">Archive</a>
                <a class="<?php if ($_smarty_tpl->tpl_vars['view']->value=="open") {?>active<?php }?> teal item" href="/dashboard_schedule/all">Open a Ticket</a>
            </div>
        </div>
        
        <?php if ($_smarty_tpl->tpl_vars['view']->value=="all") {?>
        
        <div class="twelve wide column">
            <div class="ui segment">
                <p>All tickets, sorted by most recent</p>
                
                <table class="ui basic table segment">
                    <thead>
                        <tr><th>Client Name</th>
                        <th>Company</th>
                        <th>Last Reply</th>
                        <th>Subject</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr></thead>
                    <tbody id="all_tickets_table">
                        <div class="ui active dimmer table_loader">
                            <div class="ui loader"></div>
                        </div>
                    </tbody>
                </table>
            </div>
        </div>
        
        <?php }?>
    
    </div>
</div>

<script type="text/javascript" src="/assets/js/dashboard_tickets_all.js"></script><?php }} ?>
