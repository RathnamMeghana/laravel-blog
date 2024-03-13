@extends('layouts.app')

@section('content')
<div class="slideshow-container">

    <div class="mySlides fade">
      <div class="numbertext">1 / 4</div>
     
       <img src="../images/batman.jpg" style="width:100%;height:700px">
      <div class="slide-text" >
        <h1 style="font-size: 24px"> Batman(2022)</h1><br>
        <p>"The Batman" (2022) stars Robert Pattinson as a younger, grittier Bruce Wayne confronting Gotham City's corruption and the rise of The Riddler, a sadistic killer. Directed by Matt Reeves, this dark, detective-focused narrative reimagines Batman's quest for justice with a noirish twist.        </p>
      </div>   
      <div class="text">Batman</div>
    </div>
    
    
    <div class="mySlides fade">
      <div class="numbertext">2 / 4</div>
      <img src="../images/Oppenheimer.jpg" style="width:100%;height:700px">
      <div class="slide-text" >
        <h1 style="font-size: 24px"> Oppenheimer(2023)</h1><br>
        <p>Directed by Christopher Nolan, "Oppenheimer" is a biographical drama centered on J. Robert Oppenheimer, the theoretical physicist who played a pivotal role in the development of the atomic bomb during World War II. The film is expected to explore the complexities of his contributions and the moral dilemmas surrounding the Manhattan Project.</p>
      </div> 
      <div class="text">Oppenheimer</div>
    </div>
    
    <div class="mySlides fade">
      <div class="numbertext">3 / 4</div>
      <img src="../images/johnwick.jpg" style="width:100%;height:700px">
      <div class="slide-text" >
        <h1 style="font-size: 24px">JohnWick Part-4</h1><br>
        <p>The fourth installment in the John Wick series continues the story of the titular character, played by Keanu Reeves, a former hitman drawn back into a violent underworld. This chapter promises to escalate the stakes with even more intense action sequences as John Wick confronts new adversaries and delves deeper into the criminal underworld's intricacies.</p>
      </div> 
      <div class="text">JohnWick Part-4</div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">4 / 4</div>
        <img src="../images/dunes-part2.jpg" style="width:100%;height:700px">
        <div class="slide-text" >
          <h1 style="font-size: 24px">Dunes Part-2</h1><br>
          <p>Following the events of the first film, "Dune: Part Two" delves further into Frank Herbert's rich sci-fi universe. Directed by Denis Villeneuve, the sequel continues the epic journey of Paul Atreides as he unites with the Fremen to avenge his family and fight for control of Arrakis, a desert planet that is the only source of the universe's most valuable substance. The film aims to expand on the themes of power, betrayal, and destiny.</p>
        </div> 
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
                <a href="https://www.youtube.com/watch?v=t06RUxPbp_c" target="_blank" >
                  Watch Trailer
                </a>
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
            <a href="https://www.youtube.com/watch?v=FUK2kdPsBws" target="_blank" >
              Watch Trailer
            </a>
          </div>
        </div>
      </div>
      
    <div class="card_container" data-offset="2">
        <div class="pg">
          <img src="https://pluspng.com/img-png/aquaman-png-aquaman-png-clipart-666.png">
        </div>
        <div class="card" style="background:url(https://riverbeats.life/neworleans/wp-content/uploads/2018/07/Atlantis.png) 100%; ">
          <div class="shine"></div>
          <div class="text-block">
            <h1>Aquaman <small>(2018)</small></h1>
            <h3>Action | Adventure</h3>
            <p>
              Arthur Curry learns that he is the heir to the underwater kingdom of Atlantis, and must step forward to lead his people and be a hero to the world.
            </p>
            <a href="https://www.youtube.com/watch?v=2wcj6SrX4zw" target="_blank" >
              Watch Trailer
            </a>
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