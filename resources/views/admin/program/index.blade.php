@extends('admin.layouts.app')
@section('content')



    <div class="content-header">
        <div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Programs</a></li>
                    <li class="breadcrumb-item active" aria-current="page">All Programs</li>
                </ol>
            </nav>

        </div>



    </div><!-- content-header -->
    <div class="content-body content-body-calendar" style="margin-top: -50px;">
        <div class="d-md-flex justify-content-between">
            <h4 class="content-title mg-t-10">Welcome to programs</h4>
            <a href="{{route('program.create')}}" class="btn btn-sm btn-primary"> Add new programs</a>
            {{--            <button type="button" class="btn btn-sm btn-primary">Add  New Customer</button>--}}
        </div>
        <div class="component-section">

            <table id="example1" class="table">
                <thead>
                <tr>
                    <th >ID</th>
                    <th>category Id</th>
                    <th>Title</th>
                    <th>Semester</th>
                    <th>Subject</th>
                    <th>Date</th>
                    <th> File</th>
                    <th class="text-center">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($program as $key =>$program )
                    <tr id="download{{$program->id}}">
                        <td class="text-center">{{++$key}}</td>
                        <td>{{$program->category_id}}</td>
                        <td>{{$program->title}}</td>
                        <td>{{$program->semester}}</td>
                        <td>{{$program->subject}}</td>
                        <td >{{$program->date}} </td>
                        <td ><a href="<?php echo $program["file"] ?>"><?php echo $program["file"] ?></a></td>


                        <td class="d-md-flex">
                            {{--                            <div class="mg-r-20" title="View"><a href="{{route('customer.show',$customer->id)}}"><i class="icon ion-clipboard text-success"></i></a></div>--}}
                            <div class="mg-r-20" title="Edit">
                                <a href="{{route('program.edit',$program->id)}}">
                                    <i class="far fa-edit text-warning"></i>
                                </a>
                            </div>
                            <div class="mg-r-20" title="Delete">
                                <a href="{{route('program.destroy',$program->id)}}" onclick="return confirm('Are you sure you want to delete this item?');">
                                    <i class="icon ion-trash-b text-danger"></i>
                                </a>
                            </div>
                            {{--                            <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger remove_button" url="{{route('download.destroy',$download->id)}}"><i class="fa fa-times"></i></a>--}}
                        </td>
                    </tr>
                    {{--                <tr>--}}

                @endforeach
                </tbody>
            </table>
        </div><!-- component-section -->

    </div>

    {{--    <script src="{{asset('dist/sweetalert.min.js')}}"></script>--}}
    @push('scripts')
        <script type="text/javascript">
            $('.remove_button').on('click', function(e) {
                e.preventDefault();
                // alert('test');
                var url = $(this).attr('url');
                swal({
                        title: "Are you sure!",
                        type: "error",
                        confirmButtonClass: "btn-danger",
                        confirmButtonText: "Yes!",
                        showCancelButton: true,
                    },
                    function() {
                        $.ajax({
                            url: url,
                            type: 'DELETE',
                            data: {
                                _token : "{{csrf_token()}}"
                            },
                            success: function(data){
                                $(data).remove();
                                toastr.success('Deleted Successfully');
                            },
                            error: function(error){
                                console.log('error');
                            }
                        })
                    });
            })
        </script>
    @endpush
@endsection
