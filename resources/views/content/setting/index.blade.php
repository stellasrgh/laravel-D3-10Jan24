@extends('main.index')
@section('content')
    
<div id="carouselExampleIndicators" class="carousel slide">
   <div class="carousel-indicators">
     <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
     <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
     <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
   </div>
   <div class="carousel-inner">
     <div class="carousel-item active" style="height: 450px">
       <img src="https://img.freepik.com/free-photo/digital-painting-mountain-with-colorful-tree-foreground_1340-25699.jpg?size=626&ext=jpg&ga=GA1.1.1826414947.1699142400&semt=ais" class="d-block w-100 object-fit-cover border rounded" alt="...">
     </div>
     <div class="carousel-item" style="height: 450px">
       <img src="https://jenmulligandesign.com/wp-content/uploads/2017/04/unsplash-free-stock-photos-download.jpg" class="d-block w-100 object-fit-cover border rounded" alt="...">
     </div>
     <div class="carousel-item" style="height: 450px">
       <img src="https://jenmulligandesign.com/wp-content/uploads/2017/04/pexels-beach-tropical-scene-free-stock-photo.jpg" class="d-block w-100 object-fit-cover border rounded" alt="...">
     </div>
   </div>
   <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
     <span class="visually-hidden">Previous</span>
   </button>
   <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
     <span class="carousel-control-next-icon" aria-hidden="true"></span>
     <span class="visually-hidden">Next</span>
   </button>
 </div>
@endsection

