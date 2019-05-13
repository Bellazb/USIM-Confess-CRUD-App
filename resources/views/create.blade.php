  @include ('inc.header')
  <br/>
  <div class="container">
  	<div class="row">
  		<div class="col-md-6">
  			<form method="POST" action="{{ url('/insert')}}">
          {{csrf_field()}}
    <fieldset>
    <Legend>Hantar Confession Anda</Legend>
      @if(count($errors) >0 )
      @foreach($errors ->all() as $error)
      <div class="alert alert-danger">
        {{$error}}
      </div>
      @endforeach
      @endif
      <div class="form-group row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Title</label>
        <div class="col-sm-10">
          <input type="text" name="title" placeholder="Your Title" class="form-control-plaintext" id="staticEmail">
        </div>
      </div>
     
      <div class="form-group">
        <label for="exampleInputPassword1">Description</label>
       <!--  <input type="text" class="form-control" id="exampleInputPassword1" name="description" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAACIUlEQVQ4EX2TOYhTURSG87IMihDsjGghBhFBmHFDHLWwSqcikk4RRKJgk0KL7C8bMpWpZtIqNkEUl1ZCgs0wOo0SxiLMDApWlgOPrH7/5b2QkYwX7jvn/uc//zl3edZ4PPbNGvF4fC4ajR5VrNvt/mo0Gr1ZPOtfgWw2e9Lv9+chX7cs64CS4Oxg3o9GI7tUKv0Q5o1dAiTfCgQCLwnOkfQOu+oSLyJ2A783HA7vIPLGxX0TgVwud4HKn0nc7Pf7N6vV6oZHkkX8FPG3uMfgXC0Wi2vCg/poUKGGcagQI3k7k8mcp5slcGswGDwpl8tfwGJg3xB6Dvey8vz6oH4C3iXcFYjbwiDeo1KafafkC3NjK7iL5ESFGQEUF7Sg+ifZdDp9GnMF/KGmfBdT2HCwZ7TwtrBPC7rQaav6Iv48rqZwg+F+p8hOMBj0IbxfMdMBrW5pAVGV/ztINByENkU0t5BIJEKRSOQ3Aj+Z57iFs1R5NK3EQS6HQqF1zmQdzpFWq3W42WwOTAf1er1PF2USFlC+qxMvFAr3HcexWX+QX6lUvsKpkTyPSEXJkw6MQ4S38Ljdbi8rmM/nY+CvgNcQqdH6U/xrYK9t244jZv6ByUOSiDdIfgBZ12U6dHEHu9TpdIr8F0OP692CtzaW/a6y3y0Wx5kbFHvGuXzkgf0xhKnPzA4UTyaTB8Ph8AvcHi3fnsrZ7Wore02YViqVOrRXXPhfqP8j6MYlawoAAAAASUVORK5CYII=&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%;"> -->
        <textarea name="description" class="form-control" rows="10" placeholder="Your Article Here"></textarea>
      </div>
      <!-- <div class="form-group">
        <label for="exampleTextarea">Example textarea</label>
        <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
      </div> -->
      <a href="{{ url('/') }}" class="btn btn-primary">Back</a>
      <button type="submit" class="btn btn-primary">Submit</button>
    </fieldset>
  </form>
  		</div>
  	</div>
  </div>
  @include ('inc.footer')