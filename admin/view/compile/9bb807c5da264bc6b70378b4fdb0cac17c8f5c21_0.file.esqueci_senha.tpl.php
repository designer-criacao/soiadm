<?php
/* Smarty version 3.1.33, created on 2019-03-20 23:01:46
  from 'C:\xampp\htdocs\soiAdmin\admin\view\esqueci_senha.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c92f08a9c4bd6_25823838',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9bb807c5da264bc6b70378b4fdb0cac17c8f5c21' => 
    array (
      0 => 'C:\\xampp\\htdocs\\soiAdmin\\admin\\view\\esqueci_senha.tpl',
      1 => 1538515195,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c92f08a9c4bd6_25823838 (Smarty_Internal_Template $_smarty_tpl) {
?>    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Resetar Senha</div>
        <div class="card-body">
          <div class="text-center mb-4">
            <h4>Esqueceu sua senha?</h4>
            <p>Enter your email address and we will send you instructions on how to reset your password.</p>
          </div>
          <form>
            <div class="form-group">
              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" placeholder="Enter email address" required="required" autofocus="autofocus">
                <label for="inputEmail">Enter email address</label>
              </div>
            </div>
            <a class="btn btn-primary btn-block" href="login.html">Reset Password</a>
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="register.html">Register an Account</a>
            <a class="d-block small" href="login.html">Login Page</a>
          </div>
        </div>
      </div>
    </div><?php }
}
