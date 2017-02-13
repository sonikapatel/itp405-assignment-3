<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body style="font-family:Helvetica;">

    <h1 style="text-align:center; font-size:20px;">Your results for '<em>{{ $search }}</em> '</h1>

    <table style="width:700px; margin:auto;">
  <tr>
    <th style="padding:width:300px;10px;  border-bottom: thick solid;">Title</th>
    <th style="padding:10px; width:200px; border-bottom: thick solid;">Genre</th>
    <th style="padding:10px; width:100px; border-bottom: thick solid;">Rating</th>
  </tr>

    @foreach($dvds as $dvd)
    <tr>
    <td style="padding:10px; width:400px;  border-right: thick double;border-bottom: thick solid ">{{$dvd->title}}</td>
    <td style="padding:10px; width:300px; border-right: thick double;border-bottom: thick solid ">{{$dvd->genre_name}}</td>
    <td style="padding:10px; width:200px; border-right: thick double;border-bottom: thick solid ">{{$dvd->rating_name}}</td>
      <tr>
    @endforeach

  </tr>
</table>


  </body>
</html>
