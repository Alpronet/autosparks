<?php

class ConsultasModel {

    function __construct() {
        $this->persistencia = new Persistence();
    }

    function tirarAcentos($string) {
        return preg_replace(array("/(á|à|ã|â|ä)/", "/(Á|À|Ã|Â|Ä)/", "/(é|è|ê|ë)/", "/(É|È|Ê|Ë)/", "/(í|ì|î|ï)/", "/(Í|Ì|Î|Ï)/", "/(ó|ò|õ|ô|ö)/", "/(Ó|Ò|Õ|Ô|Ö)/", "/(ú|ù|û|ü)/", "/(Ú|Ù|Û|Ü)/", "/(ñ)/", "/(Ñ)/"), explode(" ", "a A e E i I o O u U n N"), $string);
    }

    public function selectOptions() {


        $id = array_keys($_POST);
        $nomeCidade = str_replace('_', ' ', $id[0]);
        $nomeCidade = $this->tirarAcentos($nomeCidade);
        $idCidade = $this->persistencia->selectEspecial("SELECT id_cidade FROM Cidades where nome_cidade = '$nomeCidade'");
              
        $valores = $this->persistencia->selectEspecial("SELECT * FROM Agenda where cidade_agenda= ".$idCidade[0][0]." AND status_agenda = 'ATIVA' ");
        
        
        for ($i = 0; $i < count($valores); $i++) {
             $data = explode(" ",$valores[$i][1]);
            $texto .= '<option value="' . $valores[$i][0] . '">' . $this->inverteData($data[0]) ." ".$data[1].'</option>';
        }
      
        echo  $texto;
        
    }

    public function selectCidades() {

        $condition = 'status_cidade = "ATIVA"';
        $extra = 'ORDER BY nome_cidade ASC ';
        $table = 'Cidades';
        $valores = $this->persistencia->select($table, $condition, $extra);


        for ($i = 0; $i < count($valores); $i++) {
            $option .= '<option>' . utf8_encode($valores[$i]['nome_cidade']) . '</option>';
        }
        return $option;
    }

    function array_push_assoc($array, $key, $value) {
        $array[$key] = $value;
        return $array;
    }

    public function insertConsultas() {
        
        $cidade =$this->persistencia->select('Cidades', 'nome_cidade = "'.utf8_decode($_POST['cidade_agendada']).'"');
        $dataAgendada =$this->persistencia->select('Agenda', 'id_agenda = "'.$_POST['data_agendada'].'"');
        
   
        $dados['nome_consulta'] = utf8_decode($_POST['nome_consulta']);
        $dados['cidade_consulta'] =  $cidade[0]['id_cidade'];
        $dados['telefone_consulta'] = utf8_decode($_POST['telefone_consulta']);
        $dados['data_agendamento'] = date('Y-m-d H:i:s');
        $dados['data_agendada'] = $dataAgendada[0]['data_agenda'];
  
        $this->persistencia->insertNew('Consultas', $dados);
        
        $this->persistencia->update('Agenda', 'status_agenda', 'MARCADA', 'id_agenda =' . $_POST['data_agendada']);
        
        
        echo file_get_contents("Web/Templates/Bar/index.html");
        sleep(3);
        echo '<script>$("#container").hide();</script>';
        echo file_get_contents("Web/Templates/consulta.html");
        sleep(5);
        die("<script type='text/javascript'>window.location.href='home';</script>");
    }

    public function inverteData($data) {
        if (count(explode("/", $data)) > 1) {

            $dataInvert = implode("-", array_reverse(explode("/", $data)));
            $dataExplode = explode("-", $dataInvert);
            $dataFinal = $dataExplode[0] . '-' . $dataExplode[1] . '-' . $dataExplode[2];
            return $dataFinal;
        } elseif (count(explode("-", $data)) > 1) {
            $dataInvert = implode("/", array_reverse(explode("-", $data)));
            $dataExplode = explode("/", $dataInvert);
            $dataFinal = $dataExplode[0] . '/' . $dataExplode[1] . '/' . $dataExplode[2];
            return $dataFinal;
        }
    }

}
