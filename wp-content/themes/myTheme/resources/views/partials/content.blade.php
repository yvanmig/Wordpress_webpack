<article @php post_class() @endphp>
  <header>
    
    <!-- @include('partials/entry-meta') -->
  </header>
  <div class="containerRea">
    <div class="articleThumb">
    @php echo(get_the_post_thumbnail()) @endphp
    <div class="articleContent">
      <h2 class="entry-title"><a href="{{ get_permalink() }}">{!! get_the_title() !!}</a></h2>
      @php the_excerpt() @endphp
    </div>
    
        
        
        

      </div>
  </div>
  
  
</article>
