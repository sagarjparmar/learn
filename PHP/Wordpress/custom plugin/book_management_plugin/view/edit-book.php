<?php
wp_enqueue_media();
global $wpdb;
$table_name = $wpdb->prefix."bm_book";
$book_data =$wpdb->get_row(
    $wpdb->prepare("SELECT * FROM $table_name WHERE id = %d",$_REQUEST['id']),ARRAY_A
);
?>
<div class="container">
    <div class="row">
        <div class="alert alert-info">
            <h5>Edit Book</h5>
        </div>
        <div class="panel panel-primary">
            <div class="panel-heading">
                Edit Book
            </div>
            <div class="panel-body">
                <form class="form-horizontal" action="javascript:void(0)" id="frmEditBook">
                    <input type="hidden" value="<?php echo isset($_REQUEST['id'])?intval($_REQUEST['id']):""; ?>" name="book_id" id="book_id">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="name">Name:</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" value="<?= $book_data['name'] ?>" id="name" name="name" placeholder="Enter name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="author">Author:</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" value="<?= $book_data['author'] ?>" id="author" name="author" placeholder="Enter Author Name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="about">About:</label>
                        <div class="col-sm-10">
                            <textarea name="about" id="about" class="form-control"  placeholder="Enter Description"><?= $book_data['about'] ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="upload">Upload Book Image:</label>
                        <div class="col-sm-10">
                            <input type="button" class="btn btn-info" id="btnimg" value="Upload image"> Upload Book Image </input>
                            <span id="showimage">
                                <img src="<?= $book_data['book_image'] ?>" style="height:50px; width:50px">
                            </span>
                            <input type="hidden" name="image-name" id="image-name" value="<?= $book_data['book_image'] ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" id="update" class="btn btn-default">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>