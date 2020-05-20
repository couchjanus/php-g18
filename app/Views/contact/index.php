<div class="container">
    <h1 class="brand"><?php echo $title; ?></h1>
    <?php if (isset($error)):?>
    <div class="alert alert-danger" role="alert">
        Ошибка <?= $error;?> Please try again!
    </div>
    <?php endif;?>

    <div class="wrapper">
        <div class="company-info">
            <h3><i class="fa fa-home"></i> Address</h3>
            <ul>
                <?php if (isset($address)):                        
                    foreach ($address as $addr):?>
                <li><i class="fas fa-road"></i> <?=$addr['street'];?></li>
                <li><i class="fas fa-road"></i> <?=$addr['city'];?></li>
                <li><i class="fas fa-road"></i> <?=$addr['country'];?></li>
                <li><i class="fas fa-phone"></i> <?=$addr['mobile'];?></li>
                <li><i class="fas fa-envelope"></i> <?=$addr['email'];?></li>
                <?php endforeach;?>
                <?php endif;?>
            </ul>
        </div>
        <div class="contact">
            <div class="card-header bg-primary text-white"><i class="fa fa-envelope"></i> Leave Your Message.
            </div>
            <h3>E-mail Us</h3>
            <form id="contact-form" action="" method="POST">
                <p>
                    <label>Name</label>
                    <input type="text" name="username" id="name" required>
                </p>
                <p>
                    <label>Company</label>
                    <input type="text" name="company" id="company">
                </p>
                <p>
                    <label>E-mail Address</label>
                    <input type="email" name="email" id="email" required>
                </p>
                <p>
                    <label>Phone Number</label>
                    <input type="text" name="phone" id="phone">
                </p>
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                    else.</small>
                <p class="full">
                    <label>Message</label>
                    <textarea name="message" rows="5" id="message"></textarea>
                </p>
                <p class="full">
                    <button type="submit">Submit</button>
                </p>
            </form>

        </div>

    </div>

    <div class="">
    <div class="card">
        <div class="card-header bg-primary text-white"><i class="fa fa-envelope"></i> Comments
        </div>
        <div class="card-body">
            <?php
                if (isset($comments) and count($comments)>0):
                    printf("<h2>There Are %d Comments In Guest Book</h2>", count($comments));       
                    foreach ($comments as $value) {
                        echo("<div class='top'><b>User ".$value['username']." </b> <a href='mailto:".$value['email']."'>".$value['email']."</a>  Added this: </div><div class='comment'>".strip_tags($value['message'])."</div>"."<p>At ".strip_tags($value['created_at'])."</p><hr>");
                    }
                else:
                    printf("<h2 style='color: #%x%x%x'>No Comments Yet...</h2>", 165, 27, 45);

                endif;
                ?>
        </div>
    </div>
</div>
</div>
