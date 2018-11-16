<?php



class MostraSingleProduto {
     private $produto;
    private $base = 'Web/Contents/Produtos';
    private $includes = 'Web/Includes';
     protected $template;

    function __construct() {

        $this->produto = new ProdutosModel();
        $this->template = new Template();
    }
    
    function showContentProduto() {

        $this->buildHTML();
    }

    public function assignData() {
  
        $this->template->assign('@content', $this->base . '/single.php');
        $this->template->assign('@produto', $this->produto->singleProduto());
       
    }

    public function assignIncludes() {

        $this->template->assign('@header', $this->includes . '/header.html');
        $this->template->assign('@footer', $this->includes . '/footer.html');
        $this->template->assign('@menu', $this->includes . '/menu.html');
    }

    public function assignTemplate() {
        $this->template->setLayout('Web/Templates/template.html');
    }

    public function buildHTML() {
        $this->assignTemplate();
        $this->assignData();
        $this->assignIncludes();

        $this->template->renderHTML();
    }

}



