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
	      <h5 class="card-title">BlockChain</h5>
	      <p class="card-text">블록체인 개념, 아키텍쳐 설계, Dapp만들기를 배우는 과정입니다.</p>
	      <p class="card-text d-flex justify-content-end">
	      	<button type="button" class="btn btn-outline-primary btn-xs" data-toggle="modal" data-target="#readMore2">더 보기</button>
	      </p>
	      <!-- Modal -->
				<div class="modal fade" id="readMore2" tabindex="-1" role="dialog" aria-labelledby="readMore2" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="readMore2">블록체인</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
									<h6>블록체인 기초</h6>
									<p>블록체인을 구성하는 기본 개념에 대해 공부합니다.</p>
									<p>기초 기술에 대해 python등을 통해 구현</p>
									<br>
									<hr>
									<h6>아키텍쳐 설계</h6>
									<p>블록체인 엔진에 대한 평가기준 작성과 분석을 하는 과정</p>
									<p>비트코인, 이더리움, 텐더민트 등 다양한 블록체인 엔진을 분석합니다.</p>
									<p>분석을 토대로 설계를 합니다.</p>
									<br>
									<hr>
									<h6>Dapp</h6>
									<p>블록체인 위에 실행되는 어플리케이션을 만드는 과정입니다.</p>
									<p>이더리움, 이오스 등 다양한 엔진 위에서 실행되는 Dapp을 만들어봅니다.</p>
									<p>Dapp과 관련된 보안요소도 살펴봅니다.</p>
									<a href="https://github.com/pangol/dapp101">Dapp101보러 가기</a>
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
	      <h5 class="card-title">인공지능과 데이터 분석</h5>
	      <p class="card-text">데이터 분석과 인공지능에 필요한 지식을 배우는 과정입니다.</p>
	      <p class="card-text d-flex justify-content-end">
	      	<button type="button" class="btn btn-outline-primary btn-xs" data-toggle="modal" data-target="#readMore3">더 보기</button>
	      </p>
	      <!-- Modal -->
				<div class="modal fade" id="readMore3" tabindex="-1" role="dialog" aria-labelledby="readMore3" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="readMore3">인공지능과 데이터 분석</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
									<h6>파이썬 기초</h6>
									<p>데이터 분석과 인공지능에 많이 사용되는 파이썬 기초를 공부합니다.</p>
									<p>가장 기본적인 데이터분석과 인공지능 기술에 대해 배웁니다.</p>
									<br>
									<hr>
									<h6>인공지능</h6>
									<p>신경망을 다루는 방법에 대해 학습합니다.</p>
									<p>이미지 분석, 자연어 처리 등에 필요한 부가적인 정보도 학습니다.</p>
									<br>
									<hr>
									<h6>데이터 분석</h6>
									<p>데이터 분석의 기초인 확률</p>
									<p>SQL 다루기</p>
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