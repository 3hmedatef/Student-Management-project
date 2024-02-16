@extends('layout')
@section('content')
            <div class="card">
                <div class="card-header">
                    <h2>Student Application</h2>
                </div>
                <div class="card-body">
                    <a href="{{url('/students/create')}}"class="btn btn-success btn-sm"title="Add new student">
                        <i class="fa fa-plus"aria-hidden="true"></i>Add New
                    </a>
                    <br/>
                    <br/>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>phone</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($students as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->address}}</td> 
                                    <td>{{$item->phone}}</td>
                                    <td>
                                        <a href="{{url('/students/'.$item->id)}}"title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye"aria-hidden="true"></i>view</button></a>
                                        <a href="{{url('/students/'.$item->id.'/edit')}}"title="Edit Student"><button class="btn btn-info btn-sm"><i class="fa fa-pancil-square-0"aria-hidden="true"></i>Edit</button></a>

                                        <form method="POST" action="{{url('/students/'. '/' .$item->id)}}"accept-charset="UTF-8"style="display:inline">
                                            {{method_field('DELETE')}}
                                            {{csrf_field()}}
                                            <button type="submit"class="btn btn-danger btn-sm"title="Delete Student"onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-0"aria-hidden="true"></i>Delete</button>

                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
   
@endsection