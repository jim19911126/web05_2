<div class="nav" style="margin-bottom: 20px;">

    目前位置：首頁 > 分類網誌 > <span id='NavType'>慢性病防治</span>
</div>
<fieldset style="width:120px; display:inline-block; vertical-align:top">
    <legend>分類網誌</legend>
    <div><a class="type-link" data-type="1">健康新知</a></div>
    <div><a class="type-link" data-type="2">菸害防制</a></div>
    <div><a class="type-link" data-type="3">癌症防治</a></div>
    <div><a class="type-link" data-type="4">慢性病防治</a></div>
</fieldset>
<fieldset style="width: 580px; display: inline-block;">
    <legend>文章列表</legend>
    <div id="TypeList"></div>
    <div id="Post"></div>

</fieldset>

<Script>
    getList(1);


    $(".type-link").on("click", function name(params) {
        let type = $(this).text();
        $("#NavType").text(type);
        let typeId = $(this).data("type");
        getList(typeId);
        // $.get("api/get_type_list.php", {type:typeId},function name(list) {
        //     $("#Post").html("");
        //     $("#TypeList").html(list);

        // })

    })

    function getPost(id) {
        $.get("./api/get_post.php", { id }, function name(post) {
            $("#TypeList").html("");
            $("#Post").html(post);
        })
    }
    $(".post-item").on("click", function name(params) {
        let postId = $(this).data("post");
        getPost(postId);

    })

    function getList(type) {
        $.get("api/get_type_list.php", { type }, function name(list) {
            $("#Post").html("");
            $("#TypeList").html(list);
            $(".post-item").on("click", function name(params) {
                let postId = $(this).data("post");
                getPost(postId);

            })
        })
}
</Script>