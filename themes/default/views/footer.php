</div>

<footer>
    <div class="container">
        <nav>
            <?php page_loop(0, 'class="nav nav-center"');?>
        </nav>

        <div class="credits">
        </div>
        <div class="alert alert-info" role="alert">
        Specialized in French souvenirs, PARICI store offers a wide range of gifts, clothing, accessories, home decoration, toys and gadgets that refers to France, its monuments, its culture and everything that would remind a bit of France.
        </div>
        <p class="text-center">Copyright 2016 Souvenirs de Paris - Parici • All Rights Reserved.</p>
    </div>
</footer>

<script>
setInterval(function(){
    resizeCategories();
}, 200);

function updateItemCount(items)
{
    $('#itemCount').text(items);
}

function resizeCategories()
{
    $('.categoryItem').each(function(){
        $(this).height($(this).width());
        var look = $(this).find('.look');
        var margin = 0-look.height()/2;
        look.css('margin-top', margin);
    });
}
</script>

</body>
</html>