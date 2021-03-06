
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/editor.css">
    <script src="js/Edit.js"></script>
    <script src="https://kit.fontawesome.com/3abda6768c.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <title>JJineBlog</title>
</head>
<body>
    <div class="wrapper">

        <div class="header">
            <div class="navbar">
                <div class="navbar-container  justify-center">
                    <div class="btn-left">
                        <i class="far fa-image" id="img"></i>
                        <i class="far fa-folder"></i>
                        <i class="fas fa-video"></i>
                        <i class="fas fa-link" id="link"></i>
                        <i class="fas fa-table"></i>
                        <i class="far fa-calendar-alt"></i>
                        <i class="fas fa-quote-left"></i>
                    </div>
                    <div class="btn-right">
                        <a href="#">임시저장</a>
                        <a href="#">발행</a>
                </div>
            </div>
            <div class="btn-submit">
                
        </div>
    </div>
    
    <div class="sub-navbar">
        <div class="sub-container justify-center ">  
            <div class="sub-text">
                <button class="menu-1">
                    <span>본문 </span>
                    <i class=""></i>
                </button>
            </div>
            <div class="sub-left">
                <i class="fas fa-align-left"></i>
                <i class="fas fa-align-center"></i>
                <i class="fas fa-align-right"></i>
                <i class="fas fa-align-justify"></i>
            </div>
            <div class="sub-center">
                <i class="fas fa-bold"></i>
                <i class="fas fa-italic"></i>
                <i class="fas fa-underline"></i>    
                <i class="fas fa-strikethrough"></i>
            </div>
            <!-- <div class="sub-text">
                
            </div>
            <div class="sub-align">
                
            </div> -->
            <div class="sub-index">
                <i class="fas fa-list-ul"></i>
                <i class="fas fa-list"></i>
                <i class="fas fa-list-ol"></i>
            </div>
            <div class="sub-init">
                <i class="fas fa-asterisk"></i>
                <i class="fas fa-text-height"></i>
                <i class="fas fa-text-width"></i>
            </div>                
        </div>
    </div>
</div>
        
    <div class="post">
        <div class="container">
            <div class="title-wrapper">
                <textarea class="post-title" placeholder="제목을 입력하세요." style="height: 40px;"></textarea>
                <textarea class="post-sub-title" placeholder="부제목을 입력하세요." style="height: 25px;"></textarea>
            </div>
                
            <div class="p-element" hidefocus="1" tabindex="-1" role="application" style="visibility: hidden; border-width:1px; width: 1000px;">
                <textarea name="" id="" cols="30" rows="10">ㅎㅎ</textarea>
            </div>
            <div class="pen">
                                
            </div>
            <div class="tag">
                <h2>태그</h2>
                
            </div>
        </div>
    </div>
                    
    <div class="aside">
                        
    </div>

    <!--img box-->
    <div class="img-box"> 
        <div class="img-form">
            <div class="img-header"><h4>이미지 업로드</h4>
            </div>
            <form id="drop">
                <a type="button" href="">업로드</a>
            </form>
        </div>
    </div>

    <!--link box-->
    <div class="link-box">
        <div class="link-form">
            <form id="form-url">
                <input ref="url" type="text" class="form-text" placeholder="URL">
            </form>
            <a type="button" href="">확인</a>
        </div>
    </div>
</div>
</body>
</html>
                        