<div class="process container-fluid bg-primary text-white" id="process">
	<div class="container ">
		<div class="row">
			<div class="card-columns">
				<div class="card bg-primary border-primary">
					<div class="card-body">
						<h5 class="card-title"><i class="fas fa-marker"></i>
              <?php
                if(get_theme_mod('process_first_title')){
                    echo get_theme_mod('process_first_title');
                }else {
                    echo esc_html__('process 첫 번째가 설정되지 않았습니다.', '99Npo');
                }
              ?>
            </h5>
						<p class="card-text">
              <?php
                if(get_theme_mod('process_first_body')){
                    echo get_theme_mod('process_first_body');
                }else {
                    echo esc_html__('설정되지 않았습니다.', '99Npo');
                }
              ?>
            </p>
					</div>
				</div>
				<div class="card bg-primary border-primary">
					<div class="card-body">
						<h5 class="card-title"><i class="fas fa-hands-helping"></i> 
              <?php
                if(get_theme_mod('process_second_title')){
                    echo get_theme_mod('process_second_title');
                }else {
                    echo esc_html__('설정되지 않았습니다.', '99Npo');
                }
              ?>
            </h5>
						<p class="card-text">
              <?php
                if(get_theme_mod('process_second_body')){
                    echo get_theme_mod('process_second_body');
                }else {
                    echo esc_html__('설정되지 않았습니다.', '99Npo');
                }
              ?>
            </p>
					</div>
				</div>
				<div class="card bg-primary border-primary ">
					<div class="card-body">
						<h5 class="card-title"><i class="fab fa-slideshare"></i>
              <?php
                if(get_theme_mod('process_third_title')){
                    echo get_theme_mod('process_third_title');
                }else {
                    echo esc_html__('설정되지 않았습니다.', '99Npo');
                }
              ?>
            </h5>
						<p class="card-text">
              <?php
                if(get_theme_mod('process_third_body')){
                    echo get_theme_mod('process_third_body');
                }else {
                    echo esc_html__('설정되지 않았습니다.', '99Npo');
                }
              ?>
            </p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>