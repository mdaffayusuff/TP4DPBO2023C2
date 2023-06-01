<?php
include_once("conf.php");
include_once("Model/Members.class.php");
include_once("Model/Domisili.class.php");
include_once("View/Members.view.php");
include_once("View/mAdd.view.php");
include_once("View/mEdit.view.php");

class MembersController
{
    private $member;
    private $dom;

    function __construct()
    {
        $this->member = new Members(Conf::$db_host, Conf::$db_user, Conf::$db_pass, Conf::$db_name);
        $this->dom = new Domisili(Conf::$db_host, Conf::$db_user, Conf::$db_pass, Conf::$db_name);
    }

    public function index()
    {
        $this->member->open();
        $this->member->get();

        $data = array(
            'member' => array(),
        );
        while ($row = $this->member->getResult()) {
            array_push($data['member'], $row);
        }
        $this->member->close();

        $view = new MembersView();
        $view->render($data);
    }

    public function editForm($id)
    {
        $this->member->open();
        $this->dom->open();
        $this->member->get();
        $this->dom->get();

        $data = array(
            'member' => array(),
            'dom' => array()
        );
        while ($row = $this->member->getResult()) {
            array_push($data['member'], $row);
        }
        while ($row = $this->dom->getResult()) {
            array_push($data['dom'], $row);
        }
        $this->member->close();
        $this->dom->close();

        $view = new mEditView();
        $view->render($id, $data);
    }

    public function addForm()
    {
        $this->member->open();
        $this->dom->open();
        $this->member->get();
        $this->dom->get();

        $data = array(
            'member' => array(),
            'dom' => array()
        );
        while ($row = $this->member->getResult()) {
            array_push($data['member'], $row);
        }
        while ($row = $this->dom->getResult()) {
            array_push($data['dom'], $row);
        }
        $this->member->close();
        $this->dom->close();

        $view = new mAddView();
        $view->render($data);
    }

    function add($data)
    {
        $this->member->open();
        $this->member->add($data);
        $this->member->close();

        header("location:index.php");
    }

    function edit($id, $data)
    {
        $this->member->open();
        $this->member->update($id, $data);
        $this->member->close();

        header("location:index.php");
    }

    function delete($id)
    {
        $this->member->open();
        $this->member->delete($id);
        $this->member->close();

        header("location:index.php");
    }
}
