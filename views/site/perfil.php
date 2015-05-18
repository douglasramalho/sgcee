<section class="container">
    
    <div class="descricao-perfil">
    
        <h3>Primeiro Andar</h3>
        <p>Descrição: controle de consumo de energia do primeiro andar da casa da cidade.</p>
        
    </div>    
    
    <nav class="menu-perfil">
        
        <ul>
            <!-- #dialog é o id do DIV definido como mostrado a seguir  -->            
            <a href="#"><li>Meus produtos</li></a>
            <a href="#"><li>Estimar consumo</li></a>
            <a href="#dialog-meta" name="modal"><li>Meta de consumo</li></a>
            <a href="#"><li>Sair</li></a>
            
        </ul>
        
    </nav>
            
    <div class="produtos-cadastrados">
        
        <fieldset>
            <legend>Produtos existentes</legend>

            <div class="box-produto margin-right-produto">

                <div class="img-produto">

                    <img src="<?php echo HOME; ?>/imgs/produtos/ferro.jpg" alt="" />

                </div><!-- /.img-produto -->

                <div class="info-produto">

                    <h3>Ferro de passar roupa</h3>
                    <p>Categoria</p>
                    <p>50W</p>

                </div><!-- /.info-produto -->
                
                <a href="#dialog-produto" name="modal"><button class="add">Incluir produto</button></a>
                

            </div><!-- /.box-produto -->
            
            <div class="box-produto margin-right-produto">

                <div class="img-produto">

                    <img src="<?php echo HOME; ?>/imgs/produtos/fogao.jpg" alt="" />

                </div><!-- /.img-produto -->

                <div class="info-produto">

                    <h3>Fogão 6 bocas</h3>
                    <p>Categoria</p>
                    <p>150W</p>

                </div><!-- /.info-produto -->

                <a href="#"><button class="cancel">Remover produto</button></a>

            </div><!-- /.box-produto -->
            
            <div class="box-produto margin-right-produto">

                <div class="img-produto">

                    <img src="<?php echo HOME; ?>/imgs/produtos/liquidificador.jpg" alt="" />

                </div><!-- /.img-produto -->

                <div class="info-produto">

                    <h3>Liquidificador</h3>
                    <p>Categoria</p>
                    <p>70W</p>

                </div><!-- /.info-produto -->

                <a href="#dialog-produto" name="modal"><button class="add">Incluir produto</button></a>

            </div><!-- /.box-produto -->
            
            <div class="box-produto">

                <div class="img-produto">

                    <img src="<?php echo HOME; ?>/imgs/produtos/tv.png" alt="" />

                </div><!-- /.img-produto -->

                <div class="info-produto">

                    <h3>TV de Led 40"</h3>
                    <p>Categoria</p>
                    <p>200W</p>

                </div><!-- /.info-produto -->

                <a href="#"><button class="cancel">Remover produto</button></a>

            </div><!-- /.box-produto -->

        </fieldset>
    </div>
    

</section>