 <?php
 
 $pageTitle = 'Find bandmates, gigs and connect with musicians';
 include('header.php'); ?>
    <section class="center-align hero-unit">
        <div class="container">
             <div class="row-fluid">
                 <div class="span12">
                    <h1 class="cursive">Do you wanna make a deal?</h1> 
                    <p>&nbsp;</p>
                    <form class="form-search span12">
                      <div class="input-append span12">
                        <input type="text" class="search-query span5" placeholder="how does it feel?">
                        <button type="submit" class="btn btn-orange"><i class="icon-search icon-white"></i></button>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </section>    
    
        <div class="container">
            <div class="row-fluid">
            </div>
        </div>
    </section>
    
    <div class="container">
        <h3 class="center-align">Postings</h3>
            <div class="row-fluid">
                <a href="openpost.php">
                    <div class="span3 bulletin">
                        <h5>Rhythm Guitarist wanted</h5>                        
                        <p>Megadeth is looking for a rhythm guitarist for upcoming Woodstock fest.</p>
                        <h6>Location: Bangalore</h6>   
                        Tags: <span class="tags">bangalore, guitarist, metal</span>                    
                    </div>                   
                </a>
                <a href="openpost.php">
                    <div class="span3 bulletin">
                        <h5>Slayer</h5>                        
                        <p>Slayer is an American thrash metal band formed in Huntington Park, California in 1981. </p>
                        <h6>Location: New Delhi</h6>
                        Tags: <span class="tags">bangalore, guitarist, metal</span>
                    </div>
                </a>
                <a href="openpost.php">
                    <div class="span3 bulletin">
                        <h5>Metallica</h5>                        
                        <p>Metallica is an American heavy metal band from Los Angeles, California formed in the year 1981.</p>
                        <h6>Location: Bangalore</h6>
                        Tags: <span class="tags">bangalore, guitarist, metal</span>
                    </div>
                </a>
                <a href="openpost.php">
                    <div class="span3 bulletin">
                        <h5>Anthrax</h5>                        
                        <p>Anthrax is an American heavy metal band from New York City formed in 1981.</p>
                        <h6>Location: Kolkata</h6>
                        Tags: <span class="tags">bangalore, guitarist, metal</span>
                    </div>  
                </a>
            </div>
        </div>
    </div>

    <div class="container">
            <div class="row-fluid">
                <a href="openpost.php">
                    <div class="span3 bulletin">
                        <h5>Rhythm Guitarist wanted</h5>                        
                        <p>Megadeth is looking for a rhythm guitarist for upcoming Woodstock fest.</p>
                        <h6>Location: Bangalore</h6>   
                        Tags: <span class="tags">bangalore, guitarist, metal</span>                    
                    </div>                   
                </a>
                <a href="openpost.php">
                    <div class="span3 bulletin">
                        <h5>Slayer</h5>                        
                        <p>Slayer is an American thrash metal band formed in Huntington Park, California in 1981. </p>
                        <h6>Location: New Delhi</h6>
                        Tags: <span class="tags">bangalore, guitarist, metal</span>
                    </div>
                </a>
                <a href="openpost.php">
                    <div class="span3 bulletin">
                        <h5>Metallica</h5>                        
                        <p>Metallica is an American heavy metal band from Los Angeles, California formed in the year 1981.</p>
                        <h6>Location: Bangalore</h6>
                        Tags: <span class="tags">bangalore, guitarist, metal</span>
                    </div>
                </a>
                <a href="openpost.php">
                    <div class="span3 bulletin">
                        <h5>Anthrax</h5>                        
                        <p>Anthrax is an American heavy metal band from New York City formed in 1981.</p>
                        <h6>Location: Kolkata</h6>
                        Tags: <span class="tags">bangalore, guitarist, metal</span>
                    </div>  
                </a>
            </div>
        </div>
    </div>

    <div class="container">
        
        <div class="row-fluid top-border">
            <div class="span8">
                <h3>Featured Bands</h3>
                    <div class="row-fluid featured">
                        <div class="span3">
                            <img src="http://media.metalhammer.co.uk/wp-content/uploads/2007/01/media/metalhammer/megadeth1508.gif" class="img-polaroid">
                        </div>
                        <div class="span9">
                            <div class="row-fluid">
                                <p>This is some text that will be filling up this space.</p>
                            </div>
                            <div class="row-fluid">
                                <p>This is some text that will be filling up this space.</p>
                            </div>
                            <div class="row-fluid">
                                <p>This is some text that will be filling up this space.</p>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="span3 pull-right">
                <h3>Ads</h3>
                    <div class="row-fluid featured">
                        <div class="span12 center-align">
                            <img src="http://cdn.ebaumsworld.com/picture/Camel_Toe/s284581.jpg" class="img-polaroid">
                         </div>   
                        
                    </div>
            </div>
        </div>        

        <!-- section 2 -->

        <div class="row-fluid">
            <div class="span8">
                <h3>Featured Shows</h3>
                    <div class="row-fluid featured">
                        <div class="span3">
                            <img src="http://media.metalhammer.co.uk/wp-content/uploads/2007/01/media/metalhammer/megadeth1508.gif" class="img-polaroid">
                        </div>
                        <div class="span9">
                            <div class="row-fluid">                                
                                <p>This is some text that will be filling up this space.</p>
                            </div>
                            <div class="row-fluid">
                                <p>This is some text that will be filling up this space.</p>
                            </div>
                            <div class="row-fluid">
                                <p>This is some text that will be filling up this space.</p>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="span3 pull-right">
                
            </div>
        </div> 


    </div>    
<?php include('footer.php'); ?>
<script>
    $(document).ready(function(){
        $('.carousel').carousel({
            interval: 5000
        });
    });
</script>
