<!-- 
<div style="margin-top: 50px">

</div> -->
<div class="container contact-form">
            <div class="contact-image">
                <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/>
            </div>
            <form action="<?php echo base_url()?>send-contact" method="post" >
               <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
        
                            <input type="text" name="contact_sender" class="form-control" placeholder="Your Name *" value="" required/>
                        </div>
                        <div class="form-group">
                            <input type="text" name="contact_sender_email" class="form-control" placeholder="Your Email *" value="" required/>
                        </div>
                        <div class="form-group">
                            <input type="text" name="contact_sender_phone" class="form-control" placeholder="Your Phone Number *" value="" />
                        </div>
                        
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea name="contact_message" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;" required></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="submit" name="btnSubmit" class="btnContact" value="Send Message" />
                        </div>
                    </div>
                </div>
            </form>
</div>