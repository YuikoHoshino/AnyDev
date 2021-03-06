@extends('layouts.app')
@section('title', 'PDF Generate')
@section('content')
@include('layouts.nav')
<div class="container">
    <div class="card mt-3">
      <div class="card-body d-flex flex-row">
        <i class="fas fa-user-circle fa-3x mr-1"></i>
        <div>
          <div class="font-weight-bold">
            ユーザー名
            <form method="post" action="{{ url('pdf_download') }}">
                @csrf
                <button type="submit" class="btn btn-outline-secondary btn-rounded waves-effect btn-sm">PDF Downloaded</button>
            </form>
          </div>
        </div>
      </div>
      <div class="card-body pt-0 pb-2">
          <div class="table-responsive">
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
          </div>
      </div>
    </div>
@endsection
