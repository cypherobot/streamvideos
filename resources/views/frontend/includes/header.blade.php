


<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onClick="closeNav()">Close &#10006;</a>
    <table width="100%" cellpadding="0" cellspacing="1">
            <tr align="center">
            <td height="45"></td>
        </tr>
      </table>
    <table bgcolor="#111" width="100%" cellpadding="1" cellspacing="1">
      
       
       <tr><td class="title_side_menu"><a href="watchlist.html"><i class="icon-cam"></i> Watch List</a></td></tr>
       <tr><td class="title_side_menu"><a href="favorite.html">&#9829; Favorites</a></td></tr>
       <tr><td class="title_side_menu"><a href="myaccount.html">&#10173; MY Account</a></td></tr>
    
       </table>
    </div>
    
    <div id="main">
   
    <!--*************************************************************************************************************************-->
    <!--**************************************************Start disable right click**********************************************-->
    <!--*************************************************************************************************************************-->
    
    
    <!--**************************************************Top Header line********************************************************-->
    
    <table width="100%"  bgcolor="#0d0d0d" cellpadding="0" cellspacing="0" style="margin-bottom: 0px; ">
            <tr>
				<td width="3%" align="center" valign="middle"> 
					<span style="font-size:20px;cursor:pointer" onclick="openNav()">&#9776;</span>  </td>
						<td align="left" width="43%">
					<img alt="Pictures" height="35px" border="0" src="images/pics/logo.png">		</td>
						<td width="54%" align="right"> 
				</td>
            </tr>
    </table>
    
    <!--**************************************************End Top Header***********************************************************-->
    <!--*************************************************************************************************************************-->
    
	

 <script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "200px";
        document.getElementById("main").style.marginLeft = "200px";
        document.body.style.backgroundColor = "rgba(0,0,0,0.6)";
    }
    
    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("main").style.marginLeft= "0";
        document.body.style.backgroundColor = "#262626";
    }
</script>