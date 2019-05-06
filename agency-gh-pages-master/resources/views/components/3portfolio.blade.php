<section class="bg-light" id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">Gallory</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
        </div>
        <div class="row">
            @foreach ($gallery as $item)
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a class="portfolio-link" data-toggle="modal" data-target="#gallery-{{$item->id}}">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fas fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid img-thumbnail" src="{{asset($item->img)}}" alt="Responsive image">
                </a>
            <div class="portfolio-caption">
             <h4>{{$item->title}}</h4>
             <p class="text-muted">{{$item->content}}</p>
            </div>
            {{-- <a href="{{asset('/edit-album-detail/'.$item->id)}}" class="btn btn-warning  btn-sm">Edit</a>
                <a href="{{asset('/edit-album/'.$item->id)}}" class="btn btn-info  btn-sm">Upload Img</a>
                <a href="#!delete" onclick="confirmDelete('Are you sure to delete ?', '{{ url('album-del', $item->id )}}', 'delete');"
                    class="btn btn-danger btn-sm">Delete</a> --}}
            </div>

            
            @endforeach
        </div>


    </div>
</section>
