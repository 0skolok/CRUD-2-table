<?php
/**
 * Created by PhpStorm.
 * User: Виктор
 * Date: 08.07.2016
 * Time: 14:41
 */
use Illuminate\Support\Facades\Redirect as Redirect;

class Group extends Controller
{
    protected $title = "Группы";

    protected $table;

    protected $student = 'Stud';

    protected $name = 'Groups';

    public function index()
    {
        $this->table = $this->model($this->name);

        if (!$_GET['id'])
        {
            $group = $this->table->get_all_entries();

            $this->view('header', [
                'title' => $this->title
            ]);
            $this->view('navbar');
            $this->view('group/index', ['group' => $group]);
            $this->view('footer');
        }
        else{
            $id = trim($_GET['id']);
            $group = $this->table->get_entry($id);

            $this->view('header', [
                'title' => 'Редактирование'
            ]);
            $this->view('navbar');
            $this->view('group/edit', ['group' => $group]);
            $this->view('footer');
        }
    }

    public function create()
    {
        $this->table = $this->model($this->name);

        if ($_POST['name'])
        {
            $name = trim($_POST['name']);
            $this->table->create_entry($name);
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
        if ($_POST['id'] && $_POST['name'] && $_POST['date'])
        {
            $id = trim($_POST['id']);
            $name = trim($_POST['name']);
            $date = trim($_POST['date']);

            $this->table->edit_entry($id, $name, $date);
        }
        //return Redirect::action('asdasd');
    }

    public function search()
    {
        if ($_GET['id'])
        {
            $id = trim($_GET['id']);
            $student_model = $this->model($this->student);
            $this->table = $this->model($this->name);

            $student = $student_model->search_entries($id);

            $name_group = $this->table->get_name_group($id);

            $this->view('header', [
                'title' => $this->title
            ]);
            $this->view('navbar');
            $this->view('group/search', ['student' => $student,
                'name' => $name_group]);
            $this->view('footer');
        }
    }
}