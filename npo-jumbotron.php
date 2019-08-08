<div class="container">
    <div class="jumbotron bg-white">
        <h1 class="display-4">
            <?php
                if(get_theme_mod( 'jumbotron_title' )){
                    echo get_theme_mod( 'jumbotron_title' );
                }else{
                    echo esc_html__('점보트론 타이틀이 설정되지 않았습니다.','wp-bootstrap-starter');
                }
            ?>
        </h1>
        <p class="lead">
            <?php
                if(get_theme_mod( 'jumbotron_body' )){
                    echo get_theme_mod( 'jumbotron_body');
                }else{
                    echo esc_html__('점보트론 바디가 작성되지 않았습니다.', 'wp-bootstrap-starter');
                }
            ?>
        </p>
        <hr class="my-4">
        <p>
            <?php
                if(get_theme_mod( 'jumbotron_body2' )){
                    echo get_theme_mod( 'jumbotron_body2');
                }else{
                    echo esc_html__('점보트론 바디2가 작성되지 않았습니다.', 'wp-bootstrap-starter');
                }
            ?>
        </p>
        <p class="lead">
            <?php
                if(get_theme_mod( 'jumbotron_link' )){
                    $jLink = get_theme_mod( 'jumbotron_link');
                }else{
                    $jLink = "http://collectivecollege.net";
                }
            ?>
            <a class="btn btn-primary btn-lg" href="<?php echo $jLink ?>" role="button">더 보기</a>
        </p>
    </div>
</div>