<?php
/* Smarty version 3.1.33, created on 2019-10-10 20:21:56
  from 'C:\xampp\htdocs\soiAdmin\admin\view\registrar_login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d9fbd14418b80_63560377',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bfaa0c86450aa1fa8f87dd5088542b8bac04f570' => 
    array (
      0 => 'C:\\xampp\\htdocs\\soiAdmin\\admin\\view\\registrar_login.tpl',
      1 => 1570749713,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d9fbd14418b80_63560377 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Register an Account</div>
        <div class="card-body">
          <form method="post" action="">
            <div class="form-group">
              <div class="form-row">
                                <div class="col-md-12">
                  <div class="form-label-group">
                    <input type="text" name="lastName" id="lastName" class="form-control" placeholder="Last name" required="required">
                    <label for="lastName">Last name</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="email" name="inputEmail" id="inputEmail" class="form-control" placeholder="Email address" required="required">
                <label for="inputEmail">Email address</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="password" name="inputPassword" id="inputPassword" class="form-control" placeholder="Password" required="required">
                    <label for="inputPassword">Password</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="password" name="confSenha" id="confirmPassword" class="form-control" placeholder="Confirm password" required="required">
                    <label for="confirmPassword">Confirm password</label>
                  </div>
                </div>
              </div>
            </div>
                        <div class="col-md-12">
              <button type="submit" name="registrar" class="btn btn-info btn-block"> <i class="fa fa-check"></i> Gravar </button>
            </div>
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="login.html">Login Page</a>
            <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
          </div>
        </div>
      </div>
    </div><?php }
}
