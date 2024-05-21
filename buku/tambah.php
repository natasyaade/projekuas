<?php
include '../aset/header.php';
?>

<div class="container" style="min-height: 100vh;">
    <div class="row mt-4">
        <div class="col-md-9 mx-auto">
            <div class="card">
                <div class="card-header" >
                <h2>Tambah Data Buku</h2>
                </div>
                <div class="card-body">
                <form method="post" action="proses-tambah.php">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" name="title" id="title">
                        </div>
                        <div class="form-group">
                            <label for="creator">Creator</label>
                            <input type="text" class="form-control" name="creator" id="creator" >
                        </div>
                        <div class="form-group">
                            <label for="constributor">Constributor</label>
                            <input type="text" class="form-control" name="constributor" id="constributor" >
                        </div>
                        <div class="form-group">
                            <label for="publisher">Publisher</label>
                            <input type="text" class="form-control" name="publisher" id="publisher" >
                        </div>
                        <div class="form-group">
                            <label for="date">Date</label>
                            <input type="text" class="form-control" name="date" id="date" >
                        </div>
                        <div class="form-group">
                            <label for="format">Format</label>
                            <input type="text" class="form-control" name="format" id="format" >
                        </div>
                        <div class="form-group">
                            <label for="identifier">Identifier</label>
                            <input type="text" class="form-control" name="identifier" id="identifier" >
                        </div>
                        <div class="form-group">
                            <label for="type">Type</label>
                            <input type="text" class="form-control" name="type" id="type" >
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" class="form-control" name="subject" id="subject" >
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" name="description" id="ringkaasan" ></textarea>
                        </div>
                        <div class="form-group">
                            <label for="relation">Relation</label>
                            <input type="text" class="form-control" name="relation" id="relation" >
                        </div>
                        <div class="form-group">
                            <label for="language">Language</label>
                            <input type="text" class="form-control" name="language" id="language" >
                        </div>
                        <div class="form-group">
                            <label for="coverage">Coverage</label>
                            <input type="text" class="form-control" name="coverage" id="coverage" >
                        </div>
                        <div class="form-group">
                            <label for="rights">Rights</label>
                            <input type="text" class="form-control" name="rights" id="rights" >
                        </div>
                        <div class="form-group">
                            <label for="source">Source</label>
                            <input type="text" class="form-control" name="source" id="source" >
                        </div>

                        <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<?php
include '../aset/footer.php';
?>
