<?php 
require_once("src/database.php");
$db=new Database();
$cat_list=$db ->getAll("SELECT * FROM category LIMIT 3");
require_once("Views/pages/header.php");
?> 
<div class="container ">
    <!-- Banner -->
    <div class="container banner">
        <div class="col-md-4 text-start ">
            <img src="./Public/img/ten du an.png" alt="Logo" style="max-width: 120px; height: auto;">
        </div>
        <div class="row align-items-center">
            <div class="col-md-8">
                <h3 class="mb-0">Sông Sài Gòn Con Sông Của Thành Phố Tôi</h3>
                <p class="text-muted">Dòng chữ nhỏ ở đây</p>
            </div>
        </div>
    </div>
    <section>
            <div class="section-header">Sông Sài Gòn – con sông thành phố tôi</div>
            <div class="section-content">
     
                <div class="card">
                    <div class="row no-gutters">
                        <div class="col-md-3">
                            <img src="./Public/img/songsaigon/3 (5).png" style="width:200px" class="card-img" alt="Ảnh dự án">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title"><a href="#">Sông Sài Gòn Con Sông Của Thành Phố Tôi</a></h5>
                                <p class="card-text">Với chiều dài hơn 80km quanh co trên địa bàn Thành Phố Hồ Chí Minh, dòng chảy sông Sài Gòn qua 3 phân đoạn với những sắc màu và tính chất rất rõ nét mang đậm tính bản địa rất cần được giữ gìn và phát huy. Các dự án quy hoạch đã định hình rõ nét từng phân đoạn dựa theo tính tự nhiên của dòng chảy và địa hình hai bên bờ.
                                    Phân đoạn 1: Từ Tây Ninh đến Phú Long nối Quận 12 (TP.HCM) với tỉnh Bình Dương.
                                    Phân đoạn 2: Từ cầu Phú Long về đến cầu Bình Triệu.
                                    Phân đoạn 3: Từ cầu Bình Triệu đến Trạm mũi đèn đỏ ngã ba sông Đồng Nai.
                                    Thành Phố Hồ Chí Minh đang và sẽ tập trung thiết lập các đồ án quy hoạch trung tâm với chất lượng cao nhất qua các cuộc thi quy hoạch quốc tế, đầu tư xây dựng cơ sở hạ tầng đồng bộ với các tuyến giao thông kết nối hai bên bờ sông các tuyến giao thông công cộng hiện đại, các công trình cảnh quan lớn. Cải tạo công viên ven sông Bạch Đằng, quảng trường Thủ Thiêm, công viên hồ trung tâm Thủ Thiêm, công viên ven sông Khánh Hội, … nhằm tạo lập trung tâm đô thị hiện đại, gắn kết hài hòa với cảnh quan sông nước, gắn kết các công trình di sản đô thị đặc biệt trong khu vực trung tâm thành phố.
                                     </p>
                                <a href="#" class="btn btn-primary">Xem thêm</a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>
<?php
foreach($cat_list as $cat):
?>
<?php 
$category_id =$cat['id'];
$post_list = $db ->getAll("SELECT * FROM post INNER JOIN post_category ON post_id=post_category.post_id WHERE post_category.category_id=$category_id ORDER BY RAND() LIMIT 3 ");

?>
        <!-- Section -->
        <section>
            <div class="section-header"><?= $cat['name']; ?></div>
            <div class="section-content">
                <div class="row">
                    <?php foreach($post_list as $post): ?>
                        <div class="col-md-4">
                            <div class="card">
                            <img src="Public/image/<?=$post['image'];?>" class="card-img-top" alt="Ảnh bài viết">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="#"><?= $post['title']; ?></a></h5>
                                    <p class="card-text">Ngày đăng: <?= $post['create_at']; ?></p>
                                    <p class="card-text"><?= $post['content']; ?> <a href="Views/pages/detail.php?id=<?= $post['id']; ?>" class="btn btn-primary">Xem thêm</a>
</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-primary"><i class="fa-solid fa-thumbs-up"></i> Thích</button>
                                        </div>
                                        <small class="text-muted">10 lượt thích</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    <?php endforeach; ?>
</div>

<?php require_once("Views/pages/footer.php"); ?>
