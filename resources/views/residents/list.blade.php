@extends('layouts.main')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h5 class="font-weight-bold">Complainants Information</h5>
                @livewire('list-resident')
            </div>  
        </div>  
    </div>
</div>
@endsection