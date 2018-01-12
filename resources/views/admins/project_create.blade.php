@extends('admins.layout') @section('content')
<br>

<form name="form" action="{{ url('admin/project') }}" method="post">
    <div class="card">
        <div class="card-header">
            ข้อมูลโครงการ
        </div>
        <div class="card-body">
            <div class="form-row">
                <label class="col-sm-2 col-form-label">ปีงบประมาณ</label>
                <div class="form-group col-md-6">
                    <input type='text' class="form-control" id='year_fund' name="year_fund" required value="{{ old('year_fund') }}">
                </div>
            </div>
            <div class="form-row">
                <label class="col-sm-2 col-form-label">รหัสโครงการ</label>
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" id="project_code" name="project_code" placeholder="" required value="{{ old('project_code') }}">
                </div>
            </div>
            <div class="form-row">
                <label class="col-sm-2 col-form-label">ชื่อโครงการ</label>
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" id="project_name" name="project_name" placeholder="" required value="{{ old('project_name') }}">
                </div>
            </div>
            <div class="form-row">
                <label class="col-sm-2 col-form-label">แหล่งงบประมาณ</label>
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" id="fund" name="fund" placeholder="" required value="{{ old('fund') }}">
                </div>
            </div>
            <div class="form-row">
                <label class="col-sm-2 col-form-label">หน่วยงาน</label>
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" id="dep" name="dep" placeholder="" required value="{{ old('dep') }}">
                </div>
            </div>
            <div class="form-row">
                <label class="col-sm-2 col-form-label">ชื่อกิจกรรม/หลักสูตร</label>
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" id="activity_name" name="activity_name" placeholder="" required value="{{ old('activity_name') }}">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <label class="col-sm-2 col-form-label">วันที่จัดกิจกรรม</label>
                    <div class=" input-group col-md-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">จาก</span>
                        </div>
                        <input type="date" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" id="date_start" name="date_start" required value="{{ old('date_start') }}">
                    </div>
                    <div class=" input-group col-md-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">ถึง</span>
                        </div>
                        <input type="date" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" id="date_end" name="date_end" required value="{{ old('date_end') }}">
                    </div>
                </div>
            </div>
            <div class="form-row">
                <label class="col-sm-2 col-form-label">ชื่อวิทยากร</label>
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" id="expert_id" name="expert_id" placeholder="" required value="{{ old('expert_id') }}">
                </div>
            </div>
            <div class="form-row">
                <label class="col-sm-2 col-form-label">จำนวนผู้เข้าร่วมโครงการ</label>
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" id="participant_amount" name="participant_amount" placeholder="" required value="{{ old('audit_amount') }}">
                </div>
            </div>
            <div class="form-row">
                <label class="col-sm-2 col-form-label">สถานะ</label>
                <div class="form-group col-md-6 nav-container">
                    <select class="form-control nav" name="status" id="status" required value="{{ old('status') }}">
                        <option value="1">เสร็จสิ้นโครงการ
                        </option>
                        <option value="2">กำลังดำเนินการ
                        </option>
                        <option value="0">ไม่สามารถดำเนินการได้
                        </option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5"></div>
            <div class="col-md-5"></div>
            <div class="col-md-2">{{ csrf_field() }}
                <input type="submit" class="btn btn-primary" id="submit" value="{{ old('') }}บันทึก">
                <a href="{{ url( 'admin/project') }}" class="btn btn-danger">ยกเลิก</a>
            </div>
        </div>
        </br>
    </div>
    <script type="text/javascript">
        $(function () {
            $('#year_fund').datepicker({
                format: "yyyy",
                startView: 2,
                minViewMode: 2,
                autoclose: true,
                thaiyear: true
            });
        });
    </script>

    @endsection