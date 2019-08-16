<!-- ongoing curriculum -->
<div class="curriculum container" id="curriculum">
	<div class="card-deck">
	  <div class="card border border-primary mb-3 ">
	    <div class="card-body">
	      <h5 class="card-title">
          <?php
            if(get_theme_mod('curriculum_first_title')){
              echo get_theme_mod('curriculum_first_title');
            }else {
              echo esc_html__('커리큘럼 첫 번째가 설정되지 않았습니다.', '99Npo');
            }
          ?>
        </h5>
				<p class="card-text">
          <?php
            if(get_theme_mod('curriculum_first_body')){
              echo get_theme_mod('curriculum_first_body');
            }else {
              echo esc_html__('커리큘럼 첫 번째 바디 문구가 설정되지 않았습니다.', '99Npo');
            }
          ?>
        </p>
	      <p class="card-text d-flex justify-content-end">
	      	<button type="button" class="btn btn-outline-primary btn-xs" data-toggle="modal" data-target="#readMore1">더 보기</button>
	      </p>
	      <!-- Modal -->
				<div class="modal fade" id="readMore1" tabindex="-1" role="dialog" aria-labelledby="readMore1" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">
                  <?php
                    if(get_theme_mod('curriculum_first_title')){
                      echo get_theme_mod('curriculum_first_title');
                    }else {
                      echo esc_html__('커리큘럼 첫 번째 타이틀 문구가 설정되지 않았습니다.', '99Npo');
                    }
                  ?>
                </h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
                <?php
                  if(get_theme_mod('curriculum_first_modal_body')){
                    echo get_theme_mod('curriculum_first_modal_body');
                  }else {
                    echo esc_html__('커리큘럼 첫 번째 모달 문구가 설정되지 않았습니다.', '99Npo');
                  }
                ?>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-primary" data-dismiss="modal">닫기</button>
				      </div>
				    </div>
				  </div>
				</div>
	    </div>
	  </div>

	  <div class="card border border-primary mb-3 ">
	    <div class="card-body">
	      <h5 class="card-title">
				<?php
					if(get_theme_mod('curriculum_second_title')){
						echo get_theme_mod('curriculum_second_title');
					}else {
						echo esc_html__('커리큘럼 두 번째 타이틀 문구가 설정되지 않았습니다.', '99Npo');
					}
				?>
				</h5>
	      <p class="card-text">
				<?php
					if(get_theme_mod('curriculum_second_body')){
						echo get_theme_mod('curriculum_second_body');
					}else {
						echo esc_html__('커리큘럼 첫 번째 바디 문구가 설정되지 않았습니다.', '99Npo');
					}
				?>
				</p>
	      <p class="card-text d-flex justify-content-end">
	      	<button type="button" class="btn btn-outline-primary btn-xs" data-toggle="modal" data-target="#readMore2">더 보기</button>
	      </p>
	      <!-- Modal -->
				<div class="modal fade" id="readMore2" tabindex="-1" role="dialog" aria-labelledby="readMore2" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="readMore2">
								<?php
									if(get_theme_mod('curriculum_second_title')){
										echo get_theme_mod('curriculum_second_title');
									}else {
										echo esc_html__('커리큘럼 두 번째 타이틀 문구가 설정되지 않았습니다.', '99Npo');
									}
								?>
								</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
							<?php
								if(get_theme_mod('curriculum_second_modal_body')){
									echo get_theme_mod('curriculum_second_modal_body');
								}else {
									echo esc_html__('커리큘럼 두 번째 모달 문구가 설정되지 않았습니다.', '99Npo');
								}
							?>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-primary" data-dismiss="modal">닫기</button>
				      </div>
				    </div>
				  </div>
				</div>
	    </div>
	  </div>
	  <div class="card border border-primary mb-3 ">
	    <div class="card-body">
	      <h5 class="card-title">
				<?php
					if(get_theme_mod('curriculum_third_title')){
						echo get_theme_mod('curriculum_third_title');
					}else {
						echo esc_html__('커리큘럼 세 번째 타이틀 문구가 설정되지 않았습니다.', '99Npo');
					}
				?>
				</h5>
	      <p class="card-text">
				<?php
					if(get_theme_mod('curriculum_third_body')){
						echo get_theme_mod('curriculum_third_body');
					}else {
						echo esc_html__('커리큘럼 세 번째 본문 문구가 설정되지 않았습니다.', '99Npo');
					}
				?>
				</p>
	      <p class="card-text d-flex justify-content-end">
	      	<button type="button" class="btn btn-outline-primary btn-xs" data-toggle="modal" data-target="#readMore3">더 보기</button>
	      </p>
	      <!-- Modal -->
				<div class="modal fade" id="readMore3" tabindex="-1" role="dialog" aria-labelledby="readMore3" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="readMore3">
								<?php
									if(get_theme_mod('curriculum_third_title')){
										echo get_theme_mod('curriculum_third_title');
									}else {
										echo esc_html__('커리큘럼 세 번째 타이틀 문구가 설정되지 않았습니다.', '99Npo');
									}
								?>
								</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
							<?php
								if(get_theme_mod('curriculum_third_modal_body')){
									echo get_theme_mod('curriculum_third_modal_body');
								}else {
									echo esc_html__('커리큘럼 세 번째 모달 문구가 설정되지 않았습니다.', '99Npo');
								}
							?>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-primary" data-dismiss="modal">닫기</button>
				      </div>
				    </div>
				  </div>
				</div>
	    </div>
  	</div>
	</div>
</div>