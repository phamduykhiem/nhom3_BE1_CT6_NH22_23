<script>
     $(document).ready(function() {
            function filterdata() {
                var action = 'chay';
                var minimum_price = $('#price-min').val();
                var maximum_price = $('#price-max').val();
                var brand = getFilter('brand');
                $.ajax({
                url: 'ajax.php',
                dataType: 'html',
                method: 'POST',
                data: {
                        'brand' : brand,'action':action,'type' :<?php echo $_GET['Typeid']; ?>,min : minimum_price,max : maximum_price
                },
                success: function(html){
              $('.hahahaha').html(html);
                }
            });
            }
            function getFilter(name) {
                var filter = [];
                $('.'+name+':checked').each(function() {
                    filter.push($(this).val());
            });
            return filter;
            }
            $('.brand').click(function () {
                filterdata();
            });
        });    
</script>