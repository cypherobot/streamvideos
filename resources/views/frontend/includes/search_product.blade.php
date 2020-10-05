
<div class="container">

	{{-- QUICK NAVIGATION  --}}
	<div class="quick-navigation">
		<span class="navigation-text"><a href=" {{ route('home') }}">Home </a>/{{-- / Category / --}} {{ $coupon->offer_name }}</span>
	</div>
	
	<div class="category-name">
		<span class="text1" style="font-size: 20px;">Search Result</span>
	</div>

	<div class="row product-list">
            
            {{-- START OF CATEGORY --}}
            <div class="col-md-6 ">
                    {{-- START OF BIGGER PRODUCT  --}}
                    <div class="row bigger-product">
                        <div class="wrapper" style="width:100%;height: 310px;border: 2px solid grey;">
                            <div class="offer-name">
                                {{ $coupon->offer_name }}
                            </div>

                            <figure class="wow animated portfolio-item game-cate-each" data-wow-duration="500ms" data-wow-delay="0ms">
                                <img style="width: 96%;height: 250px;" src="{{ $coupon->banner_image_url }}"  class="bigbox "/>
                                {{-- <div class="overlay">
                                    <div class="offer-description">
                                        {{ $coupon->coupons_array[$i]->description }}
                                    </div>
                                    <div class="content"><a href="assets/images/background1.jpg">GET COUPON</a></div>
                                </div> --}}
                            </figure>
                        </div>
                    </div>
                    {{-- END OF BIGGER PRODUCT  --}}  
        
            </div>
            
            {{-- END OF CATEGORY  --}}

            <div class="col-md-6 ">
                {{-- START OF DESCRIPTION PRODUCT  --}}
                <div class="row bigger-product">
                    <div class="cu_desc wrapper" style="">
                        <div class="offer-name">
                            <center><span style="color:red;">{{ $coupon->campaign_name }}</span></center>
                            </br>
                            <span>Voucher Code</span>
                            <span style="color: orangered;">{{ $coupon->voucher_code }}</span>
                            <span>Description</span>
                            {{ $coupon->description }}
                        </div>
                        <div class="mbr-section-btn align-center py-4">
                            <a class="btn custom-btn btn-secondary display-4" target="_blank" href="{{ $coupon->tracking_link }}">
                                Buy Product
                            </a>
                        </div>
                    </div>
                </div>
                
                {{-- END OF DESCRIPTION PRODUCT  --}}  
            </div>
    </div>

</div>