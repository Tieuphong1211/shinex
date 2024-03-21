<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Contracts\View\Factory;


class ProductController extends Controller
{
    public function detail($slug): View|Application|Factory
    {
        $product = [];
        switch ($slug){
            case 'whitening-remove-freckle-cream':
                $product = (object)[
                    'name' => 'SHINEX Whitening Remove Freckle Cream - Kem Chống Lão Hoá Chuyên Sâu',
                    'images' => [
                        'images/products/image_1_1.jpg',
                        'images/products/image_1_2.jpg',
                        'images/products/image_1_3.jpg',
                        'images/products/image_1_4.jpg',
                        'images/products/image_1_5.jpg',
                        'images/products/image_1_6.jpg',
                        'images/products/image_1_7.jpg',
                        'images/products/image_1_8.jpg',
                    ],
                    'description' => "Kem Whitening Remove Freckle Cream ShineX – Kem chống lão hóa chuyên sâu là dòng mỹ phẩm trị liệu cao cấp đến từ thương hiệu ShineX. Công thức độc quyền đẩy nhanh quá trình bóc tách, thay mới lớp tế bào sừng già cỗi, tái phục hồi làn da từ sâu bên trong.  đồng thời làm mờ ngăn chặn sự hình thành của các vết thâm, sạm, nám, xỉn màu  . Làn da sẽ được thay đổi ngoạn mục bất ngờ, đẩy lùi tất cả các dấu hiệu lão hóa và lấy lại làn da tươi trẻ tràn đầy sức sống.",
                    'content' => '<h3><strong>Th&agrave;nh phần v&agrave; c&ocirc;ng dụng sản phẩm:</strong></h3>
<p><strong>1. Th&agrave;nh phần ch&iacute;nh:</strong></p>
<ul>
<li><strong>Niacinamide</strong>: phức hợp của vtmB3 l&agrave; hoạt chất c&oacute; t&aacute;c dụng điều trị c&aacute;c vấn đề về l&atilde;o h&oacute;a. Hoạt động l&agrave;m giảm sự sản sinh của melanin từ đ&oacute; c&oacute; thể hỗ trợ ngăn chặn h&igrave;nh th&agrave;nh c&aacute;c vết th&acirc;m, sạm da hiệu quả. Chống oxy h&oacute;a, duy tr&igrave; độ ẩm v&agrave; tang sinh ceramide gi&uacute;p củng cổ h&agrave;ng r&agrave;o bảo vệ tự nhi&ecirc;n tr&ecirc;n da. l&agrave;m giảm tho&aacute;t nước l&ecirc;n đến 24%. Từ đ&oacute; Điều tiết b&atilde; nhờn&nbsp; khiến lỗ ch&acirc;n l&ocirc;ng trở n&ecirc;n th&ocirc;ng tho&aacute;ng hơn.</li>
<li><strong>Ascobic acid:</strong> Vtm C dạng ổn định gi&uacute;p chống lại qu&aacute; tr&igrave;nh oxy h&oacute;a tự nhi&ecirc;n mạnh mẽ. Ngăn chặn v&agrave; l&agrave;m giảm sự h&igrave;nh th&agrave;nh c&aacute;c vết th&acirc;m sạm, n&aacute;m. Bảo vệ da trước c&aacute;c t&aacute;c nh&acirc;n g&acirc;y hại ngo&agrave;i m&ocirc;i trường. L&agrave;n da s&aacute;ng khỏe v&agrave; đồng đ&ecirc;u m&agrave;u.</li>
<li><strong>Glycyrrhiza Glabra (Licorice) Root Extract:</strong> l&agrave; chiết xuất từ rễ c&acirc;y cam thảo được sử dụng rất phổ biến trong c&aacute;c b&agrave;i thuốc Đ&ocirc;ng Y, c&oacute; chứa glabridin &ndash; c&oacute; đặc t&iacute;nh l&agrave;m s&aacute;ng da, c&oacute; t&aacute;c dụng ức chế sản sinh melanin tương đương hydroquinone nhưng an to&agrave;n v&agrave; hiệu quả hơn rất nhiều. Glabridin c&ograve;n l&agrave; chất chống oxy h&oacute;a v&agrave; chống vi&ecirc;m ngo&agrave;i ra hỗ trợ l&agrave;m dịu, l&agrave;m l&agrave;nh c&aacute;c vết thương nhanh ch&oacute;ng.</li>
<li><strong>Chiết xuất rễ c&acirc;y mẫu đơn: </strong>chống oxy h&oacute;a v&agrave; bảo vệ da khỏi c&aacute;c gốc tự do.</li>
</ul>
<p><strong>2. C&ocirc;ng dụng ch&iacute;nh:</strong></p>
<ul>
<li>L&agrave;m s&aacute;ng da, l&agrave;m mờ v&agrave; ngăn ngừa vết th&acirc;m, n&aacute;m mảng, t&agrave;n nh&agrave;ng.</li>
<li>Thay mới, t&aacute;i tạo v&agrave; trẻ h&oacute;a l&agrave;n da đang gặp c&aacute;c t&igrave;nh trạng th&ocirc;, sần, lỗ ch&acirc;n l&ocirc;ng to.</li>
<li>Điều chỉnh c&aacute;c sắc tố v&agrave; ngăn ngừa c&aacute;c đốm n&acirc;u mới h&igrave;nh th&agrave;nh</li>
</ul>
<p><strong>3. Chỉ định</strong></p>
<ul>
<li>Da sần s&ugrave;i, lỗ ch&acirc;n l&ocirc;ng to</li>
<li>Da kh&ocirc; xỉn m&agrave;u, thiếu rạng rỡ</li>
<li>Da c&oacute; vấn đề về sắc tố</li>
</ul>
<p><strong>4. C&aacute;ch d&ugrave;ng:</strong></p>
<p>Thoa đều sản phẩm sau khi l&agrave;m sạch da v&agrave;o buổi tối, tr&aacute;nh v&ugrave;ng mắt, m&aacute;t xa đến khi sản phẩm được thẩm thấu ho&agrave;n to&agrave;n.</p>'
                ];
                break;
            case 'repair-anti-aging-cream':
                $product = (object)[
                    'name' => 'SHINEX Whitening Remove Freckle Cream - Kem Chống Lão Hoá Chuyên Sâu',
                    'images' => [
                        'images/products/image_1_1.jpg',
                        'images/products/image_1_2.jpg',
                        'images/products/image_1_3.jpg',
                        'images/products/image_1_4.jpg',
                        'images/products/image_1_5.jpg',
                        'images/products/image_1_6.jpg',
                        'images/products/image_1_7.jpg',
                        'images/products/image_1_8.jpg',
                    ],
                    'description' => ": Kem dưỡng trắng trị thâm mờ nám là dòng sản phẩm cao cấp trong việc hỗ trợ điều trị các vấn đề về sắc tố, giúp loại bỏ các vùng da tối màu, thâm sạm. đây là sản phẩm vô cùng hiệu quả trong việc ngăn ngừa sự xuất hiện của các vết thâm và hiện tượng da không đều màu. Thành phần chiết xuất tự nhiên an toàn lành tính, bổ sung các dưỡng chất cần thiết cho da, giúp duy trì làn da tươi sáng đầy sức sống",
                    'content' => '<h3><strong>Th&agrave;nh phần v&agrave; c&ocirc;ng dụng sản phẩm:</strong></h3>
<p><strong>1. Th&agrave;nh phần ch&iacute;nh:</strong></p>
<ul>
<li><strong>Niacinamide</strong>: phức hợp của vtmB3 l&agrave; hoạt chất c&oacute; t&aacute;c dụng điều trị c&aacute;c vấn đề về l&atilde;o h&oacute;a. Hoạt động l&agrave;m giảm sự sản sinh của melanin từ đ&oacute; c&oacute; thể hỗ trợ ngăn chặn h&igrave;nh th&agrave;nh c&aacute;c vết th&acirc;m, sạm da hiệu quả. Chống oxy h&oacute;a, duy tr&igrave; độ ẩm v&agrave; tang sinh ceramide gi&uacute;p củng cổ h&agrave;ng r&agrave;o bảo vệ tự nhi&ecirc;n tr&ecirc;n da. l&agrave;m giảm tho&aacute;t nước l&ecirc;n đến 24%. Từ đ&oacute; Điều tiết b&atilde; nhờn&nbsp; khiến lỗ ch&acirc;n l&ocirc;ng trở n&ecirc;n th&ocirc;ng tho&aacute;ng hơn.</li>
<li><strong>Ascobic acid:</strong> Vtm C dạng ổn định gi&uacute;p chống lại qu&aacute; tr&igrave;nh oxy h&oacute;a tự nhi&ecirc;n mạnh mẽ. Ngăn chặn v&agrave; l&agrave;m giảm sự h&igrave;nh th&agrave;nh c&aacute;c vết th&acirc;m sạm, n&aacute;m. Bảo vệ da trước c&aacute;c t&aacute;c nh&acirc;n g&acirc;y hại ngo&agrave;i m&ocirc;i trường. L&agrave;n da s&aacute;ng khỏe v&agrave; đồng đ&ecirc;u m&agrave;u.</li>
<li><strong>Glycyrrhiza Glabra (Licorice) Root Extract:</strong> l&agrave; chiết xuất từ rễ c&acirc;y cam thảo được sử dụng rất phổ biến trong c&aacute;c b&agrave;i thuốc Đ&ocirc;ng Y, c&oacute; chứa glabridin &ndash; c&oacute; đặc t&iacute;nh l&agrave;m s&aacute;ng da, c&oacute; t&aacute;c dụng ức chế sản sinh melanin tương đương hydroquinone nhưng an to&agrave;n v&agrave; hiệu quả hơn rất nhiều. Glabridin c&ograve;n l&agrave; chất chống oxy h&oacute;a v&agrave; chống vi&ecirc;m ngo&agrave;i ra hỗ trợ l&agrave;m dịu, l&agrave;m l&agrave;nh c&aacute;c vết thương nhanh ch&oacute;ng.</li>
<li><strong>Chiết xuất rễ c&acirc;y mẫu đơn: </strong>chống oxy h&oacute;a v&agrave; bảo vệ da khỏi c&aacute;c gốc tự do.</li>
</ul>
<p><strong>2. C&ocirc;ng dụng ch&iacute;nh:</strong></p>
<ul>
<li>L&agrave;m s&aacute;ng da, l&agrave;m mờ v&agrave; ngăn ngừa vết th&acirc;m, n&aacute;m mảng, t&agrave;n nh&agrave;ng.</li>
<li>Thay mới, t&aacute;i tạo v&agrave; trẻ h&oacute;a l&agrave;n da đang gặp c&aacute;c t&igrave;nh trạng th&ocirc;, sần, lỗ ch&acirc;n l&ocirc;ng to.</li>
<li>Điều chỉnh c&aacute;c sắc tố v&agrave; ngăn ngừa c&aacute;c đốm n&acirc;u mới h&igrave;nh th&agrave;nh</li>
</ul>
<p><strong>3. Chỉ định</strong></p>
<ul>
<li>Da sần s&ugrave;i, lỗ ch&acirc;n l&ocirc;ng to</li>
<li>Da kh&ocirc; xỉn m&agrave;u, thiếu rạng rỡ</li>
<li>Da c&oacute; vấn đề về sắc tố</li>
</ul>
<p><strong>4. C&aacute;ch d&ugrave;ng:</strong></p>
<p>Thoa đều sản phẩm sau khi l&agrave;m sạch da v&agrave;o buổi tối, tr&aacute;nh v&ugrave;ng mắt, m&aacute;t xa đến khi sản phẩm được thẩm thấu ho&agrave;n to&agrave;n.</p>'
                ];
                break;
            case 'smoothing-balance-repair-cream':
                $product = (object)[
                    'name' => 'SHINEX Smoothing balance repair cream',
                    'images' => [
                        'images/products/image_1_1.jpg',
                        'images/products/image_1_2.jpg',
                        'images/products/image_1_3.jpg',
                        'images/products/image_1_4.jpg',
                        'images/products/image_1_5.jpg',
                        'images/products/image_1_6.jpg',
                        'images/products/image_1_7.jpg',
                        'images/products/image_1_8.jpg',
                    ],
                    'description' => ": Kem dưỡng trắng trị thâm mờ nám là dòng sản phẩm cao cấp trong việc hỗ trợ điều trị các vấn đề về sắc tố, giúp loại bỏ các vùng da tối màu, thâm sạm. đây là sản phẩm vô cùng hiệu quả trong việc ngăn ngừa sự xuất hiện của các vết thâm và hiện tượng da không đều màu. Thành phần chiết xuất tự nhiên an toàn lành tính, bổ sung các dưỡng chất cần thiết cho da, giúp duy trì làn da tươi sáng đầy sức sống",
                    'content' => '<h3><strong>Th&agrave;nh phần v&agrave; c&ocirc;ng dụng sản phẩm:</strong></h3>
<p><strong>1. Th&agrave;nh phần ch&iacute;nh:</strong></p>
<ul>
<li><strong>Niacinamide</strong>: phức hợp của vtmB3 l&agrave; hoạt chất c&oacute; t&aacute;c dụng điều trị c&aacute;c vấn đề về l&atilde;o h&oacute;a. Hoạt động l&agrave;m giảm sự sản sinh của melanin từ đ&oacute; c&oacute; thể hỗ trợ ngăn chặn h&igrave;nh th&agrave;nh c&aacute;c vết th&acirc;m, sạm da hiệu quả. Chống oxy h&oacute;a, duy tr&igrave; độ ẩm v&agrave; tang sinh ceramide gi&uacute;p củng cổ h&agrave;ng r&agrave;o bảo vệ tự nhi&ecirc;n tr&ecirc;n da. l&agrave;m giảm tho&aacute;t nước l&ecirc;n đến 24%. Từ đ&oacute; Điều tiết b&atilde; nhờn&nbsp; khiến lỗ ch&acirc;n l&ocirc;ng trở n&ecirc;n th&ocirc;ng tho&aacute;ng hơn.</li>
<li><strong>Ascobic acid:</strong> Vtm C dạng ổn định gi&uacute;p chống lại qu&aacute; tr&igrave;nh oxy h&oacute;a tự nhi&ecirc;n mạnh mẽ. Ngăn chặn v&agrave; l&agrave;m giảm sự h&igrave;nh th&agrave;nh c&aacute;c vết th&acirc;m sạm, n&aacute;m. Bảo vệ da trước c&aacute;c t&aacute;c nh&acirc;n g&acirc;y hại ngo&agrave;i m&ocirc;i trường. L&agrave;n da s&aacute;ng khỏe v&agrave; đồng đ&ecirc;u m&agrave;u.</li>
<li><strong>Glycyrrhiza Glabra (Licorice) Root Extract:</strong> l&agrave; chiết xuất từ rễ c&acirc;y cam thảo được sử dụng rất phổ biến trong c&aacute;c b&agrave;i thuốc Đ&ocirc;ng Y, c&oacute; chứa glabridin &ndash; c&oacute; đặc t&iacute;nh l&agrave;m s&aacute;ng da, c&oacute; t&aacute;c dụng ức chế sản sinh melanin tương đương hydroquinone nhưng an to&agrave;n v&agrave; hiệu quả hơn rất nhiều. Glabridin c&ograve;n l&agrave; chất chống oxy h&oacute;a v&agrave; chống vi&ecirc;m ngo&agrave;i ra hỗ trợ l&agrave;m dịu, l&agrave;m l&agrave;nh c&aacute;c vết thương nhanh ch&oacute;ng.</li>
<li><strong>Chiết xuất rễ c&acirc;y mẫu đơn: </strong>chống oxy h&oacute;a v&agrave; bảo vệ da khỏi c&aacute;c gốc tự do.</li>
</ul>
<p><strong>2. C&ocirc;ng dụng ch&iacute;nh:</strong></p>
<ul>
<li>L&agrave;m s&aacute;ng da, l&agrave;m mờ v&agrave; ngăn ngừa vết th&acirc;m, n&aacute;m mảng, t&agrave;n nh&agrave;ng.</li>
<li>Thay mới, t&aacute;i tạo v&agrave; trẻ h&oacute;a l&agrave;n da đang gặp c&aacute;c t&igrave;nh trạng th&ocirc;, sần, lỗ ch&acirc;n l&ocirc;ng to.</li>
<li>Điều chỉnh c&aacute;c sắc tố v&agrave; ngăn ngừa c&aacute;c đốm n&acirc;u mới h&igrave;nh th&agrave;nh</li>
</ul>
<p><strong>3. Chỉ định</strong></p>
<ul>
<li>Da sần s&ugrave;i, lỗ ch&acirc;n l&ocirc;ng to</li>
<li>Da kh&ocirc; xỉn m&agrave;u, thiếu rạng rỡ</li>
<li>Da c&oacute; vấn đề về sắc tố</li>
</ul>
<p><strong>4. C&aacute;ch d&ugrave;ng:</strong></p>
<p>Thoa đều sản phẩm sau khi l&agrave;m sạch da v&agrave;o buổi tối, tr&aacute;nh v&ugrave;ng mắt, m&aacute;t xa đến khi sản phẩm được thẩm thấu ho&agrave;n to&agrave;n.</p>'
                ];
                break;
            case 'serum-smoothing-and-restoring-essential-oils':
                $product = (object)[
                    'name' => 'SHINEX Serum smoothing and restoring essential oils',
                    'images' => [
                        'images/products/image_1_1.jpg',
                        'images/products/image_1_2.jpg',
                        'images/products/image_1_3.jpg',
                        'images/products/image_1_4.jpg',
                        'images/products/image_1_5.jpg',
                        'images/products/image_1_6.jpg',
                        'images/products/image_1_7.jpg',
                        'images/products/image_1_8.jpg',
                    ],
                    'description' => ": Kem dưỡng trắng trị thâm mờ nám là dòng sản phẩm cao cấp trong việc hỗ trợ điều trị các vấn đề về sắc tố, giúp loại bỏ các vùng da tối màu, thâm sạm. đây là sản phẩm vô cùng hiệu quả trong việc ngăn ngừa sự xuất hiện của các vết thâm và hiện tượng da không đều màu. Thành phần chiết xuất tự nhiên an toàn lành tính, bổ sung các dưỡng chất cần thiết cho da, giúp duy trì làn da tươi sáng đầy sức sống",
                    'content' => '<h3><strong>Th&agrave;nh phần v&agrave; c&ocirc;ng dụng sản phẩm:</strong></h3>
<p><strong>1. Th&agrave;nh phần ch&iacute;nh:</strong></p>
<ul>
<li><strong>Niacinamide</strong>: phức hợp của vtmB3 l&agrave; hoạt chất c&oacute; t&aacute;c dụng điều trị c&aacute;c vấn đề về l&atilde;o h&oacute;a. Hoạt động l&agrave;m giảm sự sản sinh của melanin từ đ&oacute; c&oacute; thể hỗ trợ ngăn chặn h&igrave;nh th&agrave;nh c&aacute;c vết th&acirc;m, sạm da hiệu quả. Chống oxy h&oacute;a, duy tr&igrave; độ ẩm v&agrave; tang sinh ceramide gi&uacute;p củng cổ h&agrave;ng r&agrave;o bảo vệ tự nhi&ecirc;n tr&ecirc;n da. l&agrave;m giảm tho&aacute;t nước l&ecirc;n đến 24%. Từ đ&oacute; Điều tiết b&atilde; nhờn&nbsp; khiến lỗ ch&acirc;n l&ocirc;ng trở n&ecirc;n th&ocirc;ng tho&aacute;ng hơn.</li>
<li><strong>Ascobic acid:</strong> Vtm C dạng ổn định gi&uacute;p chống lại qu&aacute; tr&igrave;nh oxy h&oacute;a tự nhi&ecirc;n mạnh mẽ. Ngăn chặn v&agrave; l&agrave;m giảm sự h&igrave;nh th&agrave;nh c&aacute;c vết th&acirc;m sạm, n&aacute;m. Bảo vệ da trước c&aacute;c t&aacute;c nh&acirc;n g&acirc;y hại ngo&agrave;i m&ocirc;i trường. L&agrave;n da s&aacute;ng khỏe v&agrave; đồng đ&ecirc;u m&agrave;u.</li>
<li><strong>Glycyrrhiza Glabra (Licorice) Root Extract:</strong> l&agrave; chiết xuất từ rễ c&acirc;y cam thảo được sử dụng rất phổ biến trong c&aacute;c b&agrave;i thuốc Đ&ocirc;ng Y, c&oacute; chứa glabridin &ndash; c&oacute; đặc t&iacute;nh l&agrave;m s&aacute;ng da, c&oacute; t&aacute;c dụng ức chế sản sinh melanin tương đương hydroquinone nhưng an to&agrave;n v&agrave; hiệu quả hơn rất nhiều. Glabridin c&ograve;n l&agrave; chất chống oxy h&oacute;a v&agrave; chống vi&ecirc;m ngo&agrave;i ra hỗ trợ l&agrave;m dịu, l&agrave;m l&agrave;nh c&aacute;c vết thương nhanh ch&oacute;ng.</li>
<li><strong>Chiết xuất rễ c&acirc;y mẫu đơn: </strong>chống oxy h&oacute;a v&agrave; bảo vệ da khỏi c&aacute;c gốc tự do.</li>
</ul>
<p><strong>2. C&ocirc;ng dụng ch&iacute;nh:</strong></p>
<ul>
<li>L&agrave;m s&aacute;ng da, l&agrave;m mờ v&agrave; ngăn ngừa vết th&acirc;m, n&aacute;m mảng, t&agrave;n nh&agrave;ng.</li>
<li>Thay mới, t&aacute;i tạo v&agrave; trẻ h&oacute;a l&agrave;n da đang gặp c&aacute;c t&igrave;nh trạng th&ocirc;, sần, lỗ ch&acirc;n l&ocirc;ng to.</li>
<li>Điều chỉnh c&aacute;c sắc tố v&agrave; ngăn ngừa c&aacute;c đốm n&acirc;u mới h&igrave;nh th&agrave;nh</li>
</ul>
<p><strong>3. Chỉ định</strong></p>
<ul>
<li>Da sần s&ugrave;i, lỗ ch&acirc;n l&ocirc;ng to</li>
<li>Da kh&ocirc; xỉn m&agrave;u, thiếu rạng rỡ</li>
<li>Da c&oacute; vấn đề về sắc tố</li>
</ul>
<p><strong>4. C&aacute;ch d&ugrave;ng:</strong></p>
<p>Thoa đều sản phẩm sau khi l&agrave;m sạch da v&agrave;o buổi tối, tr&aacute;nh v&ugrave;ng mắt, m&aacute;t xa đến khi sản phẩm được thẩm thấu ho&agrave;n to&agrave;n.</p>'
                ];
                break;
            case 'repairing-active-white-serum':
                $product = (object)[
                    'name' => 'SHINEX Repairing active white serum',
                    'images' => [
                        'images/products/image_1_1.jpg',
                        'images/products/image_1_2.jpg',
                        'images/products/image_1_3.jpg',
                        'images/products/image_1_4.jpg',
                        'images/products/image_1_5.jpg',
                        'images/products/image_1_6.jpg',
                        'images/products/image_1_7.jpg',
                        'images/products/image_1_8.jpg',
                    ],
                    'description' => ": Kem dưỡng trắng trị thâm mờ nám là dòng sản phẩm cao cấp trong việc hỗ trợ điều trị các vấn đề về sắc tố, giúp loại bỏ các vùng da tối màu, thâm sạm. đây là sản phẩm vô cùng hiệu quả trong việc ngăn ngừa sự xuất hiện của các vết thâm và hiện tượng da không đều màu. Thành phần chiết xuất tự nhiên an toàn lành tính, bổ sung các dưỡng chất cần thiết cho da, giúp duy trì làn da tươi sáng đầy sức sống",
                    'content' => '<h3><strong>Th&agrave;nh phần v&agrave; c&ocirc;ng dụng sản phẩm:</strong></h3>
<p><strong>1. Th&agrave;nh phần ch&iacute;nh:</strong></p>
<ul>
<li><strong>Niacinamide</strong>: phức hợp của vtmB3 l&agrave; hoạt chất c&oacute; t&aacute;c dụng điều trị c&aacute;c vấn đề về l&atilde;o h&oacute;a. Hoạt động l&agrave;m giảm sự sản sinh của melanin từ đ&oacute; c&oacute; thể hỗ trợ ngăn chặn h&igrave;nh th&agrave;nh c&aacute;c vết th&acirc;m, sạm da hiệu quả. Chống oxy h&oacute;a, duy tr&igrave; độ ẩm v&agrave; tang sinh ceramide gi&uacute;p củng cổ h&agrave;ng r&agrave;o bảo vệ tự nhi&ecirc;n tr&ecirc;n da. l&agrave;m giảm tho&aacute;t nước l&ecirc;n đến 24%. Từ đ&oacute; Điều tiết b&atilde; nhờn&nbsp; khiến lỗ ch&acirc;n l&ocirc;ng trở n&ecirc;n th&ocirc;ng tho&aacute;ng hơn.</li>
<li><strong>Ascobic acid:</strong> Vtm C dạng ổn định gi&uacute;p chống lại qu&aacute; tr&igrave;nh oxy h&oacute;a tự nhi&ecirc;n mạnh mẽ. Ngăn chặn v&agrave; l&agrave;m giảm sự h&igrave;nh th&agrave;nh c&aacute;c vết th&acirc;m sạm, n&aacute;m. Bảo vệ da trước c&aacute;c t&aacute;c nh&acirc;n g&acirc;y hại ngo&agrave;i m&ocirc;i trường. L&agrave;n da s&aacute;ng khỏe v&agrave; đồng đ&ecirc;u m&agrave;u.</li>
<li><strong>Glycyrrhiza Glabra (Licorice) Root Extract:</strong> l&agrave; chiết xuất từ rễ c&acirc;y cam thảo được sử dụng rất phổ biến trong c&aacute;c b&agrave;i thuốc Đ&ocirc;ng Y, c&oacute; chứa glabridin &ndash; c&oacute; đặc t&iacute;nh l&agrave;m s&aacute;ng da, c&oacute; t&aacute;c dụng ức chế sản sinh melanin tương đương hydroquinone nhưng an to&agrave;n v&agrave; hiệu quả hơn rất nhiều. Glabridin c&ograve;n l&agrave; chất chống oxy h&oacute;a v&agrave; chống vi&ecirc;m ngo&agrave;i ra hỗ trợ l&agrave;m dịu, l&agrave;m l&agrave;nh c&aacute;c vết thương nhanh ch&oacute;ng.</li>
<li><strong>Chiết xuất rễ c&acirc;y mẫu đơn: </strong>chống oxy h&oacute;a v&agrave; bảo vệ da khỏi c&aacute;c gốc tự do.</li>
</ul>
<p><strong>2. C&ocirc;ng dụng ch&iacute;nh:</strong></p>
<ul>
<li>L&agrave;m s&aacute;ng da, l&agrave;m mờ v&agrave; ngăn ngừa vết th&acirc;m, n&aacute;m mảng, t&agrave;n nh&agrave;ng.</li>
<li>Thay mới, t&aacute;i tạo v&agrave; trẻ h&oacute;a l&agrave;n da đang gặp c&aacute;c t&igrave;nh trạng th&ocirc;, sần, lỗ ch&acirc;n l&ocirc;ng to.</li>
<li>Điều chỉnh c&aacute;c sắc tố v&agrave; ngăn ngừa c&aacute;c đốm n&acirc;u mới h&igrave;nh th&agrave;nh</li>
</ul>
<p><strong>3. Chỉ định</strong></p>
<ul>
<li>Da sần s&ugrave;i, lỗ ch&acirc;n l&ocirc;ng to</li>
<li>Da kh&ocirc; xỉn m&agrave;u, thiếu rạng rỡ</li>
<li>Da c&oacute; vấn đề về sắc tố</li>
</ul>
<p><strong>4. C&aacute;ch d&ugrave;ng:</strong></p>
<p>Thoa đều sản phẩm sau khi l&agrave;m sạch da v&agrave;o buổi tối, tr&aacute;nh v&ugrave;ng mắt, m&aacute;t xa đến khi sản phẩm được thẩm thấu ho&agrave;n to&agrave;n.</p>'
                ];
                break;
            case 'polypeptide':
                $product = (object)[
                    'name' => 'SHINEX Polypeptide',
                    'images' => [
                        'images/products/image_1_1.jpg',
                        'images/products/image_1_2.jpg',
                        'images/products/image_1_3.jpg',
                        'images/products/image_1_4.jpg',
                        'images/products/image_1_5.jpg',
                        'images/products/image_1_6.jpg',
                        'images/products/image_1_7.jpg',
                        'images/products/image_1_8.jpg',
                    ],
                    'description' => ": Kem dưỡng trắng trị thâm mờ nám là dòng sản phẩm cao cấp trong việc hỗ trợ điều trị các vấn đề về sắc tố, giúp loại bỏ các vùng da tối màu, thâm sạm. đây là sản phẩm vô cùng hiệu quả trong việc ngăn ngừa sự xuất hiện của các vết thâm và hiện tượng da không đều màu. Thành phần chiết xuất tự nhiên an toàn lành tính, bổ sung các dưỡng chất cần thiết cho da, giúp duy trì làn da tươi sáng đầy sức sống",
                    'content' => '<h3><strong>Th&agrave;nh phần v&agrave; c&ocirc;ng dụng sản phẩm:</strong></h3>
<p><strong>1. Th&agrave;nh phần ch&iacute;nh:</strong></p>
<ul>
<li><strong>Niacinamide</strong>: phức hợp của vtmB3 l&agrave; hoạt chất c&oacute; t&aacute;c dụng điều trị c&aacute;c vấn đề về l&atilde;o h&oacute;a. Hoạt động l&agrave;m giảm sự sản sinh của melanin từ đ&oacute; c&oacute; thể hỗ trợ ngăn chặn h&igrave;nh th&agrave;nh c&aacute;c vết th&acirc;m, sạm da hiệu quả. Chống oxy h&oacute;a, duy tr&igrave; độ ẩm v&agrave; tang sinh ceramide gi&uacute;p củng cổ h&agrave;ng r&agrave;o bảo vệ tự nhi&ecirc;n tr&ecirc;n da. l&agrave;m giảm tho&aacute;t nước l&ecirc;n đến 24%. Từ đ&oacute; Điều tiết b&atilde; nhờn&nbsp; khiến lỗ ch&acirc;n l&ocirc;ng trở n&ecirc;n th&ocirc;ng tho&aacute;ng hơn.</li>
<li><strong>Ascobic acid:</strong> Vtm C dạng ổn định gi&uacute;p chống lại qu&aacute; tr&igrave;nh oxy h&oacute;a tự nhi&ecirc;n mạnh mẽ. Ngăn chặn v&agrave; l&agrave;m giảm sự h&igrave;nh th&agrave;nh c&aacute;c vết th&acirc;m sạm, n&aacute;m. Bảo vệ da trước c&aacute;c t&aacute;c nh&acirc;n g&acirc;y hại ngo&agrave;i m&ocirc;i trường. L&agrave;n da s&aacute;ng khỏe v&agrave; đồng đ&ecirc;u m&agrave;u.</li>
<li><strong>Glycyrrhiza Glabra (Licorice) Root Extract:</strong> l&agrave; chiết xuất từ rễ c&acirc;y cam thảo được sử dụng rất phổ biến trong c&aacute;c b&agrave;i thuốc Đ&ocirc;ng Y, c&oacute; chứa glabridin &ndash; c&oacute; đặc t&iacute;nh l&agrave;m s&aacute;ng da, c&oacute; t&aacute;c dụng ức chế sản sinh melanin tương đương hydroquinone nhưng an to&agrave;n v&agrave; hiệu quả hơn rất nhiều. Glabridin c&ograve;n l&agrave; chất chống oxy h&oacute;a v&agrave; chống vi&ecirc;m ngo&agrave;i ra hỗ trợ l&agrave;m dịu, l&agrave;m l&agrave;nh c&aacute;c vết thương nhanh ch&oacute;ng.</li>
<li><strong>Chiết xuất rễ c&acirc;y mẫu đơn: </strong>chống oxy h&oacute;a v&agrave; bảo vệ da khỏi c&aacute;c gốc tự do.</li>
</ul>
<p><strong>2. C&ocirc;ng dụng ch&iacute;nh:</strong></p>
<ul>
<li>L&agrave;m s&aacute;ng da, l&agrave;m mờ v&agrave; ngăn ngừa vết th&acirc;m, n&aacute;m mảng, t&agrave;n nh&agrave;ng.</li>
<li>Thay mới, t&aacute;i tạo v&agrave; trẻ h&oacute;a l&agrave;n da đang gặp c&aacute;c t&igrave;nh trạng th&ocirc;, sần, lỗ ch&acirc;n l&ocirc;ng to.</li>
<li>Điều chỉnh c&aacute;c sắc tố v&agrave; ngăn ngừa c&aacute;c đốm n&acirc;u mới h&igrave;nh th&agrave;nh</li>
</ul>
<p><strong>3. Chỉ định</strong></p>
<ul>
<li>Da sần s&ugrave;i, lỗ ch&acirc;n l&ocirc;ng to</li>
<li>Da kh&ocirc; xỉn m&agrave;u, thiếu rạng rỡ</li>
<li>Da c&oacute; vấn đề về sắc tố</li>
</ul>
<p><strong>4. C&aacute;ch d&ugrave;ng:</strong></p>
<p>Thoa đều sản phẩm sau khi l&agrave;m sạch da v&agrave;o buổi tối, tr&aacute;nh v&ugrave;ng mắt, m&aacute;t xa đến khi sản phẩm được thẩm thấu ho&agrave;n to&agrave;n.</p>'
                ];
                break;
            default:
                break;
        }
        return view('front.content.product.productDetail',['product' => $product]);
    }
}
