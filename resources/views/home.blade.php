@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div><h1>{{ $user -> username }}</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div> 
            </div>
            <div class="pt-4 font-weight-bold">freeCodeCamp.org</div>
            <div>We're global community of millions of people learning to code together. We're an open source, doner-supported, 501(c)(3) nonprofit</div>
            <div><a href="#" style="color:black;">www.freecodecamp.org</a></div>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-4">
            <img src="https://z-p42-instagram.flhe2-1.fna.fbcdn.net/vp/ecd2a94e2c21e814659c6f336368b15f/5E4C716E/t51.2885-15/sh0.08/e35/c1.0.748.748a/s640x640/75379747_1984863518283661_4296065131383461825_n.jpg?_nc_ad=z-m&amp;_nc_ht=z-p42-instagram.flhe2-1.fna.fbcdn.net&amp;_nc_cat=101" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://z-p42-instagram.flhe2-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.0.748.748a/s640x640/75458059_193034398548309_6670294561319117950_n.jpg?_nc_ad=z-m&amp;_nc_ht=z-p42-instagram.flhe2-1.fna.fbcdn.net&amp;_nc_cat=109&amp;_nc_ohc=BaYofRESSSkAX-y9z_B&amp;oh=a9c9d851507d013a53d359b99e151435&amp;oe=5E9C1FA3"  class="w-100">
        </div>
        <div class="col-4">
            <img src="https://z-p42-instagram.flhe2-1.fna.fbcdn.net/v/t51.2885-15/e35/80103355_194191338290631_4740082296644486422_n.jpg?_nc_ad=z-m&amp;_nc_ht=z-p42-instagram.flhe2-1.fna.fbcdn.net&amp;_nc_cat=103&amp;_nc_ohc=nXZKr93NO0kAX9vxy9E&amp;oh=6948da2ef43cbabf8f1a16c3c62e66fc&amp;oe=5E8FCE10" class="w-100">
        </div>
    </div>
</div>
@endsection
