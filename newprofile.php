 <?php 
 $pageTitle = 'Create your profile';
 include('header.php'); ?>
    <section class="hero-unit">
        <div class="container">
             <div class="row-fluid">
                 <div class="span12">                   
                    <h2>Create your profile</h2>
                </div>
            </div>
        </div>
        <div class="container">
             <div class="row-fluid">
                 <div class="span8">
                    <form class="form-horizontal" action="">
                        <div class='control-group'>
                            <label class="control-label" for="userName">Username</label>
                            <div class="controls">
                                <input type="text" id="userName" placeholder="" class="span8" required>
                            </div>                               
                        </div>
                        <div class='control-group'>
                            <label class="control-label" for="email">Email</label>
                            <div class="controls">
                                <input type="text" id="email" placeholder="" class="span8" type="email" required>
                            </div>                               
                        </div>
                        <div class='control-group'>
                            <label class="control-label" for="password">Password</label>
                            <div class="controls">                                
                                <input type="password" id="password" placeholder="" class="span8" required>
                            </div>                               
                        </div>
                        <div class='control-group'>
                            <label class="control-label" for="repeatPassword">Repeat Password</label>
                            <div class="controls">                                
                                <input type="password" id="repeatPassword" placeholder="" class="span8" required>
                            </div>                               
                        </div>
                        <div class='control-group'>
                            <label class="control-label" for="firstName">First Name</label>
                            <div class="controls">
                                <input type="text" id="firstName" placeholder="" class="span8" required>
                            </div>                               
                        </div>
                        <div class='control-group'>
                            <label class="control-label" for="secondName">Last Name</label>
                            <div class="controls">
                                <input type="text" id="secondName" placeholder="" class="span8" required>
                            </div>                               
                        </div>
                        <div class='control-group'>
                            <label class="control-label" for="profileType" class="">Profile Type</label>
                            <div class="controls">
                                <select class="span8">
                                  <option>Normal User</option>
                                  <option>Artist</option>
                                  <option>Band</option>
                                  <option>Organizer</option>
                                </select>
                            </div>                               
                        </div>
                        <div class='control-group'>
                            <label class="control-label" for="description">Bio</label>
                            <div class="controls">                                
                                <textarea name="description" id="description" cols="40" rows="5"  class="span8"></textarea>
                            </div>                               
                        </div>
                        <div class='control-group'>
                            <label class="control-label" for="location">Location</label>
                            <div class="controls">                                
                                <input type="text" name="location" id="location" placeholder="" class="span8" required>
                            </div>                               
                        </div>
                        <div class='control-group'>
                            <label class="control-label" for="inputTags">Picture</label>
                            <div class="controls">                                
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                  <div class="fileupload-new thumbnail" style="width: 150px; height: 150px;"><img src="http://www.placehold.it/150x150/1b1b1b/999999&text=no+image" /></div>
                                  <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 150px; max-height: 150px; line-height: 20px;"></div>
                                  <div>
                                    <span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input type="file" /></span>
                                    <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                                  </div>
                                </div>
                            </div>                               
                        </div>
                        <div class="control-group">
                            <div class="controls">
                              <!-- <label class="checkbox">
                                <input type="checkbox"> Remember me
                              </label> -->
                              <button type="submit" class="btn btn-orange">Create Profile</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="span4">
                    <h2>Have something to fill up this space</h2>
                 </div>
            </div>
        </div>
        
                 

    </section>
    
<?php include('footer.php'); ?>  
<script src="js/fileupload.js"></script>  
<script>
$('.fileupload').fileupload()
</script>

