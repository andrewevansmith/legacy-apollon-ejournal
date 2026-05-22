<div id="main">
<article>
    <h1>Contact</h1>
    <div id="left-section">
    	<h5>Apollon Undergraduate e-Journal</h5>
    <a href="mailto:andrew_smith@berea.edu">
    <p class="read-more">
    	<img src="<?= base_url() ?>images/icon-email.png" />
        <span class>e-mail us!</span>
        <div class="clear"></div>
    </p>
    </a>
    </div>
    <div id="right-section">
        <form action="<?= base_url() ?>index.php/apollon/contact" method="post">
        	<fieldset>
            	<label>Name:</label>
                <input type="text" name="name" />
                <label>E-mail:</label>
                <input type="email" name="email" />
                <label>Message:</label>
                <textarea name="message"></textarea>
                <button name="submit">Send message</button>
            </fieldset>
        </form>

       <?php
            if (isset($_POST['submit']))
            {
                if (valid_email($_POST['email']))
                {
                    send_email(OWNER_EMAIL, "Web site email", $_POST['message']);
                }
            }
       ?>
    </div>
    <div class="clear"></div>
</article>
</div>