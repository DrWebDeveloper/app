@extends('admin.layouts.app')
@section('title')
    Promotion Banner
@endsection
@section('content')
<br>
<br>
    <div class="row">
      <div class="col-lg-12">
         <div class="tab-content">
            <div id="pills-1" class="tab-pane fade active show">
               <div class="card">
                  <div class="card-body pb-0">
                     <div class="row">

                                 @if (Session::has('success'))
                                 <div class="col-lg-12 col-md-12 col-sm-12 mb-0">
                                <div class="alert alert-success text-center">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                    {{ Session::get('success') }}
                                </div>
                                </div>
                            @endif

                        <div class="col-lg-3 col-md-6 col-sm-6 mb-0">

                            <h3>Active Banner</h3>
                           <div class="forms-box">
                              <div class="bg-info-light image-box text-center
                                 p-2">
                                 <img src="{{ url('/public/images/'.$setting->banner) }}" class="d-block w-100" alt="image">
                              </div>
                              <div class="forms-text d-flex flex-wrap
                                 justify-content-between text-left">
                                 <div>
                                    <h5 class="mb-3"><i class="las la-file-alt
                                          text-dark mr-3"></i> Banner</h5>
                                    {{-- <p class="mb-0"><i class="las
                                          la-calendar-minus text-light mr-3
                                          font-size-18"></i>11 / 12 / 2020</p> --}}
                                 </div>
                                 <div class="dropdown">
                                    <span class="dropdown-toggle1" id="dropdownMenuButton-ten" data-toggle="dropdown" aria-expanded="false" role="button">
                                       <i class="fas fa-cog mt-2"></i>
                                    </span>
                                    <div class="dropdown-menu
                                       dropdown-menu-right" aria-labelledby="dropdownMenuButton-ten" style="">
                                       <a class="dropdown-item copy" href="#"><i class="far fa-copy mr-2"></i>Copy</a>
                                       <a href="#" class="dropdown-item edit-note1" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                       <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                    </div>
                                 </div>
                              </div>
                              <form action="{{ route('editbanner') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">

                                    <div class="col-12">
                                        <input type="file" name="image" class="form-control">
                                    </div>

                                    <div class="col-12">
                                        <button type="submit" class="btn btn-danger btn-block">Upload</button>
                                    </div>

                                </div>
                            </form>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 mb-0">
                            <h3>Previous Banners</h3>
<div class="row">
                            @foreach(File::glob(public_path('images').'/*') as $path)

                            <div class="card">
                            <img src="{{ url('public'.str_replace(public_path(), '', $path)) }}" class="card-img-top" alt="#">
                            <div class="card-body">
                            {{-- <h4 class="card-title">{{ $path }}</h4> --}}
                            <p class="card-text">Statude: Inactive</p>
                            </div>
                            </div>

                            @endforeach
</div>
                        </div>

                     </div>
                  </div>
               </div>
            </div>

         </div>
      </div>
   </div>
@endsection
