<?php include 'header.php'; ?>
<div class="row contact-container contact-inner">
    <div class="container">
        <h3>კონტაქტი</h3>
        <h5>ცნობილი ფაქტია, რომ გვერდის წაკითხვად შიგთავსს შეუძლია მკითხველის</h5>
        <div class="contact-map">
        	<?php include 'public/georgia.svg'; ?>
        </div>
        <h3 class="map-title"></h3>
        <h5 class="map-description"></h5>
        <script type="text/javascript">
        	$(document).ready(function(){
                $('svg a path').css({ "fill":"#efefef" });
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