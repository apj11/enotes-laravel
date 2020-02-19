@extends('admin.layouts.app')
@section('content')


    <div class="content-header">
        <div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Category</a></li>
                    <li class="breadcrumb-item active" aria-current="page">All Category</li>
                </ol>
            </nav>

        </div>



    </div><!-- content-header -->
    <div class="content-body content-body-calendar" style="margin-top: -50px;">
        <div class="d-md-flex justify-content-between">
            <h4 class="content-title mg-t-10">Welcome to category</h4>
            <a href="{{route('category.create')}}" class="btn btn-sm btn-primary"> Add new Category</a>
            {{--            <button type="button" class="btn btn-sm btn-primary">Add  New Customer</button>--}}
        </div>
        <div class="component-section">

            <table id="example1" class="table">
                <thead>
                <tr>
                    {{--                    <th class="wd-10p">S.N</th>--}}
                    <th class="wd-10p">S.N.</th>
                    <th class="wd-20p">Title</th>
                    <th class="wd-20p">Image</th>


                    <th class="wd-15p">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($category as $key =>$category )
                    <tr id="category{{$category->id}}">
                        <td>{{++$key}}</td>
                        <td>{!! $category->title !!}</td>
                        <td ><img src="{{asset(''.$category->image)}}" height="100px" width="100px"></td>


                        <td class="d-md-flex">
{{--                            <div class="mg-r-20" title="View"><a href="{{route('customer.show',$customer->id)}}"><i class="icon ion-clipboard text-success"></i></a></div>--}}
                            <div class="mg-r-20" title="Edit"><a href="{{route('category.edit',$category->id)}}"><i class="far fa-edit text-warning"></i></a></div>
                            <div class="mg-r-20" title="Delete"><a href="{{route('category.destroy',$category->id)}}" onclick="return confirm('Are you sure you want to delete this item?');"><i class="icon ion-trash-b text-danger"></i></a></div>
                            <!-- <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger remove_button" url="{{route('category.destroy',$errors->id)}}"><i class="fa fa-times"></i></a> -->
                        </td>
                    </tr>

                @endforeach
                </tbody>
            </table>
        </div><!-- component-section -->

    </div><!-- content-body -->


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
