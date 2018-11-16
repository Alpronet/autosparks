<?php


require 'App/Views/System/MostraUsuarioView.php';
require 'App/Models/UsuarioModel.php';

class UsuarioController {

    private $modeloUusario;

    function __construct() {
        
    }

    public function mostraUsuarioAction() {
        $formulario = new MostraUsuarioView();
        $formulario->showContentCadastraUsuario();
        
    }
    public function cadastrarUsuarioAction() {
       $insertUsuario =new UsuarioModel();
       $insertUsuario->insereUsuario();
        
    }
    
    public function mostralistaUsuariosAction() {
       $insertUsuario =new UsuarioModel();
       $insertUsuario->selectUsuariosPainel();
        
    }
    public function mostratabelaUsuariosAction() {
       $formulario = new MostraUsuarioView();
       $formulario->showContentListaUsuario();
        
    }
    public function deleteUsuarioAction() {
       $deleteUsuario=new UsuarioModel();
       $deleteUsuario->deleteUsuario();
        
    }
    public function AtualizaUsuarioAction() {
       $atualizaUsuario=new UsuarioModel();
       $atualizaUsuario->selectAtualizaUsuario();
        
    }
    
     public function AtualizarUsuarioAction() {
       $atualizaUsuario=new UsuarioModel();
       $atualizaUsuario->updateUsuario();
        
    }
    public function perfilAction() {
       $atualizaUsuario=new UsuarioModel();
       $atualizaUsuario->perfil();
        
    }
    
    public function MostraPerfilAction() {
       $formulario = new MostraUsuarioView();
       $formulario->showContentPerfilUsuario();
        
    }
    public function usuarioUnicosAction() {
      $atualizaUsuario=new UsuarioModel();
       $atualizaUsuario->selectVisitantes();
        
    }
    public function usuarioHojeAction() {
      $atualizaUsuario=new UsuarioModel();
       $atualizaUsuario->selectVisitantesHoje();
        
    }
    public function totalVisitasAction() {
      $atualizaUsuario=new UsuarioModel();
       $atualizaUsuario->selectTotalVisitas();
        
    }
    
    public function visitantesDiaAction() {

      $selecionaVisitante=new UsuarioModel();
       $selecionaVisitante->selectVisitantesDia();
        
    }
    public function visitantesAnoAction() {

      $selecionaVisitante=new UsuarioModel();
       $selecionaVisitante->selectVisitantesAno();
        
    }
    
    

}
