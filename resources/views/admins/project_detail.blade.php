@extends('layouts.admin')

@section('content')
<br>
<div class ='content'>
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-tittle">ข้อมูลโครงการ</h5>
        </div>
        <div class="panel-body">
        <form name="form" action="" method="post" class="form-horizontal">
            <div class="form-group">
                <label class="col-sm-2 col-form-label">ปีงบประมาณ</label>
                <div class="form-group col-md-6">
                    <label class="col-form-label">{{ $project->year_fund }}</label>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-form-label">รหัสโครงการ</label>
                <div class="form-group col-md-6">
                <label class="col-form-label">{{ $project->project_code }}</label>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-form-label">ชื่อโครงการ</label>
                <div class="form-group col-md-6">
                    <label class="col-form-label">{{ $project->project_name }}</label>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-form-label">แหล่งงบประมาณ</label>
                <div class="form-group col-md-6">
                <label class="col-form-label">{{ $project->fund }}</label>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-form-label">หน่วยงาน</label>
                <div class="form-group col-md-6">
                <label class="col-form-label">{{ $project->dep }}</label>
                </div>
            </div>
            @foreach($project->activity as $activity)
            <hr>
            <div class="form-group">
                <label class="col-sm-2 col-form-label">ชื่อกิจกรรม/หลักสูตร</label>
                <label class="col-form-label">{{ $activity->activity_name or '' }}</label>
            </div>
            <div class="form-group">
                
                    <label class="col-sm-2 col-form-label">วันที่จัดกิจกรรม</label>
                    <label class="col-form-label">จาก {{ $activity->date_start or '' }}</label> &nbsp;&nbsp;&nbsp;
                    <label class="col-form-label">ถึง {{ $activity->date_end or '' }}</label>
                
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-form-label">ชื่อวิทยากร</label>
                <label class="col-form-label">{{ $activity->expert_id or '' }}</label>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-form-label">จำนวนผู้เข้าร่วมโครงการ</label>
                <div class="form-group col-md-6">
                    <label class="col-form-label">{{ $activity->participant_amount or '' }}</label>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-form-label">สถานะ</label>
                    @if($activity->status == 0)
                        <label class="badge badge-danger">ไม่สามารถดำเนินการได้</label></h1>
                    @elseif($activity->sataus == 1)
                        <label class="badge badge-success">เสร็จสิ้นโครงการ</label></h1>
                    @else
                        <label class="badge badge-primary">กำลังดำเนินการ</label></h1>
                    @endif
            </div>
            @endforeach
            <div class="col-sm-12">
                <!-- <div class="col-md-11"></div> -->
                <div class="text-right">
                    <a href="{{ url( 'admin/project') }}" class="btn btn-primary">ย้อนกลับ</a>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
    @endsection