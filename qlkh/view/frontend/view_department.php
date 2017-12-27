<!-- danh sách cơ sở -->

<section id="portfolio" class="two">
    <div class="container">

        <header>
            <h2 style="font-weight: bold;">CÁC CƠ SỞ</h2>
        </header>

        <p>Công ty chúng tôi bao gồm nhiều cơ sở ở khắp cả nước</p>

        <div class="row">
        <?php foreach ($arr as $rows) { ?>
            <div style="width: 50%">
                <article class="item">
                    <a href="#" class="image fit"><img src="public/upload/department/<?php echo $rows["image"]; ?>" alt=""/></a>
                    <header>
                        <h2><?php echo $rows["name"]; ?></h2>
                        <h3>Số khách hàng: <?php echo $rows["number"]; ?></h3>
                    </header>
                </article>
            </div>
        <?php } ?>
        </div>

    </div>
</section>
