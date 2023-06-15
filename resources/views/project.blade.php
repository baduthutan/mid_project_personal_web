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
    .type-btn:hover{
        background-color: rgb(220, 204, 255) !important;
        color: #212529 !important;
        transition: 0.3s;
     }
     .type-btn.active{
        background-color: rgb(220, 204, 255) !important;
        color: #212529 !important;
        border: 0;
     }
</style>
@endsection

@section('prj', "active")

@section('content')
<div class="container-fluid px-4 px-md-5 mt-4">
    <div class="card rounded-5 bg-body-secondary p-5 working-with text-center">
        <h3 class="mb-4">My work's showcase</h3>
        <p class="px-5">Since I entered computer science, I was working on projects, mostly in web development. I was also attended BNCC Web development class and now became A front-end mentor over there. At first, doing projects, especially the team projects, seems frustating. But, sooner you'll realize that it makes you stronger.</p>
    </div>
    <div class="row my-4">
        <div class="col-0 col-md-3 col-sm-2"></div>
       <div class="col-md-6 col-sm-8">
        <div class="row g-3">
            @foreach ($projectTypes as $projectType)
                <div class="col-6">
                    <button class="btn bg-dark text-light w-100 py-2 rounded-pill type-btn" id="{{$projectType->id}}">
                        {{$projectType->type}}
                    </button>
                </div>
            @endforeach
        </div>
       </div>
    </div>
    <div class="row my-4">
        @foreach($projects as $project)
        <div class="col-sm-6 col-md-4 col-lg-3 mb-4 exp-col type-{{$project->type}}">
            <div class="card exp-card rounded-5 bg-body-secondary h-100">
                <img src="{{$project->picture}}" class="card-img-top " alt="{{$project->name}}">
                <div class="card-body d-flex align-items-start flex-column px-3 pb-4">
                    <h5 class="card-title">{{$project->name}}</h5>
                    {{-- <h6 class="card-subtitle mb-2 text-muted">{{$project->date}}</h6> --}}
                    <p class="card-text mb-auto">{{$project->detail}}</p>
                    <a href="{{$project->link}}" class="btn rounded-pill mt-3 boton">Link to project</a>
                </div>
                @if(Session::get('Username') != NULL)
                <div class="btn-group">
                    <button class="btn btn-warning rounded-0" data-bs-toggle="modal" data-bs-target="#editModal{{$project->ID}}">
                        Edit
                    </button>
                    <button class="btn btn-danger rounded-0" data-bs-toggle="modal" data-bs-target="#delModal{{$project->ID}}">
                        Delete
                    </button>      
                </div>
                <div class="modal fade" id="delModal{{$project->ID}}"aria-hidden="true" style="display: none;">
                    <div class="modal-dialog">
                        <div class="modal-content rounded-5">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5">Delete project</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                            <div class="modal-body">
                                <h5>Are you sure want to delete this project?</h5>
                                <form method="POST" action="{{ url('/project/'.$project->ID) }}">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="button submit"class="btn btn-danger rounded-pill">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="editModal{{$project->ID}}"aria-hidden="true" style="display: none;">
                    <div class="modal-dialog">
                      <div class="modal-content rounded-5">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5">Edit project</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <form method="POST" action="{{ url('/project/'.$project->ID) }}" enctype="multipart/form-data">
                            @method('PATCH')
                            @csrf
                            <div class="mb-3">
                              <label for="nm" class="col-form-label">Project Name</label>
                              <input type="text" class="form-control rounded-pill" id="nm" name="nm" value="{{$project->name}}">
                            </div>
                            <div class="mb-3">
                                <label for="date" class="col-form-label">Project Link</label>
                                <input type="text" class="form-control rounded-pill" id="link" name="link" value="{{$project->link}}">
                            </div>
                            <div class="mb-3">
                                <label for="dt" class="col-form-label">Project Detail</label>
                                <input type="text" class="form-control rounded-pill" id="dt" name="dt" value="{{$project->detail}}">
                            </div>
                            <div class="mb-3">
                                <label for="img" class="col-form-label">Project Image</label>
                                <input type="file" class="form-control rounded-pill" id="img" name="img" value="{{$project->picture}}">
                            </div>
                            <div class="mb-3">
                                <label for="typ" class="col-form-label">project Type</label>
                                <select class="form-select rounded-pill"  id="typ" name="typ">
                                    @foreach ($projectTypes as $projectType)
                                        <option value="{{$projectType->id}}">{{$projectType->type}}</option>
                                    @endforeach
                                  </select>
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
                  <h1 class="modal-title fs-5">Add new project</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form method="POST" action="{{url('/project')}}" enctype="multipart/form-data">
                    @method('POST')
                    @csrf
                    <div class="mb-3">
                      <label for="nm" class="col-form-label">project Name</label>
                      <input type="text" class="form-control rounded-pill" id="nm" name="nm">
                    </div>
                    <div class="mb-3">
                        <label for="date" class="col-form-label">project Link</label>
                        <input type="text" class="form-control rounded-pill" id="link" name="link">
                    </div>
                    <div class="mb-3">
                        <label for="dt" class="col-form-label">project Detail</label>
                        <input type="text" class="form-control rounded-pill" id="dt" name="dt">
                    </div>
                    <div class="mb-3">
                        <label for="img" class="col-form-label">project Image</label>
                        <input type="file" class="form-control rounded-pill" id="img" name="img">
                    </div>
                    <div class="mb-3">
                        <label for="typ" class="col-form-label">project Type</label>
                        <select class="form-select rounded-pill"  id="typ" name="typ">
                            @foreach ($projectTypes as $projectType)
                                <option value="{{$projectType->id}}">{{$projectType->type}}</option>
                            @endforeach
                          </select>
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
<script>
    $('.type-btn').click(function() { 
        if($(this).hasClass("active")){
            $(this).removeClass("active");
            $('.exp-col').removeClass("d-none");
        }else{
            var id = $(this).attr('id');
            $('.type-btn').removeClass("active");
            $(this).addClass("active");
            $('.exp-col').addClass("d-none");
            $('.type-' + id).removeClass("d-none");
        }
    });
</script>
@endsection