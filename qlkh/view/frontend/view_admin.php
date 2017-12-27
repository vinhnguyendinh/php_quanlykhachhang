<!-- danh sách admin -->

<section id="admin" class="two" style="background: #ddd;">
    <div class="container">

        <header>
            <h2 style="font-weight: bold;">ĐỘI NGŨ ADMIN</h2>
        </header>

        <p style="color: black;">Đội ngũ admin năng động, sáng tạo với trình độ chuyên môn cao</p>

        <div class="row">
        <?php foreach ($arr as $rows) { ?>
            <div style="width: 50%">
                <article class="item" style=" border: 10px solid white;">
                    <a href="#" class="image fit"><img src="public/upload/admin/<?php echo $rows["image"]; ?>" alt=""/></a>
                    <header>
                        <h2><?php echo $rows["fullName"]; ?></h2>
                        <h3><?php echo $rows["description"]; ?></h3>
                    </header>
                    <header>
                        <h3>Email: <?php echo $rows["email"]; ?></h3>
                    </header>
                    <ul class="icons">
                        <li><a target="_blank" href="https://www.facebook.com/vinhxxu" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                        <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                        <li><a href="#" class="icon fa-envelope"><span class="label">Email</span></a></li>
                    </ul>
                </article>
            </div>
        <?php } ?>
        </div>

    </div>
</section>
