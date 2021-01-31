@extends('master')

@section('title','Svi')

<style>
    html,
body {
  margin: 0;
  padding: 0;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  font-size: 14px;
  font-family: Arial, san-serif;
}

.rafHotelList2017 {
  background: #f4f4f4;
  padding: 10px;
  max-width: 650px;
  margin: 20px auto;
  -webkit-box-shadow: 0 0 500px rgba(0, 0, 0, 0.05);
  box-shadow: 0 0 500px rgba(0, 0, 0, 0.05);
}
.rafHotelList2017 .rafHotelList2017Group {
  margin: 0;
  padding: 0;
  list-style: none;
  display: block;
}
.rafHotelList2017 .rafHotelList2017Group li {
  display: block;
  padding: 12px;
  background: #fff;
  border-radius: 4px;
  margin-bottom: 2px;
  position: relative;
}
.rafHotelList2017 .rafHotelList2017Group li:before,
.rafHotelList2017 .rafHotelList2017Group li:after {
  content: "";
  display: table;
}
.rafHotelList2017 .rafHotelList2017Group li:after {
  clear: both;
}
.rafHotelList2017 .rafHotelList2017Group li .rafHotelList2017HotelName a {
  padding-top: 6px;
  padding-bottom: 2px;
  display: block;
  font-size: 16px;
  font-weight: bold;
  text-decoration: none;
  color: #c20018;
  -webkit-transition: color ease 0.2s;
  -o-transition: color ease 0.2s;
  transition: color ease 0.2s;
}
.rafHotelList2017 .rafHotelList2017Group li .rafHotelList2017HotelName:hover a {
  color: #0074d5;
}
.rafHotelList2017 .rafHotelList2017Group li .rafHotelList2017Dates {
  margin-top: 2px;
  font-size: 12px;
  color: #666;
}
.rafHotelList2017 .rafHotelList2017Group li .rafHotelList2017Dates span {
  font-weight: bold;
}
.rafHotelList2017 .rafHotelList2017Group li .rafHotelList2017btn {
  position: absolute;
  right: 15px;
  top: 50%;
  margin-top: -10px;
}
.rafHotelList2017 .rafHotelList2017Group li .rafHotelList2017btn a {
  display: inline-block;
  zoom: 1;
  padding: 4px 9px;
  font-size: 12px;
  font-weight: bold;
  color: #fff;
  border-radius: 4px;
  background: -webkit-gradient(
    linear,
    left top,
    left bottom,
    from(#7be028),
    to(#5ac10b)
  );
  background: -webkit-linear-gradient(top, #7be028 0%, #5ac10b 100%);
  background: -o-linear-gradient(top, #7be028 0%, #5ac10b 100%);
  background: linear-gradient(top, #7be028 0%, #5ac10b 100%);
  text-decoration: none;
}
.rafHotelList2017 .rafHotelList2017Group li .rafHotelList2017btn a:hover {
  background: -webkit-gradient(
    linear,
    left top,
    left bottom,
    from(top),
    color-stop(0%, #ff3019),
    to(#cf0404)
  );
  background: -webkit-linear-gradient(top, #ff3019 0%, #cf0404 100%);
  background: -o-linear-gradient(top, #ff3019 0%, #cf0404 100%);
  background: linear-gradient(top, #ff3019 0%, #cf0404 100%);
}
.rafHotelList2017 .rafHotelList2017Group li img {
  max-width: 80px;
  float: left;
  margin-right: 10px;
  border-radius: 4px;
  border: 1px solid #fff;
}
.rafHotelList2017 .rafHotelList2017About {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
  -webkit-justify-content: space-between;
  -ms-flex-pack: justify;
  justify-content: space-between;
  margin: 5px 10px 15px 5px;
}
.rafHotelList2017 .rafHotelList2017About .rafHotelList2017AboutTitle {
  font-weight: bold;
  color: #666;
  margin-top: 5px;
}
.rafHotelList2017 .rafHotelList2017About .rafHotelList2017AboutLink a {
  display: inline-block;
  zoom: 1;
  font-size: 13px;
  font-weight: bold;
  color: #fff;
  border-radius: 4px;
  padding: 6px 12px;
  background: -webkit-gradient(
    linear,
    left top,
    left bottom,
    from(#499bea),
    to(#207ce5)
  );
  background: -webkit-linear-gradient(top, #499bea 0%, #207ce5 100%);
  background: -o-linear-gradient(top, #499bea 0%, #207ce5 100%);
  background: linear-gradient(to bottom, #499bea 0%, #207ce5 100%);
  text-decoration: none;
}
.rafHotelList2017 .rafHotelList2017About .rafHotelList2017AboutLink a:hover {
  background: -webkit-gradient(
    linear,
    left top,
    left bottom,
    from(#ff3019),
    to(#cf0404)
  );
  background: -webkit-linear-gradient(top, #ff3019 0%, #cf0404 100%);
  background: -o-linear-gradient(top, #ff3019 0%, #cf0404 100%);
  background: linear-gradient(top, #ff3019 0%, #cf0404 100%);
}

</style>

@section('content')


    <div class="rafHotelList2017">
        <div><h2>About {{$hotel->name}} Hotel</h2>
            <p style='font-weight: bold;color: #666; line-height: 18px;'> {{$hotel->description}}</p>
        </div>
    <div class="rafHotelList2017About">
      <div class="rafHotelList2017AboutTitle">{{$hotel->name}}'s Rooms</div>
    </div>
    <ul class="rafHotelList2017Group">
    @foreach($hotel->rooms as $room)
      <li>
        <a style='cursor: pinter;' href="{{$hotel->id}}/{{$room->id}}"><img src="{{$room->picture}}" alt="" /></a>
        <div class="rafHotelList2017HotelName">{{$room->type}}</div>
        <div class="rafHotelList2017Dates">{{$room->decsription}}</div>
        <div class="rafHotelList2017Dates">{{$room->beds}} beds</div>
        <div class="rafHotelList2017Dates">RSD {{$room->price}}/Night</div>
      </li>
      @endforeach
    </ul>
    <a href="http://127.0.0.1:8000/"><button style="margin-top: 20px;">Home</button></a>
  </div>
@endsection
