<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/13 0013
 * Time: 上午 11:23
 */

namespace App\Http\Controllers\area;

use App\Http\Controllers\Controller;
use App\Http\Models\Actor;

class ActorController extends Controller
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

    public function index()
    {
        $model = Actor::all()->sortBy('id');

        return view('actor/index',['model'=>$model]);
    }
    public function add(){
        return view('actor/add');
    }
    public function addSave(){
        unset($_POST['_token']);
        Actor::create($_POST);
        return redirect('actor/index');
    }
    public function delete(){
        $data = Actor::find($_GET['id']);
        if($data){
            $data->delete($_GET['id']);
            return redirect('actor/index');
        }else{
            return 'error';
        }


    }
    public function edit(){
        $data = Actor::find($_GET['id']);
        if($data){
            return view('actor/edit',['data'=>$data]);
        }else{
            return 'error';
        }
    }
    public function editSave(){
        unset($_POST['_token']);
        $model = new Actor();
        $model->where(['id'=>$_POST['id']])->update($_POST);
        return redirect('actor/index');
    }
}


//1、代码函数要添加注释，最好类的头部也加上注释
//2、代码命名要规范， 参照PHP的PSR标准
//3、框架blade模板禁止使用php的标签， 框架中接收参数用$request