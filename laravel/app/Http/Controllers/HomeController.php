<?php

namespace App\Http\Controllers;

use App\Http\Models\HomeMade;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = HomeMade::all();
        return view('home',['list'=>$data]);
    }

    public function add()
    {
        return view('add');
    }

    public function addsave(){

        unset($_POST['_token']);
        HomeMade::create($_POST);
        return redirect('home');
    }

    public function edit()
    {
        $data = HomeMade::find($_GET['id']);

        return view('edit',['list'=>$data]);
    }

    public function editsave()
    {

        unset($_POST['_token']);
        $data = HomeMade::find($_POST['id']);
        $data->update($_POST);
        return redirect('home');
    }

    public function delete()
    {
        $data = HomeMade::find($_GET['id']);
        $data->delete($_GET['id']);
        return redirect('home');
    }
}
