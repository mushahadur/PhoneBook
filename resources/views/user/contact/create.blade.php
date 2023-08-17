@extends('user.layouts.app')

@section('body')
    <!-- start page title -->
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add a Contact</h4>
                    <p class="card-title-desc">{{Session::get('message')}}</p>
                    <form   action="{{ route('contact.store') }}" method="Post">
                        @csrf
                        <div class="form-group row">
                            <label class="col-form-label col-md-4">Name</label>
                            <div class="col-md-8">
                                <input type="text" name="name" class="form-control"/>
                                @error('name')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-4">Email</label>
                            <div class="col-md-8">
                                <input type="email" name="email" class="form-control"/>
                                @error('email')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-4">Phone</label>
                            <div class="col-md-8">
                                <input type="text" name="phone" class="form-control"/>
                                @error('phone')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-4"></label>
                            <div class="col-md-8">
                                <button type="submit" class="btn btn-primary">Save Contact</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> <!-- end col -->
    </div>
    <!-- end page title -->
   <!-- end row -->
@endsection
