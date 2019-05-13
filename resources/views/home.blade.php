  @include ('inc.header')
  <br/>
  <br/>
  <div class="container">
    <div class="row">
      <Legend class="text-center">Post Confession Anda</Legend>
    <div class="row">
        @if(session('info'))
      <div class="col-mg-6 alert alert-success">
      {{session('info')}}
      </div>
      @endif
    </div>
      <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Title</th>
        <th scope="col">Description</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @if(count($articles) > 0)
      @foreach($articles->all() as $article)
      <tr>
        <td>{{ $article -> id}}</td>
        <td>{{ $article -> title}}</td>
        <td>{{ $article -> description}}</td>
        <td>
          <a href='{{ url("/read/{$article->id}") }}'' class="label label-primary">Read |</a>
          <a href='{{ url("/update/{$article->id}") }}'' class="label label-primary">Update |</a>
          <a href='{{ url("/delete/{$article->id}") }}'' class="label label-primary">Delete</a>
        </td>
      </tr>
      @endforeach
      @endif
    </tbody>
  </table> 
    </div>
  </div>


  @include ('inc.footer')