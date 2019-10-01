<?php
/* Smarty version 3.1.33, created on 2019-09-30 23:41:06
  from 'C:\xampp\htdocs\soiAdmin\view\contato.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d92bcc2971fd0_09192419',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1baf41f70d5327865d966a82bb90e482779f41e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\soiAdmin\\view\\contato.tpl',
      1 => 1569897656,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d92bcc2971fd0_09192419 (Smarty_Internal_Template $_smarty_tpl) {
?>
				<!-- Main -->
					<article id="main">
						<header>
							<h2>Contato</h2>
							<p>Entre em contato para que possamos te atender melhor.</p>
						</header>
						<section class="wrapper style5">
							<div class="inner">

								<section>
									<h4>Solicite um orçamento</h4>
									<p>
										Trabalhamos somente com orçamento, pois assim podemos informar um valor mais justo para nossos clientes, de acordo com sua necessidade. Assim ele ficará mais satisfeito.
									</p>
									<!--<p>This is <b>bold</b> and this is <strong>strong</strong>. This is <i>italic</i> and this is <em>emphasized</em>.
									This is <sup>superscript</sup> text and this is <sub>subscript</sub> text.
									This is <u>underlined</u> and this is code: <code>for (;;) { ... }</code>. Finally, <a href="#">this is a link</a>.</p>-->
									<hr />
								</section>

								<section>
									<h4>Preencha o formulário para orçamento.</h4>
									<form name="contato" method="post" action="" enctype="multipart/form-data">
										<div class="row uniform">
											<div class="6u 12u$(xsmall)">
												<label for="demo-priority-low">Nome</label>
												<input type="text" name="name" id="demo-name" value="" placeholder="Nome" />
											</div>
											<div class="6u$ 12u$(xsmall)">
												<label for="demo-priority-low">E-mail</label>
												<input type="email" name="email" id="demo-email" value="" placeholder="E-mail" />
											</div>

											<div class="6u 12u$(xsmall)">
												<label for="demo-priority-low">Razão Social</label>
												<input type="text" name="razao" id="demo-name" value="" placeholder="Razão Social" />
											</div>

											<div class="6u$ 12u$(xsmall)">
												<label for="demo-priority-low">Tipo de Serviço</label>
												<div class="select-wrapper">
													<select name="servico" id="">
														<option value="">- Selecionar -</option>
														<option value="Design Gráfico">Design Gráfico</option>
														<option value="Web Design">Web Design</option>
														<option value="Design Gráfico/Web Design">Design Gráfico/Web Design</option>
													</select>
												</div>
											</div>

											<div class="6u$ 12u$(xsmall)">
												<label for="demo-priority-low">Telefone</label>
												<input type="text" name="phone" id="demo-email" value="" placeholder="Telefone" />
											</div>

											<div class="6u$ 12u$(xsmall)">
												<label for="demo-priority-low">Região</label>
												<div class="select-wrapper">
													<select name="regiao" id="demo-category">
														<option value="">- Selecionar -</option>
														<option value="zona norte">Zona Norte</option>
														<option value="zona oeste">Zona Oeste</option>
														<option value="zona sul">Zona Sul</option>
														<option value="centro">Centro</option>
													</select>
												</div>
											</div>

											<!--<div class="6u$ 12u$(xsmall)">
												<label for="demo-priority-low">Telefone</label>
												<input type="text" name="phone" id="demo-name" value="" placeholder="Telefone" />
											</div>
											<div class="6u 12u$(xsmall)">
												<label for="demo-priority-low">Razão</label>
												<input type="text" name="name" id="demo-name" value="" placeholder="Nome" />
											</div>-->
											

												

																						<!--<div class="6u 12u$(small)">
												<input type="checkbox" id="demo-copy" name="demo-copy">
												<label for="demo-copy">Email me a copy</label>
											</div>-->
											<div class="6u$ 12u$(small)">
												<!--checked-->
												<input type="checkbox" id="demo-human" name="demo-human">
												<label for="demo-human">Não sou um robô</label>
											</div>
											<div class="12u$">
												<textarea name="mensagem" id="demo-message" placeholder="Digite os detalhes de sua solicitação" rows="6"></textarea>
											</div>
											<div class="12u$">
												<ul class="actions">
													<li><input name="enviar" type="submit" value="Enviar" class="special" /></li>
													<li><input name="limpar" type="reset" value="Limpar" /></li>
												</ul>
											</div>
										</div>
									</form>
								</section>
							</div>
						</section>
					</article><?php }
}
