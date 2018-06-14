<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/13 0013
 * Time: 下午 4:26
 */

namespace App\Http\Controllers\area;


use App\Http\Controllers\Controller;
use App\Http\Models\Novel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NovelController extends Controller
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
        $model = Novel::all()->sortBy('id');
        return view('novel/index',['model'=>$model]);
    }
    public function add(){
        return view('novel/add');
    }
    public function addSave(Request $request){
        $file = $request->file('img_url');
        if($file->isValid()){
            $orig = $file->getClientOriginalName();
            $path = $file->getRealPath();
            Storage::disk('uploads')->put($orig,file_get_contents($path));
            $data = $request->input();
            $data['img_url']='/uploads/'.$orig;
        }
        unset($data['_token']);
        Novel::create($data);
        return redirect('novel/index');
    }
    public function delete(){
        $data =Novel::find($_GET['id']);
        if($data){
            $data->delete(['id'=>$_GET['id']]);
            return redirect('novel/index');
        }else{
            return 'error';
        }
    }
    public function edit(){
        $data =Novel::find($_GET['id']);
        if($data){
            return view('novel/edit',['data'=>$data]);
        }else{
            return 'error';
        }
    }
    public function editSave(){
        unset($_POST['_token']);
        $model = new Novel();
        $model->where(['id'=>$_POST['id']])->update($_POST);
        return redirect('novel/index');
    }
}