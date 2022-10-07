@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    تنظیمات صفحه اصلی سایت 
                </div>
                <div class="card-body">
                    <ul>
                        <li><a href="{{ route('home') }}">داشبرد</a></li>
                        <li><a href="{{ route('home-page') }}">تنظیمات پخش خانه</a></li>
                        <li><a href="">تنظیمات پخش مهارت ها</a></li>
                        <li><a href="">تنظیمات بلاگ ها</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">تنظیمات پخش خانه وب سایت</div>

                <div class="card-body"> 
                    تنظیمات پخش خانه 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
