<?php
include("connect.php");

class Unidade extends ConexaoMySQL {

   
    private $bloco;
    private $apartamento;
    private $responsavel;
    private $veiculo_id_placas;
    
    
        public function salvarunidade(){
           $this->bloco = $_POST['bloco'];
           $this->apartamento = $_POST['apartamento'];
           $this->responsavel = $_POST['responsavel'];
           $this->veiculo_id_placas = $_POST['veiculo_id_placas'];
     
    
            
            $sql = "INSERT INTO unidade ( bloco, apto, responsavel, veiculo_id_placas)
            VALUES (' $this->bloco', ' $this->apartamento', ' $this->responsavel', ' $this->veiculo_id_placas')";

          if($this->executarConsulta ($sql)){
            echo "unidade salva";
          }else{
            echo "erro ao salvar a unidade";
          } 

     


}

}

$unidade = new Unidade();
$unidade->salvarunidade();



