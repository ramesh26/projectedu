<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Institute</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" crossorigin="anonymous">
        <link rel='stylesheet' href='{{ env("APP_URL") }}/css/fontello.min.css' />


<link rel='stylesheet' id='bp-parent-css-css' href='https://seventhqueen.com/themes/kleo/wp-content/themes/kleo/buddypress/css/buddypress.css?ver=2.9.2' type='text/css' >
    <style>
    table th {
    font-size: 13px;
}
table td {
    font-size: 13px;
}
    #buddypress div#item-nav ul li a {
    color: #20435f;
    font-size: 10px !important;
}
#buddypress div#item-nav ul li a:before
{
        font-size: 2.8rem !important;
}
a:hover
{
    text-decoration: none;
}
#header-cover-image {
    background-image: url(https://seventhqueen.com/themes/kleo/wp-content/uploads/buddypress/members/1/cover-image/58a1cdb6dd967-bp-cover-image.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center !important;
    height: 500px;
}
#buddypress div#item-nav ul li:hover a {
    color: white;
    background: #20435f;
}
#buddypress div#item-nav ul li:hover a span {
    background: #fff;
    color: #20435f;
}
.item-list-tabs ul li a
{
       color: #565555;
}
select#activity-filter-by {
    padding: 5px;
    color: #20435f;
}
#buddypress div.item-list-tabs#subnav {
    background: #90b4cb !important;
 
}
#buddypress div#item-nav {
    border: 0px !important;
    height: 90px !important;
}
#buddypress div.item-list-tabs#subnav ul li.last
{
    margin-top: 0px !important;
    background: rgba(83, 111, 128, 0.9);
    color: #FFFF;
}
#buddypress div.item-list-tabs#subnav
{
    margin:0px !important;
}
#buddypress div.item-list-tabs#subnav ul li {

    padding: 9px !important;
}
#buddypress div.item-list-tabs#subnav ul li.selected a, #buddypress div.item-list-tabs#subnav ul li.current a {
    color: #FFFFFF !important;
}
select#activity-filter-by {
    background: none;
    color: #fff;
    border: 1px solid;
}
ul.list-group.sidemenu li {
    background: #f8f8f8;
    border-radius: 0px;
    text-transform: uppercase;
        font-size: 11px;
}
ul.list-group.sidemenu1 li {
    border-radius: 0px;
    text-transform: uppercase;
    font-size: 13px;
    background: #20435f;
    padding: 6px;
    text-align: center;
}
li.list-group-item i
{
        color: #ffffff;
    background: #20435f;
   padding: 5px;
}
ul.list-group.sidemenu a {
    color: #20435f;
}
li.list-group-item:hover a {
    color: #90b4cb;
}
.bread {
    background: #d6d6d6;
}
.bread .breadcrumb {
    background: #d6d6d6;
        margin: 0px;
}
li.breadcrumb-item a {
    color: #20435f;
    font-size: 11px;
}
.breadcrumb>li+li:before
{
        color: #20435f;
}
.breadcrumb>.active {
    color: #777;
    font-size: 11px;
}

#item-header > #item-header-avatar, #item-header > #item-header-content {
    z-index: 2;
    position: relative;
}

body.is-user-profile #item-header-avatar {
    border-width: 6px;
}
body.is-user-profile #item-header-avatar {
    box-shadow: none;
    border-color: rgba(255,255,255,0.2) !important;
}
body.is-user-profile #item-header-avatar {
    background: transparent;
}
body.is-user-profile div#item-header div#item-header-content {
    z-index: 2;
    position: relative;
}
 div#item-header div#item-header-content {
    opacity: 1;
    transition: opacity 0.4s, height 0.4s;
}
#header-cover-image {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background-size: cover;
    z-index: -1;
}
div#backgroundimg {
    height: 400px;
}
div#item-header-avatar {
    text-align: center;
    position: absolute;
    left: 46%;
    top: 35%;
}
div#item-header-content {
    text-align: center;
    position: absolute;
    left: 48%;
    top: 60%;
    color: #FFF;
}
span.count {
    background: #ff0000ad;
    color: #FFF;
}
/**
 * Oscuro: #283035
 * Azul: #03658c
 * Detalle: #c7cacb
 * Fondo: #dee1e3
 ----------------------------------*/
 * {
     margin: 0;
    padding: 0;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
 }

 a {
    color: #03658c;
    text-decoration: none;
 }

