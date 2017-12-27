<!-- phần liên hệ -->

<section id="contact" class="four">
    <div class="container">

        <header>
            <h2 style="font-weight: bold;">LIÊN HỆ</h2>
        </header>

        <p>Hãy để lại email cùng lời nhắn, chúng tôi sẽ sớm liên hệ lại với bạn!</p>

        <form method="post" action="#contact">
            <div class="row">
                <div class="6u 12u$(mobile)"><input type="text" name="name" placeholder="Tên của bạn" required /></div>
                <div class="6u$ 12u$(mobile)"><input type="email" name="email" placeholder="Email" required/></div>
                <div class="12u$">
                    <textarea name="message" placeholder="Lời nhắn tới chúng tôi..." required></textarea>
                </div>
                <div class="12u$">
                    <input type="submit" value="Gửi tin nhắn" />
                </div>
            </div>
        </form>
		<?php
			if($_SERVER["REQUEST_METHOD"] == "POST"){
				$name = $_POST["name"];
				$email = $_POST["email"];
				$message = $_POST["message"];
				$this->model->execute("insert into tblmessage(name,email,message) values('$name','$email','$message')");
				echo "<script>alert('Tin nhắn đã được gửi.')</script>";
			}
		?>
    </div>
</section>

</div>
