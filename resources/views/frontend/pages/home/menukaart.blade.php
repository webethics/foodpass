@extends('frontend.creaters.landing.landing')
@section('pageTitle','Menucart')
@section('content')

         <div class="container innercontainer">
            <div class="row">
               <div class="col leftsidebarsec profileftsidebar mobsidebar">
                  <div class="sidebar_cont profilesidebar">
                     <div class="userinfo">
                        <div class="userimage">
							@if($user->profile_photo==NULL)
							  <img src="{{asset('frontend/images/userimage.png')}}">
							@else
								
							@php
								$photo =  profile_photo($user->id);
							@endphp
								<img src="{{timthumb($photo,80,80)}}">
							@endif
                           
                        </div>
                        <h4>{{ $user->restaurant_name }}</h4>
                        <a href="{{ $user->website }}">{{ $user->website }}</a>
                        <a href="tel:{{ $user->mobile_number }}">{{ $user->mobile_number }}</a>
                     </div>
                     <ul class="accordion profilelist" id="accordion">
                        <li class="nav-link dropdown-toggle couponlink">
                           <a href="/coupons/{{$user->id}}">
                              <div class="link">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22">
                                    <defs>
                                       <style>.a{fill:none;}.b{fill:#0f0f0f;}</style>
                                    </defs>
                                    <path class="a" d="M0,0H22V22H0Z"/>
                                    <path class="b" d="M2,8.778V3.889A.894.894,0,0,1,2.9,3H19.1a.894.894,0,0,1,.9.889V8.778a2.222,2.222,0,1,0,0,4.444v4.889a.894.894,0,0,1-.9.889H2.9a.894.894,0,0,1-.9-.889V13.222A2.222,2.222,0,1,0,2,8.778ZM3.8,7.416a3.978,3.978,0,0,1,0,7.168v2.638H18.2V14.584a3.978,3.978,0,0,1,0-7.168V4.778H3.8Zm4.5.917h5.4v1.778H8.3Zm0,3.556h5.4v1.778H8.3Z" transform="translate(0)"/>
                                 </svg>
                                 Coupons
                              </div>
                           </a>
                        </li>
                        <li class="nav-link dropdown-toggle menukartlink active">
                           <a href="/menukaart/{{$user->id}}">
                              <div class="link">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <defs>
                                       <style>.a{fill:none;}</style>
                                    </defs>
                                    <path class="a" d="M0,0H24V24H0Z"/>
                                    <path d="M3,4H21V6H3Zm0,7H21v2H3Zm0,7H21v2H3Z"/>
                                 </svg>
                                 MenuKaart
                              </div>
                           </a>
                        </li>
                        <li class="nav-link dropdown-toggle reviewlink">
                           <a href="#">
                              <div class="link">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <defs>
                                       <style>.a{fill:none;}</style>
                                    </defs>
                                    <path class="a" d="M0,0H24V24H0Z"/>
                                    <path d="M12,18.26,4.947,22.208,6.522,14.28.587,8.792,8.614,7.84,12,.5l3.386,7.34,8.027.952L17.478,14.28l1.575,7.928Zm0-2.292,4.247,2.377L15.3,13.572l3.573-3.305-4.833-.573L12,5.275,9.962,9.695l-4.833.572L8.7,13.572l-.949,4.773Z"/>
                                 </svg>
                                 Reviews
                              </div>
                           </a>
                        </li>
                        <li class="nav-link dropdown-toggle infolink">
                           <a href="/info/{{$user->id}}">
                              <div class="link">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <defs>
                                       <style>.a{fill:none;}</style>
                                    </defs>
                                    <path class="a" d="M0,0H24V24H0Z"/>
                                    <path d="M12,22A10,10,0,1,1,22,12,10,10,0,0,1,12,22Zm0-2a8,8,0,1,0-8-8A8,8,0,0,0,12,20ZM11,7h2V9H11Zm0,4h2v6H11Z"/>
                                 </svg>
                                 Info
                              </div>
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="col rightcontentsec">
                  <section class="storesection innersection menukaartsec">
                     <h2>Menukaart</h2>
                     @if($user->menu_file != "" && $user->menu_file != Null)
					   @php
						$menu_url =  store_menu($user->id);
					   @endphp   
					   <a class="see_menukart" target="_blank" href = "{{$menu_url}}"><p>BEKIJK MENU KAART</p></a>
					   <a class="download_menukart" href = "{{$menu_url}}" download><p>Download</p></a>
					 @else
						No Menu Found! 
				     @endif
                  </section>
               </div>
            </div>
         </div>
 
@endsection