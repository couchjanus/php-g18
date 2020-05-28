<section class="filter-section">
    <h6>Filters</h6>
    <div class="filters">
        <h5 class="filters__title">Categories</h5>
        <?php foreach ($categories as $category):?>
            <div class="filters__item">
                <div class="checkbox">
                    <input id="checkbox-<?=$category->id;?>" data="<?=$category->id;?>" type="checkbox" class="categoryChack"/>
                    <label for="checkbox-<?=$category->id;?>"><?=$category->name;?><span class="box"></span>
                        <div class="tooltip top" data-tooltip="<?=$category->name;?>"><span><i class="icon-info"></i></span></div>
                    </label>
                </div>
                <span class="badge status-primary"><?=$category->count_product;?></span>
            </div>
        <?php endforeach;?>
    </div>
    
    <div class="filters">
        <h5 class="filters__title">Sort By:</h5>
        <div class="filters__item">
            <div class="checkbox">
                <input id="checkbox-5" type="checkbox" />
                <label for="checkbox-5">Price<span class="box"></span></label>
            </div><span class="badge status-primary">9</span>
        </div>
        <div class="filters__item">
            <div class="checkbox">
                <input id="checkbox-6" type="checkbox" checked="checked" />
                <label for="checkbox-6">Popular<span class="box"></span></label>
            </div><span class="badge status-primary">12</span>
        </div>
        <div class="filters__item">
            <div class="checkbox">
                <input id="checkbox-7" type="checkbox" />
                <label for="checkbox-7">Newest<span class="box"></span></label>
            </div><span class="badge status-primary">17</span>
        </div>
        <div class="filters__item">
            <div class="checkbox">
                <input id="checkbox-8" type="checkbox" />
                <label for="checkbox-8">Oldest<span class="box"></span></label>
            </div><span class="badge status-primary">3</span>
        </div>
    </div>

    <script>
    //     let categoryChack = document.querySelectorAll(".categoryChack");
    //     categoryChack.forEach(item => {
    //         item.addEventListener('click', function(e){
    //             if (e.target.checked == true) {
    //                 alert("you checked this box");
    //                 // api/categories/{id}
    //             }
    //         })
    // });
    </script>
</section>


