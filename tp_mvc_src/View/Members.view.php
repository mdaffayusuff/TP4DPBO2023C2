<?php

class MembersView
{
    public function render($data)
    {
        $membersData = null;
        foreach ($data['member'] as $val) {
            list($id, $name, $email, $phone, $join_date) = $val;
            $membersData .= "
        <tr>
          <th>$id</th>
          <td>$name</td>
          <td>$email</td>
          <td>$phone</td>
          <td>" . $val['domisili'] . "</td>
          <td>$join_date</td>
          <td>
                    <a class='btn btn-success' href='index.php?editing=$id'>Edit</a>
                    <a class='btn btn-danger' href='index.php?id_hapus=$id'>Delete</a>
                  </td>
        </tr>
        ";
        }

        $tpl = new Template("templates/index.html");

        $tpl->replace("MEMBER_DATA", $membersData);
        $tpl->write();
    }
}
