@extends('layouts.admin')
@section('header', 'Catalog')


@section('content')
<div class="row">
            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Edit Catalog</h3>
                    </div>
                            <form action="{{ url('catalogs/'.$catalog->id) }}" method="post">
                                @csrf
                                {{ method_field('PUT') }}
                            <div class="card-body">
                                <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter name" required=""  required="" value="{{ $catalog->name }}">
                            </div>
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection