@extends('admin/layouts/app')
@section('headSection')
    <link rel="stylesheet" href="{{asset('plugins/select2/css/select2.min.css')}}">

    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
@endsection

@section('main-content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1 style="font-size: 24px">
                Add City
            </h1>

        </section>

        <section class="content">
            <div class="row">
                <div class="col-md-12" style="font-size: 15px">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title" style="font-size: 18px;padding: 5px">City</h3>
                        </div>
                        @if(count($errors) >0)
                            @foreach($errors->all() as $error)
                                <p class="alert alert-danger">{{$error}}</p>
                            @endforeach
                        @endif
                        @if (session()->has('message'))
                            <p class="alert-default-success">{{session('message')}}</p>
                        @endif

                        <form role="form" action="{{route('city-save')}}" method="post" enctype="multipart/form-data">

                            {{csrf_field()}}
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="city_name">City</label>
                                    <input type="text" class="form-control"  style="font-size: 15px;height: 35px" id="city_name" name="city_name" placeholder="City Name">
                                </div>

                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary" style="font-size: 18px">ADD</button>
                                <a type="button"  href="" class="btn btn-warning" style="font-size: 18px">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@section('footerSection')
    <script src="{{asset('plugins/select2/js/select2.full.min.js')}}"></script>
    <script>
        $(document).ready(function (){
            $(".select2").select2();
        });

    </script>
@endsection

