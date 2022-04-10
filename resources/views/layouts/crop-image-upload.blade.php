<!DOCTYPE html>
<html>
<head>
<title></title>
<meta name="_token" content="{{ csrf_token() }}">

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.js"></script>



</head>
<style type="text/css">
img {
display: block;
max-width: 100%;
}
.preview {
overflow: hidden;
width: 160px; 
height: 160px;
margin: 10px;
border: 1px solid red;
}
.modal-lg{
max-width: 1000px !important;
}
.imagecontainer{
    padding: 10px;
    text-align: center;
    align-content: center;
}

.imgproduct{
    height: 200px;
    margin: auto;
  }
</style>
<body>
    <?php
    

?>

<div class="container mt-5">
<div class="card">
    <?php 
        if (isset($_GET["d_id"])) {  
            if (isset($_GET["editmawsoaa"])) {
                if($mawsoaa[0]->img==1){
                $img=asset('mawsoaa/'.$_GET["d_id"]).'.png'; 

                      ?>
<input type="hidden" value="1" name="img_a" class="del_img_">
<span class="del_img btn btn-danger">حذف الصورة</span>
                <?php
                }else{
                    $img='https://avatars0.githubusercontent.com/u/3456749';
                    ?>
<input type="hidden" value="0" name="img_a">
                <?php
                }
              
            }else{
                $img=asset('imaggs/'.$_GET["d_id"]).'.png';
            }

        }else{
            $img='https://avatars0.githubusercontent.com/u/3456749';
        }
        
        ?>
    <div class="imagecontainer"> <img id="fff" name="article_img" class="imgproduct" src="{{$img}}"></div>
    <input type="hidden" name="<?php echo md5('imgsrc_'); ?>" class="imgsrc_" >
<div class="card-body">
<h5 class="card-title">اختر صورة المقال من فضلك</h5>
<input type="file" name="image"  accept="image/*" style="    width: 100%;" class="image">
</div>
</div>  
</div>
<div style="direction: ltr" class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="modalLabel"></h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
<div class="img-container">
<div class="row">
<div class="col-md-8">
<img id="image" src="https://avatars0.githubusercontent.com/u/3456749">
</div>
<div class="col-md-4">
<div class="preview"></div>
</div>
</div>
</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal">الغاء</button>
<button type="button" class="btn btn-primary" id="crop">قص</button>
</div>
</div>
</div>
</div>
<input type="hidden" class="is_image" value="0">
<script>

var $modal = $('#modal');
var image = document.getElementById('image');
var image1 = document.getElementById('fff');
var cropper;
$("body").on("change", ".image",async function(e){
var files = e.target.files;
var done = function (url) {
image.src = url;
image1.src = url;
$modal.modal('show');
};

var reader;
var file;
var url;
///////////////////////////////////////////////////



    var files__ = e.target.files;
    const fle=files__[0];
    const base64= await convert64(fle);
    
   // $("#image").attr("src",base64);

    $("#fff").val(base64);
    $(".imgsrc_").val(base64);

    ///////////////////////////////////////////

if (files.length > 0) {

    file = files[0];
    if (URL) {
    done(URL.createObjectURL(file));
    } else if (FileReader) {
    reader = new FileReader();
    reader.onload = function (e) {
    done(reader.result);
    };
    reader.readAsDataURL(file);
    }
}
});

const convert64=(file)=>{
        return new Promise((resolve,reject)=>{
            const filereader = new FileReader();
            filereader.readAsDataURL(file);
            filereader.onload=()=>{
                resolve(filereader.result);
            };
            
            filereader.onerror=(error)=>{
                reject(error);
            };
        });
    }
$modal.on('shown.bs.modal', function () {
cropper = new Cropper(image, {
aspectRatio: 1,
viewMode: 3,
preview: '.preview'
});

}).on('hidden.bs.modal', function () {
cropper.destroy();
cropper = null;
});

 //option A
// $(".preventt").submit(function(e){
//     e.preventDefault();
// });



$(document).on("click","#crop",function(){
    canvas = cropper.getCroppedCanvas({width: 500, height: 500,});
canvas.toBlob(function(blob) {
    url = URL.createObjectURL(blob);
    var reader = new FileReader();
    reader.readAsDataURL(blob); 
    
    reader.onloadend = function() {
        var base64data = reader.result; 
        $("#fff").attr("src",base64data);
        $(".imgsrc_").val(base64data);
        $modal.modal('hide');
        $(".is_image").val(1);
        $(".prevent").css("display", 'block');

  }
});
});



//////////////////////////////////////////////



</script>
</body>
</html> 