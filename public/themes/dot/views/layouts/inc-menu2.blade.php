<style>
        .mainnavbar{
            z-index: 7891;
            position: fixed;
            left: 15px;
            right: 15px;
            background-color: rgba(21,21,21,0.26);
        }
        .wrap_menu{
            position: relative;
            z-index: 9;
        }
        .top_bar{
            height: 45px;
            background-color: #144e8e;
            text-align: right;
        }
        .logo{
            text-align: left;
            padding-left: 0;
            padding-right: 0;
        }
        .logo a{
            display: inline-block;
            position: relative;
        }
        .logo a img{
            max-width: 100%;
            max-height: 100px;
            height: auto;
            display: block;
        }
        .mainmenu{
            text-align: right;
            padding-right: 0;
            position: static;
        }
        .mainmenu ul{
            display: block;
            padding: 0;
            margin-bottom: 0;
            margin-top: 5px;
        }
        .mainmenu ul li{
            display: inline-block;
            margin-left: 30px;
            vertical-align: bottom;
        }
        .mainmenu ul li a{
            font-size: 1.1rem;
            display: block;
            color: #FFF;
            text-decoration: none;
            -webkit-transition: all  0.5s ease-in-out;
            -moz-transition:all  0.5s ease-in-out;
            -o-transition: all  0.5s ease-in-out;
            transition: all  0.5s ease-in-out;
        }
        .mainmenu ul li a:hover{
            color: #FFF;
        }
        .btn_menu{
            display: none;
        }
        .submenu{
            position: fixed;
            top: 50px;
            border: 5px solid #04add8;
            background-color: #FFF;
            text-align: left;
            color: #000;
            width: 100%;
            left: 50%;
            transform: translateX(-50%);
        }
        .submenu_left{
            border-right: 1px solid #9d9b9b;
            margin-top: 40px;
            margin-bottom: 15px;
        }
        .submenu_left h1{
            font-size: 2.8rem;
            line-height: 0.7;
            margin-bottom: 0;
        }
        .submenu_left h2{
            font-weight: 300;
            font-size: 1.5rem;
            line-height: 0.7;
            margin-top: 0;
        }
        .submenu_left h5{
            color: #aeacac;
            font-size: 1rem;
            line-height: 0.9;
            margin-bottom: 0;
            margin-top: 25px;
        }
        .submenu_left p{
            color: #aeacac;
            font-size: 0.8rem;
            line-height: 0.9;
        }
        .mainmenu ul li .submenu_left a{
            display: inline-block;
            font-size: 0.8rem;
            border: 1px solid #9b9b9b;
            color: #858484;
            padding: 5px 20px 3px 20px;
            margin-top: 15px;
        }
        .mainmenu ul li .submenu_left a:hover{
            color: #144e8e;
            border: 1px solid #144e8e;
        }
        .submenu_right img{
            width: 100%;
            height: auto;
            display: block;
        }
        .submenu_mid ul.submenu_mid_list{
            columns: 2;
          -webkit-columns: 2;
          -moz-columns: 2;
        }
        .submenu_mid ul.submenu_mid_list > li{
            padding: 0;
            background-image: url(images/right-chevron-menu.svg);
            background-repeat: no-repeat;
            background-position: left 9px;
            background-size: 10px auto;
            padding-left: 17px;
            display: block;
            -webkit-column-break-inside: avoid;
            page-break-inside: avoid;
            break-inside: avoid-column;
        }
        .submenu_mid ul.submenu_mid_list.submenuservice > li{
            border-bottom: 1px solid #e1e1e1;
            padding-left: 0;
            background-image: none;
            position: relative;
        }
        .submenu_mid ul.submenu_mid_list.submenuservice > li > a{
            padding-right: 17px;
        }
        .submenu_mid ul.submenu_mid_list.submenuservice > li::before{
            content: "";
            background-image: url(images/right-chevron-menu.svg);
            background-repeat: no-repeat;
            background-size: 12px auto;
            height: 12px;
            width: 12px;
            position: absolute;
            right: 0;
            top: 11px;
            transform: rotate(90deg);
        }
        .submenu_mid ul.submenu_mid_list.submenuservice > li.active > a{
            color: #00b2d9;
        }
        .submenu_mid ul.submenu_mid_list.submenuservice > li.active::before{
            transform: rotate(-90deg);
        }
        .submenu_mid ul.submenu_mid_list.submenuservice > li > a{
            font-size: 1.25rem;
        }
        .submenu_mid ul.submenu_mid_list.submenuservice > li > ul > li::before{
            content: "";
            background-image: url(images/right-chevron-menu.svg);
            background-repeat: no-repeat;
            background-size: 12px auto;
            height: 12px;
            width: 12px;
            position: absolute;
            right: 0;
            top: 11px;
            transform: rotate(90deg);
        }
        .submenu_mid ul.submenu_mid_list.submenuservice > li > ul > li{
            position: relative;
        }
        .submenu_mid ul.submenu_mid_list.submenuservice > li > ul > li.active > a{
            color: #00b2d9;
        }
        .submenu_mid ul.submenu_mid_list.submenuservice > li > ul > li.active::before{
            transform: rotate(-90deg);
        }
        .submenu_mid ul.submenu_mid_list.submenuservice > li > a{
            font-size: 1.25rem;
        }
        .submenu_mid{
            margin-bottom: 15px;
            margin-top: 30px;
        }
        .submenu_mid ul li a{
            font-weight: 500;
            color: #000;
            text-decoration: none;
            font-size: 1rem;
        }
        .submenu_mid ul li ul{
            margin: 0;
            list-style: disc;
            padding-left: 20px;
        }
        .submenu_mid ul li ul li{
            color: #818181;
            display: list-item;
            padding: 0;
            font-size: 0.85rem;
        }
        .submenu_mid ul li ul li a{
            font-size: 1rem;
            font-weight: normal;
            color: #000;
            padding-right: 15px;
        }
        .submenu_mid ul li a:hover{
            color: #00b2d9;
        }
        .topbar{
            display: block;
            text-align: right;
            margin-top: 15px;
            margin-bottom: 15px;
        }
        .wrap_btn_fz{
            display: inline-block;
            vertical-align: top;
            line-height: 20px;
            margin-right: 10px;
        }
        .btn_fz{
            display: inline-block;
            color: #FFF;
            margin-left: 2px;
            margin-right: 2px;
            vertical-align: baseline;
            font-weight: 300;
            cursor: pointer;
        }
        .fontsize_s{
            font-size: 18px;
        }
        .fontsize_m{
            font-size: 24px;
        }
        .fontsize_l{
            font-size: 30px;
        }
        .mainnavbar:hover{
            z-index: 9989;
        }
        .mainnavbar.sticky{
            z-index: 9989;
            background-color: rgba(0,0,0,0.5);
        }
        .mainnavbar.sticky::before{
            display: none;
        }
        .submenu_mid ul li ul.submenu_lv2{
            display: none;
        }
        .submenu_mid ul.submenuservice > li:first-child ul.submenu_lv2{
            display: block;
        }
        .submenu_mid ul li ul.submenu_lv3{
            display: none;
        }
        .submenu_mid ul.submenuservice > li:first-child ul.submenu_lv2 li:first-child ul.submenu_lv3{
            display: block;
        }
        .dropdown_lang{
            display: inline-block;
            position: relative;
            font-size: 20px;
            color: #FFF;
            vertical-align: top;
            line-height: 1;
            cursor: pointer;
        }
        .dropdown_lang span{
            border: 1px solid #FFF;
            display: inline-block;
            vertical-align: top;
            padding: 5px 25px 5px 5px;
            line-height: 0.6;
            background-image: url(images/arrowdown.svg);
            background-repeat: no-repeat;
            background-size: 14px auto;
            background-position: right 5px center;
            width: 50px;
        }
        .dropdown_lang > ul{
            position: absolute;
            top: 100%;
            padding: 0;
            margin: 0;
            background-color: #FFF;
            width: 100%;
            display: none;
        }
        .dropdown_lang > ul li{
            margin: 0;
            display: block;
            color: #333;
            padding: 5px;
            line-height: 0.85;
            text-align: left;
            font-size: 22px;
        }
        .submenu{
            display: none;
        }
        .topbar div{
            display: inline-block;
            color: #FFF;
            margin-left: 5px;
            font-size: 1rem;
            vertical-align: bottom;
        }
        .topbar span{
            width: 4px;
            height: 4px;
            display: inline-block;
            border-radius: 50%;
            background-color: #FFF;
            margin-left: 5px;
        }
        .img_user{
            width: 24px;
            height: 24px;
            display: inline-block;
            overflow: hidden;
            border-radius: 50%;
        }
        .img_user img{
            display: block;
            width: 100%;
            height: auto;
        }
        .mainmenu ul li.iconmenu{
            margin-left: 25px;
            position: relative;
        }
        .mainmenu ul li.iconmenu::before{
            content: '';
            height: 13px;
            width: 1px;
            background-color: #FFF;
            position: absolute;
            top: 4px;
            left: -9px;
        }
        .mainmenu ul li.iconmenu::after{
            content: '';
            height: 13px;
            width: 1px;
            background-color: #FFF;
            position: absolute;
            top: 4px;
            right: -9px;
        }
        .mainmenu ul li.iconmenu a{
            display: inline-block;
            margin-left: 5px;
            margin-right: 5px;
        }
        .mainmenu ul li.iconmenu img{
            width: 16px;
             height: auto;
            display: block;
        }
        .mainmenu > ul > li:last-child{
            margin-left: 25px;
        }
        .hidedesktop{
            display: none !important;
        }

        .searchbox{
            width: 240px;
    /*        background-color: rgba(255,255,255,0.5);*/
            position: absolute;
            top: -7px;
            right: 18px;
            padding: 3px;
            line-height: 1;
            border-radius: 5px;
            display: none;
        }
        .searchbox input{
            height: 26px;
            width: calc(100% - 26px);
            display: inline-block;
            background-color: #FFF;
            border-top-left-radius: 5px;
            border-bottom-left-radius: 5px;
            border: 1px solid #ccc;
            padding-left: 5px;
            padding-right: 5px;
        }
        .searchbox button{
            width: 26px;
            height: 26px;
            background-color: #00b1da;
            display: inline-block;
            border: 0;
            padding: 0;
            border-top-right-radius: 5px;
            border-bottom-right-radius: 5px;
            vertical-align: top;
        }
        .searchbox button img{
            display: block;
            width: 17px;
            margin: 0 auto;
        }
        .btn_searchbar{
            display: inline-block;
            position: relative;
            margin-left: 5px;
            margin-right: 5px;
            cursor: pointer;
        }
        .btn_searchbar span{
            position: absolute;
            top: 0;
            right: 0;
            display: block;
            z-index: -1;
            opacity: 0;
        }
        .btn_searchbar.active > img{
            opacity: 0;
            position: relative;
            z-index: 1;
        }
        .btn_searchbar.active span{
            opacity: 1;
            z-index: 0;
        }
        .wrap_btn_login{
            display: inline-block;
            position: relative;
            margin-left: 5px;
            margin-right: 5px;
            cursor: pointer;
        }
        .wrap_login{
            display: none;
            position: absolute;
            top: 26px;
            background-color: #FFF;
            right: -11px;
            padding: 15px;
            border-radius: 5px;
            border: 2px solid #FFF;
            width: 300px;
            text-align: left;
            text-decoration: none;
        }
        .wrap_login h1{
            border-bottom: 1px solid #00b2d9;
            margin: 0;
            font-size: 1.2rem;
            padding-left: 10px;
        }
        .wrap_login .form-control{
            border-top: 0;
            border-left: 0;
            border-right: 0;
            border-radius: 0;
            border-bottom: 1px solid #ccc;
            font-size: 1rem;
            box-shadow: none;
            margin-top: 10px;
        }
        .wrap_login::before{
            content: "";
                top: -7px;
        position: absolute;
            right: 12px;
          width: 0;
          height: 0;
          border-left: 7px solid transparent;
          border-right: 7px solid transparent;
          border-bottom: 7px solid #FFF;
        }
        .btn_login_popup{
            background-color: #00b2d9;
            color: #FFF;
            line-height: 1;
            padding: 5px 0;
            width: 100px;
            text-align: center;
            display: block;
            border: 0;
            position: absolute;
            right: 0;
            top: 0;
        }
        .wrap_fotgotandlogin{
            display: block;
            position: relative;
            margin-top: 15px;
        }
        .wrap_fotgotandlogin > a{
            display: inline-block;
            color: #666;
            text-decoration: none;
            padding-left: 10px;
            padding-bottom: 5px;
            padding-top: 5px;
        }
        .wrap_fotgotandlogin > a:hover{
            color: #333;
        }
        .mainmenu ul li.iconmenu a.forgotpassword{
            color: #333;
            font-size: 1rem;
        }


    @media (min-width: 992px){
        /*.submenu{
            z-index: -9;
            opacity: 0;
            visibility: hidden;
            -webkit-transition: all  0.5s ease-in-out;
            -moz-transition:all  0.5s ease-in-out;
            -o-transition: all  0.5s ease-in-out;
            transition: all  0.5s ease-in-out;
        }*/
        .hassub{
            position: relative;
            cursor: pointer;
        }
        .hassub::before{
            content: "";
            width: 0;
            height: 0;
            border-left: 15px solid transparent;
            border-right: 15px solid transparent;
            border-bottom: 10px solid #00b2d9;
            position: absolute;
            bottom: -18px;
            left: 50%;
            transform: translateX(-50%);
            z-index: -9;
            opacity: 0;
            visibility: hidden;
            -webkit-transition: all  0.5s ease-in-out;
            -moz-transition:all  0.5s ease-in-out;
            -o-transition: all  0.5s ease-in-out;
            transition: all  0.5s ease-in-out;
        }
        /*.hassub:hover .submenu{
            opacity: 1.0;
            z-index: 99998;
            visibility: visible;
        }
        .hassub:hover::before{
            opacity: 1.0;
            z-index: 99998;
            visibility: visible;
        }*/

        .hassub.active .submenu{
            opacity: 1.0;
            z-index: 99998;
        }
        .hassub.active::before{
            opacity: 1.0;
            z-index: 99998;
            visibility: visible;
        }
    }
    @media (max-width: 1199px){
        .mainmenu{
            padding-right: 15px;
        }
        .mainmenu ul li{
            margin-left: 15px;
        }
        .mainmenu ul li a{
            font-size: 1rem;
        }
    }
    @media (max-width: 991px){
        .btn_menu{
            display: inline-block;
            color: #FFF;
        }
        .btn_menu .btn_menu_line{
            width: 25px;
            display: inline-block;
            padding-right: 5px;
            padding-top: 1px;
            vertical-align: middle;
        }
        .btn_menu .btn_menu_line span{
            display: block;
            height: 3px;
            background-color: #FFF;
            margin-bottom: 3px;
        }
        .btn_menu .btn_menu_text{
            display: inline-block;
            font-size: 1.2rem;
            font-weight: 500;
            letter-spacing: 1px;
            vertical-align: middle;
        }
        .logo a img{
            max-width: 80%;
        }
        .mainmenu > ul{
            position: absolute;
            left: 0;
            background-color: #FFF;
            margin-top: 0;
            top: 100%;
            width: 100%;
            padding-top: 15px;
            padding-bottom: 15px;
            border-top: 2px solid #144e8e;
            border-bottom: 2px solid #144e8e;
            display: none;
        }
        .mainmenu > ul > li{
            padding-bottom: 0;
            display: block;
            margin: 0;
            text-align: left;
        }
        .mainmenu > ul > li > a{
            font-size: 1.2rem;
            padding-left: 15px;
            padding-right: 15px;
        }
        .submenu{
            position: static;
            display: none;
        }
        .submenu_left h1{
            font-size: 1.5rem;
        }
        .submenu_left h2{
            font-size: 1rem;
        }
        .submenu_mid ul.submenu_mid_list > li{
            margin-left: 0;
        }
        .submenu_left{
            margin-top: 0;
        }
        .mainmenu ul li a{
            color: #333;
        }
        .submenu{
            transform: translateX(0);
            border: 2px solid #04add8;
        }
        .mainmenu ul li a:hover{
            color: #333;
        }
        .service_menubg{
            background-image: none;
        }
        .topbar{
            display: inline-block;
            vertical-align: middle;
            margin-top: 13px;
        }
        .btn_menu .btn_menu_line{
            margin-left: 15px;
            margin-top: 3px;
        }
        .logo a{
            display: block;
        }
    }
    @media (max-width: 767px){
        .submenu_mid ul.submenu_mid_list{
            margin-top: 0;
        }
        .submenu_right img{
            max-width: 400px;
        }
        .fontsize_btn{
            padding-top: 1px;
        }
        .submenu_mid ul.submenu_mid_list{
            columns: 1;
          -webkit-columns: 1;
          -moz-columns: 1;
        }
        .submenu_right{
            display: none;
        }
        .submenu_left{
            margin-bottom: 0;
        }
        .submenu_mid{
            margin-top: 0;
        }
        .logo{
            padding-left: 15px;
            padding-right: 15px;
        }
        .dropdown_lang{
            position: absolute;
            top: 5px;
            right: 50px;
        }
        .btn_menu{
            position: absolute;
            right: 10px;
            top: 5px;
        }
        .top_socail_link{
            margin-top: 0;
            padding-right: 10px;
        }
        .wrap_btn_fz{
            margin-top: 0;
        }
        .icon_search {
            margin-top: 7px;
            margin-left: 10px;
        }
        .link_faq{
            margin-top: 5px;
        }
        .mainnavbar::before{
            background-size: cover;
        }
        .submenu_left{
            border-right: 0;
        }
        .mainmenu{
            height: 0;
        }
        .logo a img {
        max-width: 30%;
    }
        .topbar .hide_mb{
            display: none;
        }
        .topbar span{
            display: none;
        }
        .topbar{
            position: absolute;
            top: 0;
            right: 50px;
            margin-top: 5px;
        }
        .mainmenu > ul{
            padding-top: 0;
            max-height: calc(100vh - 55px);
            overflow-y: auto;
        }
        .mainmenu > ul > li.iconmenu{
            background-color: #144e8e;
            margin-left: 0;
            padding-left: 15px;
            padding-top: 5px;
            display: inline-block;
            width: 55%;
            margin-bottom: 10px;
             vertical-align: top;
            height: 34px;
        }
        .mainmenu > ul > li.lilang{
            background-color: #144e8e;
            margin-left: 0;
            padding-left: 15px;
            padding-top: 6px;
            display: inline-block;
            width: 45%;
            margin-bottom: 10px;
            text-align: right;
            padding-right: 10px;
            vertical-align: top;
            height: 34px;
        }
        .dropdown_lang{
            position: relative;
            right: 0;
            top: 0;
        }
        .mainmenu ul li.iconmenu a{
            margin-left: 10px;
            margin-right: 0px;
            padding: 0 5px;
        }
        .mainmenu ul li.iconmenu::after{
            display: none;
        }
        .hidedesktop{
            display: inline-block !important;
        }
        .hidemobile{
            display: none !important;
        }
        .mainmenu ul li.iconmenu img{
            width: 20px;

        }
        .searchbox{
            right: auto;
            left: 22px;
        }
        .wrap_login{
                left: -50px;
            right: auto;
            width: 100vw;
            border: 2px solid #144e8e;
            border-radius: 0;
        }
        .wrap_login::before{
                left: 50px;
            right: auto;
            border-bottom: 7px solid #FFF;
        }
        .searchbox input{
            border-radius: 0;
        }
        .mainmenu ul li.iconmenu .btn_searchbar span img{
            width: 16px;
        }
        .mainmenu ul li.iconmenu .btn_searchbar .searchbox button img{
            width: 16px;
        }
    }
    </style>
    <nav class="row mainnavbar">
            <div class="container wrap_menu">
                <div class="row">
                    <div class="col-xs-12 col-sm-3 logo"><a href="{{route('index')}}"><img src="{{url('/')}}{{'/'}}{{ ThemeService::path('assets/images/logo_tpso1.png') }}"></a></div>
                    <div class="col-xs-12 col-sm-9 mainmenu">
                        <div class="topbar">
                            <div class="img_user"><img src="{{url('/')}}{{'/'}}{{ ThemeService::path('assets/images/user.jpg')}}"></div><div class="hide_mb">{{ @Auth::user()->name }}</div><span></span><div class="hide_mb">ฝ่ายยุทธศาสตร์การค้า</div>
                        </div>
                        <div class="btn_menu"><div class="btn_menu_line"><span></span><span></span><span></span></div><!--<div class="btn_menu_text">MENU</div>--></div>
                        <ul>
                            <li class="iconmenu hidedesktop">
                               <div class="btn_searchbar"><img src="{{url('/')}}{{'/'}}{{ ThemeService::path('assets/images/magnifying-glass.svg')}}"><span><img src="{{url('/')}}{{'/'}}{{ ThemeService::path('assets/images/close.svg')}}"></span>
                                <div class="searchbox">
                                     <input type="text"><button><img src="{{url('/')}}{{'/'}}{{ ThemeService::path('assets/images/magnifying-glass.svg')}}"></button>
                                 </div>
                            </div><div class="wrap_btn_login"><img src="{{url('/')}}{{'/'}}{{ ThemeService::path('assets/images/userwithplus.svg')}}">
                                <div class="wrap_login">
                                    <h1>เข้าสู่ระบบ</h1>
                                    <input class="form-control" placeholder="ชื่อผู้ใช้งาน" type="text" name="email">
                                    <input class="form-control" placeholder="รหัสผ่าน" type="password" name="password">
                                    <div class="wrap_fotgotandlogin">
                                        <a class="forgotpassword" href="#">ลืมรหัสผ่าน?</a>
                                        <button class="btn_login_popup">เข้าสู่ระบบ</button>
                                    </div>
                                </div>
                            </div><a href="#"><img src="{{url('/')}}{{'/'}}{{ ThemeService::path('assets/images/faq.svg') }}"></a><a href="#"><img src="{{url('/')}}{{'/'}}{{ ThemeService::path('assets/images/hierarchical-structure.svg') }}"></a>
                            </li><li class="lilang hidedesktop">
                                <div>
                                    <div class="wrap_btn_fz">
                                        <div class="btn_fz fontsize_s">A</div><div class="btn_fz fontsize_m">A</div><div class="btn_fz fontsize_l">A</div>
                                    </div><div class="dropdown_lang">
                                        <span>LANG</span>
                                        <ul>
                                            <li>EN</li>
                                            <li>TH</li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="hassub"><a href="#">เกี่ยวกับองค์กร</a>
                                <div class="submenu">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-3 submenu_left">
                                                <hgroup>
                                                    <h1>ABOUT US</h1>
                                                    <h2>เกี่ยวกับองค์กร</h2>
                                                </hgroup>
                                                <h5>เกี่ยวกับองค์กร</h5>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                            </div>
                                            <div class="col-xs-12 col-sm-6 submenu_mid">
                                                        <ul class="submenu_mid_list">
                                                                <li><a href="{{ url('/organization') }}">โครงสร้างองค์กร</a></li>
                                                                <li><a href="{{ url('/board') }}">ผู้บริหาร</a></li>
                                                                <li><a href="{{ url('/staff') }}">เกี่ยวกับพนักงาน</a></li>
                                                            {{-- <li><a href="#">ความเป็นมา</a></li>
                                                            <li><a href="#">โครงสร้างองค์กร</a>
                                                                <ul>
                                                                    <li><a href="{{ url('/organization') }}">โครงสร้างองค์กร</a></li>
                                                                    <li><a href="{{ url('/board') }}">ผู้บริหาร</a></li>
                                                                    <li><a href="{{ url('/staff') }}">เกี่ยวกับพนักงาน</a></li>
                                                                </ul>
                                                            </li>
                                                            <li><a href="#">คณะกรรมการ</a></li>
                                                            <li><a href="#">นโยบายและยุทธศาสตร์</a></li>
                                                            <li><a href="#">กฎมหายที่เกี่ยวข้อง</a></li>
                                                            <li><a href="#">ผลการดำเนินงาน</a></li> --}}
                                                        </ul>
                                            </div>
                                            <div class="col-xs-12 col-sm-3 submenu_right">
                                                <img src="{{url('/')}}{{'/'}}{{ ThemeService::path('assets/images/aboutmenuimg.jpg') }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li><li><a href="{{ url('/news-events/1') }}">ข่าวสาร</a>
                            </li><li><a href="{{ url('/e-book') }}">คลังความรู้</a>
                            </li><li><a href="{{ url('/download-document') }}">มุมดาว์นโหลด</a>
                            </li><li class="iconmenu hidemobile">
                            <div class="btn_searchbar"><img src="{{url('/')}}{{'/'}}{{ ThemeService::path('assets/images/magnifying-glass.svg') }}"><span><img src="{{url('/')}}{{'/'}}{{ ThemeService::path('assets/images/close.svg') }}"></span>
                                <div class="searchbox">
                                    <form action="/search">
                                        <input type="text" ><button><img src="{{url('/')}}{{'/'}}{{ ThemeService::path('assets/images/icon_search.svg') }}"></button>
                                    </form>
                                </div>
                            </div>

                            <div class="wrap_btn_login"><img src="{{url('/')}}{{'/'}}{{ ThemeService::path('assets/images/userwithplus.svg') }}">
                                <div class="wrap_login">
                                <form action="{{ route('voyager.login') }}" method="POST">
                                {{ csrf_field() }}
                                    <h1>เข้าสู่ระบบ</h1>
                                    <input class="form-control" placeholder="ชื่อผู้ใช้งาน" type="text" name="email">
                                    <input class="form-control" placeholder="รหัสผ่าน" type="password" name="password">
                                    <div class="wrap_fotgotandlogin">
                                        <!-- <a class="forgotpassword" href="#">ลืมรหัสผ่าน?</a> -->
                                        <a class="forgotpassword" href="#"></a>
                                        <button class="btn_login_popup">เข้าสู่ระบบ</button>
                                    </div>
                                    </form>
                                    <form action="{{ route('userlogout') }}" method="POST">
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-block">
                               ออกจากระบบ
                            </button>
                        </form>
                                </div>
                            </div>

                            <a href="#"><img src="{{url('/')}}{{'/'}}{{ ThemeService::path('assets/images/faq.svg') }}"></a><a href="#"><img src="{{url('/')}}{{'/'}}{{ ThemeService::path('assets/images/hierarchical-structure.svg') }}"></a>
                            </li><li class="lilang hidemobile">
                                <div>
                                    <div class="wrap_btn_fz">
                                        <div class="btn_fz fontsize_s">A</div><div class="btn_fz fontsize_m">A</div><div class="btn_fz fontsize_l">A</div>
                                    </div>
                                    {{-- <div class="dropdown_lang">
                                        <span>EN</span>
                                        <ul>
                                            <li>EN</li>
                                            <li>TH</li>
                                        </ul> --}}

                                    {{-- </div> --}}
                                    <div class="dropdown_lang">
                                            @php
                                                $languages = DB::table('languages')->get();
                                            @endphp
                                            <span>EN</span>
                                            <ul>
                                            @foreach($languages as $language)
                                            <li><div class="lang @if(App::getLocale() == $language->code) active @endif" data-id="{{url('change/'.$language->code)}}" style="text-transform: uppercase;">
                                                {{$language->code}}
                                            </div></li>
                                            @endforeach
                                        </ul>

                                        </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
