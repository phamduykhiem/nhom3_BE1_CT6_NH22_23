<?php 

?>
<style>
    .mystyle
    {
        display: none;
    }
</style>
<script>
        $('#price-max').val("1000000000");
        const kk = document.getElementById("kk");
        const lili = document.getElementById("lili");
        const hh = document.getElementById("hh");
        const jj = document.getElementById("jj");
        const hehe = document.getElementById("hehe");
        const wishlist = document.querySelectorAll("#wishlist");
        const addc = document.querySelectorAll("#addc");
        const getid = document.querySelectorAll("#getid");
        const getbut1 = document.querySelectorAll(".but1");
        const getbut = document.querySelectorAll(".but");
        const getInt = document.querySelectorAll(".int");
        const sl = document.getElementById("sl");
        const sl1 = document.getElementById("sl1");
        getbut.forEach(function(item,index){
            item.addEventListener("click", function(){

            let input = Number(getInt[index].value);
            if(input>1)
            {
            input = input - 1;
                getInt[index].value = input;
            }
        });
        });
        getbut1.forEach(function(item,index){
            item.addEventListener("click", function(){
            let input = Number(getInt[index].value);
            input = input + 1;
            getInt[index].value = input;
        });
        });
        function filterdata(id) {
                $.ajax({
                url: 'wishlistdelete.php',
                dataType: 'html',
                method: 'POST',
                data: {
                  'typeid' : id
                },
                success: function(html){
                  if(html=="Sai")
                  {
                    alert("Có nhiều sản phẩm thuộc loại này nên không thể xóa")
                  }
                  else
                  {
                    $('.bodyyy').html(html);
                  }
                }
            });
            }
