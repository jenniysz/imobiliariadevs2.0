<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A Imobiliária que te ajuda a conquistar seu sonho da casa nova">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <style>
        /* Aplicar a fonte Bebas Neue ao texto "Bem-vindo" e "Login" */
        .welcome-text {
            font-family: 'Bebas Neue', sans-serif;
        }
    </style>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-3+WE8c6lOngwvR5sXkgj5lwYcrK/rLayQ49SJ2AeAPjOuYx3T0Kg9BYDX+2wWFOaG93rwG6po1bjC5KvV9JjgA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Imobiliária DEVS</title>
</head>

<body>
    <header>
        <nav class="menu">
            <ul>
                <li><a class="link" href="#imoveisemdestaque">
                        <p>Imovéis</p>
                    </a></li>
                <li><a class="link" href="#escritorio">
                        <p>Escritório</p>
                    </a></li>
                <li><a class="link" href="#corretores">
                        <p>Corretores</p>
                    </a></li>
                <li><a class="link" href="#institucional">
                        <p>Institucional</p>
                    </a></li>
                <li><a class="link" href="#rodape">
                        <p>Fale Conosco</p>
                    </a></li>
                <li>
                    <?php if (isset($_GET['nome'])) {
                        $nome = htmlspecialchars($_GET['nome']);
                        echo "<a href='login/login.php' class='welcome-text'>Bem-vindo, " . $nome . "!</a>";
                    } else {
                        echo '<span class="welcome-text">Bem-vindo<a href="login/login.php" class="welcome-text"> Login</a></span>';
                    } ?>
                    </li>

            </ul>
        </nav>

        <div class="meio-img">
            <picture>
                <source media="(max-width: 750px)" srcset="img/logos/imob-P.png" type="image/png">
                <source media="(max-width: 1050px)" srcset="img/logos/imob-M.png" type="image/png">
                <img src="img/logos/imob-G.png" alt="Imagem Flexivel"
                    style="width: 100%; height: auto; display: block;">
            </picture>
        </div>
    </header>
    <section id="imoveisemdestaque">
        <h2 class="central">Imóveis em Destaque</h2>
        <div class="imovéisdestaque">
            <a href="imovel1.html" rel="next">
                <div class="anuncio">
                    <img src="img/casas/CASA 1/1 imagem casa 1.jpg" alt="casa 02" class="imagem-imovel">
                    <div class="info">
                        <h2 class="nome-imovel">Casa Massachusetts</h2>
                        <p class="descricao">Imóvel primeiro andar com garagem, sala de estar espaçosa, gramado na
                            entrada, possui 2 quartos, 1 banheiro, cozinha e área de serviço(imóveis não inclusos).</p>
                        <p class="preco">R$ 660.000,00</p>
                    </div>
                </div>
            </a>
            <a href="imovel2.html" rel="next">
                <div class="anuncio">
                    <img src="img/casas/CASA 2/1 imagem casa 2.jpg" alt="casa 02" class="imagem-imovel">
                    <div class="info">
                        <h2 class="nome-imovel">Casa Beverly Hills</h2>
                        <p class="descricao">Apartamento com varanda para alugar, com área especial para crianças,
                            cozinha moderna projetada disponível para todos os inquilinos, com 2 quartos, área de
                            serviço e 1 banheiro, animais permitidos.</p>
                        <p class="preco">R$ 350.000,00</p>
                    </div>
                </div>
            </a>
            <a href="imovel3.html" rel="next">
                <div class="anuncio">
                    <img src="img/casas/CASA 3/1 imagem casa 3.jpg" alt="casa 02" class="imagem-imovel">
                    <div class="info">
                        <h2 class="nome-imovel">Casa Los Angeles</h2>
                        <p class="descricao">Apartamento com varanda à venda, com parquinho para crianças, cozinha
                            moderna projetada disponível para todos os inquilinos, com 1 quarto, área de serviço e 2
                            banheiro, localizado perto do carrefour.</p>
                        <p class="preco">R$ 125.000,00</p>
                    </div>
                </div>
            </a>
            <a href="imovel4.html" rel="next">
                <div class="anuncio">
                    <img src="img/casas/CASA 4/1 imagem casa 4.jpg" alt="casa 02" class="imagem-imovel">
                    <div class="info">
                        <h2 class="nome-imovel">Casa Filadélfia</h2>
                        <p class="descricao">Apartamento mobiliado para aluguel, com cozinha retrátil, sala de estar(sem
                            a TV) com ar-condicionado, 3 quartos sendo apenas 2 com guarda-roupa incluso, 1 banheiro
                            projetado.</p>
                        <p class="preco">R$ 110.000,00</p>
                    </div>
                </div>
            </a>
            <a href="imovel5.html" rel="next">
                <div class="anuncio">
                    <img src="img/casas/CASA 5/1 imagem casa 5.jpg" alt="casa 02" class="imagem-imovel">
                    <div class="info">
                        <h2 class="nome-imovel">Casa Miami</h2>
                        <p class="descricao">Mansão à venda, o térreo possui cozinha retrátil, sala de estar projetada,
                            no andar de cima possuem 2 quartos e 1 banheiro.</p>
                        <p class="preco">R$ 700.000,00</p>
                    </div>
                </div>
            </a>
            <a href="imovel6.html" rel="next">
                <div class="anuncio">
                    <img src="img/casas/CASA 6/1 imagem casa 6.jpg" alt="casa 02" class="imagem-imovel">
                    <div class="info">
                        <h2 class="nome-imovel">Casa Las Vegas</h2>
                        <p class="descricao">Casa à venda com piscina e garagem, sala de jantar projetada e espaçosa
                            interligada à cozinha por um corredor, sala de estar pensada em conforto, no andar de cima
                            possui 1 quarto e 1 banheiro.</p>
                        <p class="preco">R$ 450.000,00</p>
                    </div>
                </div>
            </a>
        </div>
    </section>

    <section>
        <picture class="card">
            <source media="(max-width: 750px)" srcset="img/logos/ajudar-P.png" type="image/png">
            <source media="(max-width: 1050px)" srcset="img/logos/ajudar-M.png" type="image/png">
            <img src="img/logos/ajudar-G.png" alt="Imagem Flexivel">
        </picture>
    </section>
    <section id="mapa">
        <h2 class="central" class="local" id="escritorio">Escritório</h2>
        <div class="mapa">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31671.140531056102!2d-34.87234094382975!3d-7.138420743392758!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7acc29aa9ce26af%3A0xaf72a28cd6276079!2sUNIP%C3%8A%20-%20Centro%20Universit%C3%A1rio%20-%20Campus%20Jo%C3%A3o%20Pessoa!5e0!3m2!1spt-BR!2sbr!4v1716162116116!5m2!1spt-BR!2sbr"
                width="1100px" height="650" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
    <section class="corretores-sect" id="corretores"><!--Corretores-->
        <p>Se ficou interessado em nos conhecer ou se tiver dúvidas entre em contato com algum de nossos corretores
            abaixo:</p>
        <h2 class="central">Corretores</h2>
        <div>
            <div class="corretores"><img src="img/corretores/jarlis.png" alt="jarlis" class="imagem"> <!--Jarlis-->
                <ul class="conteudo">
                    <li><a href="https://www.instagram.com/jrlsbjj/" target="_blank" rel="external"><img
                                src="img/icones/icone-instagram.png" alt="Instagram">
                            <p>//Instagram</p>
                        </a></li>

                    <li><a href="https://wa.me/83981186478" target="_blank" rel="external"><img
                                src="img/icones/icone-whatsapp.png" alt="WhatsApp">
                            <p>//WhatsApp</p>
                        </a></li>

                    <li><a href="https://www.linkedin.com/in/jarlis-cunha-01b607267/" target="_blank"
                            rel="external"><img src="img/icones/icone-linkedin.png" alt="Linkedin">
                            <p>//Linkedin</p>
                        </a></li>

                    <li><a href="https://github.com/devjarlis" target="_blank" rel="external"><img
                                src="img/icones/icone-github.png" alt="Git">
                            <p>//Git Hub</p>
                        </a></li>
                </ul>
            </div>
            <div class="corretores"><img src="img/corretores/jenni.jpg" alt="jenni" class="imagem"> <!-- Jenni-->
                <ul class="conteudo">
                    <li><a href="https://www.instagram.com/jenniysz/" target="_blank" rel="external"><img
                                src="img/icones/icone-instagram.png" alt="Instagram">
                            <p>//Instagram</p>
                        </a></li>

                    <li><a href="https://wa.me/81993384406" target="_blank" rel="external"><img
                                src="img/icones/icone-whatsapp.png" alt="WhatsApp">
                            <p>//WhatsApp</p>
                        </a></li>

                    <li><a href="https://www.linkedin.com/in/jennifer-caroline-3357802aa/" target="_blank"
                            rel="external"><img src="img/icones/icone-linkedin.png" alt="Linkedin">
                            <p>//Linkedin</p>
                        </a></li>

                    <li><a href="https://github.com/jenniysz/" target="_blank" rel="external"><img
                                src="img/icones/icone-github.png" alt="Git">
                            <p>//Git Hub</p>
                        </a></li>
                </ul>
            </div>
            <div class="corretores"><img src="img/corretores/raffa.jpg" alt="raffa" class="imagem"> <!-- Rafa -->
                <ul class="conteudo">
                    <li><a href="https://www.instagram.com/raffaelucasss/" target="_blank" rel="external"><img
                                src="img/icones/icone-instagram.png" alt="Instagram">
                            <p>//Instagram</p>
                        </a></li>

                    <li><a href="https://wa.me/83988370906" target="_blank" rel="external">
                            <img src="img/icones/icone-whatsapp.png" alt="WhatsApp">
                            <p>//WhatsApp</p>
                        </a></li>

                    <li><a href="https://www.linkedin.com/in/raffael-lucas-125839270/" target="_blank"
                            rel="external"><img src="img/icones/icone-linkedin.png" alt="Linkedin">
                            <p>//Linkedin</p>
                        </a></li>

                    <li><a href="https://github.com/Raffaellucass/" target="_blank" rel="external"><img
                                src="img/icones/icone-github.png" alt="Git">
                            <p>//Git Hub</p>
                        </a></li>
                </ul>
            </div>
            <div class="corretores"><img src="img/corretores/matheus.jpg" alt="th" class="imagem"> <!-- Matheus -->
                <ul class="conteudo">
                    <li><a href="https://www.instagram.com/matheus.hmn/" target="_blank" rel="external"><img
                                src="img/icones/icone-instagram.png" alt="Instagram">
                            <p>//Instagram</p>
                        </a></li>

                    <li><a href="https://wa.me/83987200730" target="_blank" rel="external"><img
                                src="img/icones/icone-whatsapp.png" alt="WhatsApp">
                            <p>//WhatsApp</p>
                        </a></li>

                    <li><a href="https://www.linkedin.com/in/matheus-henrique-7638541b8//" target="_blank"
                            rel="external"><img src="img/icones/icone-linkedin.png" alt="Linkedin">
                            <p>//Linkedin</p>
                        </a></li>

                    <li><a href="https://github.com/matheus-hmn" target="_blank" rel="external"><img
                                src="img/icones/icone-github.png" alt="Git">
                            <p>//Git Hub</p>
                        </a></li>
                </ul>
            </div>

            <div class="corretores"><img src="img/corretores/arthur.jpg" alt="arthur" class="imagem"> <!-- Arthur -->
                <ul class="conteudo">
                    <li><a href="https://www.instagram.com/tuthux/" target="_blank" rel="external"><img
                                src="img/icones/icone-instagram.png" alt="Instagram">
                            <p>//Instagram</p>
                        </a></li>

                    <li><a href="https://wa.me/8398135777" target="_blank" rel="external"><img
                                src="img/icones/icone-whatsapp.png" alt="WhatsApp">
                            <p>//WhatsApp</p>
                        </a></li>

                    <li><a href="https://www.linkedin.com/in/jarlis-cunha-01b607267/" target="_blank"
                            rel="external"><img src="img/icones/icone-linkedin.png" alt="Linkedin">
                            <p>//Linkedin</p>
                        </a></li>

                    <li><a href="https://github.com/Tuthux" target="_blank" rel="external"><img
                                src="img/icones/icone-github.png" alt="Git">
                            <p>//Git Hub</p>
                        </a></li>
                </ul>
            </div>
        </div>
    </section>
    <section>
        <!-- Botão flutuante de WhatsApp -->
        <a href="corretores.html" class="whatsapp-button" title="Fale com nossos corretores">
            <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" />
        </a>
    </section>
    <section id="institucional" class="institucional"> <!--Institucional-->
        <h1 class="central">Institucional</h2>
            <div>
                <p>Na Imobiliária DEVS, valorizamos a <b>transparência, a ética e o compromisso</b> com nossos clientes.
                    Estamos
                    aqui para orientá-lo em cada passo do processo,<br> desde a busca pelo <b>imóvel ideal</b> até a
                    conclusão
                    do
                    negócio. </p>
                <p><b>Nossa abordagem centrada no cliente garante que suas necessidades estejam sempre em primeiro
                        lugar.</b>
                </p>
                <p>Seja você um comprador, vendedor, locatário ou investidor, a Imobiliária DEVS está aqui para ajudá-lo
                    a
                    alcançar seus objetivos imobiliários. <br></p>
                <p><b>
                        Entre em contato conosco hoje mesmo e deixe-nos ajudá-lo a
                        transformar seus sonhos em realidade!
                    </b></p>
            </div>
            </div>
    </section>
    <footer class="rodape" id="rodape">
        <div class="container">
            <div class="imagem-rodape">
                <img src="icones/Talk_to_us-removebg-preview.png" alt="Sobre nós" style="width: 200px;">
            </div>
            <div class="sobre-nos">
                <h2 class="rodape-h2">Sobre Nós</h2>
                <p>Somos uma imobiliária comprometida em ajudar você a encontrar o imóvel ideal, nós intermediamos o seu
                    sonho a realidade.</p>
            </div>
            <div class="links-rapidos">
                <h2 class="rodape-h2">Links Rápidos</h2>
                <ul>
                    <li class="rodape-li"><a href="#">Início</a></li>
                    <li class="rodape-li"><a href="#imoveisemdestaque">Imóveis</a></li>
                    <li class="rodape-li"><a href="#corretores">Contatos</a></li>
                </ul>
            </div>
            <div class="contato">
                <h2 class="rodape-h2">Contato</h2>
                <ul>
                    <li class="rodape-li"><strong>Endereço:</strong> BR-230 - Água Fria, João Pessoa - PB, 58053-000
                    </li>
                    <li class="rodape-li"><strong>Telefone:</strong> (83) 1234-5678</li>
                    <li class="rodape-li"><strong>Email:</strong> contato@imobiliaria.com.br</li>
                </ul>
            </div>
            <div class="siga-nos">
                <h2 class="rodape-h2">Siga-nos</h2>
                <ul>
                    <li class="rodape-li"><a href="https://www.facebook.com/profile.php?id=61560262890560"><img
                                src="icones/facebook.png" alt="Facebook">Facebook</a></li>
                    <li class="rodape-li"><a href="https://twitter.com"><img src="icones/twiter.png" alt="Twitter">Twitter</a></li>
                    <li class="rodape-li"><a href="https://instagram.com"><img src="icones/instagram.png" alt="Instagram">Instagram</a></li>
                    <li class="rodape-li"><a href="https://linkedin.com"><img src="icones/linkedin.png" alt="Linkedin">Linkedin</a></li>
                </ul>
            </div>

        </div>
    </footer>
</body>

</html>