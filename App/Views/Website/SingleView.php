<?php

class SingleView {

    private $noticias;
    private $base = 'Web/Contents/Blog';
    private $includes = 'Web/Includes';
    protected $template;

    function __construct() {

        $this->template = new Template();
        $this->noticias = new BlogModel();
    }

    function showContentSingle() {
        $this->buildHTML();
    }

    public function assignData() {
       
        
        $this->template->assign('@miniatura', $this->noticias->selectMiniaturas());
        $this->template->assign('@single', $this->noticias->selectNoticia());
        $this->template->assign('@categorias', $this->noticias->selectCategorias());
        $this->template->assign('@titulo', $this->noticias->selectTitulo());
         
       
    }

    public function assignIncludes() {
        $this->template->assign('@content', $this->base . '/single.php');
        $this->template->assign('@menu', $this->includes . '/menu.html');
        $this->template->assign('<img style="width: 15em;height: 2em;margin-top: -0.5em" src="Web/Imagens/logo.png" class="img-responsive" alt="Logo Optometria">', '');
        $this->template->assign('@header', $this->includes . '/header.html');
        $this->template->assign('@footer', $this->includes . '/footer.html');
        
    }

    public function assignTemplate() {
        $this->template->setLayout('Web/Templates/template.html');
    }

    public function buildHTML() {
        $this->assignTemplate();
        $this->assignIncludes();
        $this->assignData();

        $this->template->renderHTML();
    }

}
