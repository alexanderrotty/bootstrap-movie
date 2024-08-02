<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 5 Website Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>
</head>
<body>

<div class="p-5 bg-primary text-white text-center">
  <h1>Movie X 3</h1>
  <p>Best Movie Theater</p>
</div>

@include('nav')
@foreach ($banner as $bannerItem)

<div class="container mt-5">

  <div class="row">
    <div class="col-sm-4">
      <h2>{{ $bannerItem->title }}</h2>
      <h5>{{ $bannerItem->release_date }}</h5>
      <img src="{{ $imageBaseURL }}/original{{ $bannerItem->backdrop_path}}" class="fakeimg absolute w-full h-full object-cover" alt="">
      <p><svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><defs><style>.a{fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;}</style></defs><title>like-1</title><path class="a" d="M20,15.659h0a1.5,1.5,0,1,1,0,3H19a1.5,1.5,0,0,1,1.5,1.5c0,.829-.672,1-1.5,1H12.5c-2.851,0-3.5-.5-7-1v-8.5c2.45,0,6.5-4.5,6.5-8.5,0-1.581,2.189-2.17,3,.719.5,1.781-1,5.281-1,5.281h8a1.5,1.5,0,0,1,1.5,1.5c0,.829-.672,2-1.5,2H21a1.5,1.5,0,0,1,0,3H20"></path><rect class="a" x="0.5" y="10.159" width="5" height="12"></rect><path d="M3.25,19.159a.75.75,0,1,0,.75.75.75.75,0,0,0-.75-.75Z"></path></svg>{{ $bannerItem->vote_average }}</p>
      <h3 class="mt-4">Some Links</h3>
      <p>Lorem ipsum dolor sit ame.</p>
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link active" href="#">Active</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Disabled</a>
        </li>
      </ul>
      <hr class="d-sm-none">
    </div>
    <div class="col-sm-8">
      <h2>{{ $bannerItem->title }}</h2>
      <h5>{{ $bannerItem->release_date }}</h5>
      <img src="{{ $imageBaseURL }}/original{{ $bannerItem->backdrop_path}}" class="fakeimg absolute w-full h-full object-cover" alt="">
      <p><svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><defs><style>.a{fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;}</style></defs><title>like-1</title><path class="a" d="M20,15.659h0a1.5,1.5,0,1,1,0,3H19a1.5,1.5,0,0,1,1.5,1.5c0,.829-.672,1-1.5,1H12.5c-2.851,0-3.5-.5-7-1v-8.5c2.45,0,6.5-4.5,6.5-8.5,0-1.581,2.189-2.17,3,.719.5,1.781-1,5.281-1,5.281h8a1.5,1.5,0,0,1,1.5,1.5c0,.829-.672,2-1.5,2H21a1.5,1.5,0,0,1,0,3H20"></path><rect class="a" x="0.5" y="10.159" width="5" height="12"></rect><path d="M3.25,19.159a.75.75,0,1,0,.75.75.75.75,0,0,0-.75-.75Z"></path></svg>{{ $bannerItem->vote_average }}</p>
      <p>{{ $bannerItem->overview}}</p>

      <h2 class="mt-5">{{ $bannerItem->title }}</h2>
      <h5>{{ $bannerItem->title }} {{ $bannerItem->release_date }}</h5>
      <img src="{{ $imageBaseURL }}/original{{ $bannerItem->backdrop_path}}" class="fakeimg absolute w-full h-full object-cover" alt="">
      <p><svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><defs><style>.a{fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;}</style></defs><title>like-1</title><path class="a" d="M20,15.659h0a1.5,1.5,0,1,1,0,3H19a1.5,1.5,0,0,1,1.5,1.5c0,.829-.672,1-1.5,1H12.5c-2.851,0-3.5-.5-7-1v-8.5c2.45,0,6.5-4.5,6.5-8.5,0-1.581,2.189-2.17,3,.719.5,1.781-1,5.281-1,5.281h8a1.5,1.5,0,0,1,1.5,1.5c0,.829-.672,2-1.5,2H21a1.5,1.5,0,0,1,0,3H20"></path><rect class="a" x="0.5" y="10.159" width="5" height="12"></rect><path d="M3.25,19.159a.75.75,0,1,0,.75.75.75.75,0,0,0-.75-.75Z"></path></svg>{{ $bannerItem->vote_average }}</p>

      <p>{{ $bannerItem->overview}}</p>
    </div>
  </div>
</div>
@endforeach

<div class="mt-5 p-4 bg-dark text-white text-center">
  <p>Footer</p>
</div>

</body>
</html>
