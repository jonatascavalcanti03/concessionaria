<h1 class="text-center">Cadastrar Marca</h1>

<div class="container mt-4" style="max-width: 600px;">
    <form action='?page=salvar-marca' method='POST'>
        <input type="hidden" name='acao' value='cadastrar'>

        <div class='mb-3'>
            <label>Nome da Marca:</label>
            <input type='text' name='nome_marca' class='form-control border-success' required>
        </div>

        <div class='mb-3'>
            <label>Cor do Carro:</label>
            <input type='text' name='cor_carro' class='form-control border-success'>
        </div>

        <div class='mb-3'>
            <label>Ano:</label>
            <input type='number' name='ano_carro' class='form-control border-success'>
        </div>

        <div class="text-center">
            <button type='submit' class='btn btn-primary'>Enviar</button>
        </div>
    </form>
</div>