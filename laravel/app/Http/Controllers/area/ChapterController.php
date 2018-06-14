<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/13 0013
 * Time: 下午 5:20
 */

namespace App\Http\Controllers\Area;


use App\Http\Controllers\Controller;
use App\Http\Models\Chapter;

class ChapterController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $model = Chapter::all()->sortBy('id');
        return view('chapter/index',['model'=>$model]);
    }
    public function add(){
        return view('chapter/add');
    }
    public function addSave(){
        unset($_POST['_token']);
        Chapter::create($_POST);
        return redirect('chapter/index');
    }
    public function delete(){
        $data = Chapter::find($_GET['id']);
        if($data){
            $data->delete($_GET['id']);
            return redirect('chapter/index');
        }else{
            return 'error';
        }
    }
    public function edit(){
        $data = Chapter::find($_GET['id']);
        if($data){
            return view('chapter/edit',['data'=>$data]);
        }else{
            return 'error';
        }
    }
    public function editSave(){
        unset($_POST['_token']);
        $model = new Chapter();
        $model->where(['id'=>$_POST['id']])->update($_POST);
        return redirect('chapter/index');
    }
}