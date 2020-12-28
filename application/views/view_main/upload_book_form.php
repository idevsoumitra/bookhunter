<div style="width: 100%; height: 90px"></div>

<?php if(!empty($this->session->userdata('user_id'))){ ?>

<div class="container register mb-2" style="margin: 0 auto">
    <div class="row">
        <div class="col-md-3 register-left">
            <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
            <h3>Welcome</h3>
            <p>Create Your Book Information</p>
            
        </div>
        <div class="col-md-9 register-right">
            
            <div class="tab-content" id="myTabContent">
                <form action="<?php echo base_url()?>upload-book" method="post" enctype="multipart/form-data">
                    <div class="row register-form">
                        <div class="col-md-6">
                            <input type="hidden" value="<?php echo date_default_timezone_set("Asia/Dhaka"); echo date("Y-m-d h:i:sa");?>" name="create_at"> 
                            <input type="hidden" value="<?php echo $this->session->userdata('user_id');?>" name="post_by_id">

                            <input type="hidden" value="1" name="status">

                            <div class="form-group">
                                <input type="text" name="book_title" value=""  class="form-control"  placeholder="Book Title*" required='require'/>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Book Author *" value="" name="book_author" required />
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="book_type" id=""  >
                                    <option value="" selected="selected">Choose Book Genre</option>
                                        <?php foreach($all_category as $row){ ?>
                                            <option value="<?php echo $row->category_id?>"><?php echo $row->category_name;?></option>
                                        <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Cover Artist" value="" name="book_cover_artist"/>
                            </div>
                            <div class="form-group">
                                <input type="file" style="height: 40px;font-size:15px" class="form-control" title="Book Cover Photo" placeholder="Cover" value="Upload Cover" name="book_cover"/>
                            </div>
                            
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Book Publisher " value="" name="book_publisher"/>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Publish Year " value="" name="book_publish_year"/>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Book Media Type " value="" name="book_media_type"/>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Pages" value="" name="book_pages"/>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Country" value="" name="country"/>
                            </div>
                            
                            
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea name="book_description" class="form-control" placeholder="Book Subject" id="" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea name="post_feedback" class="form-control" placeholder="Your Feedback" id="" cols="10" minrows="2" rows="3"></textarea>
                            </div>
                        </div>
                        <input type="submit" class="btnRegister"  value="Upload"/>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
</div>
<?php }
    else{ ?>
        <div class="page-wrap d-flex flex-row align-items-center">
            <div class="container mb-5 pb-5">
                <div class="row justify-content-center">
                    <div class="col-md-12 text-center">
                        <span class="display-1 d-block">404</span>
                        <div class="mb-4 lead">Oops! We can't seem to find the page you are looking for.</div>
                        <a href="<?php echo base_url(); ?>" class="btn btn-link">Back to Home</a>
                    </div>
                </div>
            </div>
        </div>
   <?php }
?>