@extends('admin.layouts.app')
@section('title')
    Users
@endsection
@section('content')
<br>
<br>
<div class="row">
            <div class="col-sm-12">
                  <div class="card">
                     <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                           <h4 class="card-title">User List</h4>
                        </div>
                     </div>
                     <div class="card-body">
                        <div class="table-responsive">
                           <div class="row justify-content-between">
                              <div class="col-sm-6 col-md-6">
                                 <div id="user_list_datatable_info" class="dataTables_filter">
                                    <form class="mr-3 position-relative">
                                       <div class="form-group mb-0">
                                          <input type="search" class="form-control" id="exampleInputSearch" placeholder="Search" aria-controls="user-list-table">
                                       </div>
                                    </form>
                                 </div>
                              </div>
                              <div class="col-sm-6 col-md-6">
                                 <div class="user-list-files d-flex">
                                    <a class="bg-primary" href="javascript:void();">
                                       Print
                                    </a>
                                    <a class="bg-primary" href="javascript:void();">
                                       Excel
                                    </a>
                                    <a class="bg-primary" href="javascript:void();">
                                       Pdf
                                    </a>
                                 </div>
                              </div>
                           </div>
                           <table id="user-list-table" class="table table-striped table-bordered mt-4" role="grid" aria-describedby="user-list-page-info">
                           <thead>
                                 <tr style="background: #393B87 !important;">
                                    {{-- <th>Profile</th> --}}
                                    <th>Name</th>
                                    <th>Contact</th>
                                    <th>Email</th>
                                    <th>Country</th>
                                    <th>Membership</th>
                                    <th>Join Date</th>
                                    <th style="min-width: 100px">Action</th>
                                 </tr>
                           </thead>
                           <tbody style="border:1px solid #CCD3DC;">
                               @foreach ($users as $user)
                                 <tr  style="border:1px solid #CCD3DC;">
                                    {{-- <td  style="border:1px solid #CCD3DC;" class="text-center"><img class="rounded img-fluid avatar-40" src="../assets/images/user/01.jpg" alt="profile"></td> --}}
                                    <td  style="border:1px solid #CCD3DC;">{{ $user->fname.' '.$user->lname }}</td>
                                    <td  style="border:1px solid #CCD3DC;">{{ $user->phone }}</td>
                                    <td  style="border:1px solid #CCD3DC;">{{ $user->email }}</td>
                                    <td  style="border:1px solid #CCD3DC;">{{ $user->country }}</td>
                                    <td  style="border:1px solid #CCD3DC;">
                                        @if ($user->membership == "Premium")
                                            <span class="mt-2 badge badge-pill badge-danger">Premium</span>
                                        @else
                                        <span class="mt-2 badge badge-pill badge-success">Free</span>
                                        @endif
                                        {{-- <span class="badge iq-bg-primary">{{  }}</span> --}}
                                    </td>
                                    <td>{{ date('d M Y', strtotime($user->created_at)) }}</td>
                                    <td>
                                       <div class="flex align-items-center list-user-action">
                                          {{-- <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add" href="#"><i class="ri-user-add-line"></i></a> --}}
                                          <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="#"><i class="ri-pencil-line"></i></a>
                                          <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="#"><i class="ri-delete-bin-line"></i></a>
                                       </div>
                                    </td>
                                 </tr>
                                 @endforeach

                           </tbody>
                           </table>
                        </div>
                           <div class="row justify-content-between mt-3">
                              <div id="user-list-page-info" class="col-md-6">
                                 <span>Showing {{ count($users) }} entries</span>
                              </div>
                              <div class="col-md-6">
                                 <nav aria-label="Page navigation example">
                                    {{ $users->links() }}
                                 </nav>
                              </div>
                           </div>
                     </div>
                  </div>
            </div>
         </div>
@endsection