ul {
    list-style-type: none;
}

body {
    font-family: 'Roboto', Arial, Helvetica, Sans-serif, Verdana;

}

/** ====================
 * Lista de Comentarios
 =======================*/


.comments-container h1 {
    font-size: 36px;
    color: #283035;
    font-weight: 400;
}

.comments-container h1 a {
    font-size: 18px;
    font-weight: 700;
}

.comments-list {
    margin-top: 30px;
    position: relative;
}

/**
 * Lineas / Detalles
 -----------------------*/
.comments-list:before {
    content: '';
    width: 2px;
    height: 100%;
    background: #c7cacb;
    position: absolute;
    left: 32px;
    top: 0;
}

.comments-list:after {
    content: '';
    position: absolute;
    background: #c7cacb;
    bottom: 0;
    left: 27px;
    width: 7px;
    height: 7px;
    border: 3px solid #dee1e3;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
}

.reply-list:before, .reply-list:after {display: none;}
.reply-list li:before {
    content: '';
    width: 60px;
    height: 2px;
    background: #c7cacb;
    position: absolute;
    top: 25px;
    left: -55px;
}


.comments-list li {
    margin-bottom: 15px;
    display: block;
    position: relative;
}

.comments-list li:after {
    content: '';
    display: block;
    clear: both;
    height: 0;
    width: 0;
}

.reply-list {
    padding-left: 88px;
    clear: both;
    margin-top: 15px;
}
/**
 * Avatar
 ---------------------------*/
.comments-list .comment-avatar {
    width: 65px;
    height: 65px;
    position: relative;
    z-index: 99;
    float: left;
    border: 3px solid #FFF;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
    -webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.2);
    -moz-box-shadow: 0 1px 2px rgba(0,0,0,0.2);
    box-shadow: 0 1px 2px rgba(0,0,0,0.2);
    overflow: hidden;
}

.comments-list .comment-avatar img {
    width: 100%;
    height: 100%;
}

.reply-list .comment-avatar {
    width: 50px;
    height: 50px;
}

.comment-main-level:after {
    content: '';
    width: 0;
    height: 0;
    display: block;
    clear: both;
}
/**
 * Caja del Comentario
 ---------------------------*/
.comments-list .comment-box {
    width: 680px;
    float: right;
    position: relative;
    -webkit-box-shadow: 0 1px 1px rgba(0,0,0,0.15);
    -moz-box-shadow: 0 1px 1px rgba(0,0,0,0.15);
    box-shadow: 0 1px 1px rgba(0,0,0,0.15);
}

.comments-list .comment-box:before, .comments-list .comment-box:after {
    content: '';
    height: 0;
    width: 0;
    position: absolute;
    display: block;
    border-width: 10px 12px 10px 0;
    border-style: solid;
    border-color: transparent #FCFCFC;
    top: 8px;
    left: -11px;
}

.comments-list .comment-box:before {
    border-width: 11px 13px 11px 0;
    border-color: transparent rgba(0,0,0,0.05);
    left: -12px;
}

.reply-list .comment-box {
    width: 610px;
}
.comment-box .comment-head {
    background: #FCFCFC;
    padding: 10px 12px;
    border-bottom: 1px solid #E5E5E5;
    overflow: hidden;
    -webkit-border-radius: 4px 4px 0 0;
    -moz-border-radius: 4px 4px 0 0;
    border-radius: 4px 4px 0 0;
}

.comment-box .comment-head i {
    float: right;
    margin-left: 14px;
    position: relative;
    top: 2px;
    color: #A6A6A6;
    cursor: pointer;
    -webkit-transition: color 0.3s ease;
    -o-transition: color 0.3s ease;
    transition: color 0.3s ease;
}

.comment-box .comment-head i:hover {
    color: #03658c;
}

.comment-box .comment-name {
    color: #283035;
    font-size: 14px;
    font-weight: 700;
    float: left;
    margin-right: 10px;
}

.comment-box .comment-name a {
    color: #283035;
}

.comment-box .comment-head span {
    float: left;
    color: #999;
    font-size: 13px;
    position: relative;
    top: 1px;
}

