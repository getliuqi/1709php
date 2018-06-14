<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/13 0013
 * Time: 下午 4:04
 */

namespace App\Http\Controllers\Tv;


use App\Http\Controllers\Controller;
use App\Http\Models\Tv;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TvController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $data = Tv::all();
        return view('Tv.index',['list'=>$data]);
    }

    public function add() {
        return view('Tv.add');
    }

    public function addSave(Request $request) {

        $file = $request->file('img_url');
        if ($file->isValid()) {
            $originalName = $file->getClientOriginalName();
            $realPath = $file->getRealPath();
            Storage::disk('uploads')->put($originalName,file_get_contents($realPath));
             $data = $request->input();
             $data['img_url'] ='/uploads/'.$originalName;
        }
        unset($data['_token']);
        Tv::create($data);
        return redirect('Tv/index');
    }

    public function edit() {
        $data = Tv::find($_GET['id']);
        return view('Tv.edit',['list'=>$data]);
    }

    public function editSave() {
        unset($_POST['_token']);
        $data = Tv::find($_POST['id']);
        $data->update($_POST);
        return redirect('Tv/index');
    }

    public function delete() {
        $data = Tv::find($_GET['id']);
        $data->delete($_GET['id']);
        return redirect('Tv/index');
    }
}