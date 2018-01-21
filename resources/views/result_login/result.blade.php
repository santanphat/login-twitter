<?php
$datas = $user->user;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login result</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <style>
    body{
    	margin: 30px;
    }    
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
  </style>
</head>
<body>
<div class="container text-center">    
  <div class="row">
    <div class="col-sm-3 well">
      <div class="well">
        <p><a href="#">My Profile</a></p>
        <img src="{{$user->avatar}}" class="img-circle" height="65" width="65" alt="Avatar">
      </div>
      <div class="well">
        <p><a href="#">Interests</a></p>
        <p>
          <span class="label label-default">Statuses count: {{$datas['statuses_count']}}</span><br>
          <span class="label label-primary">Friends count: {{$datas['friends_count']}}</span><br>
          <span class="label label-success">Followers count: {{$datas['followers_count']}}</span><br>
          <span class="label label-info">Favourites count: {{$datas['favourites_count']}}</span><br>
          <span class="label label-warning">Listed count: {{$datas['listed_count']}}</span><br>
          <span class="label label-danger">Followers count: {{$datas['followers_count']}}</span><br>
        </p>
      </div>
    </div>
    <div class="col-sm-7">    
      <div class="row">
        <div class="col-sm-4">
          <div class="well">
           
           <img src="{{$user->avatar}}" class="img-circle" height="55" width="55" alt="Avatar"> {{$user->name}}
          </div>
        </div>
        <div class="col-sm-8">
          <div class="well">
            <p><?php print_r($datas['status']['text']); ?> </p>
          </div>
        </div>
      </div>    
    </div>
    <div class="col-sm-2 well">  
      <div class="well">
        <p>ADS</p>
      </div>
      <div class="well">
        <p>ADS</p>
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>21/01/2018</p>
</footer>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
