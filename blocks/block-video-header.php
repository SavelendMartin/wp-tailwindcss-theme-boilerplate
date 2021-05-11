<?php

//block_field( 'image-background', true );

//block_field( 'video' );

?>

<div class="w-full bg-cover bg-no-repeat h-64 md:h-80 bg-center relative mb-32 angled" style="background-image: url('<?php block_field( 'image-background', true ); ?>')">
<svg class="w-full h-10 absolute bottom-0 left-0 z-10 text-offwhite-400" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 16 16" preserveAspectRatio="none">
    <polygon points="16,0 16,16 0,16" fill="currentColor"/>
</svg>
<iframe height="360"
src="https://www.youtube.com/embed/9-1kBMvjQIk"
class="absolute left-1/2 transform -translate-x-1/2 top-1/3 border border-offwhite shadow-2xl z-20 w-full max-w-screen-sm">
</iframe>
</div>