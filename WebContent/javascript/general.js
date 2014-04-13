function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}

function preloadAlternateImages() {
	MM_preloadImages(
		'../images/nav_homepage_on.gif',
		'../images/nav_events_on.gif',
		'../images/nav_membership_on.gif',
		'../images/nav_about_on.gif',
		'../images/nav_maps_on.gif',
		'../images/nav_fundraising_on.gif',
		'../images/nav_rentalprogram_on.gif',
		'../images/nav_contact_on.gif',
		'../images/nav_buddha_on.gif',
		'../images/nav_padmasambhava_on.gif',
		'../images/nav_dudjomrinpoche_on.gif',
		'../images/nav_gyatrulrinpoche_on.gif',
		'../images/nav_practice_on.gif',
		'../images/nav_photogallery_on.gif',
		'../images/nav_teachers_on.gif',
		'../images/nav_staff_on.gif',
		'../images/nav_history_on.gif',
		'../images/lineage_buddha_on.gif',
		'../images/lineage_padmasambhava_on.gif',
		'../images/lineage_hhdudjomrinpoche_on.gif',
		'../images/lineage_gyatrulrinpoche_on.gif')
}

function openEmailForm() {
	var emailWindow = window.open("https://app.expressemailmarketing.com/Survey.aspx?SFID=31420","emailWindow","resizable,outerHeight=975,outerWidth=700,scrollbars,status,toolbar");
	emailWindow.focus();
}