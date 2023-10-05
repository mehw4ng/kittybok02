
<div class="mb-3">
    <?php
    //$txtPesquisa = (isset($_POST["txtPesquisa"]))?$_POST["txtPesquisa"]:"";
    if (isset($_POST["txtPesquisa"])) {
        $txtPesquisa = $_POST["txtPesquisa"];
    } else {
        $txtPesquisa = "";
    }
    ?>

    <form action="" method="post">
        <div class="input-group">
            <input class="form-control" type="search" name="txtPesquisa" id="txtPesquisa" value="<?= $txtPesquisa ?>">
            <button class="btn btn-outline danger" type="submit">
                OK
            </button>
        </div>
    </form>
</div>