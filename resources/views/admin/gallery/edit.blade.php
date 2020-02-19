@extends('admin.layouts.app')
@section('content')

    <!-- Product Edit Content -->
    <div class="row">
        <div class="col-lg-12">
            <!-- General Data Block -->
            <div class="block">
                <!-- General Data Title -->
                <div class="block-title">
                    <h2><i class="fa fa-pencil"></i> <strong>Edit</strong> Gallery</h2>
                </div>
                <!-- END General Data Title -->

                <!-- General Data Content -->
                <form action="{{route('gallery.update',[$gallery->id])}}" method="post" class="form-horizontal form-bordered"  enctype="multipart/form-data">

                    @csrf
                    @method('PUT')

                    {{--                                <div class="form-group">--}}
                    {{--                                    <label class="col-md-3 control-label" for="product-id">PID</label>--}}
                    {{--                                    <div class="col-md-9">--}}
                    {{--                                        <input type="text" id="product-id" name="product-id" class="form-control" value="6825">--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}



                    <div class="form-group">
                        <label class="col-md-3 control-label" for="product-name">Image</label>
                        <div class="col-md-9">
                            <input type="file" id="image" name="image" class="form-control {{ $gallery->has('image') ? 'has-error' : '' }}"  value="{{ old('image', isset($gallery) ? $gallery->image : '') }}">


                            @if ($errors->has('image'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $gallery->first('image') }}</strong>
                                    </span>
                            @endif

                        </div>
                    </div>



                    <div class="form-group">
                        <label class="col-md-3 control-label" for="product-description">Category</label>
                        <div class="col-md-9">
                        {{--                                <input type="text" class="form-control form-control-sm" placeholder="Slect Item" required>--}}
                        <select class="form-control form-control-sm select2" id="category_id" name="category_id">
                            {{--                                    <option label="Choose one"></option>--}}
                            {{--                                    <option value="Firefox">Firefox</option>--}}
                            {{--                                    <option value="Chrome">Chrome</option>--}}
                            {{--                                    <option value="Safari">Safari</option>--}}
                            {{--                                    <option value="Opera">Opera</option>--}}
                            {{--                                    <option value="Internet Explorer">Internet Explorer</option>--}}
                            <option >Select items</option>
                            @forelse($category as $category)
                                {{--                                            <option value="{{$gallery->id}}">{{$product->name}}</option>--}}
                                <option value="{{$category->id}}" {{ (isset($gallery) && $gallery->category_id==$category->id) ? 'selected': "" }}>{{$category->title}}</option>
                            @empty
                            @endforelse
                        </select>
                    </div>
                    </div>
                        <!-- form-group -->

{{--                    <div class="form-group">--}}
{{--                        <label class="col-md-3 control-label" for="product-name">Service Title</label>--}}
{{--                        <div class="col-md-9">--}}
{{--                            <input type="text" id="service_title" name="service_title" class="form-control {{ $errors->has('service_title') ? 'has-error' : '' }}"  value="{{ old('service_title', isset($about) ? $about->service_title : '') }}">--}}


{{--                            @if ($errors->has('service_title'))--}}
{{--                                <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $errors->first('service_title') }}</strong>--}}
{{--                                    </span>--}}
{{--                            @endif--}}

{{--                        </div>--}}
{{--                    </div>--}}


{{--                    <div class="form-group">--}}
{{--                        <label class="col-md-3 control-label" for="product-name">Service Image</label>--}}
{{--                        <div class="col-md-9">--}}
{{--                            <input type="file" id="service_image" name="service_image" class="form-control {{ $errors->has('service_image') ? 'has-error' : '' }}"  value="{{ old('image', isset($about) ? $about->service_image : '') }}">--}}


{{--                            @if ($errors->has('service_image'))--}}
{{--                                <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $errors->first('service_image') }}</strong>--}}
{{--                                    </span>--}}
{{--                            @endif--}}

{{--                        </div>--}}
{{--                    </div>--}}


{{--                    <div class="form-group">--}}
{{--                        <label class="col-md-3 control-label" for="product-name">Service Description</label>--}}
{{--                        <div class="col-md-9">--}}
{{--                            <input type="text" id="service_description" name="service_description" class="form-control {{ $errors->has('service_description') ? 'has-error' : '' }}"  value="{{ old('service_description', isset($about) ? $about->service_description : '') }}">--}}


