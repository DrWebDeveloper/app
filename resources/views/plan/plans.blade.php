@extends('layouts.app')
@section('title')
    Plans
@endsection
@section('content')


         <div class="row">
            <div class="col-sm-12">
               <div class="card">
                  <div class="card-body">
                     <div class="table-responsive pricing pt-2">
                        <table id="my-table" class="table">
                           <thead>
                              <tr>
                                 <th class="text-center prc-wrap"></th>
                                 <th class="text-center prc-wrap">
                                    <div class="prc-box">
                                       <div class="h3 pt-4 text-white">{{ $plans[0]->price.env('CR') }}<small> / Per Month</small>
                                       </div> <span class="type text-white ">{{ $plans[0]->name }}</span>
                                    </div>
                                 </th>
                                 <th class="text-center prc-wrap">
                                    <div class="prc-box active">
                                       <div class="h3 pt-4 text-white">{{ $plans[1]->price.env('CR') }}<small> / Per Month</small>
                                       </div> <span class="type text-white ">{{ $plans[1]->name }}</span>
                                    </div>
                                 </th>
                                 <th class="text-center prc-wrap">
                                    <div class="prc-box">
                                       <div class="h3 pt-4 text-white">{{ $plans[2]->price.env('CR') }}<small> / Per Year</small>
                                       </div> <span class="type text-white ">{{ $plans[2]->name }}</span>
                                    </div>
                                 </th>
                                 {{-- <th class="text-center prc-wrap">
                                    <div class="prc-box">
                                       <div class="h3 pt-4 text-white">{{ $plans[3]->price.env('CR') }}<small> / Per Month</small>
                                       </div> <span class="type text-white ">{{ $plans[3]->name }}</span>
                                    </div>
                                 </th> --}}
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <th class="text-center" scope="row">Form Builder</th>
                                 <td class="text-center child-cell"><i class="ri-check-line ri-2x"></i>
                                 </td>
                                 <td class="text-center child-cell active"><i class="ri-check-line ri-2x"></i>
                                 </td>
                                 <td class="text-center child-cell"><i class="ri-check-line ri-2x"></i>
                                 </td>
                                 {{-- <td class="text-center child-cell"><i class="ri-check-line ri-2x"></i>
                                 </td> --}}
                              </tr>
                              <tr>
                                 <th class="text-center" scope="row">Appointment Manager</th>
                                                                  <td class="text-center child-cell"><i class="ri-check-line ri-2x"></i>
                                 </td>
                                 <td class="text-center child-cell active"><i class="ri-check-line ri-2x"></i>
                                 </td>
                                 <td class="text-center child-cell"><i class="ri-check-line ri-2x"></i>
                                 </td>
                                 {{-- <td class="text-center child-cell"><i class="ri-check-line ri-2x"></i>
                                 </td> --}}
                              </tr>
                              <tr>
                                 <th class="text-center" scope="row">Copyrighting Tool</th>
                                 <td class="text-center child-cell"><i class="ri-check-line ri-2x"></i>
                                 </td>
                                 <td class="text-center child-cell active"><i class="ri-check-line ri-2x"></i>
                                 </td>
                                 <td class="text-center child-cell"><i class="ri-check-line ri-2x"></i>
                                 </td>
                                 {{-- <td class="text-center child-cell"><i class="ri-check-line ri-2x"></i>
                                 </td> --}}
                              </tr>
                              <tr>
                                 <th class="text-center" scope="row">Mailing & SMS</th>
                                 <td class="text-center child-cell"><i class="ri-close-line i_close"></i>
                                 </td>
                                 <td class="text-center child-cell active"><i class="ri-check-line ri-2x"></i>
                                 </td>
                                 <td class="text-center child-cell"><i class="ri-check-line ri-2x"></i>
                                 </td>
                                 {{-- <td class="text-center child-cell"><i class="ri-check-line ri-2x"></i>
                                 </td> --}}
                              </tr>
                              <tr>
                                 <th class="text-center" scope="row">Digital Desktop</th>
                                 <td class="text-center child-cell"><i class="ri-close-line i_close"></i>
                                 </td>
                                 <td class="text-center child-cell active"><i class="ri-check-line ri-2x"></i>
                                 </td>
                                 <td class="text-center child-cell"><i class="ri-check-line ri-2x"></i>
                                 </td>
                                 {{-- <td class="text-center child-cell"><i class="ri-check-line ri-2x"></i>
                                 </td> --}}
                              </tr>


                              <tr>
                                 <td class="text-center">
                                     {{-- <i class="ri-close-line i_close"></i> --}}
                                 </td>
                                 <td class="text-center"> <a href="{{ route('subscribe',['pid'=>1]) }}" class="btn btn-primary btn-lg mt-3">Purchase</a>
                                 </td>
                                 <td class="text-center"> <a href="{{ route('subscribe',['pid'=>2]) }}" class="btn btn-primary btn-lg mt-3">Purchase</a>
                                 </td>
                                 <td class="text-center"> <a href="{{ route('subscribe',['pid'=>3]) }}" class="btn btn-primary btn-lg mt-3">Purchase</a>
                                 </td>
                                 {{-- <td class="text-center"> <a href="{{ route('subscribe',['pid'=>4]) }}" class="btn btn-primary btn-lg mt-3">Purchase</a>
                                 </td> --}}
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>

@endsection
