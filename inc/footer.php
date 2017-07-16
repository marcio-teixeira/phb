<footer>
	<div class="container">
		<div class="fim">
			<span class="fl">Todos os direitos reservados - <?php echo date('Y') ?></span>
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
		
