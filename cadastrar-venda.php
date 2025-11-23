<h1 class="text-center">Cadastrar Venda</h1>

<div class="container mt-4" style="max-width: 600px;">
    <form action='?page=salvar-venda' method='POST'>
        <input type="hidden" name='acao' value='cadastrar'>

        <div class='mb-3'>
            <label>Cliente:</label>
            <select name='cliente_id_cliente' class='form-control border-success' required>
                <option value="">Selecione um Cliente</option>
                <?php
                $sql = "SELECT * FROM cliente";
                $res = $conn->query($sql);
                while ($row = $res->fetch_object()) {
                    print "<option value='" . $row->id_cliente . "'>" . $row->nome_cliente . "</option>";
                }
                ?>
            </select>
        </div>

        <div class='mb-3'>
            <label>Funcionário:</label>
            <select name='funcionario_id_funcionario' class='form-control border-success' required>
                <option value="">Selecione um Funcionário</option>
                <?php
                $sql = "SELECT * FROM funcionario";
                $res = $conn->query($sql);
                while ($row = $res->fetch_object()) {
                    print "<option value='" . $row->id_funcionario . "'>" . $row->nome_funcionario . "</option>";
                }
                ?>
            </select>
        </div>

        <div class='mb-3'>
            <label>Modelo:</label>
            <select name='modelo_id_modelo' class='form-control border-success' required>
                <option value="">Selecione um Modelo</option>
                <?php
                $sql = "SELECT * FROM modelo";
                $res = $conn->query($sql);
                while ($row = $res->fetch_object()) {
                    print "<option value='" . $row->id_modelo . "'>" . $row->nome_modelo . "</option>";
                }
                ?>
            </select>
        </div>

        <div class='mb-3'>
            <label>Valor da Venda:</label>
            <input type='number' step="0.01" name='valor_venda' class='form-control border-success' required>
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