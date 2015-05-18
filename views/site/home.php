<section class="container">

    <div class="texto-introducao">

        <p>Seja bem vindo ao SGCEE, seu serviço on-line que irá te auxíliar no consumo de energia elética residencial, além dos benefícios abaixo:</p>
        <br>
        <br>
        <ul>

            <li>Redução do consumo de energia elétrica mensal</li>
            <li>Redução no valor da conta de luz</li>
            <li>Menor utilização da água na geração de energia elétrica através das hidrelétricas</li>
            <li>Conscientização sobre o desperdício de energia elétrica</li>

        <ul>

    </div><!-- /.texto-introducao -->

    <div class="img-introducao">

        <img src="<?php echo HOME ?>/imgs/assets/img-economia-home.jpg" alt="Economizar" />

    </div><!-- /.img-introducao -->

</section><!-- /.container -->

<section class="container">

    <div class="cadastro-cliente-inicial">

        <form name="cadastro-pessoal" method="post" action="controller/clienteController.php">

            <fieldset>

                <legend>Cadastre-se e monte seu perfil de consumo</legend>

                <div class="row">

                    <div class="col margem-direita10">

                        <label>Nome completo</label>
                        <input type="text" name="nome" value="<?php echo (isset($_SESSION['dados']) ? $_SESSION['dados']['nome'] : ""); ?>" required />

                    </div>

                    <div class="col">

                        <label>CPF</label>
                        <input type="text" name="cpf" id="cpf" value="<?php echo (isset($_SESSION['dados']) ? $_SESSION['dados']['cpf'] : ""); ?>"  required />

                    </div>

                </div><!-- /.row -->

                <div class="row">

                    <div class="col margem-direita10">

                        <label>E-mail</label>
                        <input type="email" name="email" value="<?php echo (isset($_SESSION['dados']) ? $_SESSION['dados']['email'] : ""); ?>" required />

                    </div>

                    <div class="col margem-direita10">

                        <label>Senha</label>
                        <input type="password" name="senha" required />

                    </div>

                    <div class="col">

                        <label>Data de Nascimento</label>
                        <input type="text" name="dataNascimento" value="<?php echo (isset($_SESSION['dados']) ? $_SESSION['dados']['dataNascimento'] : ""); ?>" id="dataNascimento" required />

                    </div>

                </div><!-- /.row -->

                <div class="row">

                    <div class="col margem-direita10">

                        <label>Logradouro</label>
                        <input type="text" name="logradouro" value="<?php echo (isset($_SESSION['dados']) ? $_SESSION['dados']['logradouro'] : ""); ?>" required />

                    </div>

                    <div class="col margem-direita10">

                        <label>Número</label>
                        <input type="number" name="numero" maxlength="2" value="<?php echo (isset($_SESSION['dados']) ? $_SESSION['dados']['numero'] : ""); ?>" required />

                    </div>

                    <div class="col">

                        <label>Complemento</label>
                        <input type="text" name="complemento" value="<?php echo (isset($_SESSION['dados']) ? $_SESSION['dados']['complemento'] : ""); ?>" maxlength="100"  />

                    </div>

                </div><!-- /.row -->

                <div class="row">

                    <div class="col margem-direita10">

                        <label>Bairro</label>
                        <input type="text" name="bairro" value="<?php echo (isset($_SESSION['dados']) ? $_SESSION['dados']['bairro'] : ""); ?>" required />

                    </div>

                    <div class="col margem-direita10">

                        <label>UF</label>
                        <select name="uf" id="uf">

                            <option>Selecione</option>
                            <?php

                            $estadoRepository = $entityManager->getRepository('Puc\Sgcee\Estado');
                            $estados = $estadoRepository->findAll();


                            foreach ($estados as $estado) {
                            ?>

                            <option value="<?php echo $estado->getId(); ?>"><?php echo $estado->getUf(); ?></option>

                            <?php
                            }
                            ?>

                        </select>

                    </div>

                    <div class="col">

                        <label>Cidade</label>
                        <span class="carregando">Aguarde, carregando...</span>
                        <select name="cidade" id="cidade">

                            <option>Selecione um UF</option>

                        </select>

                    </div>

                </div><!-- /.row -->

                <div class="row">

                    <div class="col">

                        <input type="submit" name="cadastrar" value="CADASTRAR" />

                    </div>

                </div>

            </fieldset>

        </form>

    </div><!-- /.cadastro-cliente-inicial -->

    <div class="produtos-inicial">
        
        <fieldset>
            <legend>Produtos disponíveis</legend>
            
            <div class="box-imagem-dos-produtos">
                
                <div class="row  margin-bottom-img-produto">
                
                    <div class="img-produto">

                        <img src="<?php echo HOME; ?>/imgs/produtos/ferro.jpg" alt="" />

                    </div>
                    
                    <div class="img-produto margin-left-img-produto">

                        <img src="<?php echo HOME; ?>/imgs/produtos/liquidificador.jpg" alt="" />

                    </div>

                    <div class="img-produto margin-left-img-produto">

                        <img src="<?php echo HOME; ?>/imgs/produtos/fogao.jpg" alt="" />

                    </div>
                    
                </div><!-- row -->
                
                
                <div class="row">
                
                    <div class="img-produto">

                        <img src="<?php echo HOME; ?>/imgs/produtos/liquidificador.jpg" alt="" />

                    </div>

                    <div class="img-produto margin-left-img-produto">

                        <img src="<?php echo HOME; ?>/imgs/produtos/microondas.jpg" alt="" />

                    </div>
                    
                    <div class="img-produto margin-left-img-produto">

                        <img src="<?php echo HOME; ?>/imgs/produtos/ferro.jpg" alt="" />

                    </div>
                    
                </div><!-- /.row -->
                
            </div><!-- /.box-imgagem-produtos -->
            
            <button>Veja a lista completa de produtos</button>
            
        </fieldset>

    </div>

</section>
