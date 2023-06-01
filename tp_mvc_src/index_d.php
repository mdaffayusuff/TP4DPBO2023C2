<?php
include_once("Model/Template.class.php");
include_once("Model/DB.class.php");
include_once("Controller/Domisili.controller.php");

$dom = new DomisiliController();

if (isset($_GET['adding'])) {
  //lengkapi
  $dom->addForm();
} else if (isset($_GET['editing'])) {
  //lengkapi
  $id = $_GET['editing'];

  $dom->editForm($id, $_POST);
} else if (isset($_POST['submit'])) {
  //lengkapi
  $dom->add($_POST);
} else if (isset($_POST['update'])) {
  //lengkapi
  $id = $_POST['id'];

  $dom->edit($id, $_POST);
} else if (!empty($_GET['id_hapus'])) {
  //lengkapi
  $id = $_GET['id_hapus'];

  $dom->delete($id);
} else {
  $dom->index();
}
