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
                <p>ცნობილი ფაქტია, რომ გვერდის წაკითხვად შიგთავსს შეუძლია მკითხველის ყურადღება მიიზიდოს და დიზაინის აღქმაში ხელი შეუშალოს. Lorem Ipsum-ის გამოყენებით ვღებულობთ იმაზე მეტ-ნაკლებად სწორი გადანაწილების ტექსტს, ვიდრე ერთიდაიგივე გამეორებადი სიტყვებია ხოლმე. შედეგად, ტექსტი ჩვეულებრივ ინგლისურს გავს, მისი წაითხვა კი შეუძლებელია.</p>
                <p>დღეს უამრავი პერსონალური საგამომცემლო პროგრამა და ვებგვერდი იყენებს Lorem Ipsum-ს, როგორც დროებით ტექსტს წყობის შესავსებად;</p>
                <p>Lorem Ipsum-ის მოძებნისას კი საძიებო სისტემები ბევრ დაუსრულებელ გვერდს გვიჩვენებენ. წლების მანძილზე ამ ტექსტის უამრავი ვერსია გამოჩნდა, ზოგი შემთხვევით დაშვებული შეცდომის გამო, ზოგი კი — განზრახ, ხუმრობით.</p>
                <p>ცნობილი ფაქტია, რომ გვერდის წაკითხვად შიგთავსს შეუძლია მკითხველის ყურადღება მიიზიდოს და დიზაინის აღქმაში ხელი შეუშალოს. Lorem Ipsum-ის გამოყენებით ვღებულობთ იმაზე მეტ-ნაკლებად სწორი გადანაწილების ტექსტს, ვიდრე ერთიდაიგივე გამეორებადი სიტყვებია ხოლმე. შედეგად, ტექსტი ჩვეულებრივ ინგლისურს გავს, მისი წაითხვა კი შეუძლებელია. დღეს უამრავი პერსონალური საგამომცემლო პროგრამა და ვებგვერდი იყენებს Lorem Ipsum-ს, როგორც დროებით ტექსტს წყობის შესავსებად; Lorem Ipsum-ის მოძებნისას კი საძიებო სისტემები ბევრ დაუსრულებელ გვერდს გვიჩვენებენ. წლების მანძილზე ამ ტექსტის უამრავი ვერსია გამოჩნდა, ზოგი შემთხვევით დაშვებული შეცდომის გამო, ზოგი კი — განზრახ, ხუმრობით.</p>
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