@extends('crudbooster::admin_template') @section('content')
<!-- Main content -->
<section id='content_section' class="content">
	<div class="box">
		<div>
			<p></p>
			<div class="row">
				<div>
					<div class="col-md-4">
						<!-- Nav tabs -->
						<ul class="nav nav-pills nav-stacked" role="tablist">
							<li role="presentation" class="active"><a href="#general"
								aria-controls="general" role="tab" data-toggle="tab">Informações
									gerais</a></li>
							<li role="presentation"><a href="#moduls" aria-controls="moduls"
								role="tab" data-toggle="tab">Módulos - Como acessar e ações
									básicas</a></li>
							<li role="presentation"><a href="#events" aria-controls="events"
								role="tab" data-toggle="tab">Eventos</a></li>
							<li role="presentation"><a href="#activities"
								aria-controls="activities" role="tab" data-toggle="tab">Atividades</a></li>
							<li role="presentation"><a href="#attendance"
								aria-controls="attendance" role="tab" data-toggle="tab">Registrar
									Presença</a></li>
							<li role="presentation"><a href="#tickets"
								aria-controls="tickets" role="tab" data-toggle="tab">Ingressos</a></li>
							<li role="presentation"><a href="#send_email"
								aria-controls="send_email" role="tab" data-toggle="tab">E-mail</a></li>
							<li role="presentation"><a href="#certificate_templates"
								aria-controls="certificate_templates" role="tab"
								data-toggle="tab">Modelos de certificado</a></li>
							<li role="presentation"><a href="#presenters"
								aria-controls="presenters" role="tab" data-toggle="tab">Ministrantes</a></li>
							<li role="presentation"><a href="#places" aria-controls="places"
								role="tab" data-toggle="tab">Locais, Prédios e Salas</a></li>
							<li role="presentation"><a href="#extra_info"
								aria-controls="extra_info" role="tab" data-toggle="tab">Informações
									Extras</a></li>
							<li role="presentation"><a href="#auxiliar_list"
								aria-controls="auxiliar_list" role="tab" data-toggle="tab">Tipos
									de atividade, Público, Tipos de Ingresso e Departamentos</a></li>
							<li role="presentation"><a href="#user_management"
								aria-controls="user_management" role="tab" data-toggle="tab">Gestão
									de Usuários</a></li>
						</ul>
					</div>
					<div class="col-md-8 text-justify">
						<div style="margin-right: 20px">
							<!-- Tab panes -->
							<div class="tab-content">
								<div role="tabpanel" class="tab-pane active" id="general">
									<h2>Informações Gerais</h2>
									<p>Aqui será detalhado informações da plataforma administrativa
										além de servir como guia para dúvidas e forma de utilização!</p>
									<h2>Perfil de Acesso</h2>
									<p>O sistema é todo modulado baseado em perfis de acesso, cada
										um com permissões bem definidas. A saber:</p>
									<p>
										<label class="label label-default">Usuário comum</label> <label
											class="label label-danger">Monitor</label> <label
											class="label label-warning">Professor</label> <label
											class="label label-success">Coordenador</label> <label
											class="label label-primary">Super Admin</label>
									</p>
									<p>Assim, no início de cada conteúdo, ou após cada ação do
										módulo, será indicado as tags de quais perfis tem acesso a
										aquilo. Mas resumidamente:</p>
									<p>
										<label class="label label-default">Usuário comum</label>: <b>NÃO</b>
										possui acesso ao módulo administrativo
									</p>
									<p>
										<label class="label label-danger">Monitor</label>: Visualizar
										atividades, eventos, ministrantes, ingressos, modelos de
										certificado e e-mails enviados pelas atividades e pelos
										eventos; Registrar presença; Enviar e-mail pelas atividades.
									</p>
									<p>
										<label class="label label-warning">Professor</label>: Mesmas
										permissões de monitor, além: Criar e atualizar: atividades,
										modelos de certificado, ministrantes, locais, prédios, salas e
										ingressos; Enviar e-mail pelo evento; Pode também excluir:
										ingressos.
									</p>
									<p>
										<label class="label label-success">Coordenador</label>: Mesmas
										permissões de professor, além: Criar e atualizar: tipos de
										atividades, audiência de ingressos, tipos de ingressos,
										departamentos e informações extras; Gestão de usuários
										administrativos; Pode também excluir: ministrantes, modelos de
										certificado, atividades e eventos.
									</p>
									<p>
										<label class="label label-primary">Super Admin</label>:
										Responsável pela manutenção do sistema como um todo, sendo
										responsável pela configuração da plataforma, acesso a logs,
										gestão de menus, montar dashboards, gerenciamento de api's e
										módulos, criação e alteração de perfis e suas respectivas
										permissões.
									</p>
									<h2>Módulos</h2>
									<p>
										A parte administrativa usa o CMS CrudBooster, que deixa a
										plataforma modulada, em que muitas das páginas terão a <b>mesma
											estrutura</b>.
									</p>
									<p>Deste modo as partes comuns de criar, atualizar, visualizar,
										excluir e filtrar dados serão descritas de maneira geral sob o
										item Geral.</p>
									<h2>Informações Técnicas</h2>
									<table class="table">
										<tr>
											<td>Linguagem Backend</td>
											<td><a href="https://www.php.net/releases/7_2_0.php">PHP 7.2</a></td>
										</tr>
										<tr>
											<td>Banco de Dados</td>
											<td><a href="https://dev.mysql.com/doc/refman/5.7/en/">MySQL
													5.7</a></td>
										</tr>
										<tr>
											<td>phpMyAdmin</td>
											<td><a
												href="ttps://auth-db179.hostinger.com/index.php?db=u747737416_seventec">Link
													de acesso</a></td>
										</tr>
										<tr>
											<td>Framework</td>
											<td><a href="https://laravel.com/docs/7.x/releases">Laravel
													7.3</a></td>
										</tr>
										<tr>
											<td>CMS - Parte Administrativa</td>
											<td><a
												href="https://github.com/crocodic-studio/crudbooster/blob/v5.5/docs/en/index.md">CRUDBooster
													5.5</a></td>
										</tr>
										<tr>
											<td>Tema - Parte Administrativa</td>
											<td><a href="https://adminlte.io/themes/AdminLTE/index2.html">AdminLTE
													2.38</a></td>
										</tr>
										<tr>
											<th colspan="2">Principais Plugins</th>
										</tr>
										<tr>
											<th>Plugin</th>
											<th>Versão</th>
										</tr>
										<tr>
											<td>Bootstrap</td>
											<td><a href="https://getbootstrap.com/docs/3.4/">3.4.1</a></td>
										</tr>
										<tr>
											<td>JQuery</td>
											<td><a href="https://code.jquery.com/jquery/">2.2.3</a></td>
										</tr>
										<tr>
											<td>DataTables</td>
											<td><a href="https://datatables.net/">1.10.7</a></td>
										</tr>
										<tr>
											<td>SweetAlert</td>
											<td><a href="https://sweetalert.js.org/guides/">1.0</a></td>
										</tr>
										<tr>
											<td>Font Awesome</td>
											<td><a href="https://fontawesome.com/v5/changelog/latest">5.15.3</a></td>
										</tr>
									</table>
								</div>
								<div role="tabpanel" class="tab-pane" id="moduls">
									<h1>Módulos</h1>
									<h2>Como acessar</h2>
									<p>
										Para visualizar um item basta seguir para o módulo desejado. O
										módulo em geral é acessado pelo menu lateral, às vezes
										listados sob o item <i>Listas Auxiliares</i>
									</p>
									<div class="alert alert-info">
										<i class="fa fa-info-circle"></i> Uma exceção são os
										sub-módulos: Ingressos, Enviar E-mail (atividades) e
										Presenças, acessado pelo módulo principal de Atividades. E o
										sub-módulo Enviar E-mail (eventos) sob o módulo de eventos.
									</div>
									<h2>Modelo - Índice</h2>
									<p>Acessado o módulo será carregado uma página de índice com
										uma tabela listando em geral até 20 registros, como no exemplo
										a seguir:</p>
									<figure class="figure text-center">
										<a data-lightbox="index" data-title="modelo de index"
											href="/uploads/help/index.png"> <img
											src="/uploads/help/index.png"
											class="figure-img img-fluid rounded img-thumbnail"
											alt="Modelo de índice">
										</a>
										<figcaption>Exemplo da estrutura da página índice</figcaption>
									</figure>
									<h2>Ações na página de índice</h2>
									<div class="alert alert-info">
										<i class="fa fa-info-circle"></i> Aqui se é listados todos os
										botões geralmente exibidos por padrão. Porém, alguns podem não
										ser exibidos, ou por não existirem naquele módulo, ou por você
										não ter permissão para aquela ação. Outros botões que não são
										padrão serão detalhados no item referente ao próprio módulo.
									</div>
									<table class="table">
										<tr>
											<th>Botão</th>
											<th>Ação</th>
										</tr>
										<tr>
											<td><a class="btn btn-sm btn-primary" title="Mostrar dados">
													<i class="fa fa-table" aria-hidden="true"></i> Mostrar
													dados
											</a></td>
											<td>Atualiza a página</td>
										</tr>
										<tr>
											<td><a class="btn btn-sm btn-success" title="Adicionar dados">
													<i class="fa fa-plus-circle" aria-hidden="true"></i>
													Adicionar dados
											</a></td>
											<td>É redirecionado para outra página para adicionar um novo
												registro do módulo / categoria</td>
										</tr>
										<tr>
											<td><div class="btn-group">
													<button type="button"
														class="btn btn-default btn-sm dropdown-toggle"
														data-toggle="dropdown" aria-expanded="false">
														<i class="fa fa-check-square-o" aria-hidden="true"></i>
														Ações em massa <span class="fa fa-caret-down"
															aria-hidden="true"></span>
													</button>
													<ul class="dropdown-menu">
														<li><a title="Excluir selecionado"><i class="fa fa-trash"
																aria-hidden="true"></i> Excluir selecionado</a></li>
													</ul>
												</div></td>
											<td>Ações em massa executadas em todos os registros que
												estiverem marcados como: <input type="checkbox" checked
												disabled>. Sendo a opção padrão listada: <a
												title="Excluir selecionado"><i class="fa fa-trash"
													aria-hidden="true"></i> Excluir selecionado</a>. Ou seja,
												exclui-se todos os itens previamente selecionados
											</td>
										</tr>
										<tr>
											<th colspan="2">Botões da coluna de ação</th>
										</tr>
										<tr>
											<td><a class="btn btn-xs btn-primary btn-detail"
												title="Detalhar dados"><i class="fa fa-eye"
													aria-hidden="true"></i></a></td>
											<td>Visualizar com detalhes o item. Redireciona para uma tela
												que detalha os dados do registro da linha em questão.</td>
										</tr>
										<tr>
											<td><a class="btn btn-xs btn-success btn-detail"
												title="Editar dados"><i class="fa fa-pencil"
													aria-hidden="true"></i></a></td>
											<td>Editar. Redireciona para uma tela em que se é possível
												atualizar as informações daquele registro.</td>
										</tr>
										<tr>
											<td><a class="btn btn-xs btn-danger btn-detail"
												title="Excluir"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
											<td>Excluir. Abre um pop-up para confirmar a ação ou
												cancelá-la.</td>
										</tr>
										<tr>
											<td><div class="input-group-btn">
													<button type="button" class="btn btn-sm btn-default">
														<i class="fa fa-search" aria-hidden="true"></i>
													</button>
												</div></td>
											<td>Filtra os registros que serão exibidos na tabela com base
												na informação inseridas no campo <i>Buscar</i>:<br> <input
												type="text" class="form-control input-sm"
												style="width: 150px" placeholder="Buscar"
												autocomplete="off chrome-off">
											</td>
										</tr>
										<tr>
											<td><button type='button' title="Reset"
													class='btn btn-sm btn-danger'>
													<i class='fa fa-ban'></i>
												</button></td>
											<td>Após filtrar os registros, este botão aparece ao lado do
												campo <i>Buscar</i>. Tem a função de resetar a pesquisa.
											</td>
										</tr>
										<tr>
											<td><select style="width: 56px;"
												class="form-control input-sm">
													<option value="5">5</option>
													<option value="10">10</option>
													<option selected value="20">20</option>
													<option value="25">25</option>
													<option value="50">50</option>
													<option value="100">100</option>
													<option value="200">200</option>
											</select></td>
											<td>Muda a quantidade de registros exibidos na tabela, que
												por padrão vem com a paginação igual a 20. Opções
												disponíveis: 5, 10, 20, 25, 50, 100 e 200.</td>
										</tr>
										<tr>
											<td><a title="Filtro e ordernação avançados"
												class="btn btn-sm btn-default "> <i class="fa fa-filter"
													aria-hidden="true"></i> Ordernar &amp; Filtrar
											</a></td>
											<td>Útil para quando se há muitos registros e deseja
												filtrá-los. Usa o padrão de linguagem T-SQL.</td>
										</tr>
										<tr>
											<td colspan="2">
												<div class="modal-content">
													<div class="modal-header">
														<button class="close" aria-label="Close" type="button"
															data-dismiss="modal">
															<span aria-hidden="true">×</span>
														</button>
														<h4 class="modal-title">
															<i class="fa fa-filter" aria-hidden="true"></i> Filtro e
															ordernação avançados
														</h4>
													</div>
													<form>
														<div class="modal-body">
															<div class="form-group">
																<div class="row-filter-combo row">
																	<div class="col-sm-2">
																		<strong>Nome</strong>
																	</div>
																	<div class="col-sm-3">
																		<select class="filter-combo form-control">
																			<option value="">** Selecione o operador</option>
																			<option value="like" selected>LIKE</option>
																			<option value="not like">NOT LIKE</option>
																			<option value="=">=(Igual a)</option>
																			<option value="!=">!= (Diferente de)</option>
																			<option value="in">IN</option>
																			<option value="not in">NOT IN</option>
																			<option value="empty">Empty ( or Null)</option>
																		</select>
																	</div>
																	<!--END COL_SM_4-->
																	<div class="col-sm-5">
																		<input type="text" class="filter-value form-control"
																			value="Lorem%ipsum">
																	</div>
																	<!--END COL_SM_6-->
																	<div class="col-sm-2">
																		<select class="form-control">
																			<option value="">Ordenando</option>
																			<option value="asc">ASCENDENTE</option>
																			<option value="desc" selected>DESCENDENTE</option>
																		</select>
																	</div>
																	<!--END_COL_SM_2-->
																</div>
															</div>
														</div>
														<div class="modal-footer" align="right">
															<button class="btn btn-default" type="button">Fechar</button>
															<button class="btn btn-default btn-reset" type="button">Reset</button>
															<button class="btn btn-primary btn-submit" type="button">Enviar</button>
														</div>

													</form>
												</div>
											</td>
										</tr>
										<tr>
											<th colspan="2">Filtro e ordernação avançados</th>
										</tr>
										<tr>
											<td><button class="btn btn-default" type="button">Fechar</button></td>
											<td>Fecha a janela de <i>Filtro e ordernação avançados</i></td>
										</tr>
										<tr>
											<td><button class="btn btn-default btn-reset" type="button">Reset</button></td>
											<td>Limpa os valores preenchidos</td>
										</tr>
										<tr>
											<td><button class="btn btn-primary btn-submit" type="button">Enviar</button></td>
											<td>Envia os dados preenchidos para que os registros sejam
												filtrados e ordenados de acordo</td>
										</tr>
									</table>
									<h2>Ações na página de adicionar / editar</h2>
									<div class="alert alert-info">
										<i class="fa fa-info-circle"></i> Aqui se é listados todos os
										botões geralmente exibidos por padrão. Porém, alguns podem não
										ser exibidos, ou por não existirem naquele módulo, ou por você
										não ter permissão para aquela ação. Outros botões que não são
										padrão serão detalhados no item referente ao próprio módulo.
									</div>
									<table class="table">
										<tr>
											<th>Botão</th>
											<th>Ação</th>
										</tr>
										<tr>
											<td><a title="Return"><i class="fa fa-chevron-circle-left "
													aria-hidden="true"></i> &nbsp; Voltar para a lista de dados
													de NOME_MÓDULO</a></td>
											<td>Volta para a página de índice do módulo</td>
										</tr>
										<tr>
											<td><a class="btn btn-default"><i
													class="fa fa-chevron-circle-left" aria-hidden="true"></i>
													Voltar</a></td>
											<td>Volta para a página anterior</td>
										</tr>
										<tr>
											<td><input type="button" value="Salvar &amp; Adicionar mais"
												class="btn btn-success"></td>
											<td>Salva o registro e continua na mesma página, limpando o
												formulário, para adicionar um novo registro</td>
										</tr>
										<tr>
											<td><input type="button" value="Salvar"
												class="btn btn-success"></td>
											<td>Salva o registro e redireciona para a página de índice do
												módulo</td>
										</tr>
									</table>
									<h2>Ações no Header</h2>
									<table class="table">
										<tr>
											<th>Botão</th>
											<th>Ação</th>
										</tr>
										<tr>
											<td><a href="/admin/help/help" title="Ajuda"
												aria-expanded="false"> <i id="icon_help"
													class="fa fa-question-circle" aria-hidden="true"></i>
											</a></td>
											<td>Redireciona para o manual da plataforma administrativa</td>
										</tr>
										<tr>
											<td><i id="icon_notification" class="fa fa-bell-o"
												aria-hidden="true"></i></td>
											<td>Exibe notificações</td>
										</tr>
										<tr>
											<td><a href="#" class="btn btn-danger"> <!-- The user image in the navbar-->
													<img src="/uploads/1/2021-05/superadmin.png"
													style="float: left; width: 25px; height: 25px; border-radius: 50%; margin-right: 10px; margin-top: -2px;"
													alt="User Image"> <!-- hidden-xs hides the username on small devices so only the image appears. -->
													<span class="hidden-xs">Nome do Usuário</span>
											</a></td>
											<td>Exibe janela com algumas opções para o usuário</td>
										</tr>
									</table>
									<h2>Ações na Janela de Usuário</h2>
									<table class="table">
										<tr>
											<th>Botão</th>
											<th>Ação</th>
										</tr>
										<tr>
											<td><a href="/admin/users/profile" class="btn btn-default"><i
													class="fa fa-user" aria-hidden="true"></i> Perfil</a></td>
											<td>Redireciona para o perfil do usuário</td>
										</tr>
										<tr>
											<td><a title="Lock Screen" href="/admin/lock-screen"
												class="btn btn-default"><i class="fa fa-key"
													aria-hidden="true"></i></a></td>
											<td>Redireciona para a tela de bloqueio</td>
										</tr>
										<tr>
											<td><a title="Sair" class="btn btn-danger"><i
													class="fa fa-power-off" aria-hidden="true"></i></a></td>
											<td>Sair. Faz Log-off.</td>
										</tr>
									</table>
									<h2>Imagens</h2>
									<div class="alert alert-info">
										<i class="fa fa-info-circle"></i> Toda as imagens podem ser
										sobrepostas apenas clicando nelas. Tanto as que estão aqui
										sendo exibidas neste manual como as miniaturas localizadas nas
										tabelas de índice.
									</div>
								</div>
								<div role="tabpanel" class="tab-pane" id="events">
									<h1>Eventos</h1>
									<h2>Acesso</h2>
									<p>
										<label class="label label-danger">Monitor</label> <label
											class="label label-warning">Professor</label> <label
											class="label label-success">Coordenador</label>
									</p>
									<p>No menu lateral clique em:</p>
									<p>
										<a href="/admin/events" class="text-normal"> <i
											class="fa fa-star text-normal" aria-hidden="true"></i> <span>Eventos</span>
										</a>
									</p>
									<h2>Índice</h2>
									<p>
										<label class="label label-danger">Monitor</label> <label
											class="label label-warning">Professor</label> <label
											class="label label-success">Coordenador</label>
									</p>
									<p>
										Segue o padrão listado em <a href="#moduls"
											aria-controls="moduls" role="tab" data-toggle="tab">Módulos -
											Como acessar e ações básicas</a>. Com a diferença no botão de
										ação:
									</p>
									<table class="table">
										<tr>
											<th>Botão</th>
											<th>Ação</th>
										</tr>
										<tr>
											<td><a class="btn btn-xs btn-success" title="E-mail"><i
													class="fa fa-envelope" aria-hidden="true"></i> E-mail</a></td>
											<td>Redireciona para outra tela que permite visualizar os
												e-mails já enviados, mostrando assunto do mesmo e se foi
												enviado ou não. Mais detalhes em: <a href="#send_email"
												aria-controls="send_email" role="tab" data-toggle="tab">E-mail</a>
											</td>
										</tr>
									</table>
									<h2>Adicionar e Editar</h2>
									<p>
										<label class="label label-success">Coordenador</label>
									</p>
									<p></p>
									<table class="table">
										<tr>
											<th>Campo</th>
											<th>Obrigatório?</th>
											<th>Tipo</th>
											<th></th>
										</tr>
										<tr>
											<td>Nome</td>
											<td><label class="label label-success">Sim</label></td>
											<td>Texto</td>
											<td>Nome do evento limitado em 100 caracteres</td>
										</tr>
										<tr>
											<td>Descrição</td>
											<td><label class="label label-danger">Não</label></td>
											<td>Texto</td>
											<td>Descrição do evento limitado em 500 caracteres.
												Recomendado por ser exibido na página pública</td>
										</tr>
										<tr>
											<td>Imagem</td>
											<td><label class="label label-danger">Não</label></td>
											<td>Imagem</td>
											<td>Imagem para ser exibida como banner do evento. Formatos
												aceitos: jpg, png, gif e bmp. Extremamente recomendado por
												ser exibido na página pública</td>
										</tr>
										<tr>
											<td>Início</td>
											<td><label class="label label-success">Sim</label></td>
											<td>Data</td>
											<td>Data de início do evento</td>
										</tr>
										<tr>
											<td>Fim</td>
											<td><label class="label label-success">Sim</label></td>
											<td>Data</td>
											<td>Data de fim do evento</td>
										</tr>
										<tr>
											<td>Coordenador(es)</td>
											<td><label class="label label-success">Sim</label></td>
											<td>Múltiplo Selecionar</td>
											<td>Seleciona os coordenadores do evento. A lista consiste
												nos usuários cadastrados como com o perfil de <label
												class="label label-success">Coordenador</label>
											</td>
										</tr>
										<tr>
											<td>Exibir</td>
											<td><label class="label label-success">Sim</label></td>
											<td>Sim ou Não</td>
											<td>Se o evento pode ser exibido ou não na página pública ou
												para ser selecionado no cadastro de novas atividades no
												módulo administrativo.
												<div class="alert alert-warning">
													<i class="fa fa-exclamation-triangle"></i> Eventos que na
													edição são colocados para não serem exibidos faz com que
													todas as atividades relacionadas a ele sejam
													automaticamente colocadas para não serem exibidas também.
													Porém, caso deseje reexibir novamente será necessário
													editar a exibição de cada atividade manualmente.
												</div>
											</td>
										</tr>
									</table>
									<h2>Excluir</h2>
									<p>
										<label class="label label-success">Coordenador</label>
									</p>
									<div class="alert alert-warning">Só é possível excluir um
										evento se não tiver atividades relacionadas ao mesmo</div>
								</div>
								<div role="tabpanel" class="tab-pane" id="activities">
									<h1>Atividades</h1>
									<h2>Acesso</h2>
									<p>
										<label class="label label-danger">Monitor</label> <label
											class="label label-warning">Professor</label> <label
											class="label label-success">Coordenador</label>
									</p>
									<p>No menu lateral clique em:</p>
									<p>
										<a href="/admin/activities" class="text-normal"> <i
											class="fa fa-chalkboard text-normal" aria-hidden="true"></i>
											<span>Atividades</span>
										</a>
									</p>
									<h2>Índice</h2>
									<p>
										<label class="label label-danger">Monitor</label> <label
											class="label label-warning">Professor</label> <label
											class="label label-success">Coordenador</label>
									</p>
									<p>
										Segue o padrão listado em <a href="#moduls"
											aria-controls="moduls" role="tab" data-toggle="tab">Módulos -
											Como acessar e ações básicas</a>. Com a diferença nos botões
										de ação:
									</p>
									<table class="table">
										<tr>
											<th>Botão</th>
											<th>Ação</th>
										</tr>
										<tr>
											<td><a class="btn btn-xs btn-warning" title="E-mail"><i
													class="fa fa-envelope" aria-hidden="true"></i> E-mail</a></td>
											<td>Redireciona para outra tela que permite visualizar os
												e-mails já enviados, mostrando assunto do mesmo e se foi
												enviado ou não, e podendo ser enviado novo e-mail. Mais
												detalhes em: <a href="#send_email"
												aria-controls="send_email" role="tab" data-toggle="tab">E-mail</a>
											</td>
										</tr>
										<tr>
											<td><a class="btn btn-xs btn-success" title="Presenças"><i
													class="fa fa-calendar-check-o text-normal"
													aria-hidden="true"></i> Presenças</a></td>
											<td>Redireciona para outra tela que permite fazer a gestão de
												presenças dos participantes da atividade. Mais detalhes em:
												<a href="#attendance" aria-controls="attendance" role="tab"
												data-toggle="tab">Registrar Presença</a>
											</td>
										</tr>
										<tr>
											<td><a class="btn btn-xs btn-primary" title="Ingressos"><i
													class="fa fa-ticket text-normal" aria-hidden="true"></i>
													Ingressos</a></td>
											<td>Redireciona para outra tela que permite fazer a gestão de
												ingressos. Mais detalhes em: <a href="#tickets"
												aria-controls="tickets" role="tab" data-toggle="tab">Ingressos</a>
											</td>
										</tr>
									</table>
									<h3>Atividade Online</h3>
									<div class="alert alert-warning">
										<i class="fa fa-exclamation-triangle"></i> Caso a atividade
										seja online, na coluna de <i>Datas</i> há a informação de <b>código</b>,
										gerado automaticamente, que deve ser informado durante a
										atividade para que os participantes consigam registrar a
										própria presença. IMPORTANTE: se houver atualização da
										atividade um novo código será gerado
									</div>
									<h2>Adicionar e Editar</h2>
									<p>
										<label class="label label-warning">Professor</label> <label
											class="label label-success">Coordenador</label>
									</p>
									<p></p>
									<table class="table">
										<tr>
											<th>Campo</th>
											<th>Obrigatório?</th>
											<th>Tipo</th>
											<th></th>
										</tr>
										<tr>
											<td>Nome</td>
											<td><label class="label label-success">Sim</label></td>
											<td>Texto</td>
											<td>Nome da atividade limitado em 100 caracteres</td>
										</tr>
										<tr>
											<td>Descrição</td>
											<td><label class="label label-danger">Não</label></td>
											<td>Texto</td>
											<td>Descrição da atividade limitado em 500 caracteres.
												Recomendado por ser exibido na página pública</td>
										</tr>
										<tr>
											<td>Início das Inscrições</td>
											<td><label class="label label-success">Sim</label></td>
											<td>Data e Hora</td>
											<td>Data e Hora de início das inscrições da atividade</td>
										</tr>
										<tr>
											<td>Ministrante(s)</td>
											<td><label class="label label-danger">Não</label></td>
											<td>Múltiplo Selecionar</td>
											<td>Seleciona os ministrantes da atividade. A lista consiste
												nos itens registrados em <a href="#presenters"
												aria-controls="presenters" role="tab" data-toggle="tab">Ministrantes</a>
											</td>
										</tr>
										<tr>
											<td>Imagem</td>
											<td><label class="label label-danger">Não</label></td>
											<td>Imagem</td>
											<td>Imagem para ser exibida como banner da atividade.
												Formatos aceitos: jpg, png, gif e bmp. Extremamente
												recomendado por ser exibido na página pública</td>
										</tr>
										<tr>
											<td>Tipo de Atividade</td>
											<td><label class="label label-success">Sim</label></td>
											<td>Selecionar</td>
											<td>Seleciona o tipo da atividade. A lista consiste nos itens
												registrados em <a href="#auxiliar_list"
												aria-controls="auxiliar_list" role="tab" data-toggle="tab">Tipos
													de Atividade</a>
											</td>
										</tr>
										<tr>
											<td>Departamento(s)</td>
											<td><label class="label label-success">Sim</label></td>
											<td>Múltiplo Selecionar</td>
											<td>Seleciona os departamentos que a atividade pertence. A
												lista consiste nos itens registrados em <a
												href="#auxiliar_list" aria-controls="auxiliar_list"
												role="tab" data-toggle="tab">Departamentos</a>
											</td>
										</tr>
										<tr>
											<td>Coordenador(es)</td>
											<td><label class="label label-success">Sim</label></td>
											<td>Múltiplo Selecionar</td>
											<td>Seleciona os coordenadores da atividade. A lista consiste
												nos usuários cadastrados como com o perfil de <label
												class="label label-success">Coordenador</label> ou <label
												class="label label-warning">Professor</label>
											</td>
										</tr>
										<tr>
											<td>Modelo de Certificado</td>
											<td><label class="label label-danger">Não</label></td>
											<td>Selecionar</td>
											<td>Seleciona o modelo de certificado. A lista consiste nos
												itens registrados em <a href="#certificate_templates"
												aria-controls="certificate_templates" role="tab"
												data-toggle="tab">Modelos de Certificado</a>
												<div class="alert alert-warning">
													<i class="fa fa-exclamation-triangle"></i> Se não for
													selecionado nenhum modelo a atividade <b>NÃO</b>
													disponibilizará certificado.
												</div>
											</td>
										</tr>
										<tr>
											<td>Datashow</td>
											<td><label class="label label-success">Sim</label></td>
											<td>Sim ou Não</td>
											<td>Se é necessário datashow para atividade</td>
										</tr>
										<tr>
											<td>Laboratório</td>
											<td><label class="label label-success">Sim</label></td>
											<td>Sim ou Não</td>
											<td>Se a atividade precisa ser em laboratório</td>
										</tr>
										<tr>
											<td>Informações Extras</td>
											<td><label class="label label-danger">Não</label></td>
											<td>Múltiplo Selecionar</td>
											<td>Seleciona campos de informações extras para que os
												participantes respondam na inscrição e que não sejam
												informação padrão fornecida no cadastro (como por exemplo:
												Gênero). A lista consiste nos itens registrados em <a
												href="#extra_info" aria-controls="extra_info" role="tab"
												data-toggle="tab">Informações Extras</a>. Exemplos de info
												extra: Escolaridade, RG, RA...
											</td>
										</tr>
										<tr>
											<td>Obs</td>
											<td><label class="label label-danger">Não</label></td>
											<td>Texto</td>
											<td>Observação da atividade limitado em 200 caracteres. Para
												outras informações pertinentes: Ex.: uma necessidade
												específica da atividade, como um cabo, microfone, etc.</td>
										</tr>
										<tr>
											<td>Monitor(es)</td>
											<td><label class="label label-danger">Não</label></td>
											<td>Múltiplo Selecionar</td>
											<td>Seleciona os monitores da atividade. A lista consiste em
												todos usuários cadastrados no módulo administrativo.</td>
										</tr>
										<tr>
											<td>Exibir</td>
											<td><label class="label label-success">Sim</label></td>
											<td>Sim ou Não</td>
											<td>Se a atividade pode ser exibida ou não na página pública.
											</td>
										</tr>
										<tr>
											<th colspan="2"></th>
										</tr>
									</table>
									<h3>Sub Formulário de datas</h3>
									<p>Mais de uma data pode ser associada a uma atividade, por
										exemplo, um curso de duração maior que um dia. Então é exibido
										como um sub formulário que as informações são preenchidas e
										adicionadas a uma tabela.</p>
									<div class="alert alert-warning">
										<i class="fa fa-exclamation-triangle"></i> Caso for edição,
										não se esqueça de salvar a atividade ou os dados modificados
										de data serão perdidos.
									</div>
									<table class="table">
										<tr>
											<th>Campo</th>
											<th>Obrigatório?</th>
											<th>Tipo</th>
											<th></th>
										</tr>
										<tr>
											<td>Data</td>
											<td><label class="label label-success">Sim</label></td>
											<td>Data</td>
											<td>Data da atividade</td>
										</tr>
										<tr>
											<td>Início</td>
											<td><label class="label label-success">Sim</label></td>
											<td>Hora</td>
											<td>Hora de início da atividade</td>
										</tr>
										<tr>
											<td>Fim</td>
											<td><label class="label label-success">Sim</label></td>
											<td>Hora</td>
											<td>Hora de Fim da atividade</td>
										</tr>
										<tr>
											<td>Online</td>
											<td><label class="label label-success">Sim</label></td>
											<td>Sim ou Não</td>
											<td>Se a atividade é online ou não (presencial).</td>
										</tr>
										<tr>
											<td>Sala (se selecionado Online: Não)</td>
											<td><label class="label label-success">Sim</label></td>
											<td>Selecionar</td>
											<td>Seleciona a sala que ocorrerá a atividade. A lista
												consiste nos itens registrados em <a href="#places"
												aria-controls="places" role="tab" data-toggle="tab">Locais,
													Prédios e Salas</a>
											</td>
										</tr>
										<tr>
											<td>Link (se selecionado Online: Sim)</td>
											<td><label class="label label-success">Sim</label></td>
											<td>Texto</td>
											<td>O link onde ocorrerá a atividade online</td>
										</tr>
									</table>
									<h2>Excluir</h2>
									<p>
										<label class="label label-success">Coordenador</label>
									</p>
									<div class="alert alert-warning">Só é possível excluir uma
										atividade que não possua inscrições. Neste caso exclua essa(s)
										atividade(s) ou altere o evento dela(s)</div>
								</div>
								<div role="tabpanel" class="tab-pane" id="attendance">
									<h1>Registrar Presença</h1>
									<p>
										<label class="label label-danger">Monitor</label> <label
											class="label label-warning">Professor</label> <label
											class="label label-success">Coordenador</label>
									</p>
									<h1>Por QR Code</h1>
									<p>
										<b>Estando logado no módulo administrativo</b> basta ler o QR
										code do ingresso do participante e seguir para a URL aberta
										pelo mesmo
									</p>
									<p>Será aberta uma tela como a abaixo:</p>
									<figure class="figure text-center">
										<a data-lightbox="index"
											data-title="modelo de página do resultado de escaneamento de qr code"
											href="/uploads/help/attendance-qrcode.png"> <img
											src="/uploads/help/attendance-qrcode.png"
											class="figure-img img-fluid rounded img-thumbnail"
											alt="Modelo de índice">
										</a>
										<figcaption>Exemplo da modelo de resultado de escaneamento de
											QR Code</figcaption>
									</figure>
									<p>
										Será exibido os campos de <i>Nome do participante</i>, <i>Nome
											da atividade</i> e <i>Resultado</i>. Os resultados possíveis
										são:
									</p>
									<table class="table">
										<tr>
											<th>Mensagem</th>
											<th>Status</th>
											<th>Possível causa e solução</th>
										</tr>
										<tr>
											<td>Inscrição não encontrada</td>
											<td><i class="fa fa-times text-danger"></i></td>
											<td>A inscrição pode ter sido cancelada. Peça para o
												participante gerar o ingresso novamente ou tente dar
												presença pelo módulo manual.</td>
										</tr>
										<tr>
											<td>Fora do horário da atividade (1h a mais ou a menos) para
												registro de presença por QR code</td>
											<td><i class="fa fa-times text-danger"></i></td>
											<td>Fora do horário registrado para a atividade.
												Certifique-se de escanear dentro do intervalo da atividade,
												com até uma hora de antecedência ou uma hora depois da
												atividade.</td>
										</tr>
										<tr>
											<td>Erro</td>
											<td><i class="fa fa-times text-danger"></i></td>
											<td>Erro de sistema. Comunique alguém superior para checagem
												e faça a presença manual.</td>
										</tr>
										<tr>
											<td>Presença concedida</td>
											<td><i class="fa fa-check text-success"></i></td>
											<td>Tudo certo!</td>
										</tr>
									</table>
									<h1>Manualmente</h1>
									<h2>Quando usar?</h2>
									<ul>
										<li>O monitor não tem smartphone/internet para o escaneamento.</li>
										<li>O participante está sem ingresso em mãos.</li>
										<li>Erro no escaneamento</li>
										<li>Conferência com lista de presença</li>
									</ul>
									<h2>Como acessar</h2>
									<p>No menu lateral clique em:</p>
									<p>
										<a href="/admin/activities" class="text-normal"> <i
											class="fa fa-chalkboard text-normal" aria-hidden="true"></i>
											<span>Atividades</span>
										</a>
									</p>
									<p>
										Localize a atividade desejada (use o Buscar ou filtrar para
										refinar) e clique em <a class="btn btn-xs btn-success"
											title="Presenças"><i
											class="fa fa-calendar-check-o text-normal" aria-hidden="true"></i>
											Presenças</a>
									</p>
									<p>Será redirecionado uma tela semelhante ao modelo:</p>
									<figure class="figure text-center">
										<a data-lightbox="index"
											data-title="modelo da página de presença"
											href="/uploads/help/attendances.png"> <img
											src="/uploads/help/attendances.png"
											class="figure-img img-fluid rounded img-thumbnail"
											alt="Modelo de índice">
										</a>
										<figcaption>Exemplo da modelo da página de presenças</figcaption>
									</figure>
									<p>Muito semelhante aos índices de módulos, mas sem a maioria
										dos botões e no topo mostrando o nome e descrição da atividade</p>
									<h4>
										Para presença basta deixar marcado <input type="checkbox"
											checked disabled> ao lado dos nomes, e para faltas desmarcado
										<input type="checkbox" disabled>
									</h4>
									<div class="alert alert-info">
										<i class="fa fa-info-circle"></i> Cada alteração é registrada
										automaticamente
									</div>

								</div>
								<div role="tabpanel" class="tab-pane" id="tickets">
									<h1>Ingressos</h1>
									<h2>Acesso</h2>
									<p>
										<label class="label label-danger">Monitor</label> <label
											class="label label-warning">Professor</label> <label
											class="label label-success">Coordenador</label>
									</p>
									<p>No menu lateral clique em:</p>
									<p>
										<a href="/admin/activities" class="text-normal"> <i
											class="fa fa-chalkboard text-normal" aria-hidden="true"></i>
											<span>Atividades</span>
										</a>
									</p>
									<p>
										Localize a atividade desejada (use o Buscar ou filtrar para
										refinar) e clique em <a class="btn btn-xs btn-primary"
											title="Ingressos"><i class="fa fa-ticket text-normal"
											aria-hidden="true"></i> Ingressos</a>
									</p>
									<h2>Índice</h2>
									<p>
										<label class="label label-danger">Monitor</label> <label
											class="label label-warning">Professor</label> <label
											class="label label-success">Coordenador</label>
									</p>
									<p>Será redirecionado uma tela semelhante ao modelo:</p>
									<figure class="figure text-center">
										<a data-lightbox="index"
											data-title="modelo da página de ingressos"
											href="/uploads/help/tickets.png"> <img
											src="/uploads/help/tickets.png"
											class="figure-img img-fluid rounded img-thumbnail"
											alt="Modelo de índice">
										</a>
										<figcaption>Exemplo da modelo da página de presenças</figcaption>
									</figure>
									<p>
										Muito semelhante aos índices de <a href="#moduls"
											aria-controls="moduls" role="tab" data-toggle="tab">módulos</a>,
										mas com o topo mostrando o nome e descrição da atividade.
									</p>
									<p>É possível visualizar: público, tipo de ingresso, quantidade
										de vagas cadastradas e quantidade ainda disponível.</p>
									<h2>Adicionar</h2>
									<p>
										<label class="label label-warning">Professor</label> <label
											class="label label-success">Coordenador</label>
									</p>
									<table class="table">
										<tr>
											<th>Campo</th>
											<th>Obrigatório?</th>
											<th>Tipo</th>
											<th></th>
										</tr>
										<tr>
											<td>Público</td>
											<td><label class="label label-success">Sim</label></td>
											<td>Selecionar</td>
											<td>Seleciona o tipo de público do ingresso. A lista consiste
												nos itens registrados em <a href="#auxiliar_list"
												aria-controls="auxiliar_list" role="tab" data-toggle="tab">Público</a>
											</td>
										</tr>
										<tr>
											<td>Tipo de Ingresso</td>
											<td><label class="label label-success">Sim</label></td>
											<td>Selecionar</td>
											<td>Seleciona o tipo de ingresso. A lista consiste nos itens
												registrados em <a href="#auxiliar_list"
												aria-controls="auxiliar_list" role="tab" data-toggle="tab">Tipos
													de ingresso</a>
											</td>
										</tr>
										<tr>
											<td>Quantidade</td>
											<td><label class="label label-success">Sim</label></td>
											<td>Número Inteiro</td>
											<td>A quantidade de vagas para esse ingresso</td>
										</tr>
										<tr>
											<td>Disponível</td>
											<td><label class="label label-danger">Não</label></td>
											<td>Gerado Automaticamente</td>
											<td>A quantidade de vagas disponíveis para esse ingresso.
												Campo gerado automaticamente pelo sistema.</td>
										</tr>
									</table>
									<h2>Excluir</h2>
									<p>
										<label class="label label-warning">Professor</label> <label
											class="label label-success">Coordenador</label>
									</p>
									<div class="alert alert-warning">Só é possível excluir um
										ingresso que não tenha recebido inscrições</div>
								</div>
								<div role="tabpanel" class="tab-pane" id="send_email">
									<h1>E-mail</h1>
									<h1>Evento</h1>
									<h2>Acesso</h2>
									<p>
										<label class="label label-danger">Monitor</label> <label
											class="label label-warning">Professor</label> <label
											class="label label-success">Coordenador</label>
									</p>
									<p>No menu lateral clique em:</p>
									<p>
										<a href="/admin/events" class="text-normal"> <i
											class="fa fa-star text-normal" aria-hidden="true"></i> <span>Eventos</span>
										</a>
									</p>
									<p>
										Localize a atividade desejada (use o Buscar ou filtrar para
										refinar) e clique em <a class="btn btn-xs btn-success"
											title="E-mail"><i class="fa fa-envelope" aria-hidden="true"></i>
											E-mail</a>
									</p>
									<p>Será redirecionado para uma tela que exibirá o nome e
										descrição do evento e uma tabela com os e-mails enviados,
										mostrando o assunto dos mesmos e se foram enviados ou não.
										Caso não tenham sido enviados foi provavelmente por algum
										erro.</p>
									<h2>Enviar E-mail</h2>
									<p>
										<label class="label label-warning">Professor</label> <label
											class="label label-success">Coordenador</label>
									</p>
									<p>
										Clique em: <a class="btn btn-xs btn-success"
											title="Adicionar dados"> <i class="fa fa-plus-circle"
											aria-hidden="true"></i> Adicionar dados
										</a>
									</p>
									<table class="table">
										<tr>
											<th>Campo</th>
											<th>Obrigatório?</th>
											<th>Tipo</th>
											<th></th>
										</tr>
										<tr>
											<td>Assunto</td>
											<td><label class="label label-success">Sim</label></td>
											<td>Texto</td>
											<td>Assunto do e-mail limitado em 255 caracteres</td>
										</tr>
										<tr>
											<td>Conteúdo</td>
											<td><label class="label label-success">Sim</label></td>
											<td>Html</td>
											<td>Conteúdo do e-mail limitado em 5000 caracteres</td>
										</tr>
										<tr>
											<td>Somente Newsletter</td>
											<td><label class="label label-success">Sim</label></td>
											<td>Sim ou Não</td>
											<td>Se será enviado apenas para os participantes que marcaram
												newletter como sim ou se para todos os participantes daquele
												evento.</td>
										</tr>
									</table>
									<div class="alert alert-warning">
										<i class="fa fa-exclamation-triangle"></i> MANTENHA AS BOAS
										PRÁTICAS!
										<p>Procure sempre mandar somente para quem aceitou receber
											newsletter, mande e-mails gerais apenas para quando são
											avisos muito importantes, por exemplo, o evento ter sido
											cancelado ou adiado.</p>
										<p>Mensagens sobre aviso de novos eventos, divulgação de
											patrocinadores, entre outros: SOMENTE QUEM MARCOU NEWSLETTER.</p>
									</div>
									<h1>Atividade</h1>
									<h2>Acesso</h2>
									<p>
										<label class="label label-danger">Monitor</label> <label
											class="label label-warning">Professor</label> <label
											class="label label-success">Coordenador</label>
									</p>
									<p>No menu lateral clique em:</p>
									<p>
										<a href="/admin/activities" class="text-normal"> <i
											class="fa fa-chalkboard text-normal" aria-hidden="true"></i>
											<span>Atividades</span>
										</a>
									</p>
									<p>
										Localize a atividade desejada (use o Buscar ou filtrar para
										refinar) e clique em <a class="btn btn-xs btn-warning"
											title="E-mail"><i class="fa fa-envelope" aria-hidden="true"></i>
											E-mail</a>
									</p>
									<p>Será redirecionado para uma tela que exibirá o nome e
										descrição da atividade e uma tabela com os e-mails enviados,
										mostrando o assunto dos mesmos e se foram enviados ou não.
										Caso não tenham sido enviados foi provavelmente por algum
										erro.</p>
									<h2>Enviar E-mail</h2>
									<p>
										<label class="label label-danger">Monitor</label> <label
											class="label label-warning">Professor</label> <label
											class="label label-success">Coordenador</label>
									</p>
									<p>
										Clique em: <a class="btn btn-xs btn-success"
											title="Adicionar dados"> <i class="fa fa-plus-circle"
											aria-hidden="true"></i> Adicionar dados
										</a>
									</p>
									<table class="table">
										<tr>
											<th>Campo</th>
											<th>Obrigatório?</th>
											<th>Tipo</th>
											<th></th>
										</tr>
										<tr>
											<td>Assunto</td>
											<td><label class="label label-success">Sim</label></td>
											<td>Texto</td>
											<td>Assunto do e-mail limitado em 255 caracteres</td>
										</tr>
										<tr>
											<td>Conteúdo</td>
											<td><label class="label label-success">Sim</label></td>
											<td>Html</td>
											<td>Conteúdo do e-mail limitado em 5000 caracteres</td>
										</tr>
										<tr>
											<td>Somente Newsletter</td>
											<td><label class="label label-success">Sim</label></td>
											<td>Sim ou Não</td>
											<td>Se será enviado apenas para os participantes que marcaram
												newletter como sim ou se para todos os participantes daquele
												evento.</td>
										</tr>
									</table>
									<div class="alert alert-warning">
										<i class="fa fa-exclamation-triangle"></i> MANTENHA AS BOAS
										PRÁTICAS!
										<p>Procure sempre mandar somente para quem aceitou receber
											newsletter, mande e-mails gerais apenas para quando são
											avisos muito importantes, por exemplo, a atividade ter sido
											cancelada ou adiada.</p>
										<p>Mensagens sobre aviso de novos eventos, divulgação de
											patrocinadores, entre outros: SOMENTE QUEM MARCOU NEWSLETTER.</p>
									</div>
								</div>
								<div role="tabpanel" class="tab-pane" id="certificate_templates">
									<h1>Modelos de Certificado</h1>
									<h2>Acesso</h2>
									<p>
										<label class="label label-danger">Monitor</label> <label
											class="label label-warning">Professor</label> <label
											class="label label-success">Coordenador</label>
									</p>
									<p>No menu lateral clique em:</p>
									<p>
										<a href="/admin/certificate_templates" class="text-normal"> <i
											class="fa fa-image text-normal" aria-hidden="true"></i> <span>Modelos
												de Certificado</span>
										</a>
									</p>
									<h2>Índice</h2>
									<p>
										<label class="label label-danger">Monitor</label> <label
											class="label label-warning">Professor</label> <label
											class="label label-success">Coordenador</label>
									</p>
									<p>
										Segue o padrão listado em <a href="#moduls"
											aria-controls="moduls" role="tab" data-toggle="tab">Módulos -
											Como acessar e ações básicas</a>.
									</p>
									<h2>Adicionar e Editar</h2>
									<p>
										<label class="label label-warning">Professor</label> <label
											class="label label-success">Coordenador</label>
									</p>
									<p></p>
									<table class="table">
										<tr>
											<th>Campo</th>
											<th>Obrigatório?</th>
											<th>Tipo</th>
											<th></th>
										</tr>
										<tr>
											<td>Nome</td>
											<td><label class="label label-success">Sim</label></td>
											<td>Texto</td>
											<td>Nome do modelo de certificado limitado em 50 caracteres</td>
										</tr>
										<tr>
											<td>Imagem</td>
											<td><label class="label label-success">Sim</label></td>
											<td>Imagem</td>
											<td>Imagem do modelo. Formatos aceitos: jpg, png, gif e bmp.
												A imagem já deve conter as assinaturas, título (Ex.
												Certificado de Participação), e um texto inicial que seria
												antes do nome do participante (Ex. Concedemos este
												certificado a)</td>
										</tr>
										<tr>
											<td>Exibir</td>
											<td><label class="label label-success">Sim</label></td>
											<td>Sim ou Não</td>
											<td>Se o modelo pode ser exibido para ser selecionado no
												cadastro/edição de atividades no módulo administrativo.</td>
										</tr>
									</table>
									<h2>Excluir</h2>
									<p>
										<label class="label label-success">Coordenador</label>
									</p>
									<div class="alert alert-warning">Só é possível excluir um
										modelo de certificado se não tiver atividades relacionadas ao
										mesmo. Neste caso remova ou altere o modelo de certificado
										da(s) atividade(s)</div>
								</div>
								<div role="tabpanel" class="tab-pane" id="presenters">
									<h1>Ministrantes</h1>
									<h2>Acesso</h2>
									<p>
										<label class="label label-danger">Monitor</label> <label
											class="label label-warning">Professor</label> <label
											class="label label-success">Coordenador</label>
									</p>
									<p>No menu lateral clique em:</p>
									<p>
										<a href="/admin/presenters" class="text-normal"> <i
											class="fa fa-chalkboard-teacher text-normal"
											aria-hidden="true"></i> <span>Ministrantes</span>
										</a>
									</p>
									<h2>Índice</h2>
									<p>
										<label class="label label-danger">Monitor</label> <label
											class="label label-warning">Professor</label> <label
											class="label label-success">Coordenador</label>
									</p>
									<p>
										Segue o padrão listado em <a href="#moduls"
											aria-controls="moduls" role="tab" data-toggle="tab">Módulos -
											Como acessar e ações básicas</a>.
									</p>
									<h2>Adicionar e Editar</h2>
									<p>
										<label class="label label-warning">Professor</label> <label
											class="label label-success">Coordenador</label>
									</p>
									<p></p>
									<table class="table">
										<tr>
											<th>Campo</th>
											<th>Obrigatório?</th>
											<th>Tipo</th>
											<th></th>
										</tr>
										<tr>
											<td>Título</td>
											<td><label class="label label-danger">Não</label></td>
											<td>Texto</td>
											<td>Título acadêmico limitado em 20 caracteres</td>
										</tr>
										<tr>
											<td>Nome</td>
											<td><label class="label label-success">Sim</label></td>
											<td>Texto</td>
											<td>Nome do ministrante limitado em 100 caracteres</td>
										</tr>
										<tr>
											<td>E-mail</td>
											<td><label class="label label-success">Sim</label></td>
											<td>Texto</td>
											<td>E-mail do ministrante limitado em 255 caracteres. Para
												este e-mail será enviado o certificado do ministrante</td>
										</tr>
										<tr>
											<td>Telefone</td>
											<td><label class="label label-success">Sim</label></td>
											<td>Texto</td>
											<td>Telefone do ministrante limitado em 15 caracteres.
												Recomenda-se que seja celular para facilitar a comunicação
												se necessária.</td>
										</tr>
										<tr>
											<td>Link</td>
											<td><label class="label label-danger">Não</label></td>
											<td>Texto</td>
											<td>Link do ministrante, preferencialmente linkedin ou
												lattes, limitado em 255 caracteres. Recomendado por aparecer
												na página pública de atividade.</td>
										</tr>
										<tr>
											<td>Foto</td>
											<td><label class="label label-danger">Não</label></td>
											<td>Imagem</td>
											<td>Foto do ministrante. Formatos aceitos: jpg, png, gif e
												bmp. Recomendado por aparecer na página pública de
												atividade.</td>
										</tr>
										<tr>
											<td>Bio</td>
											<td><label class="label label-danger">Não</label></td>
											<td>Texto</td>
											<td>Um breve resumo do ministrante limitado em 300
												caracteres. Recomendado por aparecer na página pública de
												atividade.</td>
										</tr>
										<tr>
											<td>Exibir</td>
											<td><label class="label label-success">Sim</label></td>
											<td>Sim ou Não</td>
											<td>Se o ministrante pode ser exibido para ser selecionado no
												cadastro/edição de atividades no módulo administrativo.</td>
										</tr>
									</table>
									<h2>Excluir</h2>
									<p>
										<label class="label label-success">Coordenador</label>
									</p>
									<div class="alert alert-warning">Só é possível excluir um
										ministrante se não tiver atividades relacionadas ao mesmo.
										Neste caso remova o ministrante da(s) atividade(s) primeiro.</div>
								</div>
								<div role="tabpanel" class="tab-pane" id="places">
									<h1>Locais, Prédios e Salas</h1>
									<h2>Acesso</h2>
									<p>
										<label class="label label-warning">Professor</label> <label
											class="label label-success">Coordenador</label>
									</p>
									<p>No menu lateral, para expandir o menu, clique em:</p>
									<p>
										<a href="#" class="text-normal"> <i
											class="fa fa-bars text-normal" aria-hidden="true"></i> <span>Listas
												Auxiliares</span> <i class="fa fa-angle-right pull-right"
											aria-hidden="true"></i>
										</a>
									</p>
									<p>Após selecione:</p>
									<div style="background-color: #ecf0f5;" class="tabbable">
										<ul class="nav nav-tabs" role="tablist">
											<li role="presentation" class="active"><a
												href="#places-places" aria-controls="places-places"
												role="tab" data-toggle="tab">Locais</a></li>
											<li role="presentation"><a href="#places-buildings"
												aria-controls="places-buildings" role="tab"
												data-toggle="tab">Prédios</a></li>
											<li role="presentation"><a href="#places-rooms"
												aria-controls="places-rooms" role="tab" data-toggle="tab">Salas</a></li>
										</ul>
									</div>
									<div class="tab-content">
										<div role="tabpanel" class="tab-pane fade active in"
											id="places-places">
											<h1>Locais</h1>
											<p>
												<a href="/admin/places" class="text-normal"> <i
													class="fa fa-city" aria-hidden="true"></i> <span>Locais</span>
												</a>
											</p>
											<h2>Índice</h2>
											<p>
												<label class="label label-warning">Professor</label> <label
													class="label label-success">Coordenador</label>
											</p>
											<p>
												Segue o padrão listado em <a href="#moduls"
													aria-controls="moduls" role="tab" data-toggle="tab">Módulos
													- Como acessar e ações básicas</a>.
											</p>
											<h2>Adicionar e Editar</h2>
											<p>
												<label class="label label-warning">Professor</label> <label
													class="label label-success">Coordenador</label>
											</p>
											<p></p>
											<table class="table">
												<tr>
													<th>Campo</th>
													<th>Obrigatório?</th>
													<th>Tipo</th>
													<th></th>
												</tr>
												<tr>
													<td>Nome</td>
													<td><label class="label label-success">Sim</label></td>
													<td>Texto</td>
													<td>Nome do local limitado em 100 caracteres</td>
												</tr>
												<tr>
													<td>CEP</td>
													<td><label class="label label-success">Sim</label></td>
													<td>Número</td>
													<td>CEP do local limitado em 9 caracteres (00000-000)</td>
												</tr>
												<tr>
													<td>Número</td>
													<td><label class="label label-success">Sim</label></td>
													<td>Número Inteiro</td>
													<td>Número do endereço do local</td>
												</tr>
												<tr>
													<td>Complemento</td>
													<td><label class="label label-danger">Não</label></td>
													<td>Texto</td>
													<td>Complemento do endereço do local limitado em 50
														caracteres</td>
												</tr>
												<tr>
													<td>Exibir</td>
													<td><label class="label label-success">Sim</label></td>
													<td>Sim ou Não</td>
													<td>Se o local pode ser exibido para ser selecionado no
														cadastro/edição de prédios no módulo administrativo.</td>
												</tr>
											</table>
											<div class="alert alert-info">
												<i class="fa fa-info-circle"></i> Após preenchido o CEP será
												exibido abaixo Logradouro, Bairro, Cidade e Estado para
												conferência.
											</div>
											<h2>Excluir</h2>
											<p>
												<label class="label label-success">Coordenador</label>
											</p>
											<div class="alert alert-warning">Só é possível excluir um
												local se não tiver prédios relacionados ao mesmo. Nesse caso
												exclua o(s) prédio(s) ou altere o local do(s) mesmo(s).</div>
										</div>
										<div role="tabpanel" class="tab-pane fade"
											id="places-buildings">
											<h1>Prédios</h1>
											<p>
												<a href="/admin/buildings" class="text-normal"> <i
													class="fa fa-building" aria-hidden="true"></i> <span>Prédios</span>
												</a>
											</p>
											<h2>Índice</h2>
											<p>
												<label class="label label-warning">Professor</label> <label
													class="label label-success">Coordenador</label>
											</p>
											<p>
												Segue o padrão listado em <a href="#moduls"
													aria-controls="moduls" role="tab" data-toggle="tab">Módulos
													- Como acessar e ações básicas</a>.
											</p>
											<h2>Adicionar e Editar</h2>
											<p>
												<label class="label label-warning">Professor</label> <label
													class="label label-success">Coordenador</label>
											</p>
											<p></p>
											<table class="table">
												<tr>
													<th>Campo</th>
													<th>Obrigatório?</th>
													<th>Tipo</th>
													<th></th>
												</tr>
												<tr>
													<td>Local</td>
													<td><label class="label label-success">Sim</label></td>
													<td>Selecionar</td>
													<td>Seleciona o local. A lista consiste nos itens
														registrados em <a href="#places-places"
														aria-controls="places-places" role="tab" data-toggle="tab">Locais</a>
													</td>
												</tr>
												<tr>
													<td>Nome</td>
													<td><label class="label label-success">Sim</label></td>
													<td>Texto</td>
													<td>Nome do prédio limitado em 50 caracteres</td>
												</tr>
												<tr>
													<td>Exibir</td>
													<td><label class="label label-success">Sim</label></td>
													<td>Sim ou Não</td>
													<td>Se o local pode ser exibido para ser selecionado no
														cadastro/edição de salas no módulo administrativo.</td>
												</tr>
											</table>
											<h2>Excluir</h2>
											<p>
												<label class="label label-success">Coordenador</label>
											</p>
											<div class="alert alert-warning">Só é possível excluir um
												prédio se não tiver salas relacionadas ao mesmo. Nesse caso
												exclua a(s) sala(s) ou altere o prédio da(s) mesma(s).</div>
										</div>
										<div role="tabpanel" class="tab-pane fade" id="places-rooms">
											<h1>Salas</h1>
											<p>
												<a href="/admin/rooms" class="text-normal"> <i
													class="fa fa-door-closed" aria-hidden="true"></i> <span>Salas</span>
												</a>
											</p>
											<h2>Índice</h2>
											<p>
												<label class="label label-warning">Professor</label> <label
													class="label label-success">Coordenador</label>
											</p>
											<p>
												Segue o padrão listado em <a href="#moduls"
													aria-controls="moduls" role="tab" data-toggle="tab">Módulos
													- Como acessar e ações básicas</a>.
											</p>
											<h2>Adicionar e Editar</h2>
											<p>
												<label class="label label-warning">Professor</label> <label
													class="label label-success">Coordenador</label>
											</p>
											<p></p>
											<table class="table">
												<tr>
													<th>Campo</th>
													<th>Obrigatório?</th>
													<th>Tipo</th>
													<th></th>
												</tr>
												<tr>
													<td>Prédio</td>
													<td><label class="label label-success">Sim</label></td>
													<td>Selecionar</td>
													<td>Seleciona o prédio. A lista consiste nos itens
														registrados em <a href="#places-buildings"
														aria-controls="places-buildings" role="tab"
														data-toggle="tab">Prédios</a>
													</td>
												</tr>
												<tr>
													<td>Nome</td>
													<td><label class="label label-success">Sim</label></td>
													<td>Texto</td>
													<td>Nome/Número da sala limitado em 50 caracteres</td>
												</tr>
												<tr>
													<td>Andar</td>
													<td><label class="label label-success">Sim</label></td>
													<td>Número Inteiro</td>
													<td>Andar que fica a sala. 0 se térreo.</td>
												</tr>
												<tr>
													<td>Capacidade</td>
													<td><label class="label label-success">Sim</label></td>
													<td>Número Inteiro</td>
													<td>Capacidade da sala</td>
												</tr>
												<tr>
													<td>Datashow</td>
													<td><label class="label label-success">Sim</label></td>
													<td>Sim ou Não</td>
													<td>Se a sala possui datashow</td>
												</tr>
												<tr>
													<td>Laboratório</td>
													<td><label class="label label-success">Sim</label></td>
													<td>Sim ou Não</td>
													<td>Se a sala é laboratório</td>
												</tr>
												<tr>
													<td>Exibir</td>
													<td><label class="label label-success">Sim</label></td>
													<td>Sim ou Não</td>
													<td>Se o local pode ser exibido para ser selecionado no
														cadastro/edição de atividades no módulo administrativo.</td>
												</tr>
											</table>
											<h2>Excluir</h2>
											<p>
												<label class="label label-success">Coordenador</label>
											</p>
											<div class="alert alert-warning">Só é possível excluir uma
												sala se não tiver atividades relacionadas à mesma. Nesse
												caso altere a sala da(s) mesma(s).</div>
										</div>
									</div>
								</div>
								<div role="tabpanel" class="tab-pane" id="extra_info">
									<h1>Informações extras</h1>
									<div class="alert alert-info">
										<i class="fa fa-info-circle"></i> São campos extras que podem
										ser solicitados para que os participantes preencham na hora da
										inscrição para aquela atividade
									</div>
									<h2>Acesso</h2>
									<p>
										<label class="label label-success">Coordenador</label>
									</p>
									<p>No menu lateral, para expandir o menu, clique em:</p>
									<p>
										<a href="#" class="text-normal"> <i
											class="fa fa-bars text-normal" aria-hidden="true"></i> <span>Listas
												Auxiliares</span> <i class="fa fa-angle-right pull-right"
											aria-hidden="true"></i>
										</a>
									</p>
									<p>Após selecione:</p>
									<p>
										<a href="/admin/extra_info" class="text-normal"> <i
											class="fa fa-info-circle" aria-hidden="true"></i> <span>Informações
												Extras</span>
										</a>
									</p>
									<h2>Índice</h2>
									<p>
										<label class="label label-success">Coordenador</label>
									</p>
									<p>
										Segue o padrão listado em <a href="#moduls"
											aria-controls="moduls" role="tab" data-toggle="tab">Módulos -
											Como acessar e ações básicas</a>.
									</p>
									<h2>Adicionar e Editar</h2>
									<p>
										<label class="label label-success">Coordenador</label>
									</p>
									<p></p>
									<div class="alert alert-warning">Para usar: regras, validação
										ou relacionamento é necessário um conhecimento mais avançado.
									</div>
									<table class="table">
										<tr>
											<th>Campo</th>
											<th>Obrigatório?</th>
											<th>Tipo</th>
											<th></th>
										</tr>
										<tr>
											<td>Nome</td>
											<td><label class="label label-success">Sim</label></td>
											<td>Texto</td>
											<td>Nome do item limitado em 50 caracteres</td>
										</tr>
										<tr>
											<td>Nome do campo</td>
											<td><label class="label label-success">Sim</label></td>
											<td>Texto</td>
											<td>Nome do campo (input) limitado em 50 caracteres. Somente
												letras.
												<div class="alert alert-warning">
													<i class="fa fa-exclamation-triangle"></i> Cuidado com o
													nome dado! Nada de nomes como: id, submit
												</div>
											</td>
										</tr>
										<tr>
											<td>Validação</td>
											<td><label class="label label-danger">Não</label></td>
											<td>Texto</td>
											<td>Validação Laravel (<a
												href="https://laravel.com/docs/master/validation#available-validation-rules"
												target="_blank">Documentação</a>). Limitado em 100
												caracteres.
											</td>
										</tr>
										<tr>
											<td>Regras</td>
											<td><label class="label label-danger">Não</label></td>
											<td>Texto</td>
											<td>Regras do input: type, placeholder, etc. Estrutura:
												key:value, separator:|; Ex:
												required:required|type:text|placeholder:Como preencher o
												campo. Types por enquanto só select e inputs do tipo
												text/number/date. Limitado em 200 caracteres.</td>
										</tr>
										<tr>
											<td>Relacionamento Tabela de Usuários</td>
											<td><label class="label label-danger">Não</label></td>
											<td>Texto</td>
											<td>Caso o campo se relacione a alguma coluna da tabela
												users. Se este campo for um foreign key:
												foreign_key,table.column. Onde table.column é o nome a ser
												exibido. Ex: gender_id,genders.name. Limitado em 100
												caracteres.</td>
										</tr>
										<tr>
											<td>Exibir</td>
											<td><label class="label label-success">Sim</label></td>
											<td>Sim ou Não</td>
											<td>Se o campo pode ser exibido para ser selecionado no
												cadastro/edição de atividades no módulo administrativo.</td>
										</tr>
									</table>
									<h2>Excluir</h2>
									<p>
										<label class="label label-primary">Super Admin</label>
									</p>
									<div class="alert alert-warning">
										Devido às regras de negócio que dependem de vários dos itens
										cadastrados, somente o Super Admin pode excluir tais itens,
										para garantir que a exclusão não quebre o sistema. Uma
										alternativa é selecionar como exibir como <b>Não</b> assim a
										opção não aparece para cadastros e edições.
									</div>
								</div>

								<div role="tabpanel" class="tab-pane" id="auxiliar_list">
									<h1>Listas Auxiliares</h1>
									<div class="alert alert-info">
										<i class="fa fa-info-circle"></i> Tipos de atividade, Público,
										Tipos de Ingresso e Departamentos possuem a mesma estrutura, e
										permissões por isso serão condensadas num só local
									</div>
									<h2>Acesso</h2>
									<p>
										<label class="label label-success">Coordenador</label>
									</p>
									<p>No menu lateral, para expandir o menu, clique em:</p>
									<p>
										<a href="#" class="text-normal"> <i
											class="fa fa-bars text-normal" aria-hidden="true"></i> <span>Listas
												Auxiliares</span> <i class="fa fa-angle-right pull-right"
											aria-hidden="true"></i>
										</a>
									</p>
									<p>Após selecione:</p>
									<p>
										<a href="/admin/activity_types" class="text-normal"> <i
											class="fa fa-laptop" aria-hidden="true"></i> <span>Tipos de
												Atividade</span>
										</a>
									</p>
									<p>
										<a href="/admin/audience" class="text-normal"> <i
											class="fa fa-users" aria-hidden="true"></i> <span>Público</span>
										</a>
									</p>
									<p>
										<a href="/admin/ticket_genres" class="text-normal"> <i
											class="fa fa-ticket" aria-hidden="true"></i> <span>Tipos de
												Ingresso</span>
										</a>
									</p>
									<p>
										<a href="/admin/departments" class="text-normal"> <i
											class="fa fa-university" aria-hidden="true"></i> <span>Departamentos</span>
										</a>
									</p>
									<h2>Índice</h2>
									<p>
										<label class="label label-success">Coordenador</label>
									</p>
									<p>
										Segue o padrão listado em <a href="#moduls"
											aria-controls="moduls" role="tab" data-toggle="tab">Módulos -
											Como acessar e ações básicas</a>.
									</p>
									<h2>Adicionar e Editar</h2>
									<p>
										<label class="label label-success">Coordenador</label>
									</p>
									<p></p>
									<table class="table">
										<tr>
											<th>Campo</th>
											<th>Obrigatório?</th>
											<th>Tipo</th>
											<th></th>
										</tr>
										<tr>
											<td>Nome</td>
											<td><label class="label label-success">Sim</label></td>
											<td>Texto</td>
											<td>Nome do item limitado em 50 caracteres</td>
										</tr>
										<tr>
											<td>Exibir</td>
											<td><label class="label label-success">Sim</label></td>
											<td>Sim ou Não</td>
											<td>Se o local pode ser exibido para ser selecionado no
												cadastro/edição dos formulários relacionados no módulo
												administrativo.</td>
										</tr>
									</table>
									<div class="alert alert-info">
										<i class="fa fa-info-circle"></i> O módulo de departamentos
										possui um campo selecionar múltiplo, opcional, que se pode
										selecionar ou remover pessoas com os perfis: <label
											class="label label-warning">Professor</label> e <label
											class="label label-success">Coordenador</label>. Esse
										relacionamento pode ser feito também na parte de gestão de
										usuário, durante o cadastro, porém aqui é facilitado para se
										ver todos os usuários de um determinado departamento.
									</div>
									<h2>Excluir</h2>
									<p>
										<label class="label label-primary">Super Admin</label>
									</p>
									<div class="alert alert-warning">
										Devido às regras de negócio que dependem de vários dos itens
										cadastrados, somente o Super Admin pode excluir tais itens,
										para garantir que a exclusão não quebre o sistema. Uma
										alternativa é selecionar como exibir como <b>Não</b> assim a
										opção não aparece para cadastros e edições.
									</div>
								</div>
								<div role="tabpanel" class="tab-pane" id="user_management">
									<h1>Gestão de Usuários</h1>
									<h2>Acesso</h2>
									<p>
										<label class="label label-success">Coordenador</label>
									</p>
									<p>No menu lateral clique em:</p>
									<p>
										<a href="/admin/users" class="text-normal"> <i
											class="fa fa-users text-normal" aria-hidden="true"></i> <span>Gestão
												de usuários</span>
										</a>
									</p>
									<h2>Índice</h2>
									<p>
										<label class="label label-success">Coordenador</label>
									</p>
									<p>
										Segue o padrão listado em <a href="#moduls"
											aria-controls="moduls" role="tab" data-toggle="tab">Módulos -
											Como acessar e ações básicas</a>.
									</p>
									<h2>Adicionar</h2>
									<p>
										<label class="label label-success">Coordenador</label>
									</p>
									<p></p>
									<table class="table">
										<tr>
											<th>Campo</th>
											<th>Obrigatório?</th>
											<th>Tipo</th>
											<th></th>
										</tr>
										<tr>
											<td>Nome</td>
											<td><label class="label label-success">Sim</label></td>
											<td>Texto</td>
											<td>Nome do usuário limitado em 255 caracteres</td>
										</tr>
										<tr>
											<td>LinkedIn</td>
											<td><label class="label label-danger">Não</label></td>
											<td>Texto</td>
											<td>Link do LinkedIn do usuário limitado em 255 caracteres</td>
										</tr>
										<tr>
											<td>Lattes</td>
											<td><label class="label label-danger">Não</label></td>
											<td>Texto</td>
											<td>Link do Lattes do usuário limitado em 255 caracteres</td>
										</tr>
										<tr>
											<td>Foto</td>
											<td><label class="label label-danger">Não</label></td>
											<td>Imagem</td>
											<td>Foto do usuário. Formatos aceitos: jpg, png, gif e bmp.</td>
										</tr>
										<tr>
											<td>Perfil</td>
											<td><label class="label label-success">Sim</label></td>
											<td>Selecionar</td>
											<td>Seleciona o perfil de acesso do usuários. A lista
												consiste nos itens: <label class="label label-default">Usuário
													comum</label> <label class="label label-danger">Monitor</label>
												<label class="label label-warning">Professor</label> <label
												class="label label-success">Coordenador</label>. Explicado
												em <a href="#general" aria-controls="general" role="tab"
												data-toggle="tab">Informações gerais</a>
											</td>
										</tr>
										<tr>
											<td>Departamento(s)</td>
											<td><label class="label label-danger">Não</label></td>
											<td>Múltiplo Selecionar</td>
											<td>Seleciona o(s) departamento(s) relacionado(s) ao usuário.
												A lista consiste nos itens registrados em <a
												href="#auxiliar_list" aria-controls="auxiliar_list"
												role="tab" data-toggle="tab">Departamentos</a>
											</td>
										</tr>
										<tr>
											<td>Telefone</td>
											<td><label class="label label-success">Sim</label></td>
											<td>Texto</td>
											<td>Telefone do usuário limitado em 15 caracteres.</td>
										</tr>
										<tr>
											<td>E-mail</td>
											<td><label class="label label-success">Sim</label></td>
											<td>Texto</td>
											<td>E-mail do usuário limitado em 255 caracteres</td>
										</tr>
									</table>
									<h2>Editar</h2>
									<p>Cada usuário consegue editar seu próprio usuário.</p>
									<h3>Acesso</h3>
									<p>No topo da página clique no seu nome, aparecerá uma janela
										como essa:</p>
									<ul
										style="list-style-type: none; border: 1px solid #ddd; background: #fff; border-bottom-right-radius: 4px; border-bottom-left-radius: 4px; border-top-right-radius: 0; border-top-left-radius: 0; padding: 1px 0 0 0; border-top-width: 0; width: 280px;">
										<!-- The user image in the menu -->
										<li
											style="display: list-item; height: 175px; padding: 10px; text-align: center; background-color: #dd4b39;"><img
											src="/uploads/1/2021-05/superadmin.png" class="img-circle"
											style="z-index: 5; height: 90px; width: 90px; border: 3px solid; border-color: transparent; border-color: rgba(255, 255, 255, 0.2);"
											alt="User Image">
											<p
												style="z-index: 5; color: #fff; color: rgba(255, 255, 255, 0.8); font-size: 17px; margin-top: 10px;">
												Nome do Usuário <small
													style="display: block; font-size: 12px;">Perfil do Usuário</small>
												<small style="display: block; font-size: 12px;"><em>quarta-feira,
														09 de junho de 2021</em></small>
											</p></li>
										<!-- Menu Footer-->
										<li
											style="height: 60px; display: list-item; background-color: #f9f9f9; padding: 10px;">
											<div class="pull-left">
												<a class="btn btn-default btn-flat"><i class="fa fa-user"
													aria-hidden="true"></i> Perfil</a>
											</div>
											<div class="pull-right">
												<a title="Lock Screen" class="btn btn-default btn-flat"><i
													class="fa fa-key" aria-hidden="true"></i></a> <a
													title="Sair" class="btn btn-danger btn-flat"><i
													class="fa fa-power-off" aria-hidden="true"></i></a>
											</div>
										</li>
									</ul>
									<p>
										Nela se clicará em <a class="btn btn-default btn-xs"><i
											class="fa fa-user" aria-hidden="true"></i> Perfil</a> onde
										você poderá editar seus dados e alterar a senha. Únicos campos
										que não serão editáveis são: Perfil do usuário e departamento.
									</p>
									<div class="alert alert-info">
										<i class="fa fa-info-circle"></i> Somente <label
											class="label label-primary">Super Admin</label> consegue
										trocar perfis de usuários.
									</div>
									<h2>Excluir</h2>
									<p>
										<label class="label label-primary">Super Admin</label>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</section>
<!-- end content -->
@endsection @push('bottom')
<script type="text/javascript">
	$("ul.nav-tabs a").click(function (e) {
  		e.preventDefault();  
    	$(this).tab('show');
	});
	</script>
@endpush
