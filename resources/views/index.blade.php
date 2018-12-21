@extends('template.layout')
@extends('template.navbar')
@extends('template.footer')


@section('title')
Fat Smoke Ribs
@endsection
@section('content')
<div id="carousel">
    <div id="home-carousel" class="carousel slide carousel-fade mt-2 blur-top  animated fadeIn delay-2s" data-ride="carousel">
        <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src={{ asset('img/pork.jpg') }} alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src={{ asset('img/resto.jpg') }} alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src={{ asset('img/wagyu.jpg') }} alt="Third slide">
          </div>
        </div>
    </div>
</div>
<div class="container my-2" id="home-feedback" data-aos="fade-up" data-aos-delay="150">
    <h3 class="display-4 text-center my-5 font-dancing">From our customers</h3>
    <div class="row" >
        <div class="col-lg-3 col-md-4 col-sm-12">
            <div class="customer-image rounded">

            </div>
            <h4 class="home-customer-name my-2">
                Lorem Ipsum
            </h4>
            <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, maiores iusto. Alias maiores quo mollitia tempora odio voluptate quibusdam, minima facilis vel hic iusto quisquam dolor! Veritatis velit odio quis!
            </p>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-12">
            <div class="customer-image rounded">

            </div>
            <h4 class="home-customer-name my-2">
                Lorem Ipsum
            </h4>
            <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, maiores iusto. Alias maiores quo mollitia tempora odio voluptate quibusdam, minima facilis vel hic iusto quisquam dolor! Veritatis velit odio quis!
            </p>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-12">
            <div class="customer-image rounded">

            </div>
            <h4 class="home-customer-name my-2">
                Lorem Ipsum
            </h4>
            <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, maiores iusto. Alias maiores quo mollitia tempora odio voluptate quibusdam, minima facilis vel hic iusto quisquam dolor! Veritatis velit odio quis!
            </p>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-12">
            <div class="customer-image rounded">

            </div>
            <h4 class="home-customer-name my-2">
                Lorem Ipsum
            </h4>
            <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, maiores iusto. Alias maiores quo mollitia tempora odio voluptate quibusdam, minima facilis vel hic iusto quisquam dolor! Veritatis velit odio quis!
            </p>
        </div>
    </div>
</div>
<div class="container" id="about-the-chef" data-aos="fade-up" data-aos-delay="150">
    <div class="container inner-container my-auto">
        <div class="row h-100">
                <div class="col-lg-6 col-md-12 col-sm-12" >
                    <img src={{ asset('img/chef.jpg') }} class="float-right founder-image"/>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 pt-5">
                    <div class="founder-image">
                    <h2 class="font-dancing h1">Founders</h2>
                    <hr>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi eveniet aspernatur, optio tenetur rerum dolores repudiandae, quod magni facere commodi sit! Exercitationem natus voluptatum aut dicta veniam? Soluta, sed excepturi?

                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae distinctio commodi voluptatibus aperiam numquam recusandae ea in assumenda sequi itaque perspiciatis esse est ipsa saepe nam, sint doloribus rerum. Unde!
                    </p>
                </div>
                </div>
        </div>
    </div>
</div>

@endsection