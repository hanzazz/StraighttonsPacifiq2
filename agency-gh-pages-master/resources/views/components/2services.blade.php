<section id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">Product</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
            <div class="row">
                @foreach ($article as $item)
                <div class="col-md-4">
                    <div class="card" style=" margin-bottom: 25px;">
                        <img src="{{asset($item->path_pic)}}" class="card-img-top ">
                        <div class="card-body">
                            <h5 class="card-title">{{$item->title}}</h5>
                            <p class="card-text">{{$item->content}}</p>
                            {{-- <a href="{{asset('/edit-album-detail/'.$item->id)}}" class="btn btn-warning  btn-sm">Edit</a>
                            <a href="{{asset('/edit-album/'.$item->id)}}" class="btn btn-info  btn-sm">Upload Img</a>
                            <a href="#!delete" onclick="confirmDelete('Are you sure to delete ?', '{{ url('album-del', $item->id )}}', 'delete');"
                                class="btn btn-danger btn-sm">Delete</a>
                            --}}
                        </div>
                    </div>
                </div>
                @endforeach



            </div>
        </div>

    </div>
</section>
