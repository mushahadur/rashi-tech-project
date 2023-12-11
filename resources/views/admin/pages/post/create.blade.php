@extends('admin.layout.master')

@section('body')


    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title mb-4">Add Post Form</h3>
                    <p class="text-center text-success">{{Session::get('message')}}</p>
                    <form action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id}}">
                        <div class="form-group row">
                            <label class="col-form-label col-md-3">Post Title</label>
                            <div class="col-md-9">
                                <input type="text" name="title" class="form-control"/>
                                @error('title')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-password-input3" class="col-sm-3 col-form-label">image</label>
                            <div class="col-sm-9">
                                <input type="file" name="image" class="form-control"/>
                                @error('image')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="horizontal-password-input3" class="col-sm-3 col-form-label">Description</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" id="horizontal-password-input3" name="description"></textarea>
                                @error('description')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                            </div>
                        </div>

                        <div class="form-group row justify-content-end">
                            <div class="col-sm-9">
                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Create New Post</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

