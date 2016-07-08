<?php
/**
 * Created by PhpStorm.
 * User: Виктор
 * Date: 08.07.2016
 * Time: 2:56
 */

use Illuminate\Database\Eloquent\Model as Eloquent;

class Groups extends Eloquent
{
    public $table = 'group';

    public $timestamps = [];

    protected $fillable = ['name', 'date'];

    protected $guarded = ['id'];

    public function __construct()
    {
        parent::__construct();
    }

    public function get_all_entries()
    {
        return $this->get()->toArray();
    }

    public function get_entry($id)
    {
        return $this->where('id', '=', $id)->get()->toArray();
    }

    public function create_entry($name)
    {
        $this->name = $name;
        $this->date=date('Y-m-d H:i:s', time());
        $this->save();
    }

    public function delete_entry($id)
    {
        $this->destroy($id);
    }

    public function edit_entry($id, $new_name, $new_date)
    {
        $obj = $this->find($id);
        $obj->name = $new_name;
        $obj->date = $new_date;
        $obj->save();
    }

    public function get_name_group($id)
    {
        return $this->where('id', '=', $id)->get()->toArray();
    }
}