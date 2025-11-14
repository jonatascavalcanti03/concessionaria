<h1 class="text-center">Cadastrar Venda</h1>

<div class="container mt-4" style="max-width: 600px;">
    <form action='?page=salvar-venda' method='POST'>
        <input type="hidden" name='acao' value='cadastrar'>

        <div class='mb-3'>
            <label>ID do Cliente:</label>
            <input type='number' name='cliente_id' class='form-control border-success' required>
        </div>

        <div class='mb-3'>
            <label>ID do Funcionário:</label>
            <input type='number' name='funcionario_id' class='form-control border-success' required>
        </div>

        <div class='mb-3'>
            <label>ID do Modelo:</label>
            <input type='number' name='modelo_id' class='form-control border-success' required>
        </div>

        <div class='mb-3'>
            <label>Valor da Venda:</label>
            <input type='number' step='0.01' name='valor_venda' class='form-control border-success' required>
        </div>

        <div class='mb-3'>
            <label>Data da Venda:</label>
            <input type='date' name='data_venda' class='form-control border-success' required>
        </div>

        <div class="text-center">
            <button type='submit' class='btn btn-primary'>Enviar</button>
        </div>
    </form>
</div>