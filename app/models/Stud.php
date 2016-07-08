<?php
/**
 * Created by PhpStorm.
 * User: Виктор
 * Date: 08.07.2016
 * Time: 14:46
 */
use Illuminate\Database\Eloquent\Model as Eloquent;

class Stud extends Eloquent
{
    public $table = 'student';

    public $timestamps = [];

    protected $fillable = ['name', 'id_group', 'date'];

    protected $guarded = ['id'];

    public function __construct()
    {
        parent::__construct();
    }

    public function get_all_entries($groups)
    {
        $result = $this->latest('name')->get()->toArray();

        for ($i = 0; $i < count($result); $i++)
        {
            for ($j = 0; $j < count($groups); $j++)
            {
                if ($result[$i]['id_group'] == $groups[$j]['id'])
                {
                    $result[$i]['name_group'] = $groups[$j]['name'];
                    break;
                }
            }
        }
        return $result;
    }

    public function get_entry($id, $groups)
    {
        $result = $this->where('id', '=', $id)->get()->toArray();

        for ($i = 0; $i < count($result); $i++)
        {
            for ($j = 0; $j < count($groups); $j++)
            {
                if ($result[$i]['id_group'] == $groups[$j]['id'])
                {
                    $result[$i]['name_group'] = $groups[$j]['name'];
                    break;
                }
            }
        }
        return $result;
    }

    public function create_entry($name, $id_group)
    {
        $this->name = $name;
        $this->id_group = $id_group;
        $this->date=date('Y-m-d H:i:s', time());
        $this->save();
    }

    public function delete_entry($id)
    {
        $this->destroy($id);
    }

    public function edit_entry($id, $new_name, $new_date, $new_id_group)
    {
        $obj = $this->find($id);
        $obj->name = $new_name;
        $obj->date = $new_date;
        $obj->id_group = $new_id_group;
        $obj->save();
    }

    public function search_entries($id_group)
    {
        return $this->where('id_group', '=', $id_group)->get()->toArray();
    }
}