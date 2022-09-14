try {
	var audience_id = audience.id || 0;
	var a = audience.externalData || {};

	a.url		= document.location;
	a.referrer	= document.referrer;
	a.ua		= navigator.userAgent;
	a.version	= '2007-03-22';

	var audienceFrameUrl = [];
	for (key in a)
		audienceFrameUrl.push(key + '=' + encodeURIComponent(a[key]));
	audienceFrameUrl = audienceFrameUrl.join('&');

	audienceFrameUrl = 'http://feed.audience.netavenir.com/save.php?service='+audience_id+'&' + audienceFrameUrl;
	document.write('<iframe frameborder="0" hspace="0" vspace="0" height="0" width="0" style="visibility:hidden" src="' + audienceFrameUrl + '"></iframe>');
} catch(e) {
	document.write('<img height="0" width="0" style="visibility:hidden" src="http://feed.audience.netavenir.com/save.php?js_catch=1" />');
}
