<?php /* Smarty version Smarty-3.1.17, created on 2014-05-29 20:51:33
         compiled from "templates/dashboard_schedule.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3856291755383329b3b02c6-06206254%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb5ad29e77dba41217b3817cf22356a7b6329da0' => 
    array (
      0 => 'templates/dashboard_schedule.tpl',
      1 => 1401396689,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3856291755383329b3b02c6-06206254',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5383329b4430b8_73300957',
  'variables' => 
  array (
    'view' => 0,
    'all_schedules' => 0,
    'slot' => 0,
    'user_schedules' => 0,
    'non_user_schedules' => 0,
    'user_modifiers' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5383329b4430b8_73300957')) {function content_5383329b4430b8_73300957($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/stunningpixels/panel.stunningpixels.com/libraries/smarty/plugins/modifier.date_format.php';
?><div class="ui grid">
    <div class="row">

        <div class="four wide column">
        
            <div class="ui fluid vertical menu">
                <a class="<?php if ($_smarty_tpl->tpl_vars['view']->value=="personal") {?>active<?php }?> teal item" href="/dashboard_schedule/personal">My Schedule</a>
                <a class="<?php if ($_smarty_tpl->tpl_vars['view']->value=="all") {?>active<?php }?> teal item" href="/dashboard_schedule/all">Manage Slots</a>
            </div>
            
        </div>
        
        <?php if ($_smarty_tpl->tpl_vars['view']->value=="all") {?>
        
        <div class="twelve wide column">
        
            <div class="ui segment">
            
                <table class="ui basic table segment">
                    <thead>
                        <tr><th>Day</th>
                        <th>Date</th>
                        <th>Start Time</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr></thead>
                    <tbody>
                        <?php  $_smarty_tpl->tpl_vars['slot'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slot']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['all_schedules']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slot']->key => $_smarty_tpl->tpl_vars['slot']->value) {
$_smarty_tpl->tpl_vars['slot']->_loop = true;
?>
                        <tr>
                            <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['slot']->value,"%A");?>
</td>
                            <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['slot']->value,"%d/%m/%Y");?>
</td>
                            <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['slot']->value,"%H:%M");?>
</td>
                            <td class="js_status">
                                <?php if (time()>$_smarty_tpl->tpl_vars['slot']->value) {?><i class="icon time"></i> Past
                                <?php } elseif (in_array($_smarty_tpl->tpl_vars['slot']->value,$_smarty_tpl->tpl_vars['user_schedules']->value)) {?><i class="icon checkmark"></i> Booked
                                <?php } elseif (in_array($_smarty_tpl->tpl_vars['slot']->value,$_smarty_tpl->tpl_vars['non_user_schedules']->value)) {?><i class="icon ban circle"></i> Taken<?php }?>
                                
                            </td>
                            <td>
                                <a class="book <?php if (time()>$_smarty_tpl->tpl_vars['slot']->value||in_array($_smarty_tpl->tpl_vars['slot']->value,$_smarty_tpl->tpl_vars['user_schedules']->value)||in_array($_smarty_tpl->tpl_vars['slot']->value,$_smarty_tpl->tpl_vars['non_user_schedules']->value)) {?>disabled<?php }?> tiny positive ui button" time_slot="<?php echo $_smarty_tpl->tpl_vars['slot']->value;?>
">Book</a> <a class="unbook <?php if (time()>$_smarty_tpl->tpl_vars['slot']->value||!in_array($_smarty_tpl->tpl_vars['slot']->value,$_smarty_tpl->tpl_vars['user_schedules']->value)||in_array($_smarty_tpl->tpl_vars['slot']->value,$_smarty_tpl->tpl_vars['non_user_schedules']->value)) {?>disabled<?php }?> tiny negative ui button" time_slot="<?php echo $_smarty_tpl->tpl_vars['slot']->value;?>
" id="unbook">Unbook</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        
        </div>
        
        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value=="personal") {?>
        
        <div class="twelve wide column">
        
            <div class="ui segment">
            
                <table class="ui basic table segment">
                    <thead>
                        <tr><th>Day</th>
                        <th>Date</th>
                        <th>Start Time</th>
                        <th>Status</th>
                        <th>Modifiers <i class="popup help icon" title="Each consecutive slot worked per day adds 5% onto the slot paycheck"></i></th>
                    </tr></thead>
                    <tbody>
                        <?php  $_smarty_tpl->tpl_vars['slot'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slot']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['all_schedules']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slot']->key => $_smarty_tpl->tpl_vars['slot']->value) {
$_smarty_tpl->tpl_vars['slot']->_loop = true;
?>
                        <?php if (in_array($_smarty_tpl->tpl_vars['slot']->value,$_smarty_tpl->tpl_vars['user_schedules']->value)) {?>
                        <tr>
                            <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['slot']->value,"%A");?>
</td>
                            <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['slot']->value,"%d/%m/%Y");?>
</td>
                            <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['slot']->value,"%H:%M");?>
</td>
                            <td><i class="icon checkmark"></i> Booked</td>
                            <td><?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['user_modifiers']->value[$_smarty_tpl->tpl_vars['slot']->value]);?>
</td>
                        </tr>
                        <?php }?>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        
        </div>
        
        <?php echo print_r($_smarty_tpl->tpl_vars['user_modifiers']->value);?>

        
        <?php }?>
        
    </div>
</div><?php }} ?>
