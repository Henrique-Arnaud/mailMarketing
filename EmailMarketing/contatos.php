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
    <div class="col-sm-0 mt-1">
        <select class="custom-select custom-select-md mb-3">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select>
    </div>
    <div class="col-10 ml-5 mt-3 bg-cinza">
        <div class="container">
            <h1 class="display-4 d-flex justify-content-start mb-5">Evento</h1>
            <div class="row">
                <div class="col-8 input-group mb-3">
                    <button id="basic-addon1" class="btn btn-outline-success ">Anexar Destinatário</button>
                    <input type="text" class="form-control" aria-describedby="basic-addon1">
                </div>
                <div class="col-3">
                    <button class="btn btn-outline-success ">Importar para o BD</button>
                </div>
            </div>
            <div class="row">
                <div class="col-7 d-flex justify-content-end align-items-center">
                    Pesquisar
                </div>
                <div class="col-3">
                    <input type="text" class="form-control mb-2">
                </div>
            </div>
            <div class="row">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Email</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="text" name="name" id="name" placeholder="Nome"></td>
                            <td><input type="text" name="email" id="email" placeholder="E-mail"></td>
                            <td><h4><span class="badge rounded-pill bg-success">Success</span></h4></td>
                            <th>Editar / Excluir</th>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- <div class="col-5"></div> -->
            <div class="d-flex justify-content-center">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>

<?php require_once $abs_us_root . $us_url_root . '/users/includes/html_footer.php'; ?>