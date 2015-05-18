<?php

$site = $app['controllers_factory'];

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


$site->get("/", function() use ($app, $entityManager){

	if(null != $app['session']->get('clienteLogado')):
		return $app->redirect('/perfil-de-consumo');
	endif;

	if(null == $app['session']->get('dados')):

		$app['session']->set('dados', array(
			'nome' => '',
			'cpf' => '',
			'email' => '',
			'logradouro' => '',
			'numero' => '',
			'complemento' => '',
			'bairro' => '',
			)
		);

	endif;

    $estadoRepository = $entityManager->getRepository('PUC\Entity\Estado');
	$estados = $estadoRepository->findAll();


	return $app['twig']->render("site/index.html.twig", array(
		'form' => $app['session']->get('dados'),
		'estados' => $estados)
	);
});

$app->post('/cadastrarCliente', function (Request $request) use($app, $entityManager) {

	if(!\PUC\Utils\Utils::validaCPF($request->get('cpf'))):
		return "CPF Invalido";
	endif;

    $cliente = new \PUC\Entity\Cliente();
    $cliente->setNome($request->get('nome'));
    $cliente->setCpf($request->get('cpf'));
    $cliente->setEmail($request->get('email'));
    $cliente->setSenha($request->get('senha'));
    $cliente->setDataNascimento($request->get('dataNascimento'));
    $cliente->setLogradouro($request->get('logradouro'));
    $cliente->setNumero($request->get('numero'));
    $cliente->setComplemento($request->get('complemento'));
    $cliente->setBairro($request->get('bairro'));
    $cliente->setIdCidade($request->get('cidade'));

    $entityManager->persist($cliente);
	$entityManager->flush();

    return $app->redirect("/?mgs=cadastro realizado com sucesso!");
});

$app->get("/perfil-de-consumo", function() use ($app, $entityManager){
	if(null === $app['session']->get('clienteLogado')):
		return $app->redirect("/");
	else:
		$perfis = $entityManager->getRepository('\PUC\Entity\PerfilConsumo')
                         ->findBy(array('cliente_IdCliente' => $app['session']->get('clienteLogado')['id']));

        $dql = "SELECT count(b.idProduto) AS qtdProdutos, count(b.estimativaUso) as totalUsoMes FROM \PUC\Entity\ProdutosPerfilConsumo b, ".
       "\PUC\Entity\PerfilConsumo a WHERE a.id = b.idPerfil";
		$totais = $entityManager->createQuery($dql)->getScalarResult();

		return $app['twig']->render("site/perfil-de-consumo.html.twig", array(
			'clienteLogado' => $app['session']->get('clienteLogado'),
			'perfis' => $perfis,
			'totais' => $totais[0]
			)
		);
	endif;

});

$app->get("/perfil/{id}", function($id) use ($app, $entityManager){
	if(null === $app['session']->get('clienteLogado')):
		return $app->redirect("/");
	else:

		$produtos = $entityManager->getRepository('\PUC\Entity\Produto')->findAll();

		return $app['twig']->render("site/perfil.html.twig", array(
			'clienteLogado' => $app['session']->get('clienteLogado'),
			'id' => $id,
			'produtos' => $produtos
		) );
	endif;
});

$app->post('/autenticarCliente', function (Request $request) use($app, $entityManager) {

	$email = $request->get('email');
	$senha = $request->get('senha');

	$cliente = $entityManager->getRepository('\PUC\Entity\Cliente')
                         ->findOneBy(array('email' => $email, 'senha' => md5($senha)));

    if($cliente != null):
    	$app['session']->set('clienteLogado', array('id' => $cliente->getId(), 'nome' => $cliente->getNome() ) );
    	return $app->redirect('/perfil-de-consumo');
    endif;
	return new Response("Erro");
});

$app->post('/cadastrarPerfil', function (Request $request) use($app, $entityManager) {

	
	$descricao = $request->get('descricao');

	$perfil = new \PUC\Entity\PerfilConsumo();
	$perfil->setNome($request->get('nome'));
	$perfil->setDescricao($request->get('descricao'));
	$perfil->setClienteIdCliente($app['session']->get('clienteLogado')['id']);

	$entityManager->persist($perfil);
	$entityManager->flush();

   return $app->redirect('/perfil-de-consumo');
});

$app->get("/sair", function() use ($app){
	$app['session']->clear('clienteLogado');
	return $app->redirect("/");
});

return $site;