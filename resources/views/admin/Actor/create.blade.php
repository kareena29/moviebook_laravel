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
                Create Actors
            </h1>

        </section>

        <section class="content">
            <div class="row">
                <div class="col-md-12" style="font-size: 15px">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title" style="font-size: 18px;padding: 5px">Actor</h3>
                        </div>
                        @if(count($errors) >0)
                            @foreach($errors->all() as $error)
                                <p class="alert alert-danger">{{$error}}</p>
                            @endforeach
                        @endif
                        @if (session()->has('message'))
                            <p class="alert-default-success">{{session('message')}}</p>
                        @endif

                        <form role="form" action="{{route('actor-save')}}" method="post" enctype="multipart/form-data">

                            {{csrf_field()}}
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="actor_name">Actor Name</label>
                                    <input type="text" class="form-control"  style="font-size: 15px;height: 35px" id="actor_name" name="actor_name" placeholder="Actor Name">
                                </div>

                                <div class="form-group">
                                    <label for="actor_bio">Actor Bio</label>
                                    <textarea type="text" name="actor_bio" class="input p-2 w-100" placeholder="Actor Bio-Data" style="height: 150px;" required></textarea>
                                    {{--                                    <input type="text" class="form-control" style="font-size: 15px;height: 35px" id="bio" name="bio" placeholder="bio">--}}
                                </div>

                                <div class="form-group">
                                    <label for="actor_dob">Birth-Date</label>
                                    <input type="date" class="form-control" style="font-size: 15px;height: 35px" id="actor_dob" name="actor_dob" placeholder="birth date">
                                </div>

                                <div class="form-group">
                                    <label for="actor_image">Actor Image</label>
                                    <input type="file"  name="actor_image" id="actor_image" class="input p-2 w-100">
                                </div>

                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary" style="font-size: 18px">Submit</button>
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
