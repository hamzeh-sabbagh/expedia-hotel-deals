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
      @foreach ($hotels as $hotel)
        <div class="card">
          <img data-src="{{$hotels[0]->hotelInfo->hotelImageUrl}}" alt="">
          <p class="card-text">{{$hotels[0]->hotelInfo->hotelName}}</p>
          <p>{{$hotels[0]->hotelInfo->hotelStarRating}}</p>
        </div>
      @endforeach
    </div>
  @endif
@endsection