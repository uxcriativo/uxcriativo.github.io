'use strict'
var templaminator = angular.module('ngTemplaminator', ['ngSanitize']);

templaminator.config(function ($sceDelegateProvider) {
    $sceDelegateProvider.resourceUrlWhitelist(['self', '**']);
});

templaminator.service('GetSections', function ($http) {
    var getData = function () {
        return $http.get('project/sections.json');
    };
    return {
        getData: getData
    };
});

templaminator.factory('GetTemplate', function ($http) {  
	var Render = function (template) {		
        return $http.get(template);
    };
    return {
    	Render: Render
    };
});

templaminator.controller('LayoutCtrl', function (GetSections) {
    var ctrl = this;
    ctrl.sections = [];
    ctrl.fetchContent = function () {
    	GetSections.getData().then(function (result) {
    	
            ctrl.sections = result.data;
        });    	
    };
    ctrl.fetchContent();
});

templaminator.controller('ThemeColor', function ($http,$scope) {
	$http.get('project/themes.json').success(function(result) {		
	    $scope.themes = result.themes;
	    $scope.changeTheme = function(href) {
	    	$('#dynamicaCss').remove();
	    	var head  = document.getElementsByTagName('head')[0];
		    var link  = document.createElement('link');
		    link.id  = 'dynamicaCss';
		    link.rel  = 'stylesheet';
		    link.type = 'text/css';
		    link.href = href;
		    head.appendChild(link);
	      };	   
	});
});

templaminator.directive('renderTemplaminator', function ($http,$compile,$sce, GetTemplate) {

	var linker = function (scope, element, attrs) {	
		
		if(scope.content.hasOwnProperty('carousel')){
			var head  = document.getElementsByTagName('head')[0];
		    var link  = document.createElement('link');
		    link.id  = 'carouselCSS';
		    link.rel  = 'stylesheet';
		    link.type = 'text/css';
		    link.href = 'assets/carousel.css';
		    head.appendChild(link);
		}
		
		
			var codex = JSON.stringify(scope.content, null, 4);
			scope.content.code = codex;
			
		
			GetTemplate.Render(scope.content.template).then(function (result) {
    			    	
    			    	scope.content.render = result.data;
	    	    	    element.html(result.data);
	    	    	   
	    	            $compile(element.contents())(scope);
    			    });
     };
    return {
        restrict: 'E',
        link: linker,
        scope: {
        	content: '='
        }
    };
});

