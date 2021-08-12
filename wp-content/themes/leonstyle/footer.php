

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory') ?>/slick/slick.min.js"></script>
    <script>
        $(document).ready(function(){

            $('.slider-for').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                fade: true,
                autoplay: true,
                asNavFor: '.slider-nav',
                prevArrow : '<img class="w-10-px position-absolute prev-arrow rounded-circle bg-light" src="<?php bloginfo('template_directory') ?>/images/arrow/direction_left_icon.png">',
                nextArrow : '<img class="w-10-px position-absolute next-arrow rounded-circle bg-light" src="<?php bloginfo('template_directory') ?>/images/arrow/direction_next_icon.png">'
            });

            $('.slider-nav').slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                asNavFor: '.slider-for',
                dots: false,
                autoplay: true,
                centerMode: true,
                focusOnSelect: true,
                prevArrow : '<img class="w-10-px position-absolute prev-arrow" src="<?php bloginfo('template_directory') ?>/images/arrow/left_icon.png">',
                nextArrow : '<img class="w-10-px position-absolute next-arrow" src="<?php bloginfo('template_directory') ?>/images/arrow/latter_icon.png">'
            });
        });
    </script>
    <?php wp_footer(); ?>
  </body>
</html>