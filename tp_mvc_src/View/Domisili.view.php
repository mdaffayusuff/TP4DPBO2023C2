<?php

class DomisiliView
{
  public function render($data)
  {
    $domData = null;
    foreach ($data['dom'] as $val) {
      list($id, $name) = $val;
      $domData .= "
        <tr>
          <th>$id</th>
          <td>$name</td>
          <td>
                    <a class='btn btn-success' href='index_d.php?editing=$id'>Edit</a>
                    <a class='btn btn-danger' href='index_d.php?id_hapus=$id'>Delete</a>
                  </td>
        </tr>
        ";
    }

    $tpl = new Template("templates/index_d.html");

    $tpl->replace("DOMDATA", $domData);
    $tpl->write();
  }
}
