{{-- \resources\views\anime\index.blade.php --}}
@extends('layouts.user_type.auth')

@section('content')

<div class="alert alert-secondary mx-4" role="alert">
        <span class="text-white">
            <strong>Add, Edit, Delete Type!</strong>             
        </span>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">All Type</h5>
                        </div>
                        <a href="{{ route('type.create') }}" class="btn bg-gradient-primary btn-sm mb-0" type="button">+&nbsp; New Type</a>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" >Id</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Type</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"><b>Slug</b></th>                                    
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" width="10%" colspan="3">Action</th>
                                </tr>                                                                                                 
                            </thead>
                            <tbody>
                                @foreach($type as $gen)
                                <tr>
                                    <td>{{ $gen->id }}</td>
                                    <td>{{ $gen->type}}</td>   
                                    <td>{{ $gen->slug}}</td>                                                                                                                                                                               
                                    <td><a href="{{ route('type.show', $gen->id) }}" ><i class="fas fa-eye text-secondary"></a></td>
                                    <td><a href="{{ route('type.edit', $gen->id) }}" ><i class="fas fa-user-edit text-secondary"></i></a></td>
                                    <td><a href="{{ route('type.destroy', $gen->id) }}" ><i class="cursor-pointer fas fa-trash text-secondary"></i></a></td>
                                @endforeach                                                                                                    
                                </tr>                                                              
                            </tbody>
                        </table>
                    </div>
                    {!! $type->links('pagination::bootstrap-5') !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

