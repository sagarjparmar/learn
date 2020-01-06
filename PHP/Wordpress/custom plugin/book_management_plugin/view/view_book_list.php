<?php 
    global $wpdb;
    $table_name = $wpdb->prefix."bm_book";
    $booklist = $wpdb->get_results(
        $wpdb->prepare(
            "SELECT * FROM $table_name ORDER BY id DESC",
            ""
        ),
        ARRAY_A
    );
   
?>
<div class="container">
    <div class="alert alert-info">
        <h5>My Book List</h5>
    </div>
    <div class="row">
        <div class="panel panel-primary">
            <div class="panel-heading">Panel Heading</div>
            <div class="panel-body">
                <table id="example" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>Serial No</th>
                            <th>Book Name</th>
                            <th>Author</th>
                            <th>Description</th>
                            <th>Book Image</th>
                            <th>Created at</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php
                                if(count($booklist)>0){
                                    $i = 1;
                                    foreach($booklist as $key => $value){

                            ?>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $value['name']; ?></td>
                            <td><?php echo $value['author']?></td>
                            <td><?php echo $value['about']?></td>
                            <td>
                                <img src="<?php echo $value['book_image']?>" style="width:80px; height:80px;">
                            </td>
                            <td><?php echo $value['created_at']?></td>
                            <td>
                                <a class="btn btn-info" href="admin.php?page=edit-book&id=<?= $value['id'] ?>">Edit</a>
                                <a class="btn btn-danger deleteBtn" href="javascript:void(0)" data-id="<?= $value['id']; ?>">Delete</a>
                            </td>
                        </tr>
                        <?php
                                    }
                                }
                        ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Serial No</th>
                            <th>Book Name</th>
                            <th>Author</th>
                            <th>Description</th>
                            <th>Book Image</th>
                            <th>Created at</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>