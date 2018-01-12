@extends('admins.layout') @section('content')
<br>

<form name="form" action="{{ url('admin/project', $project->id) }}" method="post">
    <div class="card">
        <div class="card-header">
            ข้อมูลโครงการ
        </div>
        <div class="card-body">
            <div class="form-row">
                <label class="col-sm-2 col-form-label">ปีงบประมาณ</label>
                <div class="form-group col-md-6">
                    <input type='text' class="form-control" id='year_fund' name="year_fund" required value="{{ $project->year_fund }}">
                </div>
            </div>
            <div class="form-row">
                <label class="col-sm-2 col-form-label">รหัสโครงการ</label>
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" id="project_code" name="project_code" placeholder="" required value="{{ $project->project_code }}">
                </div>
            </div>
            <div class="form-row">
                <label class="col-sm-2 col-form-label">ชื่อโครงการ</label>
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" id="project_name" name="project_name" placeholder="" required value="{{ $project->project_name }}">
                </div>
            </div>
            <div class="form-row">
                <label class="col-sm-2 col-form-label">แหล่งงบประมาณ</label>
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" id="fund" name="fund" placeholder="" required value="{{ $project->fund }}">
                </div>
            </div>
            <div class="form-row">
                <label class="col-sm-2 col-form-label">หน่วยงาน</label>
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" id="dep" name="dep" placeholder="" required value="{{ $project->dep }}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5"></div>
            <div class="col-md-5"></div>
            <div class="col-md-2">{{ csrf_field() }}
                {{ method_field('PUT') }}
                <input type="submit" class="btn btn-primary" id="submit" value="บันทึก">
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