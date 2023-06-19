@extends('layout.app')


@section('content')
    <!-- Begin Page Content -->
                <div class="container-fluid">

          
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Edit RoomTypes</h6>
                            <a href="{{ url('admin/roomtype') }}" class="btn btn-primary btn-sm float-right">View All Roomtype</a>
                        </div>
                        <div class="card-body">
                        @if(Session::has('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                            <div class="table-responsive">
                            <form action="{{ route('update.roomtype', $roomtype->id) }}" method="post">
                                @csrf
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Title</th>
                                        <td><input type="text" name="title" class="form-control " value="{{ $roomtype->title }}"></td>
                                        
                                    </tr>
                                        
                                    <tr>
                                        <th>Detail</th>
                                        <td><textarea type="text" name="detail" class="form-control ">{{ $roomtype->detail }}</textarea></td>
                                        
                                    </tr>
                                    
                                    <tr>
                                        <td colspan="2">
                                            <input type="submit" class="btn btn-success btn-sm">
                                        </td>
                                    </tr>
                                    
                                </table>
                            </form>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

@endsection
