@extends('layouts.admin')
@section('content')
<div class="content">
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">ข้อมูลเบื้องต้น<a class="heading-elements-toggle"><i class="icon-more"></i></a></h5>
            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a data-action="collapse"></a></li>
                    <li><a data-action="reload"></a></li>
                    <li><a data-action="close"></a></li>
                </ul>
            </div>
        </div>
        <div class="panel-body">
        <div class="form-group has-error">
            @foreach($errors->all() as $val)
            <span class="help-block">
                <strong>{{ $val }}</strong>
            </span>
            <br> @endforeach
        </div>
        <!-- information -->
        <form name="form" action="{{ url('admin/expert') }}" method="post" class="form-horizontal">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label class="col-md-2 control-label">คำนำหน้าชื่อ</label>
                        <div class="col-md-10">
                            <label class="radio-inline">
                                <input type="radio" name="title" class="styled" value="นาย" checked="checked">
                                นาย
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="title" class="styled" value="นาง">
                                นาง
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="title" class="styled" value="นางสาว">
                                นางสาว
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="title" class="styled" value="ดร.">
                                ดร.
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="title" class="styled" value="อื่นๆ">
                                อื่นๆ
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">ตำแหน่งทางวิชาการ</label>
                        <div class="col-md-10">
                            <label class="radio-inline">
                                <input type="radio" name="academic_pos" class="styled" checked="checked">
                                ศ.
                            </label>

                            <label class="radio-inline">
                                <input type="radio" name="academic_pos" class="styled">
                                รศ.
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="academic_pos" class="styled">
                                ผศ.
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="academic_pos" class="styled">
                                อื่นๆ
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">ชื่อ (ไทย)</label>
                        <div class="col-md-4">
                            <input type="text" class="form-control" id="fname_th" name="fname_th" placeholder="" required value="{{ old('fname_th') }}">
                        </div>
                        <label class="col-md-2 control-label">นามสกุล (ไทย)</label>
                        <div class="col-md-4">
                            <input type="text" class="form-control" id="lname_th" name="lname_th" placeholder="" required value="{{ old('lname_th') }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">ชื่อ (อังกฤษ) </label>
                        <div class="col-md-4">
                            <input type="text" class="form-control" id="fname_th" name="fname_en" placeholder="" required value="{{ old('fname_en') }}">
                        </div>
                        <label class="col-md-2 control-label">นามสกุล (อังกฤษ)</label>
                        <div class="col-md-4">
                            <input type="text" class="form-control" id="lname_th" name="lname_en" placeholder="" required value="{{ old('lname_en') }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">เพศ</label>
                        <div class="col-md-10">
                            <label class="radio-inline">
                                <input type="radio" name="gender" class="styled" checked="checked">
                            ชาย
                            </label>

                            <label class="radio-inline">
                                <input type="radio" name="gender" class="styled">
                                หญิง
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="gender" class="styled">
                                อื่นๆ.
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">วันเกิด</label>
                        <div class="col-md-6">
                            <input type="date" class="form-control" id="birthday" name="birthday" placeholder="" required value="{{ old('birthday') }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">เลขบัตรประชาชน</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="id_card" name="id_card" placeholder="" required value="{{ old('id_card') }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">สัญชาติ</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="nationality" name="nationality" placeholder="" required value="{{ old('nationality') }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">เคยได้รับทุนจากรัฐบาลหรือไม่</label>
                        <div class="col-md-10">
                        <label class="radio-inline">
                                <input type="radio" name="bursary" class="styled" checked="checked" value="1">
                            ใช่
                            </label>

                            <label class="radio-inline">
                                <input type="radio" name="bursary" class="styled" value="0">
                                ไม่ใช่
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <br/>
            <!-- major -->
            <div class="card">
                <legend class="text-semibold">สังกัด</legend>
            
                <div class="card-body">
                </div>
            </div>
            <br/>
            <!-- contact -->
            <div class="card">
            <legend class="text-semibold">ข้อมูลในการติดต่อ</legend>
                <div class="card-body">
                    <div class="form-group">
                        <label class="col-md-2 control-label">โทรศัพท์</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="" value="{{ old('phone') }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">ต่อ(โทรศัพท์)</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="phone_list" name="phone_list" placeholder="" value="{{ old('phone_list') }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">โทรสาร</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="fax" name="fax" placeholder="" value="{{ old('fax') }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">ต่อ(โทรสาร)</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="fax_list" name="fax_list" placeholder="" value="{{ old('fax_list') }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">มือถือ</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="mobile" name="mobile" placeholder="" required value="{{ old('mobile') }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">อีเมล์</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="email" name="email" placeholder="" required value="{{ old('email') }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">บัญชี Facebook</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="facebook" name="facebook" placeholder="" value="{{ old('facebook') }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">บัญชี Twitter</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="twitter" name="twitter" placeholder="" value="{{ old('twitter') }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">บัญชี Line</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="line" name="line" placeholder="" value="{{ old('line') }}">
                        </div>
                    </div>
                </div>
            </div>
            <br/>
            <!-- address -->
            <div class="card">
                <legend class="text-semibold">ที่อยู่ตามทะเบียนบ้าน</legend>
                <div class="card-body">
                    <div class="form-group">
                        <label class="col-md-2 control-label">ประเทศ</label>
                        <div class="col-md-10">
                            <label class="radio-inline">
                                <input type="radio" name="h_country" class="styled" checked="checked">
                                ไทย
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="h_country" class="styled" checked="checked">
                                อื่นๆ
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">จังหวัด</label>
                        <div class="col-md-6">
                            <select class="form-control nav" name="h_province_id" id="h_province_id" requried value="{{ old('h_province_id') }}">
                                @foreach($provinces as $i => $province)
                                <option value="{{ $province->id }}">{{ $province->province_name }}
                                    </option/> @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">อำเภอ/เขต</label>
                        <div class="col-md-6">
                            <select class="form-control nav" name="h_district_id" id="h_district_id" required value="{{ old('h_district_id') }}">

                                <option value="0"> เมือง
                                    </option/>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">ตำบล</label>
                        <div class="col-md-6 nav-contianer">
                            <select class="form-control" name="h_sub_district_id" id="h_sub_district_id" required value="{{ old('h_sub_district_id') }}">
                                <option value="1"> ไสไทย
                                    </option/>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">รหัสไปรษณีย์</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="post_code" name="post_code" placeholder="" required value="{{ old('post_code') }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">ที่อยู่</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="address" name="address" placeholder="" required value="{{ old('address') }}">
                        </div>
                    </div>
                </div>
            </div>
            <br/>
            <!-- work experience -->
            <div class="card">
                <div class="card-header">
                    ประวัติการทำงาน
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label class="col-md-2 control-label">ชื่อหน่วยงาน</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="company_name" name="company_name" placeholder="" required value="{{ old('company_name') }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">ประเทศ</label>
                        <div class="col-md-10">
                            <label class="radio-inline">
                                <input type="radio" name="wk_country" class="styled" checked="checked">
                                ไทย
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="wk_country" class="styled" checked="checked">
                                อื่นๆ
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">จังหวัด</label>
                        <div class="col-md-6">
                            <select class="form-control nav" name="wk_province_id" id="wk_province_id" value="{{ old('wk_province_id') }}">
                                @foreach($provinces as $i => $province)
                                <option value="{{ $province->id }}">{{ $province->province_name }}
                                    </option/> @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">ตำแหน่ง</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="position" name="position" placeholder="" required value="{{ old('position') }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">วันที่</label>
                        <div class="col-md-6 row">
                            <div class="col-md-6">
                                <div class="form-group has-feedback has-feedback-left">
                                    <input type="date" class="form-control input-xlg" placeholder="" name="work_start" value="{{ old('work_start') }}">
                                    <div class="form-control-feedback">
                                        เริ่ม
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group has-feedback has-feedback-left">
                                    <input type="date" class="form-control input-xlg" placeholder="" name="work_end" value="{{ old('work_start') }}">
                                    <div class="form-control-feedback">
                                        ถึง
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">ลักษณะงานที่รับผิดชอบ</label>
                        <div class="col-md-6">
                            <textarea id="job_des" name="job_des" class="form-control" value="{{ old('job_des') }}" ></textarea>
                        </div>
                    </div>
                </div>
            </div>
            </br>
            <!-- education -->
            <div class="card">
                <div class="card-header">
                    ประวัติการศึกษา
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label class="col-md-2 control-label">ระดับการศึกษา</label>
                        <div class="col-md-6">
                            <select class="form-control nav" id="edu_level" name="edu_level" value="{{ old('edu_level')}}">
                                <option value="ต่ำกว่าปริญญาตรี">ต่ำกว่าปริญญาตรี</option>
                                <option value="ปริญญาตรี">ปริญญาตรี</option>
                                <option value="ปริญญาโท">ปริญญาโท</option>
                                <option value="ปริญญาเอก">ปริญญาเอก</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">สถาบันศึกษา</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="univ_name" name="univ_name" placeholder="" required value="{{ old('univ_name') }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">ประเทศ</label>
                        <div class="col-md-10">
                            <label class="radio-inline">
                                <input type="radio" name="univ_country" class="styled" checked="checked">
                                นาย
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="univ_country" class="styled" checked="checked">
                                นาย
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">จังหวัด</label>
                        <div class="col-md-6">
                            <select class="form-control nav" name="edu_province_id" id="edu_province_id" required value="{{ old('edu_province_id') }}">
                                @foreach($provinces as $i => $province)
                                <option value="{{ $province->id }}">{{ $province->province_name }}
                                    </option/> @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">วุฒิการศึกษา</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="degree_name" name="degree_name" placeholder="" required value="{{ old('degree_name') }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">คณะหรือเทียบเท่า</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="fac_name" name="fac_name" placeholder="" required value="{{ old('fac_name') }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">สาขาวิชา</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="major_name" name="major_name" placeholder="" required value="{{ old('major_name') }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">ปีที่จบ</label>
                        <div class="col-md-6">
                            <input type="date" class="form-control" id="edu_end" name="edu_end" placeholder="" required value="{{ old('edu_end') }}">
                        </div>
                    </div>
                    <div class="row">
                <div class="col-md-10"></div>
                <div class="col-md-2">    
                <input type="button" class="btn btn-primary" id="submit" value="เพิ่ม">
                </div>
            </div>
                </div>
            </div>
            </br>
            <!-- portfolio -->
            <div class="card">
                <div class="card-header">
                    ข้อมูลผลงาน
                </div>
                <div class="card-body">
                    งานบริการวิชาการ
                    <hr align="">
                    <div class="form-group">
                        <label class="col-md-2 control-label">ชื่อโครงการ</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="project_name" name="project_name" placeholder="" value="{{ old('project_name') }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">ชื่อกิจกรรม</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="acti_name" name="acti_name" placeholder="" value="{{ old('acti_name') }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">วันที่</label>
                        <div class="col-md-6 row">
                            <div class="col-md-6">
                                <div class="form-group has-feedback has-feedback-left">
                                    <input type="date" class="form-control input-xlg" placeholder="" name="acti_start" value="{{ old('acti_start')}}">
                                    <div class="form-control-feedback">
                                        เริ่ม
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group has-feedback has-feedback-left">
                                    <input type="date" class="form-control input-xlg" placeholder="" name="acti_end" value="{{ old('acti_end') }}">
                                    <div class="form-control-feedback">
                                        ถึง
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">บทบาท</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="id_card" name="role" placeholder=""  value="{{ old(
                                    'role') }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">คำอธิบายสั้นๆเกี่ยวกับกิจกรรม</label>
                        <div class="col-md-6">
                            <textarea  class="form-control" name="short_desc" id="short_desc"></textarea>
                        </div>
                    </div>
                    <br></br>
                    งานวิจัย
                    <hr align="">
                    <div class="form-group">
                        <label class="col-md-2 control-label">ชื่อผลงาน</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="research_name" name="research_name" placeholder="
                                "  value="{{ old( 'research_name') }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">บทบาทในงานวิจัย</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="research_role" name="research_role" placeholder="
                                "  value="{{ old( 'research_role') }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">สถานะงานวิจัย</label>
                        <div class="col-md-6">
                            <select class="form-control nav" name="status" id="status">
                                <option value="0">กำลังวิจัย</option>
                                <option value="1">ตีพิมพ์</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">คำอธิบายสั้นๆเกี่ยวกับงานวิจัย</label>
                        <div class="col-md-6">
                            <textarea id="r_short_desc" name="r_short_desc" class="form-control"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            </br>
            <!-- expert -->
            <div class="card">
                <legend class="text-semibold">
                    ความเชี่ยวชาญ
                            </legend>
                <div class="card-body">
                    <div class="form-group">
                        <label class="col-md-2 control-label">สาขาความเชี่ยวชาญ</label>
                        <div class="col-md-6">
                            <select class="form-control " name="major_id" id="major_id">
                            @foreach($majors as $i => $major)
                                <option value="{{$major->id}}">{{$major->major_name_th}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">ชื่อความเชี่ยวชาญ</label>
                        <div class="col-md-6">
                            <select class="form-control" name="expertise_id" id="expertise_id">
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2">เรื่องที่สนใจ</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control " id="interesting" name="interesting" placeholder="
                                " required value="{{ old( 'interesting') }}">
                        </div>
                    </div>
                </div>
            </div>
            </br>
            <div class="row">
                <div class="col-md-5"></div>
                <div class="col-md-5"></div>
                <div class="col-md-2">{{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" id="submit" value="บันทึก">
                    <a href="{{ url( 'admin/expert') }}" class="btn btn-danger">ยกเลิก</a>
                </div>
            </div>
        </form>
        </div>
        </div>
</div>
<script>
    $(function() {
        $( "#major_id" ).change(function() {
            let major_id = $(this).val();
            $.ajax({
                type: "POST",
                url: "{!! url('api/expertise') !!}",
                data: { major_id: major_id },
                success: function(result) {
                    $('#expertise_id').find('option').remove();
                    $.each(result, function(k, v) {
                        $('<option>').val(v.id).text(v.expertise_name_th).appendTo('#expertise_id');
                    });
                    }
                });
        });
    });
</script>
@endsection