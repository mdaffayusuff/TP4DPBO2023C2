<?php

class dEditView
{
  public function render($id_edit, $data)
  {
    $domilisiData = null;

    foreach ($data['dom'] as $val) {
      list($id, $name) = $val;
      if ($id == $id_edit) {
        $domilisiData = '
    
        <form method="post" action="index_d.php">
    
        <br><br>
        <div class="card">
    
          <div class="card-header bg-warning">
            <h1 class="text-white text-center"> Edit Member </h1>
          </div><br>
                <input type="hidden" name="id" value="' . $id . '" class="form-control"> <br>
    
                <label> NAME: </label>
                <input type="text" name="domisili" value="' . $name . '" class="form-control"> <br>
        
    
                <button class="btn btn-success" type="submit" name="update"> Update </button><br>
                <a class="btn btn-info" type="submit" name="cancel" href="index_d.php"> Cancel </a><br>
                </div>
                </form>
            ';
      }
    }

    $tpl = new Template("templates/form.html");

    $tpl->replace("FORM", $domilisiData);
    $tpl->write();
  }
}