.comment-box .comment-content {
    background: #FFF;
    padding: 12px;
    font-size: 15px;
    color: #595959;
    -webkit-border-radius: 0 0 4px 4px;
    -moz-border-radius: 0 0 4px 4px;
    border-radius: 0 0 4px 4px;
}

.comment-box .comment-name.by-author, .comment-box .comment-name.by-author a {color: #03658c;}
.comment-box .comment-name.by-author:after {
    content: 'autor';
    background: #03658c;
    color: #FFF;
    font-size: 12px;
    padding: 3px 5px;
    font-weight: 700;
    margin-left: 10px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
}

/** =====================
 * Responsive
 ========================*/
@media only screen and (max-width: 766px) {
    .comments-container {
        width: 480px;
    }

    .comments-list .comment-box {
        width: 390px;
    }

    .reply-list .comment-box {
        width: 320px;
    }
}
</style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top" style="margin: 0px;">
        <div class="container">
            <div class="navbar-header">
                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    Institute Application
                </a>
            </div>
            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
               <!--  <ul class="nav navbar-nav">
                   
                    <li><a href="{{ route('users.index') }}">Users</a></li>
                    <li><a href="{{ route('roles.index') }}">Roles</a></li>
                    <li><a href="{{ route('itemCRUD2.index') }}">Blogs</a></li>
                </ul> -->
                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                      
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                              <img src="https://organicthemes.com/demo/profile/files/2012/12/profile_img.png" style="width: 30px;height: 30px;border-radius: 24px;"> Welcome {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a></li>
                                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    <div class="bread">
    <div class="container">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Library</a></li>
    <li class="breadcrumb-item active" aria-current="page">Data</li>
  </ol>
</div>
</div>
   @if (Auth::guest())
                      
                    @else
<div id="backgroundimg">
<div id="header-cover-image"></div>
<div id="item-header-avatar" class="rounded">
        <a href="https://seventhqueen.com/themes/kleo/members/kleoadmin/">

            <img src="https://organicthemes.com/demo/profile/files/2012/12/profile_img.png" class="avatar user-1-avatar avatar-150 photo" width="150" height="150" alt="Profile picture of Jonathan Doe" style="border-radius: 100%;border: 6px solid #00000063;
">
        </a>
        <span class="kleo-online-status hover-tip click-tip" data-toggle="tooltip" data-container="body" data-title="active 1 day, 23 hours ago" data-placement="top" data-original-title="" title=""></span>   </div>
        <div id="item-header-content">

                    <h4 class="user-nicename hover-tip click-tip" data-toggle="tooltip" data-container="body" data-title="active 1 day, 23 hours ago" data-placement="bottom" data-original-title="" title="">@kleoadmin</h4>
        
        <!--<span class="activity"></span>-->

        
        <div id="item-meta">

            
                <div id="latest-update">

                    Hello everyone!!! 
                </div>

            
            <div id="item-buttons"></div><!-- #item-buttons -->

            
        </div><!-- #item-meta -->

    </div>
</div>
<br>
@endif
    <div class="container">
                  <div class="row">
                     @if (Auth::guest())
                      
                    @else
                    <div class="col-md-1" style="padding: 0px;width: 42px;">
                    <ul class="list-group sidemenu1">
                    <li class="list-group-item"><i class="fa fa-search" aria-hidden="true"></i></li>
                      <li class="list-group-item"><i class="fa fa-calendar" aria-hidden="true"></i></li>
                        <li class="list-group-item"><i class="fa fa-users" aria-hidden="true"></i></li>
                          <li class="list-group-item"><i class="fa fa-folder-open-o" aria-hidden="true"></i>  </li>
                            <li class="list-group-item"><i class="fa fa-tasks" aria-hidden="true"></i> </li>
                              <li class="list-group-item"><i class="fa fa-file" aria-hidden="true"></i></li>
                              <li class="list-group-item"><i class="fa fa-newspaper-o" aria-hidden="true"></i></li>
                                <li class="list-group-item"><i class="fa fa-book" aria-hidden="true"></i></li>
                                  <li class="list-group-item"><i class="fa fa-comments" aria-hidden="true"></i>  </li>
                  </ul>
                    </div>
                    <div class="col-md-2">
                  <ul class="list-group sidemenu">
                    <li class="list-group-item"><a href="{{ route('itemCRUD2.index') }}">Analytics</a></li>
                      <li class="list-group-item"><a href="{{ route('itemCRUD2.index') }}">calender</a></li>
                        <li class="list-group-item"><a href="{{ route('itemCRUD2.index') }}">my community</a></li>
                          <li class="list-group-item"><a href="{{ route('itemCRUD2.index') }}">knowledge base</a></li>
                            <li class="list-group-item"><a href="{{ route('itemCRUD2.index') }}">my task</a></li>
                              <li class="list-group-item"><a href="{{ route('itemCRUD2.index') }}">my file</a></li>
                              <li class="list-group-item"><a href="{{ route('itemCRUD2.index') }}"> news</a></li>
                                <li class="list-group-item"><a href="{{ route('itemCRUD2.index') }}">tutorials</a></li>
                                  <li class="list-group-item"><a href="{{ route('itemCRUD2.index') }}">  message</a></li>
                  </ul>
                    </div>
                    @endif
                            <div class="col-md-9">
                                 @if (Auth::guest())
                      
                    @else
                                 <div id="buddypress">

          <div id="item-nav" style="background-image: none;">
              <div class="item-list-tabs no-ajax" id="object-nav" aria-label="Member primary navigation" role="navigation">
                  <ul class="responsive-tabs"><li class="dropdown pull-right tabdrop"><a class="dropdown-toggle" data-toggle="dropdown" href="#">&nbsp;</a><ul class="dropdown-menu"><li id="media-personal-li"><a id="user-media" href="{{ route('roles.index') }}">Roles <span class="count">8</span></a></li></ul></li>

                      <li id="activity-personal-li"><a id="user-activity" href="/projectedu/home">Activity</a></li><li id="xprofile-personal-li" class="current selected"><a id="user-xprofile" href="{{ route('itemCRUD2.index') }}">Profile</a></li><li id="blogs-personal-li"><a id="user-blogs" href="{{ route('users.index') }}">Users <span class="count">6</span></a></li><li id="friends-personal-li"><a id="user-friends" href="{{ route('itemCRUD2.index') }}">Friends <span class="count">38</span></a></li><li id="groups-personal-li"><a id="user-groups" href="{{ route('itemCRUD2.index') }}">Topics <span class="count">36</span></a></li><li id="forums-personal-li"><a id="user-forums" href="{{ route('itemCRUD2.index') }}">Forums <span class="count">100</span></a></li><li id="articles-personal-li"><a id="user-articles" href="{{ route('itemCRUD2.index') }}">Articles <span class="count">8</span></a></li>
                      
                  </ul>
              </div>
          </div>
          <!-- #item-nav -->
<div class="item-list-tabs no-ajax" id="subnav" aria-label="Member secondary navigation" role="navigation">

    <ul>

        <li id="just-me-personal-li" class="current selected"><a id="just-me" href="{{ route('itemCRUD2.index') }}">Personal</a></li><li id="activity-mentions-personal-li"><a id="activity-mentions" href="{{ route('itemCRUD2.index') }}">Mentions</a></li><li id="activity-favs-personal-li"><a id="activity-favs" href="{{ route('itemCRUD2.index') }}">Favorites</a></li><li id="activity-friends-personal-li"><a id="activity-friends" href="{{ route('itemCRUD2.index') }}">Friends</a></li><li id="activity-groups-personal-li"><a id="activity-groups" href="{{ route('itemCRUD2.index') }}">Groups</a></li>
        <li id="activity-filter-select" class="last">
            <label for="activity-filter-by">Select:</label>
 
            <select id="activity-filter-by">
            <option value="-1">— Everything —</option>

                <option value="rtmedia_update">rtMedia Updates</option>
<option value="activity_update">Updates</option>
<option value="new_blog">New Sites</option>
<option value="new_blog_post">Posts</option>
<option value="new_blog_comment">Comments</option>
<option value="friendship_accepted,friendship_created">Friendships</option>
<option value="group_details_updated">Group Updates</option>
<option value="created_group">New Groups</option>
<option value="joined_group">Group Memberships</option>

                
        <option value="bbp_topic_create">Topics</option>
        <option value="bbp_reply_create">Replies</option>

    
            </select>

        </li>
    </ul>
</div>

</div>
<br>
 @endif
        @yield('content')
    </div>
    </div>
    </div>
    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>