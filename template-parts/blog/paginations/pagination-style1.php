<?php 

if( !insut_option('blog_post_nav')){
    return;
}

global $wp_query;

// stop execution if there's only 1 page
if ( $wp_query->max_num_pages <= 1 ){
    return;
}

$paged	 = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
$max	 = intval( $wp_query->max_num_pages );

// add current page to the array
if ( $paged >= 1 ){
    $links[] = $paged;
}

// add the pages around the current page to the array
if ( $paged >= 3 ) {
    $links[] = $paged - 1;
    $links[] = $paged - 2;
}

if ( ( $paged + 2 ) <= $max ) {
    $links[] = $paged + 2;
    $links[] = $paged + 1;
}
$alignment = esc_attr(insut_option("blog_post_nav_alignment"));
echo "<div class='insut-pagination $alignment'>" . "\n";

// previous Post Link
if ( get_previous_posts_link() ){
    printf( '%s' . "\n", get_previous_posts_link( '<i class="icofont-arrow-left"></i>' ) );
}

// link to first page, plus ellipses if necessary
if ( !in_array( 1, $links ) ) {
    $class = 1 == $paged ? 'active' : '';

    printf( '<a class="page-link %s" href="%s">%s</a>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

    if ( !in_array( 2, $links ) )
        echo '<span class="pagination-dots">…</span>';
}

// link to current page, plus 2 pages in either direction if necessary
sort( $links );
foreach ( (array) $links as $link ) {
    $class = $paged == $link ? 'current' : '';
    if($paged == $link){
        printf( '<span class="%s">%s</span>' . "\n", $class, $link );
    }else{
        printf( '<a class=" %s" href="%s" >%s</a>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
    }
    
}

// link to last page, plus ellipses if necessary
if ( !in_array( $max, $links ) ) {
    if ( !in_array( $max - 1, $links ) )
        echo '<span class="pagination-dots">…</span>' . "\n";

    $class = $paged == $max ? 'active' : '';
    printf( '<a class=" %s" href="%s" >%s</a>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
}

// next Post Link
if ( get_next_posts_link() ){
    printf( '%s' . "\n", get_next_posts_link( '<i class="icofont-arrow-right"></i>' ) );
}

echo '</div>' . "\n";
