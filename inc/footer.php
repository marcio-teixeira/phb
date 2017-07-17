<footer>
    <div class="boxFooter">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <img class="logoFooter" title="PHB Solar" alt="PHB Solar" src="<?php echo url_path() ?>images/logo-phb-solar.png">
                    <h4>PHB SOLAR</h4>
                    <p>Trabalhe com qualidade, segurança e suporte técnico. Seja um de nossos parceiros.</p>
                    <img class="imgInmetro" alt="Logo Inmetro" title="Inmetro" src="<?php echo url_path() ?>images/img-inmetro.png">
                </div>
                <div class="col-sm-4">
                    <h4>PHB SOLAR</h4>
                    <p>
                        R. Aroaba, 129 - Vila Leopoldina - São Paulo - SP<br>
                        Cep: 05315-020
                    </p>
                    <div class="mapa">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2586.5789056844196!2d-46.732003377260305!3d-23.533402699484103!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cef8a2ccdad9af%3A0x7b5d6aac80944b63!2sR.+Aroaba%2C+129+-+Vila+Leopoldina%2C+S%C3%A3o+Paulo+-+SP%2C+05315-020!5e0!3m2!1spt-BR!2sbr!4v1500310713035" width="100%" height="130" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-sm-4">
                    <nav class="menuFooter">
                        <ul>            	
                            <li><a href="<?php echo url_path() ?>institucional.php" title="Institucional">Institucional</a></li>
                            <li><a href="<?php echo url_path() ?>produtos.php" title="Produtos">Produtos</a></li>
                            <li><a href="<?php echo url_path() ?>" title="Assistência Técnica no Brasil">Assistência Técnica no Brasil</a></li>
                            <li><a href="<?php echo url_path() ?>" title="Treinamentos">Treinamentos</a></li>
                            <li><a href="<?php echo url_path() ?>" title="Forma de Pagamento">Forma de Pagamento</a></li>
                            <li><a href="<?php echo url_path() ?>" title="Monitoramento">Monitoramento</a></li>
                            <li><a href="<?php echo url_path() ?>" title="Tutoriais">Tutoriais</a></li>
                            <li><a href="<?php echo url_path() ?>" title="Contato">Contato</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="fim">
        <div class="container">
        <span class="fl"><?php echo date('Y') ?> PHB Solar®. Todos os direitos reservados.</span>
        <a class="fr" target="_blank" title="criação de websites - RS DEZOITO" href="http://www.rsdezoito.com.br/" rel="nofollow">RS DEZOITO</a>
        </div>
    </div>

</footer>
<script src="<?php echo url_path() ?>js/jquery-migrate-1.2.1.min.js"></script>
<script src="<?php echo url_path() ?>js/jquery-1.11.3.min.js"></script>
<script src="<?php echo url_path() ?>js/bootstrap.js"></script>
<script src="<?php echo url_path() ?>js/jquery.mmenu.min.all.js"></script>
<script src="<?php echo url_path() ?>js/functions.js"></script>
<script src="<?php echo url_path() ?>js/rejeita-browser.js"></script>


<script type="text/javascript">
    $(window).load(function() {
        $("#menuMobile").mmenu({
            offCanvas: {
                position: "right"
            },
            onClick: {
                setSelected: true
            },
            navbar:{
                titleLink: "parent",
                title	: "MENU"
            }
        });    
        $.reject({  
            display: ['firefox','chrome','opera','msie'] // Displays only firefox, chrome, opera and IE     
        });  

        return false;  
    });
</script>

