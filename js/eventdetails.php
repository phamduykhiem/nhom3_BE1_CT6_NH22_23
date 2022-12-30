<?php
session_start();
echo '<script> 
$(document).on("click",".addcc",function () {
    let idproduct = this.id;
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
        if (xhttp.readyState == 4 && xhttp.status == 200) { 
            const bao = JSON.parse(this.responseText);
            alert(bao.thongbao);
            sl1.textContent = parseInt(sl1.textContent) + parseInt(bao.soLuong);
            $(".cartpro").html(bao.tex);
        }
        }
        xhttp.open("GET", "updatecart.php?uid='.$_SESSION['user'].'&id="+idproduct+"&soLuong=1", true);
        xhttp.send();
})
				</script>';
?>