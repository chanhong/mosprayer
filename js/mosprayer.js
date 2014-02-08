/**
* @version 
* @package MosPrayer - COAddOns for Mambo & Jommla - Prayers on Articles based on COMBO by Phil Taylor
* @copyright (C) 2009 ongetc.com
* @info ongetc@ongetc.com http://ongetc.com
* @license GNU/GPL http:/ongetc.com/gpl.html.
*/ 

function mp_openpopup(iurl,iwidth,iheight){
	if (iurl == null) { iurl='http://ongetc.com'; }
	if (iwidth == null) { iwidth=525; }
	if (iheight == null) { iheight=500; }
	var windowW = iwidth; // wide
	var windowH = iheight; // high
	var windowX = (screen.width/2)-(windowW/2);
	var windowY = (screen.height/2)-(windowH/2);
	s = "width="+windowW+",height="+windowH+",scrollbars=no";
	var beIE = document.all ? true : false;
	var urlPop = iurl;
	mosprayerpopup=window.open(urlPop,"popFrameless",+s);
	mosprayerpopup.blur();
	window.focus();
	mosprayerpopup.resizeTo(windowW,windowH);
	mosprayerpopup.moveTo(windowX,windowY);
	mosprayerpopup.focus();
}

// begin of bbclass class
function bbclass(objName) {
this.mosprayerhelptext = null;
this.bbBaseStr = "b u i center code quote"; // list of valid bbcode
//this.bbExtStr = "size color url img"; // list of valid bbcode
this.bbExtStr = "size color url"; // list of valid bbcode
this.obj = objName;
}

	bbclass.prototype.b = function(txtarea,text) { // main entrance
		bbcheck = this.bbmatchbase(text);
		if (bbcheck == null) { text=this.bbext(text); }
		else { text = bbcheck; }
		this.insert(txtarea,text);
	}

	bbclass.prototype.bbext = function(text) {
		bbcheck = this.bbmatchoneparm(text);
		if (bbcheck == null) {
		switch (text){
		case 'hyper' :
		  link=prompt('Enter link:',"http://");
		  txtlablel = prompt('Enter text lable:', "Link Name");
		  text = '[url=' + link + ']' + txtlablel + '[/url]';
		  break;
		default : // emoticon
		  text = ' ' + text + ' ';
		  break;
		}
		}
		else { text = bbcheck; }
		return text;
	}

	bbclass.prototype.bbmatchoneparm = function(text) {
		var tmp = null
		if (this.bbExtStr.match(text)) {
		switch (text){
		case 'size' :
		  iparam=prompt('Enter '+text+' here:',"9");
		tmp = '['+text+'='+ iparam + ']' + '[/'+text+']';
		  break;
		case 'color' :
		  iparam=prompt('Enter '+text+' here:',"red");
		tmp = '['+text+'='+ iparam + ']' + '[/'+text+']';
		  break;
		case 'url' :
		  iparam=prompt('Enter URL here:',"http://");
		tmp = '['+text+']'+ iparam + '[/'+text+']';
		  break;
//		case 'img' :
//		  iparam=prompt('Enter image link:',"http://");
//		tmp = '['+text+']'+ iparam + '[/'+text+']';
//		  break;
		}
		}
		return tmp;
	}

	bbclass.prototype.bbmatchbase = function(text) {
		var tmp = null;
		if (this.bbBaseStr.match(text)) tmp = '[' + text + ']'+'[/' + text + ']';
		return tmp;
		}

		bbclass.prototype.insert = function(itxtarea,text) {
		//var txtarea = document.post.body;
		txtarea=eval("document."+itxtarea);
		if (txtarea.createTextRange && txtarea.caretPos) {
		var caretPos = txtarea.caretPos;
		caretPos.text = caretPos.text.charAt(caretPos.text.length - 1) == ' ' ? caretPos.text + text + ' ' : caretPos.text + text;
		txtarea.focus();
		} else {
		txtarea.value += text;
		txtarea.focus();
		}
	}

	bbclass.prototype.help = function(myhelpbox,help) {
		b_help      = "Bold text: [b]text[/b]";
		i_help      = "Italic text: [i]text[/i]";
		u_help      = "Underline text: [u]text[/u]";
		quote_help  = "Quote text: [quote]text[/quote]";
		center_help = "Center text: [center]text[/center]";
		code_help   = "Code display: [code]code[/code]";
//		img_help    = "Insert image: [img]http://image_url[/img]";
		url_help    = "Insert URL: [url]http://url[/url] or [url=http://url]URL text[/url]";
		color_help  = "Font color: [color=red]text[/color]  Tip: you can also use color=#FF0000";
		size_help   = "Font size: [size=x-small]small text[/size]";
		emoticon_help   = "Emoticon: :D :) :( :o :shock: :? 8 :lol: :x :P :red: :cry: :evil: :twisted: :roll: :wink: :!: :q :idea: :arrow: :mrgreen:";

		//document.post.helpbox.value = eval(help + "_help");
		mosprayerhelptext=eval("document."+myhelpbox);
		mosprayerhelptext.value = eval(help + "_help");
		//document.forms[myform].elements[myelement].value = eval(help + "_help");
	}
// end of bbclass class
