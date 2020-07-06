<?php
use App\Library\PHPDev\FuncLib;
use App\Library\PHPDev\CGlobal;
use App\Library\PHPDev\Utility;
use App\Library\PHPDev\ThumbImg;
?>
@extends('Statics::layout.html')
@section('header')
    @include('Statics::block.header')
@endsection
@section('content')
<div id="content">
    <div class="home-1">
        <div class="container">
            <div class="star">
                <img src="http://localhost/project.vn/ColosPlatium2/public/assets/img/logo-star.png" alt="">
            </div>
            <div class="text-1">
                <h3>Sữa non Smart Colostrum</h3>
                <h6>sản phẩm hàng đầu được các chuyên gia khuyên dùng</h6>
                <h5>Cải thiện tình trạng</h5>
                <p><i class="icon-tic"></i><span>Biếng ăn, hay ăn ngậm</span></p>
                <p><i class="icon-tic"></i><span>Vì sao nên dùng Smart Colostrum?</span></p>
                <p><i class="icon-tic"></i><span>Thấp còi, suy dinh dưỡng</span></p>
                <p><i class="icon-tic"></i><span>Hấp thụ kém, chậm tăng cân</span></p>
                <p><i class="icon-tic"></i><span>Sức đề kháng kém</span></p>
                <p><i class="icon-tic"></i><span>Rối loạn tiêu hóa, táo bón</span></p>
                <form action="" method="POST">
                    <button type="submit" class="btn btn-primary">Đăng ký ngay</button>
                </form>
            </div>
            <div class="thumb-1">
                <img src="http://localhost/project.vn/ColosPlatium2/public/assets/img/baby.png" alt="">
            </div>
            <div class="cake">
                <img src="http://localhost/project.vn/ColosPlatium2/public/assets/img/cake.png" alt="">
            </div>
        </div>
    </div>
    <!-----------home-1-------------->

    <div class="home-2">
        <div class="container">
            <div class="icon-2">
                <img src="http://localhost/project.vn/ColosPlatium2/public/assets/img/thanh-phan.png" alt="">
            </div>
            <div class="descrip-2">
                Sữa non, DHA, L-Lysine, whey protein concentrate 80%, canxi gluconat, taurin, magie lactate, beta-glucan, thymomodulin, kênh gluconat, coenzym Q10,
                vitamin B5, vitamin B1, vitamin B6, acid folic, vitamin D, lactobasillus acidophilus, amylase
            </div>
            <div class="title-2">
                <h4>Vì sao nên dùng Smart Colostrum?</h4>
                <h5>SỮA NON - Thức uống giàu chất dinh dưỡng cho trẻ</h5>
            </div>
            <div class="thumb-2">
                <div class="img-1">
                    <img src="http://localhost/project.vn/ColosPlatium2/public/assets/img/icon-2-1.png" alt="">
                    <div class="text-img">
                        <h5>Kháng thể tự nhiên</h5>
                        <p>Chứa hàm lượng cao kháng thể tự nhiên Immunoglobin như IgA, IgD, IgE, IgG, IgM và các tế bào bạch cầu,...</p>
                    </div>
                </div>
                <div class="img-2">
                    <img src="http://localhost/project.vn/ColosPlatium2/public/assets/img/icon-2-2.png" alt="">
                    <div class="text-img">
                        <h5>Lợi khuẩn</h5>
                        <p>Hàng tỉ lợi khuẩn probiotics giúp hệ vi sinh trong đường ruột luôn được cân bằng, hỗ trợ quá trình tiêu hóa cho bé con khi mới sinh...</p>
                    </div>
                </div>
                <div class="img-parent">
                    <img src="http://localhost/project.vn/ColosPlatium2/public/assets/img/thumb-home-2.png" alt="">
                </div>
                <div class="img-3">
                    <img src="http://localhost/project.vn/ColosPlatium2/public/assets/img/icon-2-3.png" alt="">
                    <div class="text-img">
                        <h5>Hàm lượng vitamin cao</h5>
                        <p>Hàm lượng cao các vitamin protein và các khoáng chất thiết yếu phù hợp cho mọi lứa tuổi...</p>
                    </div>
                </div>
                <div class="img-4">
                    <img src="http://localhost/project.vn/ColosPlatium2/public/assets/img/icon-2-4.png" alt="">
                    <div class="text-img">
                        <h5>Hàm lượng canxi</h5>
                        <p>Chứa một hàm lượng rất lớn canxi hỗ trợ cho sự phát triển của xương và các quá trình trao đổi chất khác...</p>
                    </div>
                </div>
            </div>
            <div class="form-sm">
                <form action="" method="POST">
                    <button class="btn btn-primary" type="submit">Đăng ký tư vấn</button>
                </form>
            </div>
        </div>
    </div>
    <!--------home-2--------->

    <div class="home-3">
        <div class="container">
            <div class="icon-3">
                <img src="http://localhost/project.vn/ColosPlatium2/public/assets/img/sua-non.png" alt="">
            </div>
            <div class="text-3">
                <h4>Thông tin chi tiết</h4>
                <div class="cont-3">
                    <h5><strong>1.Công dụng:</strong></h5>
                    <p>Hỗ trợ tăng cường tiêu hóa, giúp ăn ngon miệng. Hỗ trợ nâng cao sức khỏe tăng cường sức đề kháng</p>
                    <h5><strong>2.Đối tượng sử dụng:</strong></h5>
                    <p>trẻ gầy yếu, biếng ăn, suy dinh dưỡng, trẻ cần tăng cường sức đề kháng.</p>
                    <img src="http://localhost/project.vn/ColosPlatium2/public/assets/img/thumb-home-3.png" alt="">
                    <h5><strong>3.Tổng quan tác dụng thành phần sữa:</strong></h5>
                    <p>Thành phần chính:</p>
                    <p>
                        - Sữa non: Sữa non được hình thành ở các bà mẹ sau sinh. Sữa non được sản xuất ở số lượng thấp ở vài ngày đầu sau khi sinh, rất giàu thành phần
                        miễn dịch như IgA, Lactoferin, bạch cầu cũng nhưc ác yếu tố phát triển, yếu tố tăng trưởng bền bỉ. Sữa non cũng chứa nồng độ đường thấp, chức năng chính của nó là miễn dịch,
                        nồng độ natri clorua, magie cao hơn nồng độ canxi, sữa non thấp hơn sữa sau này.
                    </p>
                    <p>
                        - Acid folic: Axit folic là một vitamin hòa tan trong nước thuộc nhóm B. Đối với người, acid folic trong thức ăn cần thiết để tổng hợp nuclecprotein và duy trì tạo hồng
                        cầu bình thường. Trong thực tế, acid folic bị khử thành tetrahydrofolat hoạt động như một coenzyme trong nhiều quá trình chuyển hóa, bao gồm tổng hợp purin và thyhidylat ở người thiết hụt acid
                        folic tác động xấu đến tổng hợp DHA, dẫn đến hình thành nguyên hồng cầu to. Acid folic cũng tham gia vào chuyển hóa acid amin và sản sinh format. Acid folic làm tăng đào thải acid formic,
                        là một chất chuyển hóa trong nhiễm độc methanol.
                    </p>
                    <p>
                        - Vitamin B1: Cần thiết cho quá trình trao đổi chất, sinh trưởng và phát triển cơ thể. Cần thiết cho quá cho hoạt động của hệ thần kinh,
                    </p>
                    <p>
                        - Kẽm: Bổ sung kẽm và trẻ còi xương ở Ethiopiac. Nghiên cứu ngẫu nhiên có đối chứng.
                    </p>
                </div>
                <div class="form-3">
                    <button type="submit" class="btn btn-primary"> <i class="icon-buy"></i> Đặt mua ngay</button>
                </div>
            </div>
            <div class="next-news">
                <div class="row">
                    <div class="col-lg-6">
                        <h4>Những khoáng chất và vitamin có trong sữa non Smart Colostrum</h4>
                        <div class="info-news">
                            <p><i class="icon-star"></i><span>Vitamin A cần thiết cho mắt, sự cần thiết cho da và các chức năng của hệ miễn dịch cơ thể.</span></p>
                            <p><i class="icon-star"></i><span>Beta-caroten, tiền chất của vitamin A, vitamin E đóng vai trò là chất antioxydant, bảo vệ cơ thể chống lại tác nhân gây oxy hóa.</span></p>
                            <p><i class="icon-star"></i><span>Vitamin K cần thiết cho quá trình đông máu và tham gia quá trình tái tạo hệ xương khớp.</span></p>
                            <p><i class="icon-star"></i><span>Vitamin B1 giúp phòng bệnh Beriberi liên quan đến dấu hiệu rối loạn và vận động hệ thần kinh.</span></p>
                            <p><i class="icon-star"></i><span>Vitamin B2 giúp kích thích tăng trưởng.</span></p>
                            <p><i class="icon-star"></i><span>Vitamin B12 trực tiếp tham gia vào quá trình sinh học cần thiết cho tổng hợp AND góp phần trực tiếp tham gia vào quá trình
                                phát triển và phân chia tế bào</span></p>
                        </div>
                        <div class="form-3">
                            <button type="submit" class="btn btn-primary"> <i class="icon-buy"></i> Đặt mua ngay</button>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img src="http://localhost/project.vn/ColosPlatium2/public/assets/img/baby-home-3.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!----------home-3------------->

    <div class="home-4">
        <div class="container">
            <div class="thumb-4">
                <img src="http://localhost/project.vn/ColosPlatium2/public/assets/img/khcs.png" alt="">
            </div>
            <div class="text-4">
                <div class="col-lg-4">
                    <div class="div1">
                        <div class="bg-text">
                            <div class="text">
                                Sữa non có thể gọi là vắc-xin tự nhiên và an toàn nhất giúp con phòng tránh bệnh cũng như tăng cường hấp thu chất dinh dưỡng để tăng cân và khỏe mạnh hơn.
                            </div>
                        </div>
                        <div class="tg">
                            <div class="img-tg">
                                <img src="http://localhost/project.vn/ColosPlatium2/public/assets/img/icon-fm.png" alt="">
                            </div>
                            <div class="name">
                                <p class="b">Hồ Ngọc Hà</p>
                                <p>Giáo viên mầm non</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="div1">
                        <div class="bg-text">
                            <div class="text">
                                Sữa non có thể gọi là vắc-xin tự nhiên và an toàn nhất giúp con phòng tránh bệnh cũng như tăng cường hấp thu chất dinh dưỡng để tăng cân và khỏe mạnh hơn.
                            </div>
                        </div>
                        <div class="tg">
                            <div class="img-tg">
                                <img src="http://localhost/project.vn/ColosPlatium2/public/assets/img/icon-fm.png" alt="">
                            </div>
                            <div class="name">
                                <p class="b">Hồ Ngọc Hà</p>
                                <p>Giáo viên mầm non</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="div1">
                        <div class="bg-text">
                            <div class="text">
                                Sữa non có thể gọi là vắc-xin tự nhiên và an toàn nhất giúp con phòng tránh bệnh cũng như tăng cường hấp thu chất dinh dưỡng để tăng cân và khỏe mạnh hơn.
                            </div>
                        </div>
                        <div class="tg">
                            <div class="img-tg">
                                <img src="http://localhost/project.vn/ColosPlatium2/public/assets/img/icon-fm.png" alt="">
                            </div>
                            <div class="name">
                                <p class="b">Hồ Ngọc Hà</p>
                                <p>Giáo viên mầm non</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('footer')
    @include('Statics::block.footer')
@endsection