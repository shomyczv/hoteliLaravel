@extends('master')

@section('title','Film')

<style>
    @import url("https://fonts.googleapis.com/css?family=Raleway:400,400i,700");
@import url("https://fonts.googleapis.com/css?family=Leckerli+One");

#all {
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  position: absolute;

  height: 100vh;
  width: 100%;
  background-color: #D7C49EFF;
  display: flex;
  justify-content: space-around;
  align-items: center;
  flex-direction: row;
  font-family: sans-serif;
}

#box {
    overflow-y: hidden;
  overflow-x: hidden;
  height: 500px;
  width: 350px;
  background-color: white;
  border-radius: 0px;
  box-shadow: 0px 0px 6px 2px #000;
  transition: width 0.5s;
  transition: height 0.9s;
  border-radius: 10px;
  overflow-y: hidden;
  animation-name: new;
  animation-delay: 0.2s;
  animation-duration: 0.9s;
  animation-iteration-count: 1;
}
@keyframes new {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}
#image {
  transition: background 1s;
  height: 320px;
  width: 350px;
  background-size: cover;
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
  display: flex;
  background-size: cover;
  align-items: flex-end;
  justify-content: space-between;
  color: white;
  font-size: 25px;
  transition: height 0.5s;
  font-family: sans-serif;
  animation-name: new;
  animation-delay: 0.2s;
  animation-duration: 0.9s;
  animation-iteration-count: 1;
}
#content {
  height: 200px;
  width: 400px;
  transition: height 0.5s;
  animation-name: new;
  animation-delay: 0s;
  animation-duration: 0.2s;
  animation-iteration-count: 1;
  font-size: 14px;
}

#text {

  font-family: sans-serif;
  font-weight: 600;

}
#content ul li {
  list-style: none;
  height: 40px;
  color: grey;
  display: flex;
  align-items: center;
  animation-name: new;
  animation-delay: 0.2s;
  animation-duration: 0.9s;
  animation-iteration-count: 1;
}

#box:hover #content {
  height: 500px;
}

#box:hover #image {
  height: 0px;
}

#content table {
  color: grey;
  margin-left: 20px;
  opacity: 0;
  transition: opacity 0.9s;
  animation-name: new;
  animation-delay: 0.2s;
  animation-duration: 0.9s;
  animation-iteration-count: 1;
}

#box:hover #content table {
  opacity: 1;
}

#box:hover button {
  opacity: 1;
}

button {
  background-color: #0275d8;
  border: none;
  height: 50px;
  width: 350px;
  border-bottom-left-radius: 10px;
  border-bottom-right-radius: 10px;
  color: white;
  cursor: pointer;
  opacity: 0;
  transition: opacity 0.5s;
  margin-left: px;
  margin-top: 24px;
}

#left,
#right {
  height: 50px;
  width: 50px;
  border-radius: 100%;
  background-color: #616161;
  color: white;
  display: flex;
  justify-content: center;
  align-items: center;
  cursor: pointer;
  box-shadow: 0px 0px 30px 5px #33691e;
}

</style>

@section('content')



    <div id="all" ng-app="myApp" ng-controller="myCtrl">

    <div style="visibility: hidden;" id="left" ng-click="b=b-1"><i class="material-icons">chevron_left</i></div>
    <div id="box" ng-init="name=['Borokely','Live in Peace','Taste of China','Burgur Kings']; address=['Mountain View,CA','San Francisco','Mumbai maha NagarPlllika','Panvel Orian Mall']; dist=['30 mins','4 hours','1 day','1 day 2 hours']; time=['12 Noon to 1AM','11am to 9pm','2PM To 1AM','9AM To 11PM']; wifi=['Yes','No','Yes','Yes',]; hotel=['NO','No','Yes','Yes',]; featured=['Rooftops, Veggie Friendly','Food of taste','Love of China','Taste,Cover Magzine']; image=['https://images.unsplash.com/photo-1504981983529-9ed8031ade7f?ixlib=rb-0.3.5&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ&s=66b3d17225bded154fed181fbf8c064b','https://images.unsplash.com/photo-1494346480775-936a9f0d0877?ixlib=rb-0.3.5&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ&s=28fffc0f6b4c167fcb6bd7be728f1216','https://images.unsplash.com/photo-1481833761820-0509d3217039?ixlib=rb-0.3.5&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ&s=f8d09f68f5e30fd6c7ab06071b35a26b','https://images.unsplash.com/photo-1488324346298-5ad3d8f96d0d?ixlib=rb-0.3.5&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ&s=0b4ab2c7fa68c4767cd17c077bae4402']; b=0;">

      <div id="image" style="background-image:url({{$room->picture}})">
        <div id='text'></div>
      </div>
      <div style="overflow-x: hidden;" id="content">
        <ul>
          <li><i style='margin-right: 5px;' class="material-icons">hotel</i>{{$room->type}}</li>
          <li><i class="material-icons">single_bed</i>{{$room->beds}}</li>
          <li style='margin-bottom: 50px;'>{{$room->price }} RSD</li>
        </ul>
        <form  style="width: 80%;" action="/add-reservation" method="post">
            {{ csrf_field() }}
            <input style="display: block; height: 28px; margin-left: 90px; margin-bottom: 8px; padding-left: 20px;" type="text" name="name" placeholder="name">
            <input style="display: block; height: 28px; margin-left: 90px; margin-bottom: 8px; padding-left: 20px;" type="text" name="surname" placeholder="surname">
            <input style="display: block; height: 28px; margin-left: 90px; margin-bottom: 8px; padding-left: 20px;" type="text" name="address" placeholder="address">
            <input style="display: block; height: 28px; margin-left: 90px; margin-bottom: 8px; padding-left: 20px;" type="text" name="phone" placeholder="phone">
            <input style="display: block; height: 28px; margin-left: 90px; margin-bottom: 8px; padding-left: 20px;" type="date" name="arrive_date" placeholder="arrive-date">
            <input style="display: block; height: 28px; margin-left: 90px; margin-bottom: 8px; padding-left: 20px;" type="date" name="end_date" placeholder="end-date">
            <input style="display: block; height: 28px; margin-left: 90px; margin-bottom: 8px; padding-left: 20px;" style="display:none;" type="text" name="room_id" value="{{$room->id}}">
            <button style="display: block;" type="submit">Save</button>
        </form>
      </div>
    </div>
    <div style="visibility: hidden;" id="right" ng-click="b=b+1"><i class="material-icons">chevron_right</i></div>
</div>


@endsection
