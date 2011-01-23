<!--//--><![CDATA[//><!-- 舌签 lmy
function $(id){
	return document.getElementById(id);
}

function menu_my(name,num) {
	var my;
	my = $(name);
	
	if ( my.last == undefined ) {
		my.last = 1;
	}
	var Menu = $("Menu" + name + my.last);
	var Cont = $("Cont" + name + my.last);
	Menu.className = "";
	Cont.style.display = "none";

	var Menu = $("Menu" + name + num);
	var Cont = $("Cont" + name + num);
	Menu.className = "selected";
	Cont.style.display = "block";

	my.last = num;

}
//--><!]]>