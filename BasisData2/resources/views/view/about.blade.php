@extends('layoutView')
@section('konten')
<h4>About us</h4>
<div class="container d-flex">
<img src="{{url('/img/toko.png')}}" class="img-fluid" alt="Responsive image"> 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d837.6517309790976!2d104.7429139646561!3d-2.9403642718907568!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54505565fdcf705%3A0xa68d7807d39a18e2!2sTB%20Bumi%20Jaya!5e0!3m2!1sid!2sid!4v1719736470969!5m2!1sid!2sid" width="800" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<h4>Pendataan Penjualan</h4>
<img src="{{url('/img/proses.png')}}" class="img-fluid" alt="Responsive image">  
<h4>Pendataan Gaji</h4>  
<img src="{{url('/img/gaji.jpg')}}" class="img-fluid" alt="Responsive image">  
<h4>ERD Toko Bangunan</h4>
<img src="{{url('/img/ERD.png')}}" class="img-fluid" alt="Responsive image">    
<h4>Transformasi ERD ke tabel</h4>
<img src="{{url('/img/Tabel.png')}}" class="img-fluid" alt="Responsive image"> 
<h4>Skema Database</h4>
<img src="{{url('/img/skema.png')}}" class="img-fluid" alt="Responsive image"> 
@endsection