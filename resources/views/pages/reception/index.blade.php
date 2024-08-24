@extends('layouts.app')

@section('content')
{{--
+ tasks:
add table.
add buttons bar

--}}
<div class="top-0 right-0 absolute flex items-center space-x-2 mt-4 mr-4">
    <button class="btn btn-sm bg-slate-500 h-[2rem ] " style="color: white;"><i class="fas fa-share-square"></i>Export</button>
    <a href="/reception/create"><button class="btn btn-sm btn-primary text-white !h-[30px]" style="height:35px"><i class="fas fa-plus"></i>Create</button></a>

    <div class="form-control h-[35px]">
      <i class="fa fa-search absolute mt-[10px] ml-2 text-slate-400"></i>
      <input type="text" placeholder="Search" class="input input-bordered w-24 md:w-auto pl-8" />
    </div>

</div>

<div class="overflow-x-auto atop-0 w-full p-3 mt-16">
    <table class="table">
      <!-- head -->
      <thead>
        <tr>
          <th></th>
          <th class="bg">Societé</th>
          <th>téléphone</th>
          <th>Email</th>
          <th>Nombre de facture</th>
          <th>Nombre de document banquaire</th>
        </tr>
      </thead>
      <tbody>
        @foreach ( $reception as $item )
           <tr>
              <td>{{$item->id}}</td>
              <td>{{$item->societe}}</td>
              <td>{{$item->phone}}</td>
              <td>{{$item->email}}</td>
              <td>{{$item->nombreFacture}}</td>
              <td>{{$item->nombreDocumentbanquaire}}</td>
           </tr>

        @endforeach
      </tbody>
    </table>
    {!! $reception->links() !!}
  </div>




@endsection
