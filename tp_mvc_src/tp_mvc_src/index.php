<?php
include_once("Model/Template.class.php");
include_once("Model/DB.class.php");
include_once("Controller/Members.controller.php");

$member = new MembersController();

if (isset($_GET['adding'])) {
  //lengkapi
  $member->addForm();
} else if (isset($_GET['editing'])) {
  //lengkapi
  $id = $_GET['editing'];

  $member->editForm($id, $_POST);
} else if (isset($_POST['submit'])) {
  //lengkapi
  $member->add($_POST);
} else if (isset($_POST['update'])) {
  //lengkapi
  $id = $_POST['id'];

  $member->edit($id, $_POST);
} else if (!empty($_GET['id_hapus'])) {
  //lengkapi
  $id = $_GET['id_hapus'];

  $member->delete($id);
} else {
  $member->index();
}
