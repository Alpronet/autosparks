<?php

require '../App/Conn/Conn.php';
require 'PHPMailer.php';

class DispararEmail {


    function select($table, $condition, $extra = NULL, $fetch = PDO::FETCH_ASSOC, $fields = '*', $where = 'where') {

        $sql = "SELECT $fields FROM $table $where $condition $extra";

        try {
            $database = new Conn();
            $database->getInstance();
            $query = $database->connect()->prepare($sql);
            $query->execute();
            $result = $query->fetchAll($fetch);
            return $result;
        } catch (PDOException $error) {
            echo "Erro ao selecionar da tabela $table " . $sql;
        }
    }

    function update($table, $values, $attrs, $condicion) {
        $database = new Conn();
        $database->getInstance();
        $sql = "UPDATE $table SET $values = '$attrs' WHERE $condicion";
        $query = $database->connect()->prepare($sql);
        $query->execute();
        return TRUE;
    }
    
    function lastInsertedId($columnId, $table) {
        $sql = "SELECT MAX($columnId) FROM $table";
        try {
            $database = new Conn();
            $database->getInstance();
            $query = $database->connect()->prepare($sql);
            $query->execute();
            $result = $query->fetchAll();
            return $result[0][0];
        } catch (PDOException $error) {
            echo "Erro ao selecionar o último ID da tabela $table" . $error->getMessage();
        }
    }

    public function dipararEmail($data) {

        $condition = 'status_email="ATIVO"';
        $extra = 'ORDER BY id_email DESC ';
        $table = 'Email';
        $email = $this->select($table, $condition, $extra);
        

        for ($i = 0; $i < count($email); $i++) {

            $this->sendEmail($data, $email[$i]['end_email'],$email[$i]['id_email']);
        }
    }

    public function sendEmail($data, $email,$idEmail) {
        
        $fundo[0]='#FAA116';
        $fundo[1]='#57C7C3';
        $fundo[2]='#3B97D3';
        
        $indiceCor = rand(0, 2);
       
        $mail = new PHPMailer;
        $mail->IsSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';                       // Specify main and backup server
        $mail->Port = 587;                                    // Set the SMTP port
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'alpronet@gmail.com';               // SMTP username
        $mail->Password = 'jos101010';                        // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted
        $mail->From = 'josley.rosa.so@gmail.com';
        $mail->FromName = $data['titulo_blog'];
        $mail->AddAddress($email);                            // Add a recipient
        $mail->IsHTML(true);                                  // Set email format to HTML
        $mail->Subject = "Notícias do Centro de Optometria";
        
        $idBlog =$this->lastInsertedId('id_blog', 'Blog') + 1;
        
        $arquivo = file_get_contents("../Web/Templates/email.html");
        $arquivo=str_replace("@fundo",$fundo[$indiceCor],$arquivo);
        $arquivo=str_replace("@titulo",$data['titulo_blog'],$arquivo);
        $arquivo=str_replace("@imagem",$data['imagem_blog'],$arquivo);
        $arquivo=str_replace("@textoBlog",$data['texto_blog'],$arquivo);
        $arquivo=str_replace("@idBlog",$idBlog ,$arquivo);
        
        $mail->Body = $arquivo;

        if (!$mail->Send()) {
            $this->update('Email', 'status_email', 'INATIVO', 'id_email="'.$idEmail.'"');
            
            exit;
        }
    }

}
