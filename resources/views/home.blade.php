@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
       <div class="col-3 p-5">
           <img src="https://media-exp1.licdn.com/dms/image/C4E0BAQGLKj3JHcof0w/company-logo_200_200/0/1589990867649?e=2159024400&v=beta&t=V8puy6s_dYMSAsGHDbhTWfKdLkqoQD5NBhIv3kkmJMQ" class="rounded-circle" alt="">
       </div>
       <div class = "col-9 pt-5">
           <div>
               <h1>{{ $user->username }}</h1>
           </div>
            <div class="d-flex">
              <div class="pr-5">
                  <strong>153</strong> posts
              </div>
              <div class="pr-5">
                  <strong>23k</strong> followers
              </div>
              <div class="pr-5">
                  <strong>212</strong> following 
              </div>
            </div>
            <div class="pt-4 font-weight-bold">
                freeCodeCamp.org
            </div>
            <div>
                We're a global community of millions of people learning to code together. We're an open source, donor-supported, 501(c)(3) nonprofit.
            </div>
            <div>
                <a href="#">www.freecodecamp.org</a>
            </div>
            
       </div>
   </div>
  <div class="row pt-5">
       <div class="col-4">
           <img src="https://instagram.flim1-2.fna.fbcdn.net/v/t51.2885-15/e35/c2.0.824.824a/s320x320/164147893_271339697973200_4501097284613692727_n.jpg?tp=1&_nc_ht=instagram.flim1-2.fna.fbcdn.net&_nc_cat=108&_nc_ohc=9F14wCvA6p0AX8GQjFV&ccb=7-4&oh=131fb2e9499a62d19b7e3ff732aee771&oe=608438FF&_nc_sid=7bff83" class="w-100"alt="">
       </div>
       <div class="col-4">
           <img src="https://instagram.flim1-2.fna.fbcdn.net/v/t51.2885-15/e35/c2.0.824.824a/s320x320/164147893_271339697973200_4501097284613692727_n.jpg?tp=1&_nc_ht=instagram.flim1-2.fna.fbcdn.net&_nc_cat=108&_nc_ohc=9F14wCvA6p0AX8GQjFV&ccb=7-4&oh=131fb2e9499a62d19b7e3ff732aee771&oe=608438FF&_nc_sid=7bff83" class="w-100"alt="">
       </div>
       <div class="col-4">
           <img src="https://instagram.flim1-2.fna.fbcdn.net/v/t51.2885-15/e35/c2.0.824.824a/s320x320/164147893_271339697973200_4501097284613692727_n.jpg?tp=1&_nc_ht=instagram.flim1-2.fna.fbcdn.net&_nc_cat=108&_nc_ohc=9F14wCvA6p0AX8GQjFV&ccb=7-4&oh=131fb2e9499a62d19b7e3ff732aee771&oe=608438FF&_nc_sid=7bff83" class="w-100"alt="">
       </div>
  </div>
</div>
@endsection
