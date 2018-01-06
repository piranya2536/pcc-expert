@extends('admins.layout')

@section('sidebar')
    @parent
    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <div>
        <div class="col-md-10 col-md-offset-1">
            <div class="form-group has-error">
                @foreach($errors->all() as $val)
                <span class="help-block">
                    <strong>{{ $val }}</strong>
                </span><br>
                @endforeach
            </div>
            <form name="form" action="{{ url('admin/expert') }}" method="post">
                <table class="table">
                    <tbody>
                        <tr>
                            <th colspan=4>ข้อมูลเบื้องต้น</th>
                        </tr>
                        <tr>
                            <td>คำนำหน้าชื่อ</td>
                            <td colspan=3>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="title" id="title" value="นาย">
                                    <label class="form-check-label" for="title">นาย</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="title" id="title" value="นาง">
                                    <label class="form-check-label" for="title">นาง</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="title" id="title" value="นางสาว">
                                    <label class="form-check-label" for="title">นางสาว</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="title" id="title" value="ดร.">
                                    <label class="form-check-label" for="title">ดร.</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="title" id="title" value="อื่นๆ" checked>
                                    <label class="form-check-label" for="title">อื่นๆ</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>ตำแหน่งทางวิชาการ</td>
                            <td colspan=3>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="academic_pos" id="academic_pos" value="ศ.">
                                    <label class="form-check-label" for="academic_pos">ศ.</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="academic_pos" id="academic_pos" value="รศ.">
                                    <label class="form-check-label" for="academic_pos">รศ.</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="academic_pos" id="academic_pos" value="ผศ.">
                                    <label class="form-check-label" for="academic_pos">ผศ.</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="academic_pos" id="academic_pos" value="อื่นๆ" checked>
                                    <label class="form-check-label" for="academic_pos">อื่นๆ</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>ชื่อ (ไทย)</td>
                            <td>
                                <input type="text" class="form-control" id="fname_th" name="fname_th" placeholder="" required value="{{ old('fname_th') }}"> 
                            </td>
                            <td>นามสกุล (ไทย)</td>
                            <td>
                                <input type="text" class="form-control" id="lname_th" name="lname_th" placeholder="" required value="{{ old('lname_th') }}">
                            </td>
                        </tr>
                        <tr>
                            <td>ชื่อ (อังกฤษ)</td>
                            <td>
                                <input type="text" class="form-control" id="fname_th" name="fname_en" placeholder="" required value="{{ old('fname_en') }}">
                            </td>
                            <td>นามสกุล (อังกฤษ)</td>
                            <td>
                                <input type="text" class="form-control" id="lname_th" name="lname_en" placeholder="" required value="{{ old('lname_en') }}">
                            </td>
                        </tr>
                        <tr>
                            <td>เพศ</td>
                            <td colspan=3>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="gender" value="ชาย">
                                    <label class="form-check-label" for="gender">ชาย</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="gender" value="หญิง">
                                    <label class="form-check-label" for="gender">หญิง</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="gender" value="อื่นๆ" checked>
                                    <label class="form-check-label" for="gender">อื่นๆ</label>
                                </div>
                            </td>
                        <tr>
                            <td>วันเกิด</td>
                            <td >
                                <input type="date" class="form-control" id="birthday" name="birthday" placeholder="" required value="{{ old('birthday') }}">
                            </td>
                            <td colspan=2></td>
                        </tr>
                        <tr>
                            <td>เลขบัตรประจำตัวประชาชน</td>
                            <td>
                                <input type="text" class="form-control" id="id_card" name="id_card" placeholder="" required value="{{ old('id_card') }}">
                            </td>
                            <td colspan=2></td>
                        </tr>
                        <tr>
                        <tr>
                            <td>สัญชาติ</td>
                            <td>
                                <input type="text" class="form-control" id="nationality" name="nationality" placeholder="" required value="{{ old('nationality') }}">
                            </td>
                            <td colspan=2></td>
                        </tr>
                        <tr>
                            <td>เคยได้รับทุนจากรัฐบาลหรือไม่</td>
                            <td colspan=3>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="bursary" id="bursary" value="1">
                                    <label class="form-check-label" for="bursary">ใช่</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="bursary" id="inlineRadio2" value="0" checked>
                                    <label class="form-check-label" for="bursary">ไม่ใช่</label>
                                </div>
                        </tr>
                        <tr>
                            <th colspan=4>สังกัด</th>
                        </tr>
                        <tr>
                            <th colspan=4>ข้อมูลในการติดต่อ</th>
                        </tr>
                        <tr>
                            <td>โทรศัพท์</td>
                            <td>
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="" value="{{ old('phone') }}">
                            </td>
                            <td colspan=2></td>
                        </tr>
                        <tr>
                            <td>ต่อ(โทรศัพท์)</td>
                            <td>
                                <input type="text" class="form-control" id="phone_list" name="phone_list" placeholder="" value="{{ old('phone_list') }}">
                            </td>
                            <td colspan=2></td>
                        </tr>
                        <tr>
                            <td>โทรสาร</td>
                            <td>
                                <input type="text" class="form-control" id="fax" name="fax" placeholder="" value="{{ old('fax') }}">
                            </td>
                            <td colspan=2></td>
                        </tr>
                        <tr>
                            <td>ต่อ(โทรสาร)</td>
                            <td>
                                <input type="text" class="form-control" id="fax_list" name="fax_list" placeholder="" value="{{ old('fax_list') }}">
                            </td>
                            <td colspan=2></td>
                        </tr>
                        <tr>
                            <td>มือถือ</td>
                            <td>
                                <input type="text" class="form-control" id="mobile" name="mobile" placeholder="" required value="{{ old('mobile') }}">
                            </td>
                            <td colspan=2></td>
                        </tr>
                        <tr>
                            <td>อีเมล์</td>
                            <td>
                                <input type="text" class="form-control" id="email" name="email" placeholder="" required value="{{ old('email') }}">
                            </td>
                            <td colspan=2></td>
                        </tr>
                        <tr>
                            <td>บัญชี Facebook</td>
                            <td>
                                <input type="text" class="form-control" id="facebook" name="facebook" placeholder="" value="{{ old('facebook') }}">
                            </td>
                            <td colspan=2></td>
                        </tr>
                        <tr>
                            <td>บัญชี Twitter</td>
                            <td>
                                <input type="text" class="form-control" id="twitter" name="twitter" placeholder="" value="{{ old('twitter') }}">
                            </td>
                            <td colspan=2></td>
                        </tr>
                        <tr>
                            <td>บัญชี Line</td>
                            <td>
                                <input type="text" class="form-control" id="line" name="line" placeholder="" value="{{ old('line') }}">
                            </td>
                            <td colspan=2></td>
                        </tr>

                        <tr>
                            <th colspan=4>ที่อยู่ปัจจุบัน</th>
                        </tr>
                        <tr>
                            <td>ที่อยู่</td>
                            <td>
                                <input type="text" class="form-control" id="address" name="address" placeholder="" required value="{{ old('address') }}">
                            </td>
                            <td colspan=2></td>
                        </tr>
                        <tr>
                            <td>ประเทศ</td>
                            <td colspan=3>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="country" id="country" value="ไทย" checked>
                                    <label class="form-check-label" for="country">ไทย</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="country" id="country" value="อื่นๆ">
                                    <label class="form-check-label" for="country">อื่นๆ</label>
                                </div>
                        </tr>
                        <tr>
                            <td>จังหวัด</td>
                            <td>
                                <select name="province_id" id="province_id" value="{{ old('province_id') }}">
                                    @foreach($provinces as $i => $province)
                                    <option value="{{ $province->id }}">{{ $province->province_name }}</option/>
                                    @endforeach    
                                </select>
                            </td>
                            <td colspan=2></td>
                        </tr>
                        <tr>
                            <td>อำเภอ/เขต</td>
                            <td>
                                <select name="district_id" id="district_id" value="{{ old('district_id') }}">
                                    <option value="2">กะทู้</option/>
                                </select>
                            </td>
                            <td colspan=2></td>
                        </tr>
                        <tr>
                            <td>ตำบล/แขวง</td>
                            <td>
                                <select name="sub_district_id" id="sub_district_id" value="{{ old('sub_district_id') }}">
                                    <option value="1">กะทู้</option/>
                                </select>
                            </td>
                            <td colspan=2></td>
                        </tr>
                        <tr>
                            <td>รหัสไปรษณีย์</td>
                            <td>
                                <input type="text" class="form-control" id="post_code" name="post_code" placeholder="" required value="{{ old('post_code') }}">
                            </td>
                            <td colspan=2></td>
                        </tr>

                        <tr>
                            <td></td>
                            <td>
                                {{ csrf_field() }}
                                <input type="submit" class="btn btn-primary" id="submit" value="บันทึก">
                                <a href="{{ url('admin/expert') }}" class="btn btn-danger">ยกเลิก</a>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </form>
        </div>
    </div>
@endsection