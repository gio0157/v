<?php include 'header.php'; ?>
<div class="row regions-container regions-inner">
	<div class="background-map"><?php include 'public/georgia.svg'; ?></div>
    <div class="container">
        <h3>კონტაქტი</h3>
        <h5>ცნობილი ფაქტია, რომ გვერდის წაკითხვად შიგთავსს შეუძლია მკითხველის</h5>
        <div class="regions-wrapper col-xs-12">
        	<div class="regions-about">
        		<ul>
        			<li><a href="?news=1">სიახლეები</a></li>
        			<li><a href="">ინფორმაცია ორგანიზაციის შესახებ</a></li>
        			<li><a href="">ინფორმაცია წევრების შესახებ</a></li>
        			<li><a href="">დაფარვის ზონა</a></li>
        			<li><a href="">სერვისები</a></li>
        		</ul>
        		<a onclick="prevPage();" class="regions-prev"><span class="regions-back"><i class="fa fa-long-arrow-left"></i> უკან</span></a>
        	</div>
    		<div class="regions-map">
    			<?php include 'public/imereti.svg'; ?>
    		</div>
    		<ol class="region-titles">
    			<li><a href="" id="map1"><i class="fa fa-map-pin"></i>ქუთაისი</a></li>
    			<li><a href="" id="map2"><i class="fa fa-map-pin"></i>სამტრედია</a></li>
    			<li><a href="" id="map3"><i class="fa fa-map-pin"></i>ვანი</a></li>
    			<li><a href="" id="map4"><i class="fa fa-map-pin"></i>ხონი</a></li>
    			<li><a href="" id="map5"><i class="fa fa-map-pin"></i>ბაღდათი</a></li>
    			<li><a href="" id="map6"><i class="fa fa-map-pin"></i>ზესტაფონი</a></li>
    			<li><a href="" id="map7"><i class="fa fa-map-pin"></i>თერჯოლა</a></li>
    			<li><a href="" id="map8"><i class="fa fa-map-pin"></i>ტყიბული</a></li>
    			<li><a href="" id="map9"><i class="fa fa-map-pin"></i>ჭიათურა</a></li>
    			<li><a href="" id="map10"><i class="fa fa-map-pin"></i>საჩხერე</a></li>
    			<li><a href="" id="map11"><i class="fa fa-map-pin"></i>ხარაგაული</a></li>
    		</ol>
        </div>
        <script type="text/javascript">
        	$(document).ready(function(){
        		$('svg path').on('mouseover', function(){
        			$('.region-titles #'+$(this).attr('id')).addClass('active');
        		}).on('mouseleave', function(){
        			$(this).removeClass('active');
        			$('.region-titles #'+$(this).attr('id')).removeClass('active');
        		});

        		$('.region-titles a').on('mouseover', function(){
        			$('svg #'+$(this).attr('id')).css({ "fill":"#548c7d" });
        		}).on('mouseleave', function(){
        			$(this).removeClass('active');
        			$('svg #'+$(this).attr('id')).css({ "fill":"#efefef" });
        		});
        	});
        	function prevPage(){window.history.back();}
        </script>
    </div>
</div>
<?php include 'footer.php'; ?>