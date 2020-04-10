<article @php post_class() @endphp>
  <header>
    <h1 class="entry-title">{!! get_the_title() !!}</h1>
    @include('partials/entry-meta')
  </header>
  
  
  <div class="entry-content">
    <div id="descRea">
      <?php the_field('description_realisation');?> 
    </div>
    <div id="imageRea">
     <img src="<?php the_field('image_realisation')?>" alt="">
    </div>

    <!-- @php the_content() @endphp -->
    
  </div>
  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>
  @php comments_template('/partials/comments.blade.php') @endphp
</article>
