<?php wp_enqueue_media(); ?>
<div class="container">
    <div class="row">
        <div class="alert alert-info">
            <h5>Add New Book</h5>
        </div>
        <div class="panel panel-primary">
            <div class="panel-heading">
                Add Book
            </div>
            <div class="panel-body">
                <form class="form-horizontal" action="javascript:void(0)" id="frmAddBook">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="name">Name:</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="author">Author:</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="author" name="author" placeholder="Enter Author Name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="about">About:</label>
                        <div class="col-sm-10">
                            <textarea name="about" id="about" class="form-control" placeholder="Enter Description"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="upload">Upload Book Image:</label>
                        <div class="col-sm-10">
                            <input type="button" class="btn btn-info" id="btnimg" value="Upload image"> Upload Book Image </input>
                            <span id="showimage"></span>
                            <input type="hidden" name="image-name" id="image-name">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                        <div class="checkbox">
                            <label><input type="checkbox"> Remember me</label>
                        </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>