@extends('masters.giftshopMaster')

@section('main')
  <div class="container">
    <div class="p-2 pt-md-5 pb-md-3 mx-auto">
    <h1 class="text-center">EDIT ADMIN</h1>
    @include('partials.errors')
    <form action="{{route('admin.update', ['Ad_id' => $admin->Ad_id])}}" method="post">
      @csrf
      @include('giftshop.admin.adminFields')
      <button type="submit" class="btn btn-dark">Submit</button>
      <a type="button" class="btn btn-danger" href="{{route('admin.index')}}">Back</a>
    </form>
    </div>
  </div>
@endsection
