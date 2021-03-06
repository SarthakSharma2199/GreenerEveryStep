<!DOCTYPE html>
<html lang="en">

<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>
  <nav>
    <div id="header">
      <script>
        $(function() {
          $('#header').load('reusenavbar.php');

        });
      </script>

    </div>
  </nav>


  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/highres/cascade-creek-environment-fern-460621.jpg" class="d-block w-100 img-fluid" alt="..."  />
        <div class="carousel-caption d-none d-md-block">
          <h5>Read how small steps can lead to big results</h5>
          <p>
            People who are trying to save the world one step at a time.
          </p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/highres/markus-spiske-RN14PbITnnM-unsplash.jpg" class="d-block w-100" alt="..." />
        <div class="carousel-caption d-none d-md-block text-dark ">

          <h5>Every victory starts with small steps</h5>
          <p>Even tiny changes can have a big impact</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/highres/markus-spiske-oJZJdhFL2gk-unsplash.jpg" class="d-block w-100" alt="..." />
        <div class="carousel-caption d-none d-md-block">
          <h5>Our planet is what we all have in common</h5>
          <p>
            The environment is where we all meet; where we all have a mutual interest; it is the one thing all of us
            share.
          </p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <section class="my-5">
    <div class="py-5">
      <h1 class="text-center">About Greener Every Step</h1>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3 col-md-3 col-4">
          <img src="images/mainicon.jpeg" alt="About us" class="img-fluid" />
        </div>

        <div class="col-lg-9 col-md-9 col-8">
          <h2>"Never doubt that a small group of thoughtful, committed people can change the world; indeed, it is the
            only thing that ever has."</h2>
          <p style="font-size:20px">
            The environment is where we all meet, where all have a mutual interest, it is the one thing all of us share.
            Our planet's alarm has been ringing for quite a while and it is high time to take action. The only way
            forward to help our planet is by getting everybody involved. Easier said than done, environment protection
            requires unified individual and government support, however, the best way to kickstart progress is by
            motivating people to take steps within their capacity.

            We at "Greener Every Step" believe that the best way to connect us humans is through shared stories.

          </p>
          <a href="about.php" class="btn btn-success">Read more</a>
        </div>

      </div>
    </div>

  </section>




  <section class="my-5">
    <div class="py-5">
      <h1 class="text-center">Amazing Stories that are helping our planet</h1>
    </div>


    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12">

          <div class="card">
            <img class="card-img-top" src="images/storyimages/story1img.JPG" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Volunteers Pick Up 5.3 Million Kilograms Of Trash On A Beach In Mumbai</h5>
              <p class="card-text">To this day this incredible initiative is called “world’s largest beach clean-up
                project”. Environmentalist
                Afroz Shaz started picking up the trash from the beach back in 2015, with more and more people...

              </p>
              <a href="mainstories.php#mainstory1" class="btn btn-primary">Read More</a>
            </div>
          </div>


        </div>

        <div class="col-lg-4 col-md-4 col-12">

          <div class="card">
            <img class="card-img-top" src="images/storyimages/story2img.JPG" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">The couple that spent 26 years replanting a forest</h5>
              <p class="card-text">Anil Malhotra and his wife Pamela Gale Malhotra own India's only private wildlife
                sanctuary, but it's taken
                decades of replanting and protecting forests and wildlife to get it to where it is today. Pamela says,
                "When
                we first came here...


              </p>
              <a href="mainstories.php#mainstory2" class="btn btn-primary">Read More</a>
            </div>
          </div>


        </div>

        <div class="col-lg-4 col-md-4 col-12">

          <div class="card">
            <img class="card-img-top" src="images/storyimages/story3img.JPG" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">The 79-year-old who creates artificial glaciers for Ladakh</h5>
              <p class="card-text">The dry and infertile land of Ladakh makes life pretty hard there, and average
                rainfall is also pitifully low. People are dependent on glaciers for water for farming, so Chewang
                Norphel started...

              </p>
              <a href="mainstories.php#mainstory3" class="btn btn-primary">Read more</a>
            </div>
          </div>


        </div>


      </div>




    </div>

  </section>



</body>

</html>