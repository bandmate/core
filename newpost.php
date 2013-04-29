 <?php 
 $pageTitle = 'Post new open positions';
 include('header.php'); ?>
    <section class="hero-unit">
        <div class="container">
             <div class="row-fluid">
                 <div class="span8">                   
                    <h2>Add new posts</h2>
                </div>
            </div>
        </div>
        <div class="container">
             <div class="row-fluid">
                 <div class="">
                    <form class="form-horizontal" action="">
                        <div class='control-group'>
                            <label class="control-label" for="inputTitle">Title</label>
                            <div class="controls">
                                <input type="text" id="inputTitle" placeholder="">
                            </div>                               
                        </div>
                        <div class='control-group'>
                            <label class="control-label" for="shortDescription">Short Description</label>
                            <div class="controls">                                
                                <input type="text" id="shortDescription" placeholder="">
                            </div>                               
                        </div>
                        <div class='control-group'>
                            <label class="control-label" for="description">Description</label>
                            <div class="controls">                                
                                <textarea name="description" id="description" cols="30" rows="5"></textarea>
                            </div>                               
                        </div>
                        <div class='control-group'>
                            <label class="control-label" for="location">Description</label>
                            <div class="controls">                                
                                <input type="text" name="location" id="location" placeholder="">
                            </div>                               
                        </div>
                        <!-- <div class='control-group'>
                            <label class="control-label" for="inputTags">Tags</label>
                            <div class="controls">                                
                                <input type="text" name="tags" placeholder="Tags" class="tagManager"/><p>&nbsp;</p>
                                <ul id="demo3"></ul>
                            </div>                               
                        </div> -->
                        <div class="control-group">
                            <div class="controls">
                              <!-- <label class="checkbox">
                                <input type="checkbox"> Remember me
                              </label> -->
                              <button type="submit" class="btn btn-primary">Post</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="center-align">
        
    </section>
<?php include('footer.php'); ?>  
<script src="js/tagit.js"></script>  
<script>
 $(function () {
    $('#demo3').tagit({tagSource:availableTags, triggerKeys:['enter', 'comma', 'tab']});
    $("#demo3GetTags").click(function () { showTags($("#demo3").tagit("tags")) });
    $('#demo2ResetTags').click(function () {
        $('#demo2').tagit('reset');
    });

    function showTags(tags) {
        console.log(tags);
        var string = "Tags (label : value)\r\n";
        string += "--------\r\n";
        for (var i in tags)
            string += tags[i].label + " : " + tags[i].value + "\r\n";
        alert(string);
    }

    setInterval("$('#fork').effect('pulsate', { times:1 }, 500);", 5000);
</script>

