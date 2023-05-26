@extends('layout.app')


@section('content')
    <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800 py-4">RoomTypes</h1>
          
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">RoomTypes</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Title</th>
                                            <th>Description </th>
                                            <th>Action</th>
                                          
                                        </tr>
                                    </thead>
                               
                                    <tbody>
                                        @foreach ($roomtype as $roomtype )
                                            
                                            <tr>
                                                <td>{{ $roomtype->id }}</td>
                                                <td>{{ $roomtype->title }}</td>
                                                <td>{{ $roomtype->detail }}</td>
                                                <td>
                                                  <a href=""><i class="fa fa-eye mx-3 text-success"></i></a>
                                                  
                                                  <a href=""><i class="fa fa-edit mx-3 text-primary"></i></a>
                                                  
                                                  <a href=""><i class="fa fa-trash mx-3 text-danger"></i></a>

                                                </td>
                                            </tr>
                                        @endforeach
            
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

@endsection
