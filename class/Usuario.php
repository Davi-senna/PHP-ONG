<?php

class Usuario{
    private $nome;
    private $cpf;
    private $tel;
    private $rua;
    private $cidade;
    private $estado;
    private $cep;

    public function getNome(){
        return $this->nome;
    }

    public function setNome($value){
        $this->nome = $value;
    }

    public function getCpf(){
        return $this->cpf;
    }

    public function setCpf($value){
        $this->cpf = $value;
    }

    public function getTel(){
        return $this->tel;
    }

    public function setTel($value){
        $this->tel = $value;
    }

    public function getRua(){
        return $this->rua;
    }

    public function setRua($value){
        $this->rua = $value;
    }

    public function getCidade(){
        return $this->cidade;
    }

    public function setCidade($value){
        $this->cidade = $value;
    }

    public function getEstado(){
        return $this->estado;
    }

    public function setEstado($value){
        $this->estado = $value;
    }

    public function getCep(){
        return $this->cep;
    }

    public function setCep($value){
        $this->cep = $value;
    }

/*    public function loadByCpf($cpf){
        $sql = new Sql();
        $results = $sql->select("SELECT * FROM usuarios WHERE cpf = $cpf");
        $usuario = $results[0];

        if (count($results) > 0) {
            $this->setNome($usuario['nome']);
            $this->setCpf($usuario['cpf']);
            $this->setTel($usuario['tel']);
            $this->setRua($usuario['rua']);
        }
    }*/
    
    public function loadData(){
        $data = array(
            "nome" => $this->getNome(),
            "cpf" => $this->getCpf(),
            "tel" => $this->getTel(),
            "rua" => $this->getRua(),
            "cidade" => $this->getCidade(),
            "estado" => $this->getEstado(),
            "cep" => $this->getCep(),
        );

        return $data;

    }

    public function register(){

        $sql = new Sql();
        $data = $this->loadData();
        extract($data);

        $sql->execQuery("INSERT INTO tb_usuario (nome,cpf,telefone,rua,cidade,estado,cep) 
        VALUES('$nome',$cpf,$tel,'$rua','$cidade','$estado',$cep)");

    }

    public function __construct($nome,$cpf,$tel,$cep,$rua,$cidade,$estado){
        $this->setNome($nome);
        $this->setCpf($cpf);
        $this->setTel($tel);
        $this->setCep($cep);
        $this->setRua($rua);
        $this->setCidade($cidade);
        $this->setEstado($estado);
    }

    public function __toString(){
        $dados = json_encode(
            $this->loadData()
        );
        return $dados;
    }
}
