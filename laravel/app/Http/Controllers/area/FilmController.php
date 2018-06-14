<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/13 0013
 * Time: 下午 2:58
 */

namespace App\Http\Controllers\area;


use App\Http\Controllers\Controller;
use App\Http\Models\Film;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FilmController extends Controller
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
        $model = Film::all()->sortBy('id');
        return view('film/index',['model'=>$model]);
    }

    public function add(){
        return view('film/add');
    }

    public function addSave(Request $request){
        $file = $request->file('img_url');
        if ($file->isValid()) {
            $originalName = $file->getClientOriginalName();
            $realPath = $file->getRealPath();
            Storage::disk('uploads')->put($originalName,file_get_contents($realPath));
            $data = $request->input();
            $data['img_url'] ='/uploads/'.$originalName;
        }
        unset($data['_token']);
        Film::create($data);
        return redirect('film/index');
    }

    public function edit(){
        $data=Film::find($_GET['id']);
        if($data){
            return view('film/edit',['data'=>$data]);
        }else{
            return 'error';
        }
    }

    public function editSave(){
        unset($_POST['_token']);
        $model = new Film();
        $model->where(['id'=>$_POST['id']])->update($_POST);
        return redirect('film/index');
    }

    public function delete(){
        $data=Film::find($_GET['id']);
        if($data){
            $data->delete($_GET['id']);
            return redirect('film/index');
        }else{
            return 'error';
        }
    }
}