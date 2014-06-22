<?php /* Smarty version Smarty-3.1.17, created on 2014-06-22 22:06:04
         compiled from "templates/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:115462987753820414a68259-12187381%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81a0270564c79ee7a1c4f40d2a5e8bcfac7e3570' => 
    array (
      0 => 'templates/login.tpl',
      1 => 1403474755,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '115462987753820414a68259-12187381',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_53820414a69a82_09891957',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53820414a69a82_09891957')) {function content_53820414a69a82_09891957($_smarty_tpl) {?><div class="ui grid">
  <div class="four wide column">
  </div>
  <div class="four wide column">
    <div class="ui segment login_segment">
        <img src="/assets/images/logo.png" class="login_logo" />
    </div>
  </div>
  <div class="four wide column">
    <div class="ui small form segment login_segment">
    <form action="/login" method="post">
      <div class="field">
        <label>Username</label>
        <div class="ui left labeled icon input">
          <input type="text" placeholder="Username" name="user">
          <i class="user icon"></i>
          <div class="ui corner label">
            <i class="icon asterisk"></i>
          </div>
        </div>
      </div>
      <div class="field">
        <label>Password</label>
        <div class="ui left labeled icon input">
          <input type="password" name="pass">
          <i class="lock icon"></i>
          <div class="ui corner label">
            <i class="icon asterisk"></i>
          </div>
        </div>
      </div>
      <div class="ui error message">
        <div class="header">We noticed some issues</div>
      </div>
      <button type="submit" class="ui small blue submit button">Login</div>
    </form>
    </div>
  </div>
  <div class="four wide column">
  </div>
</div><?php }} ?>
