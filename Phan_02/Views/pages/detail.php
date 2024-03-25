<?php
require_once "../../src/database.php";
$db = new Database();

$post_id = $_GET['id'];
$post_detail = $db->getOne("SELECT * FROM post WHERE id = $post_id");

if ($post_detail) {
    echo "<h1>" . $post_detail['title'] . "</h1>";
    echo "<img src='../../Public/image/{$post_detail['image']}' alt='Hình ảnh bài viết'>";
    echo "<p>" . $post_detail['des'] . "</p>";
} else {
    echo "Không tìm thấy bài viết!";
}
?>
