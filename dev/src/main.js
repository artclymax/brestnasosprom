//import 'jarallax/dist/jarallax.min.css';
//import "@fancyapps/ui/dist/fancybox/fancybox.css";
//import "aos/dist/aos.css";
import './scss/style.scss';
//!
//import { Swiper } from "swiper/bundle";

//import { jarallax } from "jarallax";
//import { Fancybox } from "@fancyapps/ui/dist/fancybox/";
//import AOS from "AOS";

import { AutoCalc } from "./js/AutoCalc.js";
//import { Menu } from './js/Menu.js';
//import { RunningLine } from './js/RunningLine.js';
//import { BackdropList } from './js/BackdropList.js';
import { Modal } from './js/Modal.js';
import { cookies } from "./js/Cookies.js";
import { imask } from "./js/imask.js";
//import { fileBtn } from "./js/FileBtn.js";
//import { CustomFieldSelect } from "./js/CustomFieldSelect.js";
//import { Spoiler } from './js/Spoiler.js';
//import { ScrollToTop } from './js/ScrollToTop.js';
import { MXSwiper } from './js/MXSwiper.js';
//import { CustomSelect } from './js/CustomSelect.js';
//import { Tabs } from './js/Tabs.js';

// FOR CONTACTS FORM 7
//import "./js/redirect-to-thanks-page.js";
/*
window.addEventListener('load', () => {
	const loader = document.querySelector('.loader');

	setTimeout(() => {
		loader.classList.add('is-hidden');
	}, 1200);
});
*/

new AutoCalc();
//new CustomFieldSelect({
//	input: '.form-wrapper .cf-select',
//	lastEdit: false
//});
//new Menu({
//	btn: '.burger-btn-icon',
//	menu: '.header-menu',
//	activeClass: 'open-header-menu',
//	closeBtns: ['.menu-close-btn']
//})


//new BackdropList();

new Modal();

//jarallax(document.querySelectorAll('.jarallax'), {
//	speed: 0.2,
//});

cookies();
imask();

//Fancybox.bind("[data-fancybox]");

//new RunningLine();
//new ScrollToTop();

//new Spoiler();

//new Spoiler('.single-team-experience-content', { media: 'max-width: 768px' });

new MXSwiper();
//new CustomSelect({
//	selector: 'select',
//	forceSend: true,
//});
/*
window.addEventListener('scroll', function () {
	const header = document.querySelector('.header');

	if (window.scrollY > 50) {
		header.classList.add('scrolled');
	} else {
		header.classList.remove('scrolled');
		const valueUnits = header.offsetHeight;
		document.querySelector(':root').style.setProperty(`--header-height`, valueUnits + 'px');
	}
});
*/

//fileBtn('');

//new Tabs();
//document.querySelectorAll('video.wp-video-shortcode').forEach(video => {
//	if (!video.src) {
//		const link = video.querySelector('a');
//		if (link) video.src = link.href;
//	}
//});

document?.querySelectorAll('.form-checkbox')?.forEach(el => {
	el.checked = true;
})

//AOS.init({
//	disable: 'mobile',
//	duration: 600,
//});

const header = document.querySelector('.header');

if (header) {

	let lastScroll = 0;
	const scrollOffset = 50;

	window.addEventListener('scroll', () => {
		const currentScroll = window.pageYOffset;

		// если мы в самом верху — показываем
		if (currentScroll <= 0) {
			header.classList.remove('header--hidden');
			return;
		}

		// скролл вниз
		if (currentScroll > lastScroll && currentScroll > scrollOffset) {
			header.classList.add('header--hidden');
		}
		// скролл вверх
		else if (currentScroll < lastScroll) {
			header.classList.remove('header--hidden');
		}

		lastScroll = currentScroll;
	});
}
//const glow = document.querySelector(".glow");

//document.addEventListener("mousemove", (e) => {
//	glow.style.left = e.clientX + "px";
//	glow.style.top = e.clientY + "px";
//});
//const parallax = document.querySelector('.main-bg-mouse-parallax');
//const layer = parallax.querySelector('.main-bg-wrapper');

//const strength = 30; // сила параллакса (меньше = мягче)

//window.addEventListener('mousemove', (e) => {
//	const { innerWidth, innerHeight } = window;

//	const x = (e.clientX / innerWidth - 0.5) * strength;
//	const y = (e.clientY / innerHeight - 0.5) * strength;

//	layer.style.transform = `translate3d(${x}px, ${y}px, 0)`;
//});

//! canvas
const canvas = document.getElementById("stars");
const ctx = canvas.getContext("2d");

let w, h;
let stars = [];

/* --------------------------
	НАСТРОЙКИ ЭФФЕКТА
-------------------------- */
const STAR_COUNT = 10000; // Увеличено до 10000
const BASE_SPEED = 0.00005;
const STAR_SIZE = 1;
const SKY_COLOR = "#0D0419";

/* ВКЛ / ВЫКЛ PARALLAX */
const PARALLAX_ENABLED = false; // Параллакс отключен

const STAR_COLORS = [
	"#ffffff",
	"#ffe9c4",
	"#d4e8ff"
];

/* -------------------------- */

function resize() {
	w = canvas.width = window.innerWidth;
	h = canvas.height = window.innerHeight;
}

window.addEventListener("resize", resize);
resize();

/* --------------------------
	КЛАСС ЗВЕЗДЫ
-------------------------- */
class Star {
	constructor() {
		this.radius = Math.random() * Math.max(w, h);
		this.angle = Math.random() * Math.PI * 2;
		this.speed = BASE_SPEED + Math.random() * BASE_SPEED;
		this.size = Math.random() * STAR_SIZE + 0.3;
		this.alpha = Math.random();
		this.color = STAR_COLORS[Math.floor(Math.random() * STAR_COLORS.length)];
		this.depth = Math.random();
	}

	update() {
		this.angle += this.speed;
		this.alpha += (Math.random() - 0.5) * 0.05;
		this.alpha = Math.max(0.2, Math.min(1, this.alpha));
	}

	draw() {
		const cx = w / 2;
		const cy = h * 1.2;

		let x = cx + Math.cos(this.angle) * this.radius;
		let y = cy + Math.sin(this.angle) * this.radius;

		ctx.beginPath();
		ctx.arc(x, y, this.size, 0, Math.PI * 2);
		ctx.fillStyle = this.hexToRGBA(this.color, this.alpha);
		ctx.fill();
	}

	hexToRGBA(hex, alpha) {
		const r = parseInt(hex.substr(1, 2), 16);
		const g = parseInt(hex.substr(3, 2), 16);
		const b = parseInt(hex.substr(5, 2), 16);
		return `rgba(${r},${g},${b},${alpha})`;
	}
}

/* --------------------------
	СОЗДАНИЕ ЗВЕЗД
-------------------------- */
function createStars() {
	stars = [];
	for (let i = 0; i < STAR_COUNT; i++) {
		stars.push(new Star());
	}
}

createStars();

/* --------------------------
	АНИМАЦИЯ
-------------------------- */
function animate() {
	ctx.fillStyle = SKY_COLOR;
	ctx.fillRect(0, 0, w, h);

	for (let i = 0; i < stars.length; i++) {
		stars[i].update();
		stars[i].draw();
	}

	requestAnimationFrame(animate);
}

animate();