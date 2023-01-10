@extends('admin.layouts.master')


@section('head-tag')
    <title>ایجاد دسته بندی</title>
@endsection




@section('content')

    <nav class="font-size-12">
        <ol class="breadcrumb">
            <li class="breadcrumb-item" aria-current="page"> <a href="{{ route('admin.home') }}">خانه</a></li>
            <li class="breadcrumb-item"> <a href="">بخش فروش</a></li>
            <li class="breadcrumb-item active"> ایجاد دسته بندی </li>
        </ol>
    </nav>

     <section class="row">
        <section class="col-12">
            <section class="main-body-container">
                <section class="main-body-container-header">
                    <h5>
                        ایجاد دسته بندی 
                    </h5>
                </section>

                 <section class="d-flex justify-content-between align-items-center py-4 border-bottom">
                    <a class="btn btn-info btn-sm" href="{{route('admin.market.category.index')}}">بازگشت</a>
                </section>

                <section>
                   <form action="">
                        <section class="row">

                            <section class="col-12 col-md-6">
                                <label for="">نام دسته بندی</label>
                                <input type="text" class="form-control form-control-sm" placeholder="نام دسته بندی">
                            </section>

                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">دسته ی والد</label>
                                    <select id="" class="form-control form-control-sm" name="">
                                        <option>کالای الکتریکی</option>
                                        <option>کالای الکتریکی</option>
                                        <option>کالای الکتریکی</option>
                                    </select>
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
