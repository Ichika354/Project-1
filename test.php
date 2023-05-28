<table class="table ms-0">
    <tr>
        <th scope="col">No.</th>
        <th scope="col">Kategori</th>
        <th scope="col">Aksi</th>
    </tr>
    <?php $i = 1; ?>
    <?php while ($row = mysqli_fetch_assoc($queryKategori)) : ?>
        <tr>
            <td scope="row"><?= $i; ?></td>
            <td><?= $row["nama"]; ?></td>
            <td>
                <a class="btn btn-secondary" 
                   href="detail_index_kategori.php?id=
                        <?= $row["id_kategori"]; ?>">
                    Cari
                </a>
            </td>
        </tr>
        <?php $i++; ?>
    <?php endwhile; ?>
</table>