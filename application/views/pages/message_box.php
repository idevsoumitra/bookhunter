<div class="container mt-5">
	<div class="card">
	    <div class="card-body">
            <?php foreach($all_messages as $row){?>
	        <div class="row">
        	    <div class="col-md-2">
                    <img src="https://image.ibb.co/jw55Ex/def_face.jpg" class="img img-rounded img-fluid" style="height: 50px; width: 50px"/> 
                    <br>
        	        <p class="text-secondary" style="font-size: 12px"><?php echo $row->post_time;?></p>
        	    </div>
        	    <div class="col-md-10">
        	        <p>
        	            <a class="float-left" href=""><strong><?php echo $row->contact_sender?></strong></a>
        	            <!-- <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                        <span class="float-right"><i class="text-warning fa fa-star"></i></span>
        	            <span class="float-right"><i class="text-warning fa fa-star"></i></span>
        	            <span class="float-right"><i class="text-warning fa fa-star"></i></span> -->

        	       </p>
        	       <div class="clearfix"></div>
        	        <p><?php echo $row->contact_message?></p>
        	        <p>
                        <a class="float-right "><?php echo $row->contact_sender_email;?></a>
                        
                        <br>
                        <a class="float-right "> <?php echo $row->contact_sender_phone;?></a>
        	       </p>
        	    </div>
	        </div>
	        <?php } ?>
	    </div>
	</div>
</div>