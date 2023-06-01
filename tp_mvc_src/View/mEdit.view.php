<?php

class mEditView
{
  public function render($id_edit, $data)
  {
    $membersData = null;

    $opt = null;

    foreach ($data['dom'] as $valOpt) {
      list($id, $dom) = $valOpt;
      if ($id == $id_edit) {
        $opt .= '<option value="' . $id . '" selected>' . $dom . '</option>';
      } else {
        $opt .= '<option value="' . $id . '">' . $dom . '</option>';
      }
    }

    foreach ($data['member'] as $val) {
      list($id, $name, $email, $phone, $join_date) = $val;
      if ($id == $id_edit) {
        $membersData = '
    
        <form method="post" action="index.php">
    
        <br><br>
        <div class="card">
    
          <div class="card-header bg-warning">
            <h1 class="text-white text-center"> Edit Member </h1>
          </div><br>
                <input type="hidden" name="id" value="' . $id . '" class="form-control"> <br>
    
                <label> NAME: </label>
                <input type="text" name="name" value="' . $name . '" class="form-control"> <br>
        
                <label> EMAIL: </label>
                <input type="text" name="email" value="' . $email . '" class="form-control"> <br>
        
                <label> PHONE: </label>
                <input type="text" name="phone" value="' . $phone . '" class="form-control"> <br>
                
                <label> DOMISILI: </label>
                <select class="form-control form-control-lg" name="domisili">
                  '
          . $opt .
          '
                </select>
                
                <label> DATE OF JOIN: </label>
                <input type="date" name="join_date" value="' . $join_date . '" class="form-control"> <br>
    
                <button class="btn btn-success" type="submit" name="update"> Update </button><br>
                <a class="btn btn-info" type="submit" name="cancel" href="index.php"> Cancel </a><br>
                </div>
                </form>
            ';
      }
    }

    $tpl = new Template("templates/form.html");

    $tpl->replace("FORM", $membersData);
    $tpl->write();
  }
}
