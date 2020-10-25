<footer class="container-fluid">
        <div class="row align-items-center footer">

            <div class="col-lg-3 rodItem segment-one">
                <img class="img-fluid logo-ieee" src= <?php header_image() ?> id="logos-ieee"
                    alt="Logo da IEEE UFABC">
                <p class="textBold">© 2020 IEEE UFABC Student Branch</p>
            </div>

            <div class="col-lg-4 rodItem segment-two">
                <p class="textRegular" style="margin-top: 10px; width: 95%;font-size: 15px;">Lorem ipsum dolor sit amet,
                    consectetur
                    adipiscing elit. Ut sollicitudin elit ut sagittis venenatis. Lorem ipsum dolor sit amet, consectetur
                    adipiscing elit. Ut sollicitudin elit ut sagittis venenatis. Lorem ipsum dolor sit amet, consectetur
                    adipiscing elit. Ut sollicitudin elit ut sagittis venenatis.</p>
                <p class="textBold">Localização: Sala 009 - UFABC Santo André</p>
            </div>

            <div class="col-lg-2 rodItem segment-three">
                <button class="btn text-nowrap" id="ouvidoriaButton" data-toggle="modal" data-target="#ouvidoriaModal">
                    <img style="margin-right: 10px" src= <?php echo get_template_directory_uri()."/assets/icons/ieee-ufabc-icon.svg"?>>
                    <a class="textRegular">Nossa Ouvidoria</a>
                </button>
                <div class="contato">
                    <a href="#">
                        <img src= <?php echo get_template_directory_uri()."/assets/icons/email-circular.svg"?> alt="Icone de Email">
                    </a>
                    <a href="#">
                        <img src= <?php echo get_template_directory_uri()."/assets/icons/linkedin-circular.svg"?> alt="Icone do Linkedin">
                    </a>
                    <a href="#">
                        <img src= <?php echo get_template_directory_uri()."/assets/icons/instagram-circular.svg"?> alt="Icone do Instagram">
                    </a>
                    <a href="#">
                        <img src= <?php echo get_template_directory_uri()."/assets/icons/facebook-circular.svg"?> alt="Icone do Facebook">
                    </a>
                </div>
            </div>

            <div class="modal fade" id="ouvidoriaModal" tabindex="-1" role="dialog"
                aria-labelledby="ouvidoriaModalTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modalIeee" style="width:100%; max-width:595px"
                    role="document">
                    <div class="modal-content">
                        <div class="modalHeader modalDivHeader">
                            <img class="headerItem" src= <?php echo get_template_directory_uri()."/assets/images/ilustracoes/modal-logo-ieee.svg"?>>
                            <img class="headerItem" src= <?php echo get_template_directory_uri()."/assets/images/ilustracoes/modal-separador.svg"?>>
                            <h1 class="tituloOuvidoria">Ouvidoria IEEE UFABC</h1>
                        </div>
                        <div class="modalDiv modalDescricao">
                            <p>
                                O objetivo deste formulário é coletar opiniões e informações sobre membros, voluntários,
                                diretoria do Ramo ou capítulos. Pedimos que usem com critério. A ideia é criar mais um
                                canal de comunicação entre IEEE UFABC e os colaboradores.
                            </p>
                            <br>
                            <p>Agradecemos a colaboração de todos.</p>
                        </div>

                        <form>
                            <div class="modalDiv">
                                <p class="modalInputText">O que você gostaria de dizer ao IEEE UFABC? *</p>
                                <input class="modalInput" type="text" placeholder="Sua resposta">
                            </div>

                            <div class="modalDiv">
                                <p class="modalInputText">Como pensa que podemos melhorar esta questão? *</p>
                                <input class="modalInput" type="text" placeholder="Eu penso que">
                            </div>

                            <div class="modalDiv">
                                <input class="modalSubmit" type="submit" value="Enviar">
                            </div>
                        </form>
                    </div>
                </div>

            </div>

            <div class="col-lg-3 rodItem segment-four my-4">
                <img class="logo-ieee-mundial" src= <?php echo get_template_directory_uri()."/assets/images/logos/IEEE_Mundial.svg"?> alt="Logo da IEEE">
                <a href="#">
                    <span class="textRegular">Ir para o site da IEEE global
                        <img src= <?php echo get_template_directory_uri()."/assets/icons/icon-redirecionamento.svg"?>>
                    </span>
                </a>
            </div>

            <div id="voltar-ao-topo">
                <a>
                    <img src= <?php echo get_template_directory_uri()."/assets/icons/botao-voltar-ao-topo.svg"?>>
                </a>
            </div>
</footer>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/capitulos.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/home-o-que-fazemos.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/diretoria.js"></script>
<script>
    new WOW().init();
</script>

<?php wp_footer(); ?>
</body>
</html>