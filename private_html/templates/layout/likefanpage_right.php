<style>
  #fanpage_facebook
  {
    position:fixed;
    top:30%;
    right:-300px;
    cursor:pointer;
    z-index:97;
  }
</style>
<div class="fanpage_facebook" id="fanpage_facebook">
    <div style="float:left">
        <img src="images/faceb.png" width="38" height="auto"  alt="Facebook"/>
    </div>
    <div style="float:left">
       <div class="fb-page" data-href="<?=$company['fanpage']?>" data-width="300px" data-height="233px" data-small-header="true" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="true" data-show-posts="true">
            <div class="fb-xfbml-parse-ignore">
                <blockquote cite="<?=$company['fanpage']?>"><a href="<?=$company['fanpage']?>"><?=$company['title_vi']?></a></blockquote>
            </div>
        </div>
    </div>
</div>


