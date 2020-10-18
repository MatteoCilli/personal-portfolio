<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<div class="container">
		<div class="screw"></div>
		<div class="screw screw-1"></div>
		<div class="screw screw-2"></div>
		<div class="screw screw-3"></div>
		<div class="logo">
			<div class="logo-first">RADAR</div>
			<div class="logo-second">SYSTEM</div>
		</div>
		<div class="radar">
			<div class="pointer"></div>
			<div class="shadow"></div>
		</div>
		<div class="status">SCANNING</div>
	</div>
	<div class="container2">
		<div class="screw2"></div>
		<div class="screw2 screw-1-2"></div>
		<div class="screw2 screw-2-2"></div>
		<div class="screw2 screw-3-3"></div>
		<div class="screen"></div>
		<div class="status2">RECEIVING MESSAGE</div>
	</div>
</body>
<style>
	@import url('https://fonts.googleapis.com/css?family=VT323');

	* {
		font-family: 'VT323', sans-serif;
	}

	.success {
		position: absolute;
		max-width: 18vw;
		color: #2196f3;
		text-shadow: 0 0 10px #2196f3, 0 0 40px #2196f3, 0 0 80px #2196f3;
		right: 11vw;
		bottom: 47vh;
	}

	.failure {
		position: absolute;
		max-width: 18vw;
		color: #2196f3;
		text-shadow: 0 0 10px #2196f3, 0 0 40px #2196f3, 0 0 80px #2196f3;
		right: 11vw;
		bottom: 60vh;
	}

	html {
		padding: 0;
		margin: 0;
		--green: rgb(40, 133, 40);
		--size: 500px;
	}

	body {
		background: linear-gradient(183deg, rgba(37, 87, 132, 0.5) 1%, rgba(141, 35, 46, 0) 60%), linear-gradient(250deg, rgba(37, 87, 132, 0) 21%, rgba(141, 35, 46, 0.2) 20%, rgba(11, 35, 47, 0.2) 50%), linear-gradient(250deg, rgba(141, 35, 46, 0) 23%, rgba(141, 35, 46, 0.2) 20%, rgba(11, 35, 47, 0.2) 50%), linear-gradient(250deg, rgba(37, 87, 132, 0) 25%, rgba(37, 87, 132, 0.2) 20%, rgba(11, 35, 47, 0.2) 50%), repeating-linear-gradient(179deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0.1) 3px, rgba(0, 0, 0, 0.1) 3px, rgba(0, 0, 0, 0.1) 5px);
		background-color: #0b232f;
		background-repeat: no-repeat;
		background-size: cover;
		display: flex;
		align-items: center;
		justify-content: center;
		height: 100vh;
		margin: 0;
	}

	.container {
		width: 40vw;
		height: 90vh;
		position: relative;
		user-select: none;
		right: 2vw;
	}

	.status {
		font-family: "Lucida Sans Unicode", "Lucida Grande", "Lucida Sans", Arial, sans-serif;
		font-size: 10px;
		font-weight: 400;
		letter-spacing: 2px;
		text-align: center;
		padding: 6px 9px 7px 32px;
		color: #777;
		position: absolute;
		bottom: 7%;
		left: -5%;
		box-shadow: 0 1px 2px 1px rgba(0, 0, 0, 0.6);
		border-radius: 8px 0 0 8px;
	}

	.container2 {
		width: 20vw;
		height: 90vh;
		position: relative;
		user-select: none;
		left: 10vw;
	}

	.status2 {
		font-family: "Lucida Sans Unicode", "Lucida Grande", "Lucida Sans", Arial, sans-serif;
		font-size: 0.6rem;
		font-weight: 400;
		letter-spacing: 2px;
		text-align: center;
		padding: 6px 9px 7px 32px;
		color: #777;
		position: absolute;
		bottom: 3vh;
		left: 4vh;
		box-shadow: 0 1px 2px 1px rgba(0, 0, 0, 0.6);
		border-radius: 8px 0 0 8px;
	}

	.status::before,
	.status::after {
		content: "";
		position: absolute;
		left: 10px;
		top: 50%;
		transform: translateY(-50%);
		width: 10px;
		height: 10px;
		border-radius: 50%;
		border: 1px solid #333;
		background: #181818;
	}

	.status::after {
		background: radial-gradient(var(--green) 60%, darkgreen 40%);
		animation: light 1.2s infinite alternate cubic-bezier(0.785, 0.135, 0.15, 0.86);
		border-color: transparent;
		box-shadow: 0 0 5px 1px var(--green);
	}

	.status2::before,
	.status2::after {
		content: "";
		position: absolute;
		left: 10px;
		top: 50%;
		transform: translateY(-50%);
		width: 10px;
		height: 10px;
		border-radius: 50%;
		border: 1px solid #333;
		background: #181818;
	}

	.status2::after {
		background: radial-gradient(var(--green) 60%, darkgreen 40%);
		animation: light 1.2s infinite alternate cubic-bezier(0.785, 0.135, 0.15, 0.86);
		border-color: transparent;
		box-shadow: 0 0 5px 1px var(--green);
	}

	@keyframes light {
		from {
			opacity: 0;
		}

		to {
			opacity: 1;
		}
	}

	.container::after {
		content: "";
		width: 120%;
		height: 100%;
		left: -10%;
		background: linear-gradient(45deg, #222, #333);
		position: absolute;
		z-index: -1;
		box-shadow: 1px 2px 2px 2px #111;
		border-radius: 4%;
	}

	.container2::after {
		content: "";
		width: 120%;
		height: 100%;
		left: -10%;
		background: linear-gradient(45deg, #222, #333);
		position: absolute;
		z-index: -1;
		box-shadow: 1px 2px 2px 2px #111;
		border-radius: 4%;
	}

	.radar {
		background: url(http://matt.zapto.org/Portfolio/radar.png) no-repeat 50% 50%;
		width: 404px;
		height: 404px;
		position: relative;
		background-size: 404px 404px;
		position: absolute;
		left: 50%;
		top: 50%;
		margin-left: -202px;
		margin-top: -202px;
		will-change: transform;
	}

	.screen {
		background-color: black;
		width: 19.8vw;
		height: 70vh;
		position: absolute;
		top: 7vh;
		border-radius: 4px;
	}

	.radar:before {
		content: ' ';
		display: block;
		position: absolute;
		width: 100%;
		height: 100%;
		border-radius: 50%;
		animation: blips 4s infinite;
		animation-timing-function: linear;
		animation-delay: 2.1s;
	}

	.radar .pointer {
		position: absolute;
		z-index: 1024;
		left: 10.5820106%;
		right: 10.5820106%;
		top: 10.5820106%;
		bottom: 50%;
		will-change: transform;
		transform-origin: 50% 100%;
		border-radius: 50% 50% 0 0 / 100% 100% 0 0;
		background-image: linear-gradient(135deg, rgba(5, 162, 185, 0.8) 0%, rgba(0, 0, 0, 0.02) 70%, rgba(0, 0, 0, 0) 100%);
		clip-path: polygon(100% 0, 100% 10%, 50% 100%, 0 100%, 0 0);
		animation: rotate360 4s infinite linear;
	}

	.radar .pointer:after {
		content: "";
		position: absolute;
		width: 50%;
		bottom: -1px;
		border-top: 2px solid rgba(0, 231, 244, 0.8);
		box-shadow: 0 0 3px rgba(0, 231, 244, 0.6);
		border-radius: 9px;
	}

	.shadow {
		position: absolute;
		left: 11%;
		top: 11%;
		right: 11%;
		bottom: 11%;
		margin: auto;
		border-radius: 9999px;
		box-shadow: 0 0 66px 6px #A51414;
		animation: shadow 1s infinite ease;
	}

	@keyframes rotate360 {
		0% {
			transform: rotate(0deg);
		}

		to {
			transform: rotate(360deg);
		}
	}

	@keyframes shadow {
		0% {
			opacity: 0;
		}

		50% {
			opacity: 1;
		}

		to {
			opacity: 0;
		}
	}

	.logo {
		position: absolute;
		top: 24px;
		right: -16px;
		font-family: Arial, Helvetica, sans-serif;
		text-shadow: -1px 0 1px #111;
		text-align: center;
	}

	.logo-first {
		font-size: 19px;
		letter-spacing: 2px;
		color: #666;
		border: 1px solid #383838;
		border-radius: 4px;
		padding: 3px 5px 1px;
	}

	.logo-second {
		letter-spacing: 3px;
		font-size: 14px;
		color: #555;
		margin-top: 2px;
	}

	.screw {
		width: 12px;
		height: 12px;
		background: #444;
		position: absolute;
		top: 15px;
		left: -35px;
		border-radius: 50%;
		box-shadow: 0 1px 0 1px #222;
	}

	.screw:after {
		content: "";
		width: 2px;
		height: 10px;
		position: absolute;
		top: 1px;
		left: 50%;
		transform: translateX(-50%) rotate(35deg);
		background: #333;
	}

	.screw2 {
		width: 1vw;
		height: 1vw;
		background: #444;
		position: absolute;
		top: 2vh;
		left: -1vw;
		border-radius: 50%;
		box-shadow: 0 1px 0 1px #222;
	}

	.screw2:after {
		content: "";
		width: 2px;
		height: 10px;
		position: absolute;
		top: 1px;
		left: 50%;
		transform: translateX(-50%) rotate(35deg);
		background: #333;
	}

	.screw:nth-of-type(even):after {
		transform: translateX(-50%) rotate(105deg);
	}

	.screw:nth-of-type(n + 4):after {
		transform: translateX(-50%) rotate(80deg);
	}

	.screw2:nth-of-type(even):after {
		transform: translateX(-50%) rotate(105deg);
	}

	.screw2:nth-of-type(n + 4):after {
		transform: translateX(-50%) rotate(80deg);
	}

	.screw-1 {
		left: initial;
		right: -35px;
	}

	.screw-1-2 {
		left: initial;
		right: -1vw;
		top: 2vh;
	}

	.screw-2 {
		top: initial;
		left: -35px;
		bottom: 15px;
	}

	.screw-3 {
		left: initial;
		top: initial;
		right: -35px;
		bottom: 15px;
	}

	.screw-2-2 {
		top: initial;
		left: -1vw;
		bottom: 2vh;
	}

	.screw-3-3 {
		left: initial;
		top: initial;
		right: -1vw;
		bottom: 2vh;
	}

	@keyframes blips {
		14% {
			background: radial-gradient(2vmin circle at 75% 70%, white 10%, #05a2b9 30%, rgba(255, 255, 255, 0) 100%);
		}

		14.0002% {
			background: radial-gradient(2vmin circle at 75% 70%, white 10%, #05a2b9 30%, rgba(255, 255, 255, 0) 100%), radial-gradient(2vmin circle at 63% 72%, white 10%, #05a2b9 30%, rgba(255, 255, 255, 0) 100%);
		}

		25% {
			background: radial-gradient(2vmin circle at 75% 70%, white 10%, #05a2b9 30%, rgba(255, 255, 255, 0) 100%), radial-gradient(2vmin circle at 63% 72%, white 10%, #05a2b9 30%, rgba(255, 255, 255, 0) 100%), radial-gradient(2vmin circle at 56% 86%, white 10%, #05a2b9 30%, rgba(255, 255, 255, 0) 100%);
		}

		26% {
			background: radial-gradient(2vmin circle at 75% 70%, white 10%, #05a2b9 30%, rgba(255, 255, 255, 0) 100%), radial-gradient(2vmin circle at 63% 72%, white 10%, #05a2b9 30%, rgba(255, 255, 255, 0) 100%), radial-gradient(2vmin circle at 56% 86%, white 10%, #05a2b9 30%, rgba(255, 255, 255, 0) 100%);
			opacity: 1;
		}

		100% {
			background: radial-gradient(2vmin circle at 75% 70%, white 10%, #05a2b9 30%, rgba(255, 255, 255, 0) 100%), radial-gradient(2vmin circle at 63% 72%, white 10%, #05a2b9 30%, rgba(255, 255, 255, 0) 100%), radial-gradient(2vmin circle at 56% 86%, white 10%, #05a2b9 30%, rgba(255, 255, 255, 0) 100%);
			opacity: 0;
		}
	}


	@media (max-width: 991px) {
		.success {
			bottom: 40vh;
			font-size: 1.6rem;
		}

		.failure {
			bottom: 40vh;
			font-size: 1.6rem;
		}

		.status2 {
			font-size: 0.4rem;
		}

		.screw {
			top: 4vh;
			left: -2vw;
		}

		.screw-1 {
			right: -2vw;
		}

		.screw-2 {
			top: initial;
			left: -2vw;
			bottom: 1vh;
		}

		.screw-3 {
			left: initial;
			top: initial;
			right: -2vw;
			bottom: 1vh;
		}

		.logo {
			top: 10vh;
		}

		.radar {
			width: 30vw;
			height: 30vw;
			background-size: 30vw 30vw;
			left: 50%;
			top: 50%;
			margin-left: -15vw;
			margin-top: -35vh;
		}
	}

	@media (max-width: 661px) {
		body {
			height: 100vh;
			overflow-y: hidden;
			max-width: 375px;
		}

		.container {
			width: 80vw;
			height: 45vh;
			position: relative;
			bottom: 25vh;
			left: 2.5vw;

		}

		.screw {
			top: 2vh;
			left: -5vw;
		}

		.screw-1 {
			right: -5vw;
			top: 43vh;
		}

		.screw-2 {
			left: 81vw;
			bottom: 1vh;
		}

		.screw-3 {
			left: 81vw;
			top: 43vh;
		}

		.logo {
			top: 6vh;
		}

		.radar {
			width: 70vw;
			height: 70vw;
			background-size: 70vw 70vw;
			margin-left: -33.5vw;
			margin-top: -16vh;
		}

		.container2 {
			width: 80vw;
			height: 40vh;
			position: absolute;
			top: 50vh;
		}

		.screen {
			width: 79.5vw;
			height: 25vh;
		}

		.failure {
			bottom: 20vh;
			font-size: 1.6rem;
			left: 20vw;
		}

		.success {
			bottom: 0;
			font-size: 1.6rem;
			max-width: 31vh;
			bottom: 20vh;
			right: 20vw;
		}
	}
</style>

<?php
//	if(isset($_POST["submit"])){
$name = $_POST["name"];
$email = $_POST["email"];
//$phone = $_POST["phone"];
$msg = $_POST["message"];

//$nixon = "/home/domenico/manda_email.py " . $name . " " . $email . " " . $phone . " " . $msg;
$nixon = "/home/domenico/manda_email.py " . "'" . $name . "'" . " " . "'" . $email . "'" . " " . "'" . $msg . "'";
$command = escapeshellcmd($nixon);
$output = shell_exec($command);

if ($output == false) {
	echo "<h1 class='success'>Sent Successfully! Thank you" . " " . $msg . ", I will contact you shortly!</h1>";
} else {
	//echo "Something went wrong!";
	echo "<h1 class='failure'>Something went wrong!</h1>" . $output;
}
//	}
?>