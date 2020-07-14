/*
###
SIDEBAR MENU
###
*/

// Set Constant Variables
const baseDomain = 'http://erelcolak.com/servis365';
const sidebarLeftMenuContainer = 'sidebarLeftMenuContainer';
const refreshMenuId = '9901';
const refreshLocalStorageId = '9902';

/*
KEYS

id: has a simple algorithm which is contains parent id at the start of the element
uniqueId: is id of .collapse-menu class's div. that not effects to collapsing just effects finding element. it starts with sidebarMenu_ (with undersquare)
title: Title and label of element
level: level of element in menu it can not be higher than 3
href: it can be normal link or collapse link without hash symbol - for instance : /index.php is a normal link and #buttons is collapse link href and uniqueId can not be equal to each other! it starts with sidebarMenu (without undersquare)
icon: icon of element which is contains fa fa-* classes
isHidden: if it is true ; it hides element
isDisabled: if it is true; it disables element
hasSubmenu: if it is true; it means it's not a link and it can be collapse. if it is false; it means thats a normal link
parent: parentId of element without any symbol. if it is level 1 element parent must be equal to sidebarLeftMenuContainer variable. else it must be parent's "href" key
submenu: it's an array which is contains sub menu elements
*/
var menuItems = [
	{
		id: '01',
		title: 'Profil',
		icon: 'fa fa-user-circle-o',
		href: '/userProfile.php',
		parent: sidebarLeftMenuContainer,
		level: 1,
		isHidden: false,
		isDisabled: false,
		hasSubmenu: false,
		submenu: []
	},
	{
		id: '02',
		title: 'Eğitimler',
		icon: 'fa fa-graduation-cap',
		href: '/coursesList.php',
		parent: sidebarLeftMenuContainer,
		level: 1,
		isHidden: false,
		isDisabled: false,
		hasSubmenu: false,
		submenu: []
	},
	{
		id: '03',
		title: 'Bildirimler',
		icon: 'fa fa-info-circle',
		href: '/userNotifications.php',
		parent: sidebarLeftMenuContainer,
		level: 1,
		isHidden: false,
		isDisabled: false,
		hasSubmenu: false,
		submenu: []
	},
	{
		id: '04',
		title: 'Çıkış',
		icon: 'fa fa-sign-out',
		href: '/login.php',
		parent: sidebarLeftMenuContainer,
		level: 1,
		isHidden: false,
		isDisabled: false,
		hasSubmenu: false,
		submenu: []
	},
	{
		id: '05',
		title: 'Yönetim',
		icon: 'fa fa-shield',
		href: 'admin',
		parent: sidebarLeftMenuContainer,
		level: 1,
		isHidden: false,
		isDisabled: false,
		hasSubmenu: true,
		submenu: [
			{
				id: '0501',
				title: 'Kullanıcılar',
				icon: 'fa fa-users',
				href: '/adminUsers.php',
				parent: 'admin',
				level: 2,
				isHidden: false,
				isDisabled: false,
				hasSubmenu: false,
				submenu: []
			},
			{
				id: '0502',
				title: 'Eğitimler',
				icon: 'fa fa-graduation-cap',
				href: '/adminCourses.php',
				parent: 'admin',
				level: 2,
				isHidden: false,
				isDisabled: false,
				hasSubmenu: false,
				submenu: []
			},
			{
				id: '0503',
				title: 'Öğrenci İşleri',
				icon: 'fa fa-file-o',
				href: '/adminStudentAffairs.php',
				parent: 'admin',
				level: 2,
				isHidden: false,
				isDisabled: false,
				hasSubmenu: false,
				submenu: []
			},
			{
				id: '0504',
				title: 'İstatistikler',
				icon: 'fa fa-pie-chart',
				href: 'adminStats',
				parent: 'admin',
				level: 2,
				isHidden: false,
				isDisabled: false,
				hasSubmenu: true,
				submenu: [
					{
						id: '050401',
						title: 'Genel İstatistikler',
						icon: 'fa fa-pie-chart',
						href: '/adminStatsGeneral.php',
						parent: 'adminStats',
						level: 3,
						isHidden: false,
						isDisabled: false,
						hasSubmenu: false,
						submenu: []
					},
					{
						id: '050402',
						title: 'Eğitim Grupları Analizi',
						icon: 'fa fa-users',
						href: '/adminStatsCourseGroupAnalysis.php',
						parent: 'adminStats',
						level: 3,
						isHidden: false,
						isDisabled: false,
						hasSubmenu: false,
						submenu: []
					},
					{
						id: '050403',
						title: 'Öğrenci Katılım Analizi',
						icon: 'fa fa-sign-in',
						href: '/adminStatsStudentAccessAnalysis.php',
						parent: 'adminStats',
						level: 3,
						isHidden: false,
						isDisabled: false,
						hasSubmenu: false,
						submenu: []
					},
					{
						id: '050404',
						title: 'Eğitmen Analizi',
						icon: 'fa fa-tencent-weibo',
						href: '/adminStatsTeacherAnalysis.php',
						parent: 'adminStats',
						level: 3,
						isHidden: false,
						isDisabled: false,
						hasSubmenu: false,
						submenu: []
					},
					{
						id: '050405',
						title: 'Eğitim Başarı Analizi',
						icon: 'fa fa-hand-peace-o',
						href: '/adminStatsCourseSuccessAnalysis.php',
						parent: 'adminStats',
						level: 3,
						isHidden: false,
						isDisabled: false,
						hasSubmenu: false,
						submenu: []
					},
				]
			},
			{
				id: '0505',
				title: 'Ayarlar',
				icon: 'fa fa-cogs',
				href: '/adminSettings.php',
				parent: 'admin',
				level: 2,
				isHidden: false,
				isDisabled: false,
				hasSubmenu: false,
				submenu: []
			},
		]
	},
];
// Has sub menu attribute of menu element
function HasSubMenu(data){
	var returnedValue = '';
	if( data.hasSubmenu == true ){
		returnedValue = 'data-toggle="collapse"';
	}
	return returnedValue;
}
// Hidden attribute of menu element
function IsHidden(data){
	var returnedValue = '';
	if( data.isHiddden == true ){
		returnedValue = 'hidden';
	}
	return returnedValue;
}
// disabled attribute of menu element
function IsDisabled(data){
	var returnedValue = '';
	if( data.isDisabled == true ){
		returnedValue = 'disabled';
	}
	return returnedValue;
}
// Href attribute of menu element
function Href(data){
	var returnedValue = baseDomain + data.href;
	if( data.hasSubmenu == true ){
		returnedValue = '#'+data.href;
	}
	return returnedValue;
}
// HrefId of menu element
function HrefId(data){
	var returnedValue = data.href;
	if( data.submenu == false ){
		returnedValue = '';
	}
	return returnedValue;
}
// Template of menu element
function TemplateOfMenuElement(data){
	var template =
	'<div id="sidebarLeftMenu_' + data.id + '" class="panel collapse-menu menu-level-' + data.level + ' ' + IsHidden(data) + '">'+
		'<div id="" class="collapse-menu-header">'+
			'<a href="' + Href(data) + '" title="' + data.title + '" target="_self" id="" class="accordion-toggle collapse-menu-header-title ' + IsDisabled(data) + '" type="button" ' + HasSubMenu(data) + ' data-parent="#' + data.parent + '">'+
				'<i class="' + data.icon + ' collapse-menu-header-icon"></i>'+
				'<span class="collapse-menu-header-text">' + data.title + '</span>'+
			'</a>'+
		'</div>'+
		'<div id="' + HrefId(data) + '" class="collapse collapse-menu-body"></div>'+
	'</div>';
	return template;
}
// Rendering Menu Template
function RenderMenu(data){
	for( var i = 0; i < data.length; i++ ){
		var dataI = data[i];
		// Adding First Level Elements
		$('#' + sidebarLeftMenuContainer).append( TemplateOfMenuElement(dataI) );

		// for its submenus
		if ( dataI.hasSubmenu == true ){
			for( var j = 0; j < dataI.submenu.length; j++ ){
				var dataJ = dataI.submenu[j];

				// Adding Second Level Elements
				$('#sidebarLeftMenu_' + dataI.id).find('#' + dataI.href).append( TemplateOfMenuElement(dataJ) );

				// for its submenus
				if( dataJ.hasSubmenu == true ){
					for( var k = 0; k < dataJ.submenu.length; k++ ){
						var dataK = dataJ.submenu[k];

						// Adding Third Level Elements
						$('#sidebarLeftMenu_' + dataJ.id).find('#' + dataJ.href).append( TemplateOfMenuElement(dataK) );
					}
				}
			}
		}
	}
	localStorage.hippoSoftMenuTemplate = $('#' + sidebarLeftMenuContainer).html();
}

$(document).ready(function(){
	/*
	Rendering Menu
	*/
	// If local storage menu template is exist
	if( localStorage.hippoSoftMenuTemplate != undefined ){
		$('#' + sidebarLeftMenuContainer).html( localStorage.hippoSoftMenuTemplate );
	}
	else{
		RenderMenu(menuItems)
	}

	/*
	Sidebar Menu Click Events
	*/
	// Toggle Sidebar Menu
	$('#btnToggleSidebar').on('click', function(e){
		e.preventDefault();
		$('#sidebarLeft').toggle();
	});
	// Hide sidebar menu when click outside
	$('#sidebarLeft > .row').on('click', function(e){
		if( $('#sidebarLeft > .row').has(e.target).length == 0 && !$('#sidebarLeftMenuContainer').is(e.target) ){
			$('#sidebarLeft').toggle();
		}
	})
});
