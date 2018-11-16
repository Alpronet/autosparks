<!-- header -->
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<meta charset="UTF-8">





<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
<script>
$(document).on('blur', '#telefone_consulta', function(event) {
  var campo = $(this).val();
  // Verifica quais os primeiros dígitos informados.
  if (campo !== "" && campo.substring(0,2) === "08" || campo.substring(0,3) === "(08") {
    $("#telefone_consulta").mask("0000-000-0000");
  } else {
    $("#telefone_consulta").mask("(00) 00000-0000");
  }
  // console.log(campo.substring(0, 2));
});
</script>


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
        <div class="col-md-2 contact-left"></div>
        <div class="col-md-8 contact-left">
            <h3>Agende sua Consulta Via Internet</h3>

            <form action="agenda" method="post">
                <div class="form-group">

                    <div class="col-xs-12">

                        <div class="form-control-static"> 
                            <select class="form-control"  name="cidade_agendada" id="cidade_agendada" >
                                <option selected="" value="">Cidades</option>
                                @cidades
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">

                    <div class="col-xs-12">

                        <div class="form-control-static"> 
                            <select class="form-control"  name="data_agendada" id="data_agendada" >
                                <option selected="" style="text-transform: uppercase">Data da Consulta</option>

                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">

                    <div class="col-xs-12">

                        <div class="form-control-static"> 
                            <input style="width: 100%"  type="text" name="nome_consulta" id="nome_consulta" placeholder="Seu nome">
                        </div>
                    </div>
                </div>
                <div class="form-group">

                    <div class="col-xs-12">

                        <div class="form-control-static"> 
                            <input style="width: 100%"  type="text" name="telefone_consulta" id="telefone_consulta" placeholder="Seu telefone *obrigatório"   required="">
                            <!--Este pattern permite validar seu telefone  pattern="\([0-9]{2}\)[\s][0-9]{4}-[0-9]{4,5}"-->
                        </div>
                    </div>
                </div>



                <div class="form-group">

                    <div class="col-xs-12">

                        <div class="form-control-static">
                            <input type="submit" value="Agendar" >
                            <input type="reset" value="Limpar" >
                        </div>
                    </div>
                </div>

            </form>
          

        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<div class="contact-bottom">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3535.90427344763!2d-48.55050238494031!3d-27.596497282837937!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9527383b311dcb3b%3A0x77d03919427dfb5c!2sR.+Anita+Garibaldi%2C+60+-+Centro%2C+Florian%C3%B3polis+-+SC%2C+88010-500!5e0!3m2!1spt-BR!2sbr!4v1523272164278"  frameborder="0" style="border:0" allowfullscreen></iframe>	</div>
<script>
    $("#cidade_agendada").change(function () {
       
            var cidade = $(this).val();
            $.ajax({
                type: "POST",
                url: "selectDatas",
                data: cidade,
                success: function (result) {
                        $("#data_agendada").html(result);
                }});
        
    });
</script>

@footer