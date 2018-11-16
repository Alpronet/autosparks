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
<!-- //banner -->
<!-- contact -->
<div class="contact">
    <div class="container">
        <div class="col-md-4 contact-left">
            <h3>Endereço</h3>
            <p>Você pode realizar suas consultas em:
                <span>Av. Pref. Osmar Cunha 183,<br> 
                    Sala 710 - Bloco B <br>
                     Ceisa Center - Centro, Florianópolis.
                </span>
                
            </p>
           
            <ul>
                <li>Fone: (48) 9.8846-4641</li>
                <li>Fone: (48) 3307-6715</li>

                <li><a href="mailto:contato@centroregionaldeoptometria.com.br">contato@centroregionaldeoptometria.com.br</a></li>
            </ul>
        </div>
        <div class="col-md-8 contact-left">
            <h3>Entre em contato pelo Formulário</h3>
            <form action="enviarEmailSite" method="post">
                <input hidden="" type="text" name="assunto" value = 'Mensagem via e-mail' />
                <input type="text" name="nome" value="Seu Nome" onfocus="javascript:(this.value == 'Seu Nome' ? this.value = '' : null);" onblur="javascript:(this.value == '' ? this.value = 'Seu Nome' : null);" />
                <input style="width: 32.5%" type="email" name="email" value="Seu Email" onfocus="javascript:(this.value == 'Seu Email' ? this.value = '' : null);" onblur="javascript:(this.value == '' ? this.value = 'Seu Email' : null);" />
                <input type="text" name="telefone" value="Seu Telefone" onfocus="javascript:(this.value == 'Seu Telefone' ? this.value = '' : null);" onblur="javascript:(this.value == '' ? this.value = 'Seu Telefone' : null);" />
                <textarea type="text"  name="mensagem" value="mensagem" onfocus="this.value = '';" onblur="if (this.value == '') {
                            this.value = 'Mensagem...';
                        }" required="">Mensagem...</textarea>

                <input type="submit" value="Enviar" >
                <input type="reset" value="Limpar" >

            </form>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<div class="contact-bottom">
    <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3535.90427344763!2d-48.55050238494031!3d-27.596497282837937!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9527383b311dcb3b%3A0x77d03919427dfb5c!2sR.+Anita+Garibaldi%2C+60+-+Centro%2C+Florian%C3%B3polis+-+SC%2C+88010-500!5e0!3m2!1spt-BR!2sbr!4v1523272164278"  frameborder="0" style="border:0" allowfullscreen></iframe>-->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3535.977556283943!2d-48.5538115853982!3d-27.5942254286158!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95273822553a6cc3%3A0x74ec120a3d76f11c!2sAv.+Pref.+Osmar+Cunha%2C+183+-+Centro%2C+Florian%C3%B3polis+-+SC%2C+88015-100!5e0!3m2!1spt-BR!2sbr!4v1536716755016"  frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<script>
    $("#contato").addClass("active");
</script>

@footer