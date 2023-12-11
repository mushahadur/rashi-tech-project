@extends('admin.layout.master')

@section('body')
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">All Post Information</h4>
                        <p class="text-center text-success">{{Session::get('message')}}</p>

                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>SL NO</th>
                                <th>Post Title</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($posts as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->title}}</td>
                                    <td><img src="{{asset('/storage/Post-image/'.$item->image)}}" alt="{{$item->image}}" height="70" width="90"/></td>
                                   
                                    <td class="d-flex justify-content-center">
                                        <a class="btn btn-outline-success" href="{{ route('post.edit', $item) }}" >
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <form id="delete-form" action="{{ route('post.destroy', $item) }}" method="POST" >
                                            @csrf
                                            @method('DELETE')
                                               <button  class="btn btn-outline-danger mx-2" type="submit"><i class="fa fa-trash"></i></button>
                                        </form> 
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row --> 
@endsection

