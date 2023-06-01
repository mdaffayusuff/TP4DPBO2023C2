<?php

class dAddView
{
  public function render($data)
  {
    $domisiliData = null;

    $domisiliData .= '

    <form method="post" action="index_d.php">

    <br><br>
    <div class="card">

      <div class="card-header bg-warning">
        <h1 class="text-white text-center"> Add Member </h1>
      </div><br>
            <input type="hidden" name="id" value="" class="form-control"> <br>

            <label> DOMISILI NAME: </label>
            <input type="text" name="domisili" value="" class="form-control"> <br>
    
            
            <button class="btn btn-success" type="submit" name="submit"> Submit </button><br>
            <a class="btn btn-info" type="submit" name="cancel" href="index_d.php"> Cancel </a><br>
            </div>
            </form>
        ';

    $tpl = new Template("templates/form.html");

    $tpl->replace("FORM", $domisiliData);
    $tpl->write();
  }
}
