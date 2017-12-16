<!-- HEADER -->
<?php require_once 'includes/header.php' ?>
<div>
    <h2 class="title is-2">
        Adicionar Produto
    </h2>
    
    <hr>
    
    <form action="">
        <div class="field">
            <label for="nome" class="label">Nome</label>
            <div class="control">
                <input placeholder="Digite o Nome do Produto" type="text" name="nome" id="nome" class="input">
            </div>
        </div>
        
        <div class="field">
            <label for="descricao" class="label">Descrição</label>
            <div class="control">
                <textarea name="descricao" id="descricao" cols="30" rows="30" class="textarea"></textarea>
            </div>
        </div>

        <div class="field">
            <label for="preco" class="label">Preço</label>
            <div class="control">
                <input placeholder="R$: 0000.00,00" type="text" id="preco" name="preco" class="input">
            </div>
        </div>

        <button type="submit" class="button is-large is-danger">
            <span>Cancelar</span>
            <span class="icon">
                <i class="fa fa-arrow-right"></i>
            </span>
        </button>
        
        <button type="submit" class="button is-large is-success">
            <span>Cadastrar produto</span>
            <span class="icon">
                <i class="fa fa-arrow-right"></i>
            </span>
        </button>
        
    </form>
    
</div>
<!-- FOOTER -->
<?php require_once 'includes/footer.php' ?>