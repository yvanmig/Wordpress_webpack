@extends('layouts.app')

@section('content')
  @include('partials.page-header')


  {!! get_the_posts_navigation() !!}
@endsection
<?php the_field('home_page_header_text');?>
<?php the_field('home_page_header_description');?>
<img src="<?php the_field('home_page_header_image');?> ">