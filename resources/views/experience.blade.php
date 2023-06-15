@extends('template')
    
@section('css')
<style>
    .working-with, .exp-card{
        opacity:0;
    }
    .working-with{
        margin-top: 100px
    }
    .add-btn:hover{
        background-color: rgb(171, 136, 246) !important;
        color: white;
        transition: 0.3s;
    }
</style>
@endsection

@section('exp', "active")

@section('content')
<div class="container-fluid px-4 px-md-5 mt-4">
    <div class="card rounded-5 bg-body-secondary p-5 working-with text-center">
        <h3 class="mb-4">Amazing experiences in past few years</h3>
        <p class="px-5">Since I was a child, I have found that learning to solve problems is an interesting pursuit. Up until now, I have invested plenty of my time in doing math, solving puzzles, and trying to solve other logical problems. In addition to this, I have also been interested in learning new languages and entrepreneurship.</p>
    </div>
    <div class="row my-4">
        @foreach($experiences as $experience)
        <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
            <div class="card exp-card rounded-5 bg-body-secondary h-100">
                @if($experience->picture != NULL)
                <img src="{{$experience->picture}}" class="card-img-top" alt="{{$experience->name}}">
                @endif
                <div class="card-body d-flex align-items-start flex-column px-3 pb-4">
                    <h5 class="card-title">{{$experience->name}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$experience->date}}</h6>
                    <p class="card-text mb-auto">{{$experience->detail}}</p>
                    {{-- <a href="#" class="btn rounded-pill mt-3">Go somewhere</a> --}}
                </div>
                @if(Session::get('Username') != NULL)
                <div class="btn-group">
                    <button class="btn btn-warning rounded-0" data-bs-toggle="modal" data-bs-target="#editModal{{$experience->id}}">
                        Edit
                    </button>
                    <button class="btn btn-danger rounded-0" data-bs-toggle="modal" data-bs-target="#delModal{{$experience->id}}">
                        Delete
                    </button>      
                </div>
                <div class="modal fade" id="delModal{{$experience->id}}"aria-hidden="true" style="display: none;">
                    <div class="modal-dialog">
                        <div class="modal-content rounded-5">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5">Delete experience</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                            <div class="modal-body">
                                <h5>Are you sure want to delete this experience?</h5>
                                <form method="POST" action="{{ url('/experience/'.$experience->id) }}">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="button submit"class="btn btn-danger rounded-pill">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="editModal{{$experience->id}}"aria-hidden="true" style="display: none;">
                    <div class="modal-dialog">
                      <div class="modal-content rounded-5">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5">Edit experience</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <form method="POST" action="{{ url('/experience/'.$experience->id) }}">
                            @method('PATCH')
                            @csrf
                            <div class="mb-3">
                              <label for="nm" class="col-form-label">Experience Name</label>
                              <input type="text" class="form-control rounded-pill" id="nm" name="nm" value="{{$experience->name}}" required>
                            </div>
                            <div class="mb-3">
                                <label for="date" class="col-form-label">Experience Date</label>
                                <input type="text" class="form-control rounded-pill" id="date" name="date" value="{{$experience->date}}" required>
                            </div>
                            <div class="mb-3">
                                <label for="dt" class="col-form-label">Experience Detail</label>
                                <input type="text" class="form-control rounded-pill" id="dt" name="dt" value="{{$experience->detail}}" required>
                            </div>
                            <div class="mb-3">
                                <label for="img" class="col-form-label">Experience Image</label>
                                <input type="text" class="form-control rounded-pill" id="img" name="img" value="{{$experience->picture}}">
                            </div>
                            <button type="submit" class="btn btn-primary float-end">Submit</button>
                          </form>
            
                        </div>
                        
                      </div>
                    </div>
                  </div>
                @endif
            </div>
        </div>
        @endforeach
        @if(Session::get('Username') != NULL)
        <div class="col-12 d-grid">
            <button class="btn add-btn bg-body-secondary rounded-pill" data-bs-toggle="modal" data-bs-target="#addModal">
                +
            </button>
        </div>

        <div class="modal fade" id="addModal"aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
              <div class="modal-content rounded-5">
                <div class="modal-header">
                  <h1 class="modal-title fs-5">Add new experience</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form method="POST" action="{{url('/experience')}}">
                    @method('POST')
                    @csrf
                    <div class="mb-3">
                      <label for="nm" class="col-form-label">Experience Name</label>
                      <input type="text" class="form-control rounded-pill" id="nm" name="nm" required>
                    </div>
                    <div class="mb-3">
                        <label for="date" class="col-form-label">Experience Date</label>
                        <input type="text" class="form-control rounded-pill" id="date" name="date" required>
                    </div>
                    <div class="mb-3">
                        <label for="dt" class="col-form-label">Experience Detail</label>
                        <input type="text" class="form-control rounded-pill" id="dt" name="dt" required>
                    </div>
                    <div class="mb-3">
                        <label for="img" class="col-form-label">Experience Image</label>
                        <input type="text" class="form-control rounded-pill" id="img" name="img">
                    </div>
                    <button type="submit" class="btn btn-primary float-end rounded-pill">Submit</button>
                  </form>
    
                </div>
                
              </div>
            </div>
          </div>
    @endif
    </div>
</div>
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
@endsection