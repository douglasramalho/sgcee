<?php
namespace PUC\Entity;
/**
 * @Entity
 * @Table(name="cidades")
 */
class Cidade {
    
    

    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     *
     * @var int
     */
    protected $id;
    
    /**
     * @Column(type="string")
     *
     * @var string
     */
    protected  $estado;
    
    /**
     * @Column(type="string")
     *
     * @var string
     */
    protected $nome;
    
    public function getEstado(){
        return $this->estado;
    }
    
    public function getId(){
        return $this->id;
    }
    
    public function getNome(){
        return $this->nome;
    }
    
    public function setNome($nome){
        $this->nome = $nome;
    }
   
}
