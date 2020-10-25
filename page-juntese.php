<?php get_header() ?>

<div class="container-fluid p-0 m-0">

		<!-- Primeira seção -->
		<div class="row header p-0 m-0">
			<div class="col-lg-7">
				<h1 id="headerTitulo">Participe dos trabalhos realizados pela IEEE UFABC!</h1>
			</div>
		</div>

		<!-- Segunda seção -->
		<section class="firstSection">
			<div class="col-lg-7 backgroundLeft">
				<h2 id="sectionTitulo">Ao se tornar um voluntário você irá ter chance de...</h2>
			</div>

			<div class="cardsDiv flex-wrap">
				<div class="col-lg-3 col-md-6 cardJunte">
					<img id="hexagonCard" src= <?php echo get_template_directory_uri()."/assets/images/ilustracoes/junte-se-card-hexagono.svg"?>>
					<h2>Networking</h2>
					<img id="separadorCard" src= <?php echo get_template_directory_uri()."/assets/images/ilustracoes/junte-se-card-separador.svg"?>>
					<p id="textoCard">Lorem ipsum dolor sit amet, fermentum eu purus. Donec ornare mauris non ex
						posuere, eget pellentesque nisi commodo. Nulla vel mattis sapien. Nulla vel mattis sapien</p>
				</div>
				<div class="col-lg-3 col-md-6 cardJunte">
					<img id="hexagonCard" src= <?php echo get_template_directory_uri()."/assets/images/ilustracoes/junte-se-card-hexagono.svg"?>>
					<h2>Desenvolvimento profissional</h2>
					<img id="separadorCard" src= <?php echo get_template_directory_uri()."/assets/images/ilustracoes/junte-se-card-separador.svg"?>>
					<p id="textoCard">Lorem ipsum dolor sit amet, fermentum eu purus. Donec ornare mauris non ex
						posuere, eget pellentesque nisi commodo. Nulla vel mattis sapien.</p>
				</div>
				<div class="col-lg-3 col-md-6 cardJunte">
					<img id="hexagonCard" src= <?php echo get_template_directory_uri()."/assets/images/ilustracoes/junte-se-card-hexagono.svg"?>>
					<h2>Benefício 3</h2>
					<img id="separadorCard" src= <?php echo get_template_directory_uri()."/assets/images/ilustracoes/junte-se-card-separador.svg"?>>
					<p id="textoCard">Lorem ipsum dolor sit amet, fermentum eu purus. Donec ornare mauris non ex
						posuere, eget pellentesque nisi commodo. Nulla vel mattis sapien. Nulla vel mattis sapien</p>
				</div>
			</div>
			<div class="backgroundRight"></div>
		</section>

		<section class="secondSection">
			<div class="col-lg-5 contatoLeft">
				<h1 id="contatoTitulo">Torne-se um voluntário agora. É simples!</h1>
				<img src= <?php echo get_template_directory_uri()."/assets/images/ilustracoes/linha-azul.svg"?> class="wow slideInLeft" data-wow-duration="1s"
					data-wow-delay="1s" />
				<div class="imagemContato">
					<img class="img-fluid" src= <?php echo get_template_directory_uri()."/assets/images/ilustracoes/junte-se-contato-img.svg"?>>
				</div>
			</div>

			<div class="col-lg-4 contatoRight">
				<p class="formTitulo">Requisitos</p>
				<p class="formTexto">Ser aluno da UFABC</p>
				<p class="formTexto">Ter vontade de aprender</p> <br>
				<form>
					<label class="formTitulo" for="capitulos-ieee">Qual capítulo deseja se juntar?</label>
					<select class="form-control form-capitulo" id="capitulos-ieee">
						<option>AESS</option>
						<option>CS</option>
						<option>EMBS</option>
						<option>EPS</option>
						<option>PES</option>
						<option>RAS</option>
						<option>TEMS</option>
					</select>

					<br>

					<label class="formTitulo">Deixe seu contato!</label>
					<input class="comumInput" type="text" placeholder="Nome">
					<input class="comumInput" type="text" placeholder="Whatsapp">
					<input class="comumInput" id="inputMsg" type="text" placeholder="Mensagem">
					<a id="submitInput" type="submit">Venha fazer parte
						<svg width="7" height="10" viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M2.02821 9.26904L6.60254 4.6908L2.02821 0.112549L0.65332 1.48842L3.85405 4.6908L0.65332 7.89317L2.02821 9.26904Z" fill="currentColor"/>
						</svg>
					</a>
					<span class="focus-border">
						<i></i>
					</span>

				</form>
			</div>

		</section>

		<section class="thirdSection">

			<div class="backgroundLeft"></div>

			<div class="membresiaMain pb-5">

				<div class="row mr-0">
					<div class="col-lg-6">
						<h1 id="membresiaTitulo" class="text-left">Quer desenvolver ainda mais seu lado profissional?
							<br> A membresia IEEE pode te ajudar nisso.</h1>
					</div>
				</div>

				<div class="row justify-content-center mr-0">
					<div class="col-lg-5">
						<img src= <?php echo get_template_directory_uri()."/assets/images/ilustracoes/linha-branca.svg"?> class="linha-branca d-none d-lg-block">
					</div>
				</div>

				<div class="d-flex flex-wrap flex-row-reverse justify-content-right">

					<div class="col-lg-4 p-0">
						<center>
							<img src= <?php echo get_template_directory_uri()."/assets/images/ilustracoes/hexagono-maior-membresia.svg"?> width="390"
								alt="Imagem ampliada" class="hexagono-ampliado">
						</center>
						<center>
							<a href="#" class="btn btn-membresia mt-5 mb-5" role="button">Faça a sua membresia</a>
						</center>
					</div>

					<div class="col-lg-3 pl-lg-5" id="beneficios">
						<h1 id="titulo-beneficio">Benefício A</h1>
						<br> <br>
						<p class="descricao-beneficio" name="descricoes" id="descricao-A">Descrição A Lorem ipsum dolor
							sit amet, fermentum eu purus. Donec ornare mauris non ex posuere, eget pellentesque nisi
							commodo. Nulla vel mattis sapien.</p>
					</div>

					<div class="col-lg-4 mt-lg-5">
						<center>
							<!--<img src= <?php echo get_template_directory_uri()."/assets/images/ilustracoes/hexagonos-membresia.svg"?> width="420" alt="Hexágonos da membresia" class="beneficios-membresia">-->
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
								viewBox="0 0 1029.24 916.63" class="beneficios-membresia" width="490">
								<defs>
									<style>
										.cls-1 {
											fill: none;
										}

										.cls-2 {
											clip-path: url(#clip-path);
										}

										.cls-3 {
											clip-path: url(#clip-path-2);
										}

										.cls-4 {
											clip-path: url(#clip-path-3);
										}

										.cls-5 {
											clip-path: url(#clip-path-4);
										}

										.cls-6 {
											clip-path: url(#clip-path-5);
										}

										.cls-7 {
											clip-path: url(#clip-path-6);
										}

										.cls-8 {
											clip-path: url(#clip-path-7);
										}
									</style>
									<clipPath id="clip-path">
										<polygon class="cls-1"
											points="569.65 7 411.46 7 332.36 144 411.46 281 569.65 281 648.75 144 569.65 7" />
									</clipPath>
									<clipPath id="clip-path-2">
										<polygon class="cls-1"
											points="315.29 153 157.1 153 78 290 157.1 427 315.29 427 394.39 290 315.29 153" />
									</clipPath>
									<clipPath id="clip-path-3">
										<polygon class="cls-1"
											points="825.39 153 667.19 153 588.1 290 667.19 427 825.39 427 904.48 290 825.39 153" />
									</clipPath>
									<clipPath id="clip-path-4">
										<polygon class="cls-1"
											points="315.29 448 157.1 448 78 585 157.1 722 315.29 722 394.39 585 315.29 448" />
									</clipPath>
									<clipPath id="clip-path-5">
										<polygon class="cls-1"
											points="825.39 448 667.19 448 588.1 585 667.19 722 825.39 722 904.48 585 825.39 448" />
									</clipPath>
									<clipPath id="clip-path-6">
										<polygon class="cls-1"
											points="569.65 595 411.46 595 332.36 732 411.46 869 569.65 869 648.75 732 569.65 595" />
									</clipPath>
									<clipPath id="clip-path-7">
										<polygon id="centro" class="cls-1"
											points="569.29 301.4 411.34 301.4 332.36 438.19 411.34 574.98 569.29 574.98 648.27 438.19 569.29 301.4" />
									</clipPath>
								</defs>
								<title>Benefício</title>
								<g id="Layer_2" data-name="Layer 2">
									<g id="Layer_1-2" data-name="Layer 1">
										<g class="cls-2">
											<image width="718" height="482" transform="translate(286) scale(0.59)"
												class="img-membresia" xlink:href="assets/images/cachorro.jpg" />
										</g>
										<g class="cls-3">
											<image width="768" height="512"
												transform="translate(0 402.76) rotate(-60.99) scale(0.58)"
												class="img-membresia" xlink:href="assets/images/cachorro3.jpg" />
										</g>
										<g class="cls-4">
											<image width="768" height="587"
												transform="translate(777.32 60) rotate(60.37) scale(0.48)"
												class="img-membresia" xlink:href="assets/images/cachorro2.jpg" />
										</g>
										<g class="cls-5">
											<image width="1280" height="853"
												transform="matrix(-0.18, -0.31, 0.31, -0.18, 261.62, 916.63)"
												class="img-membresia" xlink:href="assets/images/cachorro6.jpg" />
										</g>
										<g class="cls-6">
											<image width="736" height="396"
												transform="translate(1029.24 384.86) rotate(120.33) scale(0.72)"
												class="img-membresia" xlink:href="assets/images/cachorro4.jpg" />
										</g>
										<g class="cls-7">
											<image width="396" height="450"
												transform="translate(651.2 875) rotate(180) scale(0.81)"
												class="img-membresia" xlink:href="assets/images/cachorro5.jpg" />
										</g>
									</g>
									<g id="Layer_2-2" data-name="Layer 2">
										<g class="cls-8">
											<image width="660" height="660" transform="translate(332 287) scale(0.49)"
												class="img-membresia" xlink:href="assets/images/cachorro7.jpg" />
										</g>
									</g>
								</g>
							</svg>
						</center>

						<center>
							<button id="ngira" class="btn p-1 btn-hexagonos" onclick="ir('volta')">
								<img src= <?php echo get_template_directory_uri()."/assets/icons/skip-backward-fill.svg"?> alt="">
							</button>
							<!==botão que volta para o item anterior==>
								<button id="ngira" class="btn p-1 btn-hexagonos" onclick="ngira()">
									<img src= <?php echo get_template_directory_uri()."/assets/icons/pause-fill.svg"?> alt="">
								</button>
								<!==botão que para de rodar automático==>
									<button id="gira" class="btn p-1 btn-hexagonos" onclick="gira()">
										<img src= <?php echo get_template_directory_uri()."/assets/icons/play-fill.svg"?> alt="">
									</button>
									<!==botão que roda automático==>
										<button id="ngira" class="btn p-1 btn-hexagonos" onclick="ir('vai')">
											<img src= <?php echo get_template_directory_uri()."/assets/icons/skip-forward-fill.svg"?> alt="">
										</button>
										<!==botão mostra o próximo item==>
						</center>

					</div>

				</div>

			</div>

		</section>

		<section class="fourthSection">
			<div class="backgroundRight"></div>
		</section>

	</div>


<?php get_footer() ?>