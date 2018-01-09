@extends('admins.layout') @section('sidebar') @parent
<p>This is appended to the master sidebar.</p>
@endsection @section('content')

<div class="form-group has-error">
    @foreach($errors->all() as $val)
    <span class="help-block">
        <strong>{{ $val }}</strong>
    </span>
    <br> @endforeach
</div>
<!-- information -->
<form name="form" action="{{ url('admin/expert') }}" method="post">
    <div class="card">
        <div class="card-header">
            ข้อมูลเบื้องต้น
        </div>
        <div class="card-body">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">คำนำหน้าชื่อ</label>
                <div class="col-sm-10">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input class="custom-control-input" type="radio" name="title" id="title1" value="นาย" checked>
                        <label class="custom-control-label" for="title1">นาย</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input class="custom-control-input" type="radio" name="title" id="title2" value="นาง">
                        <label class="custom-control-label" for="title2">นาง</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input class="custom-control-input" type="radio" name="title" id="title3" value="นางสาว">
                        <label class="custom-control-label" for="title3">นางสาว</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input class="custom-control-input" type="radio" name="title" id="title4" value="ดร.">
                        <label class="custom-control-label" for="title4">ดร.</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input class="custom-control-input" type="radio" name="title" id="title5" value="อื่นๆ">
                        <label class="custom-control-label" for="title5">อื่นๆ</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">ตำแหน่งทางวิชาการ</label>
                <div class="col-sm-10">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input class="custom-control-input" type="radio" name="academic_pos" id="academic_pos1" value="ศ." checked>
                        <label class="custom-control-label" for="academic_pos1">ศ.</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input class="custom-control-input" type="radio" name="academic_pos" id="academic_pos2" value="รศ.">
                        <label class="custom-control-label" for="academic_pos2">รศ.</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input class="custom-control-input" type="radio" name="academic_pos" id="academic_pos3" value="ผศ.">
                        <label class="custom-control-label" for="academic_pos3">ผศ.</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input class="custom-control-input" type="radio" name="academic_pos" id="academic_pos4" value="อื่นๆ">
                        <label class="custom-control-label" for="academic_pos4">อื่นๆ</label>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <label class="col-sm-2 col-form-label">ชื่อ (ไทย)</label>
                <div class="form-group col-md-4">
                    <input type="text" class="form-control" id="fname_th" name="fname_th" placeholder="" required value="{{ old('fname_th') }}">
                </div>
                <label class="col-sm-1 offset-1 col-form-label">นามสกุล (ไทย)</label>
                <div class="form-group col-md-4">
                    <input type="text" class="form-control" id="lname_th" name="lname_th" placeholder="" required value="{{ old('lname_th') }}">
                </div>
            </div>
            <div class="form-row">
                <label class="col-sm-2 col-form-label">ชื่อ (อังกฤษ) </label>
                <div class="form-group col-md-4">
                    <input type="text" class="form-control" id="fname_th" name="fname_en" placeholder="" required value="{{ old('fname_en') }}">
                </div>
                <label class="col-sm-1 offset-1 col-form-label">นามสกุล (อังกฤษ)</label>
                <div class="form-group col-md-4">
                    <input type="text" class="form-control" id="lname_th" name="lname_en" placeholder="" required value="{{ old('lname_en') }}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">เพศ</label>
                <div class="col-sm-10">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input class="custom-control-input" type="radio" name="gender" id="gender1" value="ชาย" checked>
                        <label class="custom-control-label" for="gender1">ชาย</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input class="custom-control-input" type="radio" name="gender" id="gender2" value="หญิง">
                        <label class="custom-control-label" for="gender2">หญิง</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input class="custom-control-input" type="radio" name="gender" id="gender3" value="อื่นๆ">
                        <label class="custom-control-label" for="gender3">อื่นๆ</label>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <label class="col-sm-2 col-form-label">วันเกิด</label>
                <div class="form-group col-md-6">
                    <input type="date" class="form-control" id="birthday" name="birthday" placeholder="" required value="{{ old('birthday') }}">
                </div>
            </div>
            <div class="form-row">
                <label class="col-sm-2 col-form-label">เลขบัตรประชาชน</label>
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" id="id_card" name="id_card" placeholder="" required value="{{ old('id_card') }}">
                </div>
            </div>
            <div class="form-row">
                <label class="col-sm-2 col-form-label">สัญชาติ</label>
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" id="nationality" name="nationality" placeholder="" required value="{{ old('nationality') }}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">เคยได้รับทุนจากรัฐบาลหรือไม่</label>
                <div class="col-sm-10">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input class="custom-control-input" type="radio" name="bursary" id="bursary1" value="1" checked>
                        <label class="custom-control-label" for="bursary1">ใช่</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input class="custom-control-input" type="radio" name="bursary" id="bursary2" value="0">
                        <label class="custom-control-label" for="bursary2">ไม่ใช่</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br/>
    <!-- major -->
    <div class="card">
        <div class="card-header">
            สังกัด
        </div>
        <div class="card-body">
        </div>
    </div>
    <br/>
    <!-- contact -->
    <div class="card">
        <div class="card-header">
            ข้อมูลในการติดต่อ
        </div>
        <div class="card-body">
            <div class="form-row">
                <label class="col-sm-2 col-form-label">โทรศัพท์</label>
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="" value="{{ old('phone') }}">
                </div>
            </div>
            <div class="form-row">
                <label class="col-sm-2 col-form-label">ต่อ(โทรศัพท์)</label>
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" id="phone_list" name="phone_list" placeholder="" value="{{ old('phone_list') }}">
                </div>
            </div>
            <div class="form-row">
                <label class="col-sm-2 col-form-label">โทรสาร</label>
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" id="fax" name="fax" placeholder="" value="{{ old('fax') }}">
                </div>
            </div>
            <div class="form-row">
                <label class="col-sm-2 col-form-label">ต่อ(โทรสาร)</label>
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" id="fax_list" name="fax_list" placeholder="" value="{{ old('fax_list') }}">
                </div>
            </div>
            <div class="form-row">
                <label class="col-sm-2 col-form-label">มือถือ</label>
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" id="mobile" name="mobile" placeholder="" required value="{{ old('mobile') }}">
                </div>
            </div>
            <div class="form-row">
                <label class="col-sm-2 col-form-label">อีเมล์</label>
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" id="email" name="email" placeholder="" required value="{{ old('email') }}">
                </div>
            </div>
            <div class="form-row">
                <label class="col-sm-2 col-form-label">บัญชี Facebook</label>
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" id="facebook" name="facebook" placeholder="" value="{{ old('facebook') }}">
                </div>
            </div>
            <div class="form-row">
                <label class="col-sm-2 col-form-label">บัญชี Twitter</label>
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" id="twitter" name="twitter" placeholder="" value="{{ old('twitter') }}">
                </div>
            </div>
            <div class="form-row">
                <label class="col-sm-2 col-form-label">บัญชี Line</label>
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" id="line" name="line" placeholder="" value="{{ old('line') }}">
                </div>
            </div>
        </div>
    </div>
    <br/>
    <!-- address ตั้งแต่ตรงนี้ตรงนี้ยังไม่ validator และ ดาต้าเบส -->
    <div class="card">
        <div class="card-header">
            ที่อยู่ตามทะเบียนบ้าน
        </div>
        <div class="card-body">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">ประเทศ</label>
                <div class="col-sm-10">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input class="custom-control-input" type="radio" name="country" id="country1" value="ไทย" checked>
                        <label class="custom-control-label" for="country1">ไทย</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input class="custom-control-input" type="radio" name="country" id="country2" value="ไทย">
                        <label class="custom-control-label" for="country2">อื่นๆ</label>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <label class="col-sm-2 col-form-label">จังหวัด</label>
                <div class="form-group col-md-6 nav-container">
                    <select class="form-control nav" name="province_id" id="province_id" value="{{ old('province_id') }}">
                        @foreach($provinces as $i => $province)
                        <option value="{{ $province->id }}">{{ $province->province_name }}
                            </option/> @endforeach
                    </select>
                </div>
            </div>
            <div class="form-row">
                <label class="col-sm-2 col-form-label">อำเภอ/เขต</label>
                <div class="form-group col-md-6 nav-container">
                    <select class="form-control nav" name="district_id" id="district_id" value="{{ old('district_id') }}">
                        @foreach($districts as $i => $district)
                        <option value="{{ $district->id }}">{{ $district->district_name }}
                            </option/> @endforeach
                    </select>
                </div>
            </div>
            <div class="form-row">
                <label class="col-sm-2 col-form-label">ตำบล</label>
                <div class="form-group col-md-6 nav-contianer">
                    <select class="form-control" name="sub_district_id" id="sub_district_id" value="{{ old('sub_district_id') }}">
                        @foreach($sub_districts as $i => $sub_district)
                        <option value="{{ $sub_district->id }}">{{ $sub_district->sub_district_name }}
                            </option/> @endforeach
                    </select>
                </div>
            </div>
            <div class="form-row">
                <label class="col-sm-2 col-form-label">รหัสไปรษณีย์</label>
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" id="post_code" name="post_code" placeholder="" required value="{{ old('post_code') }}">
                </div>
            </div>
            <div class="form-row">
                <label class="col-sm-2 col-form-label">ที่อยู่</label>
                <div class="form-group col-md-6">
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
            <div class="form-row">
                <label class="col-sm-2 col-form-label">ชื่อหน่วยงาน</label>
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" id="company_name" name="company_name" placeholder="" required value="{{ old('company_name') }}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">ประเทศ</label>
                <div class="col-sm-10">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input class="custom-control-input" type="radio" name="country" id="country1" value="ไทย" checked>
                        <label class="custom-control-label" for="country1">ไทย</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input class="custom-control-input" type="radio" name="country" id="country2" value="ไทย">
                        <label class="custom-control-label" for="country2">อื่นๆ</label>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <label class="col-sm-2 col-form-label">จังหวัด</label>
                <div class="form-group col-md-6 nav-container">
                    <select class="form-control nav" name="wk_sprovince_id" id="wk_sprovince_id" value="{{ old('wk_sprovince_id') }}">
                        @foreach($provinces as $i => $province)
                        <option value="{{ $province->id }}">{{ $province->province_name }}
                            </option/> @endforeach
                    </select>
                </div>
            </div>
            <div class="form-row">
                <label class="col-sm-2 col-form-label">ตำแหน่ง</label>
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" id="id_card" name="id_card" placeholder="" required value="{{ old('id_card') }}">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <label class="col-sm-2 col-form-label">ปี (พ.ศ.)</label>
                    <div class=" input-group col-md-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">จาก</span>
                        </div>
                        <input type="date" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" id="work_start"
                            name="work_start">
                    </div>
                    <div class=" input-group col-md-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">ถึง</span>
                        </div>
                        <input type="date" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" id="work_end" name="work_end">
                    </div>
                </div>
            </div>
            <div class="form-row">
                <label class="col-sm-2 col-form-label">ลักษณะงานที่รับผิดชอบ</label>
                <div class="form-group col-md-6">
                    <textarea id="message" name="phone" class="form-control"></textarea>
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
            <div class="form-row">
                <label class="col-sm-2 col-form-label">สถาบันศึกษา</label>
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" id="id_card" name="id_card" placeholder="" required value="{{ old('id_card') }}">
                </div>
            </div>

            <div class="form-row">
                <label class="col-sm-2 col-form-label">คณะหรือเทียบเท่า</label>
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" id="id_card" name="id_card" placeholder="" required value="{{ old('id_card') }}">
                </div>
            </div>

            <div class="form-row">
                <label class="col-sm-2 col-form-label">วุฒฺิการศึกษา</label>
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" id="id_card" name="id_card" placeholder="" required value="{{ old('id_card') }}">
                </div>
            </div>
            <div class="form-row">
                <label class="col-sm-2 col-form-label">สาขาวิชา</label>
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" id="id_card" name="id_card" placeholder="" required value="{{ old('id_card') }}">
                </div>
            </div>
            <div class="form-row">
                <label class="col-sm-2 col-form-label">ระดับการศึกษา</label>
                <div class="form-group col-md-6 nav-container">
                    <select class="form-control nav">
                        <option value="ต่ำกว่าปริญญาตรี">ต่ำกว่าปริญญาตรี</option>
                        <option value="ปริญญาตี">ปริญญาตี</option>
                        <option value="ปริญญาโท">ปริญญาโท</option>
                        <option value="ปริญญาเอก">ปริญญาเอก</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">ประเทศ</label>
                <div class="col-sm-10">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input class="custom-control-input" type="radio" name="country" id="country1" value="ไทย" checked>
                        <label class="custom-control-label" for="country1">ไทย</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input class="custom-control-input" type="radio" name="country" id="country2" value="ไทย">
                        <label class="custom-control-label" for="country2">อื่นๆ</label>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <label class="col-sm-2 col-form-label">ปีที่จบ</label>
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" id="id_card" name="id_card" placeholder="" required value="{{ old('id_card') }}">
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
            <div class="form-row">
                <label class="col-sm-2 col-form-label">ชื่อโครงการ</label>
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" id="id_card" name="id_card" placeholder="" required value="{{ old('id_card') }}">
                </div>
            </div>
            <div class="form-row">
                <label class="col-sm-2 col-form-label">ชื่อกิจกรรม</label>
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" id="id_card" name="id_card" placeholder="" required value="{{ old('id_card') }}">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <label class="col-sm-2 col-form-label">วันที่</label>
                    <div class=" input-group col-md-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">เริ่ม</span>
                        </div>
                        <input type="date" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <div class=" input-group col-md-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">สิ้นสุด</span>
                        </div>
                        <input type="date" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                    </div>
                </div>
            </div>
            <div class="form-row">
                <label class="col-sm-2 col-form-label">บทบาท</label>
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" id="id_card" name="id_card" placeholder="" required value="{{ old('id_card') }}">
                </div>
            </div>
            <div class="form-row">
                <label class="col-sm-2 col-form-label">คำอธิบายสั้นๆเกี่ยวกับกิจกรรม</label>
                <div class="form-group col-md-6">
                    <textarea id="message" name="phone" class="form-control"></textarea>
                </div>
            </div>
            <br></br>
            งานวิจัย
            <hr align="">
            <div class="form-row">
                <label class="col-sm-2 col-form-label">ชื่อผลงาน</label>
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" id="id_card" name="id_card" placeholder="" required value="{{ old('id_card') }}">
                </div>
            </div>
            <div class="form-row">
                <label class="col-sm-2 col-form-label">บทบาทในงานวิจัย</label>
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" id="id_card" name="id_card" placeholder="" required value="{{ old('id_card') }}">
                </div>
            </div>
            <div class="form-row">
                <label class="col-sm-2 col-form-label">สถานะงานวิจัย</label>
                <div class="form-group col-md-6 nav-container">
                    <select class="form-control nav">
                        <option value="กำลังวิจัย">กำลังวิจัย</option>
                        <option value="ตีพิมพ์">ตีพิมพ์</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <label class="col-sm-2 col-form-label">คำอธิบายสั้นๆเกี่ยวกับงานวิจัย</label>
                <div class="form-group col-md-6">
                    <textarea id="message" name="phone" class="form-control"></textarea>
                </div>
            </div>
        </div>
    </div>
    </br>
    <!-- expert -->
    <div class="card">
        <div class="card-header">
            ความเชี่ยวชาญ
        </div>
        <div class="card-body">
            <div class="row">
                <label class="col-sm-2 col-form-label">สาขาความเชี่ยวชาญ</label>
                <div class="form-group col-md-6 nav-container">
                    <select class="form-control nav">
                        <option value="" selected disabled>เกษตรและพัฒนาชนบท</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <label class="col-sm-2 col-form-label">ชื่อความเชี่ยวชาญ</label>
                <div class="form-group col-md-6 nav-container">
                    <select class="form-control nav">
                        <option value="" selected disabled>การวางแผนพัฒนาชนบท</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <label class="col-sm-2 ">เรื่องที่สนใจ</label>
                <div class="form-group col-md-6">
                    <input type="text" class="form-control nav" id="id_card" name="id_card" placeholder="" required value="{{ old('id_card') }}">
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
            <a href="{{ url('admin/expert') }}" class="btn btn-danger">ยกเลิก</a>
        </div>
    </div>
</form>
<br>
</br>

@endsection