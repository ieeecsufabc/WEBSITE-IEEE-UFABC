<?php get_header() ?>

<section id="home">
		<!-- "Miolo" da Home -->
		<div class="container-fluid">
			<!-- Primeira seção -->
			<div class="row" id="banner">
					<img src= <?php echo get_template_directory_uri()."/assets/images/ilustracoes/banner.jpg"?> alt="Banner" class="img-fluid">
			</div>

			<!-- Segunda seção -->
			<div class="row justify-content-center secoes">
				<div class="col-lg-4 mr-lg-5">
					<h1 class="titulos">O que é o IEEE?</h1>
					<img src= <?php echo get_template_directory_uri()."/assets/images/ilustracoes/linha-azul.svg"?> class="mb-3 wow slideInLeft" data-wow-duration="1s" data-wow-delay="1s"/>
					<center>
						<img src= <?php echo get_template_directory_uri()."/assets/images/logos/IEEE_Mundial_Completo.svg"?> id="logo-ieee-mundial" width="350px" class="wow fadeIn" alt="Logo IEE mundial" data-wow-duration="1s" data-wow-delay="1.5s"/>
					</center>
				</div>

				<div class="col-lg-6 descricao-ieee align-self-end text-justify">
						<p>
							(TEM QUE FALAR SOBRE O IEEE E AS SOCIEDADES TAMBÉM)Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vestibulum blandit nisl et molestie. Donec neque lorem, pellentesque quis ullamcorper quis, pharetra at eros.
						</p>
						<br>
						<p>
							Suspendisse lobortis sapien et urna consequat, sed commodo eros bibendum. Quisque sed neque eget odio semper dignissim. Suspendisse lobortis sapien et urna consequat, sed commodo eros bibendum. Quisque sed neque eget odio semper dignissim.
							<a href="#">
								<span class="textRegular">Saiba mais
									<img src= <?php echo get_template_directory_uri()."/assets/icons/icon-redirecionamento.svg"?>>
								</span>
							</a>
						</p>
				</div>
			</div>

			<!-- Terceira seção -->
			<div class="row flex-row-reverse justify-content-center secoes">
				<div class="col-lg-4">
					<h1 class="titulos" style="text-align: right;">... e o IEEE UFABC então?</h1>
					<img src= <?php echo get_template_directory_uri()."/assets/images/ilustracoes/linha-azul.svg"?> style="float: right;" class="mb-3 wow slideInRight" data-wow-duration="1s"/>
					<center>
						<img src= <?php echo get_template_directory_uri()."/assets/images/logos/LogoIEEEUFABC.svg"?> width="350px" id="logo-ieee-ufabc" class="wow fadeIn" alt="Logo IEEE UFABC" data-wow-duration="1s" data-wow-delay="1s"/>
					</center>
				</div>

				<div class="col-lg-6 descricao-ieee align-self-end text-justify mr-lg-5">
					<p>
						(TEM QUE FALAR SOBRE O IEEE E AS SOCIEDADES TAMBÉM)Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vestibulum blandit nisl et molestie. Donec neque lorem, pellentesque quis ullamcorper quis, pharetra at eros.
					</p>
					<br>
					<p>
						Suspendisse lobortis sapien et urna consequat, sed commodo eros bibendum. Quisque sed neque eget odio semper dignissim. Suspendisse lobortis sapien et urna consequat, sed commodo eros bibendum. Quisque sed neque eget odio semper dignissim. Saiba mais
					</p>
				</div>

			</div>

			<!-- Quarta seção -->
			<div class="row justify-content-center secoes">

				<div class="col-lg-4 mr-lg-5">
					<h1 class="titulos">O que fazemos?</h1>
					<img src= <?php echo get_template_directory_uri()."/assets/images/ilustracoes/linha-azul.svg"?> class="mb-3 wow slideInLeft" data-wow-duration="1s" data-wow-delay="1s"/>

					<!-- Revisar -->
					<center>
					<div class="w3-content w3-section wow fadeIn" id="imagens-o-que-fazemos" data-wow-duration="1s" data-wow-delay="0.5s" style="max-width:500px">
						<img class="mySlides" src= <?php echo get_template_directory_uri()."/assets/images/ilustracoes/img1-o-que-fazemos.png"?> style="width:100%" alt="Imagem sobre o que fazemos">
						<img class="mySlides" src= <?php echo get_template_directory_uri()."/assets/images/ilustracoes/img2-o-que-fazemos.png"?> style="width:100%" alt="Imagem sobre o que fazemos">
						<img class="mySlides" src= <?php echo get_template_directory_uri()."/assets/images/ilustracoes/img3-o-que-fazemos.png"?> style="width:100%" alt="Imagem sobre o que fazemos">
					</div>
					</center>

				</div>

				<div class="col-lg-6 descricao-ieee text-justify align-self-center">
					<h2 class="titulo2" style="color: #0072A6;">Projetos técnicos</h2>
					<p>Suspendisse lobortis sapien et urna consequat, sed commodo eros bibendum. Quisque sed neque eget odio semper dignissim. Suspendisse lobortis sapien et.</p>
					<br>
					<h2 class="titulo2" style="color: #0072A6;">Projetos sociais</h2>
					<p>Suspendisse lobortis sapien et urna consequat, sed commodo eros bibendum. Quisque sed neque eget odio semper dignissim. Suspendisse lobortis sapien et.</p>
					<br>
					<h2 class="titulo2" style="color: #0072A6;">Visitas técnicas</h2>
					<p>Suspendisse lobortis sapien et urna consequat, sed commodo eros bibendum. Quisque sed neque eget odio semper dignissim. Suspendisse lobortis sapien et.</p>
				</div>

			</div>

			<!-- Quinta seção -->
			<div class="row justify-content-center secoes">

				<div class="col-lg-6 mr-lg-5">
					<h1 class="titulos">Sete capítulos onde participar</h1>
					<img src= <?php echo get_template_directory_uri()."/assets/images/ilustracoes/linha-azul.svg"?> class="mb-3 wow slideInLeft" data-wow-duration="1s" data-wow-delay="1s"/>
					<p class="descricao-ieee mt-4"><b>O que são capítulos?</b></p>
					<p class="descricao-ieee">Capítulos reunem membros com interesses em comum blablabla.<b> Escolha abaixo um capitulo!</b></p>
					<div class="pl-5 pr-5 descricao-capitulos">
						<h2 id="titulo-capitulo">AESS</h2>
								<p class="descricao-ieee" name="descricoes" id="descricao-AESS">Descrição da AESS Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vestibulum blandit.</p>
								<p class="descricao-ieee" name="descricoes" id="descricao-CS">Descrição da CS Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vestibulum blandit.</p>
								<p class="descricao-ieee" name="descricoes" id="descricao-EMBS">Descrição da EMBS Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vestibulum blandit.</p>
								<p class="descricao-ieee" name="descricoes" id="descricao-EPS">Descrição da EPS Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vestibulum blandit.</p>
								<p class="descricao-ieee" name="descricoes" id="descricao-PES">Descrição da PES Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vestibulum blandit.</p>
								<p class="descricao-ieee" name="descricoes" id="descricao-RAS">Descrição da RAS Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vestibulum blandit.</p>
								<p class="descricao-ieee" name="descricoes" id="descricao-TEMS">Descrição da TEMS Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vestibulum blandit.</p>
						<br>
						<p><a href="includes/pages/AESS.html" id="link-capitulos">Conheça mais sobre o capítulo e seus projetos
								<img src= <?php echo get_template_directory_uri()."/assets/icons/arrow-right.svg"?> width: "50px"/></a>
							</p>
					</div>
				</div>

				<div class="col-lg-4 mt-5 d-flex align-self-end justify-content-center">
						<img src= <?php echo get_template_directory_uri()."/assets/images/logos/logo-AESS.png"?> id="logo-muda" width='400px' alt="Logo AESS"/>
				</div>

			</div>

			<div class="row-lg mt-5 mb-5 d-flex align-content-center capitulos-logos">
				<div class="col-lg d-flex justify-content-around flex-wrap logos">
					<img src= <?php echo get_template_directory_uri()."/assets/images/logos/Logo-AESS-home.svg"?> id="AESS" alt="Logo AESS"/>
					<img src= <?php echo get_template_directory_uri()."/assets/images/logos/Logo-CS-home.svg"?> id="CS" alt="Logo CS"/>
					<img src= <?php echo get_template_directory_uri()."/assets/images/logos/Logo-EMBS-home.svg"?> id="EMBS" alt="Logo EMBS"/>
					<img src= <?php echo get_template_directory_uri()."/assets/images/logos/Logo-EPS-home.svg"?> id="EPS" alt="Logo EPS"/>
					<img src= <?php echo get_template_directory_uri()."/assets/images/logos/Logo-PES-home.svg"?> id="PES" alt="Logo PES"/>
					<img src= <?php echo get_template_directory_uri()."/assets/images/logos/Logo-RAS-home.svg"?> id="RAS" alt="Logo RAS"/>
					<img src= <?php echo get_template_directory_uri()."/assets/images/logos/Logo-TEMS-home.svg"?> id="TEMS" alt="Logo TEMS"/>
				</div>
			</div>

			<!-- Seção de Eventos -->
			<div class="row justify-content-center secoes mb-5">
			  <div class="col-lg-10">
			    <h1 class="titulos">Nossos próximos Eventos</h1>
			    <img src= <?php echo get_template_directory_uri()."/assets/images/ilustracoes/linha-azul.svg"?> class="mb-3 wow slideInLeft" data-wow-duration="1s" data-wow-delay="1s"/>
			  </div>
			</div>

			<div class="row justify-content-center mb-5">

		<!-- Os links da imagem, "Nome do Evento" e "saiba mais" levam para o mesmo lugar -->

				<div class="col-lg-3 col-sm-5 col-10 card-ind">
			    <div class="card card-eventos mb-4">
			      <div class="contagem-regressiva">
			        <img src= <?php echo get_template_directory_uri()."/assets/icons/clock-fill.svg"?>>
			        <p>Hoje!</p>
			      </div>
			      <a href="#">
							<img class="card-img-top" src= <?php echo get_template_directory_uri()."/assets/images/ilustracoes/imagem-card.jpeg"?> alt="Imagem de capa do card" width="100%">
						</a>
						<div class="card-body">
							<a href="#" class="titulos">
								<h5 class="card-title mb-4 nome-evento">Nome do Evento</h5>
							</a>
							<h6 class="card-subtitle mb-2 text-muted descricao-evento">Lorem Ipsum</h6>
			        <p class="card-text text-muted data-hora">00/00 às 00h</p>
			        <a href="#" class="card-link float-right saiba-mais mt-3">
			          Saiba mais
								<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								  <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
								</svg>
			        </a>
			      </div>
			    </div>
			  </div>

			  <div class="col-lg-3 col-sm-5 col-10 card-ind">
			    <div class="card card-eventos mb-4">
			      <div class="contagem-regressiva">
			        <img src= <?php echo get_template_directory_uri()."/assets/icons/clock-fill.svg"?>>
			        <p>Hoje!</p>
			      </div>
						<a href="#">
							<img class="card-img-top" src= <?php echo get_template_directory_uri()."/assets/images/ilustracoes/imagem-card.jpeg"?> alt="Imagem de capa do card">
						</a>
						<div class="card-body">
							<a href="#" class="titulos">
								<h5 class="card-title mb-4 nome-evento">Nome do Evento</h5>
							</a>
			        <h6 class="card-subtitle mb-2 text-muted descricao-evento">Lorem Ipsum</h6>
			        <p class="card-text text-muted data-hora">00/00 às 00h</p>
			        <a href="#" class="card-link float-right saiba-mais mt-3">
			          Saiba mais
								<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								  <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
								</svg>
			        </a>
			      </div>
			    </div>
			  </div>

			  <div class="col-lg-3 col-sm-5 col-10 card-ind">
			    <div class="card card-eventos mb-4">
			      <div class="contagem-regressiva">
			        <img src= <?php echo get_template_directory_uri()."/assets/icons/clock-fill.svg"?>>
			        <p>Hoje!</p>
			      </div>
						<a href="#">
							<img class="card-img-top" src= <?php echo get_template_directory_uri()."/assets/images/ilustracoes/imagem-card.jpeg"?> alt="Imagem de capa do card">
						</a>
						<div class="card-body">
							<a href="#" class="titulos">
								<h5 class="card-title mb-4 nome-evento">Nome do Evento</h5>
							</a>
			        <h6 class="card-subtitle mb-2 text-muted descricao-evento">Lorem Ipsum</h6>
			        <p class="card-text text-muted data-hora">00/00 às 00h</p>
			        <a href="#" class="card-link float-right saiba-mais mt-3">
			          Saiba mais
								<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								  <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
								</svg>
			        </a>
			      </div>
			    </div>
			  </div>

			</div>

			<div id="botoes-eventos">
			  <a href="#" class="btn btn-todos-eventos" role="button">Ver todos</a>
			  <a href="#" class="btn btn-eventos-anteriores" role="button">Eventos anteriores</a>
			</div>

			<!-- Sétima seção -->
			<div class="row justify-content-center secoes diretoriaDiv">
				<div class="diretoriaTitulo">
					<h1 class="titulos" style="text-align: center;">Conheça a nossa <br> Diretoria</h1>
					<img src= <?php echo get_template_directory_uri()."/assets/images/ilustracoes/linha-azul.svg"?> class="wow slideInLeft" data-wow-duration="1s" data-wow-delay="0.5s"/>
				</div>

				<div class="row-lg d-flex align-content-center wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
					<div class="col-lg d-flex justify-content-around flex-wrap">
						<div class="hexagonoIndividual">
							<img class="img-fluid" src= <?php echo get_template_directory_uri()."/assets/images/ilustracoes/diretoria-hexagono.png"?>>
							<svg class="ilustracao" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 205 111.75"><defs><style>.cls-1{fill:#0072a6;}</style></defs><title>Asset 6</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><g id="Rectangle_18" data-name="Rectangle 18"><path class="cls-1" d="M0,0,102.5,65,205,0V7.58l-102.5,65L0,7.58Z"/></g></g></g></svg>
							<div class="icones">
								<a href="whatsapp"><img class="img-fluid  redes-sociais" id="whatsapp" src= <?php echo get_template_directory_uri()."/assets/icons/whatsapp-branco.svg"?>/></a>
								<a href="linkedin"><img class="img-fluid  redes-sociais" id="linkedin" src= <?php echo get_template_directory_uri()."/assets/icons/linkedin-branco.svg"?>/></a>
								<a href="email"><img class="img-fluid  redes-sociais" id="email" src= <?php echo get_template_directory_uri()."/assets/icons/email-branco.svg"?>/></a>
								<a href="facebook"><img class="img-fluid  redes-sociais" id="facebook" src= <?php echo get_template_directory_uri()."/assets/icons/facebook-branco.svg"?>/></a>
								<a href="github"><img class="img-fluid  redes-sociais" id="github" src= <?php echo get_template_directory_uri()."/assets/icons/github-branco.svg"?>/></a>
							</div>
							<p class="textoHexagono">Tesoureiro</p>
							<p class="subTextoHexagono">Nome da Pessoa</p>
						</div>
						<div class="hexagonoIndividual">
							<img class="img-fluid" src= <?php echo get_template_directory_uri()."/assets/images/ilustracoes/diretoria-hexagono.png"?>>
							<svg class="ilustracao" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 205 111.75"><defs><style>.cls-1{fill:#0072a6;}</style></defs><title>Asset 6</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><g id="Rectangle_18" data-name="Rectangle 18"><path class="cls-1" d="M0,0,102.5,65,205,0V7.58l-102.5,65L0,7.58Z"/></g></g></g></svg>
							<div class="icones">
								<a href="whatsapp"><img class="img-fluid  redes-sociais" id="whatsapp" src= <?php echo get_template_directory_uri()."/assets/icons/whatsapp-branco.svg"?>/></a>
								<a href="linkedin"><img class="img-fluid  redes-sociais" id="linkedin" src= <?php echo get_template_directory_uri()."/assets/icons/linkedin-branco.svg"?>/></a>
								<a href="email"><img class="img-fluid  redes-sociais" id="email" src= <?php echo get_template_directory_uri()."/assets/icons/email-branco.svg"?>/></a>
								<a href="facebook"><img class="img-fluid  redes-sociais" id="facebook" src= <?php echo get_template_directory_uri()."/assets/icons/facebook-branco.svg"?>/></a>
								<a href="github"><img class="img-fluid  redes-sociais" id="github" src= <?php echo get_template_directory_uri()."/assets/icons/github-branco.svg"?>/></a>
							</div>
							<p class="textoHexagono">Secretário</p>
							<p class="subTextoHexagono">Nome da Pessoa</p>
						</div>
						<div class="hexagonoIndividual">
							<img class="img-fluid" src= <?php echo get_template_directory_uri()."/assets/images/ilustracoes/diretoria-hexagono.png"?>>
							<svg class="ilustracao" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 205 111.75"><defs><style>.cls-1{fill:#0072a6;}</style></defs><title>Asset 6</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><g id="Rectangle_18" data-name="Rectangle 18"><path class="cls-1" d="M0,0,102.5,65,205,0V7.58l-102.5,65L0,7.58Z"/></g></g></g></svg>
							<div class="icones">
								<a href="whatsapp"><img class="img-fluid  redes-sociais" id="whatsapp" src= <?php echo get_template_directory_uri()."/assets/icons/whatsapp-branco.svg"?>/></a>
								<a href="linkedin"><img class="img-fluid  redes-sociais" id="linkedin" src= <?php echo get_template_directory_uri()."/assets/icons/linkedin-branco.svg"?>/></a>
								<a href="email"><img class="img-fluid  redes-sociais" id="email" src= <?php echo get_template_directory_uri()."/assets/icons/email-branco.svg"?>/></a>
								<a href="facebook"><img class="img-fluid  redes-sociais" id="facebook" src= <?php echo get_template_directory_uri()."/assets/icons/facebook-branco.svg"?>/></a>
								<a href="github"><img class="img-fluid  redes-sociais" id="github" src= <?php echo get_template_directory_uri()."/assets/icons/github-branco.svg"?>/></a>
							</div>
							<p class="textoHexagono">Presidente</p>
							<p class="subTextoHexagono">Nome da Pessoa</p>
						</div>
						<div class="hexagonoIndividual">
							<img class="img-fluid" src= <?php echo get_template_directory_uri()."/assets/images/ilustracoes/diretoria-hexagono.png"?>>
							<svg class="ilustracao" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 205 111.75"><defs><style>.cls-1{fill:#0072a6;}</style></defs><title>Asset 6</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><g id="Rectangle_18" data-name="Rectangle 18"><path class="cls-1" d="M0,0,102.5,65,205,0V7.58l-102.5,65L0,7.58Z"/></g></g></g></svg>
							<div class="icones">
								<a href="whatsapp"><img class="img-fluid  redes-sociais" id="whatsapp" src= <?php echo get_template_directory_uri()."/assets/icons/whatsapp-branco.svg"?>/></a>
								<a href="linkedin"><img class="img-fluid  redes-sociais" id="linkedin" src= <?php echo get_template_directory_uri()."/assets/icons/linkedin-branco.svg"?>/></a>
								<a href="email"><img class="img-fluid  redes-sociais" id="email" src= <?php echo get_template_directory_uri()."/assets/icons/email-branco.svg"?>/></a>
								<a href="facebook"><img class="img-fluid  redes-sociais" id="facebook" src= <?php echo get_template_directory_uri()."/assets/icons/facebook-branco.svg"?>/></a>
								<a href="github"><img class="img-fluid  redes-sociais" id="github" src= <?php echo get_template_directory_uri()."/assets/icons/github-branco.svg"?>/></a>
							</div>
							<p class="textoHexagono">Vice-presidente</p>
							<p class="subTextoHexagono">Nome da Pessoa</p>
						</div>
						<div class="hexagonoIndividual">
							<img class="img-fluid" src= <?php echo get_template_directory_uri()."/assets/images/ilustracoes/diretoria-hexagono.png"?>>
							<svg class="ilustracao" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 205 111.75"><defs><style>.cls-1{fill:#0072a6;}</style></defs><title>Asset 6</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><g id="Rectangle_18" data-name="Rectangle 18"><path class="cls-1" d="M0,0,102.5,65,205,0V7.58l-102.5,65L0,7.58Z"/></g></g></g></svg>
							<div class="icones">
								<a href="whatsapp"><img class="img-fluid  redes-sociais" id="whatsapp" src= <?php echo get_template_directory_uri()."/assets/icons/whatsapp-branco.svg"?>/></a>
								<a href="linkedin"><img class="img-fluid  redes-sociais" id="linkedin" src= <?php echo get_template_directory_uri()."/assets/icons/linkedin-branco.svg"?>/></a>
								<a href="email"><img class="img-fluid  redes-sociais" id="email" src= <?php echo get_template_directory_uri()."/assets/icons/email-branco.svg"?>/></a>
								<a href="facebook"><img class="img-fluid  redes-sociais" id="facebook" src= <?php echo get_template_directory_uri()."/assets/icons/facebook-branco.svg"?>/></a>
								<a href="github"><img class="img-fluid  redes-sociais" id="github" src= <?php echo get_template_directory_uri()."/assets/icons/github-branco.svg"?>/>?></a>
							</div>
							<p class="textoHexagono">Conselheiro</p>
							<p class="subTextoHexagono">Nome da Pessoa</p>
						</div>
				</div>
			</div>
			</div>


	</section>

<?php get_footer() ?>

