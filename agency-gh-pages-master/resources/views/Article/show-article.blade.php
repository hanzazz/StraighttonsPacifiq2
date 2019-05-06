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
        <h2 class="section-heading text-uppercase">Show article</h2>
        <div class="row">
            @foreach ($article as $item)
            <div class="col-md-4">
                <div class="card" style=" margin-bottom: 25px;">
                    <img class="card-img-top" src="{{asset($item->path_pic)}}" alt="">
                    <div class="card-body">
                        <h5 class="card-title">{{$item->title}}</h5>
                        <p class="card-text">{{$item->content}}</p>
                        <a href="{{asset('/edit-article/'.$item->id)}}" class="btn btn-info  btn-sm">Edit</a>
                        <a href="#!delete" onclick="confirmDelete('Are you sure to delete ?', '{{ url('article-del', $item->id )}}', 'delete');"
                            class="btn btn-danger btn-sm">Delete</a>
                        {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                    </div>
                </div>
            </div>
            @endforeach


 
        </div>
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
