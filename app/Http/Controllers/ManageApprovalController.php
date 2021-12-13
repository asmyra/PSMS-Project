<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class StudUpdateController extends Controller {
public function index(){
$users = DB::select('select * from student');
return view('ApprovalInterface',['users'=>$users]);
}
public function show($id) {
$users = DB::select('select * from student where id = ?',[$id]);
return view('Approval',['users'=>$users]);
}
public function edit(Request $request,$id) {
$first_name = $request->input('first_name');
$last_name = $request->input('last_name');
$city_name = $request->input('city_name');
$email = $request->input('email');
/*$data=array('first_name'=>$first_name,"last_name"=>$last_name,"city_name"=>$city_name,"email"=>$email);*/
/*DB::table('student')->update($data);*/
/* DB::table('student')->whereIn('id', $id)->update($request->all());*/
DB::update('update student set first_name = ?,last_name=?,city_name=?,email=? where id = ?',[$first_name,$last_name,$city_name,$email,$id]);
echo "Record updated successfully.
";
echo 'Click Here to go back.';
}
}