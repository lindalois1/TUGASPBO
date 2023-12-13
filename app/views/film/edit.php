<h2>Edit Film</h2>

<form action="<?php echo URL; ?>/film/update" method="post">
    <input type="hidden" name="id" value="<?php echo $data['row']['id_film']; ?>">
    <table>
    <tr>
            <td>ID_FILM</td>
            <td><input type="id_film" name="id_film" value="<?php echo $data['row']['id_film']; ?>" required></td>
        </tr>
        <tr>
            <td>NAMA_FILM</td>
            <td><input type="nama_film" name="nama_film"></td>
        </tr>
        <tr>
            <td>TAHUN</td>
            <td><input type="tahun" name="tahun" value="<?php echo $data['row']['tahun']; ?>" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>