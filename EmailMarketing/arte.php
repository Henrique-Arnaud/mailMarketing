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
        <select class="custom-select">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select>
    </div>
    <div class="col-10 d-inline-block h-100 bg-cinza m-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-5">
                    <h1 class="display-4">Evento</h1>
                </div>
            </div>
            <ul id="tabsJustified" class="nav nav-tabs">
                <li class="nav-item"><a href="" data-target="#criacao" data-toggle="tab" class="nav-link small text-uppercase">Criação do HTML</a></li>
                <li class="nav-item"><a href="" data-target="#visualizacao" data-toggle="tab" class="nav-link small text-uppercase active">Visualização da Arte</a></li>
            </ul>
            <br>
            <div id="tabsJustifiedContent" class="tab-content">
                <div id="criacao" class="tab-pane fade active show">

                </div>
                <div id="visualizacao" class="tab-pane fade">

                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once $abs_us_root . $us_url_root . '/users/includes/html_footer.php'; ?>