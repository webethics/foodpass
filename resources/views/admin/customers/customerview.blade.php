@extends('admin.layouts.admin')
@section('content')
<link rel="stylesheet" href="{{ url('css/userview.css')}}" type="text/css" />
   <div class="row">
      <div class="col-12">
         <h1>Customer Profile</h1>
         <div class="separator mb-5"></div>
      </div>
   </div>
   <div class="row mb-4">
      <div class="col-12 mb-4">
         <div class="col rightcontentsec prflrightcontentsec">
                  <section class="storesection innersection profilearea">
                     
                     <div class="profilerow pt-2">
                        <div class="profileinfo">
                           <div class="profilehdr">
                              <div class="profilelefthdr pfl_lefthdr">
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
                                 <h3>{{ $user->first_name }} {{ $user->last_name }}</h3>
                              </div>
                              
                           </div>
                           <div class="profilecont">
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
                                 <div class="col-md-5 prof_info">
                                    <span>Telefoon</span>
                                    <p><a href="tel:{{ $user->mobile_number }}">{{ $user->mobile_number }}</a></p>
                                 </div>
                                 <div class="col-md-4 prof_info">
                                    <span>E-mail</span>
                                    <p><a href="mailto:{{ $user->email }}">{{ $user->email }}</a></p>
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