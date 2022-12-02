@extends('layouts.user_type.auth')

@section('content')

<div class="container-fluid py-4">
        <div class="card">
            <div class="card-header pb-0 px-3">
                <h6 class="mb-0">{{ __('Create Episode') }}</h6>
            </div>
            <div class="card-body pt-4 p-3">
                <form action="{{ route('episode.store') }}" method="POST" role="form text-left">
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
                                <label for="id_anime" class="form-label">id_anime</label>                        
                                    <select class="form-control" name="id_anime" placeholder="Pilih Nama Project">
                                        <option value="">PILIH NAMA ANIME</option>
                                            @foreach($anime as $gen)
                                        <option value="{{$gen->id}}">{{$gen->judul}}</option>
                                    @endforeach  
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                            <label for="episode" class="form-label">Episode</label>                        
                                <div class="@error('episode')border border-danger rounded-3 @enderror">                                    
                                    <input value="{{ old('episode') }}" type="text" class="form-control" name="episode" placeholder="episode" id="episode" required>                                    
                                        @error('episode')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                </div>
                            </div>
                        </div>
                    </div>                           

                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                            <label for="slug" class="form-label">Slug</label>                        
                                <div class="@error('slug')border border-danger rounded-3 @enderror">                                    
                                    <input value="{{ old('slug') }}" type="text" class="form-control" name="slug" placeholder="slug" id="slug" required>                                    
                                        @error('nslug')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                </div>
                            </div>
                        </div>
                    </div>  
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">{{ 'Save Changes' }}</button>
                    </div>                                                 
                </form>
               
            </div>
        </div>
    </div>

@endsection





                            
                            

                        