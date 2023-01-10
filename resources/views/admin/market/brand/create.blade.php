@extends('admin.layouts.master')


@section('head-tag')
    <title>اضافه کردن برند جدید</title>
@endsection




@section('content')

    <nav class="font-size-12">
        <ol class="breadcrumb">
            <li class="breadcrumb-item" aria-current="page"> <a href="{{ route('admin.home') }}">خانه</a></li>
            <li class="breadcrumb-item"> <a href="">بخش فروش</a></li>
            <li class="breadcrumb-item active"> اضافه کردن برند جدید </li>
        </ol>
    </nav>

     <section class="row">
        <section class="col-12">
            <section class="main-body-container">
                <section class="main-body-container-header">
                    <h5>
                     اضافه کردن برند جدید 
                    </h5>
                </section>

                 <section class="d-flex justify-content-between align-items-center py-4 border-bottom">
                    <a class="btn btn-info btn-sm" href="{{route('admin.market.brand.index')}}">بازگشت</a>
                </section>

                <section class="mt-3">
                   <form action="">
                        <section class="row">

                            <section class="col-12 col-md-6">
                                <label for="">نام برند</label>
                                <input type="text" class="form-control form-control-sm" placeholder="نام برند">
                            </section>

                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">لوگو</label>
                                    <input id="" class="form-control-file" type="file" name="logo">
                                </div>
                            </section>
                        </section>
                        <section class="col-12">
                            <button class="btn btn-primary btn-sm" type="submit">ثبت</button>
                        </section>
                   </form>
                </section>
            </section>
        </section>
    </section>

@endsection
