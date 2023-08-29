<?php
//timezone
date_default_timezone_set('America/São Paulo');

//conexão com o banco de dados
define('BD_SERVIDOR','localhost');
define('BD_USUARIO','root');
define('BD_SENHA','');
define('BD_BANCO','projetoweb');

class Banco{
    protected $mysqli;
    private $cadastro;

    public function construct(){
        $this->conexao();
    }

    private function conexao(){
        $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO, BD_SENHA, BD_BANCO);
    }

    public function setAgendamentos1($nome, $telefone, $origem, $data_contato, $observacao){
    $stmt = $this->mysqli->prepare("INSERT INTO agendamentos1 ('nome', 'telefone', 'origem', 'data_contato', 'observacao') VALUES (?,?,?,?,?);");
    $stmt->bind_param("sssss", $nome, $telefone, $origem, $data_contato, $observacao);
    if($stmt->execute() == TRUE){
        return true;
    }else{
        return false;
    } 
  }
  public function getAgendamentos1(){
      try{
        $stmt = $this->mysqli->query("SELECT * FROM agendamentos1;");
        $lista = $stmt->fetch_all(MYSQLI_ASSOC);
        $if_lista = array();
        $i = 0;
        foreach($lista as $l){
            $if_lista[$i]['nome'] = $l['nome'];
            $if_lista[$i]['telefone'] = $l['telefone'];
            $if_lista[$i]['origem'] = $l['origem'];
            $if_lista[$i]['data_contato'] = $l['data_contato'];
            $if_lista[$i]['observacao'] = $l['observacao'];
            $i++;
      }
      return $f_list;
    }catch(Exception $e){
         echo "Erro: " . $e;
      }
   }
}
?>