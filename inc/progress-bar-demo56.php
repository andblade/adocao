<style>
.progress{
	width: 110px;
	height: 110px;
	line-height: 150px;
	background: none;
	margin: 0 auto;
	box-shadow: none;
	position: relative;
}
.progress:after{
	content: "";
	width: 100%;
	height: 100%;
	border-radius: 50%;
	border: 12px solid #fff;
	position: absolute;
	top: 0;
	left: 0;
}
.progress > span{
	width: 50%;
	height: 100%;
	overflow: hidden;
	position: absolute;
	top: 0;
	z-index: 1;
}
.progress .progress-left{
	left: 0;
}
.progress .progress-bar{
	width: 100%;
	height: 100%;
	background: none;
	border-width: 12px;
	border-style: solid;
	position: absolute;
	top: 0;
}
.progress .progress-left .progress-bar{
	left: 100%;
	border-top-right-radius: 80px;
	border-bottom-right-radius: 80px;
	border-left: 0;
	-webkit-transform-origin: center left;
	transform-origin: center left;
}
.progress .progress-right{
	right: 0;
}
.progress .progress-right .progress-bar{
	left: -100%;
	border-top-left-radius: 80px;
	border-bottom-left-radius: 80px;
	border-right: 0;
	-webkit-transform-origin: center right;
	transform-origin: center right;
	animation: loading-1 1.8s linear forwards;
}
.progress .progress-value{
	width: 90%;
	height: 90%;
	border-radius: 50%;
	background: #44484b;
	font-size: 24px;
	color: #fff;
	line-height: 135px;
	text-align: center;
	position: absolute;
	top: 5%;
	left: 5%;
}
.progress.pink .progress-bar{
	border-color: #ed687c;
}
.progress.pink .progress-left .progress-bar{
	animation: loading-1 0.4s linear forwards 1.8s;
}

.progress.pink2 .progress-bar{
	border-color: #ed687c;
}
.progress.pink2 .progress-left .progress-bar{
	animation: loading-2 0.4s linear forwards 1.8s;
}

.progress.pink3 .progress-bar{
	border-color: #ed687c;
}
.progress.pink3 .progress-left .progress-bar{
	animation: loading-3 0.4s linear forwards 1.8s;
}

.progress.pink4 .progress-bar{
	border-color: #ed687c;
}
.progress.pink4 .progress-left .progress-bar{
	animation: loading-4 0.4s linear forwards 1.8s;
}

.progress.pink5 .progress-bar{
	border-color: #ed687c;
}
.progress.pink5 .progress-left .progress-bar{
	animation: loading-5 0.4s linear forwards 1.8s;
}
.progress.pink6 .progress-bar{
	border-color: #ed687c;
}
.progress.pink6 .progress-left .progress-bar{
	animation: loading-6 0.4s linear forwards 1.8s;
}
.progress.pink7 .progress-bar{
	border-color: #ed687c;
}
.progress.pink7 .progress-right .progress-bar{
	animation: loading-6 0.4s linear forwards 1.8s;
}

@keyframes loading-1{
	0%{
		-webkit-transform: rotate(0deg);
		transform: rotate(0deg);
	}
	100%{
		-webkit-transform: rotate(180deg);
		transform: rotate(180deg);
	}
}
@keyframes loading-2{
	0%{
		-webkit-transform: rotate(0deg);
		transform: rotate(0deg);
	}
	100%{
		-webkit-transform: rotate(126deg);
		transform: rotate(126deg);
	}
}
@keyframes loading-3{
	0%{
		-webkit-transform: rotate(0deg);
		transform: rotate(0deg);
	}
	100%{
		-webkit-transform: rotate(0deg);
		transform: rotate(0deg);
	}
}
@keyframes loading-4{
	0%{
		-webkit-transform: rotate(0deg);
		transform: rotate(0deg);
	}
	100%{
		-webkit-transform: rotate(36deg);
		transform: rotate(36deg);
	}
}
@keyframes loading-5{
	0%{
		-webkit-transform: rotate(0deg);
		transform: rotate(0deg);
	}
	100%{
		-webkit-transform: rotate(126deg);
		transform: rotate(126deg);
	}
}
@keyframes loading-6{
	0%{
		-webkit-transform: rotate(0deg);
		transform: rotate(0deg);
	}
	100%{
		-webkit-transform: rotate(126deg);
		transform: rotate(126deg);
	}
}
@media only screen and (max-width: 990px){
	.progress{ margin-bottom: 20px; }
}
</style>

<section id="skills" class="bg-primaria py-5 mb-5">
	<div class="container">
		<div class="my-3">
			<div class="row my-5 text-white">
				<div class="border-r border-white pr-4 cogs">
					<h2 class="text-center text-md-right h1">Minhas<br>Habilidades</h2>
				</div>
				<div class="col-md col-sm-6">
					<div class="progress pink2">
						<span class="progress-left">
							<span class="progress-bar"></span>
						</span>
						<span class="progress-right">
							<span class="progress-bar"></span>
						</span>
						<div class="progress-value">80%</div>
					</div>
				</div>
				<div class="col-md col-sm-6">
					<div class="progress pink3">
						<span class="progress-left">
							<span class="progress-bar"></span>
						</span>
						<span class="progress-right">
							<span class="progress-bar"></span>
						</span>
						<div class="progress-value">40%</div>
					</div>
				</div>
				<div class="col-md col-sm-6">
					<div class="progress pink4">
						<span class="progress-left">
							<span class="progress-bar"></span>
						</span>
						<span class="progress-right">
							<span class="progress-bar"></span>
						</span>
						<div class="progress-value">30%</div>
					</div>
				</div>

				<div class="col-md col-sm-6">
					<div class="progress pink5">
						<span class="progress-left">
							<span class="progress-bar"></span>
						</span>
						<span class="progress-right">
							<span class="progress-bar"></span>
						</span>
						<div class="progress-value">70%</div>
					</div>
				</div>

				<div class="col-md col-sm-6">
					<div class="progress pink6">
						<span class="progress-left">
							<span class="progress-bar"></span>
						</span>
						<span class="progress-right">
							<span class="progress-bar"></span>
						</span>
						<div class="progress-value">30%</div>
					</div>
				</div>

				<div class="col-md col-sm-6">
					<div class="progress pink7">
						<span class="progress-left">
							<span class="progress-bar"></span>
						</span>
						<span class="progress-right">
							<span class="progress-bar"></span>
						</span>
						<div class="progress-value">40%</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>