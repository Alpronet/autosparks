<?phpclass EscritorioModel {    function __construct() {        $this->persistencia = new Persistence();    }    public function exibeTitulo() {        $condition = 'id_escritorio !=""';        $table = 'Escritorio';        $titulo = $this->persistencia->select($table, $condition);        return utf8_encode($titulo[0]['Titulo']);    }    public function exibeSubTitulo() {        $condition = 'id_escritorio !=""';        $table = 'Escritorio';        $titulo = $this->persistencia->select($table, $condition);        return utf8_encode($titulo[0]['Subtitulo']);    }    public function exibeTexto() {        $condition = 'id_escritorio !=""';        $table = 'Escritorio';        $titulo = $this->persistencia->select($table, $condition);        return utf8_encode($titulo[0]['texto_escritorio']);    }    public function exibeImagem() {        $condition = 'id_escritorio !=""';        $table = 'Escritorio';        $titulo = $this->persistencia->select($table, $condition);        return utf8_encode($titulo[0]['Foto']);    }    public function exibeValores() {         $condition = 'id_valor !=""';        $extra = 'order by id_valor ASC LIMIT 3';        $table = 'Valores';        $valores = $this->persistencia->select($table, $condition, $extra);        $texto = '<div class="col-md-4 w3ls-about-why-us-agile">';        for ($i = 0; $i < count($valores); $i++) {            $texto .= '<div class="agileits-icon-grid">                            <div class="icon-left hvr-radial-out">                                <i class="'.$valores[$i]['icone_valor'].' icone" aria-hidden="true"></i>                            </div>                            <div class="icon-right">                              <h5>'.utf8_encode($valores[$i]['texto_valor']).'</h5>                           </div>                            <div class="clearfix"> </div>			</div>';        }        $texto .= '</div>';        return $texto;        $texto .= '</div>';        return $texto;    }    public function exibeValores2() {         $condition = 'id_valor !=""';        $extra = 'order by id_valor DESC LIMIT 3';        $table = 'Valores';        $valores = $this->persistencia->select($table, $condition, $extra);        $texto = '<div class="col-md-4 w3ls-about-why-us-agile">';        for ($i = 0; $i < count($valores); $i++) {            $texto .= '<div class="agileits-icon-grid">                            <div class="icon-left hvr-radial-out">                                <i class="'.$valores[$i]['icone_valor'].' icone" aria-hidden="true"></i>                            </div>                            <div class="icon-right">                              <h5>'. utf8_encode($valores[$i]['texto_valor']).'</h5>                           </div>                            <div class="clearfix"> </div>			</div>';        }        $texto .= '</div>';        return $texto;    }    public function exibeEquipe() {        $condition = 'status_advogado = 1';        $extra = 'ORDER BY id_advogado DESC ';        $table = 'Banca';        $equipe = $this->persistencia->select($table, $condition, $extra);        for ($i = 0; $i < count($equipe); $i++) {            $advogado .= "<div class='col-md-6 agileinfo-team-grid'>			    <img src='sistema/images/" . $equipe[$i]['foto_advogado'] . "' alt='Foto do advogado'>			       <div class='captn'>				  <h4>" . $equipe[$i]['nome_advogado'] . "</h4>				    <p>" . $equipe[$i]['cargo_advogado'] . " </p>			   <div class='w3l-social'>				<ul>				  <li><a href='" . $equipe[$i]['facebook_advogado'] . " '><i class='fa fa-facebook'></i></a></li>				  <li><a href='" . $equipe[$i]['twitter_advogado'] . " '><i class='fa fa-twitter'></i></a></li>				  <li><a href='" . $equipe[$i]['rss_advogado'] . " '><i class='fa fa-rss'></i></a></li>								</ul>			    </div>					</div>				</div>";        }        return $advogado;    }}