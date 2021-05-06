<div class="card shadow p-3 mb-5 bg-body rounded">
    <div class="card-body">
        <h1 class="mb-3">FORM BLOG</h1>
        <div class="alert alert-primary my-alert" role="alert" id="alert" style="display: none;">
            Data Berhasil Disimpan
        </div>
        <form class="form" action="" method="post" enctype="multipart/form-data">
            <div class="mb-3" hidden>
                <label for="exampleFormControlInput1" class="form-label">Judul</label>
                <input type="text" class="form-control" name="id" id="exampleFormControlInput1 id" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Judul</label>
                <input type="text" class="form-control" name="judul" id="exampleFormControlInput1 judul" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Kategori</label>
                <select class="form-select" aria-label="Default select example" name="kategori">
                    <option selected>Pilih Kategori</option>
                    <option value="olahraga">Olahraga</option>
                    <option value="kesehatan">Kesehatan</option>
                    <option value="kuliner">Kuliner</option>
                    <option value="gayahidup">Gaya Hidup</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Isi</label>
                <textarea class="form-control" name="isi" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
        </form>
        <?php
        require_once "koneksi.php";

        $sql = "SELECT * FROM blog ";
        $stmt = $conn->prepare($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $stmt->execute();
        $data = $stmt->fetchAll();
        ?>
        <table class="table table-bordered mt-5">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Isi</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($data as $value) {  ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $value->judul ?></td>
                        <td><?= $value->isi ?></td>
                        <td><?= $value->kategori ?></td>
                        <td><?= $value->tgl_blog ?></td>
                        <td> <a href="javascript:;" data-id="<?= $value->id ?>" class="badge bg-warning text-dark edit">Edit</a><a href="" class="badge bg-danger text-dark">Hapus</a> </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

    </div>
</div>
<?php
if (isset($_POST['simpan'])) {
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $kategori = $_POST['kategori'];
    $tgl = date('Y-m-d');
    $query = $conn->prepare("insert into blog (judul,kategori,isi,tgl_blog) values (:judul,:kategori,:isi,:tgl)");
    $query->BindParam(':judul', $judul);
    $query->BindParam(':kategori', $kategori);
    $query->BindParam(':isi', $isi);
    $query->BindParam(':tgl', $tgl);
    $query->execute();

    if ($query->rowCount() == 0) {
?>
        <script>
            document.getElementById('alert').show();
        </script>
    <?php
    } else {
    ?>
        <script>
            document.getElementById('alert').style.display = 'block';;
        </script>
<?php
    }
}
?>