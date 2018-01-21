<?php include 'header.php'; ?>
<div class="row regions-container regions-inner in-region">
    <div class="background-map"><?php include 'public/georgia.svg'; ?></div>
    <div class="container">
        <h3>კონტაქტი</h3>
        <h5>ცნობილი ფაქტია, რომ გვერდის წაკითხვად შიგთავსს შეუძლია მკითხველის</h5>
        <div class="regions-wrapper col-xs-12">
            <div class="regions-about">
                <ul>
                    <li><a href="#news">სიახლეები</a></li>
                    <li><a href="">ინფორმაცია ორგანიზაციის შესახებ</a></li>
                    <li><a href="">ინფორმაცია წევრების შესახებ</a></li>
                    <li><a href="">დაფარვის ზონა</a></li>
                    <li><a href="">სერვისები</a></li>
                </ul>
                <a onclick="prevPage();" class="regions-prev"><span class="regions-back"><i class="fa fa-long-arrow-left"></i> უკან</span></a>
            </div>
            <div class="regions-map">
                <span class="profile-descr">იმერეთის ვეტერინართა რეგიონული ასოციაციის გამგეობის წევრები:</span>
                <div class="profile-items">
                    <img src="<?php echo URL; ?>public/img/profile.png">
                    <div class="profile-info">
                        <h3>ამირან ღვათაძე</h3>
                        <p><i class="fa fa-map-pin"></i>ბაღდათი, პირველი ობჩა</p>
                        <p><i class="fa fa-phone"></i>599262929</p>
                    </div>
                </div>
                <div class="profile-items">
                    <img src="<?php echo URL; ?>public/img/profile.png">
                    <div class="profile-info">
                        <h3>ამირან ღვათაძე</h3>
                        <p><i class="fa fa-map-pin"></i>ბაღდათი, პირველი ობჩა</p>
                        <p><i class="fa fa-phone"></i>599262929</p>
                    </div>
                </div>
                <div class="profile-items">
                    <img src="<?php echo URL; ?>public/img/profile.png">
                    <div class="profile-info">
                        <h3>ამირან ღვათაძე</h3>
                        <p><i class="fa fa-map-pin"></i>ბაღდათი, პირველი ობჩა</p>
                        <p><i class="fa fa-phone"></i>599262929</p>
                    </div>
                </div>
                <div class="profile-items">
                    <img src="<?php echo URL; ?>public/img/profile.png">
                    <div class="profile-info">
                        <h3>ამირან ღვათაძე</h3>
                        <p><i class="fa fa-map-pin"></i>ბაღდათი, პირველი ობჩა</p>
                        <p><i class="fa fa-phone"></i>599262929</p>
                    </div>
                </div>
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