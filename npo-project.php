<!-- project -->
<div class="container project" id="project">
	<div class="row">
	  <div class="col-md-6 col-sm-12 mb-2">
			<div class="card flex-md-row border-white">
				<div class="card-body">
					<h5 class="card-title">
          <?php
            if(get_theme_mod('project_first_title')){
              echo get_theme_mod('project_first_title');
            }else {
              echo esc_html__('프로젝트 첫 번째 타이틀이 설정되지 않았습니다.', '99Npo');
            }
				  ?>
          </h5>
					<p class="card-text">
          <?php
            if(get_theme_mod('project_first_body')){
              echo get_theme_mod('project_first_body');
            }else {
              echo esc_html__('프로젝트 첫 번째 본문이 설정되지 않았습니다.', '99Npo');
            }
				  ?>
          </p>
          <?php
            if(get_theme_mod('project_first_link')){
              $pLink = get_theme_mod('project_first_link');
            }else{
              $pLink = "#";
            }
          ?>
					<a href="<?php echo $pLink; ?>" target="_blank" class="btn btn-primary"><i class="fas fa-external-link-alt"></i></a>
				</div>
        <?php
          if(get_theme_mod( 'project_first_img' )){
            $pImgLink = get_theme_mod( 'project_first_img');
          }else{
            $pImgLink = "data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22200%22%20height%3D%22250%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20200%20250%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_1666732b235%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A13pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_1666732b235%22%3E%3Crect%20width%3D%22200%22%20height%3D%22250%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2256.1953125%22%20y%3D%22131%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E";
          }
        ?>
				<img  class="d-none d-lg-block" src=" <?php echo $pImgLink ?>" style="width: 200px; height: 250px;">
			</div>
		</div>
	  <div class="col-md-6 col-sm-12 mb-4">
			<div class="card flex-md-row border-white">
				<div class="card-body">
					<h5 class="card-title">
          <?php
            if(get_theme_mod('project_second_title')){
              echo get_theme_mod('project_second_title');
            }else {
              echo esc_html__('프로젝트 첫 번째 타이틀이 설정되지 않았습니다.', '99Npo');
            }
				  ?>
          </h5>
					<p class="card-text">
          <?php
            if(get_theme_mod('project_second_body')){
              echo get_theme_mod('project_second_body');
            }else {
              echo esc_html__('프로젝트 두 번째 타이틀이 설정되지 않았습니다.', '99Npo');
            }
				  ?>
          </p>
          <?php
            if(get_theme_mod('project_second_link')){
              $pLink = get_theme_mod('project_second_link');?>
    					<a href="<?php echo $pLink; ?>" target="_blank" class="btn btn-primary"><i class="fas fa-external-link-alt"></i></a>
          <?php
            }else{
              $pLink = "#";
            }
          ?>
				</div>
				<?php
          if(get_theme_mod( 'project_second_img' )){
            $pImgLink = get_theme_mod( 'project_second_img');
          }else{
            $pImgLink = "data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22200%22%20height%3D%22250%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20200%20250%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_1666732b235%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A13pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_1666732b235%22%3E%3Crect%20width%3D%22200%22%20height%3D%22250%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2256.1953125%22%20y%3D%22131%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E";
          }
        ?>
				<img  class="d-none d-lg-block" src=" <?php echo $pImgLink ?>" style="width: 200px; height: 250px;">
			</div>
		</div>
		<div class="col-md-6 col-sm-12 mb-4">
			<div class="card flex-md-row border-white">
				<div class="card-body">
					<h5 class="card-title">
          <?php
            if(get_theme_mod('project_third_title')){
              echo get_theme_mod('project_third_title');
            }else {
              echo esc_html__('프로젝트 세 번째 타이틀이 설정되지 않았습니다.', '99Npo');
            }
				  ?>
          </h5>
					<p class="card-text">
          <?php
            if(get_theme_mod('project_third_body')){
              echo get_theme_mod('project_third_body');
            }else {
              echo esc_html__('프로젝트 세 번째 타이틀이 설정되지 않았습니다.', '99Npo');
            }
				  ?>
          </p>
          <?php
            if(get_theme_mod('project_third_link')){
              $pLink = get_theme_mod('project_third_link');?>
    					<a href="<?php echo $pLink; ?>" target="_blank" class="btn btn-primary"><i class="fas fa-external-link-alt"></i></a>
          <?php
            }else{
              $pLink = "#";
            }
          ?>
				</div>
				<?php
          if(get_theme_mod( 'project_third_img' )){
            $pImgLink = get_theme_mod( 'project_third_img');
          }else{
            $pImgLink = "data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22200%22%20height%3D%22250%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20200%20250%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_1666732b235%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A13pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_1666732b235%22%3E%3Crect%20width%3D%22200%22%20height%3D%22250%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2256.1953125%22%20y%3D%22131%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E";
          }
        ?>
				<img  class="d-none d-lg-block" src=" <?php echo $pImgLink ?>" style="width: 200px; height: 250px;">
			</div>
		</div>
		<div class="col-md-6 col-sm-12 mb-4">
			<div class="card flex-md-row border-white">
				<div class="card-body">
					<h5 class="card-title">
          <?php
            if(get_theme_mod('project_fourth_title')){
              echo get_theme_mod('project_fourth_title');
            }else {
              echo esc_html__('프로젝트 네 번째 타이틀이 설정되지 않았습니다.', '99Npo');
            }
				  ?>
          </h5>
					<p class="card-text">
          <?php
            if(get_theme_mod('project_fourth_body')){
              echo get_theme_mod('project_fourth_body');
            }else {
              echo esc_html__('프로젝트 네 번째 타이틀이 설정되지 않았습니다.', '99Npo');
            }
				  ?>
          </p>
          <?php
            if(get_theme_mod('project_fourth_link')){
              $pLink = get_theme_mod('project_fourth_link');?>
    					<a href="<?php echo $pLink; ?>" target="_blank" class="btn btn-primary"><i class="fas fa-external-link-alt"></i></a>
          <?php
            }else{
              $pLink = "#";
            }
          ?>
				</div>
				<?php
          if(get_theme_mod( 'project_fourth_img' )){
            $pImgLink = get_theme_mod( 'project_fourth_img');
          }else{
            $pImgLink = "data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22200%22%20height%3D%22250%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20200%20250%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_1666732b235%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A13pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_1666732b235%22%3E%3Crect%20width%3D%22200%22%20height%3D%22250%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2256.1953125%22%20y%3D%22131%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E";
          }
        ?>
				<img  class="d-none d-lg-block" src=" <?php echo $pImgLink ?>" style="width: 200px; height: 250px;">
			</div>
		</div>
</div>