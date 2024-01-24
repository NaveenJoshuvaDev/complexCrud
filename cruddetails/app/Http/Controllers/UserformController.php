<?php

namespace App\Http\Controllers;

use App\Models\Userdetail;
use Illuminate\Http\Request;

class UserformController extends Controller
{
    

    public function index()
    {
        return view('index');
    }
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        // Validate the form data
       
    

     
 $data= $request->validate([
    'name'=>'required|string|max:255',
    'image'=>'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    'skill'=>'array|required',
    'skill.*' => 'in:Php,Python,C++',
    'gender'=>'required|string|max:255',
    'country'=>'required|string|max:255'
 ]);

 if($request->hasFile('image'))
 {
    $customFileName = time() . '-' . $request->file('image')->getClientOriginalExtension();
    $imagePath = $request->file('image')->move(storage_path('storage/images'), $customFileName);

 }
 else {
    $imagePath = null; // Set a default value if no image is provided
}
 //$imagePath = $request->file('image')->store('uploads', 'public');
   // Create a new instance of your model with the validated data
   $userdetaildata = [
    'name'=>$request->input('name'),
    'image'=>$customFileName,
    'skill'=>implode(',',$data['skill']),
    'gender'=>$request->input('gender'),
    'country'=>$request->input('country')   
   ];

     Userdetail::create($userdetaildata);
    return redirect(route('user.index'));
    }
}