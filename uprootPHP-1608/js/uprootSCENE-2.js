//  Source:  github.com
// Version:  2.08
// Project:  uproot
//  Author:  drburnett
//    Date:  2017-02-03
function scene(){
	if(arguments.length > 1){
		if(document.getElementById('scene')){document.getElementById('scene').remove();}
		var html = '';
			html+= '<div id="scene">';
			html+= 		'<style>';
			html+= 			'#scene{z-index: 99;';
			html+=				'position: fixed; top: 0px; left: 0px;';
			html+=				'width: 100%;';
			html+=				'height: 100%;';
			html+=				'background: rgba(0,0,0,0.6);';
			html+=			'}';
			html+= 			'#scene #html{';
			html+=				'position: fixed; top: 50%; left: 50%;';
			html+=				'transform: translate(-50%, -50%);';
			html+=				'height: 600px; width: 400px;';
			html+= 			'}';
			html+= 			'#scene #html #head{overflow: hidden;';
			html+= 				'height: 46px; width: 100%; text-align: left;';
			html+= 			'}';
			html+= 			'#scene #html #head div{-moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box; float: right;';
			html+=				'width: 100%; height: 46px;';
			html+=				'padding: 10px 8px 0px 8px;';
			html+=				'background: transparent; color: #fff; font-size: 24px;';
			html+= 			'}';
			html+= 			'#scene #html #head div{float: right; text-align: left;}';
			html+= 			'#scene #html #head div i{float: right; padding-left: 8px;}';
			html+=			'#scene #html #head div i:hover{cursor: pointer; -webkit-filter: invert(20%); filter: invert(20%);}';
			html+= 			'#scene #html #head div .fa-expand {font-size: 20px; padding-top: 2px;}';
			html+= 			'#scene #html #body{overflow-y: auto;-moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box;';
			html+=				'height: -moz-calc(100% - 46px); height: -webkit-calc(100% - 46px); height: calc(100% - 46px);';
			html+=				'width: 100%;';
			html+=				'background-color: #ffffff!important;';
			html+=				'margin: auto auto;';
			html+= 			'}';
	
			html+=			'.size #html{width: 100%!important; height: 100%!important;}';
			html+=			'.size #html #head div{';
			html+=				'width: 100%;';
			html+=				'background: #333333!important;';
			html+=			'}';
	
			html+=			'@media (max-width:799px){';
			html+=				'#scene #html{';
			html+=					'position: fixed; top: 0px; left: 50%;';
			html+=					'transform: translate(-50%, 0%);';
			html+=					'width: 100%; height: 100%;';
			html+=				'}';
			html+=				'#scene #html #head div{';
			html+=					'width: 100%;';
			html+=					'background: #333;';
			html+=				'}';
			html+= 				'#scene #html #body {border: none;}';
			html+=				'#scene #html #head div .fa-expand{display: none;}';
			html+= 			'}';
			html+=			'@media (min-width:1200px){';
			html+=				'#scene #html{height: 600px; width: 800px;}';
			html+=				'#scene #html #head div{width: 100%; background-color: transparent;}';
			html+= 			'}';
			html+= 		'</style>';
			html+= 		'<div id="html" style="">';
			html+= 			'<div id="head" style=""><div>'+arguments[0]+'<i class="fa fa-times" aria-hidden="true" onclick="scene()"></i><i class="fa fa-expand" aria-hidden="true" onclick="scene(\'size\');"></i></div></div>';
			html+= 			'<div id="body" style="">'+arguments[1]+'</div>';
			html+= 		'</div>';
			html+= '</div>';
		document.body.innerHTML += html;
	}else if(arguments[0] == 'size'){
		if(document.getElementById('scene')){document.getElementById("scene").classList.toggle('size');}
	}else if(arguments[0] == 'info'){
		console.log(' Source: github.com');
		console.log('Version: 2.08');
		console.log('Project: uproot');
		console.log(' Author: drburnett');
		console.log('   Date: 2017-02-03');
	}else{if(document.getElementById('scene')){document.getElementById('scene').remove();}}
}

