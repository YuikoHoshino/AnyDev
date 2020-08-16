@extends('layouts.app')
@section('title', 'PDF Generate')
@section('style')
<style type="text/css">
    @font-face {
        font-family: ipag;
        font-style: normal;
        font-weight: normal;
        src: url('{{ storage_path('fonts/ipag.ttf') }}') format('truetype');
    }
    @font-face {
        font-family: ipag;
        font-style: bold;
        font-weight: bold;
        src: url('{{ storage_path('fonts/ipag.ttf') }}') format('truetype');
    }
    body {
        font-family: ipag !important;
    }
</style>
@endsection
@section('content')
@include('layouts.nav')
<h4>名前 : 星野　唯子</h4>
<h5>期間 : 2020/08/01 ~ 2020/08/31</h5>
    <table id="tablePreview" class="table table-striped table-bordered">
        <thead class="mdb-color lighten-5">
            <tr>
                <th>日付</th>
                <th>出勤時間</th>
                <th>退勤時間</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">mm/dd</th>
                <th>hh:mm</th>
                <th>hh:mm</th>
            </tr>
            <tr>
                <th scope="row">mm/dd</th>
                <th>hh:mm</th>
                <th>hh:mm</th>
            </tr>
            <tr>
                <th scope="row">mm/dd</th>
                <th>hh:mm</th>
                <th>hh:mm</th>
            </tr>
            <tr>
                <th scope="row">mm/dd</th>
                <th>hh:mm</th>
                <th>hh:mm</th>
            </tr>
            <tr>
                <th scope="row">mm/dd</th>
                <th>hh:mm</th>
                <th>hh:mm</th>
            </tr>
        </tbody>
    </table>
</body>
</html>
