@extends('pages.deals.main')
@section('deal-content')

  @if(isset($hotels))
    {{-- hotel name {{$hotels[0]->hotelInfo->hotelName}} <br/>
    hotel city {{$hotels[0]->hotelInfo->hotelCity}} <br/>
    province {{$hotels[0]->hotelInfo->hotelProvince}} <br/> 
    country {{$hotels[0]->hotelInfo->hotelCountryCode}} <br/> 
    star {{$hotels[0]->hotelInfo->hotelStarRating}} <br/> 
    image {{$hotels[0]->hotelInfo->hotelImageUrl}} <br/> 

    numberOfPeopleViewing {{$hotels[0]->hotelUrgencyInfo->numberOfPeopleViewing}} <br/> 
    numberOfRoomsLeft {{$hotels[0]->hotelUrgencyInfo->numberOfRoomsLeft}} <br/>
    almostSoldStatus {{$hotels[0]->hotelUrgencyInfo->almostSoldStatus}} <br/>

     originalPricePerNight {{$hotels[0]->hotelPricingInfo->originalPricePerNight}} <br/>
     totalPriceValue {{$hotels[0]->hotelPricingInfo->totalPriceValue}} <br/>
     currency {{$hotels[0]->hotelPricingInfo->currency}} <br/>
     percentSavings {{$hotels[0]->hotelPricingInfo->percentSavings}} <br/> --}}

    <div class="row">

      <ul class="list">
       <h1 class="title">Hotels</h1>

        @foreach ($hotels as $hotel)
        <li><a href="#"><img src="{{$hotel->hotelInfo->hotelImageUrl}}" alt="">
        <div class="star-badge">
          <h6>Save <br>{{$hotel->hotelPricingInfo->percentSavings}}%</h6>
        </div>
        <h1>{{$hotel->hotelInfo->hotelName}}</h1>
        <div class="star-ratings">
          <div class="star-ratings-top" style="width:{{$hotel->hotelInfo->hotelStarRating * 20}}%"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
          <div class="star-ratings-bottom"><span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span></div>
        </div>
        <strong>Rooms left: </strong><small>{{$hotel->hotelUrgencyInfo->numberOfRoomsLeft}}</small><br>
        <strike class="text-danger"><small class="text-danger">Original Price: {{$hotel->hotelPricingInfo->crossOutPriceValue.' '.$hotel->hotelPricingInfo->currency }}</small></strike><br>
        <strong>Price: </strong><small class="text-success">{{$hotel->hotelPricingInfo->totalPriceValue.' '.$hotel->hotelPricingInfo->currency }}</small>
        </img></a></li><hr>
        @endforeach
      </ul>
    </div>
  @endif
@endsection