<?php /* Smarty version Smarty-3.1.17, created on 2014-06-05 15:03:43
         compiled from "templates/dashboard_ticket_detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:262441285387a7689e4c38-13188580%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '730093a7a0c51dc63033eb736852cc5e92e6aec6' => 
    array (
      0 => 'templates/dashboard_ticket_detail.tpl',
      1 => 1401980621,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '262441285387a7689e4c38-13188580',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5387a768b15412_79634226',
  'variables' => 
  array (
    'view' => 0,
    'nav_back' => 0,
    'ticket_parent' => 0,
    'old_history' => 0,
    'ticket_children' => 0,
    'child' => 0,
    'ticket_client' => 0,
    'ticket_store' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5387a768b15412_79634226')) {function content_5387a768b15412_79634226($_smarty_tpl) {?><div class="ui grid">
    <div class="row">

        <div class="four wide column">
            <div class="ui fluid vertical menu">
                <a class="<?php if ($_smarty_tpl->tpl_vars['view']->value=="all") {?>active<?php }?> teal item" href="<?php echo $_smarty_tpl->tpl_vars['nav_back']->value['url'];?>
">Back</a>
                <a class="<?php if ($_smarty_tpl->tpl_vars['view']->value=="all") {?>active<?php }?> teal item" href="/dashboard_ticket_set_history/<?php echo $_smarty_tpl->tpl_vars['ticket_parent']->value['tid'];?>
/<?php echo $_smarty_tpl->tpl_vars['old_history']->value;?>
/<?php echo urlencode($_smarty_tpl->tpl_vars['nav_back']->value['url']);?>
">Back & No History Change</a>
                <a class="<?php if ($_smarty_tpl->tpl_vars['view']->value=="all") {?>active<?php }?> teal item" href="/dashboard_ticket_set_history/<?php echo $_smarty_tpl->tpl_vars['ticket_parent']->value['tid'];?>
/<?php echo urlencode("Attention Required");?>
/<?php echo urlencode($_smarty_tpl->tpl_vars['nav_back']->value['url']);?>
">Back & Attention Required</a>
                <a class="<?php if ($_smarty_tpl->tpl_vars['view']->value=="all") {?>active<?php }?> teal item" href="/dashboard_ticket_set_history/<?php echo $_smarty_tpl->tpl_vars['ticket_parent']->value['tid'];?>
/<?php echo urlencode("Awaiting Response");?>
/<?php echo urlencode($_smarty_tpl->tpl_vars['nav_back']->value['url']);?>
">Back & Awaiting Response</a>
                <a class="<?php if ($_smarty_tpl->tpl_vars['view']->value=="all") {?>active<?php }?> teal item" href="/dashboard_ticket_set_history/<?php echo $_smarty_tpl->tpl_vars['ticket_parent']->value['tid'];?>
/<?php echo urlencode("Handled");?>
/<?php echo urlencode($_smarty_tpl->tpl_vars['nav_back']->value['url']);?>
">Back & Handled</a>
            </div>
        
            <div class="ui fluid vertical menu">
                <a class="<?php if ($_smarty_tpl->tpl_vars['view']->value=="all") {?>active<?php }?> teal item" href="/dashboard_schedule/personal">All Tickets</a>
                <a class="<?php if ($_smarty_tpl->tpl_vars['view']->value=="open") {?>active<?php }?> teal item" href="/dashboard_schedule/all">Open Tickets</a>
                <a class="<?php if ($_smarty_tpl->tpl_vars['view']->value=="find") {?>active<?php }?> teal item" href="/dashboard_schedule/all">Find a Ticket</a>
                <a class="<?php if ($_smarty_tpl->tpl_vars['view']->value=="archive") {?>active<?php }?> teal item" href="/dashboard_schedule/all">Archive</a>
                <a class="<?php if ($_smarty_tpl->tpl_vars['view']->value=="open") {?>active<?php }?> teal item" href="/dashboard_schedule/all">Open a Ticket</a>
            </div>
        </div>
        
        <div class="eight wide column">
            <div class="ui yellow message">
                <div class="header">
                    Ticket Details
                </div>
                <p><i>Subject: <?php echo $_smarty_tpl->tpl_vars['ticket_parent']->value['subject'];?>
<br/>Lastreply: <?php echo $_smarty_tpl->tpl_vars['ticket_parent']->value['lastreply'];?>
</i></p>
            </div>
        
            <div class="ui segment">
            
                <?php  $_smarty_tpl->tpl_vars['child'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['child']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ticket_children']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['child']->key => $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['child']->_loop = true;
?>
            
                <div class="ui <?php if ($_smarty_tpl->tpl_vars['child']->value['admin']=='') {?>green<?php }?> icon message">
                  <i class="<?php if ($_smarty_tpl->tpl_vars['child']->value['admin']=='') {?>forward mail<?php } else { ?>reply mail<?php }?> icon"></i>
                  <div class="content">
                      <div class="header">
                         <?php if ($_smarty_tpl->tpl_vars['child']->value['admin']=='') {?><?php echo $_smarty_tpl->tpl_vars['ticket_client']->value['firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['ticket_client']->value['lastname'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['child']->value['admin'];?>
<?php }?>
                      </div>
                      <p><i>Sent at: <?php echo $_smarty_tpl->tpl_vars['child']->value['replytime'];?>
</i></p>
                      <p>
                        <?php echo $_smarty_tpl->tpl_vars['child']->value['message'];?>

                      </p>
                      <?php if ($_smarty_tpl->tpl_vars['child']->value['attachment']!='') {?>
                      <p>Attachment: <?php echo $_smarty_tpl->tpl_vars['child']->value['attachment'];?>
</p>
                      <?php }?>
                  </div>
                </div>
                
                <?php } ?>
                
            </div>
            
            <div class="ui segment">
                <div class="ui form">
                  <div class="field">
                    <textarea></textarea>
                  </div>
                  <div class="field">
                  <div class="ui selection dropdown">
                      <div class="text">Set as</div>
                      <i class="dropdown icon"></i>
                      <div class="menu">
                        <div class="item" data-value="option1">Answered</div>
                        <div class="item" data-value="option2">On Hold</div>
                        <div class="item" data-value="option3">In Progress</div>
                      </div>
                  </div>
                  </div>
                  <div class="field">
                    <div class="ui blue submit button">Reply</div>
                  </div>
                </div>
            </div>
        </div>
        
        <div class="four wide column">
            <div class="ui segment">
                <p><b>Client: <?php echo (($tmp = @$_smarty_tpl->tpl_vars['ticket_client']->value['firstname'])===null||$tmp==='' ? '-' : $tmp);?>
 <?php echo (($tmp = @$_smarty_tpl->tpl_vars['ticket_client']->value['lastname'])===null||$tmp==='' ? '-' : $tmp);?>
</b></p>
                <table class="ui basic table">
                  <tbody>
                    <tr>
                      <td>Email</td>
                      <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['ticket_client']->value['email'])===null||$tmp==='' ? '-' : $tmp);?>
</td>
                    </tr>
                    <tr>
                      <td>Address</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['ticket_client']->value['address1'];?>
<br/><?php echo $_smarty_tpl->tpl_vars['ticket_client']->value['address2'];?>
<br/><?php echo $_smarty_tpl->tpl_vars['ticket_client']->value['city'];?>
<br/><?php echo $_smarty_tpl->tpl_vars['ticket_client']->value['state'];?>
<br/><?php echo $_smarty_tpl->tpl_vars['ticket_client']->value['postcode'];?>
<br/><?php echo $_smarty_tpl->tpl_vars['ticket_client']->value['country'];?>
</td>
                    </tr>
                    <tr>
                      <td>Status</td>
                      <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['ticket_client']->value['status'])===null||$tmp==='' ? '-' : $tmp);?>
</td>
                    </tr>
                    <tr>
                      <td>Last Login</td>
                      <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['ticket_client']->value['lastlogin'])===null||$tmp==='' ? '-' : $tmp);?>
</td>
                    </tr>
                    <tr>
                      <td>Company (Self)</td>
                      <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['ticket_client']->value['companyname'])===null||$tmp==='' ? '-' : $tmp);?>
</td>
                    </tr>
                    <tr>
                      <td>Company (Host)</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['ticket_store']->value['company'];?>
</td>
                    </tr>
                  </tbody>
                </table>
            </div>
        </div>
    
    </div>
</div>

<script type="text/javascript" src="/assets/js/dashboard_tickets_all.js"></script>

<script>
$(document).ready(function() {
    $('.ui.dropdown').dropdown(); 
});
</script><?php }} ?>
