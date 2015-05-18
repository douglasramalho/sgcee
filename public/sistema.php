<?php

$sistema = $app['controllers_factory'];

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$sistema->get("/", function() use($app) {

	return $app['twig']->render("sistema/index.html.twig");

});

$sistema->post("/autenticarAdministrador", function(Request $request) use($app, $entityManager) {

	$usuario = $request->get('usuario');
	$senha = $request->get('senha');

	$administrador = $entityManager->getRepository('\PUC\Entity\Administrador')
                         ->findOneBy(array('usuario' => $usuario, 'senha' => $senha));

    if($administrador != null):
    	$app['session']->set('administradorLogado', array('id' => $administrador->getId(), 'nome' => $administrador->getNome() ) );
    	return $app->redirect('/sistema/principal');
    endif;
	return new Response("Erro");

});

$sistema->get("/principal", function() use($app) {

	if(null === $app['session']->get('administradorLogado')):
		return $app->redirect("/sistema/");
	else:
		return $app['twig']->render("sistema/principal.html.twig", array(

		'administradorLogado' => $app['session']->get('administradorLogado')

	));
	endif;

});

$sistema->get("/categorias", function() use($app, $entityManager) {

	if(null === $app['session']->get('administradorLogado')):
		return $app->redirect("/sistema/");
	else:

		$categorias = $entityManager->getRepository('\PUC\Entity\Categoria')->findAll();

		return $app['twig']->render("sistema/categorias.html.twig", array(

		'administradorLogado' => $app['session']->get('administradorLogado'),
		'categorias' => $categorias

	));
	endif;

});

$sistema->get("/produtos", function() use($app, $entityManager) {

	if(null === $app['session']->get('administradorLogado')):
		return $app->redirect("/sistema/");
	else:

		$produtos = $entityManager->getRepository('\PUC\Entity\Produto')->findAll();
		//print_r($produtos);
		for($i = 0; $i < count($produtos); $i++):
			$categoria = $entityManager->getRepository('\PUC\Entity\Categoria')->findOneBy(array('id' => $produtos[$i]->getIdCategoria()));
			$produtos[$i]->setCategoria($categoria->getNome());
		endfor;

		return $app['twig']->render("sistema/produtos.html.twig", array(

		'administradorLogado' => $app['session']->get('administradorLogado'),
		'produtos' => $produtos

	));
	endif;

});

$sistema->get("/cadastro-categoria", function() use($app) {

	if(null === $app['session']->get('administradorLogado')):
		return $app->redirect("/sistema/");
	else:
		return $app['twig']->render("sistema/cadastro-categoria.html.twig", array(

		'administradorLogado' => $app['session']->get('administradorLogado')

	));
	endif;

});

$sistema->get("/cadastro-produto", function() use($app, $entityManager) {

	if(null === $app['session']->get('administradorLogado')):
		return $app->redirect("/sistema/");
	else:

		$categorias = $entityManager->getRepository('\PUC\Entity\Categoria')->findAll();

		return $app['twig']->render("sistema/cadastro-produto.html.twig", array(

		'administradorLogado' => $app['session']->get('administradorLogado'),
		'categorias' => $categorias

	));
	endif;

});

$sistema->post("/cadastrarCategoria", function(Request $request) use($app, $entityManager) {

	$nome = $request->get('nome');
	$descricao = $request->get('descricao');

	$categoria = new \PUC\Entity\Categoria($nome, $descricao);

	$entityManager->persist($categoria);
	$entityManager->flush();

	return $app->redirect('/sistema/categorias');

});

$sistema->post("/cadastrarProduto", function(Request $request) use($app, $entityManager) {

	$descricao = $request->get('descricao');
	$voltagem = $request->get('voltagem');
	$potenciaUso = $request->get('potenciaUso');
	$potenciaStandBy = $request->get('potenciaStandBy');
	$caminho = "abc";
	$categoria = $request->get('categoria');

	$produto = new \PUC\Entity\Produto($descricao, $voltagem, $potenciaUso, $potenciaStandBy, $caminho, $categoria);

	$entityManager->persist($produto);
	$entityManager->flush();

	return $app->redirect('/sistema/produtos');

});

$sistema->get("/produto/{id}", function(Request $request, $id) use($app, $entityManager) {

	$produto = $entityManager->getRepository('\PUC\Entity\Produto')->findOneBy(array( 'id' => $id ));
	$categorias = $entityManager->getRepository('\PUC\Entity\Categoria')->findAll();

	if($produto != null && $categorias != null):
    	return $app['twig']->render("sistema/edita-produto.html.twig", array(

		'administradorLogado' => $app['session']->get('administradorLogado'),
		'categorias' => $categorias,
		'produto' => $produto

		));
    endif;
	return new Response("Erro");

});

$sistema->post("/editarProduto", function(Request $request) use($app, $entityManager) {

	$descricao = $request->get('descricao');
	$voltagem = $request->get('voltagem');
	$potenciaUso = $request->get('potenciaUso');
	$potenciaStandBy = $request->get('potenciaStandBy');
	$caminho = "abc";
	$categoria = $request->get('categoria');

	$produto = $entityManager->find('\PUC\Entity\Produto', $request->get('id'));

	if ($produto != null):
		$produto->setDescricao($descricao);
		$produto->setVoltagem($voltagem);
		$produto->setPotenciaEmUso($potenciaUso);
		$produto->setPotenciaEmStandBy($potenciaStandBy);
		$produto->setCaminhoFoto($caminho);
		$produto->setCategoria($categoria);

		$entityManager->flush();

		return $app->redirect('/sistema/produtos');

	endif;

	return new Response("Erro");

});

$app->get("/logoff", function() use ($app){
	$app['session']->clear('administradorLogado');
	return $app->redirect("/sistema/");
});

return $sistema;