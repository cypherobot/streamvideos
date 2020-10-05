<?php $slider_no = 0 ?>
@foreach ($categoryWiseArray as $categoryList)
	
	{{-- Start of video category --}}

		<HR COLOR="#2e2e2e" WIDTH="100%" SIZE="1"><HR COLOR="grey" WIDTH="100%" SIZE="1">
		<table width="100%" border="0" cellpadding="0" style="margin-bottom:30px; margin-top:7px">
			<tr>
			<td width="50%" class="border_top" align="left">
				<a href=""><h3 class="title_inner_watch">&nbsp; {{ $categoryList->category }}</h3></a>
			</td>
			<td width="50%" class="border_top" align="right">
				<a style="text-decoration:none;" href=" {{ route('category',['category_id' => base64_encode($categoryList->category_id)]) }}"> 
					<strong class="button" style="font-size:12px; font-weight:bold; color:#414064; text-decoration:none;">MORE</strong>
				</a>
				&nbsp;&nbsp;
			</td>
			</tr>
		</table> 
		
		
		
	

		<ul id="content-slider_{{$slider_no}}">
			<?php $slider_no = $slider_no + 1 ?>

			@for ($i = 0; $i < $categoryList->videoCount; $i++)

				{{-- start of video --}}
				<li style="height:141px"> 
					
					
						<table class="border_slid_content" width="150px"  cellpadding="0" cellspacing="0"  bgcolor="#414064">
							<tr>
								<td>
									<table width="150px" height="95px" style="background-size: cover" background="/storage/storage/thumbnails/{{$categoryList->video_array[$i]->thumbnail_image}}"> <tr width="100%" height="95px">
										<td width="100%" align="center" valign="middle">
										<table  width="100%" align="center">
											<tr width="100%">
												<td align="center" valign="middle">
													<a href="{{ route('play-video',['video_id' => base64_encode($categoryList->video_array[$i]->id)]) }}" >
														<img src="images/pics/play_icon_02.png"  width="60px" height="60px"/>
													</a>
												</td>
											</tr>
										</table>
										</td>
										</tr>
									</table>
									<table width="150px"  cellpadding="0" cellspacing="0"> 
										<tr>
											<td height="20px">
												<a href="{{ route('play-video',['video_id' => base64_encode($categoryList->video_array[$i]->id)]) }}" >
													<strong class="text_details">&nbsp;{{$categoryList->video_array[$i]->title}}</strong>
												</a>
												
											</td>
										</tr>
										<tr>
											<td height="17px">
												<a href="{{ route('play-video',['video_id' => base64_encode($categoryList->video_array[$i]->id)]) }}" >
													<strong class="text_details">
														<span class="time"><i class="icon-time"></i><span>&nbsp;{{$categoryList->video_array[$i]->duration}}</span></span> &nbsp;&nbsp;&nbsp;
														<span class="eye"><i class="icon-eye"></i><span>745</span></span>
													</strong>
												</a>
											</td>
										</tr>
									</table>
								</td>
							</tr>
						</table>

				</li>
				{{-- End of video --}}
				
			@endfor

		</ul>

	

	{{-- End of video category --}}
@endforeach

	








