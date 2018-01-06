<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Admin;
use App\Expert;
use App\Contact;
use App\UserInfo;

use App\Province;
use App\District;
use App\SubDistrict;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = Admin::all();
        return view('admins.index', ['admins' => $admins]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function expertIndex() {
        $experts = Expert::orderBy('fname_th', 'asd')->get();        
        return view('admins.expert', ['experts' => $experts]);
    }

    public function expertCreate(){
        $provinces = Province::orderBy('province_name', 'asc')->get();
        return view('admins.create', ['provinces' => $provinces]);
    }

    public function expertStore(Request $req) {
        $data = $req->all();
        $validator = $this->validator($data);

        if($validator->fails()) {
            $req->flash();
            return back()->with(['errors' => $validator->errors()]);
        }

        $expert_result = Expert::create([
            'title' => $data['title'],
            'academic_pos' => $data['academic_pos'],
            'fname_th' => $data['fname_th'],
            'lname_th' => $data['lname_th'],
            'fname_en' => $data['fname_en'],
            'lname_en' => $data['lname_en'],
            'gender' => $data['gender'],
            'birthday' => $data['birthday'],
            'id_card' => $data['id_card'],
            'nationality' => $data['nationality'],
            'bursary' => $data['bursary']
        ]);
        $contact_result = Contact::create([
          'phone' => $data['phone'],
          'phone_list' => $data['phone_list'],
          'fax' => $data['fax'],
          'fax_list' => $data['fax_list'],
          'mobile' => $data['mobile'],
          'email' => $data['email'],
          'facebook' => $data['facebook'],
          'twitter' => $data['twitter'],
          'line' => $data['line']

        ]);

        return redirect('admin/expert');
    }

    public function expertDestroy(Request $req) {
        $exp_id = $req->get('exp_id');
        $result = Expert::destroy($exp_id);
        return "success";
    }

    protected function validator(array $data) {
        return Validator::make($data, [
            'title' => 'required|string',
            'academic_pos' => 'required|string',
            'fname_th' => 'required|string',
            'lname_th' => 'required|string',
            'fname_en' => 'required|string',
            'lname_en' => 'required|string',
            'gender' => 'required|string',
            'birthday' => 'required|string',
            'id_card' => 'required|string|max:13',
            'nationality' => 'required|string',
            'mobile' => 'required|string|max:10',
            'email' => 'required|string|email',
            'address' => 'required|string',
            'country' => 'required|string',
            'province_id' => 'required|integer',
            'district_id' => 'required|integer',
            'sub_district_id' => 'required|integer',
            'post_code' => 'required|string',
        ]);
    }
}
