<?php

use Illuminate\Support\Facades\Route;

$sharedData = fn () => [
    'businessSectors' => [
        ['id' => 'nong-nghiep', 'title' => 'Nông nghiệp', 'title_en' => 'Agriculture', 'image' => 'images/ttc/agriculture.jpg', 'desc' => 'TTC AgriS phát triển hệ sinh thái nông nghiệp tuần hoàn, công nghệ cao và bền vững.', 'desc_en' => 'TTC AgriS develops a sustainable high-tech circular agriculture ecosystem.', 'route' => 'business.agriculture'],
        ['id' => 'nang-luong', 'title' => 'Năng lượng', 'title_en' => 'Energy', 'image' => 'images/ttc/energy.jpg', 'desc' => 'TTC đầu tư và vận hành các nguồn năng lượng sạch, đóng góp cho phát triển xanh.', 'desc_en' => 'TTC invests in and operates clean-energy assets.', 'route' => 'business.energy'],
        ['id' => 'bat-dong-san', 'title' => 'Bất động sản', 'title_en' => 'Real Estate', 'image' => 'images/ttc/hero-3.jpg', 'desc' => 'TTC Land kiến tạo những không gian sống và giá trị bền vững cho khách hàng.', 'desc_en' => 'TTC Land creates lasting living spaces and value.', 'route' => 'business.real_estate'],
        ['id' => 'bat-dong-san-cong-nghiep', 'title' => 'Bất động sản Công nghiệp', 'title_en' => 'Industrial Real Estate', 'image' => 'images/ttc/industrial.jpg', 'desc' => 'Hạ tầng khu công nghiệp và logistics hiện đại, đáp ứng nhu cầu nhà đầu tư.', 'desc_en' => 'Modern industrial and logistics infrastructure for investors.', 'route' => 'business.industrial'],
        ['id' => 'du-lich', 'title' => 'Du lịch', 'title_en' => 'Hospitality', 'image' => 'images/ttc/hospitality.jpg', 'desc' => 'Hệ thống khách sạn, khu nghỉ dưỡng và điểm đến giàu trải nghiệm trên cả nước.', 'desc_en' => 'Hotels, resorts and memorable destinations nationwide.', 'route' => 'business.hospitality'],
        ['id' => 'giao-duc', 'title' => 'Giáo dục', 'title_en' => 'Education', 'image' => 'images/ttc/education.jpg', 'desc' => 'Đào tạo nguồn nhân lực chất lượng cao, đồng hành cùng sự phát triển địa phương.', 'desc_en' => 'High-quality education for local development.', 'route' => 'business.education'],
    ],
    'news' => [
        ['title' => 'Khánh thành trạm dừng nghỉ TTC Châu Thành trên cao tốc Vĩnh Hảo - Phan Thiết', 'title_en' => 'TTC Chau Thanh rest stop inaugurated', 'date' => '11/08/2026', 'image' => 'https://www.ttcgroup.vn/Data/Sites/1/News/11046/1.jpg', 'summary' => 'Tổ hợp dịch vụ, tiện ích TTC Châu Thành chính thức khánh thành, phục vụ người dân và du khách.', 'summary_en' => 'The TTC Chau Thanh service complex has officially opened.'],
        ['title' => 'Khai mạc Kỳ họp không thường lệ thứ Nhất, Quốc hội khóa XVI', 'title_en' => 'First extraordinary session of the 16th National Assembly', 'date' => '10/08/2026', 'image' => 'https://www.ttcgroup.vn/Data/Sites/1/News/11045/279a1142.jpg', 'summary' => 'Cộng đồng doanh nghiệp kỳ vọng những chuyển biến mới để khơi thông nguồn lực phát triển.', 'summary_en' => 'The business community expects changes to unlock development resources.'],
        ['title' => 'TTC Đại Tín kỷ niệm 10 năm thành lập, hướng tới giai đoạn phát triển mới', 'title_en' => 'TTC Dai Tin celebrates its tenth anniversary', 'date' => '08/08/2026', 'image' => 'https://www.ttcgroup.vn/Data/Sites/1/News/11040/1.jpg', 'summary' => 'Dấu mốc mới khẳng định hành trình phát triển bền vững trong hệ sinh thái TTC.', 'summary_en' => 'A milestone for sustainable development in the TTC ecosystem.'],
    ],
    'memberCompanies' => [
        ['name' => 'TTC AgriS', 'logo' => 'AGRIS', 'image' => 'images/ttc/member-agris.png', 'link' => 'https://ttcagris.com.vn', 'color' => '#15803d'],
        ['name' => 'GEC', 'logo' => 'GEC', 'link' => 'https://gec.vn', 'color' => '#eab308'],
        ['name' => 'TTC Land', 'logo' => 'LAND', 'image' => 'images/ttc/member-land.png', 'link' => 'https://ttcland.vn', 'color' => '#1d4ed8'],
        ['name' => 'TTC Industrial', 'logo' => 'INDUS', 'image' => 'images/ttc/member-industrial.png', 'link' => 'https://ttcindustrial.vn', 'color' => '#475569'],
        ['name' => 'TTC Hospitality', 'logo' => 'HOSP', 'image' => 'images/ttc/member-hospitality.png', 'link' => 'https://ttchospitality.vn', 'color' => '#a21caf'],
        ['name' => 'Yersin University', 'logo' => 'YERSIN', 'link' => 'https://yersin.edu.vn', 'color' => '#b91c1c'],
        ['name' => 'TTC Education', 'logo' => 'EDUC', 'link' => 'https://ttceducation.vn', 'color' => '#0369a1'],
    ],
];

Route::get('/', fn () => view('home.index', $sharedData()))->name('home');
Route::get('/gioi-thieu', fn () => view('about.index', $sharedData()))->name('about');
Route::get('/gioi-thieu/lich-su', fn () => view('about.history', $sharedData()))->name('about.history');
Route::get('/gioi-thieu/don-vi-thanh-vien', fn () => view('about.members', $sharedData()))->name('about.members');
Route::get('/linh-vuc-hoat-dong', fn () => view('business.index', $sharedData()))->name('business');
Route::get(
    '/linh-vuc-hoat-dong/nong-nghiep',
    fn () => view('business.agriculture', $sharedData())
)->name('business.agriculture');

Route::get(
    '/linh-vuc-hoat-dong/nang-luong',
    fn () => view('business.energy', $sharedData())
)->name('business.energy');

Route::get(
    '/linh-vuc-hoat-dong/bat-dong-san',
    fn () => view('business.real-estate', $sharedData())
)->name('business.real_estate');

Route::get(
    '/linh-vuc-hoat-dong/bat-dong-san-cong-nghiep',
    fn () => view('business.industrial', $sharedData())
)->name('business.industrial');

Route::get(
    '/linh-vuc-hoat-dong/du-lich',
    fn () => view('business.hospitality', $sharedData())
)->name('business.hospitality');

Route::get(
    '/linh-vuc-hoat-dong/giao-duc',
    fn () => view('business.education', $sharedData())
)->name('business.education');
Route::get('/trach-nhiem-xa-hoi', fn () => view('social.index', $sharedData()))->name('social');
Route::get('/truyen-thong', fn () => view('media.index', $sharedData()))->name('media');
Route::get('/tuyen-dung', fn () => view('careers.index', $sharedData()))->name('careers');
Route::get('/lien-he', fn () => view('contact.index', $sharedData()))->name('contact');
