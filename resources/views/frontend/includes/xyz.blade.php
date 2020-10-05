
<!-----CATEGORY SECTION START-->
@foreach ($categoryWiseArray as $categoryList)
	<hr>


	<div class="container">
    
			<span class="text1">{{ $categoryList->category_name }}</span>

			<div class="row">
				@for ($i = 0; $i < $categoryList->couponsCount/2; $i++)
					@if ($i == 0)
						{{-- First Coupon --}}
						<div class="col-md-4">
							<div class="row">
								<div class="wrapper">
									<div class="offer-name">
										{{ $categoryList->coupons_array[$i]->offer_name }}
									</div>
									<figure class="wow animated portfolio-item game-cate-each" data-wow-duration="500ms" data-wow-delay="0ms">
										<img src="{{ $categoryList->coupons_array[$i]->banner_image_url }} " class="bigbox "/>
										<div class="overlay">
											<div class="offer-description">
												{{ $categoryList->coupons_array[$i]->description }}
											</div>
											<div class="content"><a href="{{ $categoryList->coupons_array[$i]->tracking_link }}">GET COUPON</a></div>
										</div>
									</figure>
								</div>
							</div>
						</div>
					@else

						@if ($i == 1)
							<div class="col-md-8">
								<div class="row">
						@endif
								@for ($k = $i; $k < $categoryList->couponsCount/2; $k++)
									<div class="col-md-4 sm_box_container">
										<div class="row">
											<div class="wrapper">
												<div class="offer-name">
													{{ $categoryList->coupons_array[$k]->offer_name }}
													
												</div>

												<figure class="wow animated portfolio-item game-cate-each" data-wow-duration="500ms" data-wow-delay="0ms">
													<img src="{{ $categoryList->coupons_array[$k]->banner_image_url }}" class="box "/>
													<div class="overlay">
														<div class="offer-description">
															{{ $categoryList->coupons_array[$k]->description }}
														</div>
														<div class="content"><a href="{{ $categoryList->coupons_array[$k]->tracking_link }}">GET COUPON</a></div>
													</div>
												</figure>
											</div>
										</div>
									</div>
								@endfor
						@if ($i == 1)
								</div>
							</div>
						@endif		
						<?php break ?>	
					@endif
				@endfor
			</div>

			<div class="row">
				@for ($i = $categoryList->couponsCount/2; $i < $categoryList->couponsCount; $i++)
					@if ($i == $categoryList->couponsCount/2)
						{{-- First Coupon --}}
						<div class="col-md-4">
							<div class="row">
								<div class="wrapper">
									<div class="offer-name">
										{{ $categoryList->coupons_array[$i]->offer_name }}
									</div>

									<figure class="wow animated portfolio-item game-cate-each" data-wow-duration="500ms" data-wow-delay="0ms">
										<img src="{{ $categoryList->coupons_array[$i]->banner_image_url }} " class="bigbox "/>
										<div class="overlay">
											<div class="offer-description">
												{{ $categoryList->coupons_array[$i]->description }}
											</div>
											<div class="content"><a href="{{ $categoryList->coupons_array[$i]->tracking_link }}">GET COUPON</a></div>
										</div>
									</figure>
								</div>
							</div>
						</div>
					@else
						@if ($i == $categoryList->couponsCount/2 + 1)
							<div class="col-md-8">
								<div class="row">
						@endif
									@for ($k = $categoryList->couponsCount/2 + 1; $k < $categoryList->couponsCount; $k++)
										<div class="col-md-4 sm_box_container">
											<div class="row">
												<div class="wrapper">
													<div class="offer-name">
														{{ $categoryList->coupons_array[$k]->offer_name }}
													</div>

													<figure class="wow animated portfolio-item game-cate-each" data-wow-duration="500ms" data-wow-delay="0ms">
														<img src="{{ $categoryList->coupons_array[$k]->banner_image_url }}" class="box "/>
														<div class="overlay">
															<div class="offer-description">
																{{ $categoryList->coupons_array[$i]->description }}
															</div>
															<div class="content"><a href="{{ $categoryList->coupons_array[$k]->tracking_link }}">GET COUPON</a></div>
														</div>
													</figure>
												</div>
											</div>
										</div>
									@endfor
						@if ($i == $categoryList->couponsCount/2 + 1)
								</div>
							</div>
						@endif
					
						<?php break ?>
						{{-- <div class="col-md-8">
							<div class="row">
								<div class="col-md-4">
									<div class="row">
										<div class="wrapper">
											<figure class="wow animated portfolio-item game-cate-each" data-wow-duration="500ms" data-wow-delay="0ms">
												<img src="assets/images/background1.jpg" class="box "/>
												<div class="overlay">
												<div class="content"><a>GET COUPON</a></div>
												</div>
											</figure>
										</div>
									</div>
								</div>
						
								<div class="col-md-4">
									<div class="row">
										<div class="wrapper">
											<figure class="wow animated portfolio-item game-cate-each" data-wow-duration="500ms" data-wow-delay="0ms">
												<img src="assets/images/background1.jpg" class="box "/>
												<div class="overlay">
													<div class="content"><a>GET COUPON</a></div>
												</div>
											</figure>
										</div>
									</div>
								</div>
						
								<div class="col-md-4">
									<div class="row">
							
										<div class="wrapper">
											<figure class="wow animated portfolio-item game-cate-each" data-wow-duration="500ms" data-wow-delay="0ms">
												<img src="assets/images/background1.jpg" class="box "/>
												<div class="overlay">
													<div class="content"><a>GET COUPON</a></div>
												</div>
											</figure>
										</div>
									</div>
								</div>
							</div>
						</div> --}}
					@endif
				@endfor
			</div>


			<div class="mbr-section-btn align-center py-4">
				<a class="btn btn-secondary display-4" href="{{route('category',[ 'category_name' => base64_encode($categoryList->category_name) ])}}">
					VIEW ALL COUPONS
				</a>
			</div>
		</div>
			
	</div>
			
@endforeach
      