<script src="{{url('/')}}{{'/'}}{{ ThemeService::path('assets/js/inc-menu/form.js') }}"></script>
<script>
        $(document).ready(function(){
            if (Modernizr.mq('(max-width: 991px)')) {
                      $('.mainmenu > ul').css('max-height', $(window).height() - 100);
                  }
            $( '.btn_menu' ).click(function (event) {
              if (  $( ".mainmenu > ul" ).is( ":hidden" ) ) {
                    $(this).addClass("active");
                    $('.mainmenu > ul').slideDown();
              } else {
                  $('.mainmenu > ul').slideUp();
                  $(this).removeClass("active");
                  $('.submenu').slideUp();
                  $('.hassub').removeClass("active");
                  $('.wrap_login').fadeOut();
              }
              event.stopPropagation();
            });

            $( '.hassub' ).click(function (event) {
              if (  $(this).children( ".submenu" ).is( ":hidden" ) ) {
                    $('.hassub').removeClass("active");
                    $(this).addClass("active");
                    $('.submenu').slideUp();
                    $(this).children( ".submenu" ).slideDown();
              } else {
                  //if (Modernizr.mq('(max-width: 991px)')) {
                      $('.submenu').slideUp();
                      $(this).removeClass("active");
                  //}
              }
              event.stopPropagation();
            });

            $( '.hassub_lv2' ).click(function (event) {
              if (  $(this).children( ".submenu_lv2" ).is( ":hidden" ) ) {
                    $('.hassub_lv2').removeClass("active");
                    $(this).addClass("active");
                    $('.submenu_lv2').slideUp();
                    $(this).children( ".submenu_lv2" ).slideDown();
              } else {
                      $('.submenu_lv2').slideUp();
                      $(this).removeClass("active");
              }
              event.stopPropagation();
            });

            $( '.hassub_lv3' ).click(function (event) {
              if (  $(this).children( ".submenu_lv3" ).is( ":hidden" ) ) {
                    $('.hassub_lv3').removeClass("active");
                    $(this).addClass("active");
                    $('.submenu_lv3').slideUp();
                    $(this).children( ".submenu_lv3" ).slideDown();
              } else {
                      $('.submenu_lv3').slideUp();
                      $(this).removeClass("active");
              }
              event.stopPropagation();
            });

             $( '.dropdown_lang span' ).click(function (event) {
              if (  $(this).siblings( "ul" ).is( ":hidden" ) ) {
                    $(this).siblings( "ul" ).slideDown();
              } else {
                      $('.dropdown_lang ul').slideUp();
              }
              event.stopPropagation();
            });

            $( '.dropdown_lang ul li' ).click(function (event) {
                $(this).parent('ul').siblings('span').text($(this).text());
                $('.dropdown_lang ul').slideUp();
            });


             $( 'html' ).click(function (event) {
            });

            $( '.fontsize_s' ).click(function (event) {
                $('html').removeClass('fz_l');
                $('html').addClass('fz_s');
            });
            $( '.fontsize_m' ).click(function (event) {
                $('html').removeClass('fz_l fz_s');
            });
            $( '.fontsize_l' ).click(function (event) {
                $('html').removeClass('fz_s');
                $('html').addClass('fz_l');
            });
        });

        $(window).on( "load", function() {
            $('.submenu').css('top', $('.wrap_menu').height());
        });

        $(window).scroll(function() {
            if ($(this).scrollTop() > 150){
                $('.mainnavbar').addClass("sticky");
            }
            else{
                $('.mainnavbar').removeClass("sticky");
            }
        });

         $( '.btn_searchbar img' ).click(function (event) {
              if (  $(this).siblings( ".searchbox" ).is( ":hidden" ) ) {
                    $(this).parent('.btn_searchbar').addClass('active');
                    $(this).siblings('.searchbox').effect('slide', { direction: 'right', mode: 'show' }, 800);
              } else {
                  $(this).siblings('.searchbox').effect('slide', { direction: 'right', mode: 'hide' }, 800);
                  $(this).parent('.btn_searchbar').removeClass('active');
              }
              //event.stopPropagation();
            });

            $( '.wrap_btn_login img' ).click(function (event) {
              $(this).siblings('.wrap_login').fadeToggle();
              event.stopPropagation();
            });


        </script>
