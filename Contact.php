<?php $selected = 6;include("header.php"); ?>

<!-- content -->
		<article id="content">
			<div class="wrapper">
				<div class="box1">
					<div class="line1 wrapper">
						<section class="col1">
							<h2><strong>O</strong>ur<span>Address</span></h2>
							<strong class="address">
								Country:<br>
								City:<br>
								Zip Code:<br>
								Telephone:<br>
								Fax:<br>
								E-Mail:
							</strong>
							USA<br>
							San Diego<br>
							50122<br>
							+354 5635600<br>
							+354 5635610<br>
							<a href="mailto:">hopecenter@gmail.com</a>
						</section>
						<section class="col2 pad_left1">
							<h2 class="color2"><strong>M</strong>iscellaneous<span>info</span></h2>
							<p class="pad_bot1">
								Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
							</p>
							Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur.
						</section>
					</div>
				</div>	
			</div>
			<div class="wrapper">
				<div class="pad_left2 relative">
					<h4 class="color3"><span>Contact</span>Form</h4>
					<img src="images/page6_img1.png" alt="" class="img1">
					<form id="ContactForm">
						<div>
							<div class="wrapper"><span>Your Name:</span><input type="text" class="input"></div>
							<div class="wrapper"><span>Your E-mail:</span><input type="text" class="input"></div>
							<div class="wrapper"><span>Your Website:</span><input type="text" class="input"></div>
							<div class="textarea_box"><span>Your Message:</span><textarea name="textarea" cols="1" rows="1"></textarea></div>
							<a href="#" class="button2 color3" onClick="document.getElementById('ContactForm').submit()">Send</a>
							<a href="#" class="button2 color3" onClick="document.getElementById('ContactForm').reset()">Clear</a>
						</div>
					</form>
				</div>
			</div>
		</article>
<!-- / content -->

<?php include("footer.php"); ?>