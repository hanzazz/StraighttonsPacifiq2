@extends('layouts/index')
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
                    <h2 class="section-heading text-uppercase">Form article</h2>
                    <!-- with ins -->
                <form class="" action="{{url('/article-ins')}}" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Upload Img</label>
                        <input type="file" class="form-control-file" name="picture" id="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" class="form-control" name="title" placeholder="">
                    </div>
                 
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Content</label>
                        <textarea class="form-control"  name="content" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            
            </div>
        </div>
    </div>
</section>
@endsection
