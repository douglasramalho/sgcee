<?php

namespace PUC\Entity;
/**
 * @Entity
 * @Table(name="categoria")
 */
Class Categoria {

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
    private $descricao;

    public function __construct($nome, $descricao) {
        $this->nome = $nome;
        $this->descricao = $descricao;
    }

    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getDescricao() {
        return $this->descricao;
    }

}
