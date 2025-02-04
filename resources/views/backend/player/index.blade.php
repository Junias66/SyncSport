@extends('backend.dashboard')
@section('content')
<div class="container-fluid product-wrapper">
    <div class="product-grid">
      <div class="feature-products">
        <div class="row">
          <div class="col-md-6 products-total">
            <div class="square-product-setting d-inline-block">
              <a class="icon-grid grid-layout-view" href="{{ route('players.create') }}" data-original-title="" title="">
                <button type="button" class="next-btn btn btn-primary">Ajouter un joueur</button>
              </a>
            </div>           
          </div>
          <div class="col-md-6 text-sm-end">
            <div class="select2-drpdwn-product select-options d-inline-block">
              <select class="form-control btn-square" name="select">
                <option value="opt1">Filtre</option>
                <option value="opt2">Lowest Prices</option>
                <option value="opt3">Highest Prices</option>
              </select>
            </div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-9 col-sm-12">
            <form>
              <div class="form-group m-0"> 
                <input class="form-control" type="search" placeholder="Search.." data-original-title="" title=""><i class="fa-solid fa-magnifying-glass"></i>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="product-wrapper-grid">
        <div class="row list-collection">
            @foreach ($players as $player)
                
          <div class="col-xl-3 col-sm-6 xl-4">
            <div class="card">
              <div class="product-box">
                <div class="product-img">
                  <div class="ribbon ribbon-success ribbon-right">Ajout récent</div><img class="img-fluid" src="{{ asset('storage/'.$player->pics) }}" alt="Photo">
                  <div class="product-hover">
                    <ul>
                      <li><a href="cart.html"><i class="fas fa-pencil-alt"></i></a></li>
                      <li>
                        <button class="btn" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalCenter3"><i class="fas fa-trash"></i></button>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="product-details">
                  <div class="rating">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="yellow" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="yellow" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="yellow" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="yellow" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="yellow" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="yellow" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
                    </svg>
                  </div>
                    <a href=""><h4>{{ $player->first_name }} {{ $player->last_name }}</h4></a>
                  <p>{{ $player->nationality }}, {{ \Carbon\Carbon::parse($player->birthday)->age }} ans</p>
                  <div class="product-price">
                    <p>{{ $player->height_players }}cm</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>

@endsection