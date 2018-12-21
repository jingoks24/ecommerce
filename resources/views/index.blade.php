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
<div class="container my-5  animated fadeIn delay-2s"" id="call-to-action" data-aos="fade-up" data-aos-delay="150">
    <div class="text-center">
        <div class="text-center">
            <i class="fas fa-truck fa-10x"></i>
        </div>
        <button class="btn btn-outline-primary mt-4">Order Now!</button>
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
                            Bacon ipsum dolor amet doner alcatra landjaeger picanha tri-tip filet mignon bacon shankle salami andouille tail cow chuck. Meatball cupim alcatra, doner bresaola cow rump andouille sausage kevin jowl filet mignon. Pig chicken boudin salami venison. Pork kielbasa rump leberkas, shank alcatra spare ribs biltong kevin pork belly fatback swine chicken cow. Fatback meatloaf picanha, chicken beef ball tip kevin pork capicola ham biltong frankfurter. Venison capicola pork hamburger, landjaeger ball tip bacon filet mignon cupim shoulder kevin brisket.

                            Sausage t-bone drumstick doner. Ball tip fatback shank jowl picanha boudin. Frankfurter tenderloin ribeye bacon, spare ribs strip steak shank tri-tip ham pork belly pastrami hamburger. Shoulder spare ribs boudin pig short loin. Bresaola tri-tip turkey ball tip andouille. 
                            
                    </p>
                </div>
                </div>
        </div>
    </div>
</div>

@endsection