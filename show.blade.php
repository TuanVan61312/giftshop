@extends('masters.giftshopMaster')

@section('main')
  <div class="container">
    <div class="p-2 pt-md-5 pb-md-3 mx-auto">
    <h1 class="text-center">ADMIN INFORMATION</h1>
    @include('giftshop.admin.adminDetails')
    <a type="button" href="{{route('admin.index')}}" class="btn btn-info">back</a>
    </div>
  </div>
@endsection
