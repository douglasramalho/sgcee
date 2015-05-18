<?php
namespace PUC\Entity;
/**
 * @Entity
 * @Table(name="perfildeconsumo")
 */
class PerfilConsumo {
    
    

    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     *
     * @var int
     */
    protected $id;

    /**
          * @Column(type="integer")
          *
     * @var int
     */
    protected $cliente_IdCliente;

    /**
     * @Column(type="string")
     *
     * @var string
     */
    protected  $nome;

    /**
     * @Column(type="string")
     *
     * @var string
     */
    protected $descricao;

    /**
     * @Column(type="float")
     *
     * @var float
     */
    protected $metaEconomia;

    /**
     * @Column(type="string")
     *
     * @var string
     */
    protected $unidadeMeta;
    

    public function __construct(){
        $this->metaEconomia = 0.00;
        $this->unidadeMeta = '1';
    }

    public function getNome(){
        return $this->nome;
    }
    
    public function getId(){
        return $this->id;
    }
    
    public function getDescricao(){
        return $this->descricao;
    }
    
    public function setNome($nome){
        $this->nome = $nome;
    }

    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }

    public function setClienteIdCliente($idCliente){
        $this->cliente_IdCliente = $idCliente;
    }
   
}
