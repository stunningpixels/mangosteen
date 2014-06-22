<?php /* Smarty version Smarty-3.1.17, created on 2014-06-05 15:27:59
         compiled from "templates/dashboard_tickets_all.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21217387585387a0af65e7d3-70827519%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e1ae806cbb9050727476473e516af67ed945a766' => 
    array (
      0 => 'templates/dashboard_tickets_all.tpl',
      1 => 1401982077,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21217387585387a0af65e7d3-70827519',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5387a0af823f64_15653970',
  'variables' => 
  array (
    'view' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5387a0af823f64_15653970')) {function content_5387a0af823f64_15653970($_smarty_tpl) {?><div class="ui grid">
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
            <div class="ui top attached progress">
                <div class="bar"></div>
            </div>
            <div class="ui attached segment">
                <p>All tickets, sorted by most recent<br/><i class="reload_eta"></i></p>
                <hr/>
                <table class="ui basic table segment">
                    <thead>
                        <tr><th>Client Name</th>
                        <th>Company</th>
                        <th>Last Reply</th>
                        <th>Subject</th>
                        <th>Status</th>
                        <th>History</th>
                        <th>Actions</th>
                    </tr></thead>
                    <tbody id="all_tickets_table">
                        <div class="ui active dimmer table_loader">
                            <div class="ui loader"></div>
                        </div>
                    </tbody>
                </table>
            </div>
            <div class="ui bottom attached progress">
                <div class="bar"></div>
            </div>
        </div>
        
        <?php }?>
    
    </div>
</div>

<script type="text/javascript" src="/assets/js/dashboard_tickets_all.js"></script><?php }} ?>
