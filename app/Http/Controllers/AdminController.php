<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Admin;
use App\Models\Activity;
use App\Models\Contact;
use App\Models\Expert;
use App\Models\ExpertExpertise;
use App\Models\Education;
use App\Models\Expertise;
use App\Models\Major;
use App\Models\UserInfo;
use App\Models\Project;
use App\Models\Research;
use App\Models\Service;
use App\Models\Work;

use App\Models\Province;
use App\Models\District;
use App\Models\SubDistrict;

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

    public function getLogin()
    {
        return view('admins.login');
    }

    public function expertIndex() {
        $experts = Expert::orderBy('fname_th', 'asd')->get();        
        return view('admins.expert', ['experts' => $experts]);
    }

    public function expertCreate(){
        $provinces = Province::orderBy('province_name', 'asc')->get();
        $districts = District::all();
        $sub_districts = SubDistrict::all();
        $expertises = Expertise::all();
        $majors = Major::all();
        return view('admins.expert_create', ['provinces' => $provinces, 'districts' => $districts, 'sub_districts' => $sub_districts, 'expertises' => $expertises, 'majors' => $majors]);
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
            'interesting' => $data['interesting'],
            'bursary' => $data['bursary']
        ]);
        $expertise = ExpertExpertise::create([
            'expert_id' => $expert_result->id,
            'major_id'  => $data['major_id'],
            'expertise_id' => $data['expertise_id']
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
        $user_info_result = UserInfo::create([
           'country' => $data['h_country'],
           'province_id' => $data['h_province_id'],
           'district_id' => $data['h_district_id'],
           'sub_district_id' => $data['h_sub_district_id'],
           'post_code' => $data['post_code'],
           'address' => $data['address']
        ]);
        $work_result = Work::create([
           'expert_id' => $expert_result->id,
           'work_start' => $data['work_start'],
           'work_end'=> $data['work_end'],
           'company_name'=> $data['company_name'],
           'province_id'=> $data['wk_province_id'],
           'country'=> $data['wk_country'],
           'position'=> $data['position'],
           'job_des'=> $data['job_des']    
        ]);
        $education_result = Education::create([
           'univ_name' => $data['univ_name'],
           'univ_province' => $data['edu_province_id'],
           'univ_country' => $data['univ_country'],
           'edu_level' => $data['edu_level'],
           'degree_name' => $data['degree_name'],
           'fac_name' => $data['fac_name'],
           'major_name' => $data['major_name'],
           'edu_end' => $data['edu_end']
        ]);
        $service_result = Service::create([
            'project_name' => $data['project_name'],
            'acti_name' => $data['acti_name'],
            'acti_start' => $data['acti_start'],
            'acti_end' => $data['acti_end'],
            'role' => $data['role'],
            'short_desc' => $data['short_desc']         
        ]); 
        $service_result = Research::create([
            'research_name' => $data['research_name'],
            'research_role' => $data['research_role'],
            'status' => $data['status'],
            'short_desc' => $data['r_short_desc'],
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
            'interesting' => 'required|string',
            'email' => 'required|string|email',
            'address' => 'required|string',
            'h_country' => 'required|string',
            'h_province_id' => 'required|integer',
            'h_district_id' => 'required|integer',
            'h_sub_district_id' => 'required|integer',
            'post_code' => 'required|string',
            'company_name' => 'required|string',
            'wk_country' => 'required|string',
            'wk_province_id' => 'required|integer',
            'work_start' => 'required|string',
            'work_end' => 'required|string',
            'position' => 'required|string',
            'edu_level' => 'required|string',
            'univ_name' => 'required|string',
            'univ_country' => 'required|string',
            'edu_province_id' =>'required|integer',
            'degree_name' => 'required|string',
            'fac_name' => 'required|string',
            'major_id' => 'required|integer',
            'expertise_id' => 'required|integer',        

        ]);
    }

    public function projectIndex(){
        $projects = Project::orderBy('year_fund', 'des')->get();
        return view('admins.project', ['projects' => $projects]);
    }
    public function projectCreate(){
        return view('admins.project_create');
    }
    public function projectStore(Request $req){
        $data = $req->all();
        $validator = Validator::make($data, [
            'project_code'  => 'required|string',
            'project_name'  => 'required|string',
            'year_fund'     => 'required|string',
            'fund'          => 'required|string',
            'dep'           => 'required|string',
        ]);

        if($validator->fails()) {
            $req->flash();
            dd($validator->errors());
            return back()->with(['errors' => $validator->errors()]);
        }

        $project_result = Project::create([
            'project_code'  => $data['project_code'],
            'project_name'  => $data['project_name'],
            'year_fund'     => $data['year_fund'],
            'fund'          => $data['fund'],
            'dep'           => $data['dep']
        ]);

        return redirect('admin/project');
    }
    public function projectEdit($id){
        $project = Project::find($id);
        return view('admins.project_update', ['project' => $project]);
    }

    public function projectUpdate(Request $req, $id){
        $data = $req->all();
        $project = Project::find($id);
        if($project) {
            $project->project_code  = $data['project_code'];
            $project->project_name  = $data['project_name'];
            $project->year_fund     = $data['year_fund'];
            $project->fund          = $data['fund'];
            $project->dep           = $data['dep'];
            $project->save();
        }
        return redirect('admin/project');
    }

    public function projectDetail($id){
        $project = Project::find($id);
        return view('admins.project_detail', ['project' => $project]);
    }

    public function projectDelete($id){
        $project = Project::find($id);
        $project->delete();
        $activity = Activity::find($id);
        if($activity){
            $activity->delete();
        }
        
        return redirect('admin/project');
    }

    public function activityCreate(){
        $projects = Project::orderBy('year_fund')->get();
        return view('admins.activity_create', ['projects' => $projects]);
    }
    public function activityStore(Request $req){
        $data = $req->all();
        $validator = Validator::make($data, [
            'project_id'    => 'required|integer',
            'activity_name' => 'required|string',
            'date_start'    => 'required|string',
            'date_end'      => 'required|string',
            'expert_id'     => 'required|string',
            'participant_amount'     => 'required|integer',
            'status'        => 'required|string'
        ]);

        if($validator->fails()) {
            $req->flash();
            dd($validator->errors());
            return back()->with(['errors' => $validator->errors()]);
        }

        $activity_result = Activity::create([
            'project_id' => $data['project_id'],
            'activity_name' => $data['activity_name'],
            'date_start'    => $data['date_start'],
            'date_end'      => $data['date_end'],
            'expert_id'     => $data['expert_id'],
            'participant_amount' => $data['participant_amount'],
            'status'        => $data['status']
        ]);
        return redirect('admin/project');
    }
    public function activityEdit($id){
        $projects = Project::orderBy('year_fund')->get();
        $activity = Activity::find($id);
        return view('admins.activity_update', ['activity' => $activity, 'projects' => $projects]);
    }

    public function activityUpdate(Request $req, $id){
        $data = $req->all();
        $validator = Validator::make($data, [
            'project_id'    => 'required|integer',
            'activity_name' => 'required|string',
            'date_start'    => 'required|string',
            'date_end'      => 'required|string',
            'expert_id'     => 'required|string',
            'participant_amount'     => 'required|integer',
            'status'        => 'required|string'
        ]);

        if($validator->fails()) {
            $req->flash();
            dd($validator->errors());
            return back()->with(['errors' => $validator->errors()]);
        }

        $activity = Activity::find($id);
        $activity->project_id =$data['project_id'];
        $activity->activity_name =$data['activity_name'];
        $activity->date_start = $data['date_start'];
        $activity->date_end  = $data['date_end'];
        $activity->expert_id  = $data['expert_id'];
        $activity->participant_amount = $data['participant_amount'];
        $activity->status = $data['status'];
        $activity->save();


        return redirect('admin/project');
    }

    public function activityDelete($id){
        $activity = Activity::find($id);
        $activity->delete();
        return redirect('admin/project');
    }

    public function userIndex(){
        return view('admins.user');
    }
    public function userCreate() {
        return view('admins.user_create');
    }
}
