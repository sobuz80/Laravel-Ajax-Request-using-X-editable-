<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
class XeditableController extends Controller
{
    /**
     * Write Your Code..
     *
     * @return string
    */
    public function index()
    {
        $data = User::take(10)->get();
        return view('index',compact('data'));
    }
    /**
     * Write Your Code..
     *
     * @return string
    */
    public function update(Request $request)
    {
        if($request->ajax()){
            User::find($request->input('pk'))->update([$request->input('name') => $request->input('value')]);
            return response()->json(['success' => true]);
        }
    } 
      
}