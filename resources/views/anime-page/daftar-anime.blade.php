
@inject('anime', 'App\models\Anime')
@extends('anime-layout.app')

@section('content')
     
<section class="anime-details-span">
    <div class="container">
        <div class="anime__details__content">
            <div class="row">
                <div class="col-lg-12">
                    <br>
                    <div class="anime__details__title">
                            <h3>Daftar Anime Sub Indo</h3>                              
                    </div>
                    <hr>
                    <div class="anime__details__text">
                        <p>Daftar Anime Sub Indo lengkap yang bisa kamu tonton di Samehadaku. Kamu bisa download dan streaming anime Indo terbaru gratis dan terbaru.</p>  
                    </div>    
                    <hr>
                    <div class="col-lg-8">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li ><a href="/index">Homepage</a></li>
                                <li><a href="./categories.html">Genre<span class="arrow_carrot-down"></span></a>
                                    <ul class="dropdown">
                                        @foreach ($genre as $item)
                                            <li class="cat-4"><a href="{{ route('anime.genre',$item->slug) }}">{{$item->nama_genre}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li><a href="/daftar-anime">Tahun</a></li>
                                <li><a href="./blog.html">Abjad<span class="arrow_carrot-down"></span></a>
                                    <ul class="dropdown">
                                        @foreach ($abjad as $item)
                                            <li class="cat-4"><a href="{{ route('anime.abjad',$item->slug) }}">{{$item->nama_abjad}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li><a href="#">Contacts</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                    <hr>                                     
                    <div class="letter_az text-center">                        
                        @foreach ($abjad as $item)                      
                            <a href="{{ route('anime.abjad',$item->slug) }}">{{$item->nama_abjad}}</a>                        
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
            @foreach ($animeall as $all)
                <div class="row">
                    <div class="col-lg-2 ">                                                    
                    <a href="{{ route('anime.detail',$all->judul) }}">                      
                            <img src="{{asset('assets/img/anime/'.$all->gambar)}}" width="600px" height="150px" class="rounded float-start">
                            <br>                                                                             
                        </a>
                    </div>  
                    <div class="col-lg-10 col-md-8">
                        <div class="anime__daftar__text_center">
                            <a href="{{ route('anime.detail',$all->judul) }}">
                                <p>  {{$all->judul}}</p> 
                            </a>                                               
                                <span><i class="dashicons dashicons-controls-play"></i> <b>Episode</b> <author itemprop="name">{{$all->jumlah_episode}}</author></span> ||
                                <span><i class="dashicons dashicons-controls-play"></i> <b>Genre</b> <author itemprop="name">{{ $all->genre->nama_genre }}</author></span> ||    
                                <span><i class="dashicons dashicons-controls-play"></i> <b>Abjad</b> <author itemprop="name">{{ $all->abjad->nama_abjad }}</author></span> ||                            
                                <span><i class="dashicons dashicons-calendar"></i>  <b>Released on</b>: {{ $all->rilis}}</span>
                        </div>
                    </div>  
                </div>
                <hr>
            @endforeach
            
</section>
@endsection