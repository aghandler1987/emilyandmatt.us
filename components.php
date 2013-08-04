<?php

function me_get_links(){
  /*return array(
      'Welcome' => '',
      'Our Story' => '/our_story',
      'Our Engagement' =>'/our_engagement',
      'Wedding Details' => '/wedding_details',
      'Vendors' => '/vendors',
      'Picture Gallery' => '/picture_gallery',
      'Contact Information' => '/contact_information',
      'Registries' => '/registries',
  );*/
  return array(
      'Welcome' => 'welcome',
      'Our Story' => '?area=our_story',
      'Our Engagement' =>'?area=our_engagement',
      'Wedding Details' => '?area=wedding_details',
      'Vendors' => '?area=vendors',
      'Picture Gallery' => '?area=picture_gallery',
      'Contact Information' => '?area=contact_information',
      'Registries' => '?area=registries',
  );
}

function me_get_nav($active = 'Welcome'){
  $nav = me_get_links();
  $output = '';
  $output .= '<ul id = "side-nav">';
  $active_class = '';
  foreach ($nav as $title=>$link){
    if (strtolower(str_replace("?area=",'',$link)) == $active)
      $active_class = 'active';
    if ($link == 'welcome')
      unset($link);
    $output .= '<li class = "nav-item ' . $active_class .'">';
    $output .= '<a href = "index.php' . $link .'" class = "nav-item-link ' . $active_class .'">' . $title .'</a>';
    $output .= '</li>';
    $active_class = '';
  }
  $output .='</ul>';
  return $output;
}

function me_get_body($area = 'welcome'){
  $output = '';
  switch ($area){
    case 'welcome':
      $output .=       
      '<div id ="welcome-wrapper">
        <h1 class ="area-heading">Welcome!</h1>
        <img class ="image-wrap-right home-image" src="images/matt_emily_main.jpg"/>
        <p class ="body">Welcome to our wedding website. We are thrilled for you to be a part of our wedding and cannot wait for May 24, 2014!  For those who are able to attend, you can find all the information you may need for the big day.  And for those of you who are unable to attend, we thought this would be a great way for us to share our experience with you.  
        </p>
        <p class ="body">We are so happy to have so many friends and family taking part in our wedding.  Thank you again for being a part of our lives!        
        </p> 
      </div>';
      break;
  case 'vendors':
      $output .=       
      '<div id ="welcome-wrapper">
        <h1 class ="area-heading">Welcome!</h1>
        <img class ="image-wrap-right home-image" src="images/matt_emily_main.jpg"/>
        <p class ="body">Welcome to our wedding website. We are thrilled for you to be a part of our wedding and cannot wait for May 24, 2014!  For those who are able to attend, you can find all the information you may need for the big day.  And for those of you who are unable to attend, we thought this would be a great way for us to share our experience with you.  
        </p>
        <p class ="body">We are so happy to have so many friends and family taking part in our wedding.  Thank you again for being a part of our lives!        
        </p> 
        <p class ="body">Welcome to our wedding website. We are thrilled for you to be a part of our wedding and cannot wait for May 24, 2014!  For those who are able to attend, you can find all the information you may need for the big day.  And for those of you who are unable to attend, we thought this would be a great way for us to share our experience with you.  
        </p>
        <p class ="body">We are so happy to have so many friends and family taking part in our wedding.  Thank you again for being a part of our lives!        
        </p> 
        <p class ="body">Welcome to our wedding website. We are thrilled for you to be a part of our wedding and cannot wait for May 24, 2014!  For those who are able to attend, you can find all the information you may need for the big day.  And for those of you who are unable to attend, we thought this would be a great way for us to share our experience with you.  
        </p>
        <p class ="body">We are so happy to have so many friends and family taking part in our wedding.  Thank you again for being a part of our lives!        
        </p> 
        <p class ="body">Welcome to our wedding website. We are thrilled for you to be a part of our wedding and cannot wait for May 24, 2014!  For those who are able to attend, you can find all the information you may need for the big day.  And for those of you who are unable to attend, we thought this would be a great way for us to share our experience with you.  
        </p>
        <p class ="body">We are so happy to have so many friends and family taking part in our wedding.  Thank you again for being a part of our lives!        
        </p> 
      </div>';
      break;
    case 'registries':
      $output .= 
      '<div id ="registry-wrapper">
        <h1 class = "area-heading">Registries</h1>
        <p class ="body">As we look forward to building a home together, here you can find a wish-list of some of our favorite things.  Click on the button to access the registry:  </p>
        <div id = "registry-boxes-wrapper">
          <div class = "registry-row">
            <div class = "registry-box">
              <a target="_blank" href = "http://www.crateandbarrel.com/Gift-Registry/Emily-Uiberall-and-Matthew-Handler/r5056046"><img class ="registry-img" src = "images/crate_and_barrel.png"></a>
            </div>

            <div class = "registry-box">
              <a target="_blank" href = "http://www1.bloomingdales.com/registry/wedding/guest/?registryId=2072514"><img class ="registry-img" src = "images/bloomingdales.png"></a>
            </div>
            
          </div>
          
          <div class = "registry-row">
            <div class = "registry-box">
              <a target="_blank" href = "https://secure.williams-sonoma.com/registry/h9bffjwwjg/registry-list.html"><img class ="registry-img" src = "images/william_sonoma.png"></a>
            </div>

            <div class = "registry-box">
              <a target="_blank" href = "https://www.weddingrepublic.com/matthewandemily"><img class ="registry-img" src = "images/wedding_republic.png"></a>
            </div>
            
          </div>
        </div>
       </div>';
      break;
    
    default:
      $output .=
      '<div id = "coming-soon-wrapper">
        <h1 class = "area-heading coming-soon-heading">Coming Soon</h1>
        <h1 class = "area-heading coming-soon-sub-heading">Please check back soon!</h1>
      </div>';
  }
  
  return $output;
}

function me_get_footer($area = 'Welcome'){
  switch ($area){
    case 'welcome':
      $output .=       
      '<div id = "footer-wrapper">
          <p class="body">
		
        </div>';
      break;
    case 'registries':
      $output .= 
      '<div id = "footer-wrapper">
          <p class="body">
		
        </p>
        </div>';
      break;
    default:
      $output .=
      '<div id = "footer-wrapper">
          <p class="body">
		
        </p>
        </div>';
    }    
    return $output;
}