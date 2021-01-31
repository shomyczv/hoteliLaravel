@extends('master')

@section('title','Hotels')

<style>
    @import url("https://fonts.googleapis.com/css?family=Roboto:300,400,500,700");
* {
  margin: 0;
  padding: 0;
}

html, body {
  height: 100%;
}

ul {
  list-style: none;
  display: flex;
  justify-content: flex-end;
}

.top__header {
  position: relative;
  height: 45px;
  padding: 10px;
  background: #51D6FB;
  color: #FFFFFF;
  font-size: 12px;
  font-family: "Roboto", sans-serif;
  text-align: center;
  overflow: hidden;
}
.top__header .icon__menu .menu__mobile {
  text-align: left;
  margin-top: -5px;
}
.top__header .icon__menu .menu__desktop {
  display: none;
}
.top__header h3 {
  position: absolute;
  bottom: 10px;
  width: 100%;
  text-align: center;
}
.top__header:before {
  content: "";
  width: 100%;
  border-radius: 10px 10px 0 0;
  background: #1fcafa;
  height: 100%;
  display: block;
  position: absolute;
  top: 32px;
  left: 0;
}

.cards {
  margin-top: 1rem;
  padding: 10px;
  display: grid;
  grid-gap: 20px;
  font-family: "Roboto", sans-serif;
}
.cards .card {
  position: relative;
  max-height: 340px;
  padding: 10px;
  border-radius: 8px;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.4);
  display: grid;
  grid-gap: 10px;
  grid-template-columns: repeat(auto-fit, minmax(auto, 1fr));
}
.cards .card__img {
  max-height: 260px;
  max-width: 100%;
  object-fit: cover;
  border-radius: 10px;
  overflow: hidden;
}
.cards .card__details {
  position: relative;
  top: -36px;
  width: 90%;
  padding: 10px;
  margin: 0 auto;
  background: white;
  border-radius: 10px;
  box-shadow: 0 4px 8px 0 rgba(3, 6, 31, 0.15);
  display: grid;
  grid-gap: 5px;
}
.cards .card__details h3 {
  font-size: 22px;
  font-weight: 400;
}
.cards .card__details .address {
  color: #777777;
  font-size: 12px;
}
.cards .card__details .price {
  display: grid;
  grid-template-columns: 1fr 1fr;
}
.cards .card__details .price .price__l {
  width: 100%;
  text-align: right;
}
.cards .card__details .price .price__l .price__label {
  font-weight: 600;
  text-align: right;
}
.cards .card__details .price .star img {
  width: 14px;
}
.cards .card__details button {
  cursor: pointer;
  width: 100%;
  padding: 15px;
  border: none;
  border-radius: 5px;
  background: #51D6FB;
  color: #FFFFFF;
}
.cards .card__details button:focus {
  outline: none;
}
.cards .card .credit-img {
  position: absolute;
  right: 0;
  bottom: 0;
  padding: 10px;
  font-size: 10px;
  text-align: right;
}

picture {
    background: url(mountain.jpg);
  background-repeat: no-repeat;
  background-size: 75% 50%;
}

@media (max-width: 347px) {
  .cards .card__details .price {
    align-items: baseline;
  }
  .cards .card__details .price .price__l {
    font-size: 12px;
  }
}
@media (min-width: 425px) {
  .top__header .icon__menu .menu__mobile {
    display: none;
  }
  .top__header .icon__menu .menu__desktop {
    display: block;
  }
  .top__header .icon__menu .menu__desktop ul.desktop__menu li {
    cursor: pointer;
    margin: 0 1rem;
    padding: 2px 10px;
  }
  .top__header .icon__menu .menu__desktop ul.desktop__menu li.promo {
    background: #D7493A;
    border-radius: 5px;
  }
  .top__header .icon__menu .menu__desktop ul.desktop__menu li.promo:hover {
    background: #b93425;
  }
}
@media (min-width: 768px) and (max-width: 1024px) {
  .cards .card {
    grid-template-columns: 1fr 1fr;
  }
  .cards .card__details {
    top: 0;
    align-items: flex-start;
    align-content: center;
    grid-gap: 10px;
  }
  .cards .card__details .price {
    grid-template-columns: auto 1fr;
    font-size: 15px;
  }
  .cards .card__details .address {
    margin-top: -7px;
  }
  .cards .card .credit-img {
    padding: 15px 25px;
  }
}
@media (min-width: 481px) and (max-width: 767px) {
  .cards .card {
    grid-template-columns: 1fr 1fr;
  }
  .cards .card__details {
    top: 0;
    align-items: flex-start;
    align-content: center;
    grid-gap: 10px;
  }
  .cards .card__details .price {
    grid-template-columns: auto 1fr;
    font-size: 15px;
  }
  .cards .card__details .address {
    margin-top: -7px;
  }
  .cards .card .credit-img {
    padding: 15px 25px;
  }
}
@media (min-width: 768px) and (max-width: 1024px) and (orientation: landscape) {
  .cards {
    grid-template-columns: 1fr 1fr;
  }
  .cards .credit-img {
    font-size: 8px !important;
  }
}
@media (min-width: 1025px) {
  .wrapper {
    width: 960px;
    margin: auto;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
  }
  .wrapper .cards {
    grid-template-columns: 1fr 1fr 1fr;
  }
  .wrapper .cards .card__details h3 {
    font-size: 18px;
  }
}
</style>

@section('content')

    <div class="wrapper">
        <div class="top__header">
          <div class="icon__menu">
          </div>
          <h3>Booking app</h3>
        </div>
        <div class="cards">
        @foreach($hoteli as $hotel)
          <div class="card">
            <div class="card__img">
                <picture>
                  <img src="{{$hotel->url}}">
                </picture>
            </div>
            <div class="card__details">
              <h3 for="cozyroom">{{$hotel->name}}</h3>
              <div class="address">{{$hotel->address}}, {{$hotel->city}}</div>
              <div class="address">Broj Zvezdica/{{$hotel->stars}}</div>

              <a href="{{$hotel->id}}"><button>Detail</button></a>
            </div>
          </div>
          @endforeach

        </div>
      </div>

@endsection
