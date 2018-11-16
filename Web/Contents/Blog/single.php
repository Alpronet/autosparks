<!-- header -->

<div class="header">
    <div class="container">
        <div class="header-nav">
            <nav class="navbar navbar-default">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                @menu
                <!-- /.navbar-collapse -->
            </nav>
        </div>
    </div>
</div>
<!-- //header -->
<!-- blog -->
	<div class="blog">
		<div class="container">
			<div class="col-md-7 blog-left">
			@single
                        
                        <a class="MarcarConsulta" href="http://centroregionaldeoptometria.com.br/agendar">
                            Marque sua Consulta	
                        </a>
			 
			</div>
			<div class="col-md-5 blog-right">
				<div class="blog-right1">
					<div class="search">
						<h3>Notícias</h3>
                                                <form method="post" action="assine">
			                                <input type="text" name="email" value="Seu Email" onfocus="javascript:(this.value == 'Seu Email' ? this.value = '' : null);" onblur="javascript:(this.value == '' ? this.value = 'Seu Email' : null);" />

                                                        <input type="submit" value="Assine">
						</form>
					</div>
					<div class="categories">
						<h3>Categorias</h3>
						<ul>
                                                    
                                                    @categorias
							
							
						</ul>
					</div>
                                    <div style="height: 3em"></div>
			
					<div class="related-posts">
						<h3>Outros Posts</h3>
						
						@miniatura
					</div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
    <!-- //news -->
    @footer