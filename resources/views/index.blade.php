<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Web Tech</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <link id="bootstrap-style" href= "{{ asset("assets/css2/bootstrap.min.css") }}" rel="stylesheet">
<link href= "{{ asset("assets/css2/style.css")}}" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript">
function clearText(field) {
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>
</head>
<body>
  <script src="{{ asset("public/assets/js/jquery.js") }}" type="text/javascript"></script>
  <script src="{{ asset("public//assets/js/bootstrap.js") }}" type="text/javascript"></script>

  <script>
  var request;
  function myfunction(){
      
            var a=document.getElementById('type').value;
            if(a=="1")
            {
              location.href="{{URL::to('adminindex')}}";
            }
            else
            {
              location.href="{{URL::to('userindex')}}";
            }
          }

           </script>
<div id="header">
  <div id="site_title"> <a href="#">Technology Blog - Free CSS Template</a> </div>
  <div id="header_right"> <a href="#"><img src="{{ asset("assets/images1/twitter.png")}}" alt="" /></a><a href="#"><img src="{{ asset("assets/images1/rss.png")}}" alt="" /></a>
    <div id="newsletter_box">
      <form action="#" method="get">
        <input type="text" id="user" name="user" class="newsletter_email" value="Enter your email address"  onfocus="clearText(this)" onblur="clearText(this)" />
        <input style="font-weight: bold;" type="submit" name="submit" id="submit" value="" />
      </form>
    </div>
  </div>
  <div class="cleaner"></div>
</div>

<!-- end of header -->
<div id="menu_wrapper">
  <div id="menu">
    <ul>
      <li><a href="#" class="current"><span></span>Home</a></li>
      <li><a href="#"><span></span>Web 2.0</a></li>
      <li><a href="#"><span></span>CSS Templates</a></li>
      <li><a href="#"><span></span>Graphics</a></li>
      <li><a href="#"><span></span>Inspirations</a></li>
      <li><a href="#"><span></span>Flash Files</a></li>
    </ul>
  </div>
</div>
<!-- end of menu -->
<div id="main"> <span class="tm_bottom"></span>
  <div id="content">
    <div class="content_box">
      <h1>Short Info of <span>Web Tech Blog</span></h1>
      <p>Vivamus a massa. Donec iaculis felis id neque. Praesent varius egestas velit. Donec a massa ut pede pulvinar vulputate. Nulla et augue. Sed eu nunc quis pede tristique suscipit. Nam sit amet justo vel libero tincidunt dignissim. Cras magna velit, pellentesque mattis, faucibus vitae, feugiat vitae, sapien. Fusce ac orci sit amet velit ultrices condimentum. Integer imperdiet odio ac eros. Ut id massa. Nullam nunc. Vivamus sagittis varius lorem.</p>
    </div>
    <div class="post_box">
      <div class="header">
        <h2><a href="#">User Login</a></h2>
        
      <img src="{{ asset("assets/images1/image_01.jpg")}}" alt="" />
      <div class="pb_right">
      @if($types)
      <select class="selectpicker" id="type" onchange="myfunction()">
        <option value="0">..select..</option>
         @foreach($types as $id=>$t)
        
          <option value="{{ $id}}">{{ $t }}</option>

        @endforeach
      @endif
    
  </select>
       </div>
      </div>
      <div class="cleaner"></div>
    </div>
  </div>
    <div class="post_box">
      <div class="header">
        <h2><a href="#">Quisque dictum pharetra neque</a></h2>
        <div class="tag"><strong>Tags:</strong> <a href="#">Photography</a>, <a href="#">Free Photos</a>, <a href="#">Royalty</a></div>
        <span class="posted_date"> 25 Feb <strong>2010</strong> </span> </div>
      <img src="{{ asset("assets/images1/image_02.jpg")}}"alt="" />
      <div class="pb_right">
        <p>Aliquam pretium porta odio. Fusce quis diam sit amet tortor luctus pellentesque. Donec accumsan urna non elit tristique mattis. Vivamus fermentum orci viverra nisl. In nec magna id ipsum aliquam dictum. Donec euismod enim et risus. Nunc dictum, massa non dignissim commodo, metus quam vehicula lorem, et dignissim enim augue vitae pede. D</p>
        <div class="comment"><a href="#">Comment</a></div>
      </div>
      <div class="cleaner"></div>
    </div>
    <div class="post_box">
      <div class="header">
        <h2><a href="#">Quisque dictum pharetra neque</a></h2>
        <div class="tag"><strong>Tags:</strong> <a href="#">Flash</a>, <a href="#">Free Files</a>, <a href="#">AS3</a></div>
        <span class="posted_date"> 25 Feb <strong>2010</strong> </span> </div>
      <img src="{{ asset("assets/images1/image_02.jpg")}}" alt="" />
      <div class="pb_right">
        <p>Curabitur eleifend congue leo. Donec a purus vel purus sollicitudin placerat. Nunc at sem. Sed pellentesque placerat augue. Mauris pede nisl, placerat nec, lobortis vitae, dictum sed, neque.</p>
        <div class="comment"><a href="#">Comment</a></div>
      </div>
      <div class="cleaner"></div>
    </div>
    <div class="post_box pb_last">
      <div class="header">
        <h2><a href="#">Mauris quis nulla sed ipsum pretium sagittis</a></h2>
        <div class="tag"><strong>Tags:</strong> <a href="#">HTML</a>, <a href="#">Free Templates</a>, <a href="#">CSS</a></div>
        <span class="posted_date"> 25 Feb <strong>2010</strong> </span> </div>
      <img src="{{ asset("assets/images1/image_03.jpg")}}" alt="" />
      <div class="pb_right">
        <p>Quisque in diam a justo condimentum molestie. Vivamus a velit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur quis velit quis tortor tincidunt aliquet. Vivamus leo velit, convallis id, ultrices sit amet, tempor a, libero.</p>
        <div class="comment"><a href="#">Comment</a></div>
      </div>
      <div class="cleaner"></div>
    </div>
  </div>
  <div id="sidebar">
    <div class="sidebar_box">
      <h3>Tag Cloud</h3>
      <div class="sb_content"> <a href="#" style="font-size:12px">Aenean</a> <a href="#" style="font-size:11px">Cursus</a> <a href="#" style="font-size:16px">Maecenas</a> <a href="#" style="font-size:11px">Aliquam Ligula</a> <a href="#" style="font-size:20px">Egestas</a> <a href="#" style="font-size:16px">Suscipit</a> <a href="#" style="font-size:12px">Sapien</a> <a href="#" style="font-size:28px">Dignissim</a> <a href="#" style="font-size:14px">Vestibulum</a> <a href="#" style="font-size:12px">Lorem</a> <a href="#" style="font-size:14px">Urnain</a> <a href="#" style="font-size:20px">Neque</a> <a href="#" style="font-size:12px">Aenean</a> </div>
    </div>
</body>
</html>
