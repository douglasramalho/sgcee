<?php

namespace PUC\Entity;
/**
 * @Entity
 * @Table(name="produto")
 */
class Produto {
    
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
    private $descricao;
    
    /**
     * @Column(type="float")
     *
     * @var float
     */
    private $voltagem;
    
    /**
     * @Column(type="float")
     *
     * @var float
     */
    private $potenciaEmUso;
    
    /**
     * @Column(type="float")
     *
     * @var float
     */
    private $potenciaEmStandBy;
    
    /**
     * @Column(type="string")
     *
     * @var string
     */
    private $caminhoFoto;
    
    /**
     * @Column(type="integer")
     *
     * @var int
     */
    private $idCategoria;


    public function __construct($descricao, $voltagem, $potenciaEmUso, $potenciaEmStandBy, $caminhoFoto = "abc", $categoria){
        $this->descricao = $descricao;
        $this->voltagem = $voltagem;
        $this->potenciaEmUso = $potenciaEmUso;
        $this->potenciaEmStandBy = $potenciaEmStandBy;
        $this->caminhoFoto = $caminhoFoto;
        $this->idCategoria = $categoria;
    }

    public function getId(){
        return $this->id;
    }

    public function getDescricao(){
        return $this->descricao;
    }

    public function getCategoria(){
        return $this->idCategoria;
    }

    public function getVoltagem(){
        return $this->voltagem;
    }

    public function getPotenciaEmUso(){
        return $this->potenciaEmUso;
    }

    public function getPotenciaEmStandBy(){
        return $this->potenciaEmStandBy;
    }

    public function getIdCategoria(){
        return $this->idCategoria;
    }

    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }

    public function setCategoria($categoria){
        $this->idCategoria = $categoria;
    }

    public function setVoltagem($voltagem){
        $this->voltagem = $voltagem;
    }

    public function setPotenciaEmUso($potenciaEmUso){
        $this->potenciaEmUso = $potenciaEmUso;
    }

    public function setPotenciaEmStandBy($potenciaEmStandBy){
        $this->potenciaEmStandBy = $potenciaEmStandBy;
    }

    public function setCaminhoFoto($caminho){
        $this->caminhoFoto = $caminho;
    }

}
