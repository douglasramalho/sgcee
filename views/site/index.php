<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<!DOCTYPE html>
<html>
    <head>
        {% include "header.html.twig" %}
    </head>

    <body>

    <!--[if lt IE 7]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- ########################################################## -->
        <!-- #      DIV DA JANELA MODAL DE CADASTRO DE PRODUTO        # -->
        <!-- ########################################################## -->

        <div id="modal-box-produto">

            <!-- #personalize sua janela modal aqui -->

            <div id="dialog-produto" class="window">

                <!-- Botão para fechar a janela tem class="close" -->
                <a href="#" class="close">Fechar [X]</a><br />

                <h3>Ferro de Passar Roupa</h3>

                <div class="modal-produto">

                    <div class="modal-img-produto">

                        <img src="<?php echo HOME; ?>/imgs/produtos/ferro.jpg" alt="" />
                        
                    </div>
                    
                    <div class="modal-info-produto">
                        
                        <p>Informações do produto:</p><br><br>
                        
                        <ul>
                            
                            <li>110 volts</li>
                            <li>500W de potência em uso</li>
                            <li>450W de potência em stadby</li>
                            
                        </ul>
                        
                    </div>
                    
                </div><!-- /.modal-produto -->
                
                <div class="modal-form-cadastro-produto">
                    
                    <form name="modal-cadastro-produto" method="post">
                        
                        <div class="row">
                            
                            <div class="col">
                                
                                <label>Qtd.</label>
                                <input type="text" name="quantidade" required class="tam50" />
                            </div>
                                
                                
                            
                            <div class="col">
                                
                                <label>Estimativa de tempo de uso diário</label>
                                <input type="text" name="estimativaUso" required class="tam80" />
                                
                                <select name="unidadeMedida">
                                    
                                    <option>Horas</option>
                                    <option>Minutos</option>
                                    
                                </select>
                                
                            </div>
                            
                            <div class="col">
                                
                                <label>Qtd. de dias/mês</label>
                                <input type="text" name="quantidade" required class="tam80" />
                                
                            </div>
                            
                        </div><!-- /.row -->
                        
                        <div class="row">
                            
                            <div class="col margem-direita10"><input type="submit" value="Salvar" /></div>
                            <div class="col"><button class="cancel">Cancelar</button></div>
                            
                        </div><!-- /.row -->
                        
                    </form>
                    
                </div>
            
            </div><!-- /.dialog -->

            <!-- Não remova o div#mask, pois ele é necessário para preencher toda a janela -->
            <div id="mask"></div>
            
        </div><!-- /.modal-box-produto -->
        
        <!-- ########################################################## -->
        <!-- #      DIV DA JANELA MODAL META DE CONSUMO               # -->
        <!-- ########################################################## -->
        
        <div id="modal-box-meta">

            <!-- #personalize sua janela modal aqui -->

            <div id="dialog-meta" class="window">
                
                <!-- Botão para fechar a janela tem class="close" -->
                <a href="#" class="close">Fechar [X]</a><br />                
                                
                <div class="modal-form-meta-consumo">
                    
                    <form name="modal-meta-consumo" method="post">
                        
                        <div class="row">
                            
                            <div class="col">
                                
                                <label>Qual é sua meta de consumo desejada?</label>
                                <input type="text" name="metaConsumo" required class="tam50" />
                                
                                <select name="unidadeMedida">
                                    
                                    <option>KW/h</option>
                                    <option>%</option>
                                    
                                </select>
                                
                            </div>
                            
                        </div><!-- /.row -->
                        
                        <div class="row">                            
                            
                            <div class="col margem-direita10"><input type="submit" value="Criar / Calcular" /></div>
                            <div class="col"><button class="cancel">Cancelar</button></div>
                            
                        </div>
                        
                    </form>
                    
                </div><!-- /.modal-form-meta-consumo -->
            
            </div><!-- /.dialog -->

            <!-- Não remova o div#mask, pois ele é necessário para preencher toda a janela -->
            <div id="mask"></div>
            
        </div><!-- /.modal-box-meta -->
        
        <!-- ########################################################## -->
        <!-- #      DIV DA JANELA MODAL CADASTRO DE NOVO PERFIL       # -->
        <!-- ########################################################## -->
        
        <div id="modal-cadastro-perfil">

            <!-- #personalize sua janela modal aqui -->

            <div id="dialog-cad-perfil" class="window">
                
                <!-- Botão para fechar a janela tem class="close" -->
                <a href="#" class="close">Fechar [X]</a><br />   
                
                 <h3>Novo Perfil de Consumo</h3>
                                
                <div class="modal-form-cad-perfil">
                    
                    <form name="modal-cad-perfil" method="post">
                        
                        <div class="row">
                            
                            <div class="col">
                                
                                <label>Digite o nome do pefil de consumo</label>
                                <input type="text" name="perfilConsumo" required class="tam320" />
                                
                                 <label>Informe uma descrição para o ferfil</label>
                                <textarea></textarea>
                                
                            </div>
                            
                        </div><!-- /.row -->
                        
                        <div class="row">                            
                            
                            <div class="col margem-direita10"><input type="submit" value="Salvar e prosseguir" /></div>
                            <div class="col"><button class="cancel">Cancelar</button></div>
                            
                        </div>
                        
                    </form>
                    
                </div><!-- /.modal-form-meta-consumo -->
            
            </div><!-- /.dialog -->

            <!-- Não remova o div#mask, pois ele é necessário para preencher toda a janela -->
            <div id="mask"></div>
            
        </div><!-- /.modal-box-meta -->
        
        

        <!-- ########################################################## -->
        <!-- #                        HEADER                          # -->
        <!-- ########################################################## -->

        <header class="header">

            <div class="container">

                <div class="logo">

                    <h1>SGCEE</h1>
                    <p>Sistema de Gestão de Consumo de Energia Elétrica</p>


                </div><!-- /.logo -->

                <div class="autenticacao">

                    <h2>Acessar Área Pessoal</h2>
                    
                    <form name="login-cliente" method="post" action="controller/clienteController.php">
                        <table>
                            <tr>
                                <td>

                                    <label>E-mail</label>
                                    <input type="email" name="email" required />

                                </td>

                                <td>

                                    <label>Senha</label>
                                    <input type="password" name="senha" required />

                                </td>

                                <td>
                                    <br>
                                    <input type="submit" name="logar" value="Entrar" />

                                </td>

                        </table>


                    </form>

                </div><!-- /.autenticacao -->

            </div><!-- /.container -->

        </header>



        <!-- ########################################################## -->
        <!-- #                      CONTEÚDO                          # -->
        <!-- ########################################################## -->
        <section class="content-all">

            {% block content %}{% endblock %}

        </section><!-- /.content-all -->

        <footer class="footer">
            
            <section class="content-footer">

                <div class="info">

                    <p>SGCEE - Sistema de Gestão de Consumo de Energia Elétrica | Todos os direitos reservados - 2015</p>

                </div>

                <nav class="menu-rodape">
                    
                    <ul>
                        
                        <li><a href="#">Cadastro</a></li> |
                        <li><a href="#">Produtos</a></li> |
                        <li><a href="#">Fale Conosco</a></li>
                        
                    </ul>
                    

                </nav>
                
            </section>
        </footer>
        
        <?php
        if (isset($_SESSION['msg'])):
            echo "<script type='text/javascript'>alert('".$_SESSION['msg']."')</script>";
            unset($_SESSION['msg']);            
        endif;
        ?>
        
        <script type="text/javascript">
            
            
            
            jQuery(function ($) {
                $("#dataNascimento").mask("99/99/9999", {placeholder: "__/__/____"});
                $("#cep").mask("99.999-999");
                $("#cpf").mask("999.999.999-99");
            });

            $(function () {
                $('#uf').change(function () {
                    if ($(this).val()) {
                        $('#cidade').hide();
                        $('.carregando').show();
                        $.getJSON('json/cidades.ajax.php?search=', {estados: $(this).val(), ajax: 'true'}, function (j) {

                            var options = '<option value="">Escolha uma cidade</option>';

                            for (var i = 0; i < j.length; i++) {
                                options += '<option value="' + j[i].cidades + '">' + j[i].nome + '</option>';
                            }
                            $('#cidade').html(options).show();
                            $('.carregando').hide();
                        });
                    } else {
                        $('#cidade').html('<option value="">-- Escolha uma cidade --</option>');
                    }
                });
            });
            
            $(document).ready(function() {

                //seleciona os elementos a com atributo name="modal"
                $('a[name=modal]').click(function(e) {
                    
                    //cancela o comportamento padrão do link
                    e.preventDefault();

                    //armazena o atributo href do link
                    var id = $(this).attr('href');

                    //armazena a largura e a altura da tela
                    var maskHeight = $(document).height();
                    var maskWidth = $(window).width();

                    //Define largura e altura do div#mask iguais ás dimensões da tela
                    $('#mask').css({'width':maskWidth,'height':maskHeight});

                    //efeito de transição
                    $('#mask').fadeIn(1000);
                    $('#mask').fadeTo("slow",0.8);

                    //armazena a largura e a altura da janela
                    var winH = $(window).height();
                    var winW = $(window).width();
                    //centraliza na tela a janela popup
                    $(id).css('top',  winH/2-$(id).height()/2);
                    $(id).css('left', winW/2-$(id).width()/2);
                    //efeito de transição
                    $(id).fadeIn(2000);
                
                });

                //se o botãoo fechar for clicado
                $('.window .close').click(function (e) {
                    //cancela o comportamento padrão do link
                    e.preventDefault();
                    $('#mask, .window').hide();
                });

                //se div#mask for clicado
                $('#mask').click(function () {
                    $(this).hide();
                    $('.window').hide();
                });
            });

        </script>


    </body>
</html>
