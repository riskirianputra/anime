{{-- \resources\views\anime\index.blade.php --}}
@extends('layouts.user_type.auth')

@section('content')

<div class="alert alert-secondary mx-4" role="alert">
        <span class="text-white">
            <strong>Add, Edit, Delete Anime!</strong>             
        </span>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">All Anime</h5>
                        </div>
                        <a href="{{ route('anime.create') }}" class="btn bg-gradient-primary btn-sm mb-0" type="button">+&nbsp; New Anime</a>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" >Id</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"><b>Gambar</b></th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Judul Anime</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"><b>Jumlah Episode</b></th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"><b>Rating</b></th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"><b>Rilis</b></th>                                    
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"><b>Status</b></th>                                    
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"><b>Genre</b></th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" width="10%" colspan="3">Action</th>
                                </tr>                                                                                                 
                            </thead>
                            <tbody>
                            @foreach($anime as $anim)
                                <tr>
                                    <td>{{ $anim->id }}</td>                                
                                    <td><img src="{{asset('assets/img/anime/'.$anim->gambar)}}" tyle="width: 150px" ></td> 
                                    <td>{{ $anim->judul}}</td>                                      
                                    <td>{{ $anim->jumlah_episode }}</td>                                                                                                                                                                                
                                    <td>{{ $anim->rating}}</td> 
                                    <td>{{ $anim->rilis}}</td> 
                                    <td>{{ $anim->status}}</td>                                    
                                    <td>{{ $anim->genre->nama_genre}}</td> 
                                    <td><a href="{{ route('anime.show', $anim->id) }}" ><i class="fas fa-eye text-secondary"></a></td>
                                    <td><a href="{{ route('anime.edit', $anim->id) }}" ><i class="fas fa-user-edit text-secondary"></i></a></td>
                                    <td><a href="{{ route('anime.destroy', $anim->id) }}" ><i class="cursor-pointer fas fa-trash text-secondary"></i></a></td>
                                @endforeach                                           
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

