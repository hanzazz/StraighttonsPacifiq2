@extends('layouts.index')
@section('css')
@endsection

@section('content')
@include('components.navbarAdmin')
<section id="services">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <h2 class="section-heading text-uppercase">Form Album Edit Detail</h2>

                <form action="{{url('/album-upd/'.$gallery->id)}}" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        {{-- <input type="file" form-control-file name="picture_up"> --}}

                        <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <input type="text" class="form-control" name="title" placeholder="" value="{{$gallery->title}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">URL youtube</label>
                        <input type="text" class="form-control" name="link" placeholder="" value="{{$gallery->link}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Content</label>
                        <textarea class="form-control" name="content" rows="3">{{$gallery->content}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>
</section>
@endsection
