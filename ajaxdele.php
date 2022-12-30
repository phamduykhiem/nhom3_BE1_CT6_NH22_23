<script>
function loadWish(key) {
  var actions = 'chay';
                $.ajax({
                url: 'ajaxload.php',
                dataType: 'html',
                method: 'POST',
                data: {
                  'actions' : actions,'key' : key
                },
                success: function(html){
                    $('.wishpro').html(html);
                }
            });
            }
            $('.ooo').click(function () {
              var key = "kkk";
                loadWish(key);
            });
            $(document).on("click",".hhh",function () {
                filterdata("hhh");
            });
</script>
