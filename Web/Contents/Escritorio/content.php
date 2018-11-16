<link href="Web/Styles/font-awesome.css" rel="stylesheet">

<!-- banner -->
<div style="height: 4em" class="col-md-12"></div>
<div style="background: url(http://saltoremardegan.adv.br/sistema/images/@banner) no-repeat 0px 0px;" class="banner" id="home">
    <!-- agileinfo-dot -->
    <div class="agileinfo-dot">
        <div class="head">
            <div class="navbar-top">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div style="margin-right: 2em" >
                        <div class="img-responsive">
                            <a href="home">
                                <img src="Web/Imagens/logosm.png">
                            </a>
                        </div>
                    </div>

                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                @menu
                <!-- /.navbar-collapse -->
            </div>
        </div>
       
    </div>
<div class="about-heading two"></div>

<!-- about -->
<div class="about" id="about">
    <div class="container">
        <div class="w3l-about-grids_inner">
            <div class="col-md-6 w3ls-about-left">
                <h2>@titulo</h2>
                <h6>@subTitulo</h6>
                @texto
            </div>
            <div style="margin-top: 2em" class="col-md-6 w3ls-about-right">
                <img src="sistema/images/@imagem" alt="Nosso Escritório " class="img-responsive">
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //about -->

<!-- team -->
<div class="team" id="team">
    <div class="container">
        <div class="about-heading two">
            <h3>Nossa Banca</h3>
            <p>Sua melhor escolha.</p>
        </div>
        <div class="team-grids">
            @equipe

            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!--team-->

<link href="Web/Styles/font-awesome.css" rel="stylesheet">
<!-- about -->
<div class="why jarallax" id="features">
    <div class="agile-dot">
        <div class="container">
            <div class="about-heading two">
                <h3>VALORES</h3>
                <p>Constituem-se nossos valores:</p>
            </div>
            <div class="w3l-about-grids">
                @valores
                <div class="col-md-4 w3ls-about-right">
                    <div class="w3ls-about-right-img">

                    </div>
                </div>
                @ultValores
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>
<!-- //about -->
@footer
