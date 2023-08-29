<?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
require_once("$root/projetoweb_recons1/model/cadastro.php");

class ControllerCadastro{
    private $cadastro;
    public function __constrct(){
        $this->cadastro = new Cadastro();
        $this->incluir();
    }
    private function incluir(){
        $this->cadastro->setNome($_POST['nome']);
        $this->cadastro->setTelefone($_POST['telefone']);
        $this->cadastro->setOrigem($_POST['origem']);
        $this->cadastro->setData_contato(date('Y-m-d',strtotime($_POST['DataContato'])));
        $this->cadastro->setObservacao($_POST['observacao']);
        $result = $this->cadastro->incluir();
        if($result >= 1){
            echo "<script>alert('Registro incluído com sucesso!!!'); document.location=' ../index.php'</script>";
        }else{
            echo "<script>alert('Erro ao gravar registro!');</script>";
        }

    }
}
new ControllerCadastro();
?>