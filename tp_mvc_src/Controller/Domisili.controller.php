<?php
include_once("conf.php");
include_once("Model/Domisili.class.php");
include_once("View/Domisili.view.php");
include_once("View/dAdd.view.php");
include_once("View/dEdit.view.php");

class DomisiliController
{
    private $dom;

    function __construct()
    {
        $this->dom = new Domisili(Conf::$db_host, Conf::$db_user, Conf::$db_pass, Conf::$db_name);
    }

    public function index()
    {
        $this->dom->open();
        $this->dom->get();

        $data = array(
            'dom' => array(),
        );
        while ($row = $this->dom->getResult()) {
            array_push($data['dom'], $row);
        }
        $this->dom->close();

        $view = new DomisiliView();
        $view->render($data);
    }

    public function editForm($id)
    {
        $this->dom->open();
        $this->dom->get();

        $data = array(
            'dom' => array()
        );
        while ($row = $this->dom->getResult()) {
            array_push($data['dom'], $row);
        }
        $this->dom->close();

        $view = new dEditView();
        $view->render($id, $data);
    }

    public function addForm()
    {
        $this->dom->open();
        $this->dom->get();

        $data = array(
            'dom' => array()
        );
        while ($row = $this->dom->getResult()) {
            array_push($data['dom'], $row);
        }
        $this->dom->close();

        $view = new dAddView();
        $view->render($data);
    }

    function add($data)
    {
        $this->dom->open();
        $this->dom->add($data);
        $this->dom->close();

        header("location:index_d.php");
    }

    function edit($id, $data)
    {
        $this->dom->open();
        $this->dom->update($id, $data);
        $this->dom->close();

        header("location:index_d.php");
    }

    function delete($id)
    {
        $this->dom->open();
        $this->dom->delete($id);
        $this->dom->close();

        header("location:index_d.php");
    }
}
