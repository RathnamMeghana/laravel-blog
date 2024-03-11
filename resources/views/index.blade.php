@extends('layouts.app')

@section('content')
<div class="slideshow-container">

    <div class="mySlides fade">
      <div class="numbertext">1 / 3</div>
      <img src="../images/batman.jpg" style="width:100%">
      <div class="text">Batman</div>
    </div>
    
    <div class="mySlides fade">
      <div class="numbertext">2 / 3</div>
      <img src="../images/Oppenheimer.jpg" style="width:100%">
      <div class="text">Oppenheimer</div>
    </div>
    
    <div class="mySlides fade">
      <div class="numbertext">3 / 3</div>
      <img src="../images/johnwick.jpg" style="width:100%">
      <div class="text">JohnWick Part-4</div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">4 / 4</div>
        <img src="../images/dunes-part2.jpg" style="width:100%">
        <div class="text">Dunes Part-2</div>
      </div>
    
    <a class="prev" onclick="plusSlides(-1)">❮</a>
    <a class="next" onclick="plusSlides(1)">❯</a>
    
    </div>
    <br>
    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span> 
      <span class="dot" onclick="currentSlide(2)"></span> 
      <span class="dot" onclick="currentSlide(3)"></span> 
    </div>

<div class="feature-showcase">
    <h2 class="showcase-title">Top Movies</h2>
    <div class="showcase-wrapper">
        <div class="categories-container">
  
            <div class="category" id="all-time-favourite">
                <h3 class="category-title">All Time favourite Movies</h3>
                <div class="category-content">
                    <img src="../images/shawshank.png">
                    <img src="../images/thegodfather.png">
                    <img src="../images/titanic.png">
                    <img src="../images/darkknight.png">
                </div>
            </div>
            <div class="category" id="rom-com">
                <h3 class="category-title">Rom-Com Movies</h3>
                <div class="category-content">
                    <img src="../images/harrymetsally.png">
                    <img src="../images/lovesimon.png">
                    <img src="../images/sleeplessinseattle.png">
                    <img src="../images/whileuweresleeping.png">
                </div>
            </div>

            <div class="category" id="kids">
                <h3 class="category-title">Kids Movies</h3>
                <div class="category-content">
                    <img src="../images/incredibles.png">
                    <img src="../images/sw.png">
                    <img src="../images/toystory.png">
                    <img src="../images/bab.png">
                </div>
            </div>
        </div>
    </div>
    <button class="prev-button">&#10094;</button>
    <button class="next-button">&#10095;</button>
</div>
<div class="movie_cards">
    <div class="card_container" data-offset="2">
        <div class="pg_1">
          <img src="..\images\transparent-spider-man-spider-man-character-in-powerful-pose-wearing-span65cabb86615ac5.5423454717077850943988.png">
        </div>
        <div class="card" style="background:url(https://images7.alphacoders.com/943/thumb-1920-943918.jpg) 100% bottom; ">
          <div class="shine"></div>
          <div class="text-block">
            <h1>SPIDER-MAN <small>(2002)</small></h1>
            <h3>Action | Adventure</h3>
            <p>
                After being bitten by a genetically altered spider, nerdy high school student Peter Parker is endowed with amazing powers to become Spider-Man. As he learns to harness his new-found abilities, Peter must face the challenge of balancing his personal life with his responsibility to fight crime in a bustling city, all while confronting a dark figure from his past—the nefarious Green Goblin.            </p>
            <button>Watch Trailer</button>
          </div>
        </div>
      </div>
</div>

      <div class="card_container" data-offset="2">
        <div class="pg_1">
          <img src="../images/pngwing.com.png">
        </div>
        <div class="card" style="background:url(https://w0.peakpx.com/wallpaper/426/791/HD-wallpaper-fast-8-the-fate-of-the-furious-fast-8-fast-and-furious-movies-2017-movies.jpg) 100% bottom; ">
          <div class="shine"></div>
          <div class="text-block">
            <h1>FAST & FURIOUS 9 <small>(2021) </small></h1>
            <h3>Action | Adventure</h3>
            <p>
                Dom Toretto confronts his past when his estranged brother, Jakob, an assassin allied with their enemy Cipher, threatens his family. Dom and his crew unite to stop Jakob's world-shattering plot in a high-stakes adventure that tests their limits and bonds.
            </p>
            <button>Watch Trailer</button>
          </div>
        </div>
      </div>
      
    <div class="card_container" data-offset="2">
        <div class="pg">
          <img src="https://pluspng.com/img-png/aquaman-png-aquaman-png-clipart-666.png">
        </div>
        <div class="card" style="background:url(https://riverbeats.life/neworleans/wp-content/uploads/2018/07/Atlantis.png) 100% bottom; ">
          <div class="shine"></div>
          <div class="text-block">
            <h1>Aquaman <small>(2018)</small></h1>
            <h3>Action | Adventure</h3>
            <p>
              Arthur Curry learns that he is the heir to the underwater kingdom of Atlantis, and must step forward to lead his people and be a hero to the world.
            </p>
            <button>Watch Trailer</button>
          </div>
        </div>
      </div>


      
    <script>
        let slideIndex = 1;
        showSlides(slideIndex);
        
        function plusSlides(n) {
          showSlides(slideIndex += n);
        }
        
        function currentSlide(n) {
          showSlides(slideIndex = n);
        }
        
        function showSlides(n) {
          let i;
          let slides = document.getElementsByClassName("mySlides");
          let dots = document.getElementsByClassName("dot");
          if (n > slides.length) {slideIndex = 1}    
          if (n < 1) {slideIndex = slides.length}
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
          }
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";  
          dots[slideIndex-1].className += " active";
        }

        document.addEventListener('DOMContentLoaded', function () {
    const prevButton = document.querySelector('.prev-button');
    const nextButton = document.querySelector('.next-button');
    const categoriesContainer = document.querySelector('.categories-container');

    prevButton.addEventListener('click', function () {
        categoriesContainer.scrollBy({ left: -window.innerWidth, behavior: 'smooth' });
    });

    nextButton.addEventListener('click', function () {
        categoriesContainer.scrollBy({ left: window.innerWidth, behavior: 'smooth' });
    });
});

        </script>
@endsection