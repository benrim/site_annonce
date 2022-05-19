@extends('layouts.app')

@section('content')
 
<div class="container ">
  <div class="row ">
                 
    <div  class="col-md-8" >
      <form method="POST" action="{{ route('ads.search') }}" onSubmit="search(event)" id="searchForm">
      @csrf
        <div class="input-group">
            <input type="text" class="form-control " style="padding: 30px;" placeholder="Recherche annonce" id="words">
              <div class="input-group-append">
                <button class="btn btn-primary px-3">Rechercher</button>
              </div>
              
        </div>
      </form>
  </div>
</div>
        



  
    @foreach($ads as $ad)
    
                 
 
    <div  id="results ">
    <div class="card mb-5 mt-5 text-center" style="width: 80%; ">
     <img class="card-img-top img-thumbnail " src="/storage/{{ $ad->image }}" style="  height:20rem ; " alt="Card image cap">
     <div class="card-body">
       <h5 class="card-title">{{$ad->title}}</h5>
       <small>{{$ad->created_at}}</small>
       <p class="card-text ">{{$ad->localisation}}</p>
       <p class="card-text">{{$ad->description}}</p>
       <p class="card-text"> prix: {{$ad->price}}</p>
       <a href="#" class="btn btn-primary align-items-center">voir l'offre</a>
     </div>
    </div>
  </div>
  
    @endforeach

@endsection
@section('extra-js')
<script> 

  function search(event){
  event.preventDefault()
  const words = document.querySelector('#words').value
  const url = document.querySelector('#searchForm').getAttribute('action')

  axios.ad(`${url}`, {
    words: words,
})
  .then(function (response) {
    const ads = response.data.ads
  let results = document.querySelector('#results')
  results.innerHTML = ''
  for(let i = 0; i < ads.length; i++){
    let card = document.createElement('div')
    let cardBody = document.createElement('div')

    cardBody.classList.add('card-body')
    card.classList.add('card', 'mb-3')
    let title = document.createElement('h5')
    title.classList.add('card-title')
    title.innerHTML = ads[i].title 
    let description = document.createElement('p')
    description.classList.add('card-text')
    description.innerHTML = ads[i].description
    cardBody.appendChild(title)
    cardBody.appendChild(description)
    card.appendChild(cardBody)
    results.appendChild(card)
  }
  })
  .catch(function (error) {
    console.log(error);
  });
}

</script>
  @endsection


  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
