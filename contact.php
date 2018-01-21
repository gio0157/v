<?php include 'header.php'; ?>
<div class="row contact-container contact-inner">
    <div class="container">
        <h3>კონტაქტი</h3>
        <h5>ცნობილი ფაქტია, რომ გვერდის წაკითხვად შიგთავსს შეუძლია მკითხველის</h5>
        <div class="contact-wrapper col-xs-12">
        	<div class="contact-left col-xs-12 col-sm-6">
        		<input type="text" name="contact_name" placeholder="სახელი">
        		<input type="text" name="contact_subject" placeholder="თემა">
        		<input type="text" name="contact_email" placeholder="ელ-ფოსტა">
        		<input type="text" name="contact_phone" placeholder="ტელეფონი">
        		<textarea name="ტექსტი"></textarea>
        		<span>გაგზავნა</span>
        	</div>
        	<div class="contact-right col-xs-12 col-sm-6">
        		<ul class="col-xs-6">
        			<li><b>საქართველო</b></li>
        			<li>იეთიმ გურჯის 7ბ</li>
        			<li>თბილისი, 0105, საქართველო</li>
        			<li>მობ: (995) 595 25 20 01</li>
        		</ul>
        		<ul class="col-xs-6">
        			<li><b>სოციალური ქსელი</b></li>
        			<li><i class="fa fa-facebook-square"></i>Facebook</li>
        			<li><i class="fa fa-youtube-square"></i>Youtube</li>
        		</ul>
        	</div>
        </div>
        <div class="contact-map">
        	<?php include 'public/georgia.svg'; ?>
        </div>
        <h3 class="map-title"></h3>
        <h5 class="map-description"></h5>
        <script type="text/javascript">
            $(document).ready(function(){
                $('svg a path').on('mouseover', function(){
                    $(this).css({ "fill":"#548c7d" });
                    $('.map-title').html($(this).attr('title'));
                    $('.map-description').html($(this).attr('description'));
                }).on('mouseleave', function(){
                    $('.map-title').html('');
                    $('.map-description').html('');
                    $(this).css({ "fill":"#efefef" });
                });;
            });
        </script>
    </div>
</div>
<?php include 'footer.php'; ?>