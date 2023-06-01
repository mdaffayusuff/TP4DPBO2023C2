<?php

class mAddView
{
  public function render($data)
  {
    $membersData = null;

    $opt = null;

    foreach ($data['dom'] as $valOpt) {
      list($id, $dom) = $valOpt;
      $opt .= '<option value="' . $id . '">' . $dom . '</option>';
    }


    $membersData .= '

    <form method="post" action="index.php">

    <br><br>
    <div class="card">

      <div class="card-header bg-warning">
        <h1 class="text-white text-center"> Add Member </h1>
      </div><br>
            <input type="hidden" name="id" value="" class="form-control"> <br>

            <label> NAME: </label>
            <input type="text" name="name" value="" class="form-control"> <br>
    
            <label> EMAIL: </label>
            <input type="text" name="email" value="" class="form-control"> <br>
    
            <label> PHONE: </label>
            <input type="text" name="phone" value="" class="form-control"> <br>
            
            <label> DOMISILI: </label>
            <select class="form-control form-control-lg" name="domisili">
            '
      . $opt .
      '
            </select>
            
            <label> DATE OF JOIN: </label>
            <input type="date" name="join_date" value="" class="form-control"> <br>
            
            <button class="btn btn-success" type="submit" name="submit"> Submit </button><br>
            <a class="btn btn-info" type="submit" name="cancel" href="index.php"> Cancel </a><br>
            </div>
            </form>
        ';

    $tpl = new Template("templates/form.html");

    $tpl->replace("FORM", $membersData);
    $tpl->write();
  }
}
