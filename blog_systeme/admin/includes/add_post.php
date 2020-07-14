
<?php 
  $sql="SELECT * FROM categories";
 $res=mysqli_query($connection,$sql);
?>

<h2>Add Post</h2>
<div class="container">
<div class="row">
    <div class="row">
        <div class="col-sm-8">
        <form action="includes/functions.php" method="post" enctype="multipart/form-control">

        <div class="form-group">
        <label for=""> Post title</label>
        <input type="text" name="title" placeholder="Post Title" class="form-control"> 
        </div>

        <div class="form-group">
        <label for=""> Post Author</label>
        <input type="text" name="title"  placeholder="Post Author" class="form-control"> 
        </div>

        <div class="form-group">
        <label for=""> Post Category</label>
        <select name="category" class="from-control">
        <?php
        // $sql="SELECT * FROM categories";
        // $ress=mysqli_query($connection,$sql);
        while ($row=mysqli_fetch_array($ress)) {
            $cat_title=$row['cat_title'];
            
            # code...
        }


            ?>

        
        </select>
 

        </div>

        <div class="form-group">
        <label for=""> Post Category ID</label>
        <input type="text" name="title placeholder="Post Title class="form-control"> 
        <select name="category" class="from-control"></select>
        <?php
         $sql="SELECT * FROM categories";
         $res=mysqli_query($connection,$sql);
        while ($row=mysqli_fetch_array($res)) {
            $cat_title=$row['cat_title'];
            $cat_id=$row['cat_id'];
            echo "<option value='cat_id'>$cat_id -  $cat_title</option> ";

            
            # code...
        }


            ?>
        </div>

        <div class="form-group">
        <label for=""> Post Tags</label>
        <input type="text" name="title" placeholder="Seperate tags with a comma" class="form-control"> 
        </div>


        <div class="form-group">
        <label for=""> Post Status</label>
        <select name="status" class="form-control">
        <option value="draft">Draft</option>
        <option value="published">Published</option>
        </select>
        </div>

        <div class="form-group">
        <label for=""> Post image</label>
        <input type="file" name="publish" placeholder="" value="Publish post" class="btn btn-primary"> 
        </div>
        
        </form>
        </div>
    </div>

</div>
</div>