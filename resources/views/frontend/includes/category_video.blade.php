



<table width="100%" border="0" cellpadding="0" style="margin-bottom:1px; margin-top:5px;">
    <tr>
        <td width="70%" class="border_top" align="left">
            <h1 class="title_inner_watch">&nbsp; Horror</h1>
        </td>
        <td width="30%" class="border_top" align="right">
            
        </td>
    </tr>
</table>
	
<?php $video_id = 1 ?>

<table width="100%" style="padding: 15px;">

    {{-- Start of two video  --}}
    <tr>
        {{-- First video  --}}
        <td>&nbsp;
            <a href="{{ route('play-video',['video_id' => $video_id]) }}">
    
                <table class="border_slid_content" width="96%"  cellpadding="0" cellspacing="0"  bgcolor="#414064">
                    <tr>
                        <td>
                            <table  width="100%" height="95px" style="background-size: cover" background="images/pics/img1.jpg" > 
                                <tr width="100%" height="95px">
                                    <td width="100%" align="center" valign="middle">
                                        <table  width="100%" align="center">
                                        <tr width="100%">
                                            <td align="center" valign="middle">
                                            <img src="images/pics/play_icon_02.png"  width="60px" height="60px"/>
                                            </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>

                            <table width="150px"  cellpadding="0" cellspacing="0"> 
                                <tr>
                                    <td height="25px">
                                    <strong class="text_details">&nbsp;Hyperfutura-official-trai ..</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td height="20px">
                                        <strong class="text_details">
                                        <span class="time"><i class="icon-time"></i><span>&nbsp;1:41  </span></span> &nbsp;&nbsp;&nbsp;
                                        <span class="eye"><i class="icon-eye"></i><span>240</span></span>
                                        </strong>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </a>
        </td>

        {{-- Second video  in same row--}}

        <td>&nbsp;
            <a href="{{ route('play-video',['video_id' => $video_id]) }}">
    
                <table class="border_slid_content" width="96%"  cellpadding="0" cellspacing="0"  bgcolor="#414064">
                    <tr>
                        <td>
                            <table  width="100%" height="95px" style="background-size: cover" background="images/pics/img1.jpg" > 
                                <tr width="100%" height="95px">
                                    <td width="100%" align="center" valign="middle">
                                        <table  width="100%" align="center">
                                        <tr width="100%">
                                            <td align="center" valign="middle">
                                            <img src="images/pics/play_icon_02.png"  width="60px" height="60px"/>
                                            </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>

                            <table width="150px"  cellpadding="0" cellspacing="0"> 
                                <tr>
                                    <td height="25px">
                                    <strong class="text_details">&nbsp;Hyperfutura-official-trai ..</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td height="20px">
                                        <strong class="text_details">
                                        <span class="time"><i class="icon-time"></i><span>&nbsp;1:41  </span></span> &nbsp;&nbsp;&nbsp;
                                        <span class="eye"><i class="icon-eye"></i><span>240</span></span>
                                        </strong>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </a>
        </td>
         
    </tr>
    {{-- End of two video  --}}


        <table width="100%" border="0" cellpadding="0" style="margin-bottom:1px; margin-top:1px">
            <tr>
                <td width="100%" class="border_top" align="center">
                    <a style="text-decoration:none;" href="#"> 
                        <strong class="button" style="font-size:12px; font-weight:bold; color:#414064; text-decoration:none;">LOAD MORE</strong>
                    </a>
                </td>
            </tr>
        </table>


</table>






{{-- Ajax Script Start --}}
{{-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> --}}
<script type="text/javascript">
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $(".load-more").on('click',function(){
            var _totalCurrentResult=$(".product-box").length;
            // var _totalCurrentResult = find(".product-box").val(total);
            var country_name=$(".country_name").val();
            var main_site="/";
            // alert(main_site);
            // Ajax Reuqest
            $.ajax({
                url:'/load-more-offer',
                type:'get',
                dataType:'json',
                // async : false ,
                data:{
                    skip:_totalCurrentResult,
                    country_name:country_name
                },

                beforeSend:function(){
                    $(".load-more").html('Loading...');
                },
                success:function(response){
                    // _html += response;
                    // var image="{{ asset('imgs') }}/";
                    $.each(response,function(index,offer){
                        // alert(value.tracking_link);
                        var _html='';

                        _html+='<div class="col-sm-4 mb-3 product-box">';
                       
                            _html+='<div class="col-md-4">';
                                _html+='<div class="row bigger-product">';
                                    _html+='<div class="wrapper">';
                                        

                                        _html+= '<figure class="wow animated portfolio-item game-cate-each" data-wow-duration="500ms" data-wow-delay="0ms">';
                                            _html+='<img src=" '+offer.offer_logo+' "  class="bigbox "/>';
                                            
                                            // Space for overlay
                                        _html+='</figure>';
                                    _html+='</div>';
                                _html+='</div>';
                            _html+='</div>';
                        _html+='</div>';
                        
                        $(".product-list").append(_html);
                    });

                    // Change Load More When No Further result
                    var _totalCurrentResult=$(".product-box").length;
                    var _totalResult=parseInt($(".load-more").attr('data-totalResult'));
                    console.log(_totalCurrentResult);
                    console.log(_totalResult);
                    if(_totalCurrentResult == _totalResult){
                        $(".load-more").remove();
                    }else{
                        $(".load-more").html('Load More');
                    }
                }
            });
        });
    });
</script>
{{-- Ajax Script End --}}