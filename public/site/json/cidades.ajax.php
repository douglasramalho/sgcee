<?php
	require_once "../../bootstrap.php";

	header( 'Cache-Control: no-cache' );
    header( 'Content-type: application/xml; charset="utf-8"', true );

    $estado = $_GET['estados'];

	$cidades = array();

	$cidades_estados = $entityManager->getRepository('\PUC\Entity\Cidade')
                         ->findBy(array('estado' => $estado));

	foreach ( $cidades_estados as $cidade ) {
		$cidades[] = array(
			'cidades'	=> $cidade->getId(),
			'nome'          => $cidade->getNome()
		);
	}

	echo (json_encode($cidades)) ;

