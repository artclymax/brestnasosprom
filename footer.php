</main>
<?php get_template_part('components/footer') ?>
</div>
<?php
$photo = get_field('general_photo', 'options') ?? '';
?>
<div class="main-bg">
	<canvas id="stars"></canvas>
</div>
<div class="main-photo" style="background-image: url('<?php echo esc_attr($photo['url']); ?>');"></div>
<?php get_template_part('components/modal-policy') ?>
<?php get_template_part('components/modal-cookies') ?>
<?php get_template_part('components/cookie-banner') ?>

<?php wp_footer(); ?>
</div>
<!--<canvas id="stars"></canvas>

<style>
	body {
		margin: 0;
		background: #02030a;
		overflow: hidden;
	}

	canvas {
		position: fixed;
		inset: 0;
		width: 100%;
		height: 100%;
	}
</style>

<script>
	const canvas = document.getElementById("stars");
	const ctx = canvas.getContext("2d");

	let w, h;
	let stars = [];

	function resize() {
		w = canvas.width = window.innerWidth;
		h = canvas.height = window.innerHeight;
	}

	window.addEventListener("resize", resize);
	resize();

	class Star {
		constructor() {
			this.radius = Math.random() * Math.max(w, h);
			this.angle = Math.random() * Math.PI * 2;
			this.speed = 0.0003 + Math.random() * 0.0007;
			this.size = Math.random() * 1.5 + 0.3;
			this.alpha = Math.random();
		}

		update() {
			this.angle += this.speed;

			this.alpha += (Math.random() - 0.5) * 0.05;
			this.alpha = Math.max(0.2, Math.min(1, this.alpha));
		}

		draw() {
			const cx = w / 2;
			const cy = h * 1.2; // центр дуги ниже экрана

			const x = cx + Math.cos(this.angle) * this.radius;
			const y = cy + Math.sin(this.angle) * this.radius;

			ctx.beginPath();
			ctx.arc(x, y, this.size, 0, Math.PI * 2);
			ctx.fillStyle = `rgba(255,255,255,${this.alpha})`;
			ctx.fill();
		}
	}

	function createStars(count) {
		stars = [];
		for (let i = 0; i < count; i++) {
			stars.push(new Star());
		}
	}

	createStars(400);

	function animate() {
		ctx.fillStyle = "rgba(2,3,10,0.35)";
		ctx.fillRect(0, 0, w, h);

		for (let star of stars) {
			star.update();
			star.draw();
		}

		requestAnimationFrame(animate);
	}

	animate();
</script>-->
<!--<canvas id="stars"></canvas>-->
<style>
	body {
		/*margin: 0;*/
		/*background: #02030a;*/
		background: #02030a, rgba(24, 5, 40, 0.1), linear-gradient(31deg, rgba(0, 0, 0, 0.3) 0%, rgba(151, 136, 165, 0.3) 100%), rgba(24, 5, 40, 0.4);
		/*overflow: hidden;*/
	}

	canvas {
		position: fixed;
		top: 0;
		right: 0;
		transform: scale(1.5);
		width: 100%;
		height: 100%;
	}
</style>

<!--<script>
	const canvas = document.getElementById("stars");
	const ctx = canvas.getContext("2d");

	let w, h;
	let stars = [];

	let mouseX = 0;
	let mouseY = 0;

	/* --------------------------
		НАСТРОЙКИ ЭФФЕКТА
	-------------------------- */

	const STAR_COUNT = 3000;
	const BASE_SPEED = 0.00003;
	const STAR_SIZE = 0.8;
	const PARALLAX_STRENGTH = 40;
	const SKY_COLOR = "#0D0419";

	/* ВКЛ / ВЫКЛ PARALLAX */
	const PARALLAX_ENABLED = false;

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
		PARALLAX МЫШИ
	-------------------------- */

	if (PARALLAX_ENABLED) {
		window.addEventListener("mousemove", e => {
			mouseX = (e.clientX - w / 2) / w;
			mouseY = (e.clientY - h / 2) / h;
		});
	}

	/* --------------------------
		КЛАСС ЗВЕЗДЫ
	-------------------------- */
	//!
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


			if (PARALLAX_ENABLED) {
				x += mouseX * PARALLAX_STRENGTH * this.depth;
				y += mouseY * PARALLAX_STRENGTH * this.depth;
			}

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

		for (let star of stars) {
			star.update();
			star.draw();
		}

		requestAnimationFrame(animate);
	}

	animate();
</script>-->

<!--<script>
	const canvas = document.getElementById("stars");
	const ctx = canvas.getContext("2d");

	let w, h;
	let stars = [];

	/* --------------------------
		НАСТРОЙКИ ЭФФЕКТА
	-------------------------- */
	const STAR_COUNT = 5000; // Увеличено до 5000
	const BASE_SPEED = 0.00003;
	const STAR_SIZE = 0.8;
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
</script>-->
<script>

</script>
</body>

</html>