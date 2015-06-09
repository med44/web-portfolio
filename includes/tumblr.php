<?php
 //http://stocklamp.tumblr.com/post/274675902/putting-your-tumblr-posts-on-your-websites-the-easy-way
 //http://finlay.tumblr.com/post/529010691/embed-tumblr-into-your-website
 //http://www.tumblr.com/docs/en/api#api_read
 					
 $xml = simplexml_load_file('http://webretailcompany.tumblr.com/api/read/xml?num=3');
 $posts = $xml->xpath("/tumblr/posts/post");
 					
 foreach($posts as $post) { ?> 
           
 <div class="post post-<?php echo $post['type'] ?>">
 <div class="post-date"><a href="<?php echo $post['url-with-slug']; ?>"><?php echo date("jS D M, H:i",strtotime($post['date'])); ?></a></div>
 
 <?php if ($post['type'] == 'regular') {  ?>
 <div class="post-title" id="post-<?php echo $post['id'];?>"><a href="<?php echo $post['url-with-slug']; ?>"><?php echo $post->{'regular-title'}; ?></a></div>
 <?php } ?>
 
 <?php if ($post['type'] == 'conversation') {  ?>
 <div class="post-title" id="post-<?php echo $post['id'];?>"><a href="<?php echo $post['url-with-slug']; ?>"><?php echo $post->{'conversation-title'}; ?></a></div>
  <?php } ?>
             
 <div class="post-body">
 
 <?php if ($post['type'] == 'regular') {  
 														
   $small_post = substr($post->{'regular-body'},0,539); ?>
                 
   <?php echo $small_post . ' &hellip;'; } ?>
 
   <?php if ($post['type'] == 'quote') {  ?>
     <?php echo $post->{'quote-text'}; ?>
     <?php echo $post->{'quote-source'}; ?>
   <?php } ?>
 
   <?php if ($post['type'] == 'photo') {  ?>
     <?php echo $post->{'photo-caption'}; ?>
     <?php echo $post->{'photo-set'}; ?>
     <?php echo $post->{'photo-url-500'}; ?>
     <?php echo $post->{'video-source'}; ?>
     <?php echo $post->{'video-player'}; ?>
   <?php } ?>
 
   <?php if ($post['type'] == 'link') {  ?>
     <?php echo $post->{'link-text'}; ?>
     <p><a href="<?php echo $post->{'link-url'}; ?>"><?php echo $post->{'link-url'}; ?></a>
     <?php echo $post->{'link-description'}; ?>
   <?php } ?>
 
   <?php if ($post['type'] == 'conversation') {  ?>
     <?php echo $post->{'conversation-text'}; ?>
   <?php } ?>
 
   <?php if ($post['type'] == 'video') {  ?>
     <?php echo $post->{'video-caption'}; ?>
     <?php echo $post->{'video-source'}; ?>
     <?php echo $post->{'video-player'}; ?>
   <?php } ?>
               
   <?php if ($post['type'] == 'conversation') {  ?>
     <?php echo $post->{'audio-caption'}; ?>
     <?php echo $post->{'audio-player'}; ?>
     <?php echo $post->{'audio-plays'}; ?>
   <?php } ?>
 
 </div><!-- //end post-body -->
             
 <p><a class="more" href="<?php echo $post['url-with-slug']; ?>">&raquo; Read more</a></p>
 </div><!-- //end post-->
 
<?php } ?>