@include('inc.header')
<div class="container">
    <div class="row">
      <Legend>Read Confession</Legend>
      <p class= "lead">{{ $articles->title}}</p>     
    </div>
    <div class="row">
    <p>{{ $articles->description}}</p>
</div>
</div>


@include('inc.footer')