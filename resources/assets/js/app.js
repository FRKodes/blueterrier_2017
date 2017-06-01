
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#app'
});


var words = ['BRANDING', 'WEB DEV', 'DESIGN', 'DIGITAL MKT'];
var current_number = 0;
setInterval(function(){
	addPhrase(current_number);
	addClasses();
	setTimeout(removeClasses, 500);
	
	current_number = current_number + 1;
	if (current_number === 3) { current_number = 0};

}, 4000 );

function addClasses () {
	console.log('Add Classes');
	$('.topic').addClass('magictime perspectiveDown opacity_0');
}
function removeClasses () {
	console.log('Add Classes');
	$('.topic').removeClass('magictime perspectiveDown opacity_0');
}
function addPhrase (current_number) {
	console.log('current_number--> ' + current_number);
	$('.topic').html(words[current_number]);
}

