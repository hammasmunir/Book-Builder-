<style>
    .disableTab{
        color: inherit !important; 
        text-decoration: none !important; 
        pointer-events: none !important;
    }
    .filled-circle{
        margin-left: 10%;
    }
</style>
<?php
$sections = bookProgress()['sections'];
?>
<div class="side-bar">

    <div class="menu">
        <div class=" text-center text-white" style="height: 85px; display:flex; font-size:30px; justify-content:center; align-items:center">LOGO</div>
        <div class="item position-relative">
            <a href="{{url('/avatar')}}" class="@if(!$sections['avatar']) disableTab @endif"><i class="fas fa-book"></i>Avatar 
            @if($sections['avatar'])<i class="fas fa-check-circle filled-circle"></i>@endif
        </a>

        </div>
        <div class="item"><a href="{{url('/book-title')}}"  class="@if(!$sections['book_title']) disableTab @endif"><i class="fas fa-heading"></i>Book Title 
            @if($sections['book_title'])<i class="fas fa-check-circle filled-circle"></i>@endif
        </a></div>
        <div class="item">
            <a href="{{url('/outline')}}" class="@if(!$sections['outline']) disableTab @endif sub-btn"><i class="fas fa-file-alt"></i>Outline 
            @if($sections['outline'])<i class="fas fa-check-circle filled-circle"></i>@endif
        </a>
        </div>
        <div class="item"><a href="{{url('/cover-art')}}" class="@if(!$sections['cover_art']) disableTab @endif"><i class="fas fa-images"></i>Cover Art 
            @if($sections['cover_art'])<i class="fas fa-check-circle filled-circle"></i>@endif
        </a></div>
        <div class="item"><a href="#" class="@if(!$sections['inside_cover']) disableTab @endif"><i class="fas fa-book-open"></i>Inside Cover 
            @if($sections['inside_cover'])<i class="fas fa-check-circle filled-circle"></i>@endif
        </a></div>
        <div class="item"><a href="#" class="@if(!$sections['copy_right']) disableTab @endif"><i class="fas fa-copyright"></i>Copyright 
            @if($sections['copy_right'])<i class="fas fa-check-circle filled-circle"></i>@endif
        </a></div>
        <div class="item"><a href="#" class="@if(!$sections['praise']) disableTab @endif"><i class="fas fa-thumbs-up"></i>Praise 
            @if($sections['praise'])<i class="fas fa-check-circle filled-circle"></i>@endif
        </a></div>
        <div class="item"><a href="#" class="@if(!$sections['dedication']) disableTab @endif"><i class="fas fa-heart"></i>Dedication 
            @if($sections['dedication'])<i class="fas fa-check-circle filled-circle"></i>@endif
        </a></div>
        <div class="item"><a href="#" class="@if(!$sections['how_to_use']) disableTab @endif"><i class="fas fa-question-circle"></i>How To Use 
            @if($sections['how_to_use'])<i class="fas fa-check-circle filled-circle"></i>@endif
        </a></div>
        <div class="item"><a href="#" class="@if(!$sections['forword']) disableTab @endif"><i class="fas fa-share"></i>Forward 
            @if($sections['forword'])<i class="fas fa-check-circle filled-circle"></i>@endif
        </a></div>
        <div class="item">
            <a class="sub-btn @if(!$sections['table_of_content']) disableTab @endif"><i class="fas fa-list"></i>Table of Content 
            @if($sections['table_of_content'])<i class="fas fa-check-circle filled-circle"></i>@endif
        <i class="fas fa-angle-right dropdown"></i></a>
            <div class="sub-menu">
                <a href="#" class="sub-item">Sub Item 01</a>
                <a href="#" class="sub-item">Sub Item 02</a>
            </div>
        </div>
        <div class="item"><a href="#" class="@if(!$sections['conclusion']) disableTab @endif"><i class="fas fa-flag-checkered"></i>Conclusion 
            @if($sections['conclusion'])<i class="fas fa-check-circle filled-circle"></i>@endif
        </a></div>
        <div class="item"><a href="#" class="@if(!$sections['work_with_us']) disableTab @endif"><i class="fas fa-handshake"></i>Work with Us 
            @if($sections['work_with_us'])<i class="fas fa-check-circle filled-circle"></i>@endif
        </a></div>
        <div class="item"><a href="#" class="@if(!$sections['about']) disableTab @endif"><i class="fas fa-user"></i>About 
            @if($sections['about'])<i class="fas fa-check-circle filled-circle"></i>@endif
        </a></div>
    </div>
</div>