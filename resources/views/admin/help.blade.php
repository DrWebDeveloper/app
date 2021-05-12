@extends('admin.layouts.app')
@section('title')
    Help Guides
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

                        {{-- <div class="col-lg-3 col-md-6 col-sm-6 mb-0"> --}}
                            <h3>Help Guides</h3>

                            @foreach($guides as $guide)
                            <div class="col-6">
                            <div class="card">
                            {{ $guide->title }}
                            <div class="card-body">
<div class="embed-responsive embed-responsive-4by3">
                                        {{!! $guide->code !!}}
                                    </div>
                            </div>
                            </div>
                        </div>
                            @endforeach

                        {{-- </div> --}}

                     </div>
                  </div>
               </div>
            </div>

         </div>
      </div>
   </div>
@endsection
