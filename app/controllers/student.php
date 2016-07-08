<?php
/**
 * Created by PhpStorm.
 * User: Виктор
 * Date: 08.07.2016
 * Time: 14:41
 */
use Illuminate\Support\Facades\Redirect as Redirect;

class Student extends Controller
{
    protected $title = "Студенты";

    protected $table;

    protected $name = 'Stud';

    public function index()
    {
        $objGroup = $this->model('Groups');
        $this->table = $this->model($this->name);

        $group = $objGroup->get_all_entries();

        if (!$_GET['id'])
        {
            $student = $this->table->get_all_entries($group);

            $this->view('header', [
                'title' => $this->title
            ]);
            $this->view('navbar');
            $this->view('stud/index', ['student' => $student,
                'group' => $group]);
            $this->view('footer');
        }
        else{
            $id = trim($_GET['id']);
            $student = $this->table->get_entry($id, $group);

            $this->view('header', [
                'title' => 'Редактирование'
            ]);
            $this->view('navbar');
            $this->view('stud/edit', ['student' => $student,
                'group' => $group]);
            $this->view('footer');
        }
    }

    public function create()
    {
        $this->table = $this->model($this->name);

        if ($_POST['name'] && $_POST['id_group'])
        {
            $name = trim($_POST['name']);
            $group = trim($_POST['id_group']);
            $this->table->create_entry($name, $group);
        }
    }

    public function delete()
    {
        $this->table = $this->model($this->name);

        if ($_POST['recordToDelete'])
        {
            $id = filter_var($_POST["recordToDelete"], FILTER_SANITIZE_NUMBER_INT);
            $this->table->delete_entry($id);
        }
    }

    public function edit()
    {
        $this->table = $this->model($this->name);
        echo "В процессе";
        if ($id = trim($_POST['id']) && $_POST['name'] && $_POST['date'] && $_POST['id_group'])
        {
            $name = trim($_POST['name']);
            $date = trim($_POST['date']);
            $id_group = trim($_POST['id_group']);

            $this->table->edit_entry($id, $name, $date, $id_group);
            echo "Выполнено";
        }
        //return Redirect::action('asdasd');
    }
}