
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active" id="item1">
          <img src="{{ $path_norm }}{{ $carousel_img[0]->image_path ?? 'logo\telaga_tanado.jpeg' }}" class="carousel-item-img-top" alt="...">
            <div class="container" id="carousel">
              <div class="carousel-caption text-start">
                <h1>Example headline.</h1>
                <p>{{ $carousel_img[0]->description ?? 'test'}}</p>
              </div>
            </div>
        </div>
        <div class="carousel-item" id="item2">
          <img src="{{ $path_norm }}{{ $carousel_img[0]->image_path ?? 'logo\telaga_tanado.jpeg' }}" class="carousel-item-img-top" alt="...">
            <div class="container" id="carousel">
              <div class="carousel-caption text-start">
                <h1>Example headline.</h1>
                <p>{{ $carousel_img[1]->description ?? 'test'}}</p>
              </div>
            </div>
        </div>
        <div class="carousel-item" id="item3">
          <img src="{{ $path_norm }}{{ $carousel_img[0]->image_path ?? 'logo\telaga_tanado.jpeg' }}" class="carousel-item-img-top" alt="...">
            <div class="container" id="carousel">
              <div class="carousel-caption text-start">
                <h1>Example headline.</h1>
                <p>{{ $carousel_img[2]->description ?? 'test'}}</p>
              </div>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>