</script>
<?php 
if(isset($_SESSION['user']))
{
    $cart=new Cart();
    $getcart=$cart->getcartids($_SESSION['user']);
    $wishlist=new Wishlist();
    $getwishlist=$wishlist->getwishtype($_SESSION['user']);
    $soLuongCart = 0;
    foreach ($getcart as $key => $value) {
        $soLuongCart += $value['soLuong'];
    }
    echo '<script>sl1.textContent = '.$soLuongCart.'</script>';
    $soLuongWish = 0;
    foreach ($getwishlist as $key => $value) {
        $soLuongWish++;
    }
    echo '<script>sl.textContent = '.$soLuongWish.'</script>';
   echo' <script>
            $(".wishpro").on("click",".kkk",function () {
            let idproduct = this.id;
            alert("Xóa thành công");
            var xxhttp = new XMLHttpRequest();
                xxhttp.onreadystatechange = function() {
                if (xxhttp.readyState == 4 && xxhttp.status == 200) {
                    const TBXoaWL = JSON.parse(this.responseText);
                    sl.textContent = TBXoaWL[0].soLuong - 1;
                    $(".wishpro").html(TBXoaWL.tex);
                }
                }
                xxhttp.open("GET", "wishlistdelete.php?uid='.$_SESSION['user'].'&id="+idproduct+"",true);                
                xxhttp.send();
            });
</script>';
echo' <script>
        $(".cartpro").on("click",".hhh",function () {
            let idproduct = this.id;
            var vxhttp = new XMLHttpRequest();
                vxhttp.onreadystatechange = function() {
                if (vxhttp.readyState == 4 && vxhttp.status == 200) {
                    const bao1 = JSON.parse(this.responseText);
                    alert(bao1.thongbao);
                    let so3 = parseInt(bao1.tong) - parseInt(bao1.soLuong);
                    sl1.textContent = so3;   
                    $(".cartpro").html(bao1.tex);
                }
                }
                vxhttp.open("GET", "cartdelete.php?uid='.$_SESSION['user'].'&id="+idproduct+"",true);                
                vxhttp.send();
    });
</script>';
echo' <script>
        $(document).on("click",".phanLoai",function () {
            let typepro = this.id;
            var vxhttp = new XMLHttpRequest();
                vxhttp.onreadystatechange = function() {
                if (vxhttp.readyState == 4 && vxhttp.status == 200) {
                    const bao1 = JSON.parse(this.responseText);
                    $(".produu").html(bao1.tex);
                }
                }
                vxhttp.open("GET", "load.php?uid='.$_SESSION['user'].'&typepro="+typepro+"",true);                
                vxhttp.send();
    });
</script>';
echo' <script>
        $(document).on("click",".phanLoaiSell",function () {
            let typeprotopsell = this.id;
            var vxhttp = new XMLHttpRequest();
                vxhttp.onreadystatechange = function() {
                if (vxhttp.readyState == 4 && vxhttp.status == 200) {
                    const bao1 = JSON.parse(this.responseText);
                    $(".prosell").html(bao1.tex);
                }
                }
                vxhttp.open("GET", "load.php?uid='.$_SESSION['user'].'&typeprotopsell="+typeprotopsell+"",true);                
                vxhttp.send();
    });
</script>';
    echo' <script> 
    hh.style.display = "block";
    hehe.style.display = "block";
    </script>';
    echo' <script>
    wishlist.forEach(function(item,index){
            item.addEventListener("click", function(){
            let idproduct = getid[index].textContent;
            if(item.style.color == "red")
            { 
                
                item.style.color = "black";
                alert("Đã xóa khỏi wishlist");
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                if (xhttp.readyState == 4 && xhttp.status == 200) {
                    const TBXoaWL = JSON.parse(this.responseText);
                    sl.textContent = TBXoaWL[0].soLuong - 1;
                    $(".wishpro").html(TBXoaWL.tex);
                }
                }
                xhttp.open("GET", "wishlistdelete.php?uid='.$_SESSION['user'].'&id="+idproduct+"",true);
                xhttp.send();
            }
            else
            {
                item.style.color = "red";
                alert("Đã thêm vào wishlist");
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                if (xhttp.readyState == 4 && xhttp.status == 200) {
                    const TBXoaWL = JSON.parse(this.responseText);
                    sl.textContent = TBXoaWL[0].soLuong + 1;
                    $(".wishpro").html(TBXoaWL.tex);
                }
                }
                xhttp.open("GET", "wishlistadd.php?uid='.$_SESSION['user'].'&id="+idproduct+"",true);
                xhttp.send();
            }
        });
        });
        </script>';
        foreach($getwishlist as $value)
    {
        echo' <script>
        getid.forEach(function(item,index){
                let idproduct = item.textContent;
                if('.$_SESSION['user'].'== '.$value['uid'].'&&idproduct=='.$value['id'].')
                {
                    wishlist[index].style.color = "red"; 
                    
                }
            });
            </script>';
    }
    echo' <script>
    addc.forEach(function(item,index){
        item.addEventListener("click", function(){
        let idproduct = getid[index].textContent;
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
        if (xhttp.readyState == 4 && xhttp.status == 200) { 
            const bao = JSON.parse(this.responseText);
            alert(bao.thongbao);
            sl1.textContent = parseInt(sl1.textContent) + parseInt(bao.soLuong);
            $(".cartpro").html(bao.tex);
        }
        }
        xhttp.open("GET", "updatecart.php?uid='.$_SESSION['user'].'&id="+idproduct+"&soLuong="+getInt[index].value+"", true);
        xhttp.send();
    });
    });
    </script>';
}
else
{
    echo ' <script>
    lili.addEventListener("click", function(){
        hehe.style.display = "none";
        location.replace("login.php");
    });
    </script>';
    echo' <script>
        addc.forEach(function(item) {
            item.addEventListener("click", function(){
            location.replace("login.php");
        });
        });
        </script>';
        echo' <script>
        wishlist.forEach(function(item) {
            item.addEventListener("click", function(){
            location.replace("login.php");
        });
        });
        </script>';
    echo' <script>
        kk.addEventListener("click", function(){
            hh.style.display = "none";
            location.replace("login.php");
        });
        </script>';
    echo ' <script>
    jj.addEventListener("click", function(){
        hehe.style.display = "none";
        location.replace("login.php");
    });
    </script>';
}
?>

    

