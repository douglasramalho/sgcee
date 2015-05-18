<?php

namespace PUC\Entity;
/**
 * @Entity
 * @Table(name="administrador")
 */
class Administrador {
    
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
    private $usuario;

    /**
     * @Column(type="string")
     *
     * @var string
     */
    private $senha;

    public function getId(){
        return $this->id;
    }

    public function getNome(){
        return $this->nome;
    }
    
}
