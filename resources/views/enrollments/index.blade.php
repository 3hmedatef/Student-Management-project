@extends('layout')
@section('content')
            <div class="card">
                <div class="card-header">
                    <h2>Enrollments</h2>
                </div>
                <div class="card-body">
                    <a href="{{url('/enrollments/create')}}"class="btn btn-success btn-sm"title="Add new Enrollments">
                        <i class="fa fa-plus"aria-hidden="true"></i>Add New
                    </a>
                    <br/>
                    <br/>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>enroll no</th>
                                    <th>Batch</th>
                                    <th>student</th>
                                    <th>join Data</th>
                                    <th>fee</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($enrollments as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->enroll_on}}</td>
                                    <td>{{$item->batch->name}}</td>
                                    <td>{{$item->student->name}}</td>
                                    <td>{{$item->join_date}}</td>
                                    <td>{{$item->fee}}</td>
                                    <td>
                                        <a href="{{url('/enrollments/'.$item->id)}}"title="View Enrollments"><button class="btn btn-info btn-sm"><i class="fa fa-eye"aria-hidden="true"></i>view</button></a>
                                        <a href="{{url('/enrollments/'.$item->id.'/edit')}}"title="Edit Courses"><button class="btn btn-info btn-sm"><i class="fa fa-pancil-square-0"aria-hidden="true"></i>Edit</button></a>

                                        <form method="POST" action="{{url('/enrollments/'. '/' .$item->id)}}"accept-charset="UTF-8"style="display:inline">
                                            {{method_field('DELETE')}}
                                            {{csrf_field()}}
                                            <button type="submit"class="btn btn-danger btn-sm"title="Delete Course"onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-0"aria-hidden="true"></i>Delete</button>

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