<?php

require_once '../users/init.php';
require_once $abs_us_root . $us_url_root . '/users/includes/template/prep.php';
if (!securePage($_SERVER['PHP_SELF'])) {
    die();
}
?>

<?php

?>
<div class="row">
    <div class="col">
        <div class="dropdown d-flex justify-content-start mt-2">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Escolha o Evento
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Alguma ação</a>
                <a class="dropdown-item" href="#">Outra ação</a>
                <a class="dropdown-item" href="#">Alguma coisa aqui</a>
            </div>
        </div>
    </div>
    <div class="col-10 d-inline-block h-100 bg-cinza m-4">
        <div class="container-fluid">
            <h1 class="display-4 d-flex justify-content-center">Evento</h1>
            <div class="row">
                <div class="col-6 mt-2 mb-3">
                    <select class="custom-select col-2">
                        <option selected>Data Inicial</option>
                        <option value="1">02/01/2021</option>
                        <option value="2">03/01/2021</option>
                        <option value="3">04/01/2021</option>
                    </select>
                    <select class="custom-select col-2">
                        <option selected>Data Final</option>
                        <option value="1">04/01/2021</option>
                        <option value="2">05/01/2021</option>
                        <option value="3">06/01/2021</option>
                    </select>
                    <button class="btn btn-secondary">Exibir</button>
                    <button class="btn btn-secondary">Exportar Relatório</button>
                </div>
            </div>
            <div class="row mt-5">

                <div class="col-4 d-flex justify-content-center">

                    <div class="d-flex justify-content-center align-items-center" style="height: 190px; width: 190px; border-radius: 6em; background: black; opacity: 0.75; box-shadow: 0 0 0 1px #1b3f24">
                        <h2 class="text-white">400</h2>
                    </div>

                </div>
                <div class="col-4 d-flex justify-content-center">

                    <div class="d-flex justify-content-center align-items-center" style="height: 190px; width: 190px; border-radius: 6em; background: black; opacity: 0.75; box-shadow: 0 0 0 1px #1b3f24">
                        <h2 class="text-white">200</h2>
                    </div>

                </div>
                <div class="col-4 d-flex justify-content-center">

                    <div class="d-flex justify-content-center align-items-center" style="height: 190px; width: 190px; border-radius: 6em; background: black; opacity: 0.75; box-shadow: 0 0 0 1px #1b3f24">
                        <h2 class="text-white">256</h2>
                    </div>

                </div>
            </div>
            <div class="row mt-5">

                <div class="col-4 d-flex justify-content-center">

                    <h2 class="text-black">Envios</h2>


                </div>
                <div class="col-4 d-flex justify-content-center">

                    <h2 class="text-black">Contatos</h2>

                </div>
                <div class="col-4 d-flex justify-content-center">

                    <h2 class="text-black">Lidos</h2>

                </div>
            </div>
            <div class="row mt-5">

                <div class="col-4 d-flex justify-content-center">

                    <div class="d-flex justify-content-center align-items-center" style="height: 190px; width: 190px; border-radius: 6em; background: black; opacity: 0.75; box-shadow: 0 0 0 1px #1b3f24">
                        <h2 class="text-white">156</h2>
                    </div>

                </div>
                <div class="col-4 d-flex justify-content-center">

                    <div class="d-flex justify-content-center align-items-center" style="height: 190px; width: 190px; border-radius: 6em; background: black; opacity: 0.75; box-shadow: 0 0 0 1px #1b3f24">
                        <h2 class="text-white">50</h2>
                    </div>

                </div>
                <div class="col-4 d-flex justify-content-center">

                    <div class="d-flex justify-content-center align-items-center" style="height: 190px; width: 190px; border-radius: 6em; background: black; opacity: 0.75; box-shadow: 0 0 0 1px #1b3f24">
                        <h2 class="text-white">50</h2>
                    </div>

                </div>
            </div>
            <div class="row mt-5">

                <div class="col-4 d-flex justify-content-center">

                    <h2 class="text-black">Confirmados</h2>


                </div>
                <div class="col-4 d-flex justify-content-center">

                    <h2 class="text-black">Sem Resposta</h2>

                </div>
                <div class="col-4 d-flex justify-content-center">

                    <h2 class="text-black">Recusados</h2>

                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once $abs_us_root . $us_url_root . '/users/includes/html_footer.php'; ?>