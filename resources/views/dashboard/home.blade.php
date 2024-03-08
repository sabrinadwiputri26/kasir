@extends('layout')
@section('content')
<!-- home section starts  -->

<section class="home" id="home">

    <div class="img">
        <img src="{{ asset('assets/img/bg.png')}}" alt="">
    </div>

    <div class="content">
        <h3 class="font-weight-bold">LET'S ORDER SNACKS HERE!!</h3>
        <h2></h2>
        <p>GO-EAT ini dapat digunakan oleh seluruh warga di Indonesia untuk memesan makanan melalui website ataupun aplikasi yang kalian punya.
            Dengan adanya GO-EAT kita dapat memesan makanan dimanapun!! </p>
    </div>
  

  
    <div class="cloud cloud-1"></div>
    <div class="cloud cloud-2"></div>
  
  </section>
  
  <!-- home section ends -->
  

<section class="jurusan" id="jurusan">

    <h1 class="heading"> MENU REKOMENDASI<br> <span> 6 Hidangan Yang Wajib dicoba</span> </h1>
   
    <div class="box-container">
   
       <div class="box">
           <img src="{{asset('assets/img/ime1.jpeg')}}" alt="">
           <div class="info">
               <h3>Bakso </h3>
               <p>Bakso adalah jenis bola daging yang ditemukan pada masakan Indonesia.Bakso umumnya dibuat 
                dari campuran daging sapi giling dan tepung tapioka. Dalam penyajiannya, bakso umumnya disajikan
                 panas-panas dengan kuah kaldu sapi bening, dicampur mi, bihun, tahu.</p>
           </div>
       </div>
   
       <div class="box">
           <img src="{{asset('assets/img/ime2.jpg')}}" alt="">
           <div class="info">
               <h3>Burger</h3>
               <p>burger adalah sejenis roti berbentuk bundar yang diiris dua, dan di tengahnya diisi dengan patty
                 yang biasanya diambil dari daging, kemudian sayur-sayuran berupa selada, tomat dan bawang bombai.
                 Hamburger merupakan makanan siap saji yang populer di Amerika Serikat.</p>    
           </div>
       </div>
   
       <div class="box">
           <img src="{{asset('assets/img/ime3.jpg')}}" alt="">
           <div class="info">
               <h3>Soto</h3>
               <p>Soto (juga dikenal dengan beberapa nama lokal seperti, sroto, sauto, tauto, atau coto) adalah makanan
                 khas Indonesia seperti sop yang terbuat dari kaldu daging dan sayuran. Daging yang paling sering digunakan 
                 adalah daging sapi dan daging ayam</p>
           </div>
       </div>
   
       <div class="box">
           <img src="{{asset('assets/img/ime4.webp')}}" alt="">
           <div class="info">
               <h3>Kebab</h3>
               <p>Kebab adalah hidangan daging yang dimasak, dengan asal-usul masakan Timur Tengah. Banyak varian yang populer di seluruh dunia.
                Kebab terdiri dari daging yang dipotong atau digiling, terkadang dengan sayuran, dan berbagai pelengkap lainnya sesuai dengan resep tertentu.
               </p>
           </div>
       </div>
   
       <div class="box">
           <img src="{{asset('assets/img/ime5.jpg')}}" alt="">
           <div class="info">
               <h3>Sate</h3>
               <p> Sate atau satai adalah makanan yang terbuat dari daging yang dipotong kecil-kecil dan ditusuk sedemikian rupa dengan tusukan lidi tulang daun kelapa atau bambu, kemudian dipanggang menggunakan bara arang kayu.</p>
           </div>
       </div>
   
       <div class="box">
           <img src="{{asset('assets/img/ime6.jpg')}}" alt="">
           <div class="info">
               <h3>Ayam</h3>
               <p>Ayam goreng (bahasa Inggris: fried chicken), atau ayam goreng tepung adalah hidangan yang dibuat dari potongan daging ayam yang telah dilapisi dengan tepung atau adonan encer yang dibumbui dan digoreng.</p>
           </div>
       </div>
    </div>
   
   </section>
   

  
  
    </div>
  
  </section>
  

  <section class="contact" id="contact">
  
    <h1 class="heading"> <span>contact</span> us </h1>
  
    <div class="icons-container">
        <div class="icons">
            <i class="fas fa-phone"></i>
            <h3 class="font-weight-bold">our number</h3>
            <p>08984629292</p>
        </div>
        <div class="icons">
            <i class="fas fa-envelope"></i>
            <h3 class="font-weight-bold">our email</h3>
            <p>sabrinadpu@gmail.com</p>
        </div>
        <div class="icons">
            <i class="fas fa-map-marker-alt"></i>
            <h3 class="font-weight-bold">our location</h3>
            <p>Tajur, Bogor Selatan</p>
        </div>
    </div>
  

  
  </section>
  
  <!-- contact section ends -->
  
  
  </body>
  </html>
@endsection