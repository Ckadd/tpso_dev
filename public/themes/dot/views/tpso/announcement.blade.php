@extends('layouts.app')
@section('content')
    <section class="row">
    	<div class="col-xs-12 banner_img">
            <img src="images/tpso/banner_announcement.jpg">
        </div>
    </section>
    <section class="row wow fadeInDown">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <hgroup class="headpage_inside">
                        <h1>announcement</h1>
                    </hgroup>
                </div>
            </div>
        </div>
        <div class="container bg_content">
            <div class="row">
                <div class="col-xs-12 head_inside">
                    <h1>ประกาศ</h1>
                    <select class="selectdownload">
                        <option>เลือกกอง</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 item_announcement active">
                    <h1>ประกาศปี 2562</h1>
                    <div class="detail_announcement">
                        <div><a href="#">รายชื่อผู้ได้รับคัดเลือกให้เข้ารับการประเมินผลงานเพื่อเลื่อนขั้นแต่งตั้งให้ดำรงตำแหน่งในระดับชำนาญการ</a></div>
                        <div><a href="#">ร่างประกาศและร่างเอกสารประกวดราคาจ้างด้วยวิธีประกวดราคาอิเล็กทรอนิกส์</a></div>
                        <div><a href="#">รายชื่อผู้รับ-ยื่นเอกสารสอบราคา,ประกวดราคา</a></div>
                    </div>
                </div>
                <div class="col-xs-12 item_announcement">
                    <h1>ประกาศปี 2561</h1>
                    <div class="detail_announcement">
                        <div><a href="#">รายชื่อผู้ได้รับคัดเลือกให้เข้ารับการประเมินผลงานเพื่อเลื่อนขั้นแต่งตั้งให้ดำรงตำแหน่งในระดับชำนาญการ</a></div>
                        <div><a href="#">ร่างประกาศและร่างเอกสารประกวดราคาจ้างด้วยวิธีประกวดราคาอิเล็กทรอนิกส์</a></div>
                        <div><a href="#">รายชื่อผู้รับ-ยื่นเอกสารสอบราคา,ประกวดราคา</a></div>
                    </div>
                </div>
                 <div class="col-xs-12 item_announcement">
                    <h1>ประกาศปี 2560</h1>
                    <div class="detail_announcement">
                        <div><a href="#">รายชื่อผู้ได้รับคัดเลือกให้เข้ารับการประเมินผลงานเพื่อเลื่อนขั้นแต่งตั้งให้ดำรงตำแหน่งในระดับชำนาญการ</a></div>
                        <div><a href="#">ร่างประกาศและร่างเอกสารประกวดราคาจ้างด้วยวิธีประกวดราคาอิเล็กทรอนิกส์</a></div>
                        <div><a href="#">รายชื่อผู้รับ-ยื่นเอกสารสอบราคา,ประกวดราคา</a></div>
                    </div>
                </div>
                 <div class="col-xs-12 item_announcement">
                    <h1>ประกาศปี 2559</h1>
                    <div class="detail_announcement">
                        <div><a href="#">รายชื่อผู้ได้รับคัดเลือกให้เข้ารับการประเมินผลงานเพื่อเลื่อนขั้นแต่งตั้งให้ดำรงตำแหน่งในระดับชำนาญการ</a></div>
                        <div><a href="#">ร่างประกาศและร่างเอกสารประกวดราคาจ้างด้วยวิธีประกวดราคาอิเล็กทรอนิกส์</a></div>
                        <div><a href="#">รายชื่อผู้รับ-ยื่นเอกสารสอบราคา,ประกวดราคา</a></div>
                    </div>
                </div>
                 <div class="col-xs-12 item_announcement">
                    <h1>ประกาศปี 2558</h1>
                    <div class="detail_announcement">
                        <div><a href="#">รายชื่อผู้ได้รับคัดเลือกให้เข้ารับการประเมินผลงานเพื่อเลื่อนขั้นแต่งตั้งให้ดำรงตำแหน่งในระดับชำนาญการ</a></div>
                        <div><a href="#">ร่างประกาศและร่างเอกสารประกวดราคาจ้างด้วยวิธีประกวดราคาอิเล็กทรอนิกส์</a></div>
                        <div><a href="#">รายชื่อผู้รับ-ยื่นเอกสารสอบราคา,ประกวดราคา</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

<script>
$(document).ready(function(){   
    $( '.item_announcement h1' ).click(function (event) {
	  if (  $(this).siblings( ".detail_announcement" ).is( ":hidden" ) ) {
            $('.item_announcement').removeClass("active");
            $(this).parent('.item_announcement').addClass("active");
            $('.detail_announcement').slideUp();
            $(this).siblings( ".detail_announcement" ).slideDown();
	  } else {
	  }
	  event.stopPropagation();
	});
});
</script>

</body>
</html>