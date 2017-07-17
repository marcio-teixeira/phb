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
                <div class="bannerInternas bannerProdutos">
                    <div class="container">
                        <div class="titulo">
                            <h1>CONHEÇA NOSSOS <strong>PRODUTOS</strong></h1>
                        </div>
                        <div class="breadcrumb" xmlns:v="http://rdf.data-vocabulary.org/#">
                            <span typeof="v:Breadcrumb">
                                <a href="<?php echo url_path() ?>" rel="v:url" property="v:title" title="Home">HOME</a>
                            </span>
                            <span class="space">&bull;</span>
                            <span typeof="v:Breadcrumb">
                                <span rel="v:url" property="v:title">PRODUTOS</span>
                            </span>
                        </div>
                    </div>
                </div>

                <section id="produtos">
                    <article>
                        <div class="listaProdutos">
                            <div class="item">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-6 col-xs-12 colImgProd">
                                            <img class="img-responsive" alt="Inversor 1500W" title="Inversor 1500W" src="images/produtos/inversor-1500w.jpg">
                                        </div>
                                        <div class="col-sm-6 col-xs-12 colTextProd">
                                            <div class="textoProd">
                                                <h3>Inversor 1500W</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vehicula, sapien eu venenatis sodales, diam justo convallis arcu, nec fringilla nisi diam eu risus.</p>
                                                <a class="btSaibaMais" href="<?php echo url_path() ?>" title="Saiba mais sobre o Inversor 1500W">SAIBA MAIS</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-6 col-xs-12 colImgProd">
                                            <img class="img-responsive" alt="Inversor 3000W" title="Inversor 3000W" src="images/produtos/inversor-3000w.jpg">
                                        </div>
                                        <div class="col-sm-6 col-xs-12 colTextProd">
                                            <div class="textoProd">
                                                <h3>Inversor 3000W</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vehicula, sapien eu venenatis sodales, diam justo convallis arcu, nec fringilla nisi diam eu risus.</p>
                                                <a class="btSaibaMais" href="<?php echo url_path() ?>" title="Saiba mais sobre o Inversor 3000W">SAIBA MAIS</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-6 col-xs-12 colImgProd">
                                            <img class="img-responsive" alt="Estruturas" title="Estruturas" src="images/produtos/estruturas.jpg">
                                        </div>
                                        <div class="col-sm-6 col-xs-12 colTextProd">
                                            <div class="textoProd">
                                                <h3>Estruturas</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vehicula, sapien eu venenatis sodales, diam justo convallis arcu, nec fringilla nisi diam eu risus.</p>
                                                <a class="btSaibaMais" href="<?php echo url_path() ?>" title="Saiba mais sobre Estruturas">SAIBA MAIS</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-6 col-xs-12 colImgProd">
                                            <img class="img-responsive" alt="StringBox" title="StringBox" src="images/produtos/stringbox.jpg">
                                        </div>
                                        <div class="col-sm-6 col-xs-12 colTextProd">
                                            <div class="textoProd">
                                                <h3>StringBox</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vehicula, sapien eu venenatis sodales, diam justo convallis arcu, nec fringilla nisi diam eu risus.</p>
                                                <a class="btSaibaMais" href="<?php echo url_path() ?>" title="Saiba mais sobre StringBox">SAIBA MAIS</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-6 col-xs-12 colImgProd">
                                            <img class="img-responsive" alt="Kits Solares" title="Kits Solares" src="images/produtos/kits-solares.jpg">
                                        </div>
                                        <div class="col-sm-6 col-xs-12 colTextProd">
                                            <div class="textoProd">
                                                <h3>Kits Solares</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vehicula, sapien eu venenatis sodales, diam justo convallis arcu, nec fringilla nisi diam eu risus.</p>
                                                <a class="btSaibaMais" href="<?php echo url_path() ?>" title="Saiba mais sobre Kits Solares">SAIBA MAIS</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </article>
                </section>

                <?php include 'inc/newsletter.php'; ?> 

                <?php include 'inc/novidades.php'; ?>
            </div>
            <?php include 'inc/footer.php'; ?>
        </div>
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
