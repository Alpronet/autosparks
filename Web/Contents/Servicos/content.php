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

 <div class="clearfix"> </div>
<!-- featured-services -->
	<div class="featured-services">
		<div class="container">
			<h3>Serviços em destaque</h3>
			<div class="featured-services-grids">
				@cervicos
				
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //featured-services -->
<!-- additional-services -->
	<div class="additional-services">
		<div class="container">
			<div class="additional-service-grid">
				<h3>Serviços adicionais</h3>
				<div class="additional-service-grids">
					
					@adicionais
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
<!-- //additional-services -->
<!-- sevices -->
	<div class="sevices">
		<div class="container">
			<h3>Lista de Serviços</h3>
			<div class="sevices-grids">
				@lista
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>




<!-- footer -->
@footer

<!--//footer-->

<!-- for bootstrap working -->
<script src="Web/Scripts/bootstrap.js"></script>
<!-- //for bootstrap working -->
