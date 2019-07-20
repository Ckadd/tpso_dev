<style>
        .bg_footer{
            background-color: #242424;
            color: #ffffff;
            border-top: 10px solid #00b2eb;
        }
        .footer_detail h1{
            font-size: 1.25rem;
            opacity: 0.6;
            font-weight: 500;
            margin-top: 45px;
            margin-bottom: 0px;
        }
        .footer_detail address{
            font-size: 1.25rem;
            opacity: 0.6;
            line-height: 1;
            margin-bottom: 0px;
            text-transform: uppercase;
        }
        .footer_detail p{
            opacity: 0.6;
            line-height: 1;
            margin-bottom: 50px;
            font-size: 1.25rem;
        }
        .stat_footer{
            display: inline-block;
            padding-left: 25px;
            background-image: url(images/stat_footer.png);
            background-repeat: no-repeat;
            background-position: left center;
            margin-bottom: 5px;
            color: #a0a0a0;
            margin-top: 45px;
        }
        .stat_footer span{
            display: inline-block;
            margin-left: 5px;
            font-size: 1.25rem;
        }
        .right_footer{
            padding-left: 0;
            text-align: right;
        }
        .hotline_footer{
            font-size: 1.5rem;
            font-weight: 500;
            font-style: italic;
            opacity: 0.6;
            text-transform: uppercase;
            line-height: 1;
        }
        .hotline_footer span{
            font-size: 1.77rem;
            font-weight: bold;
            margin-left: 3px;
        }
        .link_fotoer{
        }
        .link_fotoer a{
            opacity: 0.6;
            color: #FFF;
            display: inline-block;
            margin-left: 5px;
            vertical-align: middle;
        }
        .link_fotoer a img{
            width: 26px;
            height: auto;
            display: block;
        }
        .link_fotoer span{
            opacity: 0.6;
            color: #FFF;
            display: inline-block;
            margin-left: 5px;
        }
        
        
    @media (max-width: 767px){
        .right_footer{
            padding-left: 15px;
            text-align: left;
        }
        .footer_detail p{
            margin-bottom: 15px;
        }
        .footer_detail address{
            margin-bottom: 15px;
        }
        .footer_detail h1{
            margin-top: 20px;
            font-size: 1.1rem;
            font-weight: 300;
        }
        .footer_detail address, .footer_detail p{
            font-size: 1rem;
        }
        .stat_footer{
            margin-top: 10px;
        }
        .hotline_footer{
            font-size: 1.1rem;
        }
        .link_fotoer{
            margin-bottom: 15px;
        }
        .bg_footer{
             border-top: 5px solid #00b2eb;
        }
    }
    </style>
    
    <footer class="row bg_footer">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-8 footer_detail">
                    <h1>สำนักนโยบายและยุทธศาสตร์การค้า</h1>
                    <address>
    563 ถนนนนทบุรี ตำบลบางกระสอ อำเภอเมือง จังหวัดนนทบุรี 11000<br>
    E-mail: tpso_webmaster@moc.go.th ,โทรศัพท์ 0-2507-5793 โทรสาร 0-2507-5806
                    </address>
                    <p>© 2019 สงวนลิขสิทธิ์ โดย www.tpso.moc.go.th  </p>
                </div>
                <div class="col-12 col-sm-6 col-md-4 right_footer">
                    <div class="stat_footer">จำนวนผู้เยี่ยมชมเว็บไซต์<span>013385</span></div>
                    <div class="hotline_footer">hot line <span>02-507-6765</span></div>
                    <div class="link_fotoer"><a href="#">นโยบายความเป็นส่วนตัว</a><span>|</span><a href="#">ข้อตกลงการใช้บริการ</a><a href="#"><img src="{{url('/')}}{{'/'}}{{ ThemeService::path('assets/tpso/images/top_facebook.svg') }}"></a><a href="#"><img src="{{url('/')}}{{'/'}}{{ ThemeService::path('assets/tpso/images/twitter-circular-button.svg') }}"></a></div>
                </div>
            </div>
        </div>
    </footer>