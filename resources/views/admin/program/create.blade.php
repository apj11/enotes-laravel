@extends('admin.layouts.app')
@section('content')

    <!-- Product Edit Content -->
    <div class="row">
        <div class="col-lg-12">
            <!-- General Data Block -->
            <div class="block">
                <!-- General Data Title -->
                <div class="block-title">
                    <h2><i class="fa fa-pencil"></i> <strong>Create</strong> programs</h2>
                </div>
                <!-- END General Data Title -->

                <!-- General Data Content -->
                <form action="{{route('program.store')}}" method="post" class="form-horizontal form-bordered" enctype="multipart/form-data">

                @csrf



                        <div class="form-group">
                            <label class="col-md-3 control-label" for="product-description">Category</label>
                            <div class="col-md-9">
                                <select class="form-control form-control-sm select2" id="category_id" name="category_id">

                                    <option >Select items</option>
                                    @forelse($category as $category)
                                        <option value="{{$category->id}}">{{$category->title}}</option>
                                    @empty
                                    @endforelse
                                </select>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-md-3 control-label" for="product-name">Title</label>
                            <div class="col-md-9">
                                <input type="text" id="title" name="title" class="form-control {{ $errors->has('title') ? 'has-error' : '' }}" placeholder="Enter title..">


                                @if ($errors->has('title'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label" for="product-name">Semester</label>
                            <div class="col-md-9">
                                <input type="text" id="semester" name="semester" class="form-control {{ $errors->has('semester') ? 'has-error' : '' }}" placeholder="Enter title..">


                                @if ($errors->has('semester'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('semester') }}</strong>
                                    </span>
                                @endif

                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-md-3 control-label" for="product-name">Subject</label>
                            <div class="col-md-9">
                                <input type="text" id="subject" name="subject" class="form-control {{ $errors->has('subject') ? 'has-error' : '' }}" placeholder="Enter title..">
                                @if ($errors->has('subject'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('subject') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group">
                            <label class="col-md-3 control-label" for="product-name">Date</label>
                            <div class="col-md-9">
                                <input type="date" id="date" name="date" class="form-control {{ $errors->has('date') ? 'has-error' : '' }}" placeholder="Enter ">

                                @if ($errors->has('date'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('date') }}</strong>
                                    </span>
                                @endif

                            </div>
                        </div>




                        <div class="form-group">
                            <label class="col-md-3 control-label" for="product-name">File</label>
                            <div class="col-md-9">
                                <input type="file" id="file" name="file" class="form-control {{ $errors->has('file') ? 'has-error' : '' }}" >


                                @if ($errors->has('file'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('file') }}</strong>
                                    </span>
                                @endif

                            </div>
                        </div>


                    <div class="form-group form-actions">
                        <div class="col-md-9 col-md-offset-3">
                            <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-floppy-o"></i> Save</button>
                            <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Reset</button>
                        </div>
                    </div>

                </form>
                <!-- END General Data Content -->
            </div>
            <!-- END General Data Block -->
        </div>
    </div>
    <!-- END Product Edit Content -->
    </div>
    <!-- END Page Content -->
    </div>
    <!-- END Main Container -->
    </div>
    <!-- END Page Container -->
    </div>
    <!-- END Page Wrapper -->

    <!-- Scroll to top link, initialized in js/app.js - scrollToTop() -->
    <a href="#" id="to-top"><i class="fa fa-angle-double-up"></i></a>



    {{--<!-- jQuery, Bootstrap.js, jQuery plugins and Custom JS code -->--}}
    {{--<script src="{{'js/vendor/jquery.min.js'}}"></script>--}}
    {{--<script src="{{'js/vendor/bootstrap.min.js'}}"></script>--}}
    {{--<script src="{{'js/plugins.js'}}"></script>--}}
    {{--<script src="{{asset('js/app.js')}}"></script>--}}

    <!-- ckeditor.js, load it only in the page you would like to use CKEditor (it's a heavy plugin to include it with the others!) -->
    <script src="{{asset('js/helpers/ckeditor/ckeditor.js')}}"></script>

@endsection
