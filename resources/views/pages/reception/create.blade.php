@extends('layouts.layoutBase')

@section('content2')

{{--

add form for creation

--}}
<div class="flex justify-center items-center min-h-screen bg-gray-100">


<div class="card w-full max-w-sm shadow-2xl bg-base-100 flex justify-center items-center">
    <div class="card-body ">
        <h2 class="card-title justify-center">Create</h2>

        <form>
            <div class="form-control">
                <label class="label">
                    <span class="label-text">Societé</span>
                </label>
                <input type="text" placeholder="entrer le nom de la societé" class="input input-bordered w-[300px] border-t-0 border-l-0 border-r-0" />
            </div>

            <div class="form-control">
                <label class="label">
                    <span class="label-text">téléphone</span>
                </label>
                <input type="number" placeholder="entrer le telephone de la societé" class="input input-bordered border-t-0 border-l-0 border-r-0 h" />
            </div>

            <div class="form-control">
                <label class="label">
                    <span class="label-text">Email</span>
                </label>
                <input type="email" placeholder="entrer le Mail" class="input input-bordered border-t-0 border-l-0 border-r-0" />
            </div>

            <div class="form-control">
                <label class="label">
                    <span class="label-text">Nombre de facture</span>
                </label>
                <input type="text" placeholder="entrer le Mail" class="input input-bordered border-t-0 border-l-0 border-r-0" />
            </div>

            <div class="form-control">
                <label class="label">
                    <span class="label-text">Nombre de document banquaire</span>
                </label>
                <input type="text" placeholder="entrer le Mail" class="input input-bordered border-t-0 border-l-0 border-r-0" />
            </div>

            <div class="form-control mt-6">
                <button class="btn btn-primary">Cree la Societé</button>
            </div>
        </form>
    </div>
</div>
</div>


@endsection
