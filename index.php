<?php
require('inc/globals.php'); // Require in all pages
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>PHB Solar</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="title" content="">

        <?php include 'inc/init.php'; ?>
        <link href="<?php echo url_path() ?>style/slick.css" rel="stylesheet">
    </head>	
    <body>
        <?php include 'inc/header.php'; ?>
        <div id="page">			
            <div class="conteudo">
                <section id="bannerHome">
                    <article>
                        <div class="teaser">
                            <div class="teaser1 item">
                                <div class="container">
                                    <img class="img-responsive hidden-xs" alt="Qualidade, tecnologia e inovação" title="Qualidade, tecnologia e inovação" src="images/texto-banner-1.png">
                                    <img class="img-responsive visible-xs" alt="Qualidade, tecnologia e inovação" title="Qualidade, tecnologia e inovação" src="images/texto-banner-1-767.png">
                                </div>    
                            </div>
                            <div class="teaser2 item">
                                <div class="container">
                                    <img class="img-responsive visible-lg visible-md" alt="O mais completo kit gerador fotovoltaico do mercado" title="O mais completo kit gerador fotovoltaico do mercado" src="images/texto-banner-2.png">
                                    <img class="img-responsive visible-sm visible-xs" alt="O mais completo kit gerador fotovoltaico do mercado" title="O mais completo kit gerador fotovoltaico do mercado" src="images/texto-banner-2-991.png">
                                </div>    
                            </div>
                            <div class="teaser3 item">
                                <div class="container">
                                    <img class="img-responsive" alt="Investimento certo, economia na conta e imóvel valorizado" title="Investimento certo, economia na conta e imóvel valorizado" src="images/texto-banner-3.png">
                                </div>    
                            </div>
                        </div>
                    </article>
                </section>

                <section id="produtos">
                    <article>
                        <div class="tituloProdutos">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="faixaTitulo">
                                            <h2 class="title">CONHEÇA NOSSOS <strong>PRODUTOS</strong></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="faixaSlider">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="sliderProdutos">
                                            <div class="item">
                                                <div class="col-sm-6 colImgSlider">
                                                    <img class="img-responsive" alt="Inversor 1500W" title="Inversor 1500W" src="images/produtos/inversor-1500w.jpg">
                                                </div>
                                                <div class="col-sm-6 colTextSlider">
                                                    <div class="textoSlider">
                                                        <h3>Inversor 1500W</h3>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vehicula, sapien eu venenatis sodales, diam justo convallis arcu, nec fringilla nisi diam eu risus.</p>
                                                        <a class="btSaibaMais" href="<?php echo url_path() ?>" title="Saiba mais sobre o Inversor 1500W">SAIBA MAIS</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="col-sm-6 colImgSlider">
                                                    <img class="img-responsive" alt="Inversor 3000W" title="Inversor 3000W" src="images/produtos/inversor-3000w.jpg">
                                                </div>
                                                <div class="col-sm-6 colTextSlider">
                                                    <div class="textoSlider">
                                                        <h3>Inversor 3000W</h3>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vehicula, sapien eu venenatis sodales, diam justo convallis arcu, nec fringilla nisi diam eu risus.</p>
                                                        <a class="btSaibaMais" href="<?php echo url_path() ?>" title="Saiba mais sobre o Inversor 3000W">SAIBA MAIS</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="col-sm-6 colImgSlider">
                                                    <img class="img-responsive" alt="Estruturas" title="Estruturas" src="images/produtos/estruturas.jpg">
                                                </div>
                                                <div class="col-sm-6 colTextSlider">
                                                    <div class="textoSlider">
                                                        <h3>Estruturas</h3>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vehicula, sapien eu venenatis sodales, diam justo convallis arcu, nec fringilla nisi diam eu risus.</p>
                                                        <a class="btSaibaMais" href="<?php echo url_path() ?>" title="Saiba mais sobre Estruturas">SAIBA MAIS</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="col-sm-6 colImgSlider">
                                                    <img class="img-responsive" alt="StringBox" title="StringBox" src="images/produtos/stringbox.jpg">
                                                </div>
                                                <div class="col-sm-6 colTextSlider">
                                                    <div class="textoSlider">
                                                        <h3>StringBox</h3>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vehicula, sapien eu venenatis sodales, diam justo convallis arcu, nec fringilla nisi diam eu risus.</p>
                                                        <a class="btSaibaMais" href="<?php echo url_path() ?>" title="Saiba mais sobre StringBox">SAIBA MAIS</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="col-sm-6 colImgSlider">
                                                    <img class="img-responsive" alt="Kits Solares" title="Kits Solares" src="images/produtos/kits-solares.jpg">
                                                </div>
                                                <div class="col-sm-6 colTextSlider">
                                                    <div class="textoSlider">
                                                        <h3>Kits Solares</h3>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vehicula, sapien eu venenatis sodales, diam justo convallis arcu, nec fringilla nisi diam eu risus.</p>
                                                        <a class="btSaibaMais" href="<?php echo url_path() ?>" title="Saiba mais sobre Kits Solares">SAIBA MAIS</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </section>

                <section id="quemSomos">
                    <article>
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h2 class="title">PHB Solar</h2>
                                </div>
                                <div class="col-sm-6">
                                    <div class="boxBranco">
                                        <p>Desde 1984, ano de fundação da PHB, a busca por inovação e qualidade, com seriedade e desenvolvimento tecnológico brasileiro, foram fatores notáveis e importantes na trajetória da PHB Solar. Desta maneira, foi a primeira fabricante de inversores solares a ser certificada pelo INMETRO no Brasil, atuando na coordenação e elaboração de normas reguladoras, criando de forma singular, um laboratório completo para testes e manutenção dos seus próprios produtos.</p>
                                        <p>Sempre à frente, a PHB Solar é uma empresa 100% nacional, com pioneirismo e competência tecnológica, desenvolvendo soluções para a Geração Distribuída como um todo. A engenharia da PHB oferece respostas rápidas e não depende de uma consulta internacional, sendo uma empresa precursora na geração de energia elétrica através de fontes renováveis.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </section>

                <section id="newsletter">
                    <article>
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-6 colInstalador">
                                    <a href="<?php echo url_path() ?>" title="Seja um Instalador Técnico">
                                        <h3 class="title">SEJA UM INSTALADOR TÉCNICO</h3>
                                        <p>
                                            Trabalhe com qualidade, segurança e suporte técnico.<br> 
                                            Seja um de nossos parceiros.
                                        </p>
                                    </a>
                                </div>
                                <div class="col-sm-6">
                                    <div class="formNewsletter">
                                        <h3 class="title">RECEBA INFORMAÇÕES POR E-MAIL</h3>
                                        <form name="formNews" method="post" action="">
                                            <div class="campo">
                                                <label for="nomeNews">NOME:</label>
                                                <input class="ipt" id="nomeNews" name="nomeNews" type="text" required>
                                            </div>
                                            <div class="campo">
                                                <label for="emailNews">E-MAIL:</label>
                                                <input class="ipt" id="emailNews" name="emailNews" type="email" required>
                                            </div>
                                            <input class="botao" name="enviaNews" type="submit" value="ENVIAR">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </section>

                <section id="novidades">
                    <article>
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="ultimasBlog">
                                        <h4 class="title">ÚLTIMAS DO <strong>BLOG</strong></h4>
                                        <a class="imgLink" href="#" title="Título do Post">
                                            <img class="img-responsive" alt="Título do Post" src="<?php echo url_path() ?>images/img-blog.jpg">
                                            <span class="hover"></span>    
                                        </a>
                                        <a href="#" title="Título do Post">
                                            <strong>Lorem ipsum</strong>
                                            Vivamus vel nibh feugiat, venenatis erat ullamcorper, rutrum eros.
                                        </a>
                                    </div>
                                </div>

                                <div class="col-sm-5 col-xs-6">
                                    <div class="noticiasHome">
                                        <h4 class="title">NOTÍCIAS</h4>
                                        <div class="noticia">
                                            <a class="imgLink" href="#" title="Título do Post">
                                                <img alt="Título do Post" src="<?php echo url_path() ?>images/noticia-1.jpg">
                                                <span class="hover"></span>    
                                            </a>
                                            <a class="linkTexto" href="#" title="Título do Post">
                                                <strong>Lorem ipsum</strong>
                                                Vivamus vel nibh feugiat, venenatis erat ullamcorper, rutrum eros.
                                                <span class="saibaMais">SAIBA MAIS</span>
                                            </a>
                                        </div>
                                        <div class="noticia">
                                            <a class="imgLink" href="#" title="Título do Post">
                                                <img alt="Título do Post" src="<?php echo url_path() ?>images/noticia-2.jpg">
                                                <span class="hover"></span>    
                                            </a>
                                            <a class="linkTexto" href="#" title="Título do Post">
                                                <strong>Lorem ipsum</strong>
                                                Vivamus vel nibh feugiat, venenatis erat ullamcorper, rutrum eros.
                                                <span class="saibaMais">SAIBA MAIS</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 col-xs-6">
                                    <div class="fb-page" data-href="https://www.facebook.com/PHBSOLAR01/" data-tabs="timeline" data-height="280" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/PHBSOLAR01/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/PHBSOLAR01/">PHB Solar</a></blockquote></div>
                                </div>
                            </div>
                        </div>
                    </article>
                </section>
            </div>
            <?php include 'inc/footer.php'; ?>
        </div>
        <script type="text/javascript" src="<?php echo url_path() ?>js/slick.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {

                $('.teaser').slick({
                    dots: false,
                    infinite: true,
                    speed: 300,
                    fade: true,
                    autoplay: true,
                    autoplaySpeed: 5000,
                    slidesToShow: 1,
                    slidesToScroll: 1
                });

                $('.sliderProdutos').slick({
                    dots: false,
                    infinite: true,
                    speed: 500,
                    fade: true,
                    slidesToShow: 1,
                    slidesToScroll: 1
                });
                $('.sliderProdutos button').on('click', function() {
                    $('.faixaSlider').toggleClass( "inversa" );
                });
            });
        </script>
        <div id="fb-root"></div>
        <script>
            (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.9&appId=116728892068297";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
    </body> 
</html>