{{--                            @if ($errors->has('service_description'))--}}
{{--                                <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $errors->first('service_description') }}</strong>--}}
{{--                                    </span>--}}
{{--                            @endif--}}

{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="form-group">--}}
{{--                        <label class="col-md-3 control-label" for="product-name">Team Description</label>--}}
{{--                        <div class="col-md-9">--}}
{{--                            <input type="text" id="team_description" name="team_description" class="form-control {{ $errors->has('team_description') ? 'has-error' : '' }}"  value="{{ old('team_description', isset($about) ? $about->team_description : '') }}">--}}


{{--                            @if ($errors->has('team_description'))--}}
{{--                                <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $errors->first('team_description') }}</strong>--}}
{{--                                    </span>--}}
{{--                            @endif--}}

{{--                        </div>--}}
{{--                    </div>--}}


{{--                    <div class="form-group">--}}
{{--                        <label class="col-md-3 control-label" for="product-name">Team Image</label>--}}
{{--                        <div class="col-md-9">--}}
{{--                            <input type="file" id="team_image" name="team_image" class="form-control {{ $errors->has('team_image') ? 'has-error' : '' }}"  value="{{ old('team_image', isset($about) ? $about->team_image : '') }}">--}}


{{--                            @if ($errors->has('team_image'))--}}
{{--                                <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $errors->first('team_image') }}</strong>--}}
{{--                                    </span>--}}
{{--                            @endif--}}

{{--                        </div>--}}
{{--                    </div>--}}

                    {{--                                <div class="form-group">--}}
                    {{--                                    <label class="col-md-3 control-label" for="product-short-description">Short Description</label>--}}
                    {{--                                    <div class="col-md-9">--}}
                    {{--                                        <textarea id="product-short-description" name="product-short-description" class="form-control" rows="3"></textarea>--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                                <div class="form-group">--}}
                    {{--                                    <label class="col-md-3 control-label" for="product-category">Category</label>--}}
                    {{--                                    <div class="col-md-8">--}}
                    {{--                                        <!-- Chosen plugin (class is initialized in js/app.js -> uiInit()), for extra usage examples you can check out http://harvesthq.github.io/chosen/ -->--}}
                    {{--                                        <select id="product-category" name="product-category" class="select-chosen" data-placeholder="Choose Category.." style="width: 250px;">--}}
                    {{--                                            <option></option><!-- Required for data-placeholder attribute to work with Chosen plugin -->--}}
                    {{--                                            <option value="1">Tablets</option>--}}
                    {{--                                            <option value="2">Laptops</option>--}}
                    {{--                                            <option value="3">PCs</option>--}}
                    {{--                                            <option value="4">Consoles</option>--}}
                    {{--                                            <option value="5">Movies</option>--}}
                    {{--                                            <option value="6">Books</option>--}}
                    {{--                                            <option value="7">Cables</option>--}}
                    {{--                                            <option value="8">Adapters</option>--}}
                    {{--                                            <option value="9">Office</option>--}}
                    {{--                                        </select>--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                                <div class="form-group">--}}
                    {{--                                    <label class="col-md-3 control-label" for="product-price">Price</label>--}}
                    {{--                                    <div class="col-md-8">--}}
                    {{--                                        <div class="input-group">--}}
                    {{--                                            <div class="input-group-addon"><i class="fa fa-usd"></i></div>--}}
                    {{--                                            <input type="text" id="product-price" name="product-price" class="form-control" placeholder="0,00">--}}
                    {{--                                        </div>--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                                <div class="form-group">--}}
                    {{--                                    <label class="col-md-3 control-label">Condition</label>--}}
                    {{--                                    <div class="col-md-9">--}}
                    {{--                                        <label class="radio-inline" for="product-condition-new">--}}
                    {{--                                            <input type="radio" id="product-condition-new" name="product-condition" value="condition_new" checked> New--}}
                    {{--                                        </label>--}}
                    {{--                                        <label class="radio-inline" for="product-condition-used">--}}
                    {{--                                            <input type="radio" id="product-condition-used" name="product-condition" value="condition_used"> Used--}}
                    {{--                                        </label>--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                                <div class="form-group">--}}
                    {{--                                    <label class="col-md-3 control-label">Published?</label>--}}
                    {{--                                    <div class="col-md-9">--}}
                    {{--                                        <label class="switch switch-primary">--}}
                    {{--                                            <input type="checkbox" id="product-status" name="product-status" checked><span></span>--}}
                    {{--                                        </label>--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
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
