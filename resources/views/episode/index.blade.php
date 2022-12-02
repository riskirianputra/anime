
{{-- \resources\views\anime\index.blade.php --}}
@extends('layouts.user_type.auth')

@section('content')

<div class="alert alert-secondary mx-4" role="alert">
        <span class="text-white">
            <strong>Add, Edit, Delete Episode!</strong>             
        </span>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">All Episode</h5>
                        </div>
                        <a href="{{ route('episode.create') }}" class="btn bg-gradient-primary btn-sm mb-0" type="button">+&nbsp; New Episode</a>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" >Id</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Anime</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Episode</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"><b>Slug</b></th>                                    
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" width="10%" colspan="3">Action</th>
                                </tr>                                                                                                 
                            </thead>
                            <tbody>
                                @foreach($episode as $gen)
                                <tr>
                                    <td>{{ $gen->id }}</td>
                                    <td>{{ $gen->anime->judul}}</td>   
                                    <td>{{ $gen->episode}}</td>
                                    <td>{{ $gen->slug}}</td>                                                                                                                                                                               
                                    <td><a href="{{ route('episode.show', $gen->id) }}" ><i class="fas fa-eye text-secondary"></a></td>
                                    <td><a href="{{ route('episode.edit', $gen->id) }}" ><i class="fas fa-user-edit text-secondary"></i></a></td>
                                    <td><a href="{{ route('episode.destroy', $gen->id) }}" ><i class="cursor-pointer fas fa-trash text-secondary"></i></a></td>
                                @endforeach                                                                                                    
                                </tr>                                                              
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

