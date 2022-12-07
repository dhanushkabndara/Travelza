 @extends('layouts.layout')
 @section('content')




  <div class="wrapper">
    <!-- filter Items -->
    <nav>
      <div class="items">
        <span class="item active" data-name="all">All</span>
        <span class="item" data-name="Hotels">hotels</span>
        <span class="item" data-name="Beach">beach</span>
        <span class="item" data-name="Cmping">camping</span>
        <span class="item" data-name="Hiking">hiking</span>
        <span class="item" data-name="Wild">wild</span>
      </div>
    </nav>
    <!-- filter Images -->
    <div class="gallery">
      <div class="image" data-name="Hotels"><span><img src="img/hotel1.jpg" alt=""></span></div>
      <div class="image" data-name="Hotels"><span><img src="img/hotel2.jpg" alt=""></span></div>
      <div class="image" data-name="Hotels"><span><img src="img/hotel3.jpg" alt=""></span></div>
      <div class="image" data-name="Hotels"><span><img src="img/hotel4.jpg" alt=""></span></div>
      <div class="image" data-name="Hotels"><span><img src="img/hotel5.jpg" alt=""></span></div>

      <div class="image" data-name="Wild"><span><img src="img/wild1.jpg" alt=""></span></div>
      <div class="image" data-name="Wild"><span><img src="img/wild2.jpg" alt=""></span></div>
      <div class="image" data-name="Wild"><span><img src="img/wild3.jpg" alt=""></span></div>
      <div class="image" data-name="Wild"><span><img src="img/wild4.jpg" alt=""></span></div>
      <div class="image" data-name="Wild"><span><img src="img/wild5.jpg" alt=""></span></div>
      <div class="image" data-name="Wild"><span><img src="img/wild6.jpg" alt=""></span></div>
      <div class="image" data-name="Wild"><span><img src="img/wild7.jpg" alt=""></span></div>
      

      <div class="image" data-name="Beach"><span><img src="img/beach1.jpg" alt=""></span></div>
      <div class="image" data-name="Beach"><span><img src="img/beach2.jpeg" alt=""></span></div>
      <div class="image" data-name="Beach"><span><img src="img/beach3.jpg" alt=""></span></div>
      <div class="image" data-name="Beach"><span><img src="img/beach4.jpg" alt=""></span></div>
      <div class="image" data-name="Beach"><span><img src="img/beach5.jpg" alt=""></span></div>
      <div class="image" data-name="Beach"><span><img src="img/beach6.jpg" alt=""></span></div>

      

      <div class="image" data-name="Cmping"><span><img src="img/camp1.jpg" alt=""></span></div>
      <div class="image" data-name="Cmping"><span><img src="img/camp2.jpg" alt=""></span></div>
      <div class="image" data-name="Cmping"><span><img src="img/camp3.jpg" alt=""></span></div>
      <div class="image" data-name="Cmping"><span><img src="img/camp4.jpg" alt=""></span></div>
      <div class="image" data-name="Cmping"><span><img src="img/camp5.jpg" alt=""></span></div>
      <div class="image" data-name="Cmping"><span><img src="img/camp6.jpg" alt=""></span></div>
      
      <div class="image" data-name="Hiking"><span><img src="img/hike1.jpg" alt=""></span></div>
      <div class="image" data-name="Hiking"><span><img src="img/hike2.jpg" alt=""></span></div>
      <div class="image" data-name="Hiking"><span><img src="img/hike3.jpg" alt=""></span></div>
      <div class="image" data-name="Hiking"><span><img src="img/hike4.jpg" alt=""></span></div>
      <div class="image" data-name="Hiking"><span><img src="img/hike5.jpg" alt=""></span></div>
    </div>
  </div>
  <!-- fullscreen img preview box -->
  <div class="preview-box">
    <div class="details">
      <span class="title">Image Category: <p></p></span>
      <span class="icon fas fa-times"></span>
    </div>
    <div class="image-box"><img src="" alt=""></div>
  </div>
  <div class="shadow"></div>
 
@endsection


