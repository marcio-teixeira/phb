<?php
require('inc/globals.php'); // Require in all pages
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>PHB Solar - Institucional</title>
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
                <div class="bannerInternas bannerInstitucional">
                    <div class="container">
                        <div class="titulo">
                            <h1>PHB <strong>INSTITUCIONAL</strong></h1>
                        </div>
                        <div class="breadcrumb" xmlns:v="http://rdf.data-vocabulary.org/#">
                            <span typeof="v:Breadcrumb">
                                <a href="<?php echo url_path() ?>" rel="v:url" property="v:title" title="Home">HOME</a>
                            </span>
                            <span class="space">&bull;</span>
                            <span typeof="v:Breadcrumb">
                                <span rel="v:url" property="v:title">INSTITUCIONAL</span>
                            </span>
                        </div>
                    </div>
                </div>
                
                <section class="boxTexto">
                    <article>
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="texto textoRight">
                                        <h2 class="title">QUEM SOMOS</h2>
                                    </div>
                                </div>
                                
                                <div class="col-sm-6">
                                    <div class="texto">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vehicula, sapien eu venenatis sodales, diam justo convallis arcu, nec fringilla nisi diam eu risus. Vivamus vel nibh feugiat, venenatis erat ullamcorper, rutrum eros. Proin eget orci ac sem fermentum efficitur.</p>
                                        <p>Phasellus diam velit, auctor nec felis lobortis, porta tempus odio. Phasellus id orci vel nibh auctor vulputate aliquet ut est. Morbi eu nisi lorem. Aliquam justo lectus, convallis at aliquet sit amet, pretium a sapien. Fusce pharetra, quam at gravida mattis, odio quam pellentesque sem, id lobortis sapien lacus sit amet tortor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque eu varius quam. Integer facilisis fermentum tempor.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </section>
                
                <div class="parallax imgInstitucional" data-divisor="2"></div>
                
                <section class="boxTexto">
                    <article>
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-6 col-xs-12 fr">
                                    <div class="texto">
                                        <h2 class="title">EMPRESA</h2>
                                    </div>
                                </div>
                                
                                <div class="col-sm-6 col-xs-12">
                                    <div class="texto textoRight">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vehicula, sapien eu venenatis sodales, diam justo convallis arcu, nec fringilla nisi diam eu risus. Vivamus vel nibh feugiat, venenatis erat ullamcorper, rutrum eros. Proin eget orci ac sem fermentum efficitur.</p>
                                        <p>Phasellus diam velit, auctor nec felis lobortis, porta tempus odio. Phasellus id orci vel nibh auctor vulputate aliquet ut est. Morbi eu nisi lorem. Aliquam justo lectus, convallis at aliquet sit amet, pretium a sapien. Fusce pharetra, quam at gravida mattis, odio quam pellentesque sem, id lobortis sapien lacus sit amet tortor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque eu varius quam. Integer facilisis fermentum tempor.</p>
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
