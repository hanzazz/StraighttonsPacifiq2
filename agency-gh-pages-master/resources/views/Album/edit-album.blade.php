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
                <h2 class="section-heading text-uppercase">Edit Album</h2>
                <div class="form-group">
                    <form action="{{url('/pic-upload')}}" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="hidden" name="gallery_id" value="{{$id}}">
                        <label for="exampleFormControlFile1">Example file input</label>
                        <input type="file" class="form-control-file" name="picture_up[]"  multiple>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($picture as $item)
            <div class="col-md-4">
                <div class="card" style=" margin-bottom: 25px;">
                    <img class="card-img-top" src="{{asset($item->path)}}" alt="">
                    <div class="card-body">

                   
                        <a href="#!delete" onclick="confirmDelete('Are you sure to delete ?', '{{ url('pic-del', $item->id )}}', 'delete');"
                            class="btn btn-danger btn-sm">Delete</a>
                        {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
</section>
@endsection
@section('js')
<script type="text/javascript">
    function confirmDelete(msg, url, action) {
        if (confirm(msg)) {
            if (action == 'restore') {
                window.location.href = url;
            } else {
                var element = document.getElementById('form-delete');
                element.action = url;
                element.submit();
            }
            // $('form#form-delete').attr('action', url);
            // $('form#form-delete').submit();
        } else {
            alert('Canceled');
        }
    }

</script>
@endsection