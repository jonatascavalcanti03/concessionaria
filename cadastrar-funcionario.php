<h1 class="text-center">Cadastrar Funcionário</h1>

<div class="container mt-4" style="max-width: 600px;">
    <form action='?page=salvar-funcionario' method='POST'>
        <input type="hidden" name='acao' value='cadastrar'>

        <div class='mb-3'>
            <label>Nome:</label>
            <input type='text' name='nome_funcionario' class='form-control border-success' placeholder='Digite o nome' required>
        </div>

        <div class='mb-3'>
            <label>Telefone:</label>
            <input type='text' name='telefone_funcionario' class='form-control border-success' placeholder='Digite o telefone'>
        </div>

        <div class='mb-3'>
            <label>E-mail:</label>
            <input type='email' name='email_funcionario' class='form-control border-success' placeholder='Digite o e-mail'>
        </div>

        <div class="text-center">
            <button type='submit' class='btn btn-primary'>Enviar</button>
        </div>
    </form>
</div>