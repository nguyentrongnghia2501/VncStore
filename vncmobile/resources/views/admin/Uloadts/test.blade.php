<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

     <form action="/admin/test/ps/" method="POST" enctype="multipart/form-data">
            <label for="">name</label>
            <input type="text" name="name" id="name">
            <br>
            <label for="">img</label>
            <input type="file" name="thum" id="thum">
            <input type="submit" value="tải lên">
            @csrf
            
             </div>
     </form>
                     <?php  
                        $menus = App\Models\product::where('thum')->get();
                        
                        ?>
                      
    
</body>
</html>