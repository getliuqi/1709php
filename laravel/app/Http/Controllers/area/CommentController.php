<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/13 0013
 * Time: 下午 4:08
 */

namespace App\Http\Controllers\Area;


use App\Http\Controllers\Controller;
use App\Http\Models\Comment;
use Illuminate\Support\Facades\DB;

class CommentController extends Controller
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
        $model = Comment::all()->sortBy('id');

        return view('comment/index',['model'=>$model]);
    }
    public function add(){
        return view('comment/add');
    }
    public function addSave(){
        unset($_POST['_token']);
        Comment::create($_POST);
        return redirect('comment/index');
    }
    public function delete(){
        $data = Comment::find($_GET['id']);
        if($data){
            $data->delete($_GET['id']);
            return redirect('comment/index');
        }else{
            return 'error';
        }


    }
    public function edit(){
        $data = Comment::find($_GET['id']);
        if($data){
            return view('comment/edit',['data'=>$data]);
        }else{
            return 'error';
        }
    }
    public function editSave(){
        unset($_POST['_token']);
        $model = new Comment();
        $model->where(['id'=>$_POST['id']])->update($_POST);
        return redirect('comment/index');
    }
}