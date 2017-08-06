document.addEventListener('DOMContentLoaded', function()
{
	var backColor = '#333';
	var textColor = '#fff';
	var backHover = '#48AF4B';
	var textHover = '#fff';
	var x = 'right'; // left, right
	var y = 'bottom';// top, bottom

	var css = '<style>';
		css+= 		'#toTop-btn {';
		css+=			'z_index: 999; display: none; position: fixed;';
	
		if(x == 'left'){css+= 'left: 0px;';}else{css+= 'right: 0px;';}
		if(y == 'top'){css+= 'top: -1px;';}else{css+= 'bottom: -1px;';}

		css+=			'border: none; outline: none; cursor: pointer; padding: 15px;';
		css+=			'background-color: '+backColor+'; color: '+textColor+';';
		css+=		'}';
		css+= 		'#toTop-btn:hover {background-color: '+backHover+'; color: '+textHover+';}';
		css+= '</style>';
	var btn = '<button onclick="toTop.func()" id="toTop-btn" title="Move To Top" style="display: none">Top</button>';

	document.body.innerHTML += css+btn;

}, false);
window.onscroll = function()
{
	var btn = document.getElementById('toTop-btn');
	if(btn)
	{
		if(document.body.scrollTop > 20 || document.documentElement.scrollTop > 20)
		{
			btn.style.display = 'block';
		}
		else if(btn)
		{
			btn.style.display = 'none';
		}
	}
};
var toTop = {
	func: function()
	{
		document.body.scrollTop = 0;
		document.documentElement.scrollTop = 0;
	},
	info: function()
	{
		console.log("Publisher: Dirobu.com\nAuthor: DRBurnett\nDate: 17.07\nLocation: USA");
	}
}
