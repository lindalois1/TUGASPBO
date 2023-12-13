<h2>Input Film</h2>

<form action="<?php echo URL; ?>/Film/save" method="post">
    <table>
        <tr>
            <td>NAMA_FILM</td>
            <td><input type="nama_film" name="nama_film" required></td>
        </tr>
        <tr>
            <td>TAHUN</td>
            <td><input type="tahun" name="tahun" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>