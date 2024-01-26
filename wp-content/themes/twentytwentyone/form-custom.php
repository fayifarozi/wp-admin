<?php
/**
 * Template Name: Form-custom
 */

get_header(); 
?>
<div class="container">
    <form method="POST">
        <div class="mb-3 row">
            <label for="inputName" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputName" name="namefull">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputEmail" name="email">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="inputComment" class="col-sm-2 col-form-label">Comments</label>
            <div class="col-sm-10">
                <textarea class="form-control" id="inputComment" name="comment"></textarea>
            </div>
        </div>
        <button type="submit" name="insert" class="btn btn-primary">Submit</button>
    </form>
</div>

<?php
if(isset($_POST['insert'])){
    
    global $wpdb;
    $name = $_POST['namefull'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];

    $result = $wpdb->insert(
        $wpdb->prefix . 'custom_comments',
        array(
            'name' => $name,
            'email' => $email,
            'comment' => $comment
        )
    );

    if($result == true) {
        echo '<script> alert("Data berhasil disimpan") </script>';
    } else {
        echo '<script> alert("Data gagal disimpan") </script>';
    }
}
get_footer();

?>
