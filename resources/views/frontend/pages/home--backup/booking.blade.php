@extends('frontend.creaters.landing.landing')
@section('pageTitle','Booking')
@section('content')

 <main class="site-content">
         <div class="container-fluid innercontainer">
            <div class="row">
               <div class="col leftsidebarsec dashboardsidebar mt-0">
                  <div class="sidebar_cont profilesidebar">
                     <ul class="accordion profilelist" id="accordion">
                        <li class="nav-link dropdown-toggle couponlink active">
                           <a href="{{url('booking')}}">
                              <div class="link">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <defs></defs>
                                    <path class="a" d="M0,0H24V24H0Z"/>
                                    <path class="b" d="M19,21H5a1,1,0,0,1-1-1V11H1L11.327,1.612a1,1,0,0,1,1.346,0L23,11H20v9A1,1,0,0,1,19,21Zm-6-2h5V9.157L12,3.7,6,9.157V19h5V13h2Z"/>
                                 </svg>
                                 Booking
                              </div>
                           </a>
                        </li>
                        <li class="nav-link dropdown-toggle couponlink">
                           <a href="{{url('makecoupon')}}">
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
                        <li class="nav-link dropdown-toggle couponlink">
                           <a href="{{url('store-profile')}}">
                              <div class="link">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22">
                                    <defs>
                                       <style>.a{fill:none;}</style>
                                    </defs>
                                    <path class="a" d="M0,0H22V22H0Z"/>
                                    <path d="M18,20H16.25V18.19a2.671,2.671,0,0,0-2.625-2.714H8.375A2.671,2.671,0,0,0,5.75,18.19V20H4V18.19a4.451,4.451,0,0,1,4.375-4.524h5.25A4.451,4.451,0,0,1,18,18.19Zm-7-8.143A5.342,5.342,0,0,1,5.75,6.429,5.342,5.342,0,0,1,11,1a5.342,5.342,0,0,1,5.25,5.429A5.342,5.342,0,0,1,11,11.857Zm0-1.81a3.561,3.561,0,0,0,3.5-3.619A3.561,3.561,0,0,0,11,2.81,3.561,3.561,0,0,0,7.5,6.429,3.561,3.561,0,0,0,11,10.048Z"/>
                                 </svg>
                                 Profile
                              </div>
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="col rightcontentsec dashboardcontsec">
                  <section class="storesection innersection couponsection">
                     <h2>Stores</h2>
                     <div class="searchbar_div dashboardsearch_div">
                        <form class="form-inline">
                           <div class="searchbardiv">
                              <i class="fa fa-search"></i><input class="form-control" type="search" placeholder="Search on client or order" aria-label="Search">
                           </div>
                        </form>
                        <div class="select-data sortselect">
                           <select class="selectpicker">
                              <option>Today</option>
                              <option>Name 1</option>
                              <option>Name 2</option>
                           </select>
                        </div>
                     </div>
                     <div class="tablerow">
                        <div class="tablediv">
                           <table>
                              <thead>
                                 <tr>
                                    <th>Client Name</th>
                                    <th>Client Number</th>
                                    <th>Order Number</th>
                                    <th>Coupon Name</th>
                                    <th class="actionheading">Action</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr>
                                    <td>John Doe</td>
                                    <td>387493</td>
                                    <td>#8374652</td>
                                    <td>Burger deal october</td>
                                    <td class="actionbtns"><a href="#" class="scanbtn">Scan QR</a> <a href="#" class="manualbtn">Manual</a></td>
                                 </tr>
                                 <tr>
                                    <td>Perry Scope</td>
                                    <td>562356</td>
                                    <td>#9658455</td>
                                    <td>Eva's Cantina & Grill</td>
                                    <td class="actionbtns"><a href="#" class="scanbtn">Scan QR</a> <a href="#" class="manualbtn">Manual</a></td>
                                 </tr>
                                 <tr>
                                    <td>Isabelle Ringing</td>
                                    <td>854263</td>
                                    <td>#6325412</td>
                                    <td>Burger deal october</td>
                                    <td class="actionbtns"><a href="#" class="scanbtn">Scan QR</a> <a href="#" class="manualbtn">Manual</a></td>
                                 </tr>
                                 <tr>
                                    <td>Jack Aranda</td>
                                    <td>325698</td>
                                    <td>#2541365</td>
                                    <td>101 Wine Press</td>
                                    <td class="actionbtns"><a href="#" class="scanbtn">Scan QR</a> <a href="#" class="manualbtn">Manual</a></td>
                                 </tr>
                                 <tr>
                                    <td>Karen Onnabit</td>
                                    <td>258741</td>
                                    <td>#2532598</td>
                                    <td>Burger deal october</td>
                                    <td class="actionbtns"><a href="#" class="scanbtn">Scan QR</a> <a href="#" class="manualbtn">Manual</a></td>
                                 </tr>
                                 <tr>
                                    <td>Simon Sais</td>
                                    <td>325698</td>
                                    <td>#2541365</td>
                                    <td>The Flying Artichoke Restaurant</td>
                                    <td class="actionbtns"><a href="#" class="scanbtn">Scan QR</a> <a href="#" class="manualbtn">Manual</a></td>
                                 </tr>
                                 <tr>
                                    <td>Lynne Gwistic</td>
                                    <td>745632</td>
                                    <td>#2135987</td>
                                    <td>Burger deal october</td>
                                    <td class="actionbtns"><a href="#" class="scanbtn">Scan QR</a> <a href="#" class="manualbtn">Manual</a></td>
                                 </tr>
                              </tbody>
                           </table>
                           <div class="paginationdiv">
                              <ul class="pagination">
                                 <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true"><i class="fa fa-arrow-left"></i></span>
                                    <span class="sr-only">Previous</span>
                                    </a>
                                 </li>
                                 <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                 <li class="page-item"><a class="page-link" href="#">2</a></li>
                                 <li class="page-item"><a class="page-link" href="#">3</a></li>
                                 <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true"><i class="fa fa-arrow-right"></i></span>
                                    <span class="sr-only">Next</span>
                                    </a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </section>
               </div>
            </div>
         </div>
      </main>
@endsection