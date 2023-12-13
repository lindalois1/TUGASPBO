<h2>Film</h2>

<a href="<?php echo URL; ?>/film/input" class="btn">Input Film</a>

<table id="dtb">
      <thead>
            <tr>
                  <th>ID-FILM</th>
                  <th>NAMA_FILM</th>
                  <th>TAHUN</th>
                  <th>EDIT</th>
                  <th>DELETE</th>
            </tr>
      </thead>
      <body>
            <?php $no = 1;
            foreach ($data['rows'] as $row) { ?>
                  <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $row['nama_film']; ?></td>
                        <td><?php echo $row['tahun']; ?></td>
                        <td><a href="<?php echo URL; ?>/film/edit/<?php echo $row['id_film']; ?>" class="btn">Edit</a></td>
                        <td><a href="<?php echo URL; ?>/film/delete/<?php echo $row['id_film']; ?>" class="btn" onclick="return confirm('Are you sure?')">Delete</a></td>
            </tr>
      <?php $no++;
      } ?>
      </body>
</table>