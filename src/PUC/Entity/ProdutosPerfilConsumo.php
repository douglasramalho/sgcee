<?php
namespace PUC\Entity;
/**
 * @Entity
 * @Table(name="produtosdoperfildeconsumo")
 */
class ProdutosPerfilConsumo {
    
    

    /**
     * @Id
     * @Column(type="integer")
          *
     * @var int
     */
    protected $idPerfil;

     /**
     * @Id
     * @Column(type="integer")
          *
     * @var int
     */
    protected $idProduto;
    
    /**
     * @Column(type="float")
     *
     * @var float
     */
    protected  $estimativaUso;

    /**
     * @Column(type="string")
     *
     * @var string
     */
    protected $unidadeEstimativa;

    /**
     * @Column(type="integer")
     *
     * @var int
     */
    protected $qtdProdutos;

    /**
     * @Column(type="integer")
     *
     * @var int
     */
    protected $qtdDiasUsoMes;

   
}
