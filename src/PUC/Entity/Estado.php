<?php
namespace PUC\Entity;

/**
 * @Entity
 * @Table(name="estados")
 */
class Estado {
    
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
    protected $uf;
    
    /**
     * @Column(type="string")
     *
     * @var string
     */
    protected $nome;
    
    /**
     * @Column(type="string")
     *
     * @var string
     */
    protected $pais;
    
    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    public function getUf()
    {
        return $this->uf;
    }

    public function setUf($uf)
    {
        $this->uf = $uf;
    }
    
    public function  getNome(){
        return $this->nome;
    }
    
    public function setNome($nome){
        $this->nome = $nome;
    }
    
    public function  getPais(){
        return $this->pais;
    }
    
    public function setPais($pais){
        $this->pais = $pais;
    }
}
