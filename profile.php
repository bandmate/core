 <?php 
 $pageTitle = 'Profile view';
 include('header.php'); ?>
 
    <div class="container page-margin">
        <div class="row-fluid">
           
            <div class="span2">
                <div class="row-fluid">

                    
                                         
                            <img src="http://images.instagram.com/profiles/profile_273328188_75sq_1361675419.jpg" width="150" height="150" class="img-polaroid">
                            <!-- <p><a href="#" class="btn" disabled="disabled"><i class="icon-edit"></i>&nbsp;Edit profile</a></p> -->
                            
                            <h5>James Hetfield</h5>
                            <ul style="list-style-type: none; margin-left: 0px;">
                                <li>Lead Vocalist, Guitarist</li>
                                <li>Los Angeles, CA</li>
                                <li>United States</li>
                                <li>
                                    <i class="icon-star icon-white"></i>
                                    <i class="icon-star icon-white"></i>
                                    <i class="icon-star icon-white"></i>
                                    <i class="icon-star icon-white"></i>
                                    <i class="icon-star icon-white"></i>
                                </li>
                            </ul>
                           
                            <div class="btn-group">
                            <button class="btn btn-inverse"><i class="icon-envelope icon-white"></i></button>
                            <button class="btn btn-inverse"><i class="icon-star icon-white"></i></button>
                            <button class="btn btn-inverse"><i class="icon-pencil icon-white"></i></button>
                            </div>
                        
                        
                </div>
            </div>
            <div class="span6" style="min-height: 500px;">
                <div class="row-fluid center-align">
                    
                    <!-- <p class="justify"  ><img src="http://batzbatz.com/uploads/posts/2011-11/1322240443_rockinrio.png" width="550" height="250" class="img-polaroid"></p>  
                    <h2 class="profile-heading cursive">Frontman of Metallica</h2>  -->
                </div>
                <div class="">

                    <ul class="nav nav-tabs" id="myTab">
                      <li class="active"><a href="#profile"><i class="icon-user icon-white"></i>&nbsp;Profile</a></li>
                      <li><a href="#media"><i class="icon-facetime-video icon-white"></i>&nbsp;Media</a></li>
                      <li><a href="#reviews"><i class="icon-pencil icon-white"></i>&nbsp;Reviews</a></li>
                      <li><a href="#messages"><i class="icon-envelope icon-white"></i>&nbsp;Messages</a></li>
                      <li><a href="#account"><i class="icon-cog icon-white"></i>&nbsp;Account</a></li>
                    </ul>

                    <div class="tab-content">
                      <div class="tab-pane active" id="profile">
                        <div class="profile-content justify">
                          <h2 class="profile-heading cursive tags">Frontman of Metallica</h2> 
                    
                            <p>James Alan Hetfield (born August 3, 1963) is the rhythm guitarist, co-founder, main songwriter, and lead vocalist for the American heavy metal band Metallica. Hetfield co-founded Metallica in October 1981 after answering a classified advertisement by drummer Lars Ulrich in the Los Angeles newspaper The Recycler, searching for band members. Since then, Metallica has won nine Grammy Awards and released nine studio albums, three live albums, four extended plays and 24 singles. In 2009, Hetfield was ranked number 8 in Joel McIver's book The 100 Greatest Metal Guitarists,and ranked twenty-fourth by Hit Parader on their list of the 100 Greatest Metal Vocalists of All Time.</p>
                            
                            <p>Hetfield was born August 3, 1963. He is of German, English, Irish and Scottish descent. He has two older half-brothers from his mother's first marriage and one younger sister. He attended Downey High School his freshman and sophomore years. He graduated from Orange County's Brea Olinda High School in 1981.</p>

                            <p>His father, Virgil, was a truck driver. His mother, Cynthia, was a light opera singer. The two divorced in 1976 when Hetfield was young. Virgil and Cynthia were very strict Christian Scientists, and in accordance with their beliefs, Hetfield's parents strongly disapproved of medicine or any other medical treatment and remained loyal to their faith even as Cynthia was dying from cancer. This upbringing became the inspiration for many of Hetfield's lyrics later in his career with Metallica, such as songs like "The God That Failed".</p>

                            

                        </div>
                      </div>
                      <div class="tab-pane" id="media">
                        <div class="profile-content">  
                        <h3>Media</h3> 
                        <div class="row-fluid">
                            <h4>videos</h4>                   
                            <p><iframe src="http://player.vimeo.com/video/3955537" class="" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe> <p><a href="http://vimeo.com/3955537"></a> </p></p>
                        </div>
                        <hr>
                        <div class="row-fluid">
                            <h4>audio</h4>
                            <p><iframe class="span12" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F29114972"></iframe></p>
                        </div>
                        </div>

                      </div>
                      <div class="tab-pane" id="reviews">
                        <div class="profile-content justify">
                          <h3>Reviews</h3>
                            <div class="reviews">
                              <a href="#"><i class="icon-trash icon-white pull-right"></i></a>
                              <h4>"The best frontman ever"</h4>
                              <p>- Ozzy Osbourne</p>                              
                            </div>
                            <div class="reviews">
                              <a href="#"><i class="icon-trash icon-white pull-right"></i></a>
                              <h4>"The best frontman ever"</h4>
                              <p>- Ozzy Osbourne</p>                              
                            </div>                  
                            <div class="reviews">
                              <a href="#"><i class="icon-trash icon-white pull-right"></i></a>
                              <h4>"The best frontman ever"</h4>
                              <p>- Ozzy Osbourne</p>                              
                            </div>
                            <div class="reviews">
                              <a href="#"><i class="icon-trash icon-white pull-right"></i></a>
                              <h4>"The best frontman ever"</h4>
                              <p>- Ozzy Osbourne</p>                              
                            </div>
                        </div>
                      </div>
                      <div class="tab-pane" id="messages">
                          
                          <div class="profile-content">
                          <h3>Inbox</h3>
                          <div class="accordion" id="inbox-accordion">
                            <div class="accordion-group">
                              <div class="accordion-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#inbox-accordion" href="#collapseOne">
                                  Audition results - Guns 'n' Roses 

                                  <button type="button" class="close" data-dismiss="" aria-hidden="true"><i class="icon-trash icon-white"></i></button>                           
                                </a>
                                
                              </div>
                              <div id="collapseOne" class="accordion-body collapse">
                                <div class="accordion-inner">
                                  <p>
                                    Hi, we are pleased to inform that we are very happy with your audition with Guns 'n' Roses last week and you have been shortlisted for our random jam session held for next weekend. Please participate to take the auditions forward.
                                  </p>

                                  <p>
                                    Kindly inform in case you are not comfortable with the day.
                                  </p>
                                  <p>Regards,</p>
                                  <p>Axl Rose</p>
                                </div>
                              </div>
                            </div>
                            <div class="accordion-group">
                              <div class="accordion-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#inbox-accordion" href="#collapseTwo">
                                  Request accepted - Woodstock 2013
                                  <button type="button" class="close" data-dismiss="" aria-hidden="true"><i class="icon-trash icon-white"></i></button> 
                                </a>
                              </div>
                              <div id="collapseTwo" class="accordion-body collapse">
                                <div class="accordion-inner">
                                  <p>Your request to participate for the Woodstock 2013 festival to be held in New York has been accepted based on your audition performance. To take this further, please complete the registration by emailing at <a href="mailto:2013@woodstock.com">2013@woodstock.com</a> along with the updated profiles of your bandmates.</p>
                                  <p>Woodstock Event Manager</p>
                                </div>
                              </div>
                            </div>
                          </div>
                          </div>
                      </div>
                      <div class="tab-pane" id="account">
                        <div class="profile-content">

                          <div class="row">
                          <button class="btn btn-inverse pull-right"><i class="icon-edit icon-white"></i>&nbsp; Edit</button>
                          </div>
                          

                          <dl class="dl-horizontal">
                            <dt>Username</dt>
                            <dd>jhetfield</dd>
                          </dl>
                          <dl class="dl-horizontal">
                            <dt>Email</dt>
                            <dd>james@hetfield.com</dd>
                          </dl>
                          <dl class="dl-horizontal">
                            <dt>Password</dt>
                            <dd>********</dd>
                          </dl>
                          <dl class="dl-horizontal">
                            <dt>First Name</dt>
                            <dd>James</dd>
                          </dl>
                          <dl class="dl-horizontal">
                            <dt>Last Name</dt>
                            <dd>Hetfield</dd>
                          </dl>
                        </div>
                      </div>
                    </div>

                    

                </div>
                    
            </div>
            <div class="span4">
                <div class="row-fluid">

                    
                                        
                            <img src="http://cdn.ebaumsworld.com/picture/Camel_Toe/s284581.jpg" width="150" height="150" class="img-polaroid">
                            <img src="http://files.musicmp3.ru/mcovers/alm80770.jpg" width="150" height="150" class="img-polaroid">
                            <img src="http://www.bangalorevibes.com/wp-content/uploads/2011/10/metallica-150x150.jpg" width="150" height="150" class="img-polaroid">
                            <img src="http://hyderabad.burrp.com/images/e/p/g/photo_hard-rock-cafe_banjara-hills_hyderabad@pg2yi60g_tsi_2_150.jpg" width="150" height="150" class="img-polaroid">
                            
                            
                            
                            
                             
                </div>           
        </div>        
    </div>
</div>    
<?php include('footer.php'); ?>
<script>
$('#myTab a').click(function (e) {
  e.preventDefault();
  $(this).tab('show');
})

  $(function () {
    $('#myTab a:first').tab('show');
  })
</script>