<?php

class Usuario{
    private $nome;
    private $cpf;
    private $senha;
    private $tel;
    private $rua;
    private $cidade;
    private $estado;
    private $cep;
    private $sql;

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

    public function getSenha(){
        return $this->senha;
    }

    public function setSenha($value){
        $this->senha = $value;
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

    public function loadByCpf($cpf){
        $this->sql = new Sql();
        $results = $this->sql->select("SELECT * FROM tb_usuario WHERE cpf = $cpf");
        $usuario = $results[0];
        var_dump($usuario);

        if (count($results) > 0) {
            $this->setNome($usuario['nome']);
            $this->setCpf($usuario['cpf']);
            $this->setTel($usuario['telefone']);
            $this->setRua($usuario['rua']);
            $this->setCidade($usuario['cidade']);
            $this->setEstado($usuario['estado']);
            $this->setCep($usuario['cep']);
            $this->setSenha($usuario['senha']);
        }
    }
    
    public function loadData(){
        $data = array(
            "nome" => $this->getNome(),
            "cpf" => $this->getCpf(),
            "tel" => $this->getTel(),
            "rua" => $this->getRua(),
            "cidade" => $this->getCidade(),
            "estado" => $this->getEstado(),
            "cep" => $this->getCep(),
            "senha" => $this->getSenha(),
        );

        return $data;

    }

    public function insert($raw_nome,$raw_cpf,$raw_tel,$raw_cep,$raw_rua,$raw_cidade,$raw_estado,$raw_senha){
        
        $this->feed_user($raw_nome,$raw_cpf,$raw_tel,$raw_cep,$raw_rua,$raw_cidade,$raw_estado,$raw_senha);
        $data = $this->loadData();
        extract($data);
        

        try {
            
            $this->sql->execQuery("INSERT INTO tb_usuario (nome,cpf,telefone,rua,cidade,estado,cep,senha) 
                VALUES('$nome',$cpf,$tel,'$rua','$cidade','$estado',$cep,'$senha')");
            return 1;

        } catch (\Throwable $th) {
            return 0;
        }

    }

    public function feed_user($nome,$cpf,$tel,$cep,$rua,$cidade,$estado,$senha){
        $this->setNome($nome);
        $this->setCpf($cpf);
        $this->setTel($tel);
        $this->setCep($cep);
        $this->setRua($rua);
        $this->setCidade($cidade);
        $this->setEstado($estado);
        $this->setSenha($senha);
    }

    public function __toString(){
        $dados = json_encode(
            $this->loadData()
        );
        return $dados;
    }

    public function __construct(){
        $this->sql = new Sql();
    }

}
