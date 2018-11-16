<?php

$routes = array(
        #WEBSITE
        '' => array("controller" => "_Home", "method" => "showContent"),
        'home' => array("controller" => "_Home", "method" => "showContent"),
        'empresa' => array("controller" => "_Empresa", "method" => "showContent"),
        'projeto' => array("controller" => "_Projeto", "method" => "showContent"),
        'produtos' => array("controller" => "_Produtos", "method" => "showContent"),
        'servicos' => array("controller" => "_Servicos", "method" => "showContent"),
        'contato' => array("controller" => "_Contato", "method" => "showContent"),
        #SISTEMA
        'login' => array("controller" => "Login", "method" => "showContent"),
        'entrar' => array("controller" => "Login", "method" => "doLogin"),
        'painel' => array("controller" => "Home", "method" => "showContent"),
        'usuarios' => array("controller" => "Usuarios", "method" => "showContent")
    );