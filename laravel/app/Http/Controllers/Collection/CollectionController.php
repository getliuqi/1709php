<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/13 0013
 * Time: 下午 6:41
 */

namespace App\Http\Controllers\Collection;


use App\Http\Controllers\Controller;
use App\Http\Models\Collection;

class CollectionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        $data = Collection::all();
        return view('Collection/index',['list'=>$data]);
    }

    public function add() {
        return view('Collection/add');
    }

    public function addSave() {
        unset($_POST['_token']);
        Collection::create($_POST);
        return redirect('Collection/index');
    }

    public function edit() {
        $data = Collection::find($_GET['id']);
        return view('Collection/edit',['list'=>$data]);
    }

    public function editSave() {
        unset($_POST['_tolen']);
        $data = Collection::find($_POST['id']);
        $data->update($_POST);
        return redirect('Collection/index');
    }

    public function delete() {
        $data = Collection::find($_GET['id']);
        $data->delete($_GET['id']);
        return redirect('Collection/index');
    }
}