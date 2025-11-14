<h1 class="text-center">Cadastrar Modelo</h1>

<div class="container mt-4" style="max-width: 600px;">
    <form action='?page=salvar-modelo' method='POST'>
        <input type="hidden" name='acao' value='cadastrar'>

        <div class='mb-3'>
            <label>Nome do Carro:</label>
            <input type='text' name='nome_carro' class='form-control border-success' required>
        </div>

        <div class='mb-3'>
            <label>Modelo:</label>
            <input type='text' name='modelo_carro' class='form-control border-success' required>
        </div>

        <div class='mb-3'>
            <label>Cor:</label>
            <input type='text' name='cor_modelo' class='form-control border-success'>
        </div>

        <div class='mb-3'>
            <label>Ano:</label>
            <input type='number' name='ano_modelo' class='form-control border-success'>
        </div>

        <div class='mb-3'>
            <label>Tipo:</label>
            <input type='text' name='tipo_modelo' class='form-control border-success'>
        </div>

        <div class='mb-3'>
            <label>ID da Marca:</label>
            <input type='number' name='marca_id' class='form-control border-success'>
        </div>

        <div class="text-center">
            <button type='submit' class='btn btn-primary'>Enviar</button>
        </div>
    </form>
</div>