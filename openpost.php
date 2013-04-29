 <?php
 
 $pageTitle = 'Find bandmates, gigs and connect with musicians';
 include('header.php'); ?>

 <section class="container">
     <div class="row-fluid">
         <div class="span2">
           <div class="openpost">
             <h5>Need Guitarist</h5>
             <span class="tags">Slayer</span>
           </div>
           <div class="openpost">
             <h5>Drummer wanted</h5>
             <span class="tags">Slayer</span>
           </div>
           <div class="openpost">
             <h5>Vocalist</h5>
             <span class="tags">Slayer</span>
           </div>
         </div>
         <div class="openpost span7">
            <img src="http://3.bp.blogspot.com/-9TMLLzJXGmk/T5_gN-gCX-I/AAAAAAAALt0/FQ2hsGZa5K4/s1600/Front+Jasa.jpg" width="125" height="125" class="img-circle pull-right">
             <h2>Rhythm guitarist wanted</h2>         
             <h3>Guns 'n' Roses</h3>
             <h5>Los Angeles</h5>
             <h6>Posted: 11 Apr, 2013</h6>

             <hr>
             <p>Guns 'n' Roses, a Los Angeles based band is looking for a lead guitarist to fill in the place of Slash who left the band a month back.</p>

             <p>Guns N' Roses was formed in March 1985 by singer Axl Rose and rhythm guitarist Izzy Stradlin of Hollywood Rose, along with lead guitarist Tracii Guns, bassist Ole Beich, and drummer Rob Gardner of L.A. Guns. The band coined its name by combining the names of both previous groups.</p>

             <p> After only a short time, during which they reportedly played just two or three shows, Beich was replaced by Duff McKagan, while Guns' lack of attendance at rehearsals led to his replacement by Slash. Gardner quit soon after and was replaced by Steven Adler. Stradlin had previously played with Slash in Hollywood Rose, while Slash had played with McKagan and Adler in Road Crew.</p>

             <hr>

             <div class="btn-group">
              <button href="#applyJam" role="button" data-toggle="modal" class="btn btn-orange">Apply for a jam!</button>
              <button href="#clarify" role="button" data-toggle="modal" class="btn btn-primary">Request clarifications</button>              
            </div>

            <button href="#report" role="button" data-toggle="modal" class="btn btn-danger pull-right" title="Report abuse"><i class="icon-flag icon-white"></i></button>
             
         </div>
         <div class="span3">
           <div class="openpost">
             <img src="http://media.metalhammer.co.uk/wp-content/uploads/2007/01/media/metalhammer/megadeth1508.gif" class="img-polaroid" width="200">
             <h4>Headbanger's Ball!</h4>
             <span class="tags">15-04-2013</span>
             <h5>Bangalore, IN</h5>
           </div>           
         </div>
     </div>
 </section>         

 <!-- Modal for application -->
    <div id="applyJam" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-white"></i></button>
        <h3 id="myModalLabel">Apply for Guns 'n' Roses</h3>
      </div>
      <div class="modal-body">
        <p>By confirming, you agree to share your personal information on Bandmate and apply for this opening.</p>
        <p>Plase add any additional details if required (optional)</p>
        <form class="form-horizontal" action="">
            
                <!-- <label class="control-label" for="description">Description</label> -->
                                               
                    <textarea name="description" id="description" cols="50" rows="5" class="span4"></textarea>
                                              
            
        </form>
      </div>
      <div class="modal-footer">
        <div class="btn-group">
            <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Cancel</button>
            <button class="btn btn-primary">Apply!</button>
        </div>
      </div>
    </div>  

    <!-- Modal for clarifications -->
    <div id="clarify" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-white"></i></button>
        <h3 id="myModalLabel">Clarifications from Guns 'n' Roses</h3>
      </div>
      <div class="modal-body">
        <p>Please send any clarifications that you might require from Gus 'n' Roses regarding this opning using this form</p>
        <p>Plase add any additional details if required (optional)</p>
        <hr>
        <form class="form-horizontal" action="">
            
                <!-- <label class="control-label" for="description">Description</label> -->
                   
                    <div class='control-group'>
                            <label class="control-label" for="shortDescription">Subject</label>
                            <div class="controls">                                
                                <input type="text" id="shortDescription" placeholder="" class="span3">
                            </div>                               
                        </div>
                        <div class='control-group'>
                            <label class="control-label" for="description">Message</label>
                            <div class="controls">                                
                                <textarea name="description" id="description" cols="30" rows="5" class="span3"></textarea>
                            </div>                               
                    </div>
                                            
                    
                                              
            
        </form>
      </div>
      <div class="modal-footer">
        <div class="btn-group">
            <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Cancel</button>
            <button class="btn btn-primary">Send</button>
        </div>
      </div>
    </div>   

    <!-- end of clarification modal -->    

    <!-- Modal for reporting -->
    <div id="report" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-white"></i></button>
        <h3 id="myModalLabel">Report Guns 'n' Roses</h3>
      </div>
      <div class="modal-body">
        <p>Please confirm the following before you report this post</p>
        <p>Plase add any additional details if required (optional)</p>
        <hr>
        <form class="form-horizontal" action="">           
                   
                    <div class='control-group'>
                        <div class='control-group'>
                            <label class="control-label" for="profileType" class="">Reason</label>
                            <div class="controls">
                                <select class="">
                                  <option>Explicit Content</option>
                                  <option>Fake Post</option>
                                  <option>Abuse</option>
                                  <option>Spam</option>
                                </select>
                            </div>                               
                        </div>                               
                        </div>
                        <div class='control-group'>
                            <label class="control-label" for="description">Message</label>
                            <div class="controls">                                
                                <textarea name="description" id="description" cols="30" rows="5" class="span3"></textarea>
                            </div>                               
                    </div>
                                            
                    
                                              
            
        </form>
      </div>
      <div class="modal-footer">
        <div class="btn-group">
            <!-- <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Close</button> -->
            <button class="btn btn-danger">Report</button>
        </div>
      </div>
    </div>   

    <!-- end of clarification modal -->    

 <?php include('footer.php'); ?>


