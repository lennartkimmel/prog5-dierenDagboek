<div class="container pl-0 pr-0">
    <button class="btn btn-success mt-1 btn-lg btn-block" onclick="likePost(this, '{{ $post_id }}')">{{ $liked ? "Unlike" : "Like" }}</button>
</div>

<script>

    var likePost = function(button, id) {

        axios.post('/like/' + id)
        .then(response => {
            if(button.innerText === "Like") {
                
                button.innerText = "Unlike";
            } else {
                button.innerText = "Like";
            }
        })
        .catch(errors=> {
            if (errors.response.status == 401) {
                window.location = '/login';
            }
        });
    }

</script>