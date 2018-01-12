@extends('admins.layout') @section('sidebar') 
@parent
@endsection
@section('head')
<link href="{{ asset('assets/css/styleproject.css') }}" rel="stylesheet">
@endsection 
@section('content')
<br>
<div class="container">
    
    <div class="row">
        <div class="panel panel-primary filterable">
            <div class="panel-heading">
                <h3 class="panel-title">ข้อมูลโครงการ</h3>
                <hr><br>
                <div class="pull-right">
                    <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr class="filters">
                        <th><input type="text" class="form-control" placeholder="ลำดับที่" disabled></th>
                        <th><input type="text" class="form-control" placeholder="ปีงบประมาณ" disabled></th>
                        <th><input type="text" class="form-control" placeholder="รหัสโครงการ" disabled></th>
                        <th><input type="text" class="form-control" placeholder="ชื่อโครการ" disabled></th>
                        <th><input type="text" class="form-control" placeholder="ชื่อกิจกรรม/หลักสูตร" disabled></th>
                        <th><input type="text" class="form-control" placeholder="วันที่เริ่ม" disabled></th>
                        <th><input type="text" class="form-control" placeholder="วันที่สิ้นสุด" disabled></th>
                        <th><input type="text" class="form-control" placeholder="ชื่อวิทยากร" disabled></th>
                        <th><input type="text" class="form-control" placeholder="จำนวนผู้เข้าร่วม" disabled></th>
                        <th><input type="text" class="form-control" placeholder="แหล่งงบประมาณ" disabled></th>
                        <th><input type="text" class="form-control" placeholder="หน่วยงาน" disabled></th>
                        <th><input type="text" class="form-control" placeholder="สถานะ" disabled></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
<script src="{{ asset('assets/js/project.js') }}"></script>
@endsection