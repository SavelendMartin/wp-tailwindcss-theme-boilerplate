<footer class="footer bg-challenger relative pt-1 border-b-2 border-progressive">
    <div class="container mx-auto px-6">

        <div class="sm:flex sm:mt-8">
            <div class="mt-8 sm:mt-0 sm:w-full sm:px-8 flex flex-col md:flex-row justify-between">
                <div class="flex flex-col">
                    <?php if ( is_active_sidebar( 'footer-area-1' ) ) : ?>
                      <div class="footer-area-1">
                          <?php dynamic_sidebar( 'footer-area-1' ); ?>
                      </div>
                    <?php endif; ?>

                    <!--<span class="font-bold text-offwhite uppercase mb-2">Footer header 1</span>
                    <span class="my-2"><a href="#" class="text-offwhite  text-md hover:text-progressive">link 1</a></span>
                    <span class="my-2"><a href="#" class="text-offwhite  text-md hover:text-progressive">link 1</a></span>
                    <span class="my-2"><a href="#" class="text-offwhite  text-md hover:text-progressive">link 1</a></span>-->
                </div>
                <div class="flex flex-col">
                    <?php if ( is_active_sidebar( 'footer-area-2' ) ) : ?>
                      <div class="footer-area-2">
                          <?php dynamic_sidebar( 'footer-area-2' ); ?>
                      </div>
                    <?php endif; ?>
                    <!--<span class="font-bold text-offwhite uppercase mt-4 md:mt-0 mb-2">Footer header 2</span>
                    <span class="my-2"><a href="#" class="text-offwhite text-md hover:text-progressive">link 1</a></span>
                    <span class="my-2"><a href="#" class="text-offwhite text-md hover:text-progressive">link 1</a></span>
                    <span class="my-2"><a href="#" class="text-offwhite text-md hover:text-progressive">link 1</a></span>-->
                </div>
                <div class="flex flex-col">
                    <?php if ( is_active_sidebar( 'footer-area-3' ) ) : ?>
                      <div class="footer-area-3">
                          <?php dynamic_sidebar( 'footer-area-3' ); ?>
                      </div>
                    <?php endif; ?>
                    <!--<span class="font-bold text-offwhite uppercase mt-4 md:mt-0 mb-2">Footer header 3</span>
                    <span class="my-2"><a href="#" class="text-offwhite text-md hover:text-progressive">link 1</a></span>
                    <span class="my-2"><a href="#" class="text-offwhite text-md hover:text-progressive">link 1</a></span>
                    <span class="my-2"><a href="#" class="text-offwhite text-md hover:text-progressive">link 1</a></span>-->
                </div>
                <div class="flex flex-col">
                    <?php if ( is_active_sidebar( 'footer-area-4' ) ) : ?>
                      <div class="footer-area-4">
                          <?php dynamic_sidebar( 'footer-area-4' ); ?>
                      </div>
                    <?php endif; ?>
                   <!-- <span class="font-bold text-offwhite uppercase mt-4 md:mt-0 mb-2">Footer header 4</span>
                    <span class="my-2"><a href="#" class="text-offwhite text-md hover:text-progressive">link 1</a></span>
                    <span class="my-2"><a href="#" class="text-offwhite text-md hover:text-progressive">link 1</a></span>
                    <span class="my-2"><a href="#" class="text-offwhite text-md hover:text-progressive">link 1</a></span>-->
                </div>
            </div>
        </div>
    </div>
    <div class="container mx-auto px-6">
        <div class="mt-16 border-t-2 border-offwhite flex flex-col items-center">
            <div class="text-center py-6">
                <p class="text-sm text-offwhite uppercase font-bold mb-2">
                    © 2021 SaveLend Group AB • 559097-7046 | Kammakargatan 7, 111 40 Stockholm | +46 (0) 8 12 44 60 67 • investor@savelend.se
                </p>
            </div>
        </div>
    </div>
</footer>

</footer>