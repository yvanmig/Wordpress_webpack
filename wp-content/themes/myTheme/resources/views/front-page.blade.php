@extends('layouts.app')

@section('content')
  @include('partials.page-header')












  <div id="gridProjects">

  @foreach ($realisations as $realisation)
  <a href= {{ get_permalink($realisation->ID) }}>
      <div class="blocProject">

        {!! wp_get_attachment_image($realisation->image_realisation, 'full', '', array("class" => "size-full currently__image")) !!}
        {{ $realisation->nom_realisation}}
        <div class="projectContent"> 
          <div class="wrap">
            <div class="nameProject">
              {{ $realisation->nom_realisation}}
            </div>
            <div class="descriptionProject">
            {{ $realisation->resume_realisation}}   
            <ul class="containerTech">                  
              @foreach ($realisation->technologies_realisation as $rea)
                <li class="tech"> <p> {{ $rea }} </p></li>
                
              @endforeach
              </ul>
               
              <div class="reabloc">               
              </div>
            </div>
          </div>         
        </div>               
      </div>  
      </a>    
  @endforeach











  {!! get_the_posts_navigation() !!}
@endsection

