@extends('admin/layouts/app')
@section('headSection')
    <link rel="stylesheet" href="{{asset("plugins/datatables-buttons/css/buttons.bootstrap4.min.css") }}">

    <link rel="stylesheet" href="{{asset("plugins/datatables-bs4/css/dataTables.bootstrap4.min.css") }}">
    <link rel="stylesheet" href="{{asset("plugins/datatables-responsive/css/responsive.bootstrap4.min.css") }}">
    <link rel="stylesheet" href="{{asset("plugins/datatables-buttons/css/buttons.bootstrap4.min.css") }}">


    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

@endsection
@section('main-content')


    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">

                    <div class="col-sm-6">
                        <ol class="breadcrumb ">
                            <li class="breadcrumb-item" style="font-size: 25px"><a href="#">Theater Details</a></li>

                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    {{--                    <h3 class="card-title">Cast</h3>--}}


                    <div class="text-center">
                        <a class='col-lg-offset-5 btn btn-success' href="{{route('theatres-create')}}" style="font-size: 15px;border-radius: 10px"> Add Theater</a>
                        <a class='col-lg-offset-5 btn btn-success' href="{{route('city-create')}}" style="font-size: 15px;border-radius: 10px"> Add City</a>
                       
                    </div>

                </div>
                <div class="card-body">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr style="font-size: 15px">
                                    <th>Sr. No</th>
                                    <th>City Name</th>
                                    <th>Theater Name</th>
                                    <th>Total Seats</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($theatre as $theatres)
                                    <tr>
                                        <td style="font-size: 14px">{{$loop->index +1}}</td>
                                        <td style="font-size: 14px">{{$theatres->city_id}}</td>
                                        <td style="font-size: 14px">{{$theatres->theatre_name}}</td>
                                        <td style="font-size: 14px">{{$theatres->seats_no}}</td>
                                    </tr>
                                @endforeach

                                </tbody>
                                <tfoot>

                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    Footer
                </div>
            </div>

        </section>
    </div>
@endsection
