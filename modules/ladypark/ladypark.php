<div class="ladypark-contain">
	<span class="title">ตั้งค่า LADY PARK</span>
	<ul>
		<li id="Block1" class="" style="background-color:#1b9864;" onclick="setLady(1);"></li>
		<li id="Block2" class="lady" onclick="setLady(2);"></li>
		<li id="Block3" onclick="setLady(3);"></li>
		<li id="Block4" onclick="setLady(4);"></li>
		<li id="Block5" onclick="setLady(5);"></li>
		<li id="Block6" onclick="setLady(6);"></li>
		<li id="Block7" onclick="setLady(7);"></li>
		<li id="Block8" onclick="setLady(8);"></li>
		<li id="Block9" onclick="setLady(9);"></li>
		<li id="Block10" onclick="setLady(10);"></li>
	</ul>
</div>

<script>
 function setLady(id){
	var park = $('#Block'+id);
	if(park.hasClass('lady')){
		park.attr("style","background-color:#1b9864");
		park.html('');
		park.removeClass('lady');
		setCookie("Block"+id, "0", "30");
	}else{
		park.attr("style","background-color:#f5689c");
		park.html('Lady Park');
		park.addClass('lady');
		setCookie("Block"+id, "1", "30");
	}
 }
 function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+d.toUTCString();
    document.cookie = cname + "=" + cvalue + "; " + expires;
 }
 function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1);
        if (c.indexOf(name) != -1) return c.substring(name.length,c.length);
    }
    return "";
} 

 $(document).ready(function(){
		for(var i=1;i<=10;i++){
			if(getCookie("Block"+i)=="1"){
				$("#Block"+i).attr("style","background-color:#f5689c");
				$("#Block"+i).html('Lady Park');
				$("#Block"+i).addClass('lady');
		}
		
	}
 });

</script>