<?php

namespace PUC\Entity;
/**
 * @Entity
 * @Table(name="cliente")
 */
class Cliente {
    
     /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     *
     * @var int
     */
    private $id;
    
    /**
     * @Column(type="string")
     *
     * @var string
     */
    private $nome;
    
    /**
     * @Column(type="string")
     *
     * @var string
     */
    private $cpf;
    
    /**
     * @Column(type="string")
     *
     * @var string
     */
    private $email;
    
    /**
     * @Column(type="string")
     *
     * @var string
     */
    private $senha;
    
    /**
     * @Column(type="string")
     *
     * @var string
     */
    private $dataNascimento;
    
    /**
     * @Column(type="string")
     *
     * @var string
     */
    private $logradouro;
    
    /**
     * @Column(type="string")
     *
     * @var string
     */
    private $numero;
    
    /**
     * @Column(type="string")
     *
     * @var string
     */
    private $complemento;
    
    /**
     * @Column(type="string")
     *
     * @var string
     */
    private $bairro;
    
    /**
     * @Column(type="integer")
     *
     * @var int
     */
    private $idCidade;
    
    public function Autenticar($email, $senha){
        if($this->email == $email && $this->senha == $senha){
            return true;
        }else{
            return false;
        }
    }
    
    public function validaSenha($senha){
        if(strlen($senha) < 6):
            return false;
        elseif(strlen($senha) > 30):
            return false;        
        endif;
        
        return true;
    }

    public function getId(){
        return $this->id;
    }
    
    public function setId($id){
        $this->id = $id;
    }
    
    public function getNome(){
        return $this->nome;
    }
    
    public function setNome($nome){
        $this->nome = $nome;
    }
    
    public function getCpf(){
        return $this->cpf;
    }
    
    public function setCpf($cpf){
        $cpf = preg_replace('/[^0-9]/', '', $cpf);
        $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
        $this->cpf = $cpf;
    }
    
    public function getEmail(){
        return $this->email;
    }
    
    public function setEmail($email){
        $this->email = $email;
    }
    
    public function getSenha(){
        return $this->senha;
    }
    
    public function setSenha($senha){
        $this->senha = md5($senha);
    }
    
    public function getDataNascimento(){
        return $this->dataNascimento;
    }    
        
    public function setDataNascimento($data){
       $dataFormatada = explode('/', $data);        
       $this->dataNascimento = $dataFormatada[2].'-'.$dataFormatada[1].'-'.$dataFormatada[0];      
       return $this->dataNascimento;
    }
    
    public function getLogradouro(){
        return $this->logradouro;
    }
    
    public function setLogradouro($logradouro){
        $this->logradouro = $logradouro;
    }
    
    public function getNumero(){
        return $this->numero;
    }
    
    public function setNumero($numero){
        $this->numero = $numero;
    }
    
    public function getComplemento(){
        return $this->complemento;
    }
    
    public function setComplemento($complemento){
        $this->complemento = $complemento;
    }
    
    public function getBairro(){
        return $this->bairro;
    }
    
    public function setBairro($bairro){
        $this->bairro = $bairro;
    }
    
    public function getIdCidade(){
        return $this->idCidade;
    }
    
    public function setIdCidade($idCidade){
        $this->idCidade = $idCidade;
    }
}
