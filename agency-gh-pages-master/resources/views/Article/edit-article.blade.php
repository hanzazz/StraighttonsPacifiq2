@extends('layouts.index')
@section('content')
@include('components.navbarAdmin')
<section id="services">
    <div class="container">
        {{-- <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">Product</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
        </div> --}}
        <div class="row">
            <div class="col-md-12">
                <h2 class="section-heading text-uppercase">Form article Edit</h2>
                <img src="{{asset($article->path_pic)}}" class="img-fluid">
                <form class="" action="{{url('/article-upd')}}" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="article_id" value="{{$article->id}}">
                    <input type="hidden" name="path_pic" value="{{$article->path_pic}}">
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Example file input</label>
                        <input type="file" class="form-control-file" name="picture" id="exampleFormControlFile1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" class="form-control" name="title" placeholder="" value="{{$article->title}}">
                    </div>
                    <div class="form-group">
                        <label for="">Example textarea</label>
                        <textarea class="form-control" id="" name="content" rows="3">{{$article->content}}"</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>


            </div>
        </div>
    </div>
</section>
@endsection
