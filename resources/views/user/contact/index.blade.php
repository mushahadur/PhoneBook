@extends('user.layouts.app')

@section('body')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Show Contacts</h4>
                    <h4 class="card-title">Show Contacts 2</h4>
                    <p class="text-lime-500 text-success">{{Session::get('message')}}</p>
                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>SI NO</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Create Date</th>
                            <th>Update Date</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($contact as $contact)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$contact->name}}</td>
                                    <td>{{$contact->email}}</td>
                                    <td>{{$contact->phone}}</td>
                                    <td>{{$contact->created_at}}</td>
                                    <td>{{$contact->updated_at}}</td>
                                    <td class="d-flex justify-content-start">
                                        <a href="#" class="btn btn-outline-info mx-1" >
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <a href="#" class="btn btn-outline-success">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="#" class="btn btn-outline-danger mx-1">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                        {{-- <form id="delete-form" action="{{ route('employees.destroy', $employee) }}" method="POST" >
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-outline-danger mx-1" type="submit"><i class="fa fa-trash"></i></button>
                                        </form> --}}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- end page title -->
   <!-- end row -->
@endsection
