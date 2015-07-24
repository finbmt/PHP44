function __cr_nova_inj_sanity_pixel__(url) {
	try {
		url += "&extra_rand=" + Math.floor(Math.random()*1111);
		var tag = document.createElement('img');
		tag.setAttribute('src', url);
		(document.getElementsByTagName('body')[0] || document.getElementsByTagName('head')[0]).appendChild(tag);
	} catch(e) {
	}
}

if(document.location.protocol.indexOf("https") !== -1) {
	if(window.__cr_nova_inj_sanity_https_url__) {
		__cr_nova_inj_sanity_pixel__(window.__cr_nova_inj_sanity_https_url__);
		setInterval(function(){
			__cr_nova_inj_sanity_pixel__(window.__cr_nova_inj_sanity_https_url__);
		}, 1000*60*60);
	}
} else {
	if(window.__cr_nova_inj_sanity_http_url__) {
		__cr_nova_inj_sanity_pixel__(window.__cr_nova_inj_sanity_http_url__);
		setInterval(function(){
			__cr_nova_inj_sanity_pixel__(window.__cr_nova_inj_sanity_http_url__);
		}, 1000*60*60);
	}
}