@extends('layouts.user_type.auth')

@section('content')
                                                                   
    <div class="container-fluid py-4">
        <div class="card">
            <div class="card-header pb-0 px-3">
                <h6 class="mb-0">{{ __('Create Anime') }}</h6>
            </div>
            <div class="card-body pt-4 p-3">
                <form class="forms-sample"> 
                    @csrf
                    @if($errors->any())
                        <div class="mt-3  alert alert-primary alert-dismissible fade show" role="alert">
                            <span class="alert-text text-white">
                            {{$errors->first()}}</span>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                <i class="fa fa-close" aria-hidden="true"></i>
                            </button>
                        </div>
                    @endif
                    @if(session('success'))
                        <div class="m-3  alert alert-success alert-dismissible fade show" id="alert-success" role="alert">
                            <span class="alert-text text-white">
                            {{ session('success') }}</span>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                <i class="fa fa-close" aria-hidden="true"></i>
                            </button>
                        </div>
                    @endif
                    @csrf
                    
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                            <label for="judul" class="form-label">Judul Anime</label>                        
                                <div class="@error('judul')border border-danger rounded-3 @enderror">                                    
                                    <input value="{{ $anime->judul }}" type="text" class="form-control" name="judul" placeholder="judul" id="judul" required readonly="" >                                    
                                        @error('judul')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                </div>
                            </div>
                        </div>
                    </div>      

                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                            <label for="nama_project" class="form-label">Jumlah Episode</label>                        
                                <div class="@error('jumlah_episode')border border-danger rounded-3 @enderror">                                    
                                    <input value="{{ $anime->jumlah_episode }}" type="text" class="form-control" name="jumlah_episode" placeholder="jumlah_episode" id="jumlah_episode" required>                                    
                                        @error('njumlah_episode')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                </div>
                            </div>
                        </div>
                    </div>  

                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="id_genre" class="form-label">id_genre</label>                        
                                  
                            </div>
                        </div>
                    </div>  


                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="gambar" class="form-control-label">{{ __('Gambar') }}</label>
                                    <div class="@error('gambar')border border-danger rounded-3 @enderror">
                                    <img src="{{asset('assets/img/anime/'.$anime->gambar)}}" tyle="width: 150px" >

                                </div>
                            </div>
                        </div>
                    </div>                          

                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                            <label for="rating" class="form-label">Rating</label>                        
                                <div class="@error('rating')border border-danger rounded-3 @enderror">                                    
                                    <input value="{{ $anime->rating }}" type="text" class="form-control" name="rating" placeholder="rating" id="rating" required>                                    
                                        @error('nrating')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                </div>
                            </div>
                        </div>
                    </div>  

                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                            <label for="rilis" class="form-label">Rilis</label>                        
                                <div class="@error('rilis')border border-danger rounded-3 @enderror">                                    
                                    <input value="{{ $anime->rilis }}" type="text" class="form-control" name="rilis" placeholder="rilis" id="rilis" required>                                    
                                        @error('rilis')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                </div>
                            </div>
                        </div>
                    </div>  

                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                            <label for="sinopsis" class="form-label">Sinopsis</label>                        
                                <div class="@error('sinopsis')border border-danger rounded-3 @enderror">                                    
                                    <input value="{{ $anime->sinopsis }}" type="text" class="form-control" name="sinopsis" placeholder="sinopsis" id="sinopsis" required>                                    
                                        @error('nsinopsis')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                </div>
                            </div>
                        </div>
                    </div>  

                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                            <label for="status" class="form-label">Status</label>                        
                                <div class="@error('status')border border-danger rounded-3 @enderror">                                    
                                    <input value="{{ $anime->tatus }}" type="text" class="form-control" name="status" placeholder="status" id="status" required>                                    
                                        @error('nstatus')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                </div>
                            </div>
                        </div>
                    </div>  
                    <div class="d-flex justify-content-end">
                       <a href="{{route('anime.index')}}"> back</a>
                    </div>                                                 
                </form>
               
            </div>
        </div>
    </div>
@endsection