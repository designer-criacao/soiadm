<?php
/* Smarty version 3.1.33, created on 2018-10-26 13:23:12
  from 'C:\xampp\htdocs\soiAdmin\admin\view\grafico.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bd33f70acc327_01051981',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45d145f74399fad6af54b2dc840661aa80c37ce6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\soiAdmin\\admin\\view\\grafico.tpl',
      1 => 1538455997,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bd33f70acc327_01051981 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Gráficos</li>
          </ol>

          <!-- Area Chart Example-->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-chart-area"></i>
              Exemplo de Gráfico de Área</div>
            <div class="card-body">
              <canvas id="myAreaChart" width="100%" height="30"></canvas>
            </div>
            <div class="card-footer small text-muted">Atualizado ontem às 11:59 PM</div>
          </div>

          <div class="row">
            <div class="col-lg-8">
              <div class="card mb-3">
                <div class="card-header">
                  <i class="fas fa-chart-bar"></i>
                  Exemplo Gráfico de Barras</div>
                <div class="card-body">
                  <canvas id="myBarChart" width="100%" height="50"></canvas>
                </div>
                <div class="card-footer small text-muted">Atualizado ontem às 11:59 PM</div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card mb-3">
                <div class="card-header">
                  <i class="fas fa-chart-pie"></i>
                  Exemplo Gráfico de Pizza</div>
                <div class="card-body">
                  <canvas id="myPieChart" width="100%" height="100"></canvas>
                </div>
                <div class="card-footer small text-muted">Atualizado ontem às 11:59 PM</div>
              </div>
            </div>
          </div>

          <p class="small text-center text-muted my-5">
            <em>Em breve mais exemplos de gráficos...</em>
          </p><?php }
}
