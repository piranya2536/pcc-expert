@extends('layouts.admin')s @section('content')


<div class="content">
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">ข้อมูลโครงการ
                <a class="heading-elements-toggle">
                    <i class="icon-more"></i>
                </a>
            </h5>
        </div>
        <div class="panel-body">
            <form name="form" action="{{ url('admin/project') }}" method="post" class="form-horizontal">
              <div class="form-group">
                    <label class="col-sm-2 col-form-label">ปีงบประมาณ</label>
                    <div class="form-group col-md-6">
                        <input type='text' class="form-control" id='year_fund' name="year_fund" required value="{{ old('year_fund') }}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-form-label">รหัสโครงการ</label>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" id="project_code" name="project_code" placeholder="" required value="{{ old('project_code') }}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-form-label">ชื่อโครงการ</label>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" id="project_name" name="project_name" placeholder="" required value="{{ old('project_name') }}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-form-label">แหล่งงบประมาณ</label>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" id="fund" name="fund" placeholder="" required value="{{ old('fund') }}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-form-label">หน่วยงาน</label>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" id="dep" name="dep" placeholder="" required value="{{ old('dep') }}">
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