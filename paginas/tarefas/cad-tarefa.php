<header>
    <h3>
        <i class="bi bi-list-task"></i> Cadastro de Tarefa
    </h3>
</header>
<div>
    <form class="needs-validation" action="index.php?menuop=inserir-tarefa" method="post" novalidate>
        <div class="mb-3">
            <label for="tituloTarefa" class="form-label">Título</label>
            <input class="form-control" type="text" name="tituloTarefa" id="tituloTarefa" required>
        </div>
        <div class="mb-3">
            <label for="descricaoTarefa" class="form-label">Descrição</label>
            <textarea name="descricaoTarefa" id="descricaoTarefa" cols="30" rows="5" class="form-control"
                      required></textarea>
        </div>
        <div class="row">
            <div class="mb-3 col-6">
                <label for="dataConclusaoTarefa" class="form-label">Data de Conclusão</label>
                <input class="form-control" type="date" name="dataConclusaoTarefa" id="dataConclusaoTarefa" required>
            </div>
            <div class="mb-3 col-6">
                <label for="horaConclusaoTarefa" class="form-label">Hora de Conclusão</label>
                <input class="form-control" type="time" name="horaConclusaoTarefa" id="horaConclusaoTarefa" required>
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col-6">
                <label for="dataLembreteTarefa" class="form-label">Data de Lembrete</label>
                <input class="form-control" type="date" name="dataLembreteTarefa" id="dataLembreteTarefa" required>
            </div>
            <div class="mb-3 col-6">
                <label for="horaLembreteTarefa" class="form-label">Hora de Lembrete</label>
                <input class="form-control" type="time" name="horaLembreteTarefa" id="horaLembreteTarefa" required>
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col-6">
                <label for="recorrenciaTarefa" class="form-label">Recorrência</label>
                <select class="form-select" name="recorrenciaTarefa" id="recorrenciaTarefa" required>
                    <option value="0">Não Recorrente</option>
                    <option value="1">Diariamente</option>
                    <option value="2">Semanalmente</option>
                    <option value="3">Mensalmente</option>
                    <option value="4">Anualmente</option>
                </select>
            </div>
        </div>
        <div class="mb-3">
            <input class="btn btn-outline-success" type="submit" value="Adicionar" name="btnAdicionar">
        </div>
    </form>
</div>
