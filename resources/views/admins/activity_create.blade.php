@extends('layouts.admin') @section('content')
<br>

<div class="content">
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">ข้อมูลกิจกรรม
                <a class="heading-elements-toggle">
                    <i class="icon-more"></i>
                </a>
            </h5>
        </div>
        <div class="panel-body">
            <form name="form" action="{{ url('admin/activity') }}" method="post" class="form-horizontal">
                <div class="form-group">
                    <label class="col-sm-2 coltrol-label">ชื่อโครงการ</label>
                    <div class="col-md-6">
                        <select class="form-control" id="project_id" name="project_id">
                            @foreach($projects as $value)
                            <option value="{{ $value->id }}">{{ $value->project_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 coltrol-label">ชื่อกิจกรรม/หลักสูตร</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="activity_name" name="activity_name" placeholder="" required value="{{ old('activity_name') }}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">จัดกิจกรรมวันที่</label>
                    <div class="col-md-6 row">
                        <div class="col-md-6">
                            <div class="form-group has-feedback has-feedback-left">
                                <input type="date" class="form-control input-xlg" placeholder="" name="date_start" value="{{ old('date_start') }}">
                                <div class="form-control-feedback">
                                    เริ่ม
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group has-feedback has-feedback-left">
                                <input type="date" class="form-control input-xlg" placeholder="" name="date_end" value="{{ old('date_end') }}">
                                <div class="form-control-feedback">
                                    ถึง
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 coltrol-label">ชื่อวิทยากร</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="expert_id" name="expert_id" placeholder="" required value="{{ old('expert_id') }}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 coltrol-label">จำนวนผู้เข้าร่วมโครงการ</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="participant_amount" name="participant_amount" placeholder="" required value="{{ old('participant_amount') }}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 coltrol-label">สถานะ</label>
                    <div class="col-md-6 nav-container">
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
                <input type="submit" class="btn btn-primary" id="submit" value="บันทึก">
                <a href="{{ url( 'admin/project') }}" class="btn btn-danger">ยกเลิก</a>
            </div>
        </div>
        </br>
    </div>
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