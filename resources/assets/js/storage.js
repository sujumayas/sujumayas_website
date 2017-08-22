/*jshint unused:false */

(function (exports) {

	'use strict';

	var STORAGE_KEY = 'todos-vuejs';
	
	exports.todoStorage = {
		fetch: function () {
			console.log("Fetching");
			return JSON.parse(localStorage.getItem(STORAGE_KEY) || '[]');
		},
		save: function (todos) {
			console.log("Saving");
			localStorage.setItem(STORAGE_KEY, JSON.stringify(todos));
		}
	};

})(window);