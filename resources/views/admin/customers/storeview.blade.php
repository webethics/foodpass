@extends('admin.layouts.admin')
@section('content')
<link rel="stylesheet" href="{{ url('css/userview.css')}}" type="text/css" />
   <div class="row">
      <div class="col-12">
         <h1>Store Profile</h1>
         <div class="separator mb-5"></div>
      </div>
   </div>
   <div class="row mb-4">
      <div class="col-12 mb-4">
         <div class="col rightcontentsec prflrightcontentsec">
                  <section class="storesection innersection profilearea storeprofilesec">
                     <div class="row">
                        <div class="col storeprofilecol">
                           <div class="profilerow pt-2">
                              <div class="profileinfo">
                                 <div class="profilehdr">
                                    <div class="profilelefthdr dashboardpfl_hdr">
                                       <div class="userimage">
                                 @if($user->profile_photo==NULL)
                                    <img class="updated_profile_pic" src="{{asset('frontend/images/default_user.jpg')}}" />
                                 @else
                                    
                                 @php
                                    $photo =  profile_photo($user->id);
                                 @endphp
                                    <img class="updated_profile_pic" src="{{timthumb($photo,80,80)}}">
                                 @endif
                              </div>
                                       <div class="infohdr">
                                          <h3>{{ $user->restaurant_name }}<span>{{ $user->first_name }} {{ $user->last_name }}</span></h3>
                                          <a href="tel:{{ $user->mobile_number }}">{{ $user->mobile_number }}</a>
                                          <a href="mailto:{{ $user->email }}">{{ $user->email }}</a>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="profilecont infocont_sec">
                                    <div class="row">
                                       <div class="col-md-5 prof_info">
                                          <span>Address</span>
                                          <p>{{ $user->address }}</p>
                                       </div>
                                       <div class="col-md-4 prof_info">
                                          <span>Post Code</span>
                                          <p>{{ $user->post_code }}</p>
                                       </div>
                                       <div class="col-md-3 prof_info">
                                          <span>City</span>
                                          <p>{{ $user->city }}</p>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="infocont_sec infosocial_links">
                                    <h4>Social Links</h4>
                                    <div class="profilecont infocont">
                                       <div class="row">
                                          <div class="col-md-6 prof_info social_info">
                                             <img src="{{asset('frontend/images/socialicon1.svg')}}" />
                                             <p><span>Website </span><a href="{{ $user->website }}">{{ $user->website }}</a></p>
                                          </div>
                                          <div class="col-md-6 prof_info social_info">
                                             <img src="{{asset('frontend/images/socialicon3.svg')}}" />
                                             <p><span>Instagram </span><a href="{{ $user->instagram }}">{{ $user->instagram }}</a></p>
                                          </div>
                                          <div class="col-md-6 prof_info social_info">
                                             <img src="{{asset('frontend/images/socialicon2.svg')}}" />
                                             <p><span>Facebook </span><a href="{{ $user->facebook }}">{{ $user->facebook }}</a></p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </section>
               </div>
      </div>
   </div>
@endsection